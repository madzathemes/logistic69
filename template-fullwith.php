<?php
/*
Template Name: Full Width
*/
$comment=get_post_meta(get_the_ID(), "madza_comment", true); 
?>

<?php get_header(); ?>

<!-- FULL PAGE -->
<div class="clear"></div>
<div class="mt-padding-layout">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
           <div class="reed_more"> <?php the_content( esc_html__( 'Reed More &raquo;', 'builder69' ) ); ?> </div>
		   
           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
			
           <div class="clear"></div>
	
    </div><!--END post -->

	<?php if($comment=='Yes'){ comments_template( '', true );  }?>

<?php endwhile; ?>

</div><!--END FULL PAGE -->

<?php get_footer(); ?>

