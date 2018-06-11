        <?php global $dt_allowed_html_tags; ?>
		<?php if( !is_page_template( 'tpl-fullwidth.php' ) ): ?>
            </div><!-- **Container - End** -->
        <?php endif;?>

		</div>
		<!-- main ends -->

    	<!--footer starts-->
        <footer><?php
        	$show_footer = dttheme_option('general','show-footer');
        	if( !empty($show_footer) ) :?>
        		<div class="footer-widgets-wrapper">
        			<div class="container"><?php
        				$columns = dttheme_option ('general','footer-columns');
        				dttheme_show_footer_widgetarea($columns);?>
        			</div>
        		</div><?php
        	endif;

        	$show_copyright = dttheme_option('general','show-copyrighttext');
        	$copyright_text = dttheme_option('general','copyright-text');
        	$copyright_text = wp_kses($copyright_text,$dt_allowed_html_tags );

        	if( !empty($show_copyright) && !empty( $copyright_text) ) :?>
        		<div class="copyright">
        			<div class="container">
        				<div class="copyright-info"><?php echo $copyright_text;?></div>
        				<div class="footer-links">
        					<p><?php _e('Follow us','dt_themes');?></p>
        					<?php echo do_shortcode('[social/]'); ?>
        				</div>	
        			</div>
        		</div>
        	<?php
        	endif;?>
        </footer><!--footer ends-->
	</div><!--inner-wrapper ends-->  
</div><!-- **Wrapper - End** -->

<a href="" title="<?php esc_attr(__('Go to Top','dt_themes'));?>" class="back-to-top"><?php _e('To Top','dt_themes');?></a>
<?php
	if (is_singular() AND comments_open())
		wp_enqueue_script( 'comment-reply');

	if(dttheme_option('integration', 'enable-body-code') != '') 
		echo "<script>".wp_kses(stripslashes(dttheme_option('integration', 'body-code')),$dt_allowed_html_tags )."</script>";
	wp_footer(); ?>
</body>
</html>