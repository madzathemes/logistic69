<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-page-image"> <?php echo get_post_meta($post->ID, "mt_post_audio_embed", true); ?> </div>
			<header class="entry-header">
			<?php if (!is_single()){?>	
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();  ?></a></h1>
				<?php if(ot_get_option("blog_meta_on")!="off") {  builder69_entry_meta(); } ?>
			<?php } ?>
		</header>					
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
