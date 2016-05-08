<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-page-image">
				<div class="flexslider mt<?php echo sanitize_html_class($post->ID); ?>"> 
					<ul class="slides">		
						
						<?php
										$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_slider', true));
										if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
											    if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><img src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 1140) )); ?>" /></li> <?php 
												}
									        }
									    }
									?>	
					</ul>
				</div>
		
				<script type="text/javascript">
					jQuery(window).load(function() {
			              jQuery('.mt<?php echo esc_attr($post->ID); ?>').flexslider({
			                animation: "slide",
			                 smoothHeight: true			              });
			            });
				</script>
				<?php if(ot_get_option("blog_meta_on")!="off") {  builder69_entry_meta(); } ?>
			</div>		
			
			<?php if (!is_single()){?>	
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();  ?></a></h1>
					
				</header>	
			<?php } ?>
		
		
				<div class="entry-content">
					<?php if( ! is_single()) { 
				
				if(ot_get_option("blog_content_type")=="full_content") { the_content( esc_html__( '', 'builder69' ) ); } else { the_excerpt(); }
				
			} else { 
			
				the_content( esc_html__( '', 'builder69' ) ); 
				
			}  ?>
				</div><!-- .entry-content -->
			
		<footer class="entry-meta">
		
		</footer><!-- .entry-meta -->
		<div class='clear'></div>
</article><!-- #post -->
