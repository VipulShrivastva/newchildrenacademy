scnShortcodeMeta = {
	attributes : [ {
		label : "Style",
		id : "type",
		help : "Select which type of iconbox you would like to use.",
		controlType : "select-control",
		selectValues : [ 'type2', 'type3'],
		defaultValue : 'type2',
		defaultText : 'type2'
	}, {
		label : "Columns",
		id : "content",
		controlType : "column-control"
	} ],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type, ctype = type;

		type = ' type =" '+type+'"';
		
		var icons = ["bell","cogs","leaf","trophy","flag","home","key"];

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
				
			var current_icon = icons[Math.floor(Math.random() * icons.length)];
	
			g += "[dt_sc_"
				+ e
				+ "] <br/>"
				+ "[dt_sc_icon_box " + type + " fontawesome_icon='"+current_icon +"' custom_icon='' title='Asit amet' link='#']<br>"
				+ ' <p> Nunc at pretium est curabitur commodo leact. </p>';
			g += " [/dt_sc_icon_box]"
				+" <br> [/dt_sc_" + z
				+ "] <br/>";
			}
		}

		return g;
	}
};