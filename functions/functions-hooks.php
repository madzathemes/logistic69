<?php 
function builder69_header_script() {
    
	if ( !is_admin() ) {
		 
		wp_enqueue_style('builder69_', get_stylesheet_uri()); 
		wp_enqueue_script('builder69_effects', get_template_directory_uri() . '/functions/js/effects.js', array('jquery'), '1.0', true);
		
		$mt_options = get_option("builder69_theme_options");
	
	
		if(!empty($mt_options['mt_menu_style'])){ 
		
		if($mt_options['mt_menu_style']==""){
			wp_enqueue_style('builder69_headers', get_template_directory_uri().'/css/headers/mt-h-1.css');	
		} else {
			wp_enqueue_style('builder69_headers', get_template_directory_uri().'/css/headers/mt-h-'. esc_attr($mt_options['mt_menu_style']) .'.css');	
		} 
		
		} else {
			wp_enqueue_style('builder69_headers', get_template_directory_uri().'/css/headers/mt-h-1.css');		
		} 
		
		if ( class_exists( 'WooCommerce' ) ) {
		 	wp_enqueue_style('builder69_woo', get_template_directory_uri().'/css/woocommerce.css');	
		}
		$mt_options = get_option("builder69_theme_options");
		 
		function builder69_fonts_url() {
		    $font_url = '';
		    
		    if(!empty($mt_options['font_name'])) { $theme_font = $mt_options['font_name'].'|'; } else { $theme_font = "Lato:400,300,700,100|"; } 
		
			if(!empty($mt_options['font_name_menu']))  { $theme_font_menu = $mt_options['font_name_menu'].'|'; } else { $theme_font_menu = ""; } 
			
			if(!empty($mt_options['font_name_content']))  { $theme_font_content = $mt_options['font_name_content'].'|'; } else { $theme_font_content = ""; } 
			
			if(!empty($mt_options['font_name_h6']))  { $theme_font_h6 = $mt_options['font_name_h6'].'|'; } else { $theme_font_h6 = ''; } 
			if(!empty($mt_options['font_name_h5']))  { $theme_font_h5 = $mt_options['font_name_h5'].'|'; } else { $theme_font_h5 = '';; } 
			if(!empty($mt_options['font_name_h4']))  { $theme_font_h4 = $mt_options['font_name_h4'].'|'; } else { $theme_font_h4 = '';; } 
			if(!empty($mt_options['font_name_h3']))  { $theme_font_h3 = $mt_options['font_name_h3'].'|'; } else { $theme_font_h3 = '';; } 
			if(!empty($mt_options['font_name_h2']))  { $theme_font_h2 = $mt_options['font_name_h2'].'|'; } else { $theme_font_h2 = '';; } 
			
			if($theme_font_menu == "" and $theme_font_content == "" and $theme_font_h6 == "" and $theme_font_h5 == "" and $theme_font_h4 == "" and $theme_font_h3 == "" and $theme_font_h2 == "") {
				if(!empty($mt_options['font_name'])) { $theme_font = $mt_options['font_name'].''; } else { $theme_font = "Lato:400,300,700,100"; } 
			}
		
		    /*
		    Translators: If there are characters in your language that are not supported
		    by chosen font(s), translate this to 'off'. Do not translate into your own language.
		     */
		    if ( 'off' !== _x( 'on', 'Google font: on or off', 'builder69' ) ) {
		        $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .''.esc_attr($theme_font_menu) .''.esc_attr($theme_font_content) .''. esc_attr($theme_font_h6) .''. esc_attr($theme_font_h5) .''. esc_attr($theme_font_h4) .''. esc_attr($theme_font_h3) .''. esc_attr($theme_font_h2).'' ), "//fonts.googleapis.com/css" );
		    }
		    return $font_url;
		}
		
		wp_enqueue_style( 'builder69-fonts', builder69_fonts_url(), array(), '1.0.0' );
		wp_enqueue_script('builder69_modernizer', get_template_directory_uri() . '/functions/js/modernizr.custom.js', array('jquery'), '1.0', true);		
			
	} else { 	
		
		wp_enqueue_style('builder69_admincss', get_template_directory_uri().'/css/admin.css');
		wp_enqueue_script('builder69_customadmin', get_template_directory_uri() . '/functions/js/jquery.customadmin.js', array('jquery'), '1.0'); 
		
	}

} 

