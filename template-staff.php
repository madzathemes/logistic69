<?php
/*
*/ 

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);
$count = get_post_meta(get_the_ID(), "mt_template_item_pp", true); 




$mt_float_layout = "";
$mt_float_sidebar = "";

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="row">	
			
		<div class="col-md-12">
	    
	    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
			   
	           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
				
	           <div class="clear"></div>
		
	    </div><!--END POST -->
		    
	</div>
			    
<?php endwhile;  ?>

<div class="row">

	<div class="col-md-<?php if ($mt_layout != "full") { echo "8 "; } else {  echo "12 "; } echo sanitize_html_class($mt_float_layout); ?> ">

		<div class="row">
		
		    <?php $loop = new WP_Query(array(
			        	'post_type'=> 'our-staff',
			            'posts_per_page' => $count, 
			            ));
		            
	     			while ( $loop->have_posts() ) : $loop->the_post();
			    
			    $staff_phone = get_post_meta(get_the_ID(), "mt_staff_phone", true);
				$staff_email = get_post_meta(get_the_ID(), "mt_staff_email", true);
				$staff_position = get_post_meta(get_the_ID(), "mt_staff_position", true);
				$staff_description = get_post_meta(get_the_ID(), "mt_staff_description", true);
			    
		    ?>
		    
			    <div class="col-md-4"> 
			                       
					<header class="entry-header">
						
						<?php if ( has_post_thumbnail() ) : ?>	
							  
							<div class="entry-page-image">
							
								<img class="cause-img"  src="<?php 
								
								$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' ); 
								
								echo get_the_post_thumbnail( get_the_ID(), array(300, 170, 'bfi_thumb' => true), $src[0] );
								 
								 ?>" alt=""> 
								
							</div>
						<?php endif; ?>	
						
					</header>
					
					<h1 class="entry-title-2"><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title();  ?>" rel="bookmark"><?php echo get_the_title();  ?></a></h1>
							
					<?php if($staff_position!="") { ?><p class="entry-title-2"><?php echo esc_attr($staff_position); ?></li></p><?php } ?>
							
					
					<?php if($staff_description!="") { ?><div class="entry-content"><p><?php echo esc_attr($staff_description); ?></p></div><?php } ?>
		
					<footer class="entry-meta">
						
							
							<ul class="mt_staff_list">
								
								<?php if($staff_phone!="") { ?><li><strong>Phone:</strong> <?php echo esc_attr($staff_phone); ?></li><?php } ?>
								<?php if($staff_email!="") { ?><li><strong>E-mail:</strong> <?php echo esc_attr($staff_email); ?></li><?php } ?>
						
							</ul>
							
						
					</footer>
					
				</div>
		       
			<?php endwhile; ?>
			
		</div>
	
	</div>
	
	<?php if ($mt_layout != "full") { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>

<?php get_footer(); ?>