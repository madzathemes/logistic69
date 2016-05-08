<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mt_quote_style"  >
		<div  class="entry-title"><?php if(!is_single()) { 
				
				if(ot_get_option("blog_content_type")=="full_content") { the_content( esc_html__( '', 'builder69' ) ); } else { the_excerpt(); }
				
			} else { 
			
				the_content( esc_html__( '', 'builder69' ) ); 
				
			}  ?></div>
		
	</header>
	<footer class="entry-meta mt_quote_style">
		<a class="mt_format_link" href="<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_quo_url", true)); ?>">
		<?php echo esc_html(the_title()); ?></a><?php edit_post_link( esc_html__( 'Edit', 'builder69' ), ' l <span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-meta --><div class='clear'></div>	
</article><!-- #post -->