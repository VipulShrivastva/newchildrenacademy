<?php get_header();

	#Page Top Code Section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-top-code']))
		echo wp_kses($dttheme_integration['single-page-top-code'],$dt_allowed_html_tags );


	$page_layout  = dttheme_option( 'specialty', 'search-layout' );
	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";
	$show_left_sidebar = $show_right_sidebar = $show_sidebar = false;
	$sidebar_class = $container_class = "";
	switch($page_layout):
		case 'with-left-sidebar':
			$page_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	$show_sidebar = true;
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

	$post_layout  = dttheme_option( 'specialty', 'search-post-layout');
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
	endswitch;

	if( $show_left_sidebar ) :?>

		<!-- ** Secondary Left Section ** -->
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('left'); ?>
		</section>
		<!-- ** Secondary Left Section End ** --><?php

	endif;?>

		<!-- ** Primary Section** -->
		<section id="primary" class="<?php echo esc_attr($page_layout);?>">
			<div class='tpl-blog-holder <?php echo esc_attr($container_class);?>'><?php
			if( have_posts() ) :
				$i = 1;
				while( have_posts() ) :
					the_post();

					$temp_class = "";
					if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
					if($i == $columns) $i = 1; else $i = $i + 1;

					$format = get_post_format(  get_the_id() );
					$post_meta = get_post_meta(get_the_id() ,'_dt_post_settings',TRUE);
					$post_meta = is_array($post_meta) ? $post_meta : array();
					$custom_class = "";?>
					<div class="<?php echo esc_attr($temp_class);?>">
						<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry'); ?>>
							<div class="blog-entry-inner">
								<div class="entry-meta">
									<a class="blog-author" href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
										<?php echo get_avatar( get_the_author_meta('user_email')); ?></a>

									<div class="date ribbon-left">
										<span> <?php echo get_the_date('d');?> </span>
										<p> <?php echo get_the_date('M');?> <br> <?php echo get_the_date('Y');?> </p>
                                        <span class="meta-arrow"></span> 
									</div>

									<?php comments_popup_link( __(' 0 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
										__('1 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
										__('% <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
										'comments ribbon-left',__('<span class="fa fa-comments-o"> </span> <span class="meta-arrow"></span>','dt_themes'));?>

									<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" class="entry_format 	ribbon-left">
										<span></span> <span class="meta-arrow"></span>
									</a>
								</div><?php
						
								if( $format == "image" || empty($format) ) :
									if( has_post_thumbnail() ):?>
										<div class="entry-thumb">
											<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
												the_post_thumbnail("full");	?>
											</a>
										</div><?php
									else:
										$custom_class = "has-no-post-thumbnail";   
									endif;

								elseif( $format === "gallery" ) :
									if( array_key_exists("items", $post_meta) ) :
										$alt = $post_meta['items_name'];
										echo '<div class="entry-thumb">';
										echo "<ul class='entry-gallery-post-slider'>";
											foreach ( $post_meta['items'] as $item ) {
												echo "<li><img src='". esc_url($item)."' alt='".esc_attr($alt)."'/></li>";
											}
										echo "</ul>";
										echo '</div>';
									elseif( has_post_thumbnail() ):
										echo "<div class='entry-thumb'>";?>
											<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
												the_post_thumbnail("full");	?>
											</a><?php
										echo "</div>";
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;

								elseif( $format === "video" ) :
									if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) :
										if( array_key_exists('oembed-url', $post_meta) ) :
											echo "<div class='entry-thumb'><div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div></div>';
										elseif( array_key_exists('self-hosted-url', $post_meta) ) :
											echo "<div class='entry-thumb'><div class='dt-video-wrap'>".apply_filters( 'the_content', $post_meta['self-hosted-url'] ).'</div></div>';
										endif;
									elseif( has_post_thumbnail() ):
										echo "<div class='entry-thumb'>";?>
											<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
												the_post_thumbnail("full");	?>
											</a><?php
										echo "</div>";
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;

								elseif( $format === "audio" ) :
									
									if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) :
										echo '<div class="entry-thumb">';
										if( array_key_exists('oembed-url', $post_meta) ) :
											echo wp_oembed_get($post_meta['oembed-url']);
										elseif( array_key_exists('self-hosted-url', $post_meta) ) :
											$custom_class = "self-hosted-audio";
											echo apply_filters( 'the_content', $post_meta['self-hosted-url'] );
										endif;
										echo '</div>';
									elseif( has_post_thumbnail() ):
										echo "<div class='entry-thumb'>";?>
											<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
												the_post_thumbnail("full");	?>
											</a><?php
										echo "</div>";
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;

								else:
									if( has_post_thumbnail() ) :?>
										<div class="entry-thumb">
											<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
												the_post_thumbnail("full");?>
											</a>
										</div><?php
									else:
										$custom_class = "has-no-post-thumbnail";
									endif;
								endif;?>
                                
								<div class="entry-details <?php echo esc_attr($custom_class);?>">
										<?php if(is_sticky()): ?>
											<div class="featured-post"> <span class="fa fa-trophy"> </span> <?php _e('Featured','dt_themes');?> </div>
										<?php endif;?>

										<div class="entry-title">
											<h3><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h3>
										</div>

										<div class="entry-metadata">
											<p class="categories"><span class='fa fa-folder-open'> </span><?php the_category(', '); ?></p>
											<?php the_tags("<p class='tags'><span class='fa fa-tags'> </span> ",', ','</p>');?>
										</div>

										<div class="entry-body"><?php the_excerpt();?></div>

										<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>" class="dt-sc-button small">
											<?php _e('Read More','dt_themes');?> <span class="fa fa-chevron-circle-right"> </span></a>
								</div>
							</div>
						</article>
					</div>
				<?php endwhile;
			else:?>
				<h2><?php _e( 'Nothing Found','dt_themes'); ?></h2>
				<h3><?php _e( "Oops!, Couldn't find what you're looking for!",'dt_themes'); ?></h3>
				<?php get_search_form();
			endif;?>
			</div>

			<!-- **Pagination** -->
			<div class="pagination blog-pagination">
				<div class="prev-post"><?php previous_posts_link(__('Prev','dt_themes'));?></div>
				<?php echo dttheme_pagination();?>
				<div class="next-post"><?php next_posts_link( __('Next','dt_themes') );?></div>
			</div><!-- **Pagination** -->
		</section>
		<!-- ** Primary Section End ** -->

	<?php if( $show_right_sidebar ) : ?>
		<!-- ** Secondary Right Section ** -->
		<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('right'); ?>
		</section>
		<!-- ** Secondary Right Section End ** --><?php 
	endif;

	#Page Top Code Section
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-page-bottom-code']))
		echo wp_kses($dttheme_integration['single-page-bottom-code'],$dt_allowed_html_tags );

	get_footer();?>