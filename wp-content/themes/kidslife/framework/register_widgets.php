<?php
require_once get_template_directory().'/framework/theme_widgets/twitter.php';
require_once get_template_directory().'/framework/theme_widgets/mailchimp.php';
require_once get_template_directory().'/framework/theme_widgets/flickr.php';
require_once get_template_directory().'/framework/theme_widgets/recent_posts.php';
require_once get_template_directory().'/framework/theme_widgets/dt_gallery_widgets.php';

add_action('widgets_init', 'dttheme_widgets');
function dttheme_widgets() {
	#Twitter
	register_widget('MY_Twitter');

	#Mailchimp
	register_widget('MY_Mailchimp');

	#Flickr
	register_widget('MY_Flickr');

	#Recent Posts
	register_widget('MY_Recent_Posts');

	#My Galley Widgets
	register_widget('MY_Gallery_Widget');
}

#Add Extra Filed to all widgets
add_action( 'in_widget_form', 'dt_style_widget_form', 5, 3); 
add_filter( 'widget_update_callback', 'dt_update_widget_form', 5, 4);
add_filter( 'dynamic_sidebar_params', 'dt_add_widget_styles', 10, 4); # Front end display

function dt_style_widget_form( $widget, $return, $instance ){?>
	<p>
    	<label for="<?php echo $widget->get_field_id('style'); ?>"><?php _e('Extra CSS Class:','dt_themes');?> 
     	<input id="<?php echo $widget->get_field_id('style');?>" name="<?php echo $widget->get_field_name('style');?>" type="text" size="33"
        	value="<?php if (isset($instance['style'])) echo $instance['style'];?>"></label>
     </p><?php 
	 $return = null;
}

function dt_update_widget_form( $instance, $new_instance, $old_instance, $widget ){
	
	if (!isset($_POST['widget-'.$widget->id_base][$widget->number]['style']))
		return $instance;
		
	$value = $_POST['widget-'.$widget->id_base][$widget->number]['style'];	
	$classes = esc_attr($value);
	$instance['style'] = $classes;
	return $instance;
}

function dt_add_widget_styles( $params ){
	
	global $wp_registered_widgets;
	
	$widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];	
	
	if (isset($widget_opt[$widget_num]['style'])){
		$class = $widget_opt[$widget_num]['style'];
		$params[0]['before_title'] = preg_replace('/class="/', 'class="'.$class.' ',  $params[0]['before_title'], 1);
	}
	return $params;
}?>