<?php
/*
Template Name: Blog Masonry 
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

<?php if ( have_posts() ) { while ( have_posts() ) : the_post();  $builder69_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));?>
	
	<div class="row">	
			
		<div class="col-md-12">
	    
	    		<?php the_content( wp_kses(__( '<div class="reed_more">Reed More &raquo;</div><div></div>', 'builder69' ), $builder69_allowed_html_array ) ); ?>
			   
	           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
				
	           <div class="clear"></div>
		
	    </div><!--END POST -->
		    
	</div>
			    
<?php endwhile;  ?>

<div class="row">

	<div class="col-md-<?php if ($mt_layout != "full") { echo "8 "; } else {  echo "12 "; } echo sanitize_html_class($mt_float_layout);  ?> ">
<div class="mt-mansory-loop row">
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
				
				$text = get_the_content( esc_html__( '', 'builder69' )); 
				
				 ?>
				 <div class=" col-md-4 mt-masonry-entry ">
					<article class="mt-post-medium" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="row">
							<div class="col-md-12">
								
								<?php if ( has_post_format( 'gallery' )) { ?> 
								<div class="mt-image-area">
									<div class="flexslider mt<?php echo sanitize_html_class(get_the_ID()); ?>"> 
										<ul class="slides">	
										<?php
										$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_slider', true));
										if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
											    if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><img src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 360) )); ?>" /></li> <?php 
												}
									        }
									    }
									?>			
										</ul>
									</div>
								</div>
									<script type="text/javascript">
										jQuery(window).load(function() {
											  jQuery('.mt<?php echo esc_attr(get_the_ID()); ?>').flexslider({
												animation: "slide",
												 smoothHeight: false,
												start: function(){
																 var $container = jQuery('.mt-mansory-loop');
																$container.imagesLoaded( function() {
																$container.masonry({
																		itemSelector: '.mt-masonry-entry',                        
																	});
																}); 
															},												 
												 });
											});
									</script>
								<?php } else if ( has_post_format( 'audio' )) { ?>
									<div class="mt-image-area embed-fix"><?php echo get_post_meta(get_the_ID(), "mt_post_audio_embed", true); ?></div>
								<?php } else if ( has_post_format( 'video' )) { ?>
									<div class="mt-image-area embed-fix"><?php echo get_post_meta(get_the_ID(), "mt_post_video_embed", true); ?></div>
								<?php } else { ?>
									<div class="mt-image-area">
										<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title();  ?>" >
											<?php if ( has_post_thumbnail() ) { echo get_the_post_thumbnail(get_the_ID(),"builder69_manzory_full"); } ?>
										</a>
										<?php builder69_entry_meta_manzory(); ?>
									</div>
								<?php } ?>
							
							
							<div class="mt_manzory_content">
								
							
								<?php if ( !has_post_format( 'link' ) and !has_post_format( 'quote' )) { ?> 
									<h1 class="entry-title">
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'builder69' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a>
									</h1>
								<?php } ?>
								
								<?php if ( !has_post_format( 'link' ) and !has_post_format( 'quote' )) { ?> 
									<p><?php echo substr($text, 0, 110);  ?>...</p>
									<a href='<?php echo get_permalink(); ?>' class='mt-more-link'><span><?php echo esc_html_e( 'Read more', 'builder69' ); ?></span></a>
								<?php } ?>
								<?php if ( has_post_format( 'link' )) { ?> 
									<h1 class="entry-title mt-post-type-link">
										<a href="<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_link_url", true)); ?>"><?php echo get_the_title();  ?></a>
									</h1>
								<?php } ?>
								<?php if ( has_post_format( 'quote' )) { ?> 
									<div  class="mt-blog-quote-text">
										<?php the_excerpt();  ?>
									</div>
									<a class="mt_format_link" href="<?php echo esc_url(get_post_meta(get_the_ID(), "mt_portfolio_format_quo_url", true)); ?>">
										<?php echo esc_html(the_title()); ?>
									</a>
								<?php } ?>
							</div>
						</div>
					</article>
					</div>
				<?php 	  
					
			 endwhile; 

			 builder69_paging_nav(); 
			 
			 ?>
	</div>	
	</div>
	
	<?php if ($mt_layout != "full") { ?>
		
		<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
	
	<?php } ?>
			
</div>

<?php } get_footer(); ?>