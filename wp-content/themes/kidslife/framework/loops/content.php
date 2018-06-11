<article id="post-<?php the_ID();?>" <?php post_class(array('blog-entry','blog-single-entry'));?>><?php

	$post_meta = get_post_meta( get_the_id(), '_dt_post_settings', TRUE );
	$post_meta = is_array( $post_meta ) ? $post_meta  : array();
	$format = get_post_format(  get_the_id() );?>

	<div class="blog-entry-inner">
		<div class="entry-meta">
			<a class="blog-author" href="<?php echo esc_attr( get_author_posts_url(get_the_author_meta('ID')) );?>"><?php echo get_avatar( get_the_author_meta('user_email')); ?></a>	
			<div class="date ribbon-left">
				<span> <?php echo get_the_date('d');?> </span>
				<p> <?php echo strtoupper(get_the_date('M'));?> <br> <?php echo get_the_date('Y');?> </p>
                <span class="meta-arrow"></span> 
			</div>

			<?php comments_popup_link( __(' 0 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'), 
					__('1 <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
					__('% <span class="fa fa-comments"> </span> <span class="meta-arrow"></span>','dt_themes'),
					'comments ribbon-left',
					__('<span class="fa fa-comments-o"> </span> <span class="meta-arrow"></span>','dt_themes'));?>

			<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" class="entry_format ribbon-left">
				<span></span> <span class="meta-arrow"></span>
			</a>
		</div><?php
			
			$custom_class = "";
			
			if( $format == "image" || empty($format) ) : 
				if( has_post_thumbnail() ):?>
                	<div class="entry-thumb">
						<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                    </div><?php
				else:
					$custom_class = "has-no-post-thumbnail";
				endif;

			elseif( $format === "gallery" ) :
			
				if( array_key_exists("items", $post_meta) ) :
					echo '<div class="entry-thumb">';
					echo "<ul class='entry-gallery-post-slider'>";
							foreach ( $post_meta['items'] as $item ) {
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
				if( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) :
					if( array_key_exists('oembed-url', $post_meta) ) :
						echo "<div class='entry-thumb'><div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div></div>';
					elseif( array_key_exists('self-hosted-url', $post_meta) ) :
						echo "<div class='entry-thumb'><div class='dt-video-wrap'>".apply_filters( 'the_content', $post_meta['self-hosted-url'] ).'</div></div>';
                    endif;
				elseif( has_post_thumbnail() ):?>
                	<div class="entry-thumb">
						<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php the_post_thumbnail("full");?></a>
                    </div><?php
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
			endif;?>
		<div class="entry-details <?php echo esc_attr($custom_class);?>">

        	<?php if(is_sticky()): ?>
            		<div class="featured-post"> <span class="fa fa-trophy"> </span> <?php _e('Featured','dt_themes');?> </div>
            <?php endif;?>

			<div class="entry-title">
				<h3>
					<a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a>
				</h3>
			</div>

			<div class="entry-metadata">
				<p class="categories"><span class='fa fa-folder-open'> </span><?php the_category(', '); ?></p>
				 <?php the_tags("<p class='tags'><span class='fa fa-tags'> </span> ",', ','</p>');?>
			</div>

			<div class="entry-body">
				<?php echo dttheme_excerpt(50);?>
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>" class="dt-sc-button small">
                <?php _e('Read More','dt_themes');?> <span class="fa fa-chevron-circle-right"> </span></a>
			</div>
		</div>
	</div>
</article>