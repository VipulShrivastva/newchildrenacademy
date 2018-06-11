<?php $tpl_default_settings = get_post_meta($post->ID,'_portfolio_settings',TRUE);
	$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();
	
	$page_layout = array_key_exists("page-layout",$tpl_default_settings) ? $tpl_default_settings['page-layout'] : "content-full-width";
  	$show_left_sidebar = $show_right_sidebar = false;
	$sidebar_class = "";

	switch($page_layout):
		case 'with-left-sidebar':
			$page_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	true;
			$sidebar_class 	=	"left-sidebar";
		break;

		case 'with-right-sidebar':
			$show_right_sidebar = 	true;
			$page_layout 	=	"page-with-sidebar with-right-sidebar";
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = true;
			$page_layout 	=	"page-with-sidebar page-with-both-sidebar";
			$sidebar_class 	=	"secondary-has-both-sidebar";
		break;
	endswitch;

	$portfolio_layout = array_key_exists("portfolio-layout", $tpl_default_settings) ? $tpl_default_settings['portfolio-layout'] : "full-width-portfolio";
	$container_start =  $container_middle =  $container_end = "";
	switch ($portfolio_layout) {

		case 'full-width-portfolio':
			 $container_middle = "<div class='dt-sc-hr-invisible-small'></div>";
		break;

		case 'with-left-portfolio':
		  $container_start	 =	'<div class="column dt-sc-two-third first">';
		  $container_middle	 =	'</div>';
		  $container_middle  .=	'<div class="column dt-sc-one-third last">'; 
		  $container_end	 =	'</div>';
		break;

		case 'with-right-portfolio':
		  $container_start	 =	'<div class="column dt-sc-two-third right-gallery first">';
		  $container_middle	 =	'</div>';
		  $container_middle  .=	'<div class="column dt-sc-one-third last">'; 
		  $container_end	 =	'</div>';
		break;
	}?>

	<?php if( $show_left_sidebar ) : ?>
		<!-- ** Secondary Left Section ** -->
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('left'); ?>
		</section>
		<!-- ** Secondary Left Section End ** -->
	<?php endif;?>

	<!-- ** Primary Section** -->
	<section id="primary" class="<?php echo esc_attr($page_layout);?>">
		<!-- #post-<?php the_ID()?> starts -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single'); ?>>
			<?php echo $container_start;
				if( array_key_exists("items_name",$tpl_default_settings) ) { ?>
					<ul class="portfolio-slider"><?php
						foreach( $tpl_default_settings["items_name"] as $key => $item ){
							$current_item = $tpl_default_settings["items"][$key];
							if( "video" === $item ) {
								echo "<li>".wp_oembed_get( $current_item )."</li>";
							} else {
								echo "<li> <img src='{$current_item}' alt='' title='' /></li>";
							}
						}?>
					</ul><?php
				}

				echo $container_middle; ?>

			<?php the_title( '<h2>', '</h2>' );
				the_content();

				if(array_key_exists("show-social-share",$tpl_default_settings)):
					echo '<div class="dt-gallery-share">';
					dttheme_social_bookmarks('sb-portfolio');
					echo '</div>';
				endif;?>

			<div class="project-details">
				<h3><?php _e('Class Activities','dt_themes');?></h3>

				<?php the_terms( $post->ID,
						'dt_portfolio_entries',
						'<p> <span class="fa fa-gift"></span>'.__(" Category","dt_themes").':',', ','</p>'); ?>

				<?php if( isset( $tpl_default_settings["location-info"] ) ): ?>
                		<p><span class="fa fa-location-arrow"></span> <?php _e("Location Info","dt_themes");?> : 
                		<?php echo esc_html($tpl_default_settings["location-info"]);?></p>
                <?php endif;?>

                <?php if( isset( $tpl_default_settings["website-link"] ) ): ?>
                		<p><span class="fa fa-globe"></span> <?php _e('Website','dt_themes');?> : 
                			<a target="_blank" href="<?php echo $tpl_default_settings["website-link"];?>"><?php 
                				$url = $tpl_default_settings["website-link"];
                				$url = preg_replace("(^https?://)", "", $url );
                				echo esc_html($url);?></a>
                		</p>
                <?php endif;?>

                <p><span class="fa fa-calendar"></span><?php _e('Date','dt_themes');?> : <?php the_date("d M Y");?></p>
			</div>

			<?php echo $container_end; ?>

			<!-- **Post Nav** -->
			<div class="post-nav-container">
				<div class="post-prev-link"><?php previous_post_link('%link','<i class="fa fa-arrow-circle-left"> </i> %title<span> ('.__('Prev Entry','dt_themes').')</span>');?> </div>
				<div class="post-next-link"><?php next_post_link('%link','<span> ('.__('Next Entry','dt_themes').')</span> %title <i class="fa fa-arrow-circle-right"> </i>');?></div>
            </div><!-- **Post Nav - End** -->
		</article><!-- #post-<?php the_ID()?> Ends -->

		<?php if(array_key_exists("show-related-items",$tpl_default_settings)) : ?>
			<!-- Related Posts Start -->
				<div class="dt-sc-hr-invisible"></div>
				<h2 class="dt-sc-hr-title"><?php _e('Related Projects','dt_themes');?></h2><?php

				$category_ids = array();
				$input  = wp_get_object_terms( $post->ID, 'dt_portfolio_entries');
				foreach($input as $category) $category_ids[] = $category->term_id;

				$args = array(	'orderby' => 'rand',
					'showposts' => '4' ,
					'post__not_in' => array($post->ID),
					'tax_query' => array(
						array( 
							'taxonomy'=>'dt_portfolio_entries',
							'field'=>'id',
							'operator'=>'IN',
							'terms'=>$category_ids
						)
					));
				query_posts($args);
				if( have_posts() ) :
					$count = 1;
					while( have_posts() ) :
						the_post();
						$the_id = get_the_ID();
						$first = ( $count === 1 ) ? " first" : "";

						$portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
	                    $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

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
	                    <div id="<?php echo esc_attr("dt_portfolios-{$the_id}");?>" class="portfolio dt-sc-one-fourth column <?php echo esc_attr($first);?>">
	                    	<div class="portfolio-thumb">
	                    		<img class="item-mask" src="<?php  echo esc_url( get_template_directory_uri() );?>/images/portfolio-mask.png" alt="" title="">
	                    		<img src="<?php echo esc_url($image);?>" alt="" title="" width="1170" height="1010">
	                    			<div class="image-overlay">
	                    				<a href="<?php the_permalink();?>" title="" class="link"> <span class="fa fa-link"> </span> </a>
	                    				<a href="<?php echo $popup;?>" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
	                    			</div>
	                        </div>
	                        <div class="portfolio-detail">
	                        	<div class="portfolio-title">
	                        		<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
	                        		<?php the_terms( $the_id, 'dt_portfolio_entries', '<p>', ' , ','</p>' ); ?>
	                        	</div>
	                        </div>
	                    </div>
	                    <?php $count++;
					endwhile;
				endif;
				wp_reset_query();?>
			<!-- Related Posts End -->
		<?php endif;?>
	</section>
	<!-- ** Primary Section End ** -->

	<?php if( $show_right_sidebar ) : ?>
	<!-- ** Secondary Right Section ** -->
	<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
		<?php get_sidebar('right'); ?>
	</section>
	<!-- ** Secondary Right Section End ** -->
	<?php endif;?>