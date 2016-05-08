<?php
/**
 * @author madars.bitenieks
 * @copyright 2013
 */

get_header(); 

$src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array( 999,999 ), false, '' );
$mt_portfolio_slider_height = get_post_meta(get_the_ID(), "mt_portfolio_slider_height", true); 
$mt_fields = get_post_meta(get_the_ID(),'mb_portfolio_fields', true);
$mt_fields_button = get_post_meta(get_the_ID(),'mb_portfolio_fields_button', true);
$slides = get_post_meta(get_the_ID(),'mb_portfolio_slider', true);
$mt_layout = get_post_meta(get_the_ID(), "layout_positions4", true);
$mt_sidebar = get_post_meta(get_the_ID(), "layout_sidebar", true);

$mt_float_layout = "";
$mt_float_sidebar = "";

if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}
$mt_metabox_client = get_post_meta(get_the_ID(),'mt_metabox_client', true);
$mt_metabox_date = get_post_meta(get_the_ID(),'mt_metabox_date', true);
$mt_metabox_location = get_post_meta(get_the_ID(),'mt_metabox_location', true);
$mt_metabox_category = get_post_meta(get_the_ID(),'mt_metabox_category', true);

$mt_client_says = get_post_meta(get_the_ID(),'mt_client_says', true);
$mt_client_says_name = get_post_meta(get_the_ID(),'mt_client_says_name', true);
$mt_client_says_photo = get_post_meta(get_the_ID(),'mt_client_photo', true);

$layout = get_post_meta(get_the_ID(), "mt_project_layout", true);