add_action('wp_enqueue_scripts', 'builder69_header_script');

function builder69_mason_script() {
	if(is_page_template( 'template-blog-mansory.php' ) or is_singular('portfolio')) { 
    wp_enqueue_script( 'jquery-masonry' );
    }
}
add_action( 'wp_enqueue_scripts', 'builder69_mason_script' );


function builder69_header_hooks() {
		
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	
	if ( is_singular() ) { wp_enqueue_script( "comment-reply" ); }  
	
	?><script type="text/javascript">
	jQuery.noConflict();
	jQuery(window).load(function() {
		// Animate loader off screen
		jQuery(".se-pre-con").fadeOut("slow");;
	});
    
	jQuery(document).ready(function(){ 
		
	
		jQuery("ul.sf-menu, div.sf-menu ul").supersubs({ minWidth:5, maxWidth:50, extraWidth:2 }).superfish({ speed: 'fast' }); 
		
	<?php 
		
		if(is_page_template( 'template-blog-mansory.php' )) { 
			
	?>
		
	// init Masonry
	var $grid = jQuery('.mt-mansory-loop').masonry();

	
	$grid.imagesLoaded( function() {
	  // init Masonry
	  $grid.masonry({
	    // options...
	  });
	  // Masonry has been initialized, okay to call methods
	  $grid.append()
	    .masonry( '.mt-masonry-entry');
	});	
	
	<?php } ?>
			
	});
	
	</script>
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries a -->
		<!--[if lt IE 9]>
		  <?php wp_enqueue_script('builder69_html5shiv', get_template_directory_uri() . '/functions/js/html5shiv.js', array('jquery'), '1.0', true); ?>
		  <?php wp_enqueue_script('builder69_respondmin', get_template_directory_uri() . '/functions/js/respond.min.js', array('jquery'), '1.0', true); ?>
	<![endif]-->
	
	<?php
	get_template_part('style');  

}

add_action('wp_head', 'builder69_header_hooks');

