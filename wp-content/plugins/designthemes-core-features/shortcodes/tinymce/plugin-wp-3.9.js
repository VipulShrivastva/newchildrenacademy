(function() {

	var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
		+ " adipiscing elit. Morbi hendrerit elit turpis,"
		+ " a porttitor tellus sollicitudin at."
		+ " Class aptent taciti sociosqu ad litora "
		+ " torquent per conubia nostra,"
		+ " per inceptos himenaeos.";

	var dummy_tabs = '<br>[dt_sc_tab title="Tab 1"]'
		+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
		+ '[dt_sc_tab title="Tab 2"]' + "<br>"
		+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
		+ '[dt_sc_tab title="Tab 3"]' + "<br>"
		+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>';

	var images_carousel = '<ul>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 1" alt="Client 1" title="Client 1"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 2" alt="Client 2" title="Client 2"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 3" alt="Client 3" title="Client 3"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 4" alt="Client 4" title="Client 4"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 5" alt="Client 5" title="Client 5"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 6" alt="Client 6" title="Client 6"/></a></li>'
		+'<li><a href="#"><img src="http://placehold.it/550x241&text=Image 7" alt="Client 7" title="Client 7"/></a></li>'
		+'</ul>';


	var testimonal = '[dt_sc_testimonial name="John Doe" image="http://placehold.it/300" role="CEO &amp; Founder - Dhoom Inc" rating="4"]'+dummy_conent+'[/dt_sc_testimonial]';

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",function( editor , url ) {
		
		editor.on('init', function() {

			editor.addCommand("scnOpenDialog", function(obj) {
				scnSelectedShortcodeType = obj.identifier;
				jQuery.get(url + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=800"+ "&height=400&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text("Customize the " + obj.title + " Shortcode");
				});
			});
		});
	

		editor.addButton('designthemes_sc_button', {
			title : "DT Shortcodes",
			icon : "dt-icon",
			type: 'menubutton',
			menu: [

				{ text : 'Accordion',
					menu : [
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]";
								editor.insertContent(content);
							}
						},

						{ text: 'Framed', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]";
							editor.insertContent(content);
							}
						}
					]
				},

				{ text: 'Animation' , onclick: function() {

						editor.windowManager.open({

							title : "Add Animation",
							body : [

								{ type: 'listbox', name:'effect', label:'Choose Effect',values:[
									{ text: 'Flash', value : 'flash' },							{ text: 'Shake', value : 'shake' },							{ text: 'Bounce', value : 'bounce' },
									{ text: 'Tada', value : 'tada' },							{ text: 'Swing', value : 'swing'},							{ text: 'Wobble', value : 'wobble' },
									{ text: 'Pulse', value : 'pulse' },							{ text: 'Flip', value : 'flip' },							{ text: 'Flip In X Axis', value : 'flipInX' },
									{ text: 'Flip Out X Axis', value : 'flipOutX' },			{ text: 'Flip In Y Axis', value : 'flipInY' },				{ text: 'Flip Out Y Axis', value : 'flipOutY' },
									{ text: 'fadeIn', value:'fadeIn'},							{ text: 'fadeInUp', value:'fadeInUp'},						{ text: 'fadeInDown', value:'fadeInDown'},
									{ text: 'fadeInLeft', value:'fadeInLeftfadeInLeft'},		{ text: 'fadeInRight', value:'fadeInRight'},				{ text: 'fadeInUpBig', value:'fadeInUpBig'},
									{ text: 'fadeInDownBig', value:'fadeInDownBig'},			{ text: 'fadeInLeftBig', value:'fadeInLeftBig'},			{ text: 'fadeInRightBig', value:'fadeInRightBig'},
									{ text: 'fadeOut', value:'fadeOut'},						{ text: 'fadeOutUp', value:'fadeOutUp'},					{ text: 'fadeOutDown', value:'fadeOutDown'},
									{ text: 'fadeOutLeft', value:'fadeOutLeft'},				{ text: 'fadeOutRight', value:'fadeOutRight'},				{ text: 'fadeOutUpBig', value:'fadeOutUpBig'},
									{ text: 'fadeOutDownBig', value:'fadeOutDownBig'},			{ text: 'fadeOutLeftBig', value:'fadeOutLeftBig'},			{ text: 'fadeOutRightBig', value:'fadeOutRightBig'},
									{ text: 'bounceIn', value:'bounceIn'},						{ text: 'bounceInUp', value:'bounceInUp'},					{ text: 'bounceInDown', value:'bounceInDown'},
									{ text: 'bounceInLeft', value:'bounceInLeft'},				{ text: 'bounceInRight', value:'bounceInRight'},			{ text: 'bounceOut', value:'bounceOut'},
									{ text: 'bounceOutUp', value:'bounceOutUp'},				{ text: 'bounceOutDown', value:'bounceOutDown'},			{ text: 'bounceOutLeft', value:'bounceOutLeft'},
									{ text: 'bounceOutRight', value:'bounceOutRight'},			{ text:'rotateIn', value:'rotateIn'},						{ text:'rotateInUpLeft', value:'rotateInUpLeft'},		
									{ text:'rotateInDownLeft', value:'rotateInDownLeft'},		{ text:'rotateInUpRight', value:'rotateInUpRight'},			{ text:'rotateInDownRight', value:'rotateInDownRight'},		
									{ text:'rotateOut', value:'rotateOut'},						{ text:'rotateOutUpLeft', value:'rotateOutUpLeft'},			{ text:'rotateOutDownLeft', value:'rotateOutDownLeft'},		
									{ text:'rotateOutUpRight', value:'rotateOutUpRight'},		{ text:'rotateOutDownRight', value:'rotateOutDownRight'},	{ text:'hinge', value:'hinge'},		
									{ text:'rollIn', value:'rollIn'},							{ text:'rollOut', value:'rollOut'},							{ text:'lightSpeedIn', value:'lightSpeedIn'},		
									{ text:'lightSpeedOut', value:'lightSpeedOut'},				{ text:'slideDown', value:'slideDown'},						{ text:'slideUp', value:'slideUp'},		
									{ text:'slideLeft', value:'slideLeft'},						{ text:'slideRight', value:'slideRight'},					{ text:'slideExpandUp', value:'slideExpandUp'},
									{ text:'expandUp', value:'expandUp'},						{ text:'expandOpen', value:'expandOpen'},					{ text:'bigEntrance', value:'bigEntrance'},		
									{ text:'hatch', value:'hatch'},								{ text:'floating', value:'floating'},						{ text:'tossing', value:'tossing'},		
									{ text:'pullUp', value:'pullUp'},							{ text:'pullDown', value:'pullDown'},						{ text:'stretchLeft', value:'stretchLeft'},
									{ text:'stretchRight', value:'stretchRight'}],
								},

								{ type: 'textbox', name:'delay',label : "Time Delay"},
							],
							onsubmit: function(e) {
								editor.insertContent('[dt_sc_animation effect="'+e.data.effect +'" delay="'+ e.data.delay+'"] Add Content to Animate [/dt_sc_animation]');
							}
						});	}
				},

				{ text : 'Button',
					menu:[
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button"});
							}
						},
						
						{ text: 'Outlined', onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button-outlined"});
							}
						},
					]
				},

				{ text: 'Block Quote',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "blockquote"});
					}
				},

				{ text: 'Call Out Button',
					onclick: function() {

						editor.windowManager.open({
							title: "Call Out Buttons",
							body:[

								{
									type: 'listbox',
									name: 'type',
									label:'Type',
									values:[
										{ text: 'Type 1', value: 'type1' },
										{ text: 'Type 2', value: 'type2' },
										{ text: 'Type 3', value: 'type3' },
										{ text: 'Type 4', value: 'type4' },
										{ text: 'Type 5', value: 'type5' },
									],
								},
								
								{ type: 'textbox', name: 'icon', label: 'Font Awesome Icon', value: 'fa-heart' },

								{ type:'textbox', name:'button_text', label: 'Button Label'},

								{ type: 'textbox', name: 'link', label: 'Button link', value: '#' },

								{ type: 'textbox', name: 'button_icon', label: 'Button Font Awesome Icon', value: 'fa-chevron-circle-right' },

								{
									type: 'listbox',
									name: 'target',
									label:'Target',
									values:[
										{ text: 'Blank', value: '_blank' },
										{ text: 'New', value: '_new' },
										{ text: 'Parent', value: '_parent' },
										{ text: 'Self', value: '_self' },
										{ text: 'Top', value: '_top' },
									],
								},
							],
							onsubmit: function(e){
								editor.insertContent('[dt_sc_callout_box type="'+e.data.type+'" icon="'+e.data.icon+'" link="'+e.data.link+'" target="'+e.data.target+'" button_text="'+e.data.button_text+'" button_icon="'+e.data.button_icon+'"]<h4>Our Technological services has been improved vastly</h4><h5>Come Experience the real life situations of saving life</h5>[/dt_sc_callout_box]');
							}
						});
					}
				},

				{ text: 'Colored Box',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "coloredbox"});
					}
				},
				
				{ text: 'Column Layout', 
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "column"});
					}
				},

				{ text : 'Contact Info', menu :[

					{ text: 'Address', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_address icon="fa-map-marker" detail="121 King St, Melbourne VIC 3000,<br/> Australia"/]');
					}},

					{ text: 'Contact', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_contact icon="" detail=""/]');
					}},

					{ text: 'Web', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_web icon="fa-globe" text="google.com" url="http://www.google.com" target="_new"/]');
					}},
					{ text: 'Email', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_email icon="fa-envelope" emailid="yourname@somemail.com"/]');
					}},
				] },

				{ text : 'Donut Chart', menu:[

					{ text: 'Small', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_small title="Lorem" bgcolor="#808080" fgcolor="#4bbcd7" percent="70"/]');
					} },


					{ text: 'Medium', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_medium title="Lorem" bgcolor="#808080" fgcolor="#7aa127" percent="65"/]');
					} },


					{ text: 'Large', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_large title="Lorem" bgcolor="#808080" fgcolor="#a23b6f" percent="50"/]');
					} },
				] },

				{ text: 'Drop Cap',
					onclick: function( e ){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "dropcap"});
					}
				},

				{ text : 'Dividers', menu:[

					{ text: 'Clear', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_clear]');
					}},

					{ text: 'Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr]');
					}},

					{ text: 'Horizontal Rule Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_medium]');
					}},

					{ text: 'Horizontal Rule Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_large]');
					}},

					{ text: 'Horizontal Rule with top link', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr top]');
					}},

					{ text: 'Whitespace', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible]');
					}},

					{ text: 'Whitespace Very Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_very_small]');
					}},

					{ text: 'Whitespace Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_small]');
					}},

					{ text: 'Whitespace Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_medium]');
					}},

					{ text: 'Whitespace Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_large]');
					}},
				] },

				{ text: 'Full Width Section', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "fullwidth"});
					}
				},

				{ text: 'Full Width Video',
					onclick: function(){

						editor.windowManager.open({
							title: "Add Full Width  Video Section",
							body:[
								{ type:'textbox', label:'MP4', name: 'mp4'},
								{ type:'textbox', label:'WEBM', name: 'webm'},
								{ type:'textbox', label:'OGV', name: 'ogv'},
								{ type:'textbox', label:'Poster Image', name: 'poster'},
								{ type:'textbox', name:'backgroundimage', label: 'Background Image'},
								{ type:'textbox', name:'paddingtop', label: 'Padding Top( in px)'},
								{ type:'textbox', name:'paddingbottom', label: 'Padding Bottom( in px)'},
								{ type:'textbox', name:'class', label: 'CSS Class'},
							],
							onsubmit: function(e){
								editor.insertContent('[dt_sc_fullwidth_video mp4="'+e.data.mp4+'" webm="'+e.data.we+'" ogv="'+e.data.ogv+'" poster="'+e.data.po+'" backgroundimage="'+e.data.backgroundimage+'" paddingtop="'+e.data.paddingtop+'" paddingbottom="'+e.data.paddingbottom+'" class="'+e.data.class+'"][/dt_sc_fullwidth_video]');
							}
						});
					}
				},

				{ text: 'Icon Boxes', 
					menu:[
						{ text: 'Type 1' , onclick: function(e){
							e.stopPropagation();
							editor.insertContent('[dt_sc_icon_box type="type1" inner_image="http://placehold.it/420&text=DesignThemes" title="Quisque Apa" link="#"]<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum. </p>[/dt_sc_icon_box]');
						}},

						{ text: 'Type 2/3' , onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "iconbox"});
						}}
					]
				},

				{ text: 'Lists',
					menu :[
						{
							text: 'Ordered List',
							onclick : function() {
								editor.windowManager.open({
									title: "Add New Stylish Ordered List",
									body: [
										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Decimal', value: 'decimal' }, { text: 'Decimals With Leading Zero', value: 'decimal-leading-zero' }, { text:'Lower Alpha', value:'lower-alpha'},
												{ text:'Lower Roman', value:'lower-roman'}, { text:'Upper Alpha', value:'upper-alpha'},{ text:'Upper Roman', value:'upper-roman'}
											],
										},

										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',
											values:[
												{ text: 'Default', value: '' },
												{ text: 'Aqua', value: 'aqua' },
												{ text: 'Blue', value: 'blue' },
												{ text: 'Burnt Orange', value: 'burnt_orange' },
												{ text: 'Chocolate', value: 'chocolate' },
												{ text: 'Green', value: 'green' },
												{ text: 'Grey', value: 'grey' },
												{ text: 'Lavender', value: 'lavender' },
												{ text: 'Mustard', value: 'mustard' },
												{ text: 'Ocean', value: 'ocean' },
												{ text: 'Orange', value: 'orange' },
												{ text: 'Pearl', value: 'pearl' },
												{ text: 'Pink', value: 'pink' },
												{ text: 'Purple', value: 'purple' },
												{ text: 'Red', value: 'red' },
												{ text: 'Ruby', value: 'ruby' },
												{ text: 'Steelblue', value: 'steelblue' },
												{ text: 'Teal', value: 'teal' },
												{ text: 'Turquoise', value: 'turquoise' },
												{ text: 'Violet', value: 'violet' },
												{ text: 'Yellow', value: 'yellow' }
											],
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ol>"
												+ "<li>Lorem ipsum dolor sit </li>"
												+ "<li>Praesent convallis nibh</li>"
												+ "<li>Nullam ac sapien sit</li>"
												+ "<li>Phasellus auctor augue</li></ol>";

										editor.insertContent('[dt_sc_fancy_ol style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ol]');
									}
								});
							}
						},

						{ text: 'Unordered List',
							onclick : function(){
								editor.windowManager.open({
									title: "Add New Stylish Unordered List",
									body: [
										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Arrow', value: 'arrow' }, { text: 'Book', value:'book'}, { text: 'Check', value:'check'}, { text: 'Cog', value:'cog'},
												{ text: 'Car', value:'car'}, { text: 'Rounded Arrow', value: 'rounded-arrow' },	{ text: 'Double Arrow', value: 'double-arrow' },
												{ text: 'Heart', value: 'heart' },	{ text: 'Trash', value: 'trash' },	{ text: 'Star', value: 'star' },
												{ text: 'Tick', value: 'tick' },	{ text: 'Rounded Tick', value: 'rounded-tick' },	{ text: 'Cross', value: 'cross' },
												{ text: 'Hand', value:'hand'},  { text: 'Rounded Cross', value: 'rounded-cross' },	{ text: 'Rounded Question', value: 'rounded-question' }, 
												{ text: 'Rounded Info', value: 'rounded-info' }, { text:'Reddit',value:'reddit' }, { text: 'Delete', value: 'delete' },	
												{ text: 'Gift', value:'gift'}, { text: 'Graduation Cap', value:'graduation-cap' }, { text: 'Warning', value: 'warning' },
												{ text: 'Comment', value: 'comment' },	{ text: 'Edit', value: 'edit' },	{ text: 'Share', value: 'share' }, {text:'Tree', value:'tree'},
												{ text: 'Plus', value: 'plus' },	{ text: 'Rounded Plus', value: 'rounded-plus' },	{ text: 'Minus', value: 'minus' }, {text:'Star', value:'star'},
												{ text: 'Rounded minus', value: 'rounded-minus' },	{ text: 'Asterisk', value: 'asterisk' },	{ text: 'Cart', value: 'cart' },
												{ text: 'Folder', value: 'folder' },	{ text:'Play', value:'play' }, { text: 'Folder Open', value: 'folder-open' },	{ text: 'Desktop', value: 'desktop' },
												{ text: 'Tablet', value: 'tablet' },	{ text: 'Mobile', value: 'mobile' },	{ text: 'Reply', value: 'reply' },
												{ text: 'Quote', value: 'quote' },	{ text: 'Mail', value: 'mail' },	{ text: 'External Link', value: 'external-link' },
												{ text: 'Adjust', value: 'adjust' },	{ text: 'Pencil', value: 'pencil' },	{ text: 'Print', value: 'print' },
												{ text: 'Tag', value: 'tag' },	{ text: 'Thumbs Up', value: 'thumbs-up' },	{ text: 'Thumbs Down', value: 'thumbs-down' },
												{ text: 'Time', value: 'time' }, { text: 'Globe', value: 'globe' },  { text: 'Music', value: 'music' }, { text: 'Moon', value: 'moon' },
												{ text: 'Pushpin', value: 'pushpin' }, { text: 'Smile', value: 'smile' }, { text: 'Map Marker', value: 'map-marker' }, { text: 'Link', value: 'link' },
												{ text: 'Paper Clip', value: 'paper-clip' },  { text: 'Download', value: 'download' }, { text: 'Key', value: 'key' }, { text: 'Search', value: 'search' },
												{ text: 'Rss', value: 'rss' }, { text: 'Twitter', value: 'twitter' }, { text: 'Facebook', value: 'facebook' },
												{ text: 'Linkedin', value: 'linkedin' },	{ text:'Google Plus', value:'google-plus'}
											],
										},
										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',
											values:[
												{ text: 'Default', value: '' },	
												{ text: 'Aqua', value: 'aqua' },
												{ text: 'Blue', value: 'blue' },
												{ text: 'Burnt Orange', value: 'burnt_orange' },
												{ text: 'Chocolate', value: 'chocolate' },
												{ text: 'Green', value: 'green' },
												{ text: 'Grey', value: 'grey' },
												{ text: 'Lavender', value: 'lavender' },
												{ text: 'Mustard', value: 'mustard' },
												{ text: 'Ocean', value: 'ocean' },
												{ text: 'Orange', value: 'orange' },
												{ text: 'Pearl', value: 'pearl' },
												{ text: 'Pink', value: 'pink' },
												{ text: 'Purple', value: 'purple' },
												{ text: 'Red', value: 'red' },
												{ text: 'Ruby', value: 'ruby' },
												{ text: 'Steelblue', value: 'steelblue' },
												{ text: 'Teal', value: 'teal' },
												{ text: 'Turquoise', value: 'turquoise' },
												{ text: 'Violet', value: 'violet' },
												{ text: 'Yellow', value: 'yellow' },											
											]
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ul>"
											+ "<li>Lorem ipsum dolor sit </li>"
											+ "<li>Praesent convallis nibh</li>"
											+ "<li>Nullam ac sapien sit</li>"
											+ "<li>Phasellus auctor augue</li></ul>";
											editor.insertContent('[dt_sc_fancy_ul style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ul]');
									}
								});
							}
						},
					]
				},

				{ text: 'Post',
					menu:[
						{ text:'Single Post',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('<br>[dt_sc_post id="1" read_more_text="Read More" excerpt_length="10""/]');
							}
						},
						{ text:'Recent Posts',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('<br>[dt_sc_recent_post count="3" columns="3" read_more_text="Read More" excerpt_length="10"/]');
							}
						},
						{ text:'Recent Posts With Category',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('<br>[dt_sc_recent_post count="3" columns="3" read_more_text="Read More" excerpt_length="10" category="1"/]');
							}
						},
					]
				},

				{ text: 'Portfolio',
					menu:[
						{ text: 'Recent',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_recent_portfolio/]<br>');
							}
						},
						{ text: 'Form Category',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_recent_portfolio_from_cateogory category=""/]<br>');
							}
						}
					]
				},

				{ text:'Pull Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pullquote"});
					}
				},

				{ text:'Pricing Table',
					menu:[
						{ text:'Type 1',
							onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable-simple"});
							}
						},
						{ text:'Type 2',
							onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable-with-image"});
							}
						}
					]
				},

				{ text: 'Progress Bar',
					menu:[

						{ text:'Active', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="progress-striped-active"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Standard',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="85" type="standard" color="#9c59b6"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Stripe',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="75" type="progress-striped" color=""] consectetur[/dt_sc_progressbar]');
							}
						},
					]
				},

				{ text: 'Tabs',
					menu:[

						{ text: 'Horizontal',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_tabs_horizontal]' + dummy_tabs + "[/dt_sc_tabs_horizontal]");
							}
						},

						{ text:'Vertical',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_vertical]" + dummy_tabs+ "[/dt_sc_tabs_vertical]");
							}
						}
					]
				},

				/* Title */
				{ text: 'Title',
					menu:[
					
						//H1
						{ text : "H1",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h1]Lorem ipsum dolor sit amet[/dt_sc_h1]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h1 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h1]');
									}
								}
							]
						},

						//H2
						{ text : "H2",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h2]Lorem ipsum dolor sit amet[/dt_sc_h2]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h2 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h2]');
									}
								}
							]
						},

						//H3
						{ text : "H3",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h3]Lorem ipsum dolor sit amet[/dt_sc_h3]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h3 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h3]');
									}
								}
							]
						},

						//H4
						{ text : "H4",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h4]Lorem ipsum dolor sit amet[/dt_sc_h4]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h4 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h4]');
									}
								}
							]
						},

						//H5
						{ text : "H5",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h5]Lorem ipsum dolor sit amet[/dt_sc_h5]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h5 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h5]');
									}
								}
							]
						},

						//H6
						{ text : "H6",
							menu:[
								{ text : "Skin Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h6]Lorem ipsum dolor sit amet[/dt_sc_h6]');
									}
								},
								{ text : "White Color",
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_h6 class="white"]Lorem ipsum dolor sit amet[/dt_sc_h6]');
									}
								}
							]
						}
					]
				},

				{ text:'Title Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "box"});
					}
				},

				{ text: 'Toggle',
					menu:[
						{
							text: 'Default',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							}
						},

						{
							text: 'Framed',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
							}
						},
					]
				},

				{ text:'Tool tip',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "tooltip"});
					}
				},

				{ text:'Others',
					menu:[

						{ text:'Team',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_team name="DesignThemes" role="Chief Programmer" image="http://placehold.it/500" twitter="#" facebook="#" google="#" linkedin="#"]<br><p>Saleem naijar kaasram eerie can be disbursed in the wofl like of a fox that is her thing smaoasa lase lemedds laasd pamade eleifend sapien.</p>[/dt_sc_team]');
							}
						},

						{ text:'Testimonial',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent(testimonal);
							}
						},

						{ text:'Testimonial Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_testimonial_carousel]<br>'
									+'<ul>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'</ul>'
									+'<br>[/dt_sc_testimonial_carousel]');
							}
						},

						{ text:'Images Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_carousel]<br>'+images_carousel+'<br>[/dt_sc_carousel]');
							}
						},

						{ text: 'Class Hours',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_class_hours title="Class Hours"]<br>'
									+'[dt_sc_class_hour day="Monday" time="9am - 3pm"]<br>'
									+'[dt_sc_class_hour day="Tuesday" time="9am - 3pm"]<br>'
									+'[dt_sc_class_hour day="Wednesday" time="9am - 3pm"]<br>'
									+'[dt_sc_class_hour day="Thursday" time="9am - 3pm"]<br>'
									+'[dt_sc_class_hour day="Friday" time="9am - 3pm"]<br>'
									+'[dt_sc_class_hour day="Saturday" time="Holiday"]<br>'
									+'[dt_sc_class_hour day="Sunday" time="Holiday"]'
									+'<br>[/dt_sc_class_hours]');
							}
						},
						{ text: 'Social',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_social facebook="#" twitter="#" google_plus ="#" pinterest="#" dribbble="#" picasa="#"/]');
							}
						}
					]
				}
			]
		});
		
	});
})();