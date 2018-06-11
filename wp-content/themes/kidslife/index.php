<?php get_header();

	$pageid = get_option('page_for_posts');
	
	if($pageid > 0) {
		$tpl_default_settings = get_post_meta( $pageid, '_tpl_default_settings', TRUE );
		$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
		$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	} else {
		$page_layout = dttheme_option('specialty','author-archives-layout');
		$page_layout = !empty($page_layout) ? $page_layout : "content-full-width";
	}
	$show_left_sidebar = $show_right_sidebar = $show_sidebar = false;
	$sidebar_class = "";

	switch($page_layout):
		case 'with-left-sidebar':
			$page_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= $show_sidebar = true;
			$sidebar_class 	=	"left-sidebar";
		break;

		case 'with-right-sidebar':
			$show_right_sidebar = $show_sidebar = true;
			$page_layout 	=	"page-with-sidebar with-right-sidebar";
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = $show_sidebar = true;
			$page_layout 	=	"page-with-sidebar page-with-both-sidebar";
			$sidebar_class 	=	"secondary-has-both-sidebar";
		break;
	endswitch;

	if( $show_left_sidebar ) :?>

		<!-- ** Secondary Left Section ** -->
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
        	<div class="dt-sc-hr-invisible"></div>
			<?php get_sidebar('left'); ?>
		</section>
		<!-- ** Secondary Left Section End ** --><?php

	endif;?>

	<!-- ** Primary Section** -->
	<section id="primary" class="<?php echo esc_attr($page_layout);?>">
		<div class="dt-sc-hr-invisible"></div><?php
		
		$post_layout  = dttheme_option( 'specialty', 'author-archives-post-layout');
		switch($post_layout):
			case 'one-column':
				$post_class = $show_sidebar ? " column dt-sc-one-column with-sidebar blog-fullwidth" : " column dt-sc-one-column blog-fullwidth";
				$columns = 1;
			break;
			
			case 'one-half-column':
				$post_class = $show_sidebar ? " column dt-sc-one-half with-sidebar" : " column dt-sc-one-half";
				$columns = 2;
				$container_class = "apply-isotope";
			break;
		endswitch;?>
        
        <div class='tpl-blog-holder <?php echo esc_attr($container_class);?>'><?php
			if ( have_posts() ):
				$i = 1;
				while( have_posts() ):
					the_post();
					
					$temp_class = "";
					if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
					if($i == $columns) $i = 1; else $i = $i + 1;
					
					echo '<div class="'.esc_attr($temp_class).'">';
						get_template_part( 'framework/loops/content' );
					echo "</div>";	
				endwhile;
			endif;?>
        </div>
        
		<!-- **Pagination** -->
		<div class="pagination blog-pagination">
			<div class="prev-post"><?php previous_posts_link( __( 'Prev', 'dt_themes' ) );?></div>
			<?php echo dttheme_pagination();?>
			<div class="next-post"><?php next_posts_link( __( 'Next', 'dt_themes' ) );?></div>
		</div><!-- **Pagination** -->
	</section>
	<!-- ** Primary Section End ** --><?php

	if( $show_right_sidebar ):?>
		<!-- ** Secondary Right Section ** -->
		<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
        	<div class="dt-sc-hr-invisible"></div>
			<?php get_sidebar('right'); ?>
		</section>
		<!-- ** Secondary Right Section End ** --><?php
	endif;
	get_footer();?>