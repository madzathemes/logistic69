<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */

get_header(); 

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);

$mt_float_layout = "";
	$mt_float_sidebar = "";
	
if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

?>

<div class="row">

	<div class="col-md-<?php if ($mt_layout != "full") { echo "8 "; } else {  echo "12 "; } echo sanitize_html_class($mt_float_layout); ?> ">
	
		<?php while ( have_posts() ) : the_post(); ?>
		
					<?php get_template_part( 'content', get_post_format() ); ?>
	
					<nav class="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'builder69' ) . '</span> %title' ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'builder69' ) . '</span>' ); ?></span>
					</nav><!-- .nav-single -->
					
					<?php if ( is_active_sidebar( 'sidebar-single-bottom-widget-area' ) ) { dynamic_sidebar( 'sidebar-single-bottom-widget-area' ); } ?>
	
					<?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>
			
		<?php endwhile; ?>	
	
	</div>
	
	<?php if ($mt_layout != "full") { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>

<?php get_footer(); ?>