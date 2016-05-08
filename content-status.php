
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'builder69' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo esc_html(get_the_date()); ?></a></h2>
			</header>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'builder69_status_avatar', '48' ) ); ?>
		</div><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( esc_html__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'builder69' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php edit_post_link( esc_html__( 'Edit', 'builder69' ), '<span class="edit-link">', '</span>' ); ?>
			
		</footer><!-- .entry-meta --><div class='clear'></div>	
	</article><!-- #post -->
