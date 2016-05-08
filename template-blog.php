<?php
/*
Template Name: Blog
*/ 

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);
$count = get_post_meta(get_the_ID(), "mt_template_item_pp", true); 
$category = get_post_meta(get_the_ID(), "mt_blog_category", true); 

$mt_float_layout = "";
$mt_float_sidebar = "";

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

?>

<?php get_header(); ?>

<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); $builder69_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array())); ?>
	
	<div class="row">	
			
		<div class="col-md-12">
	    
	    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
			   
	           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
				
	           <div class="clear"></div>
		
	    </div><!--END POST -->
		    
	</div>
			    
<?php endwhile;  ?>

<div class="row">

	<div class="col-md-<?php if ($mt_layout != "full") { echo "8 ";  } else {  echo "12 "; } echo sanitize_html_class($mt_float_layout);  ?> ">

		    <?php
		    
		    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
			elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
			else { $paged = 1; }
		    
		       
		     $wp_query= null; 
		     $wp_query = new WP_Query(); 
		 
		     
		    if( ! empty($category)) { 
	    			$wp_query = new WP_Query(array(
		        	'post_type'=> 'post',
		        	'tax_query' => array( array( 'taxonomy' => 'category', 'field' => 'id', 'terms' => $category )),
		            'posts_per_page' => $count,
		            'paged' => $paged
		            )); 
		    } else {
		            $wp_query = new WP_Query(array(
		        	'post_type'=> 'post',
		            'posts_per_page' => $count, 
		            'paged' => $paged
		            ));
	        }
		            
		    
		    
		    
		    
		 
		    		
			 while ($wp_query->have_posts()) : $wp_query->the_post();
	
						 get_template_part( 'content', get_post_format() ); 
						
			 endwhile; 

			 builder69_paging_nav(); 
			 
			 ?>
		
	</div>
	
	<?php if ($mt_layout != "full") { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar);  ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>
<div class='clear'></div>

<?php } get_footer(); ?>