scnShortcodeMeta = {
	attributes : [ { label : "Columns", id : "content",	controlType : "column-control"} ],
	customMakeShortcode : function(b) {
		var a = b.data;
		var colors = ['aqua','blue','burnt_orange','chocolate','green','grey','lavender','mustard','ocean','orange','pearl','pink','purple','red','ruby','steelblue','teal','turquoise','violet','yellow'];

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "one_half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += " first";
				}

				var variation = colors[Math.floor(Math.random() * colors.length)];
				
				g += "[dt_sc_"
					+ e
					+ "] <br/>"
					+ "[dt_sc_icon_box_colored image='http://placehold.it/1170x538&text=DesignThemes' title='Well Trained Professionals' variation='"+variation+"']<br>"
					+ ' <p>Vestibulum Ante Ipsum Primis In Faucibus Orci Luctus Et Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu</p>'
					+ " [/dt_sc_icon_box_colored]"
					+" <br> [/dt_sc_" + z
					+ "] <br/>";
			}
		}
		return g;
	}
};