<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php dttheme_is_mobile_view(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><?php
		global $dt_allowed_html_tags;
		if( dttheme_option('integration', 'enable-header-code') ):
			echo "<script type='text/javascript'>".wp_kses(stripslashes(dttheme_option('integration', 'header-code')),$dt_allowed_html_tags )."</script>";
    	endif;
	wp_head(); ?>
</head>
<?php $htype = dttheme_option('appearance','header-type');
	$htype = !empty( $htype ) ? $htype : 'header1';
	
$body_class_arg  = ( dttheme_option("appearance","layout") === "boxed" ) ? array("boxed", $htype ) : array( $htype ); ?>
<body <?php body_class( $body_class_arg ); ?>>
<?php $picker = dttheme_option("general","disable-picker");
    if(!isset($picker) && !is_user_logged_in() ):   dttheme_color_picker(); endif;?>

<!-- **Wrapper** -->
<div class="wrapper">
	<!--inner-wrapper starts-->
	<div class="inner-wrapper">

	<!-- header starts -->
	<?php $htype = !empty( $htype ) ? $htype.'.php' : 'header1.php';		
		require_once get_template_directory().'/headers/'.$htype;?>
	<!-- header ends -->

	<!-- main starts -->
	<div id="main"><?php

		#Slider Section
		if( is_page() ):
			global $post;
			dttheme_slider_section($post->ID); 
        endif;

		#Breadcrumb Section
		require_once( get_template_directory()."/framework/sub-title.php");

		if( !is_page_template( 'tpl-fullwidth.php' ) ) :?>
			<!-- ** Container ** -->
			<div class="container"><?php
		endif; ?>