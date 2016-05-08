<?php
/**
 * @author madars.bitenieks
 * @copyright 2015
 */
?>
<?php get_header(); ?>

<div class="row">

	<div class="col-md-8">
		<?php if ( have_posts() ) : ?>
	
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				
				<?php builder69_content_nav( 'nav-below' ); ?>
		<?php else : ?>
						<div id="post-0" class="post no-results not-found">
							<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'builder69'  ); ?></h2>
							<div class="entry-content">
								<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'builder69'  ); ?></p>
							
							</div>
						</div>
		<?php endif; ?>
	</div>

	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
