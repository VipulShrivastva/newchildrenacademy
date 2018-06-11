<?php add_action("admin_init", "post_metabox");?>
<?php function post_metabox(){
			add_meta_box("post-template-meta-container", __('Post Options','dt_themes'), "post_settings","post", "normal", "default");
            add_meta_box("post-format-meta-container",__('Post Format Options','dt_themes'),"post_format_settings","post","normal","default");
			add_action('save_post','post_meta_save');
	} 
	
	function post_settings($args){ 
		global $post; 
		$tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
		$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();?>

        <!-- Breadcrumb -->
            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('Disable Breadcrumb','dt_themes');?></label></div>
                <div class="column five-sixth last"><?php 
                    $switchclass = array_key_exists("disable-breadcrumb",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                    $checked = array_key_exists("disable-breadcrumb",$tpl_default_settings) ? ' checked="checked"' : '';?>
                    <div data-for="mytheme-page-breadcrumb" class="checkbox-switch <?php echo $switchclass;?>"></div>
                    <input id="mytheme-page-breadcrumb" class="hidden" type="checkbox" name="mytheme-page-breadcrumb" value="true"  <?php echo $checked;?>/>
                    <p class="note"> <?php _e('YES! to disable breadcrumb on this post.','dt_themes');?> </p>
                </div>
            </div>
        <!-- Breadcrumb End-->

        <!-- Title Section Start -->
            <div class="custom-box">
                <div class="column one-sixth"><?php _e( 'Title Background','dt_themes');?></div>
                <div class="column five-sixth last">
                    <div class="image-preview-container">
                        <?php $subtitlebg = array_key_exists ( "sub-title-bg", $tpl_default_settings ) ? $tpl_default_settings ['sub-title-bg'] : '';?>
                        <input name="sub-title-bg" type="text" class="uploadfield medium" readonly="readonly" value="<?php echo $subtitlebg;?>"/>
                        <input type="button" value="<?php esc_attr_e('Upload','dt_themes');?>" class="upload_image_button show_preview" />
                        <input type="button" value="<?php esc_attr_e('Remove','dt_themes');?>" class="upload_image_reset" />
                        <?php if( !empty($subtitlebg) ) dttheme_adminpanel_image_preview($subtitlebg );?>
                        <p class="note"><?php _e("Upload an image for the sub title background",'dt_themes');?></p>
                    </div>                    
                </div>
            </div>

            <div class="custom-box">
                <div class="column one-sixth"></div>
                <div class="column five-sixth last">
                    <div class="column one-third">
                        <label><?php _e('Background Repeat','dt_themes');?></label>
                        <?php $bgrepeat =  array_key_exists ( "sub-title-bg-repeat", $tpl_default_settings ) ? $tpl_default_settings ['sub-title-bg-repeat'] : ''; ?>
                        <div class="clear"></div>
                        <select name="sub-title-bg-repeat">
                            <option value=""><?php _e("Select",'dt_themes');?></option>
                            <?php foreach( array("repeat","repeat-x","repeat-y","no-repeat") as $option): ?>
                                   <option value="<?php echo $option;?>" <?php selected($option,$bgrepeat);?>><?php echo $option;?></option> 
                            <?php endforeach;?>
                        </select>
                        <p class="note"><?php _e("Select how would you like to repeat the background image ",'dt_themes');?></p>
                    </div>
                    <div class="column one-third">
                        <label><?php _e('Background Position','dt_themes');?></label>
                        <?php $bgposition =  array_key_exists ( "sub-title-bg-position", $tpl_default_settings ) ? $tpl_default_settings ['sub-title-bg-position'] : ''; ?>
                        <div class="clear"></div>
                        <select name="sub-title-bg-position">
                            <option value=""><?php _e("Select",'dt_themes');?></option>
                            <?php foreach( array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right") as $option): ?>
                                <option value="<?php echo $option;?>" <?php selected($option,$bgposition);?>> <?php echo $option;?></option> 
                            <?php endforeach;?>
                        </select>
                        <p class="note"><?php _e("Select how would you like to position the background",'dt_themes');?></p>
                    </div>
                    <div class="column one-third last">
                        <label><?php _e('Apply Dark Title','dt_themes');?></label>
                        <div class="clear"></div><?php
                            $switchclass = array_key_exists("dark-bg",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                            $checked = array_key_exists("dark-bg",$tpl_default_settings) ? ' checked="checked"' : '';?>

                            <div data-for="page-darkbg" class="checkbox-switch <?php echo $switchclass;?>"></div>
                            <input id="page-darkbg" class="hidden" type="checkbox" name="page-darkbg" value="true" <?php echo $checked;?>/>
                            <p class="note"> <?php _e('YES! to have dark text for light background.','dt_themes');?> </p>
                    </div>
                </div>    
            </div>
        <!-- Title Section End -->

        <!-- Layout Start -->
        <div id="page-layout" class="custom-box">
			<div class="column one-sixth">                        
                <label><?php _e('Layout','dt_themes');?> </label>
            </div>
			<div class="column five-sixth last">  
                <ul class="bpanel-layout-set">
                    <?php $homepage_layout = array(
                        'content-full-width'=>'without-sidebar', 'with-left-sidebar'=>'left-sidebar', 'with-right-sidebar'=>'right-sidebar', 'with-both-sidebar' =>'both-sidebar');
                        $v =  array_key_exists("layout",$tpl_default_settings) ?  $tpl_default_settings['layout'] : 'content-full-width';
                        foreach($homepage_layout as $key => $value):
                            $class = ($key == $v) ? " class='selected' " : "";
                            echo "<li><a href='#' rel='{$key}' {$class}><img src='".IAMD_FW_URL."theme_options/images/columns/{$value}.png' /></a></li>";
                        endforeach;?>
                </ul>
                <input id="mytheme-post-layout" name="layout" type="hidden"  value="<?php echo $v;?>"/>
                <p class="note"> <?php _e("You can choose between a left, right or no sidebar layout.",'dt_themes');?> </p>
            </div>
        </div><!-- Layout End--><?php 
		$sidebar_left = $sidebar_right = '';
		switch( $v ):
		case 'content-full-width':	$sidebar_left = $sidebar_right = " hidden";	break;
		case 'with-both-sibebar':	$sidebar_left = $sidebar_right = ''; break;
		case 'with-left-sidebar':	$sidebar_left = ""; $sidebar_right = " hidden";	break;
		case 'with-right-sidebar':  $sidebar_left = "hidden"; $sidebar_right = ""; break;
		endswitch;?>
        
        <div id="left-widget-area" class="widget-area-options <?php echo $sidebar_left;?>">
            <!-- Every Where Sidebar Start -->
            <div class="custom-box">
                <div class="column one-sixth">   
                    <label><?php _e('Disable Every Where Sidebar For Left','dt_themes');?></label>
                </div>
                <div class="column five-sixth last">  
                    <?php $switchclass = array_key_exists("disable-left-everywhere-sidebar",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                    $checked = array_key_exists("disable-left-everywhere-sidebar",$tpl_default_settings) ? ' checked="checked"' : '';?>
                    <div data-for="mytheme-disable-left-everywhere-sidebar" class="checkbox-switch <?php echo $switchclass;?>"></div>
                    <input id="mytheme-disable-left-everywhere-sidebar" class="hidden" type="checkbox" name="disable-left-everywhere-sidebar" value="true"  <?php echo $checked;?>/>
                    <p class="note"> <?php _e('YES! to disable Every Where Sidebar for left hand side','dt_themes');?> </p>
                </div>
            </div><!-- Every Where Sidebar Section End-->

            <!-- 3. Choose Widget Areas Start -->
            <div class="sidebar-section custom-box">
                <div class="column one-sixth"><label><?php _e('Choose Widget Area','dt_themes');?></label></div>
                <div class="column five-sixth last"><?php
                    if( array_key_exists('left-widget-area', $tpl_default_settings)):
                        $widgetareas =  array_unique($tpl_default_settings["left-widget-area"]);
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
                    <?php $switchclass = array_key_exists("disable-right-everywhere-sidebar",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                    $checked = array_key_exists("disable-right-everywhere-sidebar",$tpl_default_settings) ? ' checked="checked"' : '';?>
                    <div data-for="mytheme-disable-right-everywhere-sidebar" class="checkbox-switch <?php echo $switchclass;?>"></div>
                    <input id="mytheme-disable-right-everywhere-sidebar" class="hidden" type="checkbox" name="disable-right-everywhere-sidebar" value="true"  <?php echo $checked;?>/>
                    <p class="note"> <?php _e('YES! to disable Every Where Sidebar','dt_themes');?> </p>
                </div>
            </div><!-- Every Where Sidebar Section End-->

            <!-- 3. Choose Widget Areas Start -->
            <div class="sidebar-section custom-box">
                <div class="column one-sixth"><label><?php _e('Choose Widget Area','dt_themes');?></label></div>
                <div class="column five-sixth last"><?php
                    if( array_key_exists('right-widget-area', $tpl_default_settings)):
                        $widgetareas =  array_unique($tpl_default_settings["right-widget-area"]);
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

        <!-- Comment Section Start -->
        <div class="custom-box">
			<div class="column one-sixth">                        
                <label><?php _e('Disable Comments','dt_themes');?></label>
            </div>
			<div class="column five-sixth last">  
				<?php $switchclass = array_key_exists("disable-comment",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                      $checked = array_key_exists("disable-comment",$tpl_default_settings) ? ' checked="checked"' : '';?>
                <div data-for="mytheme-post-comment" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="mytheme-post-comment" class="hidden" type="checkbox" name="post-comment" value="true"  <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to disable Comments.','dt_themes');?> </p>
            </div>	
        </div><!-- Comment Section End-->

        <!-- Featured Image Section Start -->
        <div class="custom-box">
			<div class="column one-sixth">                        
        	    <label><?php _e('Disable Featured Image','dt_themes');?></label>
            </div>
			<div class="column five-sixth last">  
				<?php $switchclass = array_key_exists("disable-featured-image",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                      $checked = array_key_exists("disable-featured-image",$tpl_default_settings) ? ' checked="checked"' : '';?>
                <div data-for="mytheme-post-featured-image" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="mytheme-post-featured-image" class="hidden" type="checkbox" name="post-featured-image" value="true"  <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to disable featured image','dt_themes');?> </p>
            </div>
        </div><!-- Featured Image Section End-->

        <!-- Post Meta-->
        <div class="custom-box">
            <h3><?php _e('Post Meta Options','dt_themes');?></h3>
            <?php $post_meta = array(array(
                    "id"=>		"disable-author-info",
                    "label"=>	__("Disable the Author info.",'dt_themes'),
                    "tooltip"=>	__("By default the author info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ), array(
                    "id"=>		"disable-date-info",
                    "label"=>	__("Disable the date info.",'dt_themes'),
                    "tooltip"=>	__("By default the date info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ),
                array(
                    "id"=>		"disable-comment-info",
                    "label"=>	__("Disable the comment info.",'dt_themes'),
                    "tooltip"=>	__("By default the comment info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ),
                array(
                    "id"=>		"disable-category-info",
                    "label"=>	__("Disable the category info.",'dt_themes'),
                    "tooltip"=>	__("By default the category info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ),
                array(
                    "id"=>		"disable-tag-info",
                    "label"=>	__("Disable the tag info.",'dt_themes'),
                    "tooltip"=>	__("By default the tag info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ),
                array(
                    "id"=>      "disable-format-info",
                    "label"=>   __("Disable the post format info.",'dt_themes'),
                    "tooltip"=> __("By default the post format info will display when viewing your posts. You can choose to disable it here.",'dt_themes')
                ));
            $count = 1;
            foreach($post_meta as $p_meta):
                $last = ($count%3 == 0)?"last":'';
                $id = 		$p_meta['id'];
                $label =	$p_meta['label'];
                $tooltip =  $p_meta['tooltip'];
                $v =  array_key_exists($id,$tpl_default_settings) ?  $tpl_default_settings[$id] : '';
                $rs =		checked($id,$v,false);
                $switchclass = ($v<>'') ? 'checkbox-switch-on' :'checkbox-switch-off';
                
                echo "<div class='one-third-content {$last}'>";
                echo '<div class="bpanel-option-set">';
                echo "<label>{$label}</label>";							
                echo "<div data-for='{$id}' class='checkbox-switch {$switchclass}'></div>";
                echo "<input class='hidden' id='{$id}' type='checkbox' name='{$id}' value='{$id}' {$rs} />";
				echo '<p class="note">';
				echo ($tooltip);
				echo '</p>';
                echo '</div>';
                echo '</div>';
                
            $count++;	
            endforeach;?>
        </div><!-- Post Meta End-->
<?php
		wp_reset_postdata();
    }

    function post_format_settings( $args ) {
        global $post; 
        $tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
        $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array(); ?>

        <div id="dt-post-format-gallery">
            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('Image Gallery','dt_themes');?> </label></div>
                <div class="column five-sixth last">
                    <div class="dt-media-btns-container">
                        <a href="#" class="dt-open-media-for-gallery-post button button-primary">
                            <?php _e( 'Click Here to Add Images', 'dt_themes' );?> </a>
                    </div>
                    <div class="clear"></div>
                    <div class="dt-media-container">
                        <ul class="dt-items-holder"><?php
                            if ( array_key_exists("items",  $tpl_default_settings)) {
                                foreach ( $tpl_default_settings["items_thumbnail"] as $key => $thumbnail ) {
                                    $item = $tpl_default_settings ['items'] [$key];
                                    $out = "";
                                    $name = "";
                                    $foramts = array ('jpg','jpeg','png','gif');
                                    $parts = explode ( '.', $item );
                                    $ext = strtolower ( $parts [count ( $parts ) - 1] );

                                    $out .= "<li>";
                                    if (in_array ( $ext, $foramts )) {
                                        $name = $tpl_default_settings ['items_name'] [$key];
                                    
                                        $out .= "<img src='{$thumbnail}' alt='' />";
                                        $out .= "<span class='dt-image-name'>{$name}</span>";
                                        $out .= "<input type='hidden' name='items[]' value='{$item}' />";
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
            </div> 
        </div>

        <div id="dt-post-format-video-audio">
            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('oEmbed URL','dt_themes');?> </label></div>
                <div class="column five-sixth last">
                    <?php $oembed_url = array_key_exists("oembed-url", $tpl_default_settings) ? $tpl_default_settings['oembed-url'] : "";?>
                    <input type="text" name="oembed-url" value="<?php echo $oembed_url;?>" class="widefat"/>
                    <p class="note"><?php _e("Enter a URL that is compatible with WP's built-in oEmbed feature. This setting is used for your video and audio post formats.",'dt_themes');?></p>
                </div>
            </div>

            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('Self Hosted URL','dt_themes');?> </label></div>
                <div class="column five-sixth last">
                    <?php $self_hosted_url = array_key_exists("self-hosted-url", $tpl_default_settings) ? $tpl_default_settings['self-hosted-url'] : ""; ?>
                    <input type="text" name="self-hosted-url" value="<?php echo $self_hosted_url;?>" class="widefat"/>
                    <p class="note"><?php _e("Insert your self hosted video or audio url here.",'dt_themes');?></p>                    
                </div>
            </div>            
        </div>

<?php wp_reset_postdata();
    }
	
	function post_meta_save($post_id){
		global $pagenow;
		if ( 'post.php' != $pagenow ) return $post_id;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 	return $post_id;
		
		$settings = array();

        $settings['sub-title-bg'] = $_POST['sub-title-bg'];
        $settings['sub-title-bg-repeat'] = $_POST['sub-title-bg-repeat'];
        $settings['sub-title-bg-position'] = $_POST['sub-title-bg-position'];
        $settings['dark-bg'] = $_POST['page-darkbg'];
        $settings['disable-breadcrumb'] = $_POST['mytheme-page-breadcrumb'];

		$settings['layout'] = isset($_POST['layout']) ? $_POST['layout'] : "";
		$settings['disable-comment'] = isset( $_POST['post-comment'] ) ? $_POST['post-comment'] : "";
		
		$settings['disable-featured-image'] = isset($_POST['post-featured-image']) ? $_POST['post-featured-image'] : "";
		$settings['disable-author-info']	= isset($_POST['disable-author-info']) ? $_POST['disable-author-info'] : "";
        $settings['disable-format-info']    = isset($_POST['disable-format-info']) ? $_POST['disable-format-info'] : "";
		$settings['disable-date-info']	= isset($_POST['disable-date-info']) ? $_POST['disable-date-info'] : "";
		$settings['disable-comment-info']	= isset($_POST['disable-comment-info']) ? $_POST['disable-comment-info'] : "";
		$settings['disable-category-info']	= isset($_POST['disable-category-info'])?$_POST['disable-category-info']: "";
		$settings['disable-tag-info']	= isset($_POST['disable-tag-info']) ? $_POST['disable-tag-info'] : "";

        $settings['left-widget-area'] =  array_unique(array_filter($_POST['mytheme']['left-widgetareas']));
		$settings['right-widget-area'] =  array_unique(array_filter($_POST['mytheme']['right-widgetareas']));
		
		$settings['disable-left-everywhere-sidebar'] = isset($_POST['disable-left-everywhere-sidebar']) ? $_POST['disable-left-everywhere-sidebar'] : "";		
		$settings['disable-right-everywhere-sidebar'] = isset($_POST['disable-right-everywhere-sidebar']) ? $_POST['disable-right-everywhere-sidebar'] : "";

        #For Gallery Post Format
        if( $_POST['post_format'] === "gallery") {
            $settings ['items'] = isset ( $_POST ['items'] ) ? $_POST ['items'] : "";
            $settings ['items_thumbnail'] = isset ( $_POST ['items_thumbnail'] ) ? $_POST ['items_thumbnail'] : "";
            $settings ['items_name'] = isset ( $_POST ['items_name'] ) ? $_POST ['items_name'] : "";

        } elseif( $_POST['post_format'] === "video" || $_POST['post_format'] === "audio" ) {
            $settings['oembed-url'] = isset( $_POST['oembed-url'] ) ? $_POST['oembed-url'] : "";
            $settings['self-hosted-url'] = isset( $_POST['self-hosted-url'] ) ? $_POST['self-hosted-url'] : "";
        }
        
		
		update_post_meta($post_id, "_dt_post_settings", array_filter($settings));
	}?>