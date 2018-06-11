<?php
global $post;
$portfolio_settings = get_post_meta ( $post->ID, '_portfolio_settings', TRUE );
$portfolio_settings = is_array ( $portfolio_settings ) ? $portfolio_settings : array ();?>

<!-- Breadcrumb -->
<div class="custom-box">
<div class="column one-sixth"><label><?php _e('Disable Breadcrumb','dt_themes');?></label></div>
<div class="column five-sixth last"><?php 
    $switchclass = array_key_exists("disable-breadcrumb",$portfolio_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
    $checked = array_key_exists("disable-breadcrumb",$portfolio_settings) ? ' checked="checked"' : '';?>
    
    <div data-for="mytheme-page-breadcrumb" class="checkbox-switch <?php echo $switchclass;?>"></div>
    <input id="mytheme-page-breadcrumb" class="hidden" type="checkbox" name="mytheme-page-breadcrumb" value="true"  <?php echo $checked;?>/>
    <p class="note"> <?php _e('YES! to disable breadcrumb.','dt_themes');?> </p>
</div>
</div><!-- Breadcrumb End-->

<!-- Sub Title Background -->
<div class="custom-box">
    <div class="column one-sixth"><?php _e( 'Sub Title Background','dt_themes');?></div>
    <div class="column five-sixth last">
        <div class="image-preview-container">
            <?php $subtitlebg = array_key_exists ( "sub-title-bg", $portfolio_settings ) ? $portfolio_settings ['sub-title-bg'] : '';?>
            <input name="sub-title-bg" type="text" class="uploadfield medium" readonly="readonly" value="<?php echo $subtitlebg;?>"/>
            <input type="button" value="<?php _e('Upload','dt_themes');?>" class="upload_image_button show_preview" />
            <input type="button" value="<?php _e('Remove','dt_themes');?>" class="upload_image_reset" />
            <?php if( !empty($subtitlebg) ) dttheme_adminpanel_image_preview($subtitlebg );?>
            <p class="note"><?php _e("Upload an image for the sub title background",'dt_theme');?></p>
        </div>                    
    </div>
</div><!-- Sub Title Background End -->

<!-- Sub Title Settings -->
<div class="custom-box">
    <div class="column one-sixth"></div>
    <div class="column five-sixth last">
        <div class="column one-third">
            <label><?php _e('Background Repeat');?></label>
            <?php $bgrepeat =  array_key_exists ( "sub-title-bg-repeat", $portfolio_settings ) ? $portfolio_settings ['sub-title-bg-repeat'] : ''; ?>
            <div class="clear"></div>
            <select name="sub-title-bg-repeat">
                <option value=""><?php _e("Select",'dt_themes');?></option>
                <?php foreach( array("repeat","repeat-x","repeat-y","no-repeat") as $option): ?>
                       <option value="<?php echo $option;?>" <?php selected($option,$bgrepeat);?>><?php echo $option;?></option> 
                <?php endforeach;?>
            </select>
            <p class="note"><?php _e("Select how would you like to repeat the background image ",'dt_theme');?></p>
        </div>

        <div class="column one-third">
            <label><?php _e('Background Position');?></label>
            <?php $bgposition =  array_key_exists ( "sub-title-bg-position", $portfolio_settings ) ? $portfolio_settings ['sub-title-bg-position'] : ''; ?>
            <div class="clear"></div>
            <select name="sub-title-bg-position">
                <option value=""><?php _e("Select",'dt_themes');?></option>
                <?php foreach( array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right") as $option): ?>
                    <option value="<?php echo $option;?>" <?php selected($option,$bgposition);?>> <?php echo $option;?></option> 
                <?php endforeach;?>
            </select>
            <p class="note"><?php _e("Select how would you like to position the background",'dt_theme');?></p>
        </div>

        <div class="column one-third last">
            <label><?php _e('Apply Dark Title','dt_themes');?></label>
            <div class="clear"></div><?php
                $switchclass = array_key_exists("dark-bg",$portfolio_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                $checked = array_key_exists("dark-bg",$portfolio_settings) ? ' checked="checked"' : '';?>

                <div data-for="page-darkbg" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="page-darkbg" class="hidden" type="checkbox" name="page-darkbg" value="true" <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to have dark text for light background.','dt_themes');?> </p>
        </div>
    </div>
</div><!-- Sub Title Settings -->

<!-- Page Layout -->
<div id="page-layout" class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Page Layout','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<ul class="bpanel-layout-set"><?php
			$layouts = array (
				'content-full-width'=>'without-sidebar',
				'with-left-sidebar'=>'left-sidebar',
				'with-right-sidebar'=>'right-sidebar',
				'with-both-sidebar' =>'both-sidebar');

			$v = array_key_exists ( "page-layout", $portfolio_settings ) ? $portfolio_settings ['page-layout'] : 'content-full-width';
			foreach ( $layouts as $key => $value ) {
				$class = ($key == $v) ? " class='selected' " : "";
				echo "<li><a href='#' rel='{$key}' {$class}><img src='" . plugin_dir_url ( __FILE__ ) . "images/columns/{$value}.png' /></a></li>";
			}?></ul>
			<?php $v = array_key_exists("page-layout",$portfolio_settings) ? $portfolio_settings['page-layout'] : 'content-full-width';
			$cs = ( $v == "content-full-width") ? "style='display:none;'":"";?>
		<input id="mytheme-portfolio-layout" name="page-layout" type="hidden"
			value="<?php echo $v;?>" />
		<p class="note"> <?php _e("You can choose between a left, right or no sidebar layout.",'dt_themes');?> </p>
	</div>
</div><!-- Page Layout End-->

<?php
	$sidebar_left = $sidebar_right = '';
	switch( $v ):
		case 'content-full-width':	$sidebar_left = $sidebar_right = " hidden";	break;
		case 'with-both-sibebar':	$sidebar_left = $sidebar_right = ''; break;
		case 'with-left-sidebar':	$sidebar_left = ""; $sidebar_right = " hidden";	break;
		case 'with-right-sidebar':  $sidebar_left = "hidden"; $sidebar_right = ""; break;
	endswitch;
?>

<div id="left-widget-area" class="widget-area-options <?php echo $sidebar_left;?>">
    <!-- Every Where Sidebar Start -->
    <div class="custom-box">
        <div class="column one-sixth">   
            <label><?php _e('Disable Every Where Sidebar For Left','dt_themes');?></label>
        </div>
        <div class="column five-sixth last">  
            <?php $switchclass = array_key_exists("disable-left-everywhere-sidebar",$portfolio_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
            $checked = array_key_exists("disable-left-everywhere-sidebar",$portfolio_settings) ? ' checked="checked"' : '';?>
            <div data-for="mytheme-disable-left-everywhere-sidebar" class="checkbox-switch <?php echo $switchclass;?>"></div>
            <input id="mytheme-disable-left-everywhere-sidebar" class="hidden" type="checkbox" name="disable-left-everywhere-sidebar" value="true"  <?php echo $checked;?>/>
            <p class="note"> <?php _e('YES! to disable Every Where Sidebar for left hand side','dt_themes');?> </p>
        </div>
    </div><!-- Every Where Sidebar Section End-->

    <!-- 3. Choose Widget Areas Start -->
    <div class="sidebar-section custom-box">
        <div class="column one-sixth"><label><?php _e('Choose Widget Area','dt_themes');?></label></div>
        <div class="column five-sixth last"><?php
            if( array_key_exists('left-widget-area', $portfolio_settings)):
                $widgetareas =  array_unique($portfolio_settings["left-widget-area"]);
                $widgetareas = array_filter($widgetareas);

                foreach( $widgetareas as $widgetarea ){
                    echo '<div class="multidropdown">';
                    echo dttheme_custom_widgetarea_list("left-widgetareas",$widgetarea,"multidropdown");
                    echo '</div>';
                }

                echo '<div class="multidropdown">';
                echo dttheme_custom_widgetarea_list("left-widgetareas","","multidropdown");
                echo '</div>';                                
            else:
                echo '<div class="multidropdown">';
                echo dttheme_custom_widgetarea_list("left-widgetareas","","multidropdown");
                echo '</div>';                                
            endif;?>
        </div>
    </div><!-- Choose Widget Areas End -->
</div>    

<div id="right-widget-area" class="widget-area-options <?php echo $sidebar_right;?>">
    <!-- Every Where Sidebar Start -->
    <div class="custom-box">
        <div class="column one-sixth">   
            <label><?php _e('Disable Every Where Sidebar For Right','dt_themes');?></label>
        </div>
        <div class="column five-sixth last">  
            <?php $switchclass = array_key_exists("disable-right-everywhere-sidebar",$portfolio_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
            $checked = array_key_exists("disable-right-everywhere-sidebar",$portfolio_settings) ? ' checked="checked"' : '';?>
            <div data-for="mytheme-disable-right-everywhere-sidebar" class="checkbox-switch <?php echo $switchclass;?>"></div>
            <input id="mytheme-disable-right-everywhere-sidebar" class="hidden" type="checkbox" name="disable-right-everywhere-sidebar" value="true"  <?php echo $checked;?>/>
            <p class="note"> <?php _e('YES! to disable Every Where Sidebar','dt_themes');?> </p>
        </div>
    </div><!-- Every Where Sidebar Section End-->

    <!-- 3. Choose Widget Areas Start -->
    <div class="sidebar-section custom-box">
        <div class="column one-sixth"><label><?php _e('Choose Widget Area','dt_themes');?></label></div>
        <div class="column five-sixth last"><?php
            if( array_key_exists('right-widget-area', $portfolio_settings)):
                $widgetareas =  array_unique($portfolio_settings["right-widget-area"]);
                $widgetareas = array_filter($widgetareas);

                foreach( $widgetareas as $widgetarea ){
                    echo '<div class="multidropdown">';
                    echo dttheme_custom_widgetarea_list("right-widgetareas",$widgetarea,"multidropdown");
                    echo '</div>';
                }

                echo '<div class="multidropdown">';
                echo dttheme_custom_widgetarea_list("right-widgetareas","","multidropdown");
                echo '</div>';                                
            else:
                echo '<div class="multidropdown">';
                echo dttheme_custom_widgetarea_list("right-widgetareas","","multidropdown");
                echo '</div>';                                
            endif;?>
        </div>
    </div><!-- Choose Widget Areas End -->
</div>

<!-- Portfolio Layout -->
<div id="portfolio-layout" class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Portfolio Layout','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<ul class="dt-bpanel-layout-set"><?php
			$layouts = array (
				'full-width-portfolio'=>'portfolio-fullwidth',
				'with-left-portfolio'=>'portfolio-with-left-gallery',
				'with-right-portfolio'=>'portfolio-with-right-gallery',);

			$v = array_key_exists ( "portfolio-layout", $portfolio_settings ) ? $portfolio_settings ['portfolio-layout'] : 'full-width-portfolio';
			foreach ( $layouts as $key => $value ) {
				$class = ($key == $v) ? " class='selected' " : "";
				echo "<li><a href='#' rel='{$key}' {$class}><img src='" . plugin_dir_url ( __FILE__ ) . "images/columns/{$value}.png' /></a></li>";
			}?></ul>
			<?php $v = array_key_exists("portfolio-layout",$portfolio_settings) ? $portfolio_settings['portfolio-layout'] : 'full-width-portfolio';
			$cs = ( $v == "content-full-width") ? "style='display:none;'":"";?>
		<input id="mytheme-portfolio-layout" name="portfolio-layout" type="hidden"
			value="<?php echo $v;?>" />
		<p class="note"> <?php _e("You can choose between a left, right or full width portfolio layout.",'dt_themes');?> </p>
	</div>
</div><!-- Portfolio Layout End-->

<!-- Location Info -->
<div class="custom-box">

	<div class="column one-sixth">
		<label><?php _e('Location Info','dt_themes');?></label>
	</div>

	<div class="column five-sixth last">
	<?php $clientname = array_key_exists ( "location-info", $portfolio_settings ) ? $portfolio_settings ['location-info'] : '';?>
    
		<input id="location-info" name="location-info" type="text" class="widefat" value="<?php echo $clientname;?>" />
		<p class="note"> <?php _e("If you wish! You can add location info.",'dt_themes');?> </p>
        <div class="clear"></div>
	</div>
</div><!-- Location Info End -->

<!-- Website Link-->
<div class="custom-box">

	<div class="column one-sixth">
		<label><?php _e('Website Link','dt_themes');?></label>
	</div>

	<div class="column five-sixth last">
	<?php $websitelink = array_key_exists ( "website-link", $portfolio_settings ) ? $portfolio_settings ['website-link'] : '';?>
    
		<input id="website-link" name="website-link" type="text" class="widefat" value="<?php echo $websitelink;?>" />
		<p class="note"> <?php _e("If you wish! You can add client website url.",'dt_themes');?> </p>
        <div class="clear"></div>
	</div>
</div><!-- Website Link-->

<!-- Show Related Posts -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Related Projects','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	
	$switchclass = array_key_exists ( "show-related-items", $portfolio_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-related-items", $portfolio_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-related-item"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-related-item" class="hidden" type="checkbox"
			name="mytheme-related-item" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the related projects at the bottom','dt_themes');?> </p>
	</div>
</div><!-- Show Related Posts End-->

<!-- Show Social Share -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Social Share','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "show-social-share", $portfolio_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-social-share", $portfolio_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-social-share"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-social-share" class="hidden" type="checkbox"
			name="mytheme-social-share" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the social share at the bottom','dt_themes');?> </p>
	</div>
</div><!-- Show Social Share End -->

<!-- Hover Color Start -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Hover Color','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
		$name  = "hover-color";	
		$value = array_key_exists ( "hover-color", $portfolio_settings ) ? $portfolio_settings["hover-color"] :'#' ;?>
		<?php dttheme_admin_color_picker("",$name,$value,'');?>
  	</div>
</div><!-- Hover Color End -->

<!-- Hover Color Opacity Start -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Hover Color Opacity','dt_themes');?></label>
	</div>
	<div class="column three-sixth bpanel-option-set last">
		<?php $opacity = array_key_exists ( "hover-opacity", $portfolio_settings ) ? $portfolio_settings["hover-opacity"] :'';
		echo dttheme_admin_jqueryuislider("","hover-opacity",$opacity,"");?>
  	</div>
</div><!-- Hover Color End -->

<!-- Medias -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Images','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<div class="dt-media-btns-container">
			<a href="#" class="dt-open-media button button-primary"><?php _e( 'Click Here to Add Images', 'dt_themes' );?> </a>
			<a href="#" class="dt-add-video button button-primary"><?php _e( 'Click Here to Add Video', 'dt_themes' );?> </a>
		</div>
		<div class="clear"></div>

		<div class="dt-media-container">
			<ul class="dt-items-holder"><?php
			if (array_key_exists ( "items", $portfolio_settings )) {
				foreach ( $portfolio_settings ["items_thumbnail"] as $key => $thumbnail ) {
					$item = $portfolio_settings ['items'] [$key];
					$out = "";
					$name = "";
					$foramts = array (
							'jpg',
							'jpeg',
							'gif',
							'png' 
					);
					$parts = explode ( '.', $item );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					if (in_array ( $ext, $foramts )) {
						$name = $portfolio_settings ['items_name'] [$key];
						$out .= "<li>";
						$out .= "<img src='{$thumbnail}' alt='' />";
						$out .= "<span class='dt-image-name'>{$name}</span>";
						$out .= "<input type='hidden' name='items[]' value='{$item}' />";
					} else {
						$name = "video";
						$out .= "<li>";
						$out .= "<span class='dt-video'></span>";
						$out .= "<input type='text' name='items[]' value='{$item}' />";
					}
					
					$out .= "<input class='dt-image-name' type='hidden' name='items_name[]' value='{$name}' />";
					$out .= "<input type='hidden' name='items_thumbnail[]' value='{$thumbnail}' />";
					$out .= "<span class='my_delete'></span>";
					$out .= "</li>";
					echo $out;
				}
			}
			?></ul>
		</div>
	</div>
</div><!-- Medias End -->