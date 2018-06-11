<!-- **Searchform** -->
<?php $search_text = empty($_GET['s']) ? __("Enter Keyword",'dt_themes') : get_search_query(); ?> 
<form method="get" id="searchform" action="<?php echo esc_url(home_url());?>">
	<p><input id="s" name="s" type="text" value="<?php echo esc_attr($search_text);?>" class="text_input"
		onblur="if(this.value==''){this.value='<?php echo esc_js($search_text);?>';}"
		onfocus="if(this.value =='<?php echo esc_js($search_text);?>') {this.value=''; }" />
	</p>
	
	<p><input name="submit" type="submit"  value="<?php esc_attr_e('Hit Here','dt_themes');?>!" /></p>
</form><!-- **Searchform - End** -->