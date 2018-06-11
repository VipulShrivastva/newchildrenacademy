scnShortcodeMeta = {
	attributes : [
	
			{
				label : "Align",
				id : "align",
				help : "",
				controlType : "select-control",
				selectValues : [ '','left' ,'right' ,'center'],
				defaultValue : '',
				defaultText : 'Select'
			},

			{
				label : "Custom Text Color",
				id : "textcolor",
				help : 'Or you can also choose your own color to use as the text color',
				controlType : "color-control"
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
				label : "Cite Name",
				id : "cite",
				help : 'This is the name of the author.',
				controlType : "text-control"
			}],
	defaultContent : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit",
	shortcode : "dt_sc_blockquote"
};