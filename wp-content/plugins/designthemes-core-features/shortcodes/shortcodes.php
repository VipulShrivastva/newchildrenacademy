<?php
class DTCoreShortcodesDefination {
	
	function __construct() {
		
		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion_group", array (
				$this,
				"dt_sc_accordion_group" 
		) );

		/* Button Shortcode */
		add_shortcode ( "dt_sc_button", array (
				$this,
				"dt_sc_button" 
		) );

		/* Outlined Button Shortcode */
		add_shortcode ( "dt_sc_outlined_button", array (
				$this,
				"dt_sc_outlined_button" 
		) );

		/* BlockQuotes Shortcode */
		add_shortcode ( "dt_sc_blockquote", array (
				$this,
				"dt_sc_blockquote" 
		) );

		/* Callout Box Shortcode */
		add_shortcode ( "dt_sc_callout_box", array (
				$this,
				"dt_sc_callout_box"
		) );

		add_shortcode ( "dt_sc_full_width", array ( 
				$this,
				"dt_sc_columns"
		) );

		/* Columns Shortcode */
		add_shortcode ( "dt_sc_one_half", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Column with inner */
		add_shortcode ( "dt_sc_one_half_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_four_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Contact Information */

		#Email
		add_shortcode ( "dt_sc_email", array (
				$this,
				"dt_sc_email"
		) );

		add_shortcode( "dt_sc_contact", array (
				$this,
				"dt_sc_contact"
		) );

		add_shortcode( "dt_sc_address", array(
				$this,
				"dt_sc_address"
		) );

		add_shortcode( "dt_sc_web", array(
				$this,
				"dt_sc_web"
		) );
		/* Contact Information End */

		/* Clients Carousel Shortcode */
		add_shortcode ( "dt_sc_carousel", array (
				$this,
				"dt_sc_carousel"
		) );

		/* Donutchart Start */
		add_shortcode ( "dt_sc_donutchart_small", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		
		add_shortcode ( "dt_sc_donutchart_medium", array ( 
				$this,
				"dt_sc_donutchart"
		) );

		add_shortcode ( "dt_sc_donutchart_large", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		/* Donutchart End */
		
		/* Dividers */
		
		/* Clear Shortcode */
		add_shortcode ( "dt_sc_clear", array ( 
				$this,
				"dt_sc_clear"
		) );
		
		/* HR With Border */

		add_shortcode ( "dt_sc_hr", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		#Page Builder
		add_shortcode( "dt_sc_hr_top", array(
			$this,
			"dt_sc_hr_top"
		) );

		add_shortcode ( "dt_sc_hr_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible", array (
				$this,
				"dt_sc_dividers" 
		) );
	
		add_shortcode ( "dt_sc_hr_invisible_small", array (
				$this,
				"dt_sc_dividers" 
		) );


		add_shortcode ( "dt_sc_hr_invisible_very_small", array (
				$this,
				"dt_sc_dividers" 
		) );

		add_shortcode ( "dt_sc_hr_invisible_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		/* Dividers End */
		
		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box", array (
				$this,
				"dt_sc_icon_box" 
		) );

		#For PB
		add_shortcode( "dt_sc_icon_box_type1", array(
				$this,
				"dt_sc_icon_box_type1"
		) );
		/* Icon Boxes Shortcode End*/

		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box_colored", array (
				$this,
				"dt_sc_icon_box_colored" 
		) );
		/* Icon Boxes Shortcode End*/
		
		/* Dropcap Shortcode */
		add_shortcode ( "dt_sc_dropcap", array (
				$this,
				"dt_sc_dropcap" 
		) );
		
		/* Code Shortcode */
		add_shortcode ( "dt_sc_code", array (
				$this,
				"dt_sc_code" 
		) );

		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array (
				$this,
				"dt_sc_fancy_ol" 
		) );
		
		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array (
				$this,
				"dt_sc_fancy_ul" 
		) );

		/* Pricing Table */
		add_shortcode ( "dt_sc_pricing_table", array (
				$this,
				"dt_sc_pricing_table" 
		) );

		//Added for PB purpose
		add_shortcode( "dt_sc_pricing_table_2", array(
				$this,
				"dt_sc_pricing_table"
		) );

		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array (
				$this,
				"dt_sc_pricing_table_item" 
		) );

		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progressbar", array (
				$this,
				"dt_sc_progressbar" 
		) );

		/* Tabs */
		add_shortcode ( "dt_sc_tab", array (
				$this,
				"dt_sc_tab" 
		) );

		add_shortcode ( "dt_sc_tabs_horizontal", array (
				$this,
				"dt_sc_tabs_horizontal" 
		) );

		add_shortcode ( "dt_sc_tabs_vertical", array (
				$this,
				"dt_sc_tabs_vertical" 
		) );

		/* Team Shortcode */
		add_shortcode ( "dt_sc_team", array (
				$this,
				"dt_sc_team" 
		) );

		/* Testimonial Shortcode */
		add_shortcode ( "dt_sc_testimonial", array (
				$this,
				"dt_sc_testimonial" 
		) );
		
		/* Testimonial Carousel Shortcode */
		add_shortcode ( "dt_sc_testimonial_carousel", array (
				$this,
				"dt_sc_testimonial_carousel"
		) );

		/* Title Shortcode */
		add_shortcode ( "dt_sc_h1", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h2", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h3", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h4", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h5", array (
				$this,
				"dt_sc_title" 
		) );

		add_shortcode ( "dt_sc_h6", array (
				$this,
				"dt_sc_title" 
		) );
		/* Title Shortcode End */


		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array (
				$this,
				"dt_sc_toggle" 
		) );

		/* Toogle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array (
				$this,
				"dt_sc_toggle_framed" 
		) );
		
		/* Titles Box Shortcode */
		add_shortcode ( "dt_sc_titled_box", array (
				$this,
				"dt_sc_titled_box" 
		) );
		
		/* Tooltip Shortcode */
		add_shortcode ( "dt_sc_tooltip", array (
				$this,
				"dt_sc_tooltip"
		) );
		
		/* PullQuotes Shortcode */
		add_shortcode ( "dt_sc_pullquote", array (
				$this,
				"dt_sc_pullquote" 
		) );

		add_shortcode ( "dt_sc_infographic_bar", array (
				$this,
				"dt_sc_infographic_bar" 
		) );

		/* Full width Shortcode*/
		add_shortcode("dt_sc_fullwidth_section", array(
				$this,
				"dt_sc_fullwidth_section"
		) );

		/* Full Width Video Shortcode */
		add_shortcode("dt_sc_fullwidth_video", array(
				$this,
				"dt_sc_fullwidth_video"
		));

		/* Animation */
		add_shortcode("dt_sc_animation", array(
			$this,
			"dt_sc_animation"
		) );

		/* Post & Recent Post Shortcode */
		add_shortcode("dt_sc_post", array ( 
			$this,
			"dt_sc_post"
		) );

		add_shortcode("dt_sc_recent_post", array ( 
			$this,
			"dt_sc_recent_post"
		) );

		add_shortcode( "dt_sc_goto", array(
			$this,
			"dt_sc_goto"
		) );

		add_shortcode( "dt_sc_class_hours", array(
			$this,
			"dt_sc_class_hours"
		) );

		add_shortcode( "dt_sc_class_hour", array(
			$this,
			"dt_sc_class_hour"
		) );

		add_shortcode( "dt_sc_social", array(
			$this,
			"dt_sc_social"
		) );

		/* Portfolio */
		add_shortcode( "dt_sc_recent_portfolio" , array(
			$this,
			"dt_sc_recent_portfolio"
		) );

		add_shortcode( "dt_sc_recent_portfolio_from_cateogory" , array(
			$this,
			"dt_sc_recent_portfolio_from_cateogory"
		) );

		/* Events */	
		add_shortcode('dt_sc_events', array( 
			$this,
		 "dt_sc_events" 
		) );	

		/* Widget Shortcodes */
		add_shortcode ( "dt_sc_widgets", array ( $this, "dt_sc_widgets" ) );
		
		/* Do Shortcodes */
		add_shortcode ( "dt_sc_doshortcode", array ( $this, "dt_sc_doshortcode" ) );
	
		/* Resizeable Column */
		add_shortcode ( "dt_sc_resizable", array ( $this, "dt_sc_resizable" ) );

		add_shortcode ( "dt_sc_resizable_inner", array ( $this, "dt_sc_resizable" ) );

		/* Search Form */
		add_shortcode ( "dt_sc_search_form", array (
			$this,
			"dt_sc_search_form"
		) );

		/* Woo Cart */
		add_shortcode ( "dt_sc_woo_cart", array (
			$this,
			"dt_sc_woo_cart"
		) );		
	}
	
	/**
	 *
	 * @param string $content        	
	 * @return string
	 */
	function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}
	
	/**
	 *
	 * @param string $dir        	
	 * @return multitype:
	 */
	function dtListImages($dir = null) {
		$images = array ();
		$icon_types = array (
				'jpg',
				'jpeg',
				'gif',
				'png' 
		);
		
		if (is_dir ( $dir )) {
			$handle = opendir ( $dir );
			while ( false !== ($dirname = readdir ( $handle )) ) {
				
				if ($dirname != "." && $dirname != "..") {
					$parts = explode ( '.', $dirname );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					
					if (in_array ( $ext, $icon_types )) {
						$option = $parts [count ( $parts ) - 2];
						if( strpos($option, '@2x') === false)
							$images [$dirname] = str_replace ( ' ', '', $option );
					}
				}
			}
			closedir ( $handle );
		}
		
		return $images;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_accordion_group($attrs, $content = null) {

		extract ( shortcode_atts ( array (
			'class' =>''
		), $attrs ) );

		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<h5 class='dt-sc-toggle", "<h5 class='dt-sc-toggle-accordion ", $out );
		$out = "<div class='dt-sc-toggle-frame-set {$class}'>{$out}</div>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'link' => '#',
				'type' => '',
				'icon' => '',
				'target' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '',
				'class' =>''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		if( ($type == "with-icon") && !empty($icon)  ){
			$content = $content." <span class='fa {$icon}'> </span>"; 
		}
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}
		
		$out = "<a href='{$link}' {$target} class='dt-sc-button {$class} {$size} {$variation} {$type}' {$style}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_outlined_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'link' => '#',
				'target' => '',
				'variation' => '',
				'number' => '',
				'class' =>''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		if( !empty($number)  ){
			$content = "<span> {$number} </span> {$content}"; 
		}
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}
		
		$out = "<a href='{$link}' {$target} class='dt-sc-button-outlined {$class} {$size} {$variation}'>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'align' => '',
				'variation' => '',
				'textcolor' => '',
				'cite'=> ''		
		), $attrs ) );
		
		$class = array();
		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
		if( $variation)
			$class[] = ' ' . $variation;
		
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = strip_tags($content);
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : "";
		
		$cite = ! empty ( $cite ) ? '&ndash; ' .$cite : "";
		$cite = !empty( $cite ) ? "<cite>$cite</cite>" : "";
		
		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );

		$out = "<blockquote class='{$class}' {$style}>{$content}{$cite}</blockquote>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'link' => '#',
				'button_text'=> __('Purchase Now','dt_themes'),
				'button_icon' =>'',
				'icon' =>'',
				'target' => '',
				'class' => ''
		), $attrs ) );

		$attribute = !empty($icon) ? "class='dt-sc-callout-box with-icon {$type} {$class}' " :" class='dt-sc-callout-box {$type} {$class}' ";

		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$button_text = !empty($button_icon) ? "{$button_text} <span class='fa {$button_icon}'></span>" : $button_text;

		$out = "<div {$attribute}>";
		$out .= ( !empty( $title ) ) ? "<h2>{$title}</h2>" : "";
		$out .= '<div class="column dt-sc-four-fifth first">';
		if( !empty( $icon ) ):
			$out .= '<div class="icon">';
			$out .= "<span class='fa {$icon}'></span>";
			$out .= '</div>';
		endif;
		$out .= $content;
		$out .= '</div>';
			
		$out .= '<div class="column dt-sc-one-fifth">';
		$out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button medium' {$target}>{$button_text}</a>" : "";
		$out .= '</div>';			
		$out .= "</div>";
		
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_columns($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'id' => '',
				'class' => '',
				'style' => '' ,
				'type' => ''
		), $attrs ) );
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$shortcodename = str_replace ( "-inner", "", $shortcodename );
		
		$id = ($id != '') ? " id = '{$id}'" : '';
		$style = !empty( $style ) ? " style='{$style}' ": "";

		if( trim($type) == 'type2' ):
			$type = "no-space";
		elseif( trim($type) == 'type1'):
			$type = "space";
		else:
			$type = "";
		endif;	

		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<div {$id} class='column {$shortcodename} {$class} {$type} {$first}' {$style} >{$content}</div>";
		return $out;
	}

	/* Contact Information */
	/**
	 * Shortcode : Email id
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_email($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'icon' => '',
				'position' => 'before',
				'emailid' => ''
		), $attrs ) );

		$out = '<p class="dt-sc-contact-info">';
		$out .= ( ($position == 'before') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : '';
		$out .= ( !empty($emailid) ) ? "<a href='mailto:$emailid'>{$emailid}</a>" : "";
		$out .= ( ($position == 'after') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : '';
		$out .= '</p>';
		return $out;
	 }

	function dt_sc_contact( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'title' =>'',
			'detail' =>'',
			'icon'=>'',
			'position' => 'before',
			'description'=>''
		), $attrs));

		$out  = '<p class="dt-sc-contact-info">';
		$out .= ( ($position == 'before') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : "";
		$out .= !empty( $detail ) ? $detail : "";
		$out .= ( ($position == 'after') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : "";
		$out .= '</p>';
		return $out;
	} 

	function dt_sc_address( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'detail' =>'',
			'position' => 'before',
			'icon'=>''
		), $attrs));

		$out  = '<p class="dt-sc-contact-info">';
		$out .= ( ($position == 'before') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : "";
		$out .= !empty( $detail ) ? $detail : "";
		$out .= ( ($position == 'after') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : "";
		$out .= '</p>';
		return $out;
	} 

	function dt_sc_web( $attrs, $content = null ){
		extract ( shortcode_atts ( array (
				'icon' => '',
				'position' => 'before',
				'url' => '',
				'text' => '',
				'target' => '',
		), $attrs ) );

		$out = '<p class="dt-sc-contact-info">';
		$out .= ( ($position == 'before') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : '';
		$out .= ( !empty($url) ) ? "<a href='$url' target='{$target}'>{$text}</a>" : "";
		$out .= ( ($position == 'after') && (!empty( $icon )) ) ? "<span class='fa {$icon}'></span>" : '';
		$out .= '</p>';
		return $out;
	}
	/* Contact Information End*/

	/* Client Carousel */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_carousel($attrs, $content = null) {

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-sponsor-carousel'>", $content );
		
		
		$out = "<div class='dt-sc-sponsor-carousel-wrapper' data-min='1' data-max='4' data-width='230'>";
		$out .= $content;
		$out .= '<div class="carousel-arrows">';
		$out .= '	<a href="" class="sponsor-prev"> </a>';
		$out .= '	<a href="" class="sponsor-next"> </a>';
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/* Client Carousel End*/
	
	/* Dividers */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clear($attrs, $content = null) {
		return '<div class="dt-sc-clear"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_hr_border($attrs, $content = null) {
		return '<div class="dt-sc-hr-border"></div>';
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_donutchart($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'title' => '',
				'bgcolor' => '',
				'fgcolor' => '',
				'percent' =>'30'
		), $attrs ) );
		
		$size = "100";
		$size = ( "dt_sc_donutchart_medium" === $shortcodename ) ? "200" : $size;
		$size = ( "dt_sc_donutchart_large" === $shortcodename ) ? "300" : $size;
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$out = "<div class='{$shortcodename}'>";
		$out .= "<div class='dt-sc-donutchart' data-size='{$size}' data-percent='{$percent}' data-bgcolor='{$bgcolor}' data-fgcolor='$fgcolor'></div>";
		$out .= ( empty($title) ) ? $out : "<h5 class='dt-sc-donutchart-title'>{$title}</h5>";
		$out .= '</div>';
		return $out;
	}

	// Added for page builder
	function dt_sc_hr_top( $attrs, $content = null, $shortcode = "" ){
		return do_shortcode("[dt_sc_hr top]");
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dividers($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'class' => '',
				'top' => '' 
		), $attrs ) );
		
		if ("dt_sc_hr" === $shortcodename || "dt_sc_hr_medium" === $shortcodename || "dt_sc_hr_large" === $shortcodename) {
			
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			
			$out = "<div class='{$shortcodename} {$class}'>";
			
			if ((isset ( $attrs [0] ) && trim ( $attrs [0] == 'top' ))) {
				
				$out = "<div class='{$shortcodename} top {$class}'>";
				$out .= "<a href='#top' class='scrollTop'><span class='fa fa-angle-up'></span>" . __ ( "top", 'dt_themes' ) . "</a>";
			}
			
			$out .= "</div>";
		} else {
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			$out = "<div class='{$shortcodename}  {$class}'></div>";
		}
		return $out;
	}
	/* Dividers End*/
	
	/* Icon Boxes Shortcode */
	//For Page builder
	function dt_sc_icon_box_type1( $attrs, $content = null, $shortcodename = "" ){
		extract ( shortcode_atts ( array (
				'inner_image'=>'http://placehold.it/420&text=DesignThemes',
				'title' => '',
				'link' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$sc = "[dt_sc_icon_box type='type1' inner_image='{$inner_image}' title='{$title}' link='{$link}']{$content}[/dt_sc_icon_box]";
		return do_shortcode($sc);
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'fontawesome_icon' => '',
				'custom_icon' => '',
				'inner_image'=>'',
				'title' => '',
				'link' => ''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out =  "<div class='dt-sc-ico-content {$type}'>";

		if( $type == "type1" ):
			$out .= "<div class='icon'>";
			$out .= '	<div class="icon-outer">';
			$out .= "		<img title='' alt='' src='{$inner_image}'>";
			if( !empty($link) ) :
				$out .= '		<div class="dt-sc-icon-overlay">';
				$out .= "			<a href='{$link}'><i class='fa fa-link'></i></a>";
				$out .=	'		</div>';
			endif;
			$out .= '	</div>';
			$out .= '</div>';
		else:
			if( !empty($fontawesome_icon) && empty($custom_icon) ) {
				$out .= "<div class='icon'> <span class='fa fa-{$fontawesome_icon}'> </span> </div>";
			} elseif( !empty($custom_icon) ) {
				$out .= "<div class='icon'> <span> <img src='{$custom_icon}' alt=''/></span> </div>";	
			}
		endif;	

		
		if( !empty($link) ) :
			$out .= empty( $title ) ? $out : "<h4><a href='{$link}' target='_blank'> {$title} </a></h4>";
		else:
			$out .= empty( $title ) ? $out : "<h4>{$title}</h4>";
		endif;

			
		
		$out .= $content;
		$out .= "</div>";
		return $out;
	}
	/* Icon Boxes Short code End*/

	/* Icon Boxes Colored Short code */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box_colored($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
			'image' => '',
			'title' => '',
			'variation' => '',
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$out  = "<div class='dt-sc-colored-box {$variation}'>";
		$out .= !empty( $title ) ? "<h5>{$title}</h5>" : "";
		$out .= !empty( $image ) ? "<img src='{$image}' alt='' title=''/>" : "";
		$out .= $content;
		$out .= '</div>';
		
		return $out;
	}
	/* Icon Boxes Colored Short code End */


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dropcap($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = str_replace ( " ", "-", $type );
		$type = "dt-sc-dropcap-".strtolower ( $type );
		
		$bgcolor = ( $type == 'dt-sc-dropcap-default') ? "" : $bgcolor;
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';border-color:' . $textcolor . ';';;
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<span class='dt-sc-dropcap $type {$variation}' {$style}>{$content}</span>";
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_code($attrs, $content = null) {
		$array = array (
				'[' => '&#91;',
				']' => '&#93;',
				'/' => '&#47;',
				'<' => '&#60;',
				'>' => '&#62;',
				'<br />' => '&nbsp;' 
		);
		$content = strtr ( $content, $array );
		$out = "<pre>{$content}</pre>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );
		return $content;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		return $content;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table($attrs, $content = null) {
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div class='dt-sc-pricing-table'>" . $content . '</div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'type1',
				'variation' =>'',
				'currency' => '$',
				'price' => '',
				'per' => '',
				"button_link" => "#",
				"button_text" => __ ( "View All", 'dt_themes' ),
				"title" =>'',
				"image" => '',

		), $attrs ) );
		
		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';

		$button_link= do_shortcode($button_link);
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '</ol>', '</ul>', $content );
		
		$out = "<div class='dt-sc-pr-tb-col {$variation} $selected'>";
		$out .= '	<div class="dt-sc-tb-header">';
		if( $type == 'type1' ) {
			$out .= 		( !empty($image) ) ? " <div class='dt-sc-tb-header-img'><img alt='thumb' src='{$image}' /></div>": "";
			$out .= 		( !empty($title) ) ? "<div class='dt-sc-tb-title'><h5>{$title}</h5></div>" : "";
		} elseif( $type == 'type2') {
			$out .= 		'<div class="dt-sc-tb-thumb">';
			$out .= 		( !empty($image) ) ? "<img alt='thumb' src='{$image}' />": "";
			$out .= 		( !empty($title) ) ? "<div class='dt-sc-tb-title'><h3>{$title}</h3></div>" : "";
			$out .= 		'</div>';
		}	
		$out .= 		"<div class='dt-sc-price'>{$currency}{$price}<span>/ {$per}</span></div>";
		$out .= '	</div>';
		$out .= 	$content;
		$out .= '	<div class="dt-sc-buy-now">';
					if(preg_match('#^{{#', $button_link) === 1) {
						$button_link =  str_replace ( '{{', '[', $button_link );
						$button_link =  str_replace ( '}}', '/]', $button_link );
						$button_link = do_shortcode($button_link);
					}else{
						$button_link = esc_url ( $button_link );
					}
					$out .= do_shortcode ( "[dt_sc_button size='small' link='$button_link']" . $button_text . "[/dt_sc_button]" );

		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_progressbar($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'color' => '',
				'value' => '55'
		), $attrs ) );
		
		
		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}

		
		$color = ! empty ( $color ) ? "style='background-color:$color;'" : "";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = $content.' - '.$value."%";
		$value = "data-value='$value'";
		$out = "<div class='dt-sc-bar-text'>{$content}</div>";
		$out .= "<div class='dt-sc-progress $type'>";
		$out .= "<div class='dt-sc-bar' $color $value></div>";
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tab($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' ,
		), $attrs ) );
		$out = '<li class="tab_head"><a href="#">'.$title. '</a></li><div class="tabs_content">' . DTCoreShortcodesDefination::dtShortcodeHelper ( $content ) . '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_horizontal($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'class' => '' 
		), $attrs ) );

		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);

		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}

		$out = '<ul class="dt-sc-tabs-frame">';
			for($i = 0; $i < count($matches[0]); $i++) {
				$out .= '<li><a href="#">'.$matches[3][$i]['title'] . '</a></li>';
			}
		$out .= '</ul>';

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
	return "<div class='dt-sc-tabs-container {$class}'>$out</div>";
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_vertical($attrs, $content = null) {
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}

		$out = "<ul class='dt-sc-tabs-vertical-frame'>";
		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<li><a href="#">'. $matches[3][$i]['title'] . '<span></span></a></li>';
		}
		$out .= "</ul>";

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-vertical-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
		return "<div class='dt-sc-tabs-vertical-container'>$out</div>";		
	}

	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team($attrs, $content = null) {
		$dir_path = plugin_dir_path ( __FILE__ ) . "images/team/";
		$sociables_icons = DTCoreShortcodesDefination::dtListImages ( $dir_path );
		
		$sociables = array_values ( $sociables_icons );
		$attributes = array (
				'name' => '',
				'image' => 'http://placehold.it/300',
				'role' => '',
				'alt' => __('Please specify image url','dt_themes'),
				'title' => __('Please specify image url','dt_themes')
		);
		
		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}
		
		extract ( shortcode_atts ( $attributes, $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$image = "<img src='{$image}' alt='{$alt}' title='{$title}' />";
		$name = empty ( $name ) ? "" : "<h4>{$name}</h4>";
		$role = empty ( $role ) ? "" : "<h6>{$role}</h6>";
		
		$s = "";
		$path = plugin_dir_url ( __FILE__ ) . "images/team/";
		foreach ( $sociables as $sociable ) {
			$img = array_search ( $sociable, $sociables_icons );
			$class = explode(".",$img);
			$class = $class[0];
			$s .= empty ( $$sociable ) ? "" : "<li class='{$class}'><a href='{$$sociable}' target='_blank'> <img src='{$path}{$img}' alt='{$sociable}'/> </a></li>";
		}
		
		$s = ! empty ( $s ) ? "<div class='dt-sc-social-icons'><ul>$s</ul></div>" : "";

		$out  = "<div class='dt-sc-team'>";
		$out .= '	<div class="image">';
		$out .= '		<img class="item-mask" src="'.plugin_dir_url ( __FILE__ ).'images/mask.png" alt="" title="">';
		$out .= 		$image;	
		$out .= '		<div class="image-overlay">';
		$out .= 			$s;
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '	<div class="team-details">';
		$out .=			$name.$role.$content;
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'name' => '',
				'role' => '',
				'rating' => '3',
				'image' => 'http://placehold.it/300'
		), $attrs ) );


		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? '<q> '.$content.' </q>' : "";
		$content = (! empty ( $content ) ) ? '<blockquote>'.$content.'</blockquote>' : "";

		$image = "<img src='{$image}' alt='{$name}' title='{$name}' />";
		$image = "<div class='author'>{$image}</div>";

		$name = ! empty ( $name ) ? "<p>{$name} </p>": "";
		$role = ! empty ( $role ) ? "<span>{$role}</span>":"";
		$rating = "<div class='rating-review-container'><div class='rating-review'><span class='author-rating rating-{$rating}'></span></div></div>";

		$out  = '<div class="dt-sc-testimonial">';
		$out .= 	$content.$image;
		$out .= '	<div class="author-meta">';
		$out .= 	$name.$role.$rating;
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial_carousel($attrs, $content = null) {

		extract ( shortcode_atts ( array ( 'class' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-testimonial-carousel'>", $content );
		
		
		$out = "<div class='dt-sc-testimonial-carousel-wrapper {$class}'>";
		$out .= $content;
		$out .= '<div class="carousel-arrows">';
		$out .= '	<a href="" class="testimonial-prev"> <span class="fa fa-angle-left"> </span> </a>';
		$out .= '	<a href="" class="testimonial-next"> <span class="fa fa-angle-right"> </span> </a>';
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_title( $attrs,$content = null , $shortcodename = "" ){
		extract ( shortcode_atts ( array (
			'type' => '' ,
			'class' => ''
		), $attrs ) );
		
		$type = ( $type == 'type2' ) ? 'white' : '';
		
		$shortcodename = str_replace ( "dt_sc_", "", $shortcodename );
		$out = "<{$shortcodename} class='dt-sc-title {$type} {$class}'>";
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= "</{$shortcodename}>";
	return $out;	
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = "<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = '<div class="dt-sc-toggle-frame">';
		$out .= "	<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_titled_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'icon' => '',
				'type'	=> '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = (empty($type)) ? 'dt-sc-titled-box' :"dt-sc-$type";
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$content = strip_tags($content);
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		if($type == 'dt-sc-titled-box') :
			$icon = ( empty($icon) ) ? "" : "<span class='fa {$icon} '></span>";
			$title = " <h4 class='{$type}-title' {$style}> {$icon} {$title}</h4>";
			$out = "<div class='{$type} {$variation}'>";
			$out .= $title;
			$out .=	"<div class='{$type}-content'>{$content}</div>";
			$out .= "</div>";
		else :
			$out = "<div class='{$type}'>{$content}</div>";
		endif;
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'default',
				'tooltip' => '',
				'position' => 'top',
				'href' => '',
				'target' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$class  = "class=' ";
		$class .=  ( $type == "boxed" ) ? "dt-sc-boxed-tooltip" : "";
		$class .= " dt-sc-tooltip-{$position}'";
		
		$href = " href='{$href}' ";
		$title = " title = '{$tooltip}' ";
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		$style = ( $type == "boxed" ) ? $style : "";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<a {$href} {$title} {$class} {$style} {$target}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pullquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'pullquote1',
				'align' => '',
				'icon' => '',
				'textcolor' => '',
				'cite' => ''
		), $attrs ) );
		
		$class = array();
		if( isset($type) )
			$class[] = " dt-sc-{$type}";
			
		if( trim( $icon ) == 'yes' )
			$class[] = ' quotes';

		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
			
		$cite = ( $cite ) ? ' <cite>&ndash; ' . $cite .'</cite>' : '' ;
		
		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<span class='{$class}' {$style}> {$content} {$cite}</span>";
		
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_infographic_bar($attrs, $content = null, $shortcodename ="") {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'icon' =>'',
				'icon_size'=>'150',
				'color' => '',
				'value' => '55'
		), $attrs ) );

		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = '<div class="dt-sc-infographic-bar">';
		
		if( !empty($icon) ){
		$out .= "<i class='fa {$icon}' style='font-size:{$icon_size}px; color:{$color};'> </i>";
		}
		$out .= '	<div class="info">';
		
		$out .= "		<div class='dt-sc-progress $type'>";
		$out .= "		 <div data-value={$value} style='background-color:{$color};' class='dt-sc-bar'></div>";
		$out .= '		</div>';
		
		$out .= "		<div class='dt-sc-bar-percentage'> <span> {$value}%  </span> </div>";
		$out .= "		<div class='dt-sc-bar-text'>$content</div>";
		$out .= '	</div>';
		
		$out .= '</div>';
		
		return $out;
	}

	function dt_sc_fullwidth_section($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'id' =>'',
			'backgroundcolor' => '',
			'backgroundimage' => '',
			'backgroundrepeat' => '',
			'backgroundposition' => '',
			'paddingtop' => '',
			'paddingbottom' => '',
			'margintop' => '',
			'marginbottom' => '',
			'textcolor' =>'',
			'opacity' => '',
			'class' =>'',
			'parallax' => 'no'
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $textcolor ) ? "color:{$textcolor};" : "";
		if( !empty( $opacity ) ) {
			$hex = str_replace ( "#", "", $backgroundcolor );
			if (strlen ( $hex ) == 3) :
				$r = hexdec ( substr ( $hex, 0, 1 ) . substr ( $hex, 0, 1 ) );
				$g = hexdec ( substr ( $hex, 1, 1 ) . substr ( $hex, 1, 1 ) );
				$b = hexdec ( substr ( $hex, 2, 1 ) . substr ( $hex, 2, 1 ) );
			else :
				$r = hexdec ( substr ( $hex, 0, 2 ) );
				$g = hexdec ( substr ( $hex, 2, 2 ) );
				$b = hexdec ( substr ( $hex, 4, 2 ) );
			endif;
			$rgb = array ( $r,$g,$b);
			$styles[] = "background-color:rgba($rgb[0],$rgb[1],$rgb[2],$opacity); ";
		} else {
			$styles[] = !empty( $backgroundcolor ) ? "background-color:{$backgroundcolor};" : "";
		}	

		$styles[] = !empty( $backgroundimage ) ? "background-image:url({$backgroundimage});" : "";
		$styles[] = !empty( $backgroundrepeat ) ? "background-repeat:{$backgroundrepeat};" : "";
		$styles[] = !empty( $backgroundposition ) ? "background-position:{$backgroundposition};" : "";
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";
		$styles[] = !empty( $margintop ) ? "margin-top:{$margintop}px;" : "";
		$styles[] = !empty( $marginbottom ) ? "margin-bottom:{$marginbottom}px;" : "";

		if( $parallax === "yes") {
			$styles[] = "background-attachment:fixed; ";
			$class .= " dt-sc-parallax-section ";
		}

		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';

		$id = !empty( $id ) ? " id='{$id}' " : "";
		
		$out = 	"<div {$id} class='fullwidth-section {$class}' {$style}>";
		$out .=	'	<div class="container">';
		$out .= 	$content;
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	function dt_sc_fullwidth_video( $attrs, $content = null ) {
		extract ( shortcode_atts ( array (
			'mp4' => '',
			'webm'=>'',
			'ogv' => '',
			'poster' => '',
			'backgroundimage' => '',
			'paddingtop' => '',
			'paddingbottom' => '',
			'class' =>''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";
		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );

		$backgroundimage = !empty( $backgroundimage )  ? "$backgroundimage" : "http://placehold.it/1920x400.jpg&text=DesignThemes";
		$style .= " background:url({$backgroundimage}) left top repeat; ";
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';

		$poster = !empty( $poster )  ? " poster='{$poster}' " : "";

		$mp4 = !empty( $mp4 )  ? "<source src='{$mp4}' type='video/mp4'/>" : "";
		$webm = !empty( $webm )  ? "<source src='{$webm}' type='video/webm'/>" : "";
		$ogv = !empty( $ogv )  ? "<source src='{$ogv}' type='video/ogg'/>" : "";
		

		$out  = "<div class='dt-sc-fullwidth-video-section {$class}' {$style}>";
		$out .= '	<div class="dt-sc-video-container">';
		$out .= "	<div class='dt-sc-mobile-image-container' style='display:none;'></div>";
		$out .= "		<video autoplay loop class='dt-sc-video dt-sc-fillWidth' {$poster}>";
		$out .= 		$mp4.$webm.$ogv;
		$out .= '		</video>';
		$out .= '	</div>';
		$out .= '   <div class="dt-sc-video-content-wrapper">';		
		$out .= "		<div class='container'>{$content}</div>";
		$out .= '	</div>';
		$out .= '</div>';

		return $out;
	}

	function dt_sc_animation( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'effect' => '','delay'=>''), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div class='animate' data-animation='{$effect}' data-delay='{$delay}'>{$content}</div>";
	}

	function dt_sc_post( $attrs, $content="" ) {
		extract(shortcode_atts(array( 'id'=>'1', 'read_more_text'=>__('Read More','dt_themes'),'excerpt_length'=>10 , 'show_meta' =>'yes'), $attrs));
		$p = get_post($id,'ARRAY_A');

		if( !is_null($p) ) {

			$link = get_permalink($id);
			$format = get_post_format($id);
			$title = $p['post_title'];
			$author_id = $p['post_author'];
			$class = get_post_class("blog-entry",$id);
			$class = implode(" ",$class);
			$class  = is_sticky($id) ? $class.' sticky': $class;
			$custom_class = "";

			$commtext = "";
			if((wp_count_comments($id)->approved) == 0)	$commtext = '0';
			else $commtext = wp_count_comments($id)->approved;
			$commtext .= " <span class='fa fa-comments'></span><span class='meta-arrow'></span>";

			$tags = "";
			$terms = wp_get_post_tags($id);
			if( !empty($terms) ) {
				$tags .= "<p class='tags'> <span class='fa fa-tags'> </span> ";
				foreach( $terms as $term ) {
					$tags .= '<a href="'.get_term_link($term->slug, 'post_tag').'"> '.$term->name.'</a>,';
				}
				$tags = substr($tags,0,-1);
				$tags .= '</p>';
			}


			$cats = "";
			$categories = get_the_category($id);
			if($categories) {
				foreach($categories as $category) {
					$cats .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>,';
				}
				$cats = trim($cats, ",");
				$cats = "<p class='category'> <span class='fa fa-folder-open'> </span> {$cats}</p>";
			}

			$post_meta = get_post_meta($id ,'_dt_post_settings',TRUE);
			$post_meta = is_array($post_meta) ? $post_meta : array();

			$out  = "<article class='{$class}'>";
			$out .= '	<div class="blog-entry-inner">';
			$out .=	'		<div class="entry-meta">';
			$out .= '			<a class="blog-author" href="'.get_author_posts_url($author_id).'">'.get_avatar( get_the_author_meta('user_email', $author_id) ).'</a>';
			$out .= '			<div class="date ribbon-left">';
			$out .= '				<span>'.get_the_date('d').'</span>';
			$out .= '				<p>'.get_the_date('M').'<br>'.get_the_date('Y').'</p>';
			$out .= '				<span class="meta-arrow"></span>';
			$out .= '			</div>';
			$out .= "			<a href='{$link}/#respond' class='comments ribbon-left'>{$commtext}</a>";
			$out .= "			<a href='{$link}' class='entry_format ribbon-left'><span></span> <span class='meta-arrow'></span></a>";
			$out .= '		</div>';
			
								if( $format == "image" || empty($format) ) :
								
									if( has_post_thumbnail( $id )):
										$out .= '<div class="entry-thumb">';
										$out .= "<a href='{$link}'>";	
										$out .= get_the_post_thumbnail($id,"full");
										$out .= '</a>';
										$out .= '</div>';
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;	
									
								elseif( $format === "gallery" ) :
									if( array_key_exists("items", $post_meta) ):
										$out .= '<div class="entry-thumb">';
										$out .= "<ul class='entry-gallery-post-slider'>";
												foreach ( $post_meta['items'] as $item ) {
													$out .= "<li><img src='".esc_url($item)."' alt=''/></li>";
												}
										$out .= '</ul>';
										$out .= '</div>';
									elseif( has_post_thumbnail( $id )):
										$out .= '<div class="entry-thumb">';
										$out .= "<a href='{$link}'>";	
										$out .= get_the_post_thumbnail($id,"full");
										$out .= '</a>';
										$out .= '</div>';
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;
								elseif( $format === "video" ) :
									if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) :
										if( array_key_exists('oembed-url', $post_meta) ) :
											$out .= "<div class='entry-thumb'><div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div></div>';
										elseif( array_key_exists('self-hosted-url', $post_meta) ) :
											$out .= "<div class='entry-thumb'><div class='dt-video-wrap'>".apply_filters( 'the_content', $post_meta['self-hosted-url'] ).'</div></div>';
										endif;
									elseif( has_post_thumbnail( $id )):
										$out .= '<div class="entry-thumb">';
										$out .= "<a href='{$link}'>";	
										$out .= get_the_post_thumbnail($id,"full");
										$out .= '</a>';
										$out .= '</div>';
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;
								elseif( $format === "audio" ) :
									if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) :
									
										$out .= '<div class="entry-thumb">';
										if( array_key_exists('oembed-url', $post_meta) ) :
											$out .= wp_oembed_get($post_meta['oembed-url']);
										elseif( array_key_exists('self-hosted-url', $post_meta) ) :
											$custom_class = "self-hosted-audio";
											$out .= apply_filters( 'the_content', $post_meta['self-hosted-url'] );
										endif;
										$out .= '</div>';
										
									elseif( has_post_thumbnail( $id )):
										$out .= '<div class="entry-thumb">';
										$out .= "<a href='{$link}'>";	
										$out .= get_the_post_thumbnail($id,"full");
										$out .= '</a>';
										$out .= '</div>';
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;
								else:
									if( has_post_thumbnail( $id )):
										$out .= '<div class="entry-thumb">';
										$out .= "<a href='{$link}'>";	
										$out .= get_the_post_thumbnail($id,"full");
										$out .= '</a>';
										$out .= '</div>';
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;	
								endif;
								
			$out .= "		<div class='entry-details {$custom_class}'>";
			$out .= "			<div class='entry-title'><h3><a href='{$link}'>{$title}</a></h3></div>";
			$out .= '			<div class="entry-metadata">';
			$out .=					$cats.$tags;
			$out .= '			</div>';
			$out .= '			<div class="entry-body">';
									$excerpt = explode(' ', do_shortcode($p['post_content']), $excerpt_length);
									$excerpt = array_filter($excerpt);

									if (!empty($excerpt)) {
										if (count($excerpt) >= $excerpt_length) {
											array_pop($excerpt);
											$excerpt = implode(" ", $excerpt).'...';
										} else {
											$excerpt = implode(" ", $excerpt);
										}

										$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
										$out .= "<p>{$excerpt}</p>";									
									}
			$out .= '			</div>';
			$out .= "	 		<a href='{$link}' class='dt-sc-button small'>{$read_more_text} <span class='fa fa-chevron-circle-right'> </span> </a>";
			$out .= '		</div>';
			$out .= '	</div>';
			$out .= '</article>';
			return $out;
		}
	}

	function dt_sc_recent_post( $attrs, $content="" ) {
		extract( shortcode_atts( array( 'columns'=>'2','count'=>'3', 'read_more_text'=>__('Read More','dt_themes'),'excerpt_length'=>10, 'category' =>'' ), $attrs ));

		$out = "";
		$post_class = "";

		switch( $columns ) :
			case '2':
				$post_class = "column dt-sc-one-half";
			break;

			default:
			case '3':
				$post_class = "column dt-sc-one-third";
			break;
		endswitch;

		$args = array( 'posts_per_page' => $count, 'orderby' => 'date' );
		$warning = __('No Posts Found','dt_themes');
		
		if( !empty($category) ){
			$args = array( 'posts_per_page' => $count, 'orderby' => 'date', 'cat' => $category );
			$warning = __('No Posts Found in Category ','dt_themes').$category;
		}

		$rposts = new WP_Query( $args );
		if ( $rposts->have_posts() ):
			$i = 1;
			while( $rposts->have_posts() ):
				$rposts->the_post();

				$the_id = get_the_ID();
				$permalink = get_permalink($the_id);
				$title = get_the_title($the_id);

				$temp_class = "";
				if($i == 1) 
					$temp_class = $post_class." first";
				else
					$temp_class = $post_class;

				if($i == $columns)
					$i = 1;
				else
					$i = $i + 1;

				$out .= "<div class='{$temp_class}'>";
				$sc = "[dt_sc_post id='{$the_id}' read_more_text='{$read_more_text}' excerpt_length='{$excerpt_length}'/]";
				$out .= do_shortcode($sc);
				$out .= '</div>';
			endwhile;
			wp_reset_query();
		else:
			$out = "<div class='dt-sc-warning-box'>{$warning}</div>";	
		endif;
		return $out;	
	}

	function dt_sc_class_hours( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'title' => ''), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$title = !empty( $title ) ? "<h2>{$title}</h2>" : "";
		return "<div class='dt-sc-class-hours'>{$title}<ul class='dt-sc-class-hours-info'>{$content}</ul></div>";
	}

	function dt_sc_class_hour( $attrs, $content = null ){
		extract ( shortcode_atts ( array ( 'day' => '','time'=>''), $attrs ) );
		return "<li>{$day}<span>{$time}</span></li>";
	}

	function dt_sc_social( $attrs, $content = null ) {
		$attributes = array();
		$dir_path = plugin_dir_path ( __FILE__ ) . "images/sociables/";
		$sociables_icons = DTCoreShortcodesDefination::dtListImages ( $dir_path );
		$sociables = array_values ( $sociables_icons );

		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}

		extract ( shortcode_atts ( $attributes, $attrs ) );

		$s = "";
		$path = plugin_dir_url ( __FILE__ ) . "images/sociables/";
		foreach ( $sociables as $sociable ) {
			$img = array_search ( $sociable, $sociables_icons );
			$class = explode(".",$img);
			$class = $class[0];
			$class = str_replace("_", "-", $class);
			#$class = str_replace(" ", "-", $class);
			$title = ucwords( str_replace("-", "  ", $class) );
			$s .= empty ( $$sociable ) ? "" : "<li class='{$class}'><a href='{$$sociable}' target='_blank'  title='{$title}' class='dt-sc-tooltip-bottom'> <img src='{$path}{$img}' alt='{$sociable}'/> </a></li>";
		}
		
		$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";
		return $s;
	}

	function dt_sc_recent_portfolio( $attrs, $content = null ) {
		$out = "";
		$rposts = new WP_Query( array( 
					'post_type' => 'dt_portfolios',
					'posts_per_page' => '7',
					'orderby' => 'date',
					'ignore_sticky_posts' => 1 ) );

		if ( $rposts->have_posts() ):
			while( $rposts->have_posts() ):
				$rposts->the_post();
				$the_id = get_the_ID();
				$permalink = get_permalink($the_id);
				$title = get_the_title($the_id);

				$portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
	            $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

	            $style = $overlay = "";
	            if( isset($portfolio_item_meta['hover-color']) ):
	            	$overlay = 'style = "color:'.$portfolio_item_meta['hover-color'].';" ';
	            	$rgb = hex2rgb( $portfolio_item_meta['hover-color']);

	            	if( isset($portfolio_item_meta['hover-opacity']) ):
	            		$opacity  = $portfolio_item_meta['hover-opacity'];	
	            		$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]},{$opacity})";
	                else:
	                	$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]})";
	                endif;
	            endif;

	            $popup = $image = "http://placehold.it/1170x1010&text=DesignThemes";
	            if( array_key_exists('items_name', $portfolio_item_meta) ) {
	            	$item =  $portfolio_item_meta['items_name'][0];
	            	$popup = $portfolio_item_meta['items'][0];
	            	if( "video" === $item ) {
	            		$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
	            		if( !empty($items) ) {
	            			$image = $portfolio_item_meta['items'][key($items)];
	                    } else {
	                    	$image = "http://placehold.it/1170x1010&text=DesignThemes";
	                 	}
	                } else {
	                	$image = $portfolio_item_meta['items'][0];
	                }
	            }	            

				$class = "portfolio-content portfolio-content{$rposts->current_post}";
				$out .= "<div class='{$class}'>";
				$out .= '	<div class="front-portfolio">';
				$out .= '		<div class="portfolio-outer">';
				$out .= '			<div class="portfolio-thumb">';
				$out .= "				<img src='{$image}' alt='' title='' width='1170' height='1010'>";
				$out .= "				 <div class='image-overlay' style='{$style}'>";
				$out .= "					<h5><a href='{$permalink}'>{$title}</a></h5>";
				$out .= "					<a {$overlay} href='{$permalink}' class='link'> <span class='fa fa-link'> </span> </a>";
				$out .= "					<a {$overlay} href='{$popup}' data-gal='prettyPhoto[gallery]' class='zoom'><span class='fa fa-search'></span></a>";
				$out .= '				 </div>';
				$out .= '			</div>';
				$out .= '		</div>';
				$out .= '	</div>';
				$out .= '</div>';
			endwhile;
			wp_reset_query();
		endif;
		return $out;
	}

	function dt_sc_recent_portfolio_from_cateogory( $attrs, $content = null ) {
		extract ( shortcode_atts ( array ( 'category' => ''), $attrs ) );
		$category_id = explode(",", $category);
		$out = "";
		if( is_array($category_id) && !empty($category_id) ) {

			$rposts = new WP_Query( array( 
				'post_type' => 'dt_portfolios',
				'posts_per_page' => '7',
				'orderby' => 'ID',
				'order' => 'ASC',
				'ignore_sticky_posts' => 1,
				'tax_query' => array(array(
					'taxonomy'=>'dt_portfolio_entries','field'=>'id', 'operator'=>'IN', 'terms'=>$category_id))
			) );

			if( $rposts->have_posts() ):
				while( $rposts->have_posts() ):
					$rposts->the_post();
					$the_id = get_the_ID();
					$permalink = get_permalink($the_id);
					$title = get_the_title($the_id);

					$portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
		            $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

		            $style = $overlay = "";
		            if( isset($portfolio_item_meta['hover-color']) ):
		            	$overlay = 'style = "color:'.$portfolio_item_meta['hover-color'].';" ';
		            	$rgb = hex2rgb( $portfolio_item_meta['hover-color']);

		            	if( isset($portfolio_item_meta['hover-opacity']) ):
		            		$opacity  = $portfolio_item_meta['hover-opacity'];	
		            		$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]},{$opacity})";
		                else:
		                	$style=" background: rgba({$rgb[0]},{$rgb[1]},{$rgb[2]})";
		                endif;
		            endif;

		            $popup = $image = "http://placehold.it/1170x1010&text=DesignThemes";
		            if( array_key_exists('items_name', $portfolio_item_meta) ) {
		            	$item =  $portfolio_item_meta['items_name'][0];
		            	$popup = $portfolio_item_meta['items'][0];
		            	if( "video" === $item ) {
		            		$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
		            		if( !empty($items) ) {
		            			$image = $portfolio_item_meta['items'][key($items)];
		                    } else {
		                    	$image = "http://placehold.it/1170x1010&text=DesignThemes";
		                 	}
		                } else {
		                	$image = $portfolio_item_meta['items'][0];
		                }
		            }	            

					$class = "portfolio-content portfolio-content{$rposts->current_post}";
					$out .= "<div class='{$class}'>";
					$out .= '	<div class="front-portfolio">';
					$out .= '		<div class="portfolio-outer">';
					$out .= '			<div class="portfolio-thumb">';
					$out .= "				<img src='{$image}' alt='' title='' width='1170' height='1010'>";
					$out .= "				 <div class='image-overlay' style='{$style}'>";
					$out .= "					<h5><a href='{$permalink}'>{$title}</a></h5>";
					$out .= "					<a {$overlay} href='{$permalink}' class='link'> <span class='fa fa-link'> </span> </a>";
					$out .= "					<a {$overlay} href='{$popup}' data-gal='prettyPhoto[gallery]' class='zoom'><span class='fa fa-search'></span></a>";
					$out .= '				 </div>';
					$out .= '			</div>';
					$out .= '		</div>';
					$out .= '	</div>';
					$out .= '</div>';
				endwhile;
				wp_reset_query();
			else:
				$out = "<p>".__("No portfolio items in given category","dt_themes")."</p>";	
			endif;
		} else {
			$out = "<p>".__("No portfolio items in given category","dt_themes")."</p>";
		}
		return $out;
	}


	function dt_sc_events( $atts, $content = null ) {
		if(!function_exists('dt_events_list') && dttheme_is_plugin_active('the-events-calendar/the-events-calendar.php')) {
			
			extract( shortcode_atts( array( 'limit'  => '-1', ), $atts));
			
			global $post;
			$out = '';
			
			$all_events = tribe_get_events(array( 'eventDisplay'=>'all','posts_per_page'=> $limit ));
			foreach($all_events as $post) {
				setup_postdata($post);
				
				$out .= '<div class="dt-sc-event-container">';
				$out .= '<div class="dt-sc-events-list">';
				$out .= ' <div class="dt-sc-event-thumb">';
				$out .= ' <a href="'.get_permalink().'" title="'.get_the_title().'">';
							if ( has_post_thumbnail()):
								$attr = array('title' => get_the_title());
								$out .= get_the_post_thumbnail($post->ID, 'full', $attr);
							else:
								$out .= '<img src="http://placehold.it/1170x1170&text=Image" alt="'.get_the_title().'" />';
							endif;
				$out .= ' </a>';
				
				if(tribe_get_cost($post->ID) != '') {
					$currency_symbol = tribe_get_event_meta( $post->ID,'_EventCurrencySymbol', true );
					if(!$currency_symbol)
						$currency_symbol = tribe_get_option('defaultCurrencySymbol', '$' );
						
					$currency_position = tribe_get_event_meta( $post->ID,'_EventCurrencyPosition', true );
					$out .= '<span class="event-price">';
						if($currency_position == 'suffix')
							$out .= tribe_get_cost($post->ID).$currency_symbol;
						else
							$out .= $currency_symbol.tribe_get_cost($post->ID);
					$out .= '</span>';
				}

				$out .= ' </div>';
				$out .= ' <div class="dt-sc-event-details">';
				$out .= ' <div class="dt-sc-event-meta"> <p><i class="fa fa-calendar"> </i>'.tribe_get_start_date($post->ID, false, 'M Y @ h a').' - '
							.tribe_get_end_date($post->ID, false, 'M Y @ h a').'</p></div>';
				$out .= ' <h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2>';
				
				$venue_id = tribe_get_venue_id( $post->ID );
				if ( isset($venue_id) && $venue_id > 0 ) {
					$url = esc_url( get_permalink( $venue_id ) );
					$venue_name = tribe_get_venue($post->ID);
					
					$out .= '<div class="dt-sc-event-location-meta"><p><i class="fa fa-map-marker"> </i>';
					$out .= '<a href="'.$url.'">'.$venue_name.'</a>';
					$out .= ', '.tribe_get_country($post->ID);
					if(tribe_get_map_link() != '') {
						$out .= '<a href="'.tribe_get_map_link().'" title="'.$venue_name.'" target="_blank">'.__(' + Google Map ', 'dt_themes').'</a>';
					}
					$out .= '</p></div>';
				}
 				$out .= ' </div>';
				$out .= ' <div class="dt-sc-event-excerpt">';
				$out .= dttheme_excerpt(15);
				$out .= ' </div>';
				$out .= '</div>';
				$out .= '</div>';
			}
			
			return $out;
		} else {
			return '';
		}
	}	

	function dt_sc_widgets($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'widget_name' => '',
				'widget_wpname' => '',
				'widget_wpid' => ''
		), $attrs ) );
		
		if($widget_name != ''):	
			
			foreach($attrs as $key=>$value):
				$instance[$key] = $value;			
			endforeach;
			
			$instance = array_filter($instance);
			
			if(($widget_name == 'TribeEventsAdvancedListWidget' || $widget_name == 'TribeEventsMiniCalendarWidget') && isset($instance['selector'])) {
				$instance['filters'] = '{"tribe_events_cat":["'.$instance['selector'].'"]}';
			}

			if($widget_name == 'TribeEventsAdvancedListWidget' && !wp_script_is( 'widget-calendar-pro-style', 'queue' ) && class_exists('TribeEventsPro')) {
				wp_enqueue_style( 'widget-calendar-pro-style', TribeEventsPro::instance()->pluginUrl . 'resources/widget-calendar-full.css', array(), apply_filters( 'tribe_events_pro_css_version', TribeEventsPro::VERSION ) );
			}
			
			if(substr($widget_name, 0, 2) == 'WC') $add_cls = 'woocommerce';
			else $add_cls = '';
			
			ob_start();
			the_widget($widget_name, $instance, 'before_widget=<aside id="'.$widget_wpid.'" class="widget '.$add_cls.' '.$widget_wpname.'">&after_widget=</aside>&before_title=<h3 class="widgettitle">&after_title=<span></span></h3>&widget_id='.$instance['widget_wpid']);
			
			$output = ob_get_contents();
			ob_end_clean();
			
			return $output;
							
		endif;
	}

	function dt_sc_doshortcode($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'width' => '100',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = ( !empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';

		$out = '<div class="column '.$danimate.' '.$first.'" style="width:'.$width.'%;" '.$danimation.' '.$ddelay.'>';
		$cont = do_shortcode($content);
		if(isset($cont))
			$out .= $cont;
		else
			$out .= $content;
		$out .= '</div>';
		return $out;
	}

	function dt_sc_resizable($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'width' => '',
				'class' => '',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = (!empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$style = (!empty( $width ) ) ? ' style="width:'.$width.'%;" ' : "";
	
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = do_shortcode(DTCoreShortcodesDefination::dtShortcodeHelper ( $content ));
		$out = "<div class='column {$class} {$danimate} {$first}' {$danimation} {$ddelay} {$style}>{$content}</div>";
		return $out;
	}


	/**
	 * search form
	 * @return string
	 */
	function dt_sc_search_form($attrs, $content = null) {
		$out = get_search_form(false);		
		return $out;
	}

	/**
	 * woocommerce cart
	 * @return string
	 */
	function dt_sc_woo_cart($attrs, $content = null) {

		if( function_exists("is_woocommerce")) :
		    $out = '<a class="cart-info" href="'.WC()->cart->get_cart_url().'" title="'.esc_attr__( 'View Shopping Cart', 'dt_themes' ).'">';
		        $count = WC()->cart->cart_contents_count;
		        $out .= '<p class="cart-icon"> <span> '.$count.' </span> </p>';
		        $out .= '<p class="cart-total"> '.WC()->cart->get_cart_total().' </p>';
		    $out .= '</a>';
		else:
			$out .= '<p>'.esc_html__('Kindly install & activate woocommerce plugin and check it.', 'dt_themes').'</p>';
		endif;

		return $out;
	}

}
new DTCoreShortcodesDefination();?>