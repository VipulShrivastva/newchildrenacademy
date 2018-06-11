<?php 
	#Standard Left
	register_sidebar(array(
		'name' 			=>	__('Standard Left Sidebar','dt_themes'),
		'id'			=>	'display-left-everywhere-sidebar',
		'description'	=>	__("Common sidebar that appears left hand side once enabled.","dt_themes"),
		'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</aside>',
		'before_title' 	=> 	'<h3 class="widgettitle">',
		'after_title' 	=> 	'</h3>'));

	#Standard Right
	register_sidebar(array(
		'name' 			=>	__('Standard Right Sidebar','dt_themes'),
		'id'			=>	'display-right-everywhere-sidebar',
		'description'	=>	__("Common sidebar that appears right hand side once enabled.","dt_themes"),
		'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</aside>',
		'before_title' 	=> 	'<h3 class="widgettitle">',
		'after_title' 	=> 	'</h3>'));

	#Custom Sidebars
	$widgets = dttheme_option('widgetarea','custom');
	$widgets = is_array($widgets) ? array_unique($widgets) : array();
    $widgets = array_filter($widgets);
    foreach ($widgets as $key => $value) {
    	$id = mb_convert_case($value, MB_CASE_LOWER, "UTF-8");
    	$id = str_replace(" ", "-", $id);

    	register_sidebar(array(
		'name' 			=>	$value,
		'id'			=>	$id,
		'description'   =>  __("A unique sidebar that is created in Admin panel","dt_themes"),
		'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</aside>',
		'before_title' 	=> 	'<h3 class="widgettitle">',
		'after_title' 	=> 	'</h3>'));
    }

    #Post's Author Archive Sidebar 
    	$author_archive_layout = dttheme_option('specialty','author-archives-layout');
    	$author_archive_layout = !empty($author_archive_layout) ? $author_archive_layout : "content-full-width";
    	switch ($author_archive_layout ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Author's Archive Sidebar Left",'dt_themes'),
					'id'			=>	'author-archive-left',
					'description'   =>  __("Author's Archive sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Author's Archive Sidebar Right",'dt_themes'),
					'id'			=>	'author-archive-right',
					'description'   =>  __("Author's Archive sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__("Author's Archive Sidebar Left",'dt_themes'),
					'id'			=>	'author-archive-left',
					'description'   =>  __("Author's Archive sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
				
				register_sidebar(array(
					'name' 			=>	__("Author's Archive Sidebar Right",'dt_themes'),
					'id'			=>	'author-archive-right',
					'description'   =>  __("Author's Archive sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 			break;
   		}

    #Post's Category Archive Sidebar 
    	$cat_archive_layout = dttheme_option('specialty','category-archives-layout');
    	$cat_archive_layout = !empty($cat_archive_layout) ? $cat_archive_layout : "content-full-width";
    	switch ($cat_archive_layout ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Post's Category Archive Sidebar Left",'dt_themes'),
					'id'			=>	'category-archives-left',
					'description'   =>  __("Post's Category sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Post's Category Archive Sidebar Right",'dt_themes'),
					'id'			=>	'category-archives-right',
					'description'   =>  __("Post's Category sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__("Post's Category Archive Sidebar Left",'dt_themes'),
					'id'			=>	'category-archives-left',
					'description'   =>  __("Post's Category sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
				
				register_sidebar(array(
					'name' 			=>	__("Post's Category Archive Sidebar Right",'dt_themes'),
					'id'			=>	'category-archives-right',
					'description'   =>  __("Post's Category sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 			break;
   		}

    #Post's Tag Archive Sidebar
    	$tag_archive_layout = dttheme_option('specialty','tag-archives-layout');
    	$tag_archive_layout = !empty($tag_archive_layout) ? $tag_archive_layout : "content-full-width";
    	switch ($tag_archive_layout ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Post's Tag Archive Sidebar Left",'dt_themes'),
					'id'			=>	'tag-archives-left',
					'description'   =>  __("Post's Tag sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Post's Tag Archive Sidebar Right",'dt_themes'),
					'id'			=>	'tag-archives-right',
					'description'   =>  __("Post's Tag sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__("Post's Tag Archive Sidebar Left",'dt_themes'),
					'id'			=>	'tag-archives-left',
					'description'   =>  __("Post's Tag sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
				
				register_sidebar(array(
					'name' 			=>	__("Post's Tag Archive Sidebar Right",'dt_themes'),
					'id'			=>	'tag-archives-right',
					'description'   =>  __("Post's Tag sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 			break;
   		}

    #Search Page Layout
    	$search_layout = dttheme_option('specialty','search-layout');
    	$search_layout = !empty($search_layout) ? $search_layout : "content-full-width";

    	switch ($search_layout ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__('Search Sidebar Left','dt_themes'),
					'id'			=>	'search-sidebar-left',
					'description'   =>  __("Search page sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__('Search Sidebar Right','dt_themes'),
					'id'			=>	'search-sidebar-right',
					'description'   =>  __("Search page sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__('Search Sidebar Left','dt_themes'),
					'id'			=>	'search-sidebar-left',
					'description'   =>  __("Search page sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 				register_sidebar(array(
					'name' 			=>	__('Search Sidebar Right','dt_themes'),
					'id'			=>	'search-sidebar-right',
					'description'   =>  __("Search page sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
   			break;
    	}

    #404 Page Layout
    	$layout_404 = dttheme_option('specialty','404-layout');
    	$layout_404 = !empty($layout_404) ? $layout_404 : "content-full-width";

    	switch ($layout_404 ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__('Not Found ( 404 ) Sidebar Left','dt_themes'),
					'id'			=>	'not-found-404-sidebar-left',
					'description'   =>  __("404 page sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__('Not Found ( 404 ) Sidebar Right','dt_themes'),
					'id'			=>	'not-found-404-sidebar-right',
					'description'   =>  __("404 page sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__('Not Found ( 404 ) Sidebar Left','dt_themes'),
					'id'			=>	'not-found-404-sidebar-left',
					'description'   =>  __("404 page sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 				register_sidebar(array(
					'name' 			=>	__('Not Found ( 404 ) Sidebar Right','dt_themes'),
					'id'			=>	'not-found-404-sidebar-right',
					'description'   =>  __("404 page sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
   			break;
    	}


	#Events Everywhere Sidebar
	if( class_exists('TribeEvents')	):
		#Left Sidebar
		register_sidebar(array(
			'name' 			=>	'Events Everywhere Left',
			'id'			=>	'events-everywhere-sidebar-left',
			'description'   =>  __("Events page unique sidebar that appears on the left.","dt_themes"),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	'<h3 class="widgettitle">',
			'after_title' 	=> 	'</h3>'));
			
		#Right Sidebar
		register_sidebar(array(
			'name' 			=>	'Events Everywhere Right',
			'id'			=>	'events-everywhere-sidebar-right',
			'description'   =>  __("Events page unique sidebar that appears on the right.","dt_themes"),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	'<h3 class="widgettitle">',
			'after_title' 	=> 	'</h3>'));
	endif;


if( dttheme_is_plugin_active('designthemes-core-features/designthemes-core-features.php') ):

    	$layout = dttheme_option('specialty','gallery-archives-layout');
    	$layout = !empty($layout) ? $layout : "content-full-width";

    	switch ($layout ) {
    		case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Portfolio's Terms Sidebar Left",'dt_themes'),
					'id'			=>	'custom-post-gallery-archives-left',
					'description'   =>  __("Portfolio's term sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	__("Portfolio's Terms Sidebar Right",'dt_themes'),
					'id'			=>	'custom-post-gallery-archives-right',
					'description'   =>  __("Portfolio's term sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
    		break;

    		case 'with-both-sidebar':

				register_sidebar(array(
					'name' 			=>	__("Portfolio's Terms Sidebar Left",'dt_themes'),
					'id'			=>	'custom-post-gallery-archives-left',
					'description'   =>  __("Portfolio's term sidebar that appears on the left side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
				
				register_sidebar(array(
					'name' 			=>	__("Portfolio's Terms Sidebar Right",'dt_themes'),
					'id'			=>	'custom-post-gallery-archives-right',
					'description'   =>  __("Portfolio's term sidebar that appears on the right side.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

 			break;
   		}
endif;

if( class_exists('woocommerce')	):

	#Shop Everywhere Right Sidebar
		register_sidebar(array(
			'name' 			=>	'Shop Everywhere Right',
			'id'			=>	'shop-everywhere-right-sidebar',
			'description'   =>  __("Shop page unique sidebar that appears on the right.","dt_themes"),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	'<h3 class="widgettitle">',
			'after_title' 	=> 	'</h3>'));
	
	#Shop Everywhere Right Sidebar
		register_sidebar(array(
			'name' 			=>	'Shop Everywhere Left',
			'id'			=>	'shop-everywhere-left-sidebar',
			'description'   =>  __("Shop page unique sidebar that appears on the left.","dt_themes"),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	'<h3 class="widgettitle">',
			'after_title' 	=> 	'</h3>'));

	#Product Detail page Sidebar
		$product_layout =  dttheme_option('woo',"product-layout");
		$product_layout = !empty($product_layout) ? $product_layout : "content-full-width";

		switch( $product_layout ) {

			case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Detail Page Sidebar Left',
					'id'			=>	'product-detail-sidebar-left',
					'description'   =>  __("Product detail page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Detail Page Sidebar Right',
					'id'			=>	'product-detail-sidebar-right',
					'description'   =>  __("Product detail page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-both-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Detail Page Sidebar Left',
					'id'			=>	'product-detail-sidebar-left',
					'description'   =>  __("Product detail page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
				register_sidebar(array(
					'name' 			=>	'Product Detail Page Sidebar Right',
					'id'			=>	'product-detail-sidebar-right',
					'description'   =>  __("Product detail page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;
		}

	#Product Category Archive Sidebar
		$product_category_archive_layout =  dttheme_option('woo',"product-category-layout");
		$product_category_archive_layout = !empty($product_category_archive_layout) ? $product_category_archive_layout : "content-full-width";

		switch( $product_category_archive_layout ){
			case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Category Archive Sidebar Left',
					'id'			=>	'product-category-archive-sidebar-left',
					'description'   =>  __("Product category archive page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Category Archive Sidebar Right',
					'id'			=>	'product-category-archive-sidebar-right',
					'description'   =>  __("Product category archive page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-both-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Category Archive Sidebar Left',
					'id'			=>	'product-category-archive-sidebar-left',
					'description'   =>  __("Product category archive page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

				register_sidebar(array(
					'name' 			=>	'Product Category Archive Sidebar Right',
					'id'			=>	'product-category-archive-sidebar-right',
					'description'   =>  __("Product category archive page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;
		}

	#Product Tag Archive Sidebar
		$product_tag_archive_layout =  dttheme_option('woo',"product-tag-layout");
		$product_tag_archive_layout = !empty($product_tag_archive_layout) ? $product_tag_archive_layout : "content-full-width";

		switch( $product_tag_archive_layout ){
			case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Tag Archive Sidebar Left',
					'id'			=>	'product-tag-archive-sidebar-left',
					'description'   =>  __("Product tag archive page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Tag Archive Sidebar Right',
					'id'			=>	'product-tag-archive-sidebar-right',
					'description'   =>  __("Product tag archive page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;

			case 'with-both-sidebar':
				register_sidebar(array(
					'name' 			=>	'Product Tag Archive Sidebar Left',
					'id'			=>	'product-tag-archive-sidebar-left',
					'description'   =>  __("Product tag archive page sidebar that appears on the left.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));

				register_sidebar(array(
					'name' 			=>	'Product Tag Archive Sidebar Right',
					'id'			=>	'product-tag-archive-sidebar-right',
					'description'   =>  __("Product tag archive page sidebar that appears on the right.","dt_themes"),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	'<h3 class="widgettitle">',
					'after_title' 	=> 	'</h3>'));
			break;
		}
endif;

	#Footer Columnns		
	$footer_columns =  dttheme_option('general','footer-columns');
	dttheme_footer_widgetarea($footer_columns);

	#Custom Mega Menu Sidebars
	$widgets = dttheme_option('widgetarea','megamenu');
	$widgets = is_array($widgets) ? array_unique($widgets) : array();
    $widgets = array_filter($widgets);
    foreach ($widgets as $key => $value) {
    	$id = mb_convert_case($value, MB_CASE_LOWER, "UTF-8");
    	$id = str_replace(" ", "-", $id);

    	register_sidebar(array(
		'name' 			=>	$value,
		'id'			=>	$id,
		'description'   =>  __("A unique mega menu sidebar that is created in Admin panel","dt_themes"),
		'before_widget' => 	'<li id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</li>',
		'before_title' 	=> 	'<h3 class="widgettitle">',
		'after_title' 	=> 	'</h3>'));
    }
	?>