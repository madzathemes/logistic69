<?php function builder69_header_titles() {
$title = esc_attr(get_post_meta(get_the_ID(), "m_title_on", true));
$breadcrumbs = get_post_meta(get_the_ID(), "m_title_bred", true);
$mt_options = get_option("builder69_theme_options");

function builder69_title_subtitle(){ if(get_post_meta(get_the_ID(), "mt_subtitle", true)!=""){ ?><div class="mt_title_seperator"></div><div class="mt-subtitle"><h4><?php echo esc_html(get_post_meta(get_the_ID(), "mt_subtitle", true));  ?></h4></div><?php } else { ?><div></div><?php }}	
	
function builder69_title_uptitle(){ if(get_post_meta(get_the_ID(), "mt_uptitle", true)!=""){ ?><h4 class="mt_title_10_span"><?php echo esc_html(get_post_meta(get_the_ID(), "mt_uptitle", true));  ?></h4><?php } else { ?><div></div><?php }}	

if ( $title=="on" or $title=="" or is_search() ) { ?>
<div id="header-title" class="mt-menu-light2 mt-header" <?php $mt_options = get_option("builder69_theme_options"); if(!empty($mt_options['mt_header_parallax'])){  if($mt_options['mt_header_parallax']=="mt_header_parallax_on") { ?> data-scroll-speed="<?php echo $mt_options['mt_header_parallax_speed']; ?>" <?php } } ?>> 	
	<div class="mt-shadow mt-height">
		<div class="container"> 
			<div class="mt-title wpb_animate_when_almost_visible wpb_top-to-bottom wpb_start_animation">
				
					<?php if (is_singular('our-staff')) {  ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
									<div class="mt_title_seperator"></div>
									<h6 class="mt_title_staff_type"><?php echo get_post_meta(get_the_ID(),'mt_doctor_education', true); ?></h6>
						
					   	               	
					<?php } else if (is_single() and !is_singular('portfolio')){ ?>
						
						<?php if(function_exists( 'is_woocommerce' )) { ?>
						
							 <?php if (is_woocommerce() and is_product_category()) { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php woocommerce_breadcrumb(); ?></div><?php } } ?>

								
								<?php } else if (is_woocommerce()) { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php woocommerce_breadcrumb(); ?></div><?php } } ?>

								
								<?php } else { ?>
										<?php builder69_title_uptitle(); ?>
										<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
										<?php builder69_title_subtitle(); ?>
										<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>									
										
								<?php } ?>
								
						<?php } else { ?> 
							<?php builder69_title_uptitle(); ?>
							<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
							<?php builder69_title_subtitle(); ?>
							<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
							
						<?php } ?>
					
					<?php } else if (is_search()){ ?> 
						<?php builder69_title_uptitle(); ?>
						<div class="mt_title_heading"><h1><?php printf( esc_html__( 'Search Results for: %s', 'builder69'  ), '' . get_search_query() . '' ); ?></h1></div>
						<?php builder69_title_subtitle(); ?>
						<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
					    
					<?php } else if (is_404()){ ?> 
						<?php builder69_title_uptitle(); ?>
					    <div class="mt_title_heading"><h1><?php printf( esc_html__( '404 page', 'builder69'  ) ); ?></h1></div>
						<?php builder69_title_subtitle(); ?>
						<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
					    
					<?php } else if (is_category()){ ?> 
						<?php builder69_title_uptitle(); ?>
						<div class="mt_title_heading"><h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1></div>
						<?php builder69_title_subtitle(); ?>
						<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
					                   
					<?php } else if (is_tag()){ ?> 
						<?php builder69_title_uptitle(); ?>	
						<div class="mt_title_heading"><h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1></div>
						<?php builder69_title_subtitle(); ?>
						<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
						
					                   
					<?php } else { ?> 
					
						<?php if(function_exists( 'tribe_is_event' )) { ?>
						
								<?php if (tribe_is_event() && !tribe_is_day() && !is_single()) { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php printf( esc_html__( 'Events', 'builder69'  ) ); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>

										
								<?php } else { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
										
								<?php } ?>
								
						<?php } else if(function_exists( 'is_woocommerce' )) { ?>
						
							<?php if (is_woocommerce() and is_product_category()) { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php woocommerce_breadcrumb(); ?></div><?php } } ?>

								
								<?php } else if (is_woocommerce()) { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php  if(is_shop()) {  printf( esc_html__( 'Shop', 'builder69'  ) ); } else {  the_title(); } ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php woocommerce_breadcrumb(); ?></div><?php } } ?>

								
								<?php } else { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
										
								<?php } ?> 
								
						<?php } else { ?>
									<?php builder69_title_uptitle(); ?>
									<div class="mt_title_heading"><h1><?php the_title(); ?></h1></div>
									<?php builder69_title_subtitle(); ?>
									<?php if(!empty($mt_options['mt_breadcrumb'])){ if ( $mt_options['mt_breadcrumb']=="1" AND $breadcrumbs == "on"){ ?><div class="mt_title_breadcrumbs"><?php  builder69_breadcrumbs(); ?></div><?php } } ?>
						
						<?php } ?>
					<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php } }?>