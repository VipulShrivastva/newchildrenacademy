<?php /*Template Name: Portfolio Template*/
get_header();

	#Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-top-code']))
		echo wp_kses($dttheme_integration['single-page-top-code'],$dt_allowed_html_tags );

	$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$post_layout = array_key_exists("layout",$tpl_default_settings) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_left_sidebar = $show_right_sidebar =  $show_sidebar = false;
	$sidebar_class = "";

	# Global Page Layout
	if( !is_null( $GLOBALS['enable_global_page_layout'] ) ) {
		$post_layout = $GLOBALS['global_page_layout'];
	}
	# Global Page Layout	

	switch($post_layout):
		case 'with-left-sidebar':
			$post_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	$show_sidebar = true;
			$sidebar_class 	=	"left-sidebar";
		break;

		case 'with-right-sidebar':
			$show_right_sidebar = $show_sidebar = true;
			$post_layout 	=	"page-with-sidebar with-right-sidebar";
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = $show_sidebar = true;
			$post_layout 	=	"page-with-sidebar page-with-both-sidebar";
			$sidebar_class 	=	"secondary-has-both-sidebar";
		break;
	endswitch;

	if( $show_left_sidebar ) :?>
		<!-- ** Secondary Left Section ** -->
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('left'); ?>
		</section>
		<!-- ** Secondary Left Section End ** --><?php
	endif;?>

		<!-- ** Primary Section** -->
		<section id="primary" class="<?php echo esc_attr($post_layout);?>"><?php
			if( have_posts() ):
				while( have_posts() ):
					the_post();
					get_template_part( 'framework/loops/content', 'page' );
				endwhile;
			endif;?>

			<div class="dt-sc-clear"></div>

			<!-- Portfolio Template Starts Here -->
			<?php $post_per_page	=	$tpl_default_settings['portfolio-post-per-page'];
				$post_layout = array_key_exists("portfolio-post-layout",$tpl_default_settings) ? $tpl_default_settings['portfolio-post-layout'] : "one-third-column";
				switch($post_layout):
					case 'one-third-column':
						$post_class = $show_sidebar ? " portfolio column dt-sc-one-third with-sidebar" : " portfolio column dt-sc-one-third";
						$columns = 3;
					break;

					case 'one-fourth-column':
						$post_class = $show_sidebar ? " portfolio column dt-sc-one-fourth with-sidebar" : " portfolio column dt-sc-one-fourth";
						$columns = 4;
					break;
				endswitch;

				#Pagination
				$paged = 1;
				if ( get_query_var('paged') ) { 
					$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
					$paged = get_query_var('page');
				}

				$args = array();

				$categories = isset($tpl_default_settings['portfolio-categories']) ? array_filter($tpl_default_settings['portfolio-categories']) : array();
				if( empty($categories) ):
					$args = array( 'paged' => $paged ,'posts_per_page' => $post_per_page,'post_type' => 'dt_portfolios');
				else:
					$args = array(
						'orderby' => 'ID',
						'order' => 'ASC',
						'paged' => $paged,
						'posts_per_page' => $post_per_page,
						'tax_query' => array( 
							array(
								'taxonomy' => 'dt_portfolio_entries',
								'field' => 'id',
								'operator' => 'IN',
								'terms' => $categories
							)
						)
					);
				endif;

				query_posts($args);
				if( have_posts() ) :
					$i = 1;
					$count = $wp_query->post_count;

					#Sorting Container
						$c = isset($tpl_default_settings['portfolio-categories']) ? array_filter($tpl_default_settings['portfolio-categories']) : array();
						if(empty($c)):
							$c = get_categories('taxonomy=dt_portfolio_entries&hide_empty=1');
						else:
							$args = array('taxonomy'=>'dt_portfolio_entries','hide_empty'=>1,'include'=>$c);
							$c = get_categories($args);
						endif;

						if( sizeof($c) > 1 ) :
							if( array_key_exists("filter",$tpl_default_settings) && (!empty($c)) ) :
								$post_class .= " all-sort ";?>
								<div class="dt-sc-sorting-container">
									<a href="#" class="active-sort" title="" data-filter=".all-sort"><?php _e('All','dt_themes'); echo " ({$count})";?></a><?php
									foreach( $c as $category ) :?>
										<a href='#' data-filter=".<?php echo esc_attr($category->category_nicename);?>-sort"><?php echo esc_attr($category->cat_name)." ($category->category_count)";?></a><?php
									endforeach;?>
								</div><?php
							endif;
						endif;
					#Sorting Container Ends?>

					<div class="dt-sc-portfolio-container"><?php
						while( have_posts() ) :
							the_post();
							$the_id = get_the_ID();

							$temp_class = "";
							if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
							if($i == $columns) $i = 1; else $i = $i + 1;

	                        $sort = " ";
	                        if( array_key_exists("filter",$tpl_default_settings) ):

	                        	$item_categories = get_the_terms( $the_id, 'dt_portfolio_entries' );
	                        	if(is_object($item_categories) || is_array($item_categories)):
	                        		foreach ($item_categories as $category):
	                        			$sort .= $category->slug.'-sort ';
	                        		endforeach;
	                            endif;
	                        endif;

	                        $portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
	                        $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

	                        $style = $overlay = "";
	                        if( isset($portfolio_item_meta['hover-color']) ):
	                        	#$overlay = 'style ="color:'.$portfolio_item_meta['hover-color'].';"';
								$overlay = 'color:'.$portfolio_item_meta['hover-color'];
	                        	$rgb = hex2rgb( $portfolio_item_meta['hover-color']);

	                        	if( isset($portfolio_item_meta['hover-opacity']) ):
	                        		$opacity  = $portfolio_item_meta['hover-opacity'];	
	                        		$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]},{$opacity})";
	                        	else:
	                        		$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]})";
	                        	endif;
	                        endif;	

	                        $popup = $image = "//placehold.it/1170x1010&text=DesignThemes";
	                        if( array_key_exists('items_name', $portfolio_item_meta) ) {
	                        	$item =  $portfolio_item_meta['items_name'][0];
	                        	$popup = $portfolio_item_meta['items'][0];
	                        	if( "video" === $item ) {
	                        		$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
	                        		if( !empty($items) ) {
	                        			$image = $portfolio_item_meta['items'][key($items)];
	                        		} else {
	                        			$image = "//placehold.it/1170x1010&text=DesignThemes";
	                        		}
	                        	} else {
	                        		$image = $portfolio_item_meta['items'][0];
	                        	}
	                        }?>
	                        <div id="<?php echo esc_attr("dt_portfolios-{$the_id}");?>" class="<?php echo esc_attr($temp_class.$sort);?>">
	                        	<div class="portfolio-thumb">
	                        		<img class="item-mask" src="<?php echo esc_url( get_template_directory_uri() );?>/images/portfolio-mask.png" alt="" title="">
	                        		<img src="<?php echo esc_attr($image);?>" alt="" title="" width="1170" height="1010">
	                        		<div class="image-overlay" style="<?php echo esc_attr($style);?>">
	                        			<a style="<?php echo $overlay;?>" href="<?php the_permalink();?>" title="" class="link"> <span class="fa fa-link"> </span> </a>
	                        			<a style="<?php echo $overlay;?>" href="<?php echo esc_attr($popup);?>" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
	                        		</div>
	                        	</div>
	                        	<div class="portfolio-detail">
	                        		<div class="portfolio-title">
	                        			<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
	                        			<?php the_terms( $the_id, 'dt_portfolio_entries', '<p>', ' , ','</p>' ); ?>
	                        		</div>
	                        	</div>
	                        </div><?php
	                    endwhile;?>
                    </div><?php
				endif;?>
			<!-- Portfolio Template Ends Here -->
			<div class="pagination">
				<div class="prev-post"><?php previous_posts_link(__('Prev','dt_themes'));?></div>
				<?php echo dttheme_pagination();?>
				<div class="next-post"><?php next_posts_link( __('Next','dt_themes') );?></div>
			</div>

		</section>
		<!-- ** Primary Section End ** -->

	<?php if( $show_right_sidebar ) : ?>
		<!-- ** Secondary Right Section ** -->
		<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('right'); ?>
		</section>
		<!-- ** Secondary Right Section End ** --><?php 
	endif;

	#Page Top Code Section
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-bottom-code']))
		echo wp_kses($dttheme_integration['single-page-bottom-code'],$dt_allowed_html_tags );

	get_footer();?>