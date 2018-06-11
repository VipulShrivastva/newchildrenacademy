<?php

global $dt_modules, $dt_animation_types, $woothemes_sensei, $dtthemes_columns;

$dt_animation_types = array("flash" => "flash", "shake" => "shake", "bounce" => "bounce", "tada" => "tada", "swing" => "swing", "wobble" => "wobble", "pulse" => "pulse", "flip" => "flip", "flipInX" => "flipInX", "flipOutX" => "flipOutX", "flipInY" => "flipInY", "flipOutY" => "flipOutY", "fadeIn" => "fadeIn", "fadeInUp" => "fadeInUp", "fadeInDown" => "fadeInDown", "fadeInLeft" => "fadeInLeft", "fadeInRight" => "fadeInRight", "fadeInUpBig" => "fadeInUpBig", "fadeInDownBig" => "fadeInDownBig", "fadeInLeftBig" => "fadeInLeftBig", "fadeInRightBig" => "fadeInRightBig", "fadeOut" => "fadeOut", "fadeOutUp" => "fadeOutUp","fadeOutDown" => "fadeOutDown", "fadeOutLeft" => "fadeOutLeft", "fadeOutRight" => "fadeOutRight", "fadeOutUpBig" => "fadeOutUpBig", "fadeOutDownBig" => "fadeOutDownBig", "fadeOutLeftBig" => "fadeOutLeftBig","fadeOutRightBig" => "fadeOutRightBig", "bounceIn" => "bounceIn", "bounceInUp" => "bounceInUp", "bounceInDown" => "bounceInDown", "bounceInLeft" => "bounceInLeft", "bounceInRight" => "bounceInRight", "bounceOut" => "bounceOut", "bounceOutUp" => "bounceOutUp", "bounceOutDown" => "bounceOutDown", "bounceOutLeft" => "bounceOutLeft", "bounceOutRight" => "bounceOutRight", "rotateIn" => "rotateIn", "rotateInUpLeft" => "rotateInUpLeft", "rotateInDownLeft" => "rotateInDownLeft", "rotateInUpRight" => "rotateInUpRight", "rotateInDownRight" => "rotateInDownRight", "rotateOut" => "rotateOut", "rotateOutUpLeft" => "rotateOutUpLeft","rotateOutDownLeft" => "rotateOutDownLeft", "rotateOutUpRight" => "rotateOutUpRight", "rotateOutDownRight" => "rotateOutDownRight", "hinge" => "hinge", "rollIn" => "rollIn", "rollOut" => "rollOut", "lightSpeedIn" => "lightSpeedIn", "lightSpeedOut" => "lightSpeedOut", "slideDown" => "slideDown", "slideUp" => "slideUp", "slideLeft" => "slideLeft", "slideRight" => "slideRight", "slideExpandUp" => "slideExpandUp", "expandUp" => "expandUp", "expandOpen" => "expandOpen", "bigEntrance" => "bigEntrance", "hatch" => "hatch", "floating" => "floating", "tossing" => "tossing", "pullUp" => "pullUp", "pullDown" => "pullDown", "stretchLeft" => "stretchLeft", "stretchRight" => "stretchRight");

$variations = array( "aqua" => 'Aqua', "blue" => 'Blue', 'burnt_orange' => "Burnt Orange", "chocolate" => 'Chocolate', "green" => 'Green', "grey" => 'Grey', "lavender" => 'Lavender', "mustard" => 'Mustard', "ocean" => 'Ocean', "orange" => 'Orange',"pearl" => 'pearl', "pink" => 'Pink', "purple" => 'Purple', "red" => 'Red', "ruby" => 'Ruby', "steelblue" => 'Steel Blue', "teal" => 'Teal', "turquoise" => 'Turquoise', "violet" => 'Violet', "yellow" => 'Yellow');

$button_types = array('with-icon' => 'With Icon', 'without-icon' => 'Without Icon');

