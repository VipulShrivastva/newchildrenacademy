<?php get_header();

	#Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-top-code']))
		echo wp_kses($dttheme_integration['single-page-top-code'],$dt_allowed_html_tags );

	$page_layout  = dttheme_option( 'specialty', 'gallery-archives-layout' );
	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";
	$show_left_sidebar = $show_right_sidebar = $show_sidebar = false;
	$sidebar_class = "";

	switch($page_layout):
		case 'with-left-sidebar':
			$page_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	$show_sidebar = true;
			$sidebar_class 	=	"left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout 	=	"page-with-sidebar with-right-sidebar";
			$show_right_sidebar = $show_sidebar = true;
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = $show_sidebar = true;
			$page_layout 	=	"page-with-sidebar page-with-both-sidebar";
			$sidebar_class 	=	"secondary-has-both-sidebar";
		break;
	endswitch;

	$post_layout  = dttheme_option( 'specialty', 'gallery-archives-post-layout');
	switch($post_layout):
		case 'one-fourth-column':
			$post_class = $show_sidebar ? " portfolio column dt-sc-one-fourth with-sidebar " : " portfolio column dt-sc-one--fourth";
			$columns = 4;
		break;

		case 'one-third-column':
			$post_class = $show_sidebar ? " portfolio column dt-sc-one-third with-sidebar" : " portfolio column dt-sc-one-third";
			$columns = 3;
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
		<section id="primary" class="<?php echo esc_attr($page_layout);?>">
			<div class="dt-sc-portfolio-container"><?php
				if( have_posts() ) :
					$i = 1;
					while( have_posts() ) :
						the_post();

						$the_id = get_the_ID();

						$temp_class = "";
						if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
						if($i == $columns) $i = 1; else $i = $i + 1;

						$portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
						$portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

						$style = $overlay = "";
						if( isset($portfolio_item_meta['hover-color']) ):
							$overlay = 'style = "color:'.$portfolio_item_meta['hover-color'].';" ';
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
	                    <div id="<?php echo "dt_portfolios-{$the_id}";?>" class="<?php echo esc_attr($temp_class);?>">
	                    	<div class="portfolio-thumb">
	                    		<img class="item-mask" alt="" title=""
	                    			src="<?php echo esc_url( get_template_directory_uri() );?>/images/portfolio-mask.png">

	                        	<img src="<?php echo esc_attr($image);?>" alt="" title="" width="1170" height="1010">
	                        	<div class="image-overlay" style="<?php echo esc_attr($style);?>">
	                        		<a <?php echo esc_attr($overlay);?> href="<?php the_permalink();?>" title="" class="link"> 
	                        			<span class="fa fa-link"> </span> </a>

	                        		<a <?php echo esc_attr($overlay);?> href="<?php echo esc_attr($popup);?>" data-gal="prettyPhoto[gallery]" class="zoom">
	                        			<span class="fa fa-search"></span></a>
	                        	</div>
	                        </div>
	                        <div class="portfolio-detail">
	                        	<div class="portfolio-title">
	                        		<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
	                        		<?php the_terms( $the_id, 'dt_portfolio_entries', '<p>', ' , ','</p>' ); ?>
	                        	</div>
	                        </div>
	                    </div><?php	                    
					endwhile;
				endif;?>
			</div>
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