<?php
if ( ! defined( 'IAMD_BASE_URL' ) ) { 
	define( 'IAMD_BASE_URL',  get_template_directory_uri().'/' ); 
}

define( 'IAMD_FW_URL', IAMD_BASE_URL . 'framework/' );
define( 'IAMD_FW', get_template_directory().'/framework/' );
define( 'IAMD_IMPORTER_URL', IAMD_FW.'wordpress-importer/' );
define( 'IAMD_THEME_SETTINGS', 'mytheme' );
define( 'IAMD_SAMPLE_FONT', __( 'The quick brown fox jumps over the lazy dog', 'dt_themes' ) );

if ( function_exists( 'wp_get_theme' ) ) {
	$theme_data = wp_get_theme();
	define( 'IAMD_THEME_NAME', $theme_data->get( 'Name' ) );
	define( 'IAMD_THEME_FOLDER_NAME', $theme_data->template );
	define( 'IAMD_THEME_VERSION', (float) $theme_data->get( 'Version' ) );
}

require_once get_template_directory () . '/framework/include.php';

if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}

# Global
	$GLOBALS['enable_global_page_layout'] = dttheme_option("specialty","force-enable-global-page-layout");
	$global_page_layout = dttheme_option("specialty","global-page-layout");
	$GLOBALS['global_page_layout'] = !empty($global_page_layout) ? $global_page_layout : 'content-full-width';

	$GLOBALS['enable_global_post_layout'] = dttheme_option("specialty","force-enable-global-post-layout");
	$global_post_layout = dttheme_option("specialty","global-post-layout");
	$GLOBALS['global_post_layout'] = !empty($global_post_layout) ? $global_post_layout : 'content-full-width';
?>