add_filter('body_class','builder69_class');
function builder69_class($classes) {
	
	$mt_body_class = "";
	
	$mt_options = get_option("builder69_theme_options");
	$mt_options_1 = esc_attr(get_post_meta(get_the_ID(), "m_title_contrast", true));
	$title = esc_attr(get_post_meta(get_the_ID(), "m_title_on", true));
	$slider = get_post_meta(get_the_ID(), "mt_slider_shortcude", true);
	
	if(!empty($mt_options['mt_fixed_top']))				{ $mt_body_class .= 'mt_fixed_top ' ; } 						else {  $mt_body_class .= ''; }		
	if(!empty($mt_options['mt_separator_style']))		{ $mt_body_class .= $mt_options['mt_separator_style'].' '; }	else {  $mt_body_class .= 'mt_seperator_1 '; }	
	if(!empty($mt_options['mt_title_color']))			{ $mt_body_class .= $mt_options['mt_title_color'].' '; } 		else { $mt_body_class .= 'mt_title_dark '; }	
	
	if(!empty($mt_options['mt_footer_width'])){ 
		
		if($mt_options['mt_footer_width']=="mt_footer_full_on") { $mt_body_class .= 'mt_footer_full_on '.' '; }
		
	} else { 
		
		$mt_body_class .= 'mt_footer_full_off '; 
	
	}
	
	if(!empty($mt_options['mt_footer_parallax'])){ 
		
		if($mt_options['mt_footer_parallax']=="mt_footer_parallax_on") { $mt_body_class .= 'mt_footer_parallax_on '; }
		
	}
	
	if(!empty($mt_options['mt_header_parallax'])){ 
		
		if($mt_options['mt_header_parallax']=="mt_header_parallax_on") { $mt_body_class .= 'mt_header_parallax_on '; }
		
	}
	
	if(!empty($mt_options_1))							{ $mt_body_class .=  ''.$mt_options_1.' '; } 					else { $mt_body_class .= ''; }	
	
	if($title=="on" or $title=="") 						{ $mt_body_class .= 'mt_title_on '; } 							else { $mt_body_class .= 'mt_title_off '; } 
	if($slider!="") 									{ $mt_body_class .= 'mt_slider_on '; } 							else { $mt_body_class .= 'mt_slider_off '; } 
	
	
	if(!empty($mt_options['mt_menu_full'])){
		$mt_header_fulls = $mt_options['mt_menu_full'];
		 if($mt_header_fulls=="2") {
			$mt_body_class .= 'mt_header_full ';
		} else {
			$mt_body_class .= 'mt_header_box ';
		} 
	} else {
		$mt_body_class .= 'mt_header_box ';
	}
	
	if(!empty($mt_options['mt_menu_full'])){
		$mt_header_fulls = $mt_options['mt_menu_full'];
		if($mt_header_fulls=="2") {
			$mt_body_class .= 'mt_header_full ';
		} else {
			$mt_body_class .= 'mt_header_box ';
		} 
	} else {
		$mt_body_class .= 'mt_header_box ';
	}

	$mt_options2 = esc_attr(get_post_meta(get_the_ID(), "m_title_style", true));
	if(!empty($mt_options2)){
			
			if($mt_options2!="default" AND $mt_options2!=""){
			
				$mt_body_class .= $mt_options2.' '; 
	
			} else { 
				
					if(!empty($mt_options['mt_header_title_style'])){
			
							$mt_body_class .= $mt_options['mt_header_title_style'].' '; 
					
					} else { 
						
						$mt_body_class .= 'mt_title_style_1 '; 
					}
			}
	
	} else { 
		
		if(!empty($mt_options['mt_header_title_style'])){
			
			$mt_body_class .= $mt_options['mt_header_title_style'].' '; 
	
		} else { 
			
			$mt_body_class .= 'mt_title_style_1 '; 
		}
	} 
	
	
	if(get_post_meta(get_the_ID(), "mt_layout_styler_page", true)!="") {
			
		if(get_post_meta(get_the_ID(), "mt_layout_styler_page", true)=="box") {
			$mt_body_class .= 'layout_style_box ';
		} else if(get_post_meta(get_the_ID(), "mt_layout_styler_page", true)=="border") {
			$mt_body_class .= 'layout_style_border ';
		} else {
			$mt_body_class .= 'layout_style_full ';
		} 
			
	} else {
		
		if(!empty($mt_options['layout_style'])){ 
		
			if($mt_options['layout_style']=="box") {
				$mt_body_class .= 'layout_style_box ';
			} else  if($mt_options['layout_style']=="border") {
				$mt_body_class .= 'layout_style_border ';
			} else {
				$mt_body_class .= 'layout_style_full ';
			}
		} else {
			
			$mt_body_class .= 'layout_style_full ';
		}
	}
	
	
	if(get_post_meta(get_the_ID(), "mt_menu_fix", true)!="" and get_post_meta(get_the_ID(), "mt_menu_fix", true)!="style_default") {

		if(get_post_meta(get_the_ID(), "mt_menu_fix", true)=="yes") {
			$mt_body_class .= 'mt-fixed ';
		} else {
			$mt_body_class .= 'mt-fixed-no ';
		}  
		
	} else {
		
		if(!empty($mt_options['mt_menu_fix'])){
			if($mt_options['mt_menu_fix']=="1") {
				$mt_body_class .= 'mt-fixed ';
			}  else { 
				$mt_body_class .= 'mt-fixed-no '; 
			}
		} else {
			$mt_body_class .= 'mt-fixed-no '; 
		}
	}
		
	if(get_post_meta(get_the_ID(), "mt_paddings_on", true)=="no" and !is_search()) {
		$mt_body_class .= 'mt-padding-off ';
	} else {
		$mt_body_class .= 'mt-padding-on ';
	}  	
		
	$mt_body_class .= 'mt-m  mt-modal-menu-class ';
	
	if(!empty($mt_options['mt_menu_style'])){
		$extra_class = "";
		if($mt_options['mt_menu_style']=="1" 
		or $mt_options['mt_menu_style']=="2" 
		or $mt_options['mt_menu_style']=="3"
		or $mt_options['mt_menu_style']=="6"
		or $mt_options['mt_menu_style']=="9"
		or $mt_options['mt_menu_style']=="11"
		or $mt_options['mt_menu_style']=="20"
		or $mt_options['mt_menu_style']=="26"
		or $mt_options['mt_menu_style']=="27"
		or $mt_options['mt_menu_style']=="28"
		or $mt_options['mt_menu_style']=="31"
		or $mt_options['mt_menu_style']=="33"
		or $mt_options['mt_menu_style']=="34"
		or $mt_options['mt_menu_style']=="35"
		or $mt_options['mt_menu_style']=="36"
		or $mt_options['mt_menu_style']=="55"
		or $mt_options['mt_menu_style']=="56"
		or $mt_options['mt_menu_style']=="57"
		or $mt_options['mt_menu_style']=="58"
		or $mt_options['mt_menu_style']=="59") {
			$mt_body_class .= 'mt-m-height '; 
		}
		
		if($mt_options['mt_menu_style']=="1" 
		or $mt_options['mt_menu_style']=="2" 
		or $mt_options['mt_menu_style']=="3"
		or $mt_options['mt_menu_style']=="4"
		or $mt_options['mt_menu_style']=="5"
		or $mt_options['mt_menu_style']=="6"
		or $mt_options['mt_menu_style']=="9"
		or $mt_options['mt_menu_style']=="11"
		or $mt_options['mt_menu_style']=="20"
		or $mt_options['mt_menu_style']=="26"
		or $mt_options['mt_menu_style']=="27"
		or $mt_options['mt_menu_style']=="28"
		or $mt_options['mt_menu_style']=="29"
		or $mt_options['mt_menu_style']=="30"
		or $mt_options['mt_menu_style']=="31"
		or $mt_options['mt_menu_style']=="33"
		or $mt_options['mt_menu_style']=="34"
		or $mt_options['mt_menu_style']=="35"
		or $mt_options['mt_menu_style']=="36"
		or $mt_options['mt_menu_style']=="41"
		or $mt_options['mt_menu_style']=="42"
		or $mt_options['mt_menu_style']=="43"
		or $mt_options['mt_menu_style']=="44"
		or $mt_options['mt_menu_style']=="46"
		or $mt_options['mt_menu_style']=="47"
		or $mt_options['mt_menu_style']=="58"
		or $mt_options['mt_menu_style']=="59") {
			$mt_body_class .= "mt-fixed-fix ";
		}

		if($mt_options['mt_menu_style']=="60" 
		or $mt_options['mt_menu_style']=="61" 
		or $mt_options['mt_menu_style']=="62"
		or $mt_options['mt_menu_style']=="63"
		or $mt_options['mt_menu_style']=="64"
		or $mt_options['mt_menu_style']=="65"
		or $mt_options['mt_menu_style']=="66"
		or $mt_options['mt_menu_style']=="67") {
			$extra_class = "mt-m-left mt-modal-menu-off ";
		} else if($mt_options['mt_menu_style']=="68"
		or $mt_options['mt_menu_style']=="69") {
			$extra_class = "mt-m-left mt-modal-menu-off mt-m-left-cool mt-m-left-cool-off ";
		} else if($mt_options['mt_menu_style']=="41") {
			$extra_class = "mt-m-left-off ";
		} else if($mt_options['mt_menu_style']=="42") {
			$extra_class = "mt-m-left-off ";
		} else if($mt_options['mt_menu_style']=="43") {
			$extra_class = "mt-m-left-off ";
		} else if($mt_options['mt_menu_style']=="45") {
			$extra_class = "mt-m-left-off ";
		} else if($mt_options['mt_menu_style']=="46") {
			$extra_class = "mt-m-left-off ";
		} 
		
		if($mt_options['mt_menu_style']!="1") {
			$mt_body_class .= 'mt-h-'.$mt_options['mt_menu_style'].' '.$extra_class;
		}  else { 
			$mt_body_class .= 'mt-h-1 '; 
		}
 
	
	} else {
		$mt_body_class .= 'mt-h-1 ';
	}
	
	if(!empty($mt_options['mt_menu_hover'])) { 
		
		if($mt_options['mt_menu_hover']=="off") { 
			
			$mt_body_class .= 'mt-h-hover-off'; 
			
		} else {
			
			if(!empty($mt_options['mt_menu_style'])){
			$extra_class = "";
			if($mt_options['mt_menu_style']=="1" 
			or $mt_options['mt_menu_style']=="3"
			or $mt_options['mt_menu_style']=="4"
			or $mt_options['mt_menu_style']=="5"
			or $mt_options['mt_menu_style']=="6"
			or $mt_options['mt_menu_style']=="8"
			or $mt_options['mt_menu_style']=="9"
			or $mt_options['mt_menu_style']=="10"
			or $mt_options['mt_menu_style']=="14"
			or $mt_options['mt_menu_style']=="15"
			or $mt_options['mt_menu_style']=="19"
			or $mt_options['mt_menu_style']=="20"
			or $mt_options['mt_menu_style']=="21"
			or $mt_options['mt_menu_style']=="22"
			or $mt_options['mt_menu_style']=="23"
			or $mt_options['mt_menu_style']=="26"
			or $mt_options['mt_menu_style']=="31"
			or $mt_options['mt_menu_style']=="32"
			or $mt_options['mt_menu_style']=="33"
			or $mt_options['mt_menu_style']=="34"
			or $mt_options['mt_menu_style']=="35"
			or $mt_options['mt_menu_style']=="36"
			or $mt_options['mt_menu_style']=="37"
			or $mt_options['mt_menu_style']=="39"
			or $mt_options['mt_menu_style']=="40"
			or $mt_options['mt_menu_style']=="41"
			or $mt_options['mt_menu_style']=="42"
			or $mt_options['mt_menu_style']=="43"
			or $mt_options['mt_menu_style']=="44"
			or $mt_options['mt_menu_style']=="45"
			or $mt_options['mt_menu_style']=="46"
			or $mt_options['mt_menu_style']=="47"
			or $mt_options['mt_menu_style']=="48"
			or $mt_options['mt_menu_style']=="49"
			or $mt_options['mt_menu_style']=="55") {
				$mt_body_class .= "mt-h-hover";
			}
			
				$mt_body_class .= $extra_class.'';
		
			} else { 
				
				$mt_body_class .= 'mt-h-hover'; 
			}
			
		}
		
	} else { 
	
	
		if(!empty($mt_options['mt_menu_style'])){
			$extra_class = "";
			if($mt_options['mt_menu_style']=="1" 
			or $mt_options['mt_menu_style']=="3"
			or $mt_options['mt_menu_style']=="4"
			or $mt_options['mt_menu_style']=="5"
			or $mt_options['mt_menu_style']=="6"
			or $mt_options['mt_menu_style']=="8"
			or $mt_options['mt_menu_style']=="9"
			or $mt_options['mt_menu_style']=="10"
			or $mt_options['mt_menu_style']=="14"
			or $mt_options['mt_menu_style']=="15"
			or $mt_options['mt_menu_style']=="19"
			or $mt_options['mt_menu_style']=="20"
			or $mt_options['mt_menu_style']=="21"
			or $mt_options['mt_menu_style']=="22"
			or $mt_options['mt_menu_style']=="23"
			or $mt_options['mt_menu_style']=="26"
			or $mt_options['mt_menu_style']=="31"
			or $mt_options['mt_menu_style']=="32"
			or $mt_options['mt_menu_style']=="33"
			or $mt_options['mt_menu_style']=="34"
			or $mt_options['mt_menu_style']=="35"
			or $mt_options['mt_menu_style']=="36"
			or $mt_options['mt_menu_style']=="37"
			or $mt_options['mt_menu_style']=="39"
			or $mt_options['mt_menu_style']=="40"
			or $mt_options['mt_menu_style']=="41"
			or $mt_options['mt_menu_style']=="42"
			or $mt_options['mt_menu_style']=="43"
			or $mt_options['mt_menu_style']=="44"
			or $mt_options['mt_menu_style']=="45"
			or $mt_options['mt_menu_style']=="46"
			or $mt_options['mt_menu_style']=="47"
			or $mt_options['mt_menu_style']=="48"
			or $mt_options['mt_menu_style']=="49"
			or $mt_options['mt_menu_style']=="55") {
				$mt_body_class .= "mt-h-hover";
			}
			
				$mt_body_class .= $extra_class.'';
		
		} else { 
			
			$mt_body_class .= 'mt-h-hover';
		}
	}

	
	$classes[] =  $mt_body_class;
	return $classes;	
}



