
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="aside">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'builder69' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a></h1>
		<div class="entry-content">
			<?php the_content( esc_html__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'builder69' ) ); ?>
		</div><!-- .entry-content -->
	</div><!-- .aside -->

	<footer class="entry-meta">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'builder69' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
		<div class="mt-space-icon"><i class="ti-more"> </i></div>
		<?php edit_post_link( esc_html__( 'Edit', 'builder69' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