?>
<?php if($layout == "4") { ?>
<div class="mt_project_row">
	
	
			    <div class="flexslider fslider"> 
							    <ul class="slides">
									<?php
										$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_gallery', true));
										if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
											    if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><img src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 1140, 'height' => 550) )); ?>" /></li> <?php 
												}
									        }
									    }
									?>
								</ul>
								
				</div>		
				<div class="carousel"> 
							    <ul class="slides">
								    <?php 
									    $images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_gallery', true));
									    if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
												if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><div class="mt_overflow_hiden"><img class=" img-zoom mt_img_gray" src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 190, 'height' => 110) )); ?>"/></div></li><?php 
												}
									        }
									    } 
									?>
								</ul>
								
				</div>	
				<script type="text/javascript">
								jQuery(window).load(function() {
								  // The slider being synced must be initialized first
									  jQuery('.carousel').flexslider({
									    animation: "slide",
									    controlNav: false,
									    animationLoop: false,
									    slideshow: false,
									    itemWidth: 190,
									    itemMargin: 1,
									    asNavFor: '.flexslider'
									  });
									 
									  jQuery('.flexslider').flexslider({
									    animation: "slide",
									    controlNav: false,
									    animationLoop: false,
									    slideshow: false,
									    sync: ".carousel"
									  });
								});
							</script>		
				<div class="mt_project_description">
					<div class="row">
						<div class="col-md-4">
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Project Details', 'builder69'  ) ); ?></h5>
							<span class="mt_point"></span>
							<?php if ($mt_metabox_client != "") { ?><div class="mt_project_detail"><i class="fa fa-user"></i> <?php printf( esc_html__( 'Client', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_client); ?></div><?php } ?>
							<?php if ($mt_metabox_date != "") { ?><div class="mt_project_detail"><i class="fa fa-calendar"></i> <?php printf( esc_html__( 'Date', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_date); ?></div><?php } ?>
							<?php if ($mt_metabox_location != "") { ?><div class="mt_project_detail"><i class="fa fa-map-marker"></i> <?php printf( esc_html__( 'Location', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_location); ?></div><?php } ?>
							<?php $terms = get_the_terms(get_the_ID(), 'portfolio_cat' ); if ($terms != "") { ?><div class="mt_project_detail"><i class="fa fa-folder-open-o"></i> <?php printf( esc_html__( 'Category', 'builder69'  ) ); ?>: <?php   if ($terms && ! is_wp_error($terms)) : $term_slugs_arr = array(); foreach ($terms as $term) { $term_slugs_arr[] = $term->slug; } $terms_slug_str = join( ", ", $term_slugs_arr); endif; echo esc_attr($terms_slug_str); ?>
							</div><?php } ?>
							<?php if($mt_fields!="") { ?>
								<?php foreach($mt_fields as $slide) { ?>
									<?php if ($slide['metabox_url'] == "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <?php echo esc_html($slide['metabox_text']); ?></div>		
									<?php } else if ($slide['metabox_url'] != "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <a href="<?php esc_url($slide['metabox_url']); ?>"><?php echo esc_html($slide['metabox_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 		
							
							
							<?php if($mt_fields_button!="") { ?>
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Downloads', 'builder69'  ) ); ?></h5>
								<?php foreach($mt_fields_button as $slide) { ?>
									<?php if ($slide['metabox_button_url'] != "") { ?>
										<div class="mt_project_detail"><a href="<?php esc_url($slide['metabox_button_url']); ?>"><?php if ($slide['metabox_button_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_button_icon']); ?>"></i><?php } ?> <?php  echo esc_html($slide['metabox_button_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 	
						</div>
						<div class="col-md-8">
							
							<h4 class="mt_small_title"><?php printf( esc_html__( 'Project Description', 'builder69'  ) ); ?></h4>
							<span class="mt_point"></span>
							<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php  the_content(); ?>
							<?php endwhile;  ?>
							
							<?php if($mt_client_says != ""){ ?>
								
								<h5 class="mt_small_title"><?php printf( esc_html__( 'Our Client Says', 'builder69'  ) ); ?></h5>
								<?php if($mt_client_says_photo != ""){ ?> 
									<div class="mt_client_photo"><img  src="<?php echo esc_url(bfi_thumb( $mt_client_says_photo, array('width' => 100, 'height' => 100) )); ?>" /></div>
									<div class="mt_client_says">
								<?php } ?>
									<p><?php echo esc_html($mt_client_says); ?></p>
									<?php if($mt_client_says_name != ""){ ?><strong><?php echo esc_html($mt_client_says_name); ?></strong><?php } ?>
								<?php if($mt_client_says_photo != ""){ ?> </div><div class="clear"></div><?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			
			<script type="text/javascript">
			
						jQuery(window).load(function() {
jQuery('.grid').masonry({
					  // options
					  itemSelector: '.grid-item',
					  columnWidth: function( containerWidth ) {
    return containerWidth / 3;
  }
					});				});
			</script>	

</div>	
<?php } else if($layout == "3") { ?>

	
	
			    
				
				<div class="mt_project_description">
					
					<div class="row">
						
						<div class="col-md-8">
							<div class="mt_project_row">
							<div class="flexslider fslider mt_flexslider_fix_3"> 
							    <ul class="slides">
								    <?php
										$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_gallery', true));
										if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
											    if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><img src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 734, 'height' => 415) )); ?>" /></li> <?php 
												}
									        }
									    }
									?>
								</ul>
							</div>
							<div class="mt_project_decription_3">
								
								<h4 class="mt_small_title"><?php printf( esc_html__( 'Project Description', 'builder69'  ) ); ?></h4>
								<span class="mt_point"></span>
								<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
									<?php  the_content(); ?>
								<?php endwhile;  ?>
								
								</div>
							</div>
						</div>
						
						<div class="col-md-4 mt_project_3_sidebar_padding">
							<div class="mt_project_3_padding_fix"></div>
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Project Details', 'builder69'  ) ); ?></h5>
							<span class="mt_point"></span>
							<?php if ($mt_metabox_client != "") { ?><div class="mt_project_detail"><i class="fa fa-user"></i> <?php printf( esc_html__( 'Client', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_client); ?></div><?php } ?>
							<?php if ($mt_metabox_date != "") { ?><div class="mt_project_detail"><i class="fa fa-calendar"></i> <?php printf( esc_html__( 'Date', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_date); ?></div><?php } ?>
							<?php if ($mt_metabox_location != "") { ?><div class="mt_project_detail"><i class="fa fa-map-marker"></i> <?php printf( esc_html__( 'Location', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_location); ?></div><?php } ?>
							<?php $terms = get_the_terms(get_the_ID(), 'portfolio_cat' ); if ($terms != "") { ?><div class="mt_project_detail"><i class="fa fa-folder-open-o"></i> <?php printf( esc_html__( 'Category', 'builder69'  ) ); ?>: <?php   if ($terms && ! is_wp_error($terms)) : $term_slugs_arr = array(); foreach ($terms as $term) { $term_slugs_arr[] = $term->slug; } $terms_slug_str = join( ", ", $term_slugs_arr); endif; echo esc_html($terms_slug_str); ?>
							</div><?php } ?>
							<?php if($mt_fields!="") { ?>
								<?php foreach($mt_fields as $slide) { ?>
									<?php if ($slide['metabox_url'] == "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <?php echo esc_html($slide['metabox_text']); ?></div>		
									<?php } else if ($slide['metabox_url'] != "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <a href="<?php esc_url($slide['metabox_url']); ?>"><?php echo esc_html($slide['metabox_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 		
							
							
							<?php if($mt_fields_button!="") { ?>
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Downloads', 'builder69'  ) ); ?></h5>
							
								<?php foreach($mt_fields_button as $slide) { ?>
									<?php if ($slide['metabox_button_url'] != "") { ?>
										<div class="mt_project_detail"><a href="<?php esc_url($slide['metabox_button_url']); ?>"><?php if ($slide['metabox_button_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_button_icon']); ?>"></i><?php } ?> <?php  echo esc_html($slide['metabox_button_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 	
							
							<?php if($mt_client_says != ""){ ?>
								
								<h5 class="mt_small_title"><?php printf( esc_html__( 'Our Client Says', 'builder69'  ) ); ?></h5>
								
								<?php if($mt_client_says_photo != ""){ ?> 
									<div class="mt_client_photo"><img  src="<?php echo esc_url(bfi_thumb( $mt_client_says_photo, array('width' => 100, 'height' => 100) )); ?>" /></div>
									<div class="mt_client_says">
								<?php } ?>
									<p><?php echo esc_html($mt_client_says); ?></p>
									<?php if($mt_client_says_name != ""){ ?><strong><?php echo esc_html($mt_client_says_name); ?></strong><?php } ?>
								<?php if($mt_client_says_photo != ""){ ?> </div><div class="clear"></div><?php } ?>
							<?php } ?>
							
						</div>
					</div>
				</div>
			
			<script type="text/javascript">
				jQuery(window).load(function() {
				  jQuery('.flexslider').flexslider({
				    animation: "slide",
				    controlsContainer: jQuery(".custom-controls-container"),
				    customDirectionNav: jQuery(".custom-navigation a")
				  });
				});
			</script>	

	
<?php } else if($layout == "2") { ?>
<div class="mt_project_row">
	
	
			    
				
				<div class="mt_project_description">
					<div class="row">
						<div class="col-md-4">
							<div class="mt_project_3_margin"></div>
							
							<h4 class="mt_small_title"><?php printf( esc_html__( 'Project Details', 'builder69'  ) ); ?></h4>
							<span class="mt_point"></span>
							<?php if ($mt_metabox_client != "") { ?><div class="mt_project_detail"><i class="fa fa-user"></i> <?php printf( esc_html__( 'Client', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_client); ?></div><?php } ?>
							<?php if ($mt_metabox_date != "") { ?><div class="mt_project_detail"><i class="fa fa-calendar"></i> <?php printf( esc_html__( 'Date', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_date); ?></div><?php } ?>
							<?php if ($mt_metabox_location != "") { ?><div class="mt_project_detail"><i class="fa fa-map-marker"></i> <?php printf( esc_html__( 'Location', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_location); ?></div><?php } ?>
							<?php $terms = get_the_terms(get_the_ID(), 'portfolio_cat' ); if ($terms != "") { ?><div class="mt_project_detail"><i class="fa fa-folder-open-o"></i> <?php printf( esc_html__( 'Category', 'builder69'  ) ); ?>: <?php   if ($terms && ! is_wp_error($terms)) : $term_slugs_arr = array(); foreach ($terms as $term) { $term_slugs_arr[] = $term->slug; } $terms_slug_str = join( ", ", $term_slugs_arr); endif; echo esc_html($terms_slug_str); ?>
							</div><?php } ?>
							<?php if($mt_fields!="") { ?>
								<?php foreach($mt_fields as $slide) { ?>
									<?php if ($slide['metabox_url'] == "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <?php echo esc_html($slide['metabox_text']); ?></div>		
									<?php } else if ($slide['metabox_url'] != "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <a href="<?php esc_url($slide['metabox_url']); ?>"><?php echo esc_html($slide['metabox_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 		
							
							
							<?php if($mt_fields_button!="") { ?>
							
							<h4 class="mt_small_title"><?php printf( esc_html__( 'Downloads', 'builder69'  ) ); ?></h4>
						
								<?php foreach($mt_fields_button as $slide) { ?>
									<?php if ($slide['metabox_button_url'] != "") { ?>
										<div class="mt_project_detail"><a href="<?php esc_url($slide['metabox_button_url']); ?>"><?php if ($slide['metabox_button_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_button_icon']); ?>"></i><?php } ?> <?php  echo esc_html($slide['metabox_button_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 	
							
							<?php if($mt_client_says != ""){ ?>
								
								<h4 class="mt_small_title"><?php printf( esc_html__( 'Our Client Says', 'builder69'  ) ); ?></h4>
							
								<?php if($mt_client_says_photo != ""){ ?> 
									<div class="mt_client_photo"><img  src="<?php echo esc_url(bfi_thumb( $mt_client_says_photo, array('width' => 100, 'height' => 100) )); ?>" /></div>
									<div class="mt_client_says">
								<?php } ?>
									<p><?php echo esc_html($mt_client_says); ?></p>
									<?php if($mt_client_says_name != ""){ ?><strong><?php echo esc_html($mt_client_says_name); ?></strong><?php } ?>
								<?php if($mt_client_says_photo != ""){ ?> </div><div class="clear"></div><?php } ?>
							<?php } ?>
							
						</div>
						<div class="col-md-8 ">
							<div class="flexslider fslider mt_flexslider_fix"> 
							    <ul class="slides">
									<?php
										$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_gallery', true));
										if ( ! empty( $images ) ) {
											foreach( $images as $id ) { 
											    if ( ! empty( $id ) ) {
													$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
													<li><img src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 734, 'height' => 415) )); ?>" /></li> <?php 
												}
									        }
									    }
									?>
								</ul>
							</div>
							
							<h4 class="mt_small_title"><?php printf( esc_html__( 'Project Description', 'builder69'  ) ); ?></h4>
							<span class="mt_point"></span>
							<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php  the_content(); ?>
							<?php endwhile;  ?>
							
							
						</div>
					</div>
				</div>
			
			<script type="text/javascript">
				jQuery(window).load(function() {
				  jQuery('.flexslider').flexslider({
				    animation: "slide",
				    controlsContainer: jQuery(".custom-controls-container"),
				    customDirectionNav: jQuery(".custom-navigation a")
				  });
				});
			</script>	

</div>	
<?php } else { ?>
<div class="mt_project_row">
	
	
			    <div class="grid">
				    
				    
				    <?php
						$images = explode( ',', get_post_meta(get_the_ID(),'mb_portfolio_gallery', true));
						if ( ! empty( $images ) ) {
							$first = true;
							foreach( $images as $id ) { 
							    if ( ! empty( $id ) ) {
								    if ( $first ) { 
										$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
										
										<div class="grid-item grid-item--width2 mt_grid_zoom"><a  href="<?php echo esc_url($full_img_src[0]); ?>" data-imagelightbox="a"><img class="img-zoom" src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 760, 'height' => 440) )); ?>" /></a></div>
									
									<?php  $first = false; } else {
										$full_img_src = wp_get_attachment_image_src( $id, 'full' ); ?>
										
										<div class="grid-item mt_grid_zoom"><a  href="<?php echo esc_url($full_img_src[0]); ?>" data-imagelightbox="a"><img class="img-zoom" src="<?php echo esc_url(bfi_thumb( $full_img_src[0], array('width' => 760, 'height' => 440) )); ?>" /></a></div><?php
									}
								}
					        }
					    }
					?>
				    
				<script>
					jQuery(function() {
					   jQuery('a').imageLightbox();
					});
				</script>
				</div>
				
				<div class="mt_project_description">
					<div class="row">
						<div class="col-md-4">
							
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Project Details', 'builder69'  ) ); ?></h5>
							<span class="mt_point"></span>
							<?php if ($mt_metabox_client != "") { ?><div class="mt_project_detail"><i class="fa fa-user"></i> <?php printf( esc_html__( 'Client', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_client); ?></div><?php } ?>
							<?php if ($mt_metabox_date != "") { ?><div class="mt_project_detail"><i class="fa fa-calendar"></i> <?php printf( esc_html__( 'Date', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_date); ?></div><?php } ?>
							<?php if ($mt_metabox_location != "") { ?><div class="mt_project_detail"><i class="fa fa-map-marker"></i> <?php printf( esc_html__( 'Location', 'builder69'  ) ); ?>: <?php echo esc_html($mt_metabox_location); ?></div><?php } ?>
							<?php $terms = get_the_terms(get_the_ID(), 'portfolio_cat' ); if ($terms != "") { ?><div class="mt_project_detail"><i class="fa fa-folder-open-o"></i> <?php printf( esc_html__( 'Category', 'builder69'  ) ); ?>: <?php   if ($terms && ! is_wp_error($terms)) : $term_slugs_arr = array(); foreach ($terms as $term) { $term_slugs_arr[] = $term->slug; } $terms_slug_str = join( ", ", $term_slugs_arr); endif; echo esc_html($terms_slug_str); ?>
							</div><?php } ?>
							<?php if($mt_fields!="") { ?>
								<?php foreach($mt_fields as $slide) { ?>
									<?php if ($slide['metabox_url'] == "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <?php echo esc_html($slide['metabox_text']); ?></div>		
									<?php } else if ($slide['metabox_url'] != "") { ?>
										<div class="mt_project_detail"><?php if ($slide['metabox_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_icon']); ?>"></i><?php } ?> <?php echo esc_html($slide['metabox_name']); ?>: <a href="<?php esc_url($slide['metabox_url']); ?>"><?php echo esc_html($slide['metabox_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 		
							
							
							<?php if($mt_fields_button!="") { ?>
							
							<h5 class="mt_small_title"><?php printf( esc_html__( 'Downloads', 'builder69'  ) ); ?></h5>
							
								<?php foreach($mt_fields_button as $slide) { ?>
									<?php if ($slide['metabox_button_url'] != "") { ?>
										<div class="mt_project_detail"><a href="<?php esc_url($slide['metabox_button_url']); ?>"><?php if ($slide['metabox_button_icon'] != "") { ?><i class="fa <?php echo esc_html($slide['metabox_button_icon']); ?>"></i><?php } ?> <?php  echo esc_html($slide['metabox_button_text']); ?></a></div>	
									<?php } ?>
								<?php } ?>
							<?php } ?> 	
						</div>
						<div class="col-md-8">
							
							<h4 class="mt_small_title"><?php printf( esc_html__( 'Project Description', 'builder69'  ) ); ?></h4>
							<span class="mt_point"></span>
							<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php  the_content(); ?>
							<?php endwhile;   ?>
							
							<?php if($mt_client_says != ""){ ?>
								
								<h5 class="mt_small_title"><?php printf( esc_html__( 'Our Client Says', 'builder69'  ) ); ?></h5>
								
								<?php if($mt_client_says_photo != ""){ ?> 
									<div class="mt_client_photo"><img  src="<?php echo esc_url(bfi_thumb( $mt_client_says_photo, array('width' => 100, 'height' => 100) )); ?>" /></div>
									<div class="mt_client_says">
								<?php } ?>
									<p><?php echo esc_html($mt_client_says); ?></p>
									<?php if($mt_client_says_name != ""){ ?><strong><?php echo esc_html($mt_client_says_name); ?></strong><?php } ?>
								<?php if($mt_client_says_photo != ""){ ?> </div><div class="clear"></div><?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			
			<script type="text/javascript">
			
						jQuery(window).load(function() {
jQuery('.grid').masonry({
					  // options
					  itemSelector: '.grid-item',
					  columnWidth: function( containerWidth ) {
    return containerWidth / 3;
  }
					});				});
			</script>	

</div>	
<?php } ?>
     
<?php get_footer(); ?>