function builder69_post($title_style) {

	$madza_post[] = 'mt_article';
	return $madza_post;
	
}

add_filter('post_class','builder69_post');

function builder69_jquery_plugins_footer() {

    echo balanceTags(ot_get_option('mt_custom_html'));
	        
	?> <script type="text/javascript">
		'use strict';
		jQuery.noConflict();
	
		jQuery(document).ready(function(){ 
			
			var str = jQuery( "div.sf-menu ul li a,ul.sf-menu li a").clone().children().remove().end().text();
			jQuery( ".mt-h-hover ul.sf-menu li a, .mt-h-hover div.sf-menu ul li a" ).attr( "data-hover", function(){ var tex = jQuery(this).text(); return tex; });
			
			var linkss = jQuery( "ul.sf-menu li a, div.sf-menu ul li a" );
			jQuery( ".mt-h-hover ul.sf-menu li, .mt-h-hover div.sf-menu ul li " ).append(function(){ 
				var linkss = jQuery(this).html(); 
				return "<div class='mt_button_link_frame'>" + linkss + "</div>";
			})
				
		    jQuery( "ul.sf-menu li a, div.sf-menu ul li a" ).remove("ul.sf-menu li ul .mt_button_link_frame, div.sf-menu ul li ul .mt_button_link_frame");
			
			function heightfixed() {
				if ( jQuery(".mt-m").is( ".mt-h-4, .mt-h-5,.mt-h-29, .mt-h-30, .mt-h-41, .mt-h-42, .mt-h-43, .mt-h-44, .mt-h-45, .mt-h-46, .mt-h-47, .mt-h-49 ")) {
						
						
						jQuery(".mt-m").addClass("mt-m-height");
						var height = jQuery("#mt-slider-frame").outerHeight();
						jQuery(".mt-m-height .mt-content-frame").css({"margin-top": "0px" });
						jQuery(".mt_fixed_top.mt-m-height .mt-content-frame").css({"margin-top": ""+height+"px" });
						
						
					} else if (jQuery(".mt-m").is( ".mt-h-60, .mt-h-61,.mt-h-62, .mt-h-63, .mt-h-64, .mt-h-65, .mt-h-66, .mt-h-67, .mt-h-68, .mt-h-69")) {
						
						
						jQuery(".mt-m").removeClass("mt-m-height");
						jQuery(".mt_fixed_top .mt-content-frame").css({"margin-top": "0px" });
						
					} else {
						
						
						jQuery(".mt-m").addClass("mt-m-height");
						var height = jQuery(".mt-desctop").outerHeight();
						jQuery(".mt-m-height .mt-content-frame").css({"margin-top": "0px" });
						jQuery(".mt-fixed.mt-fixed-fix.mt-m-height .mt-content-frame").css({"margin-top": ""+height+"px" });
						jQuery(".mt_fixed_top.mt-m-height .mt-content-frame").css({"margin-top": ""+height+"px" });
						
					}
			}	
			jQuery('select#customize').change(function(){
				
				
				var theText = jQuery(this).val();
				jQuery("head link#builder69_headers-css").attr("href", '<?php echo get_template_directory_uri(); ?>/css/headers/'+theText+'.css');
				
				setTimeout(heightfixed, 500);
				
			
			});
			
	
		});
		
		
		</script>
		
	<?php
}
add_action('wp_footer', 'builder69_jquery_plugins_footer');
?>