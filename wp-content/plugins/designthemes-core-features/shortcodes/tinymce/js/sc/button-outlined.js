scnShortcodeMeta = {
	attributes : [
	
			{
				label : "Title",
				id : "content",
				help : "The button title.",
			},
			{
				label : "Number",
				id : "number",
				help : "Please provide any numeric value here ( e.g. 3)",
			},
			{
				label : "Link",
				id : "link",
				help : "Optional link (e.g. http://google.com).",
			},
			{
				label : "Size",
				id : "size",
				help : "Values: &lt;empty&gt; for normal size, small, large, xl.",
				controlType : "select-control",
				selectValues : [ 'small', 'medium', 'large', 'xlarge' ],
				defaultValue : 'medium',
				defaultText : 'medium (Default)'
			},
			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our predefined color skins to use with your list.',
				controlType : "select-control",
				selectValues : [ '','aqua','blue','burnt_orange','chocolate','green','grey','lavender','mustard','ocean','orange','pearl','pink','purple','red','ruby','steelblue','teal','turquoise','violet','yellow'],
				defaultValue : '',
				defaultText : 'Select'
			},
			{
				label : "Target",
				id : 'target',
				help : 'Setting the target to _blank will open your page in a new tab when the reader clicks on the button.',
				controlType : "select-control",
				selectValues : [ '_blank', '_new', '_parent', '_self', '_top' ],
				defaultValue : '_blank',
				defaultText : '_blank (Default)'
			},

			{
				label : "CSS Class",
				id : "class",
				help : "Optional css class.",
			}
			],
	defaultContent : "Click me!",
	shortcode : "dt_sc_outlined_button"

};