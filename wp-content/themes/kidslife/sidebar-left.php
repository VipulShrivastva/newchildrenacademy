<?php wp_reset_query();
global $post;

if( is_page() ):
	dttheme_show_sidebar('page',$post->ID,'left');

elseif( is_singular('post') ):
	dttheme_show_sidebar('post',$post->ID,'left');

elseif( is_singular('dt_portfolios')):
	dttheme_show_sidebar('dt_portfolios',$post->ID,'left');

elseif( is_singular('product') ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-left-sidebar-in-product-detail");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-left-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-detail-sidebar-left') ): endif;

elseif( is_post_type_archive('product') ):
	dttheme_show_sidebar('page',get_option('woocommerce_shop_page_id'));

elseif( is_tax('dt_portfolio_entries') ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-gallery-archives");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('custom-post-gallery-archives-left') ): endif;

elseif( is_author() ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-author-archives");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('author-archive-left') ): endif;

elseif( is_search() ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-search");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;
	
	if(function_exists('dynamic_sidebar') && dynamic_sidebar('search-sidebar-left') ): endif;

elseif( is_404() ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-404");

	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('not-found-404-sidebar-left') ): endif;

elseif( class_exists('woocommerce') && is_product_category() ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-left-sidebar-in-product-category-archive");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-left-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-category-archive-sidebar-left') ): endif;

elseif( class_exists('woocommerce') && is_product_tag() ):	
	$disable = dttheme_option('woo',"disable-shop-everywhere-left-sidebar-in-product-tag-archive");
										  
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('shop-everywhere-left-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('product-tag-archive-sidebar-left') ): endif;

elseif( is_post_type_archive('tribe_events') ):
	
	$disable = dttheme_option('events',"disable-event-everywhere-left-sidebar-for-event-archive-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-left') ): endif;
	endif;

elseif( in_array('tribe-filter-live', get_body_class()) ):
	
	$disable = dttheme_option('events',"disable-event-everywhere-left-sidebar-for-event-category-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-left') ): endif;
	endif;
	
elseif(is_singular('tribe_events') || is_singular('tribe_venue') || is_singular('tribe_organizer')):

	$disable = dttheme_option('events',"disable-event-everywhere-left-sidebar-for-event-detail-layout");
	if( is_null($disable) ):
		if(function_exists('dynamic_sidebar') && dynamic_sidebar('events-everywhere-sidebar-left') ): endif;
	endif;		

elseif( is_tag() ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-tag-archives");
	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;
	
	if(function_exists('dynamic_sidebar') && dynamic_sidebar('tag-archives-left') ): endif;

elseif( is_archive() ):
	$disable = dttheme_option('specialty',"disable-everywhere-left-sidebar-for-category-archives");

	if( is_null($disable) )
		if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;

	if(function_exists('dynamic_sidebar') && dynamic_sidebar('category-archives-left') ): endif;
else:
	if(function_exists('dynamic_sidebar') && dynamic_sidebar(('display-left-everywhere-sidebar')) ): endif;
endif;?>