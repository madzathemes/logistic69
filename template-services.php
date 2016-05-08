<?php
/*
Template Name: Services
*/ 

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);
$categorys = get_post_meta(get_the_ID(), "mt_portfolio_category", true);
$count = get_post_meta(get_the_ID(), "mt_template_item_pp", true); 
$columns = get_post_meta(get_the_ID(), "mt_template_columns", true);
$category = get_post_meta(get_the_ID(), "mt_portfolio_category", true); 
$link = get_post_meta(get_the_ID(), "mt_template_links", true);
$menu = get_post_meta(get_the_ID(), "mt_template_menu", true);

$mt_float_layout = "";
$mt_float_sidebar = "";

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

?>

<?php get_header(); ?>

<div class="row">

	<div class="col-md-<?php if ($mt_layout != "full") { echo "8 ";} else {  echo "12 "; } echo sanitize_html_class($mt_float_layout); ?> ">
	
     <div class="post-box2 row"> <?php
		    
			            $loop = new WP_Query(array(
			        	'post_type'=> 'our-services',
			            'posts_per_page' => $count, 
			            'field' => 'slug',
			            'order'     => 'ASC',
			            'paged' => get_query_var( 'paged' )
			            ));
		            
						$portfolio_layout_style = "default";
						
                    $i = 0; 
	     			while ( $loop->have_posts() ) : $loop->the_post();
	                        
							
							$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999, 999 ));							
							$portfolio_excerpt = '<p>'.get_post_meta(get_the_ID(),'mt_portfolio_excerpt', true).'</p>';
						
							
							if($link=="permalink"){ ?>
								
									<?php if($columns=="4") { $columnidisotop = "4"; ?>
										<div class="port port-file-3 col-md-3 sorting <?php $post_cats = wp_get_post_terms( get_the_ID(),'portfolio_cat' ); foreach( $post_cats as $category ) { echo esc_attr($category->slug).' ';} ?>" data-category="portfolio">
											<div class="viewport4column">
												<div  class="mt_overflow_hiden">
											    <a class="mt_project_image_link" href="<?php the_permalink(); ?>">
											        <span class="mt_hover_frame"><i class="fa fa-link"></i></span>
											        <?php 	$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' ); 
											        		echo get_the_post_thumbnail( get_the_ID(), array(300, 200, 'bfi_thumb' => true, 'class' => ' img-zoom')); ?>
											    </a>
												</div>
											    <div class="mt_isotope_text">
											    	<a href="<?php the_permalink(); ?>"><h4 class="widget_h_2"><?php echo get_the_title();  ?></h4></a>
											    	<?php echo balanceTags($portfolio_excerpt); echo "<a href='".get_permalink()."' class='more-link'><span>Read more</span></a>"; ?> 
											    </div>
											</div>
										</div> 
									<?php } else if($columns=="3") {  $columnidisotop = "3"; ?>
										<div class="col-md-4">
											<div class="mt_service_area">
											    <a href="<?php the_permalink(); ?>">
											        <span class="dark-background-2"></span>
											        <?php 	$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' ); 
											        		echo get_the_post_thumbnail( get_the_ID(), array(480, 360, 'bfi_thumb' => true));?>
											    </a>
											    <div class="mt_service_text_area">
											    	<a href="<?php the_permalink(); ?>"><h4><?php echo get_the_title();  ?></h4></a>
											    	<div class="clear"></div>
											    </div>
											</div>
										</div> 	
									<?php } else if($columns=="2") {  $columnidisotop = "2"; ?>
										<div class="port port-file-3 col-md-6 sorting <?php $post_cats = wp_get_post_terms( get_the_ID(),'portfolio_cat' ); foreach( $post_cats as $category ) { echo sanitize_html_class($category->slug.' ');} ?>" data-category="portfolio">
											<div class="viewport2column">
											    <a href="<?php the_permalink(); ?>">
											        <span class="dark-background-2"></span>
											        <?php 
											        	$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' ); 
											        	echo get_the_post_thumbnail( get_the_ID(), array(700, 350, 'bfi_thumb' => true, 'class' => ' img-zoom'));?>
											    </a>
											    <div class="mt_isotope_text">
											    	<a href="<?php the_permalink(); ?>"><h4 class="widget_h_2"><?php echo get_the_title();  ?></h4></a>
											    	<?php echo balanceTags($portfolio_excerpt); echo "<a href='".get_permalink()."' class='more-link'><span>Read more</span></a>"; ?> 
											    	<div class="clear"></div>
											    </div>
											</div>
										</div> 	
									<?php } else {  $columnidisotop = "1"; ?>
										<div class="port port-file-3 col-md-12 sorting <?php $post_cats = wp_get_post_terms( get_the_ID(),'portfolio_cat' ); foreach( $post_cats as $category ) { echo sanitize_html_class($category->slug.' ');} ?>" data-category="portfolio">
											<div class="viewport1column">
											    <a href="<?php the_permalink(); ?>">
											        <span class="dark-background-2"></span>
											        <?php 
											        	$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' ); 
											        	echo get_the_post_thumbnail( get_the_ID(), array(960, 350, 'bfi_thumb' => true, 'class' => ' img-zoom'));?>
											    </a>
											    <div class="mt_isotope_text">
											    	<a href="<?php the_permalink(); ?>"><h4 class="widget_h_2"><?php echo get_the_title();  ?></h4></a>
											    	<?php echo balanceTags($portfolio_excerpt); echo "<a href='".get_permalink()."' class='more-link'><span>Read more</span></a>"; ?> 
											    	<div class="clear"></div>
											    </div>
											</div>
										</div> 	
									<?php } ?>	
				    			 
			    			<?php } 
			    			
			    		  ?>
			    	 
	      <?php $i++;  endwhile; ?>
	      
    </div>
    
	<div>
			
			 <?php if ( have_posts() ) while ( have_posts() ) : the_post();  $builder69_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array())); ?>
				
				    
				    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
						   
				           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
							
				
			    
			    <?php endwhile;  ?>
			
		</div>
			
	</div>
		
	
	<?php if ($mt_layout != "full") { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>

<?php get_footer(); ?>

