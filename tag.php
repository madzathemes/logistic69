<?php get_header(); ?>

<div class="row">

	<div class="col-md-8 ">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); 
					
					 get_template_part( 'content', get_post_format() ); 
					
				 endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'builder69' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php esc_html_e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'builder69' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>


	</div>
	
		
		<div class="col-md-4"><?php get_sidebar(); ?></div>
	
			
</div>

<?php get_footer(); ?>
