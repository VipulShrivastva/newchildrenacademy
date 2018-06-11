<?php get_header();?>
<?php #Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-post-top-code'])) echo wp_kses($dttheme_integration['single-post-top-code'],$dt_allowed_html_tags ); ?>        

       	<?php if( have_posts() ): ?>
       	<?php 	while ( have_posts() ) : the_post(); ?>
        <?php 		get_template_part( 'framework/loops/content', 'single' ); ?>
        <?php 	endwhile;
           	  endif;?>
<?php #Page Top Code Section
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-post-bottom-code'])) echo wp_kses($dttheme_integration['single-post-bottom-code'],$dt_allowed_html_tags );	?>        
<?php get_footer();?>