$button_size = array('small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'xlarge' => 'Xlarge');

$page_targets = array('_blank' => 'Blank', '_new' => 'New', '_parent' => 'Parent', '_self' => 'Self', '_top' => 'Top');

$box_types = array('titled-box' => 'Titled Box', 'error-box' => 'Error Box', 'warning-box' => 'Warning Box', 'success-box' => 'Success Box', 'info-box' => 'Info Box');

$pullquote_types = array('pullquote1' => 'Pullquote 1', 'pullquote2' => 'Pullquote 2', 'pullquote3' => 'Pullquote 3', 'pullquote4' => 'Pullquote 4', 'pullquote5' => 'Pullquote 5', 'pullquote6' => 'Pullquote 6');

$callout_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5');

$testimonial_types = $colored_icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$align = array('left' => 'Left', 'right' => 'Right', 'center' => 'Center');

$yesorno = array('yes' => 'Yes', 'no' => 'No');

$trueorfalse = array('true' => 'True', 'false' => 'False');

$tooltip_positions = array('top' => 'Top', 'right' => 'Right', 'bottom' => 'Bottom', 'left' => 'Left');

$tooltip_types = array('default' => 'Default', 'boxed' => 'Boxed');

$dropcap_types = array('Default' => 'Default', 'Circle' => 'Circle', 'Bordered Circle' => 'Bordered Circle', 'Square' => 'Square', 'Bordered Square' => 'Bordered Square');

$bacground_repeat = array('no-repeat' => 'No Repeat', 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y');

$bacground_position = array('left top' => 'Left Top', 'left center' => 'Left Center', 'left bottom' => 'Left Bottom', 'right top' => 'Right Top', 'right center' => 'Right Center', 'right bottom' => 'Right Bottom', 'center top' => 'Center Top', 'center center' => 'Center Center', 'center bottom' => 'Center Bottom');

$lengths = array(5 => 5, 10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70, 75 => 75, 80 => 80, 85 => 85, 90 => 90, 95 => 95, 100 => 100);

$post_columns = array(2 => 2, 3 => 3);

$portfolio_columns = array(2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

$teacher_columns = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);

$icon_box_types = array('type2' => 'Type 2', 'type3' => 'Type 3');

$progressbar_types = array('standard' => 'Standard', 'progress-striped' => 'Striped', 'progress-striped-active' => 'Striped Active');

$oltypes = array('decimal' => 'Decimal', 'decimal-leading-zero' => 'Decimal With Leading Zero', 'lower-alpha' => 'Lower Alpha', 'lower-roman' => 'Lower Roman', 'upper-alpha' => 'Upper Alpha', 'upper-roman' => 'Upper Roman');

$ultypes = array('arrow' =>'Arrow','book' => 'Book','check' => 'Check','cog' => 'Cog','car'=>'Car','rounded-arrow' =>'Rounded Arrow','double-arrow' =>'Double Arrow','heart' =>'Heart','trash' =>'Trash','star' =>'Star','tick' =>'Tick','rounded-tick' =>'Rounded Tick','cross' =>'Cross','hand' => 'Hand','rounded-cross' =>'Rounded Cross','rounded-question' =>'Rounded Question','rounded-info' =>'Rounded Info','reddit' =>'Reddit','delete' =>'Delete','gift' => 'Gift','graduation-cap' => 'Graduation Cap','warning' =>'Warning','comment' =>'Comment','edit' =>'Edit','share' =>'Share','plus' =>'Plus','tree' => 'Tree','rounded-plus' =>'Rounded Plus','minus' =>'Minus','star' => 'Star','rounded-minus' =>'Rounded minus','asterisk' =>'Asterisk','cart' =>'Cart','folder' =>'Folder','play' => 'Play','folder-open' =>'Folder Open','desktop' =>'Desktop','tablet' =>'Tablet','mobile' =>'Mobile','reply' =>'Reply','quote' =>'Quote','mail' =>'Mail','external-link' =>'External Link','adjust' =>'Adjust','pencil' =>'Pencil','print' =>'Print','smile' => 'Smile','tag' =>'Tag','thumbs-up' =>'Thumbs Up','thumbs-down' =>'Thumbs Down','time' =>'Time','globe' =>'Globe','music' => 'Music','moon' => 'Moon','pushpin' =>'Pushpin','map-marker' =>'Map Marker','link' =>'Link','paper-clip' =>'Paper Clip','download' =>'Download','key' =>'Key','search' =>'Search','rss' =>'Rss','twitter' =>'Twitter','facebook' =>'Facebook','linkedin' =>'Linkedin','google-plus' =>'Google Plus');

$slider_types = array('LayerSlider' => 'Layer Slider', 'RevolutionSlider' => 'Revolution Slider');

$column_options = array(
	'id' => array(  
		'title' => esc_html__('ID', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	),
	'type' => array(
		'title' => esc_html__('Type', 'dt_themes'),
		'type' => 'select',
		'options' => array('type1' => 'Type 1 ( With Space )', 'type2' => 'Type 2 ( Without Space )'),
		'default_value' => array(),
	),	
	'class' => array(
		'title' => esc_html__('CSS Class', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	),
	'style' => array(
		'title' => esc_html__('Inline Style', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	)		
);

/*  Start of Columns Definition */
$dtthemes_columns['full_width']		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1 Column', 'dt_themes'));
$dtthemes_columns['one_half'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1/2 Column', 'dt_themes'));
$dtthemes_columns['one_third'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1/3 Column', 'dt_themes'));
$dtthemes_columns['one_fourth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1/4 Column', 'dt_themes'));
$dtthemes_columns['one_fifth'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1/5 Column', 'dt_themes'));
$dtthemes_columns['one_sixth'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('1/6 Column', 'dt_themes'));
$dtthemes_columns['two_third'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('2/3 Column', 'dt_themes'));
$dtthemes_columns['two_fifth'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('2/5 Column', 'dt_themes'));
$dtthemes_columns['two_sixth'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('2/6 Column', 'dt_themes'));
$dtthemes_columns['three_fourth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('3/4 Column', 'dt_themes'));
$dtthemes_columns['three_fifth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('3/5 Column', 'dt_themes'));
$dtthemes_columns['three_sixth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('3/6 Column', 'dt_themes'));
$dtthemes_columns['four_fifth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('4/5 Column', 'dt_themes'));
$dtthemes_columns['four_sixth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('4/6 Column', 'dt_themes'));
$dtthemes_columns['five_sixth'] 	= array( 'type' => 'column', 'options' => $column_options, 'name' => __('5/6 Column', 'dt_themes'));
$dtthemes_columns['resizable'] 		= array( 'type' => 'column', 'options' => $column_options, 'name' => __('Resizable Column', 'dt_themes'));
unset($dtthemes_columns['resizable']['options']['type']);

$dtthemes_columns['fullwidth_section'] = array( 
	'name' => __('Fullwidth Section', 'dt_themes'),
	'type' => 'section',
	'separatecolumns' => 'true',
	'options' => array(
		'backgroundcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'backgroundimage' => array(
			'title' => __('Background Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'opacity' => array(
			'title' => __('Background Opacity', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'parallax' => array(
			'title' => __('Parallax Effect', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('no')
		),
		'backgroundrepeat' => array(
			'title' => __('Background Repeat', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_repeat,
			'default_value' => array('no-repeat')
		),
		'backgroundposition' => array(
			'title' => __('Background Position', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_position,
			'default_value' => array('left top')
		),
		'paddingtop' => array(
			'title' => __('Padding Top', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'paddingbottom' => array(
			'title' => __('Padding Bottom', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),

		'margintop' => array(
			'title' => __('Margin Top', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'marginbottom' => array(
			'title' => __('Margin Bottom', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),

		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dtthemes_columns['fullwidth_video'] = array( 
	'name' => __('Fullwidth Section Video', 'dt_themes'),
	'type' => 'section',
	'separatecolumns' => 'true',
	'options' => array(
		'mp4' => array(
			'title' => __('MP4', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'webm' => array(
			'title' => __('WEBM', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'ogv' => array(
			'title' => __('OGV', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'poster' => array(
			'title' => __('Poster Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'backgroundimage' => array(
			'title' => __('Background Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'paddingtop' => array(
			'title' => __('Padding Top (in px)', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'paddingbottom' => array(
			'title' => __('Padding Bottom (in px)', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);
/*  End of Columns definition */


/*  Start of General Modules */
$dt_modules['general']['doshortcode_anycontent'] = array(
	'name' => __('Add Any Content Here', 'dt_themes'),
	'tooltip' => 'Add any content using this module',
	'icon_class' => 'ico-anycontent',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true
		)
	)
);
											 
$dt_modules['general']['doshortcode_accordion_framed'] = array(
	'name' => __('Accordion Framed', 'dt_themes'),
	'tooltip' => 'Add Accordion Framed Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group class=""]<br>
							[dt_sc_toggle_framed title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
						[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['doshortcode_accordion_default'] = array(
	'name' => __('Accordion Default', 'dt_themes'),
	'tooltip' => 'Add Accordion Default Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group class=""]<br>
							[dt_sc_toggle title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
						[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['animation'] = array(
	'name' => __('Animation', 'dt_themes'),
	'tooltip' => 'Add Animation effect for any content',
	'icon_class' => 'ico-animation',
	'options' => array(
		'effect' => array(
			'title' => __('Choose Effect', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('fadeInUp')
		),
		'delay' => array(
			'title' => __('Delay', 'dt_themes'),
			'type' => 'text',
			'default_value' => 400
		),
		'animation_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Add any content here for animation.'
		)
	)
);

$dt_modules['general']['titled_box'] = array(
	'name' => __('Titled Box', 'dt_themes'),
	'tooltip' => 'Add titled box and different types of message box',
	'icon_class' => 'ico-box',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $box_types,
			'default_value' => array('titled-box')
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-cogs'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'box_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['button'] = array(
	'name' => __('Button', 'dt_themes'),
	'tooltip' => 'Add Button',
	'icon_class' => 'ico-button',
	'options' => array(

		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $button_types,
			'default_value' => array('type1')
		),

		'icon' => array(
			'title' => __('Icon','dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),

		'btn_content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'The button title.'
		),

		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),

		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),

		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),

		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),

		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),

		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),

		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);


$dt_modules['general']['outlined_button'] = array(
	'name' => __('Outlined Button', 'dt_themes'),
	'tooltip' => 'Add Button',
	'icon_class' => 'ico-button',
	'options' => array(

		'btn_content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'The button title.'
		),

		'number' => array(
			'title' => __('Number', 'dt_themes'),
			'type' => 'text',
			'default_value' => '1'
		),

		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),

		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),

		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),

		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),

		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['general']['blockquote'] = array(
	'name' => __('Blockquote', 'dt_themes'),
	'tooltip' => 'Add Blockquote',
	'icon_class' => 'ico-blockquote',
	'options' => array(

		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),

		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),

		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array('chillipepper')
		),

		'cite' => array(
			'title' => __('Cite', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),

		'blockquote_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['pullquote'] = array(
	'name' => __('Pullquote', 'dt_themes'),
	'tooltip' => 'Add different types of pullquotes',
	'icon_class' => 'ico-quote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $pullquote_types,
			'default_value' => array('pullquote1')
		),
		'icon' => array(
			'title' => __('Show Icon', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('yes')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'cite' => array(
			'title' => __('Cite Name', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Dolor sit amet'
		),
		'pq_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['tooltip'] = array(
	'name' => __('Tooltip', 'dt_themes'),
	'tooltip' => 'Add tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_types,
			'default_value' => array('default')
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_positions,
			'default_value' => array('top')
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'tooltip' => array(
			'title' => __('Tooltip Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Consectetur adipisicing elit'
		),
		'href' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'tp_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	)
);

$dt_modules['general']['callout_box'] = array(
	'name' => __('Callout Box', 'dt_themes'),
	'tooltip' => 'Add the callout box here',
	'icon_class' => 'ico-callout',
	'options' => array(

		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $callout_box_types,
			'default_value' => array('type1')
		),

		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-home'
		),

		'button_text' => array(
			'title' => __('Button Label', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Purchase Now'
		),

		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),

		'button_icon' => array(
			'title' => __('Button Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-home'
		),

		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),

		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempora.</h4> <h5>Come Experience the real life situations of saving life</h5>"
		)
	)
);

$dt_modules['general']['fancy_ol'] = array(
	'name' => __('Ordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in ordered list',
	'icon_class' => 'ico-orderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $oltypes,
			'default_value' => array('decimal')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'ol_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ol>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ol>'
		)
	)
);

$dt_modules['general']['fancy_ul'] = array(
	'name' => __('Unordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in unordered lists',
	'icon_class' => 'ico-unorderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $ultypes,
			'default_value' => array('arrow')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text'
		),
		'ul_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ul>'
		)
	)
);

$dt_modules['general']['pricing_table'] = array(
	'name' => __('Pricing Table 1', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(
		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_one_third first]
								[dt_sc_pricing_table_item type="type1" title="Title" button_text="Buy Now" image="http://placehold.it/98x87&text=DT" button_link="#" variation="yellow" currency="$" price="15" per="month" selected]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third]
								[dt_sc_pricing_table_item type="type1" title="Title" button_text="Buy Now" image="http://placehold.it/98x87&text=DT" button_link="#" variation="burnt_orange" currency="$" price="15" per="month"]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third]
								[dt_sc_pricing_table_item type="type1" title="Title" button_text="Buy Now" image="http://placehold.it/98x87&text=DT" button_link="#" variation="green" currency="$" price="15" per="month"]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]'
		)
	)
);

$dt_modules['general']['pricing_table_2'] = array(
	'name' => __('Pricing Table 2', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(
		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_one_third first]
								[dt_sc_pricing_table_item type="type2" title="Title" button_text="Buy Now" image="http://placehold.it/300x200&text=DesignThemes" button_link="#" variation="yellow" currency="$" price="15" per="month" selected]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third]
								[dt_sc_pricing_table_item type="type2" title="Title" button_text="Buy Now" image="http://placehold.it/300x200&text=DesignThemes" button_link="#" variation="burnt_orange" currency="$" price="15" per="month"]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]
								[dt_sc_one_third]
								[dt_sc_pricing_table_item type="type2" title="Title" button_text="Buy Now" image="http://placehold.it/300x200&text=DesignThemes" button_link="#" variation="green" currency="$" price="15" per="month"]
								<ul>
									<li>Text</li>
									<li>Text</li>
									<li>Text</li>
								</ul>
								[/dt_sc_pricing_table_item]
								[/dt_sc_one_third]'
		)
	)
);

$dt_modules['general']['progressbar'] = array(
	'name' => __('Progress Bar', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $progressbar_types,
			'default_value' => array('standard')
		),
		'color' => array(
			'title' => __('Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'value' => array(
			'title' => __('Value', 'dt_themes'),
			'type' => 'text',
			'default_value' => 55
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Consectetur'
		)
	)
);

$dt_modules['general']['tabs_horizontal'] = array(
	'name' => __('Tabs - Horizontal', 'dt_themes'),
	'tooltip' => 'Add horizontal tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tab title="Tab 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]<br>
							[dt_sc_tab title="Tab 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]<br>
							[dt_sc_tab title="Tab 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]'
		)
	)
);

$dt_modules['general']['tabs_vertical'] = array(
	'name' => __('Tabs Vertical', 'dt_themes'),
	'tooltip' => 'Add vertical tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tab title="Tab 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]<br>
							[dt_sc_tab title="Tab 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]<br>
							[dt_sc_tab title="Tab 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_tab]'
		)
	)
);

$dt_modules['general']['doshortcode_toggledefault'] = array(
	'name' => __('Toggle Default', 'dt_themes'),
	'tooltip' => 'Add default toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'td_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle title="Toggle 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Toggle 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Toggle 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
						[/dt_sc_toggle]'
		)
	)
);

$dt_modules['general']['doshortcode_toggleframed'] = array(
	'name' => __('Toggle Framed', 'dt_themes'),
	'tooltip' => 'Add framed toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle_framed title="Toggle 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Toggle 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Toggle 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
						[/dt_sc_toggle_framed]'
		)
	)
);

$dt_modules['general']['dropcap'] = array(
	'name' => __('Dropcap', 'dt_themes'),
	'tooltip' => __('Use this module to add dropcap', 'dt_themes'),
	'icon_class' => 'ico-dropcap',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $dropcap_types,
			'default_value' => array('Default')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#808080'
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'A'
		)
	)
);

$dt_modules['general']['doshortcode_team'] = array(
	'name' => __('Team', 'dt_themes'),
	'tooltip' => __('Use this module to add member', 'dt_themes'),
	'icon_class' => 'ico-team',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team name="DesignThemes" role="Chief Programmer" image="http://placehold.it/500" twitter="#" facebook="#" google="#" linkedin="#"]
								<p>Saleem naijar kaasram eerie can be disbursed in the wofl like of a fox that is her thing smaoasa lase lemedds laasd pamade eleifend sapien.</p>
								[/dt_sc_team]'
		)
	)
);

$dt_modules['general']['testimonial'] = array(
	'name' => __('Testimonial', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'name' => array(
			'title' => __('Name', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Name Comes Here'
		),
		'role' => array(
			'title' => __('Role', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Role Comes Here'
		),	
		'rating' => array(
			'title' => __('Rating', 'dt_themes'),
			'type' => 'select',
			'options' => array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),
			'default_value' => array('3')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'image' => array(
			'title' => __('Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => 'http://placehold.it/300'
		),
		'tm_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
		)
	)
);

$dt_modules['general']['testimonial_carousel'] = array(
	'name' => __('Testimonial Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial carousel', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'tmc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<h2>Testimonials</h2><ul>
									<li>[dt_sc_testimonial name="John Doe" image="http://placehold.it/300" role="CEO &amp; Founder - Dhoom Inc" rating="4"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									<li>[dt_sc_testimonial name="John Doe" image="http://placehold.it/300" role="CEO &amp; Founder - Dhoom Inc" rating="3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									<li>[dt_sc_testimonial name="John Doe" image="http://placehold.it/300" role="CEO &amp; Founder - Dhoom Inc" rating="3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
								</ul>'
		)
	)
);

$dt_modules['general']['carousel'] = array(
	'name' => __('Clients Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add clients carousel', 'dt_themes'),
	'icon_class' => 'ico-clients',
	'options' => array(
		'cc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<h2>Clients</h2><ul>
									<li><a href="#"><img title="Client 1" src="http://placehold.it/550x241&amp;text=Image 1" alt="Client 1" /></a></li>
									<li><a href="#"><img title="Client 2" src="http://placehold.it/550x241&amp;text=Image 2" alt="Client 2" /></a></li>
									<li><a href="#"><img title="Client 3" src="http://placehold.it/550x241&amp;text=Image 3" alt="Client 3" /></a></li>
									<li><a href="#"><img title="Client 4" src="http://placehold.it/550x241&amp;text=Image 4" alt="Client 4" /></a></li>
									<li><a href="#"><img title="Client 5" src="http://placehold.it/550x241&amp;text=Image 5" alt="Client 5" /></a></li>
								</ul>'
		)
	)
);

$dt_modules['general']['icon_box'] = array(
	'name' => __('Icon Box', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'type' => array(
			'title' => __('Types', 'dt_themes'),
			'type' => 'select',
			'options' => $icon_box_types,
			'default_value' => array('type2')
		),
		'fontawesome_icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'trophy'
		),
		'custom_icon' => array(
			'title' => __('Custom Icon', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'ib_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus sollicitudin nunc nec rhoncus.'
		)
	)
);

$dt_modules['general']['icon_box_type1'] = array(
	'name' => __('Another Icon Box ', 'dt_themes'),
	'tooltip' => __('Use this module to add default icon box ', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'inner_image' => array(
			'title' => __('Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => 'http://placehold.it/420&text=DesignThemes'
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'ib_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.'
		)
	)
);
/*  End of General Modules */


/*  Start of Unique Modules */
$dt_modules['unique']['infographic_bar'] = array(
	'name' => __('Infographic Bar', 'dt_themes'),
	'tooltip' => 'Add infographic bar',
	'icon_class' => 'ico-infographicbar',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-female'
		),
		'icon_size' => array(
			'title' => __('Icon size', 'dt_themes'),
			'type' => 'text',
			'default_value' => '50'
		),
		'value' => array(
			'title' => __('Percentage', 'dt_themes'),
			'type' => 'text',
			'default_value' => '75'
		),
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $progressbar_types,
			'default_value' => array('standard')
		),
		'color' => array(
			'title' => __('Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Laasd pamade eleifend la sapien. Vestibulum purus quam.'
		)
	)
);

$dt_modules['unique']['donutchart_small'] = array(
	'name' => __('Donut Chart - Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#808080'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

$dt_modules['unique']['donutchart_medium'] = array(
	'name' => __('Donut Chart - Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#808080'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

$dt_modules['unique']['donutchart_large'] = array(
	'name' => __('Donut Chart - Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#808080'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '40'
		),
	)
);

if(function_exists('dttheme_is_plugin_active') && dttheme_is_plugin_active('the-events-calendar/the-events-calendar.php')) {
	
	$dt_modules['unique']['events'] = array(
		'name' => __('Events', 'dt_themes'),
		'tooltip' => __('Use this module to add events list or carousel', 'dt_themes'),
		'icon_class' => 'ico-events',
		'options' => array(
			'limit' => array(
				'title' => __('Limit', 'dt_themes'),
				'type' => 'text',
				'default_value' => '4'
			),
			'carousel' => array(
				'title' => __('Carousel', 'dt_themes'),
				'type' => 'select',
				'options' => $trueorfalse,
				'default_value' => array('false')
			),
		)
	);

}

$dt_modules['unique']['post'] = array(
	'name' => __('Single Post', 'dt_themes'),
	'tooltip' => __('Use this module to display any single post', 'dt_themes'),
	'icon_class' => 'ico-singlepost',
	'options' => array(
		'id' => array(
			'title' => __('Post Id', 'dt_themes'),
			'type' => 'text',
			'default_value' => '1'
		),
		'read_more_text' => array(
			'title' => __('Read More Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Read More'
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '10'
		),
	)
);

$dt_modules['unique']['recent_post'] = array(
	'name' => __('Recent Posts', 'dt_themes'),
	'tooltip' => __('Use this module to display recent posts', 'dt_themes'),
	'icon_class' => 'ico-recentposts',
	'options' => array(
		'columns' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => $post_columns,
			'default_value' => array(3)
		),
		'count' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '3'
		),
		'read_more_text' => array(
			'title' => __('Read More Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Read More'
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '10'
		),
		'category' => array(
			'title' => __('Category','dt_themes'),
			'type' => 'text',
		)
	)
);

$dt_modules['unique']['recent_portfolio'] = array(
	'name' => __('Recent Portfolios', 'dt_themes'),
	'tooltip' => __('Add this module to show recent seven portfolio items in hexagon shape', 'dt_themes'),
	'icon_class' => 'ico-portfolio-item',
	'disable_resize' => true,
);

$dt_modules['unique']['recent_portfolio_from_cateogory'] = array(
	'name' => __('Recent Portfolios from category', 'dt_themes'),
	'tooltip' => __('Add this module to show recent seven portfolio items from given category in hexagon shape', 'dt_themes'),
	'icon_class' => 'ico-portfolio-item',
	'options' => array(
		'category' => array(
			'title' => __('Category Id','dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['unique']['icon_box_colored'] = array(
	'name' => __('Icon Box Colored', 'dt_themes'),
	'tooltip' => 'Add the colored icon box',
	'icon_class' => 'ico-iconbox-colored',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Sample Title'
		),
		'image' => array(
			'title' => __('Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => 'http://placehold.it/1170x538&text=DesignThemes'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'ibc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>"
		)
	)
);

$dt_modules['unique']['class_hours'] = array(
	'name' => __('Class Hours','dt_themes'),
	'tooltip' => __('Use this module to add class hours','dt_themes'),
	'icon_class' => 'icon-clients',
	'options'=> array(

		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Class Hours'
		),
		
		'cc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_class_hour day="Monday" time="9am - 3pm"]<br>
			[dt_sc_class_hour day="Tuesday" time="9am - 3pm"]<br>
			[dt_sc_class_hour day="Wednesday" time="9am - 3pm"]<br>
			[dt_sc_class_hour day="Thursday" time="9am - 3pm"]<br>
			[dt_sc_class_hour day="Friday" time="9am - 3pm"]<br>
			[dt_sc_class_hour day="Saturday" time="Holiday"]<br>
			[dt_sc_class_hour day="Sunday" time="Holiday"]')
		)
);

$dt_modules['unique']['social'] = array(
	'name' => __('Social', 'dt_themes'),
	'tooltip' => __('Use this module to add social icons', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
			'delicious' => array( 'title' => __('Delicious','dt_themes'), 'type'=>'text' ),
			'deviantart' => array( 'title' => __('Deviantart','dt_themes'), 'type'=>'text' ),
			'digg' => array( 'title' => __('Digg','dt_themes'), 'type'=>'text' ),
			'dribbble' => array( 'title' => __('Dribbble','dt_themes'), 'type'=>'text' ),
			'envelope' => array( 'title' => __('Envelope','dt_themes'), 'type'=>'text' ),
			'facebook' => array( 'title' => __('Facebook','dt_themes'), 'type'=>'text' ),
			'flickr' => array( 'title' => __('Flickr','dt_themes'), 'type'=>'text' ),
			'google_plus' => array( 'title' => __('Google Plus','dt_themes'), 'type'=>'text' ),
			'gtalk' => array( 'title' => __('GTalk','dt_themes'), 'type'=>'text' ),
			'lastfm' => array( 'title' => __('Lastfm','dt_themes'), 'type'=>'text' ),
			'linkedin' => array( 'title' => __('LinkedIn','dt_themes'), 'type'=>'text' ),
			'myspace' => array( 'title' => __('Myspace','dt_themes'), 'type'=>'text' ),
			'picasa' => array( 'title' => __('Picasa','dt_themes'), 'type'=>'text' ),
			'pinterest' => array( 'title' => __('Pinterest','dt_themes'), 'type'=>'text' ),
			'reddit' => array( 'title' => __('Reddit','dt_themes'), 'type'=>'text' ),
			'rss' => array( 'title' => __('Rss','dt_themes'), 'type'=>'text' ),
			'skype' => array( 'title' => __('Skype','dt_themes'), 'type'=>'text' ),
			'stumbleupon' => array( 'title' => __('Stumbleupon','dt_themes'), 'type'=>'text' ),
			'technorati' => array( 'title' => __('Technorati','dt_themes'), 'type'=>'text' ),
			'tumblr' => array( 'title' => __('Tumblr','dt_themes'), 'type'=>'text' ),
			'twitter' => array( 'title' => __('Twitter','dt_themes'), 'type'=>'text' ),
			'viadeo' => array( 'title' => __('Viadeo','dt_themes'), 'type'=>'text' ),
			'vimeo' => array( 'title' => __('Vimeo','dt_themes'), 'type'=>'text' ),
			'yahoo' => array( 'title' => __('Yahoo','dt_themes'), 'type'=>'text' ),
			'Youtube' => array( 'title' => __('youtube','dt_themes'), 'type'=>'text' )
	)
);
/*  End of Unique Modules */

/*  Start of Others Modules */
$dt_modules['others']['h1'] = array(
	'name' => __('Heading 1', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 1', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h2'] = array(
	'name' => __('Heading 2', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 2', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h3'] = array(
	'name' => __('Heading 3', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 3', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h4'] = array(
	'name' => __('Heading 4', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 4', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h5'] = array(
	'name' => __('Heading 5', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 5', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['h6'] = array(
	'name' => __('Heading 6', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 6', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
			'title' => __('Type','dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Title Comes Here'
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['address'] = array(
	'name' => __('Address', 'dt_themes'),
	'tooltip' => __('Use this module to add address', 'dt_themes'),
	'icon_class' => 'ico-address',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-map-marker'
		),

		'position' => array(
			'title' => __("Position","dt_themes"),
			'type' => 'select',
			'options' => array( 'before' => __('Before Address','dt_themes'), 'after' => __('After Address','dt_themes') ),
			'default_value' => array('before')
		),

		'detail' => array(
			'title' => __('Address', 'dt_themes'),
			'type' => 'text',
			'default_value' => '121 King St, Melbourne VIC 3000,&lt;br&gt;Australia'
		)
	)
);

$dt_modules['others']['contact'] = array(
	'name' => __('Contact', 'dt_themes'),
	'tooltip' => __('Use this module to add contact details', 'dt_themes'),
	'icon_class' => 'ico-phone',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'position' => array(
			'title' => __("Position","dt_themes"),
			'type' => 'select',
			'options' => array( 'before' => __('Before Content','dt_themes'), 'after' => __('After Content','dt_themes') ),
			'default_value' => array('before')
		),		
		'detail' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['email'] = array(
	'name' => __('Email', 'dt_themes'),
	'tooltip' => __('Use this module to add email alone', 'dt_themes'),
	'icon_class' => 'ico-email',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-envelope'
		),
		'position' => array(
			'title' => __("Position","dt_themes"),
			'type' => 'select',
			'options' => array( 'before' => __('Before Email id','dt_themes'), 'after' => __('After Email id','dt_themes') ),
			'default_value' => array('before')
		),
		'emailid' => array(
			'title' => __('Email', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'yourname@somemail.com'
		),		
	)
);

$dt_modules['others']['web'] = array(
	'name' => __('Web', 'dt_themes'),
	'tooltip' => __('Use this module to add web alone', 'dt_themes'),
	'icon_class' => 'ico-web',
	'options' => array(

		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-globe'
		),

		'position' => array(
			'title' => __("Position","dt_themes"),
			'type' => 'select',
			'options' => array( 'before' => __('Before URL','dt_themes'), 'after' => __('After URL','dt_themes') ),
			'default_value' => array('before')
		),

		'text' => array(
			'title' => __('Text','dt_themes'),
			'type' => 'text',
			'default_value' => 'google.com'
		),
		'url' => array(
			'title' => __('URL', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'http://www.google.com'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
	)
);

$dt_modules['others']['clear'] = array(
	'name' => __('Clear', 'dt_themes'),
	'tooltip' => __('Add this module to add space between contents', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr'] = array(
	'name' => __('Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_medium'] = array(
	'name' => __('Horizontal Rule Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_large'] = array(
	'name' => __('Horizontal Rule Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_top'] = array(
	'name' => __('Horizontal Rule With Top Link', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule with top link', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible'] = array(
	'name' => __('Whitespace', 'dt_themes'),
	'tooltip' => __('Use this module to add whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_very_small'] = array(
	'name' => __('Very Whitespace Small', 'dt_themes'),
	'tooltip' => __('Use this module to add very small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_small'] = array(
	'name' => __('Whitespace Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_medium'] = array(
	'name' => __('Whitespace Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_large'] = array(
	'name' => __('Whitespace Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);
/*  End of Others Modules */?>