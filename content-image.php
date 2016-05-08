
	<article class='mt-posttype-image' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="entry-page-image">
				<?php $image = esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_image_url", true)); ?>
    	
							<?php  
							if ( get_post_meta(get_the_ID(), "mt_portfolio_slider_height3", true)!="") { $height = get_post_meta(get_the_ID(), "mt_portfolio_slider_height3", true); } else { $height = "auto"; }  
							
								
							?>
								<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 999,999 )); 
								the_post_thumbnail($src[0], array(960, $height, 'bfi_thumb' => true));
								 ?>
																		            
				
		
			</div>
					
		<?php if (!is_single()) { ?>
		<header class="entry-header">
			<?php if(get_post_meta(get_the_ID(), "postm_title_on", true)=="on"){	?>		
				<h1 class="entry-title"><a href="<?php if(get_post_meta(get_the_ID(), "mt_portfolio_format_image_url", true)=="" or get_post_meta(get_the_ID(), "mt_portfolio_format_image_url", true)=="http://"){ the_permalink(); } else { echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_image_url", true)); }?>"><?php echo get_the_title();  ?></a></h1>
			<?php } 
			 ?>
		</header>	
		<?php } ?>	
			
				<?php if (is_single()) { ?>
				<div class="entry-content">
					<?php if(!is_single()) { 
				
				if(ot_get_option("blog_content_type")=="full_content") { the_content( esc_html__( '', 'builder69' ) ); } else { the_excerpt(); }
				
			} else { 
			
				the_content( esc_html__( '', 'builder69' ) ); 
				
			} ?>
				</div><!-- .entry-content -->
				<?php } ?>

		<?php if(get_post_meta(get_the_ID(), "postm_border_on", true)=="on"){	?>
		
		<footer class="entry-meta">
			
		</footer><!-- .entry-meta -->
		
		<?php } ?>	<div class='clear'></div>	
	</article><!-- #post -->
