<?php /*Template Name: DT Events Template*/
get_header();

	#Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-top-code']))
		echo wp_kses($dttheme_integration['single-page-top-code'],$dt_allowed_html_tags );

	$post_layout = "content-full-width";
	if(is_tax('tribe_events_cat')) :
		$post_layout = dttheme_option('events', 'event-category-layout');

	elseif(in_array('events-single', get_body_class())) :
		$post_layout = dttheme_option('events', 'event-detail-layout');

	elseif(in_array('events-archive', get_body_class())):
		$post_layout = dttheme_option('events', 'event-archive-layout');

	elseif(dttheme_option('events', 'event-archive-layout') != ''):
		$post_layout = dttheme_option('events', 'event-archive-layout');
	endif;

	$show_left_sidebar = $show_right_sidebar = false;
	$sidebar_class = "";

	switch($post_layout):
		case 'with-left-sidebar':
			$post_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	true;
			$sidebar_class 	=	"left-sidebar";
		break;

		case 'with-right-sidebar':
			$show_right_sidebar = 	true;
			$post_layout 	=	"page-with-sidebar with-right-sidebar";
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = true;
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
					get_template_part( 'framework/loops/content', 'event' );
				endwhile;
			endif;?>
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