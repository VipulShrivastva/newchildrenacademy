<?php
    #if Buddypress exists
    if (class_exists('BP_Core_user') && !bp_is_blog_page() ):
        dttheme_bpress_subtitle();
    #If bbPress is installed and we're on a bbPress page.
    elseif ( function_exists( 'is_bbpress' ) && is_bbpress() ):
        dttheme_bpress_subtitle();
    elseif( is_page_template('tpl-map-on-top.php')  ):
    elseif ( is_page() && !is_front_page() ):
        global $post;
        dttheme_subtitle_section( $post->ID, 'page' );
    elseif( is_post_type_archive('tribe_events') ):
        dttheme_custom_subtitle_section( '', "dark-bg subtitle-for-archive-term");
    elseif( is_post_type_archive('product') ):
        dttheme_subtitle_section( get_option('woocommerce_shop_page_id'), 'page' );

    elseif( is_single() ):
        if( is_attachment() ):
        else:
            $post_type = get_post_type();
            if( $post_type === 'post' )   {
                dttheme_subtitle_section( $post->ID, 'post' );
            }elseif(  $post_type === "dt_portfolios"  ) {
                dttheme_subtitle_section( $post->ID, 'dt_portfolios' );
            }elseif( $post_type === "product" ) {
                $title = get_the_title($post->ID);
                dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-single-product");
            } elseif( in_array('events-single', get_body_class()) ) {
                dttheme_custom_subtitle_section( '', "events-bg");
            } elseif( in_array('single-tribe_venue', get_body_class()) ) {
                dttheme_custom_subtitle_section( '', "events-bg");
            } elseif( in_array('single-tribe_organizer', get_body_class()) ) {
                dttheme_custom_subtitle_section( '', "events-bg");
            }
        endif; 
    elseif( is_tax() ):
        
        $title = __("Archive for Term: ",'dt_themes');
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $title .= $term->name;    

        dttheme_custom_subtitle_section( $title, "dark-bg subtitle-for-archive-term");
    elseif( is_category( ) ):
        $title = __("Archive for Category: ",'dt_themes');
        $title .= single_cat_title('',FALSE);
        dttheme_custom_subtitle_section( $title, "dark-bg subtitle-for-archive-categories");
    elseif( is_tag() ):
        $title = __("Archive for Tag: ",'dt_themes');
        $title .= single_tag_title('',FALSE);
        dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-archive-tags");
    elseif( is_month() ):
        $title = __("Archive for Month: ",'dt_themes');
        $title .=  get_the_time('F');
        dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-archive-month");
    elseif( is_year() ):
        $title = __("Archive for Year: ",'dt_themes');
        $title .=  get_the_time('Y');
        dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-archive-year");
    elseif(is_day() || is_time()):
    elseif( is_author() ):
        $curauth = get_user_by('slug',get_query_var('author_name')) ;
        $title  = __("Archive for Author: ",'dt_themes');
        $title .= $curauth->nickname;
        dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-archive-author");
    elseif(in_array('events-archive', get_body_class())):
        dttheme_custom_subtitle_section( '', "events-bg");
    elseif( is_search() ):
        $title  = __("Search Result for ",'dt_themes');
        $title .= get_search_query();
        dttheme_custom_subtitle_section( $title,"dark-bg subtitle-for-search");
    elseif( is_404() ):
        $title = __("Oops Nothing Found",'dt_themes');
        dttheme_custom_subtitle_section( $title);
    endif; ?>