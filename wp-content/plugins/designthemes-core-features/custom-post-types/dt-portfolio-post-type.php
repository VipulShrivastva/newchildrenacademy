<?php
if (! class_exists ( 'DTPortfolioPostType' )) {
	class DTPortfolioPostType {
		
		/**
		 */
		function __construct() {
			// Add Hook into the 'init()' action
			add_action ( 'init', array (
					$this,
					'dt_init' 
			) );
			
			// Add Hook into the 'admin_init()' action
			add_action ( 'admin_init', array (
					$this,
					'dt_admin_init' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'init' points
		 */
		function dt_init() {
			$this->createPostType ();
			add_action ( 'save_post', array (
					$this,
					'save_post_meta' 
			) );
			
			add_action ( 'pre_post_update', array (
					$this,
					'save_post_meta' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'admin_init' points
		 */
		function dt_admin_init() {
			wp_enqueue_script ( 'jquery-ui-sortable' );
			
			remove_filter( 'manage_posts_custom_column', 'likeThisDisplayPostLikes'); # Fix for http://wordpress.org/plugins/roses-like-this/
			
			add_action ( 'add_meta_boxes', array (
					$this,
					'dt_add_portfolio_meta_box' 
			) );
			
			add_filter ( "manage_edit-dt_portfolios_columns", array (
					$this,
					"dt_portfolios_edit_columns" 
			) );
			
			add_action ( "manage_posts_custom_column", array (
					$this,
					"dt_portfolios_columns_display" 
			), 10, 2 );
		}
		
		/**
		 */
		function createPostType() {
			$labels = array (
					'name' => __ ( 'Portfolios', 'dt_themes' ),
					'all_items' => __ ( 'All Portfolios', 'dt_themes' ),
					'singular_name' => __ ( 'Portfolio', 'dt_themes' ),
					'add_new' => __ ( 'Add New', 'dt_themes' ),
					'add_new_item' => __ ( 'Add New Portfolio', 'dt_themes' ),
					'edit_item' => __ ( 'Edit Portfolio', 'dt_themes' ),
					'new_item' => __ ( 'New Portfolio', 'dt_themes' ),
					'view_item' => __ ( 'View Portfolio', 'dt_themes' ),
					'search_items' => __ ( 'Search Portfolios', 'dt_themes' ),
					'not_found' => __ ( 'No portfolios found', 'dt_themes' ),
					'not_found_in_trash' => __ ( 'No portfolios found in Trash', 'dt_themes' ),
					'parent_item_colon' => __ ( 'Parent Portfolio:', 'dt_themes' ),
					'menu_name' => __ ( 'Portfolios', 'dt_themes' ) 
			);
			
			$args = array (
					'labels' => $labels,
					'hierarchical' => false,
					'description' => 'This is custom post type portfolios',
					'supports' => array ( 'title', 'editor'),
					
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'menu_position' => 5,
					'menu_icon' => plugin_dir_url ( __FILE__ ) . 'images/icon_portfolio.png',
					
					'show_in_nav_menus' => true,
					'publicly_queryable' => true,
					'exclude_from_search' => false,
					'has_archive' => true,
					'query_var' => true,
					'can_export' => true,
					'rewrite' => true,
					'capability_type' => 'post' 
			);
			
			register_post_type ( 'dt_portfolios', $args );
			
			register_taxonomy ( "dt_portfolio_entries", "dt_portfolios" , array (
				"hierarchical" => true,
				"label" => "Categories",
				"singular_label" => "Category",
				"show_admin_column" => true,
				"rewrite" => true,
				"query_var" => true )
			);
		}
		
		/**
		 */
		function dt_add_portfolio_meta_box() {
			add_meta_box ( "dt-portfolio-default-metabox", __ ( 'Default Options', 'dt_themes' ), array (
					$this,
					'dt_default_metabox' 
			), 'dt_portfolios', "normal", "default" );
		}
		
		/**
		 */
		function dt_default_metabox() {
			include_once plugin_dir_path ( __FILE__ ) . 'metaboxes/dt_portfolio_default_metabox.php';
		}
		
		/**
		 *
		 * @param unknown $columns        	
		 * @return multitype:
		 */
		function dt_portfolios_edit_columns($columns) {
			$newcolumns = array (
					"cb" => "<input type=\"checkbox\" />",
					"thumb column-comments" => "Image",
					"title" => "Title",
					"author" => "Author"					
			);
			$columns = array_merge ( $newcolumns, $columns );
			return $columns;
		}
		
		/**
		 *
		 * @param unknown $columns        	
		 * @param unknown $id        	
		 */
		function dt_portfolios_columns_display($columns, $id) {
			global $post;
			switch ($columns) {
				
				case "thumb column-comments" :
					$portfolio_settings = get_post_meta ( $post->ID, '_portfolio_settings', TRUE );
					$portfolio_settings = is_array ( $portfolio_settings ) ? $portfolio_settings : array ();
					
					if (array_key_exists ( "items_thumbnail", $portfolio_settings )) {
						$item = $portfolio_settings ['items_thumbnail'] [0];
						$name = $portfolio_settings ['items_name'] [0];
						
						if ("video" === $name) {
							echo '<span class="dt-video"></span>';
						} else {
							echo "<img src='{$item}' height='60px' width='60px' />";
						}
					}
					break;
			}
		}
		
		/**
		 */
		function save_post_meta($post_id) {
			if (defined ( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)
				return $post_id;

			if (isset($_POST['page-layout'])):
			
				$settings = array ();
				$settings ['sub-title-bg'] = isset( $_POST['sub-title-bg'] )? $_POST['sub-title-bg']: "";
				$settings ['sub-title-bg-repeat'] = isset( $_POST['sub-title-bg-repeat'] )? $_POST['sub-title-bg-repeat']: "";
				$settings ['sub-title-bg-position'] = isset(  $_POST['sub-title-bg-position'] )? $_POST['sub-title-bg-position']: "";
				$settings ['dark-bg'] = isset(  $_POST['sub-title-bg-position'] ) ? $_POST['page-darkbg']: "";
				$settings['disable-breadcrumb'] = $_POST['mytheme-page-breadcrumb'];

				$settings ['page-layout'] = isset ( $_POST ['page-layout'] ) ? $_POST ['page-layout'] : "";
				$settings['disable-left-everywhere-sidebar'] = isset($_POST['disable-left-everywhere-sidebar']) ? $_POST['disable-left-everywhere-sidebar'] : "";		
				$settings['disable-right-everywhere-sidebar'] = isset($_POST['disable-right-everywhere-sidebar']) ? $_POST['disable-right-everywhere-sidebar'] : "";
				$settings['left-widget-area'] =  array_unique(array_filter($_POST['mytheme']['left-widgetareas']));
				$settings['right-widget-area'] =  array_unique(array_filter($_POST['mytheme']['right-widgetareas']));

				$settings ['portfolio-layout'] = isset ( $_POST ['portfolio-layout'] ) ? $_POST ['portfolio-layout'] : "";
				$settings ['show-social-share'] = isset ( $_POST ['mytheme-social-share'] ) ? $_POST ['mytheme-social-share'] : "";
				$settings ['show-related-items'] = isset ( $_POST ['mytheme-related-item'] ) ? $_POST ['mytheme-related-item'] : "";

				$settings ['location-info'] = isset ( $_POST ['location-info'] ) ? $_POST ['location-info'] : "";
				$settings ['website-link'] = isset ( $_POST ['website-link'] ) ? $_POST ['website-link'] : "";
			
				$settings ['items'] = isset ( $_POST ['items'] ) ? $_POST ['items'] : "";
				$settings ['items_thumbnail'] = isset ( $_POST ['items_thumbnail'] ) ? $_POST ['items_thumbnail'] : "";
				$settings ['items_name'] = isset ( $_POST ['items_name'] ) ? $_POST ['items_name'] : "";

				$settings['hover-color'] = ( $_POST['hover-color'] != '#') ? $_POST['hover-color'] : "";
				$settings['hover-opacity'] = $_POST['hover-opacity'];
			
				update_post_meta ( $post_id, "_portfolio_settings", array_filter ( $settings ) );
			
				/* TO set Default Category */
				$terms = wp_get_object_terms ( $post_id, 'dt_portfolio_entries' );
				if (empty ( $terms )) :
					wp_set_object_terms ( $post_id, 'Uncategorized', 'dt_portfolio_entries', true );
				endif;
			endif;	
		}
	}
}?>