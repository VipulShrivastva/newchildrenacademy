<?php if (!function_exists('dt_theme_features')) {

	// Register Theme Features
	function dt_theme_features() {
		global $wp_version;
		
		// Add theme support for Custom Background
		$b_args = array(
			'default-color' => 'ffffff',
			'default-image' => '',
			'wp-head-callback' => '_custom_background_cb',
			'admin-head-callback' => '',
			'admin-preview-callback' => ''
		);
		add_theme_support('custom-background', $b_args);
		
		// END of Custom Background Feature
		
		add_theme_support( "title-tag" );

		// Add theme support for Custom Header
		$hargs = array( 'default-image'=>'',	'random-default'=>false,	'width'=>0,					'height'=>0,
				'flex-height'=> false,	'flex-width'=> false,		'default-text-color'=> '',	'header-text'=> false,
				'uploads'=> true,		'wp-head-callback'=> '',	'admin-head-callback'=> '',	'admin-preview-callback' => '');
				
		add_theme_support('custom-header', $hargs);
		// END of Custom Header Feature
		
		# Now Theme supports WooCommerce
		add_theme_support('woocommerce');

		// Add theme support for Translation
		load_theme_textdomain('dt_themes', get_template_directory().'/languages');

		// Add theme support for Post Formats
		$formats = array(
			'status',
			'quote',
			'gallery',
			'image',
			'video',
			'audio',
			'link',
			'aside',
			'chat'
		);
		add_theme_support('post-formats', $formats);
		// END of Post Formats

		// Add theme support for custom CSS in the TinyMCE visual editor
		add_editor_style('custom-editor-style.css');

		// Add theme support for Automatic Feed Links
	
		add_theme_support('automatic-feed-links');
		// END of Automatic Feed Links
		
		// Add theme support for Featured Images
		add_theme_support('post-thumbnails', array('post','product','tribe_events'));
		
		if (version_compare($wp_version, '3.6', '>=')) :
		
			$args = array(
				'search-form',
				'comment-form',
				'comment-list'
			);
		
			add_theme_support( 'html5', $args );		
		endif;

	}
	// Hook into the 'after_setup_theme' action
	add_action('after_setup_theme', 'dt_theme_features');

}

if (!function_exists('dt_theme_navigation_menus')) {

	// Register Navigation Menus
	function dt_theme_navigation_menus() {
		$locations = array( 
			'header_menu' => __('Header Menu', 'dt_themes')
		);
		register_nav_menus($locations);
	}

	// Hook into the 'init' action
	add_action('init', 'dt_theme_navigation_menus');
}?>