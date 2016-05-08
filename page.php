<?php
/**
 * @author madars.bitenieks
 * @copyright 2014
 */

get_header(); 

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);

$mt_float_layout = "";
$mt_float_sidebar = "";

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

if(function_exists( 'tribe_is_event' ) ) {  
	if (tribe_is_event() && !tribe_is_day() && !is_single()) {  
		$mt_layout = "full"; 
	}
}
$more = 0;

$mt_content = get_post_meta(get_the_ID(), "mt_content_on", true);

if ($mt_content == "" or $mt_content == "yes") { ?>

<?php } 

if ($mt_layout == "full") {
?>

<div class="row">
		<div class="col-md-12">
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post();  $builder69_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));?>
				
				    
				    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
						   
				           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
							
				
			     <?php  comments_template( '', true );  ?>
			    <?php endwhile;  ?>

		</div>		
</div>

<?php } else { ?>

<div class="row">
	<div class="col-md-<?php if ($mt_layout == "full" or $mt_layout == "") { echo "12 ";  } else {  echo "8 ";  } echo sanitize_html_class($mt_float_layout); ?> ">

		    <?php if ( have_posts() ) while ( have_posts() ) : the_post();  global $builder69_allowed_html_array; ?>
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    
				    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
						   
				           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
							
				           <div class="clear"></div>
					
				    </div><!--END POST -->
			    
				    <?php  comments_template( '', true );  ?>
			    
			    <?php endwhile;  ?>
		
	</div>
	
	<?php if ($mt_layout == "full" or $mt_layout == "") {} else { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>

<?php 

}




?>

<?php get_footer(); ?>