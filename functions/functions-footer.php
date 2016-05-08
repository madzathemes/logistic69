<?php

/* --------------------------------------------------------------------------------------- Footer Section */

function builder69_footer_section_all(){ 
	
	$args = array( 'post_type' => 'mt_section', 'posts_per_page' => 5  );
				
	$query = new WP_Query( $args );
				
	while ( $query->have_posts() ) : $query->the_post();
					
		$in_all_page = get_post_meta(get_the_ID(), "mt_in_all_pages", true);
		
		$background = get_post_meta(get_the_ID(), "mt_section_background", true); 
			
			if (isset($background['background-color'])!="") { 
					$color = ' background-color:'.$background['background-color'].'!important;'; } else { $color = ""; 
						
			}
			if (isset($background['background-image'])!="") { 
				$image = " background-image:url('". esc_url($background['background-image']) ."')!important;"; } else { $image = ""; 
				
			}
			if (isset($background['background-repeat'])!="") { 
				$repeat = ' background-repeat:'.$background['background-repeat'].'!important;'; } else { $repeat = ""; 
				
			}
			if (isset($background['background-size'])!="") { 
				$size = ' background-size:'.$background['background-size'].'!important;'; } else { $size = ""; 
				
			}
			if (isset($background['background-position'])!="") { 
				$position = ' background-position:'.$background['background-position'].'!important;'; } else { $position = ""; 
				
			}
			if (isset($background['background-attachment'])!="") { 
				$attachment = ' background-attachment:'.$background['background-attachment'].'!important;'; } else { $attachment = ""; 
				
			}
		
		if($in_all_page=="yes") {
			
			$class = ""; if(get_post_meta(get_the_ID(), "mt_class", true)!="") { $class = get_post_meta(get_the_ID(), "mt_class", true); } 
			
			
			 
			?><div class="mt-boxed-version"  style="<?php echo esc_attr($color); echo esc_attr($image); echo esc_attr($repeat); echo esc_attr($position); echo esc_attr($attachment);  echo esc_attr($size);?>"><div class="container"><div class="row"><div class="col-md-12"><?php the_content(); ?></div></div></div></div><?php	
		}		
			 
	endwhile; 

}
add_action('builder69_footer_section_all', 'builder69_footer_section_all'); 

function builder69_footer_section_page(){ 
	$page_sections = "";
	
	$page_sections = get_post_meta(get_the_ID(), "mb_page_sections_in", true); 
	
	if($page_sections!="") { 
	
		foreach($page_sections as $page_section){
			
			if(!empty($page_section['section'])) {
				
				$args = array( 'post_type' => 'mt_section', 'p' => $page_section['section'] );
				
				$query = new WP_Query( $args );
				
				while ( $query->have_posts() ) : $query->the_post();
					 
					$class = ""; if(get_post_meta(get_the_ID(), "mt_class", true)!="") { $class = get_post_meta(get_the_ID(), "mt_class", true); } 
					
					$background = get_post_meta(get_the_ID(), "mt_section_background", true); 
						if (isset($background['background-color'])!="") { 
								$color = ' background-color:'.$background['background-color'].'!important;'; } else { $color = ""; 
									
						}
						if (isset($background['background-image'])!="") { 
							$image = ' background-image:url("'.esc_url($background['background-image']).'")!important;'; } else { $image = ""; 
							
						}
						if (isset($background['background-repeat'])!="") { 
							$repeat = ' background-repeat:'.$background['background-repeat'].'!important;'; } else { $repeat = ""; 
							
						}
						if (isset($background['background-size'])!="") { 
							$size = ' background-size:'.$background['background-size'].'!important;'; } else { $size = ""; 
							
						}
			
						if (isset($background['background-position'])!="") { 
							$position = ' background-position:'.$background['background-position'].'!important;'; } else { $position = ""; 
							
						}
						if (isset($background['background-attachment'])!="") { 
							$attachment = ' background-attachment:'.$background['background-attachment'].'!important;'; } else { $attachment = ""; 
							
						}
								 
					 ?><div class="mt-boxed-version" style="<?php echo esc_attr($color); echo esc_attr($image); echo esc_attr($repeat); echo esc_attr($position); echo esc_attr($attachment);  echo esc_attr($size);?>" ><div class="container"><div class="row"><div class="col-md-12"><?php the_content(); ?></div></div></div></div><?php
				
				endwhile; 
				
			}
			
		}
	
	} 

}
add_action('builder69_footer_section_page', 'builder69_footer_section_page'); 


/* --------------------------------------------------------------------------------------- Footer Widget Colummn Function */

function builder69_footer_widget_areas(){ 
 ?> <div class="container">
 	<div class="row"><?php
 	
 	$mt_columns = get_option("builder69_theme_options");
				
				if (!empty($mt_columns['footer_columns'])) {
				
				if ($mt_columns['footer_columns'] == '1_1') {  ?>
                    
						<div class="col-md-12">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                        
                        </div>
                    
                <?php 
                
                } 
                
                else if ($mt_columns['footer_columns'] == "1_2") { ?>
                
                        <div class="col-md-6">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                        
                        </div>
                        
                        <div class="col-md-6">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                    
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '1_3') { ?>
                    
                        <div class="col-md-4">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                        
                        </div>
                        
                        <div class="col-md-4">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                        
                        <div class="col-md-4">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                    
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '1_4') { ?>
                    
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                            
                        </div>
                        
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                        
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                        
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-4' ); ?>
                            
                        </div>
                        
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '1_5') { ?>
                    
                        <div class="one_fifth">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                            
                        </div>
                        
                        <div class="one_fifth">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                        
                        <div class="one_fifth">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                        
                        <div class="one_fifth">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-4' ); ?>
                            
                        </div>
                        
                        <div class="one_fifth last">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-5' ); ?>
                            
                        </div>
                        
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '1_6') { ?>
                
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-4' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-5' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-6' ); ?>
                            
                        </div>
                        
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '4_2') { ?>
                    
                        <div class="col-md-3">
                            
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                    
                        </div>
                        
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                                  
                        </div>
                        
                        <div class="col-md-6">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                    
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '2_6_6_6') { ?>
                    
                        <div class="col-md-6">
                        
                             <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>    
                        
                        </div>
                        
                        <div class="col-md-2">
                
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                    
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-4' ); ?>
                            
                        </div>
                   
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '2_4') { ?>
                    
                        <div class="col-md-6">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                        
                        </div>
                        
                        <div class="col-md-3">
                    
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                    
                        </div>
                        
                        <div class="col-md-3">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>
                       
                <?php 
                
                }
                
                else if ($mt_columns['footer_columns'] == '6_6_6_2') { ?>
                    
                        <div class="col-md-2">
                
                            <?php dynamic_sidebar( 'footer-midle-column-1' ); ?>
                    
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-2' ); ?>
                            
                        </div>
                        
                        <div class="col-md-2">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-3' ); ?>
                            
                        </div>        
                         
                        <div class="col-md-6">
                        
                            <?php dynamic_sidebar( 'footer-midle-column-4' ); ?>    
                            
                        </div>
                    
                <?php 
                
                }
               } 
                ?></div></div><?php

}

add_action('builder69_footer_widget_areas', 'builder69_footer_widget_areas'); 

?>