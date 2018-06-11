<?php get_header();

	#Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-top-code']))
		echo wp_kses($dttheme_integration['single-page-top-code'],$dt_allowed_html_tags );

	$tpl_default_settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
	$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();

	$post_layout = array_key_exists("layout",$tpl_default_settings) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_left_sidebar = $show_right_sidebar = false;
	$sidebar_class = "";

	# Global Page Layout
	if( !is_null( $GLOBALS['enable_global_page_layout'] ) ) {
		$post_layout = $GLOBALS['global_page_layout'];
	}
	# Global Page Layout

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
					get_template_part( 'framework/loops/content', 'page' );
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