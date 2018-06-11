<!-- **Header** -->
<header id="header" class="header5">
    
    <!--menu-container starts-->
	<div id="menu-container">
    	<div class="container">
        	<!-- ** Navigation Starts ** -->
            <div class="logo"><?php
				if( dttheme_option('general', 'logo') ):
					$url = dttheme_option('general', 'logo-url');
					$url = !empty( $url ) ? $url : IAMD_BASE_URL."images/logo.png";
	
					$retina_url = dttheme_option('general','retina-logo-url');
					$retina_url = !empty($retina_url) ? $retina_url : IAMD_BASE_URL."images/logo@2x.png";
					$width = dttheme_option('general','retina-logo-width');
					$width = !empty($width) ? $width."px;" : "227px";
					
					$height = dttheme_option('general','retina-logo-height');
					$height = !empty($height) ? $height."px;" : "47px";?>
					<a href="<?php echo esc_url(home_url());?>" title="<?php echo esc_attr(dttheme_blog_title());?>">
						<img class="normal_logo" src="<?php echo esc_url($url);?>" alt="<?php echo esc_attr(dttheme_blog_title()); ?>" title="<?php echo esc_attr(dttheme_blog_title());?>"/>
						<img class="retina_logo" src="<?php echo esc_url($retina_url);?>" alt="<?php echo esc_attr(dttheme_blog_title());?>"
							 title="<?php echo esc_attr(dttheme_blog_title()); ?>" style="width:<?php echo esc_attr($width);?>; height:<?php echo esc_attr($height);?>;"/>
					</a><?php
				else:?>
					<h2><a href="<?php echo esc_url(home_url());?>" title="<?php echo esc_attr(dttheme_blog_title());?>"><?php echo do_shortcode(get_option('blogname')); ?></a></h2><?php
				endif;?>
			</div>
            <nav id="main-menu">
            	<div class="dt-menu-toggle" id="dt-menu-toggle">
                	<?php _e('Menu','dt_themes');?>
                    <span class="dt-menu-toggle-icon"></span>
                </div><?php
				
					$primaryMenu = NULL;
					
					if (function_exists('wp_nav_menu')) :
						$primaryMenu = wp_nav_menu(array('theme_location'=>'header_menu','menu_id'=>'','menu_class'=>'menu','fallback_cb'=>'dttheme_default_navigation'
                                    ,'echo'=>false,'container'=>'','walker' => new DTFrontEndMenuWalker()));
					endif;
					if(!empty($primaryMenu)):
						echo $primaryMenu;
					endif;?>
            </nav><!-- ** Navigation Ends ** -->            
        </div>
	</div>
    <!--menu-container ends-->
</header><!-- **Header - End** -->