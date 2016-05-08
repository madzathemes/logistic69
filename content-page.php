

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo get_the_title();  ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content( esc_html__( '', 'builder69' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( esc_html__( 'Edit', 'builder69' ), '<span class="edit-link">', '</span>' ); ?>
		
	</footer><!-- .entry-meta -->
</article><!-- #post -->
