<article id="post-<?php the_ID(); ?>" <?php post_class();  ?>>

	<header class="entry-header">
		<i class="ti-link mt-blog-icon"></i>
		<h1 class="entry-title">
			<a href="<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_link_url", true)); ?>"><?php echo get_the_title();  ?></a>
		</h1>
	</header>
	<?php if (is_single()) { ?>
	<div class="entry-content">
		<?php the_content( esc_html__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'builder69' ) ); ?>
	</div><!-- .entry-content -->
	<?php } ?>
	<footer class="entry-meta">
		<a class="mt_format_link" href="<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_link_url", true)); ?>">
			<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_link_url", true)); ?>
		</a>
			
	</footer><!-- .entry-meta --><div class='clear'></div>	
</article><!-- #post -->
