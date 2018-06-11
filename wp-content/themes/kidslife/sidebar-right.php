<?php wp_reset_query();
global $post;

if( is_page() ):
	dttheme_show_sidebar('page',$post->ID,'right');

elseif( is_singular('post') ):
	dttheme_show_sidebar('post',$post->ID,'right');

elseif( is_singular('dt_portfolios')):
	dttheme_show_sidebar('dt_portfolios',$post->ID,'right');

elseif( is_singular('product') ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-right-sidebar-in-product-detail");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-right-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-detail-sidebar-right') ): endif;

elseif( is_post_type_archive('product') ):
	dttheme_show_sidebar('page',get_option('woocommerce_shop_page_id'));

elseif( is_tax('dt_portfolio_entries') ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-gallery-archives");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('custom-post-gallery-archives-right') ): endif;

elseif( is_author() ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-author-archives");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('author-archive-right') ): endif;

elseif( is_search() ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-search");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;
	
	if(function_exists('dynamic_sidebar') && dynamic_sidebar('search-sidebar-right') ): endif;

elseif( is_404() ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-404");

	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('not-found-404-sidebar-right') ): endif;

elseif( class_exists('woocommerce') && is_product_category() ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-right-sidebar-in-product-category-archive");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-right-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-category-archive-sidebar-right') ): endif;

elseif( class_exists('woocommerce') && is_product_tag() ):	
	$disable = dttheme_option('woo',"disable-shop-everywhere-right-sidebar-in-product-tag-archive");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-right-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-tag-archive-sidebar-right') ): endif;

elseif( is_post_type_archive('tribe_events') ):
	
	$disable = dttheme_option('events',"disable-event-everywhere-right-sidebar-for-event-archive-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-right') ): endif;
	endif;

elseif( in_array('tribe-filter-live', get_body_class()) ):
	
	$disable = dttheme_option('events',"disable-event-everywhere-right-sidebar-for-event-category-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-right') ): endif;
	endif;
	
elseif(is_singular('tribe_events') || is_singular('tribe_venue') || is_singular('tribe_organizer')):

	$disable = dttheme_option('events',"disable-event-everywhere-right-sidebar-for-event-detail-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-right') ): endif;
	endif;		

elseif( is_tag() ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-tag-archives");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;
	
	if(function_exists('dynamic_sidebar') && dynamic_sidebar('tag-archives-right') ): endif;

elseif( is_archive() ):
	$disable = dttheme_option('specialty',"disable-everywhere-right-sidebar-for-category-archives");

	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('category-archives-right') ): endif;
else:
	if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-right-everywhere-sidebar')) ): endif;
endif;?>