<?php $tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
	  $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();
	  
	  $post_layout = array_key_exists("layout",$tpl_default_settings) ? $tpl_default_settings['layout'] : "content-full-width";
  	  $show_left_sidebar = $show_right_sidebar = false;
	  $sidebar_class = "";

	  # Global Post Layout
	  if( !is_null( $GLOBALS['enable_global_post_layout'] ) ) {
	  	$post_layout = $GLOBALS['global_post_layout'];
	  }
	  # Global Post Layout

	  $format = get_post_format( $post->ID );

	  switch($post_layout):
		case 'with-left-sidebar':
			$post_layout 	=	"page-with-sidebar with-left-sidebar";
			$show_left_sidebar 	= 	true;
			$sidebar_class 	=	"left-sidebar";
		break;
		
		case 'with-right-sidebar':
			$show_right_sidebar = 	true;
			$post_layout 	=	"page-with-sidebar with-right-sidebar";
			$sidebar_class 	=	"right-sidebar";
		break;

		case 'with-both-sidebar':
			$show_left_sidebar = $show_right_sidebar = true;
			$post_layout 	=	"page-with-sidebar page-with-both-sidebar";
			$sidebar_class 	=	"secondary-has-both-sidebar";
		break;
	  endswitch;

		$format_info = isset( $tpl_default_settings['disable-format-info']) ? " hidden " : "entry_format ribbon-left";
		$hide_date_meta = isset( $tpl_default_settings['disable-date-info'] ) ? " hidden " : "";
		$hide_comment_meta = isset( $tpl_default_settings['disable-comment-info'] ) ? " hidden " : " comments ribbon-left ";
		$hide_author_meta = isset( $tpl_default_settings['disable-author-info'] ) ? " hidden " : "";
		$hide_category_meta = isset( $tpl_default_settings['disable-category-info'] ) ? " hidden " : "";
		$hide_tag_meta = isset( $tpl_default_settings['disable-tag-info'] ) ? " hidden " : "tags";
		$custom_class = "";?>

	<?php if( $show_left_sidebar ) : ?>
		<!-- ** Secondary Left Section ** -->
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
			<?php get_sidebar('left'); ?>
		</section>
		<!-- ** Secondary Left Section End ** -->
	<?php endif;?>	

	<!-- ** Primary Section** -->
	<section id="primary" class="<?php echo esc_attr($post_layout);?>">

		<!-- #post-<?php the_ID()?> starts -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry'); ?>>
			<div class="blog-entry-inner">
				<div class="entry-meta">
					<a class="blog-author <?php echo esc_attr($hide_author_meta);?>" href="<?php echo esc_url( get_author_posts_url(get_the_author_meta('ID')));?>">
						<?php echo get_avatar( get_the_author_meta('user_email')); ?></a>

					<div class="date ribbon-left <?php echo esc_attr($hide_date_meta);?>">
						<span> <?php echo get_the_date('d');?> </span>
						<p> <?php echo get_the_date('M');?> <br> <?php echo get_the_date('Y');?> </p>
                        <span class="meta-arrow"></span> 
					</div>

					<?php comments_popup_link( __(' 0 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
							__('1 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
							__('% <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
							$hide_comment_meta,
							__('<span class="fa fa-comments-o"> </span> <span class="meta-arrow"></span>','dt_themes'));?>

					<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" class="<?php echo esc_attr($format_info);?>">
						<span></span> <span class="meta-arrow"></span>
					</a>
				</div><?php
				
				if( !array_key_exists('disable-featured-image', $tpl_default_settings) ):
					if( $format == "image" || empty($format) ) : 
						if( has_post_thumbnail() ):?>
                        	<div class="entry-thumb">
                            	<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                            </div><?php
						else:
							$custom_class = "has-no-post-thumbnail";
						endif;
					elseif( $format === "gallery" ) :
						if( array_key_exists("items", $tpl_default_settings) ) :
							echo '<div class="entry-thumb">';
							echo "<ul class='entry-gallery-post-slider'>";
								foreach ( $tpl_default_settings['items'] as $item ) {
									echo "<li><img src='".esc_url($item)."'/></li>";
								}
							echo "</ul>";
							echo "</div>";
						elseif( has_post_thumbnail() ):?>
                        	<div class="entry-thumb">
                            	<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                            </div><?php
						else:
							$custom_class = "has-no-post-thumbnail";
						endif;
					elseif( $format === "video" ) :
						if( array_key_exists('oembed-url', $tpl_default_settings) || array_key_exists('self-hosted-url', $tpl_default_settings) ) :
							if( array_key_exists('oembed-url', $tpl_default_settings) ) :
								echo "<div class='entry-thumb'><div class='dt-video-wrap'>".wp_oembed_get($tpl_default_settings['oembed-url']).'</div></div>';
							elseif( array_key_exists('self-hosted-url', $tpl_default_settings) ) :
								echo "<div class='entry-thumb'><div class='dt-video-wrap'>".apply_filters( 'the_content', $tpl_default_settings['self-hosted-url'] ).'</div></div>';
							endif;
						elseif( has_post_thumbnail() ):?>
                        	<div class="entry-thumb">
                            	<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                            </div><?php
						else:
							$custom_class = "has-no-post-thumbnail";
						endif;
					elseif( $format === "audio" ) :
						if( array_key_exists('oembed-url', $tpl_default_settings) || array_key_exists('self-hosted-url', $tpl_default_settings) ) :
							echo '<div class="entry-thumb">';
								if( array_key_exists('oembed-url', $tpl_default_settings) ) :
									echo wp_oembed_get($tpl_default_settings['oembed-url']);
								elseif( array_key_exists('self-hosted-url', $tpl_default_settings) ) :
									$custom_class = "self-hosted-audio";
									echo apply_filters( 'the_content', $tpl_default_settings['self-hosted-url'] );
								endif;
							echo '</div>';
						elseif( has_post_thumbnail() ):?>
                        	<div class="entry-thumb">
                            	<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                            </div><?php
						else:
							$custom_class = "has-no-post-thumbnail";
						endif;
					else:
						if( has_post_thumbnail() ) :?>
                        	<div class="entry-thumb">
                            	<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                            </div><?php
						else:
							$custom_class = "has-no-post-thumbnail";
						endif;
					endif;
				endif;?>

				<div class="entry-details <?php echo esc_attr($custom_class);?>">

					<?php if(is_sticky()): ?>
						<div class="featured-post"> <span class="fa fa-trophy"> </span> <?php _e('Featured','dt_themes');?> </div>
					<?php endif;?>
					<div class="entry-title">
						<h3>
							<a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>">
								<?php the_title();?></a>
						</h3>
					</div>

					<div class="entry-metadata">
						<p class="<?php echo esc_attr($hide_category_meta);?> categories"><span class='fa fa-folder-open'> </span><?php the_category(', '); ?></p>
						<?php the_tags("<p class='{$hide_tag_meta}'><span class='fa fa-tags'> </span> ",', ','</p>');?>
					</div>

					<div class="entry-body"><?php

						the_content();

						wp_link_pages( array( 'before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 
							'next_or_number'=>'number',	'pagelink' => '%', 'echo' => 1 ) );

						echo '<div class="social-bookmark">';
							show_fblike('post');
							show_googleplus('post');
							show_twitter('post');
							show_stumbleupon('post');
							show_linkedin('post');
							show_delicious('post');
							show_pintrest('post');
							show_digg('post');
						echo '</div>';

						echo '<div class="social-share">';
							dttheme_social_bookmarks('sb-post');
                        echo '</div>';

                        edit_post_link( __( ' Edit ','dt_themes' ) );?>
					</div>
				</div>
			</div>
		</article><!-- #post-<?php the_ID()?> Ends --><?php

			$dttheme_options = get_option(IAMD_THEME_SETTINGS);
			$dttheme_general = $dttheme_options['general'];

			$globally_disable_post_comment =  array_key_exists('global-post-comment',$dttheme_general) ? true : false;
			if( (!$globally_disable_post_comment) && (! isset($tpl_default_settings['disable-comment'])) ):?>
				<!-- **Comment Entries** -->
				<div class="commententries">
					<?php  comments_template('', true); ?>
				</div><!-- **Comment Entries - End** -->
			<?php
			endif;?>
	</section>
	<!-- ** Primary Section End ** -->

	<?php if( $show_right_sidebar ) : ?>
	<!-- ** Secondary Right Section ** -->
	<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>">
		<?php get_sidebar('right'); ?>
	</section>
	<!-- ** Secondary Right Section End ** -->
	<?php endif;?>