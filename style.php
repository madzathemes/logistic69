
<style type="text/css">
	
<?php $mt_options = get_option("builder69_theme_options"); ?>

<?php if(get_option("mt_color_mobile_bg")!=''){ ?> .mt-modal-menu { background: <?php echo esc_attr(get_option("mt_color_mobile_bg")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_text")!=''){ ?> .mt-mobile-area, .mt-mobile-area p { color: <?php echo esc_attr(get_option("mt_color_mobile_text")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_link")!=''){ ?> .mt-close-menu-icon, .mt-modal-menu ul a, .mt-modal-menu a { color: <?php echo esc_attr(get_option("mt_color_mobile_link")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_link_hover")!=''){ ?> body .mt-close-menu-icon, body .mt-modal-menu ul a:hover, body .mt-modal-menu a:hover { color: <?php echo esc_attr(get_option("mt_color_mobile_link_hover")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_title")!=''){ ?> .mt-modal-menu h2, .mt-modal-menu h3, .mt-modal-menu h4, .mt-modal-menu h5, .mt-modal-menu h6  { color: <?php echo esc_attr(get_option("mt_color_mobile_title")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_icon")!=''){ ?> .mt-modal-menu .mt-social li a { color: <?php echo esc_attr(get_option("mt_color_mobile_icon")); ?>!important; } <?php } ?>
<?php if(get_option("mt_color_mobile_icon_hover")!=''){ ?> .mt-modal-menu .mt-social li a:hover { color: <?php echo esc_attr(get_option("mt_color_mobile_icon_hover")); ?>!important; } <?php } ?>
<?php if(!empty($mt_options['mt_mobile_menu_bg_img'])){ ?> .mt-modal-menu { background-image:url('<?php echo esc_url($mt_options['mt_mobile_menu_bg_img']); ?>')!important; } <?php } ?>
<?php if(!empty($mt_options['mt_mobile_menu_bg_img_style'])){ ?> 
	<?php if($mt_options['mt_mobile_menu_bg_img_style']=="2"){ ?>.mt-modal-menu { background-size: cover!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_style']=="3"){ ?>.mt-modal-menu { background-repeat: repeat!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_style']=="4"){ ?>.mt-modal-menu { background-repeat: no-repeat!important; } <?php } ?>
<?php } ?>
<?php if(!empty($mt_options['mt_mobile_menu_bg_img_position'])){ ?> 
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="1"){ ?>.mt-modal-menu { background-position: center center!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="2"){ ?>.mt-modal-menu { background-position: center top!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="3"){ ?>.mt-modal-menu { background-position: center bottom!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="4"){ ?>.mt-modal-menu { background-position: center left!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="5"){ ?>.mt-modal-menu { background-position: left top!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="6"){ ?>.mt-modal-menu { background-position: left bottom!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="7"){ ?>.mt-modal-menu { background-position: center right!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="8"){ ?>.mt-modal-menu { background-position: right top!important; } <?php } ?>
	<?php if($mt_options['mt_mobile_menu_bg_img_position']=="9"){ ?>.mt-modal-menu { background-position: right bottom!important; } <?php } ?>
<?php } ?>
<?php if(get_option("mt_color_fixed_menu_bg")!=''){ ?> .mt-fixed-fix.mt-fixed.mt-down .mt-g-light .mt-mm, .mt-fixed-fix.mt-fixed.mt-down .mt-g-dark .mt-mm { background: <?php echo esc_attr(get_option("mt_color_fixed_menu_bg")); ?>!important; } <?php } ?>



<?php if(get_option("mt_footer_top_bg")!=''){ ?> .mt-footer-1{ background: <?php echo esc_attr(get_option("mt_footer_top_bg")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_top_heading")!=''){ ?> .footer_widget_midle h1, .footer_widget_midle h2, .footer_widget_midle h3, .footer_widget_midle h4, .footer_widget_midle h5, .footer_widget_midle h6, .footer_widget_midle div h1, .footer_widget_midle div h2, .footer_widget_midle div h3, .footer_widge_midlet div h4, .footer_widget_midle div h5, .footer_widget_midle div h6{ color: <?php echo esc_attr(get_option("mt_footer_top_heading")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_top_text")!=''){ ?> #footer p, #footer p, #footer div p, #footer div div p span, #footer, #footer div, #footer div div p{ color: <?php echo esc_attr(get_option("mt_footer_top_text")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_top_link")!=''){ ?> .footer_widget_midle a, .footer_widget_midle div a, .footer_widget_midle div div a, .footer_widget_midle a { color: <?php echo esc_attr(get_option("mt_footer_top_link")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_top_link_hover")!=''){ ?> .mt-footer-1 .footer_widget_midle a:hover, .mt-footer-1 .footer_widget_midle div a:hover, .mt-footer-1 .footer_widget_midle div div a:hover, .mt-footer-1 .footer_widget_midle a:hover { color: <?php echo esc_attr(get_option("mt_footer_top_link_hover")); ?>!important; } <?php } ?>

<?php if(!empty($mt_options['mt_footer_top_bg_img'])){ ?> .mt-footer-1 { background-image:url('<?php echo esc_url($mt_options['mt_footer_top_bg_img']); ?>')!important; } <?php } ?>
<?php if(!empty($mt_options['mt_footer_top_bg_img_style'])){ ?> 
	<?php if($mt_options['mt_footer_top_bg_img_style']=="2"){ ?>.mt-footer-1 { background-size: cover!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_style']=="3"){ ?>.mt-footer-1 { background-repeat: repeat!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_style']=="4"){ ?>.mt-footer-1 { background-repeat: no-repeat!important; } <?php } ?>
<?php } ?>
<?php if(!empty($mt_options['mt_footer_top_bg_img_position'])){ ?> 
	<?php if($mt_options['mt_footer_top_bg_img_position']=="1"){ ?>.mt-footer-1 { background-position: center center!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="2"){ ?>.mt-footer-1 { background-position: center top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="3"){ ?>.mt-footer-1 { background-position: center bottom!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="4"){ ?>.mt-footer-1 { background-position: center left!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="5"){ ?>.mt-footer-1 { background-position: left top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="6"){ ?>.mt-footer-1 { background-position: left bottom!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="7"){ ?>.mt-footer-1 { background-position: center right!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="8"){ ?>.mt-footer-1 { background-position: right top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_top_bg_img_position']=="9"){ ?>.mt-footer-1 { background-position: right bottom!important; } <?php } ?>
<?php } ?>

<?php if(get_option("mt_footer_bottom_bg")!=''){ ?> .mt-footer-2{ background: <?php echo esc_attr(get_option("mt_bottom_top_bg")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_bottom_text")!=''){ ?> .mt-footer-2  #sub-footer p, .mt-footer-2  #sub-footer{ color: <?php echo esc_attr(get_option("mt_footer_bottom_text")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_bottom_link")!=''){ ?> .mt-footer-2  #sub-footer a { color: <?php echo esc_attr(get_option("mt_footer_bottom_link")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_bottom_link_hover")!=''){ ?> .mt-footer-2  #sub-footer a:hover { color: <?php echo esc_attr(get_option("mt_footer_bottom_link_hover")); ?>!important; } <?php } ?>

<?php if(!empty($mt_options['mt_footer_bottom_bg_img'])){ ?> .mt-footer-2 { background-image:url('<?php echo esc_url($mt_options['mt_footer_bottom_bg_img']); ?>')!important; } <?php } ?>
<?php if(!empty($mt_options['mt_footer_bottom_bg_img_style'])){ ?> 
	<?php if($mt_options['mt_footer_bottom_bg_img_style']=="2"){ ?>.mt-footer-2 { background-size: cover!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_style']=="3"){ ?>.mt-footer-2 { background-repeat: repeat!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_style']=="4"){ ?>.mt-footer-2 { background-repeat: no-repeat!important; } <?php } ?>
<?php } ?>
<?php if(!empty($mt_options['mt_footer_bottom_bg_img_position'])){ ?> .mt_footer_parallax_on.layout_style_border #footer_wrap { border-bottom:50px solid silver; left: 50px!important; right: 50px!important }
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="1"){ ?>.mt-footer-2 { background-position: center center!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="2"){ ?>.mt-footer-2 { background-position: center top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="3"){ ?>.mt-footer-2 { background-position: center bottom!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="4"){ ?>.mt-footer-2 { background-position: center left!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="5"){ ?>.mt-footer-2 { background-position: left top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="6"){ ?>.mt-footer-2 { background-position: left bottom!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="7"){ ?>.mt-footer-2 { background-position: center right!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="8"){ ?>.mt-footer-2 { background-position: right top!important; } <?php } ?>
	<?php if($mt_options['mt_footer_bottom_bg_img_position']=="9"){ ?>.mt-footer-2 { background-position: right bottom!important; } <?php } ?>
<?php } ?>

<?php if(get_option("mt_footer_back_top_bg")!=''){ ?> .scrollToTop{ background: <?php echo esc_attr(get_option("mt_footer_back_top_bg")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_back_top_bg_hover")!=''){ ?> .scrollToTop:hover{ background: <?php echo esc_attr(get_option("mt_footer_back_top_bg_hover")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_back_top_link")!=''){ ?> .scrollToTop{ color: <?php echo esc_attr(get_option("mt_footer_back_top_link")); ?>!important; } <?php } ?>
<?php if(get_option("mt_footer_back_top_link_hover")!=''){ ?> .scrollToTop:hover{ color: <?php echo esc_attr(get_option("mt_footer_back_top_link_hover")); ?>!important; } <?php } ?>

<?php if(!empty($mt_options['mt_fixed_top'])){ ?> .mt-fixed-fix.mt-fixed.mt-down .mt-m-frame.mt-desctop .mt-mm { padding-top:<?php echo esc_attr($mt_options['mt_fixed_top']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_options['mt_fixed_bottom'])){ ?> .mt-fixed-fix.mt-fixed.mt-down .mt-m-frame.mt-desctop .mt-mm { padding-bottom:<?php echo esc_attr($mt_options['mt_fixed_bottom']); ?>px!important; } <?php } ?>


<?php 
$mt_content_off = get_post_meta(get_the_ID(), "mt_content_on", true);
	
if($mt_content_off=="no"){ echo " #mb-content { padding: 0px!important; } "; }	



$mt_homepage_bg_p = get_option("bg_default_color");


if ( get_post_meta(get_the_ID(), "mt_colors_page_2", true)!="") { 

				$mt_color_type = get_post_meta(get_the_ID(), "mt_colors_page_2", true); 

} else if (get_option("default_color")!='') { 

				$mt_color_type = get_option("default_color"); 
				
} else { $mt_color_type = "#FFAE00"; }

	
$mt_color_menu_hover = get_option("mt_menu_color_hover"); 	
$mt_color_menu_hover_dark = get_option("mt_menu_color_hover_dark"); 	
	
	
$bg_default_color_title_word = get_option("bg_default_color_title_word"); 
$bg_default_color_title_word_dark = get_option("bg_default_color_title_word_dark"); 
	
$mt_options = get_option("builder69_theme_options"); 
?>
<?php if(!empty($mt_options['mt_slider_mobile'])){ if($mt_options['mt_slider_mobile']=="1"){ ?>

@media only screen and (max-width: 1199px) { 
	
	#mt-slider-frame { display: none!important; }
}

<?php } } ?>
<?php if(!empty($mt_options['mt_loading_icon'])){  ?> .smallogo { background-image: url('<?php echo esc_url($mt_options['mt_loading_icon']); ?>')!important; } <?php } ?>

.mt-shortcode-separator.default, .mt_point { background: <?php  echo esc_attr($mt_color_type); ?>; width: <?php if(!empty($mt_options['mt_separator_width'])){ echo esc_attr($mt_options['mt_separator_width']);} ?>px!important; height: <?php if(!empty($mt_options['mt_separator_height'])){ echo esc_attr($mt_options['mt_separator_height']); } ?>px!important}


.mt-m-small:hover,
.mt-search-1 i:hover { color: <?php echo esc_attr($mt_color_menu_hover); ?>!important}

.mt-modal-menu ul a:hover{ color: <?php echo esc_attr($mt_color_type); ?>!important}

.mt_title_last_world, .entry-title a .mt_title_last_world, #header-title .mt-meta a:hover { color: <?php echo esc_attr($mt_color_type); ?>!important}

<?php if($bg_default_color_title_word != "") { ?> .mt_title_dark2  .mt_title_last_world, .entry-title a .mt_title_last_world, .mt_title_dark2 #header-title .mt-meta a:hover { color: <?php echo esc_attr($bg_default_color_title_word); ?>!important } <?php } ?>
<?php if($bg_default_color_title_word_dark != "") { ?>.mt_title_last_world, #header-title .mt-meta a:hover{ color: <?php echo esc_attr($bg_default_color_title_word_dark); ?>!important } <?php } ?>

blockquote,
.mt_coust_box:hover,
.mt_coust_result:hover,
.mt_cost_mesage:hover { border-color:<?php echo esc_attr($mt_color_type); ?>!important; }


<?php if(!empty($mt_options['mt_logo_h_f'])){  ?> .mt-fixed-fix.mt-fixed.mt-down .mt-m-frame.mt-desctop .mt-mm img {  height:  <?php echo esc_attr($mt_options['mt_logo_h_f']); ?>px!important; } <?php } ?>

.mt-h-5 .mt-m-frame.mt-desctop .mt-mm { border-bottom: 4px solid <?php echo esc_attr($mt_color_type); ?>!important; }

.menu_categories ul.menu li.current-menu-item a,
.menu_categories ul.menu li a:hover,
.menu_categories ul.menu li.current-menu-item li a:hover,
.mt_quote_style,
.menu_categories ul li a:hover { border-color: <?php echo esc_attr($mt_color_type); ?>!important; color: <?php echo esc_attr($mt_color_type); ?>!important;}

.mt_seperator_2 .mt-shortcode-separator.default,
.mt_seperator_3 .mt-shortcode-separator.default { border-color:<?php echo esc_attr($mt_color_type); ?>; }

<?php if(!empty($mt_options['mt_header_bg'])){ if($mt_options['mt_header_bg']!=""){ ?>

.mt-h-33 .mt-m-frame,
.mt-h-34 .mt-m-frame,
.mt-h-35 .mt-m-frame,
.mt-h-36 .mt-m-frame,
.mt-h-37 .mt-m-frame .mt-mm,
.mt-h-38 .mt-m-frame .mt-mm,
.mt-h-39 .mt-m-frame .mt-mm,
.mt-h-40 .mt-m-frame .mt-mm,
.mt-h-54 .mt-m-frame.mt-desctop .mt-mm,
.mt-h-63.mt-m-left .mt-m-frame.mt-desctop .mt-mm,
.mt-h-61.mt-m-left .mt-m-frame.mt-desctop .mt-mm, 
.mt-h-67.mt-m-left .mt-m-frame.mt-desctop .mt-mm,
.mt-h-64.mt-m-left .mt-m-frame.mt-desctop .mt-mm { 
	background: url("<?php echo esc_attr($mt_options['mt_header_bg']); ?>")!important;

-webkit-background-size: cover!important;
  -moz-background-size: cover!important;
  -o-background-size: cover!important;
  background-size: cover!important; 
}

<?php } }?>


.mt_footer_parallax_on.layout_style_border #footer_wrap,
.mt_header_parallax_on.layout_style_border .mt-header,
.layout_style_border .mt_wrap { border-color:<?php echo esc_attr($mt_homepage_bg_p); ?>; }


.mt-m-button a { background:<?php echo esc_attr($mt_color_menu_hover); ?>!important;  }
.mt-h-10 .mt-m-phone-left i,
.mt-h-10 .mt-m-mail-left i { color:<?php echo esc_attr($mt_color_type); ?>; }
.mt-h-9 .mt-mm,
.mt-h-15 .mt-mm,
.mt-h-19 .mt-mm,
.mt-h-54 .mt-mm,
.mt-h-55 .mt-mm { border-color:<?php echo esc_attr($mt_color_type); ?>; }

.mt-h-49 ul.sf-menu li.current-cat > a, 
.mt-h-49 div.sf-menu ul li.current-cat > a, 
.mt-h-49 ul.sf-menu li.current-menu-item > a, 
.mt-h-49 div.sf-menu ul li.current-menu-item > a, 
.mt-h-49 ul.sf-menu li.current_page_item > a, 
.mt-h-49 div.sf-menu ul li.current_page_item > a, 
.mt-h-49 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-49 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-49 ul.sf-menu li a:hover, 
.mt-h-49 div.sf-menu ul li a:hover,

.mt-h-39 ul.sf-menu li.current-cat > a, 
.mt-h-39 div.sf-menu ul li.current-cat > a, 
.mt-h-39 ul.sf-menu li.current-menu-item > a, 
.mt-h-39 div.sf-menu ul li.current-menu-item > a, 
.mt-h-39 ul.sf-menu li.current_page_item > a, 
.mt-h-39 div.sf-menu ul li.current_page_item > a, 
.mt-h-39 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-39 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-39 ul.sf-menu li a:hover, 
.mt-h-39 div.sf-menu ul li a:hover{
 
	color:<?php echo esc_attr($mt_color_menu_hover); ?>!important; 
}

.mt-h-52 ul.sf-menu li.current-cat > a, 
.mt-h-52 div.sf-menu ul li.current-cat > a, 
.mt-h-52 ul.sf-menu li.current-menu-item > a, 
.mt-h-52 div.sf-menu ul li.current-menu-item > a, 
.mt-h-52 ul.sf-menu li.current_page_item > a, 
.mt-h-52 div.sf-menu ul li.current_page_item > a, 
.mt-h-52 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-52 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-52 ul.sf-menu li a:hover, 
.mt-h-52 div.sf-menu ul li a:hover,
.mt-h-11 ul.sf-menu li.current-cat > a, 
.mt-h-11 div.sf-menu ul li.current-cat > a, 
.mt-h-11 ul.sf-menu li.current-menu-item > a, 
.mt-h-11 div.sf-menu ul li.current-menu-item > a, 
.mt-h-11 ul.sf-menu li.current_page_item > a, 
.mt-h-11 div.sf-menu ul li.current_page_item > a, 
.mt-h-11 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-11 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-11 ul.sf-menu li a:hover, 
.mt-h-11 div.sf-menu ul li a:hover,
.mt-h-12 ul.sf-menu li.current-cat > a, 
.mt-h-12 div.sf-menu ul li.current-cat > a, 
.mt-h-12 ul.sf-menu li.current-menu-item > a, 
.mt-h-12 div.sf-menu ul li.current-menu-item > a, 
.mt-h-12 ul.sf-menu li.current_page_item > a, 
.mt-h-12 div.sf-menu ul li.current_page_item > a, 
.mt-h-12 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-12 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-12 ul.sf-menu li a:hover, 
.mt-h-12 div.sf-menu ul li a:hover,
.mt-h-25 ul.sf-menu li.current-cat > a, 
.mt-h-25 div.sf-menu ul li.current-cat > a, 
.mt-h-25 ul.sf-menu li.current-menu-item > a, 
.mt-h-25 div.sf-menu ul li.current-menu-item > a, 
.mt-h-25 ul.sf-menu li.current_page_item > a, 
.mt-h-25 div.sf-menu ul li.current_page_item > a, 
.mt-h-25 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-25 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-25 ul.sf-menu li a:hover, 
.mt-h-25 div.sf-menu ul li a:hover,
.mt-h-2 ul.sf-menu li.current-cat > a, .mt-h-2 div.sf-menu ul li.current-cat > a, .mt-h-2 ul.sf-menu li.current-menu-item > a, .mt-h-2 div.sf-menu ul li.current-menu-item > a, .mt-h-2 ul.sf-menu li.current_page_item > a, .mt-h-2 div.sf-menu ul li.current_page_item > a, .mt-h-2 ul.sf-menu li.current-menu-ancestor > a, .mt-h-2 div.sf-menu ul li.current-menu-ancestor > a, .mt-h-2 ul.sf-menu li a:hover, .mt-h-2 div.sf-menu ul li a:hover{
 
	background:<?php echo esc_attr($mt_color_menu_hover); ?>; color:#fff!important;
}

.mt-h-13 ul.sf-menu li.current-cat > a, 
.mt-h-13 div.sf-menu ul li.current-cat > a, 
.mt-h-13 ul.sf-menu li.current-menu-item > a, 
.mt-h-13 div.sf-menu ul li.current-menu-item > a, 
.mt-h-13 ul.sf-menu li.current_page_item > a, 
.mt-h-13 div.sf-menu ul li.current_page_item > a, 
.mt-h-13 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-13 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-13 ul.sf-menu li a:hover, 
.mt-h-13 div.sf-menu ul li a:hover{
	border-color:<?php echo esc_attr($mt_color_menu_hover); ?>!important;
}

.mt-h-38 ul.sf-menu li.current-cat > a, 
.mt-h-38 div.sf-menu ul li.current-cat > a, 
.mt-h-38 ul.sf-menu li.current-menu-item > a, 
.mt-h-38 div.sf-menu ul li.current-menu-item > a, 
.mt-h-38 ul.sf-menu li.current_page_item > a, 
.mt-h-38 div.sf-menu ul li.current_page_item > a, 
.mt-h-38 ul.sf-menu li.current-menu-ancestor > a, 
.mt-h-38 div.sf-menu ul li.current-menu-ancestor > a, 
.mt-h-38 ul.sf-menu li a:hover, 
.mt-h-38 div.sf-menu ul li a:hover{
	border-color:<?php echo esc_attr($mt_color_menu_hover); ?>!important;
}

.mt-h-61 .mt-dark .mt-social li a:hover,
.mt-h-66 .mt-dark .mt-social li a:hover,
.mt-h-64 .mt-dark .mt-social li a:hover{
	color:<?php echo esc_attr($mt_color_type); ?>!important;
}

.mt-search-3:hover { color:<?php echo esc_attr($mt_color_type); ?>!important; }

.mt-search-post-frame:hover h4 { color:<?php echo esc_attr($mt_color_type); ?>!important; }
.mt-mobile-area ul li a:hover { color: <?php echo esc_attr($mt_color_type); ?>!important; }


.wpcf7-submit,
#mb-content .wpcf7-submit { background-color: <?php echo esc_attr($mt_color_type); ?>!important; } 

/* Woocommerce style */

.onsale { background-color: <?php echo esc_attr($mt_color_type); ?>!important; } 
span.current { color: <?php echo esc_attr($mt_color_type); ?>!important; } 

.mt-m-left-off .mt-g-light  ul.sf-menu li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu ul li li a:hover,
.mt-m-left-off .mt-g-light  ul.sf-menu .mega-menu-4 li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu .mega-menu-4 ul li li a:hover,
.mt-m-left-off .mt-g-dark  ul.sf-menu .mega-menu-4 li li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu .mega-menu-4 ul li li a:hover,
.mt-m-left-off  ul.sf-menu .mega-menu-4 li li a:hover,
.mt-m-left-off  div.sf-menu .mega-menu-4 ul li li a:hover,

.mt-m-left-off .mt-g-light  ul.sf-menu .mega-menu-2 li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu .mega-menu-2 ul li li a:hover,
.mt-m-left-off .mt-g-dark  ul.sf-menu .mega-menu-2 li li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu .mega-menu-2 ul li li a:hover,
.mt-m-left-off  ul.sf-menu .mega-menu-2 li li a:hover,
.mt-m-left-off  div.sf-menu .mega-menu-2 ul li li a:hover,

.mt-m-left-off .mt-g-light  ul.sf-menu .mega-menu-3 li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu .mega-menu-3 ul li li a:hover,
.mt-m-left-off .mt-g-dark  ul.sf-menu .mega-menu-3 li li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu .mega-menu-3 ul li li a:hover,
.mt-m-left-off  ul.sf-menu .mega-menu-3 li li a:hover,
.mt-m-left-off  div.sf-menu .mega-menu-3 ul li li a:hover,

.mt-m-left-off .mt-g-light  ul.sf-menu .mega-menu-5 li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu .mega-menu-5 ul li li a:hover,
.mt-m-left-off .mt-g-dark  ul.sf-menu .mega-menu-5 li li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu .mega-menu-5 ul li li a:hover,
.mt-m-left-off  ul.sf-menu .mega-menu-5 li li a:hover,
.mt-m-left-off  div.sf-menu .mega-menu-5 ul li li a:hover,

.mt-m-left-off .mt-g-light  ul.sf-menu .mega-menu-6 li li a:hover,
.mt-m-left-off .mt-g-light  div.sf-menu .mega-menu-6 ul li li a:hover,
.mt-m-left-off .mt-g-dark  ul.sf-menu .mega-menu-6 li li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu .mega-menu-6 ul li li a:hover,
.mt-m-left-off  ul.sf-menu .mega-menu-6 li li a:hover,
.mt-m-left-off  div.sf-menu .mega-menu-6 ul li li a:hover,

.mt-m-left-off .mt-g-dark  ul.sf-menu li a:hover,
.mt-m-left-off .mt-g-dark  div.sf-menu ul li a:hover { color:<?php echo esc_attr($mt_color_menu_hover); ?>!important; }

.mt-m-left-off .mt-g-light ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
.mt-m-left-off .mt-g-light ul.sf-menu li a:hover, div.sf-menu ul li a:hover,
.mt-m-left-off .mt-g-light ul.sf-menu li.current-cat > .mt_button_link_frame a, div.sf-menu ul li.current-cat > .mt_button_link_frame a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current-menu-item > .mt_button_link_frame a, div.sf-menu ul li.current-menu-item > .mt_button_link_frame a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current_page_item > .mt_button_link_frame a, div.sf-menu ul li.current_page_item > .mt_button_link_frame a,
.mt-m-left-off .mt-g-light ul.sf-menu li.current-menu-ancestor > .mt_button_link_frame a, div.sf-menu ul  li.current-menu-ancestor > .mt_button_link_frame a,
.mt-m-left-off .mt-g-light ul.sf-menu li .mt_button_link_frame a:hover, div.sf-menu ul li a:hover { color:<?php echo esc_attr($mt_color_menu_hover); ?>!important; }

.mt-m-left-off .mt-g-dark ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
.mt-m-left-off .mt-g-dark ul.sf-menu li a:hover, div.sf-menu ul li a:hover,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current-cat > .mt_button_link_frame a, div.sf-menu ul li.current-cat > .mt_button_link_frame a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current-menu-item > .mt_button_link_frame a, div.sf-menu ul li.current-menu-item > .mt_button_link_frame a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current_page_item > .mt_button_link_frame a, div.sf-menu ul li.current_page_item > .mt_button_link_frame a,
.mt-m-left-off .mt-g-dark ul.sf-menu li.current-menu-ancestor > .mt_button_link_frame a, div.sf-menu ul  li.current-menu-ancestor > .mt_button_link_frame a,
.mt-m-left-off .mt-g-dark ul.sf-menu li .mt_button_link_frame a:hover, div.sf-menu ul li a:hover { color:<?php echo esc_attr($mt_color_menu_hover_dark); ?>!important; }

.mt-m ul.sf-menu li li.current-cat > a, 
.mt-m div.sf-menu ul li li.current-cat > a, 
.mt-m ul.sf-menu li li.current-menu-item > a, 
.mt-m div.sf-menu ul li li.current-menu-item > a, 
.mt-m ul.sf-menu li li.current_page_item > a, 
.mt-m div.sf-menu ul li li.current_page_item > a, 
.mt-m ul.sf-menu li li.current-menu-ancestor > a, 
.mt-m div.sf-menu ul li li.current-menu-ancestor > a, 
.mt-m ul.sf-menu li li a:hover, 
.mt-m div.sf-menu ul li li a:hover,
.mt-m ul.sf-menu li li.current-cat > .mt_button_link_frame a, 
.mt-m div.sf-menu ul li li.current-cat > .mt_button_link_frame a, 
.mt-m ul.sf-menu li li.current-menu-item > .mt_button_link_frame a, 
.mt-m div.sf-menu ul li li.current-menu-item > .mt_button_link_frame a, 
.mt-m ul.sf-menu li li.current_page_item > .mt_button_link_frame a, 
.mt-m div.sf-menu ul li li.current_page_item > .mt_button_link_frame a, 
.mt-m ul.sf-menu li li.current-menu-ancestor > .mt_button_link_frame a, 
.mt-m div.sf-menu ul li li.current-menu-ancestor > .mt_button_link_frame a, 
.mt-m ul.sf-menu li li .mt_button_link_frame a:hover, 
.mt-m div.sf-menu ul li li .mt_button_link_frame a:hover{ color:<?php echo esc_attr($mt_color_menu_hover); ?>!important;}

/* other style */

.cl-effect-11 a,
.cl-effect-11 a::before { border-top-color: <?php echo esc_attr($mt_color_type); ?>!important;  }


.cl-effect-10 a::before,
.cl-effect-13 a:hover,
.cl-effect-13 a:focus,
.cl-effect-17 a::before,
.cl-effect-21 a:hover,
.cl-effect-21 a:focus { color: <?php echo esc_attr($mt_color_type); ?>!important;  }

.cl-effect-13 a:hover::before,
.cl-effect-13 a:focus::before {
	color: <?php echo esc_attr($mt_color_type); ?>!important; 
	text-shadow: 10px 0 <?php echo esc_attr($mt_color_type); ?> , -10px 0 <?php echo esc_attr($mt_color_type); ?>!important; 
}

.cl-effect-2 a:hover { color: white!important; }

.csstransforms3d .cl-effect-2 a span::before,
.cl-effect-6 a::before,
.cl-effect-6 a::after,
.cl-effect-7 a::before,
.cl-effect-7 a::after,
.cl-effect-9 a::before,
.cl-effect-9 a::after,
.cl-effect-14 a::before,
.cl-effect-14 a::after,
.cl-effect-17 a::after,
.cl-effect-18 a::before,
.cl-effect-18 a::after,
.cl-effect-19 a span,
.csstransforms3d .cl-effect-19 a span::before 
.cl-effect-19 a:hover span,
.cl-effect-19 a:focus span,
.csstransforms3d .cl-effect-19 a:hover span::before,
.csstransforms3d .cl-effect-19 a:focus span::before,
.cl-effect-21 a::before,
.cl-effect-21 a::after { background-color: <?php echo esc_attr($mt_color_type); ?>!important;  }


.mt_donation_button,
.mt_sc_post_in_2:hover {  background-color: <?php echo esc_attr($mt_color_type); ?>; }

	
#mb_home_button_home, #mb_home_button:hover,
ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
ul.sf-menu li a:hover, div.sf-menu ul li a:hover,
.single-post #nav ul li.blogbutton a,
.single-portfolio #nav ul li.portfoliobutton a,
.mt_style_header_2 .sf-menu ul li.current-cat > a, 
.mt_style_header_2 .sf-menu ul li.current_page_item > a, 
.mt_style_header_2 .sf-menu ul li.current-menu-item > a,
.mt_style_header_2 .sf-menu ul li a:hover,
.mt_style_header_2 .sf-menu ul li.current-menu-ancestor > a,
.mt_style_header_3 .sf-menu ul li.current-cat > a, 
.mt_style_header_3 .sf-menu ul li.current_page_item > a, 
.mt_style_header_3 .sf-menu ul li.current-menu-item > a,
.mt_style_header_3 .sf-menu ul li a:hover,
.mt_style_header_3 .sf-menu ul li.current-menu-ancestor > a{ 
	border-top-color: <?php echo esc_attr($mt_color_menu_hover); ?>;
	color: <?php echo esc_attr($mt_color_menu_hover); ?>!important;
}

.mt_style_header_2 .sf-menu li.current-cat > a, 
.mt_style_header_2 .sf-menu li.current_page_item > a, 
.mt_style_header_2 .sf-menu li.current-menu-item > a,
.mt_style_header_2 .sf-menu li a:hover,
.mt_style_header_2 .sf-menu li.current-menu-ancestor > a{ 
	color: <?php echo esc_attr($mt_color_menu_hover); ?>;
	
} 

.mt_style_header_3 .sf-menu li.current-cat > a, 
.mt_style_header_3 .sf-menu li.current_page_item > a, 
.mt_style_header_3 .sf-menu li.current-menu-item > a,
.mt_style_header_3 .sf-menu li a:hover,
.mt_style_header_3 .sf-menu li.current-menu-ancestor > a{ 
	background-color: <?php echo esc_attr($mt_color_menu_hover); ?>;
	color: white!important
} 

ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
ul.sf-menu li a:hover, div.sf-menu ul li a:hover { border-color: <?php echo esc_attr($mt_color_menu_hover); ?>!important;}

.mt-dark ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
.mt-dark ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
.mt-dark ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
.mt-dark ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
.mt-dark ul.sf-menu li a:hover, div.sf-menu ul li a:hover { border-color: <?php echo esc_attr($mt_color_menu_hover_dark); ?>!important;}

ul.sf-menu li.current-cat > a, div.sf-menu ul li.current-cat > a,
ul.sf-menu li.current-menu-item > a, div.sf-menu ul li.current-menu-item > a,
ul.sf-menu li.current_page_item > a, div.sf-menu ul li.current_page_item > a,
ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul  li.current-menu-ancestor > a,
ul.sf-menu li a:hover, div.sf-menu ul li a:hover {color: <?php echo esc_attr($mt_color_menu_hover); ?>!important;}


ul.sf-menu li.current-cat .mt_button_link_frame > a, 
div.sf-menu ul li.current-cat .mt_button_link_frame > a,
ul.sf-menu li.current-menu-item .mt_button_link_frame > a, 
div.sf-menu ul li.current-menu-item .mt_button_link_frame > a,
ul.sf-menu li.current_page_item .mt_button_link_frame > a, 
div.sf-menu ul li.current_page_item .mt_button_link_frame > a,
ul.sf-menu li.current-menu-ancestor .mt_button_link_frame > a, 
div.sf-menu ul  li.current-menu-ancestor .mt_button_link_frame > a,
ul.sf-menu li .mt_button_link_frame a:hover, div.sf-menu ul li .mt_button_link_frame a:hover {color: <?php echo esc_attr($mt_color_menu_hover); ?>!important;}

.mt-dark ul.sf-menu li.current-cat .mt_button_link_frame > a, 
.mt-dark div.sf-menu ul li.current-cat .mt_button_link_frame > a,
.mt-dark ul.sf-menu li.current-menu-item .mt_button_link_frame > a, 
.mt-dark div.sf-menu ul li.current-menu-item .mt_button_link_frame > a,
.mt-dark ul.sf-menu li.current_page_item .mt_button_link_frame > a, 
.mt-dark div.sf-menu ul li.current_page_item .mt_button_link_frame > a,
.mt-dark ul.sf-menu li.current-menu-ancestor .mt_button_link_frame > a, 
.mt-dark div.sf-menu ul  li.current-menu-ancestor .mt_button_link_frame > a,
.mt-dark ul.sf-menu li .mt_button_link_frame a:hover, div.sf-menu ul li .mt_button_link_frame a:hover {color: <?php echo esc_attr($mt_color_menu_hover_dark); ?>!important;}


a:hover,
input:hover,
#full-page-home div div ul li a:hover, 
.menu_categories ul li ul li a:hover, 
#full-page-home div div ul li ul li a:hover,
.meta-date-blog a:hover, 
.meta-category-blog a:hover, 
.meta-author-blog a:hover, 
.meta-tags-blog a:hover, 
.meta-comment-blog a:hover,
.line-breadcrumb-ultra p a:hover,
.line-title-ultra p a:hover,
.comment-author.vcard a:hover,
#title-right-single a div:hover,
.reply a:hover,
.logged-in-as a:hover,
#post-link-button a:hover,
.homepage-blog-post-meta a:hover,
.search-input:hover,
ul#filter a:hover,
.portfolio_link:hover,
.more-link-2 a:hover, 
.more-diva-2 a:hover,
.entry-title a:hover,
ul#filterm li.current a,
ul#filterm li a:hover,
.menu_categories .current-cat a,
.menu_categories ul li a:hover,
.footer_widget_midle ul li a:hover,
p.price .amount { color: <?php echo esc_attr($mt_color_type); ?>!important; }


ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
ul.sf-menu ul ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
ul.sf-menu ul ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
ul.sf-menu ul ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
ul.sf-menu ul ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover {
	border-bottom-color: <?php echo esc_attr($mt_color_type); ?>;
	color: <?php echo esc_attr($mt_color_menu_hover); ?>!important;
}

.post-format-image, .post-format-image-quote, .post-format-image-video, .post-format-image-image, .post-format-image-link, .post-format-image-gallery,
.ewd_form input[type="submit"]:hover,
#tribe-bar-form .tribe-bar-submit input[type=submit],
.tribe-events-read-more:hover,
.tribe-events-nav-left a:hover,
.tribe-events-list .tribe-events-event-cost span,
.tribe-events-cost,
.tribe-events-back a:hover,
.tribe-events-nav-previous a:hover,
.tribe-events-nav-next a:hover,
.tribe-events-widget-link a:hover,
table.tribe-events-calendar th,
#easy_widget_form .easy-submit .easybutton,
#easyFrontendFormular .easy-button,
#showCalender td.calendar-cell.calendar-cell-empty,
.single_add_to_cart_button:hover,
.add_to_cart_button:hover,
.woocommerce-message a:hover,
.button.wc-forward:hover { 
	background-color: <?php echo esc_attr($mt_color_type); ?>!important; color:white!important;
}

.wpb_button:hover,
#mb-content .form-submit #submit,
.progress-striped .bar,
.grid figcaption a.mt-cpt-link {  background-color: <?php echo esc_attr($mt_color_type); ?>!important; }

.wpb_button:hover,
.mt_donation_button,
.more-link.mt-donate-link span,
.ewd_form input[type="submit"]:hover,
.grid figcaption a.mt-cpt-link,
#tribe-bar-form .tribe-bar-submit input[type=submit],
.tribe-events-read-more:hover,
.tribe-events-nav-left a:hover,
.tribe-events-back a:hover,
.tribe-events-nav-previous a:hover,
.tribe-events-nav-next a:hover,
.tribe-events-widget-link a:hover,
#tribe-events-content table.tribe-events-calendar,
#tribe-events-content .tribe-events-calendar td,
#easy_widget_form .easy-submit .easybutton,
#easyFrontendFormular input.easy-button {  border-color: <?php echo esc_attr($mt_color_type); ?>!important; }

.mt-scroll-top i,
#footer .mt-scroll-top p,
.mt-icon-normal,
ul.sf-menu .mt-hightlight-button.current-menu-item a:hover,
.mt-cpt-social i:hover,
#sub-footer a:hover,
.mt-social li a:hover,
.woocommerce-info a,
#header-title .woocommerce-breadcrumb a:hover,
#header-title #breadcrumb-style a:hover { color: <?php echo esc_attr($mt_color_type); ?>!important; }


.port-file-3 .more-link span:hover,
.entry-meta .more-link:hover span,
#mb-content .form-submit #submit:hover,
.more-link.mt-donate-link span:hover,
.wpcf7-submit:hover,
#mb-content .wpcf7-submit:hover,
.grid figcaption a.mt-cpt-link:hover,
.glass-title a:hover,
.glass-arrows:hover, 
.glass-arrows-right:hover, 
.glass-arrows-pause:hover, 
.glass-arrows-play:hover,
.nav-previous a:hover,
.nav-next a:hover,
.mt-shortcode-icon-text.mt-icon-hover:hover i { 
	color: <?php echo esc_attr($mt_color_type); ?>!important; 
	border-color: <?php echo esc_attr($mt_color_type); ?>!important; 
}
.mt-shortcode-icon-text.mt-icon-hover:hover i { background: white!important; }

.mt-m-phone2-right span { color: <?php echo esc_attr($mt_color_type); ?>!important; }
<?php 





/* --------------------------------------------------------------------------------------- Footer Style */

if(ot_get_option("footer_partner_logo")!="" AND ot_get_option("footer_partner")=="1"){ ?> #footer-logos { background: url(<?php echo esc_url(ot_get_option("footer_partner_logo")); ?>) center no-repeat!important; } <?php }


/* --------------------------------------------------------------------------------------- Background Style */

$background_color = get_post_meta(get_the_ID(), "madza_style_background_color", true);
$background_color_custom = ot_get_option("color_background");



/* ---------------------------------------------------------------------------------------  Content Style */

$mt_content_bg = get_post_meta(get_the_ID(), "m_content_background", true);
if(isset($mt_content_bg['background-image']) != "")				{ echo "#mb-content { background-image:url('"; echo esc_attr($mt_content_bg['background-image']); echo "')!important;}";  } 		
if(isset($mt_content_bg['background-color']) != "")				{ echo "#mb-content { background-color:"; echo esc_attr($mt_content_bg['background-color']); echo "!important;}";  } 		
if(isset($mt_content_bg['background-repeat']) != "")			{ echo "#mb-content { background-repeat:"; echo esc_attr($mt_content_bg['background-repeat']); echo "!important;}";  } 				
if(isset($mt_content_bg['background-position']) != "")			{ echo "#mb-content { background-position:"; echo esc_attr($mt_content_bg['background-position']); echo "!important;}";  }  			
if(isset($mt_content_bg['background-attachment']) != "")		{ echo "#mb-content { background-attachment:"; echo esc_attr($mt_content_bg['background-attachment']); echo "!important;}";  }


/* ---------------------------------------------------------------------------------------  Background Style */

$mt_page_bg = get_post_meta(get_the_ID(), "m_page_background", true);

$mt_page_bg_image = "no";
if ( $mt_page_bg !="") {  if ( isset($mt_page_bg['background-image']) !="" ) { $mt_page_bg_image = "yes"; } }

$mt_page_bg_repeat = "no";
if ( $mt_page_bg !="") { if ( isset($mt_page_bg['background-repeat']) !="" ) { $mt_page_bg_repeat = "yes"; } }

$mt_page_bg_color = "no";
if ( $mt_page_bg !="") { if ( isset($mt_page_bg['background-color']) !="" ) { $mt_page_bg_color = "yes"; } }



	
	
	$mt_homepage_bg_p_image = get_option("builder69_theme_options");
	
	$mt_page_patterns = get_post_meta(get_the_ID(), "mt_page_page_color_bg_patterns", true);	
	
	if($mt_page_bg_image == "yes" and $mt_page_bg_repeat == "yes" or $mt_page_bg_color == "yes" or $mt_page_patterns!="" and $mt_page_patterns!="off" ) {
	
		
		if ( ! empty( $mt_page_bg )) {
			if(isset($mt_page_bg['background-image']) != ""){ 
				
				echo "body { background-image:url('"; echo esc_url($mt_page_bg['background-image']); echo "')!important;}";  
			
			} else if($mt_page_patterns!="off") {
					
				echo "body { background-image:url('"; echo get_template_directory_uri(); echo balanceTags($mt_page_patterns); echo "')!important; background-repeat:repeat; background-position:center top;}"; 
					
			}
			
		} else if($mt_page_patterns!="off") {
					
			echo "body { background-image:url('"; echo get_template_directory_uri(); echo balanceTags($mt_page_patterns); echo "')!important; background-repeat:repeat; background-position:center top;}"; 
					
		}
		
		if ( ! empty( $mt_page_bg )) {
		
			if(isset($mt_page_bg['background-repeat']) != "")			{ echo "body { background-repeat:"; echo esc_attr($mt_page_bg['background-repeat']); echo "!important;}";  } 				
			if(isset($mt_page_bg['background-position']) != "")		{ echo "body { background-position:"; echo esc_attr($mt_page_bg['background-position']); echo "!important;}";  }  			
			if(isset($mt_page_bg['background-attachment']) != "")		{ echo "body { background-attachment:"; echo esc_attr($mt_page_bg['background-attachment']); echo "!important;}";  }
			
		}		
	
	} else {
	
		if(isset($mt_homepage_bg_p_image['image_upload_test']))  {
			
				if(isset($mt_homepage_bg_p_image['background_repeat']) != "")		{ 
					if(isset($mt_homepage_bg_p_image['background_repeat']) == "full")		{ 
							echo "body { background-size:cover!important;}";
					} else {
							echo "body { background-repeat:"; echo esc_attr($mt_homepage_bg_p_image['background_repeat']); echo "!important;}";  } 		
					}		
				if(isset($mt_homepage_bg_p_image['background_position']) != "")		{ echo "body { background-position:"; echo esc_attr($mt_homepage_bg_p_image['background_position']); echo "!important;}";  }  			
				if(isset($mt_homepage_bg_p_image['image_upload_test']) != "")	{ echo "body { background-image:url('"; echo esc_attr($mt_homepage_bg_p_image['image_upload_test']); echo "')!important;}";  }  			  						
				if(isset($mt_homepage_bg_p_image['background_attachment']) != "")	{ echo "body { background-attachment:"; echo esc_attr($mt_homepage_bg_p_image['background_attachment']); echo "!important;}";  }	
				
		}
	}
	
	
	if ( $mt_page_bg !="") { 
	
		if(isset($mt_page_bg['background-color']) != "")	{ 
			
			echo "body { background-color:"; echo esc_attr($mt_page_bg['background-color']); echo "!important;}";  
			
		} 
		
	} else {
		
			if($mt_homepage_bg_p!="") { 
	
				echo "body { background-color:"; echo esc_attr($mt_homepage_bg_p); echo "!important;}"; 
				
			}
		
		}
		
	



$title_bg=get_post_meta(get_the_ID(), "m_title_backgrounds", true);

$mt_title_bg_image = "no";
if ( $title_bg !="") {  if ( !empty($title_bg['background-image'])) { $mt_title_bg_image = "yes"; } }

$mt_title_bg_color = "no";
if ( $title_bg !="") { if ( !empty($title_bg['background-color'])) { $mt_title_bg_color = "yes"; } }


$mt_title_patterns = get_post_meta(get_the_ID(), "mt_page_title_color_bg_patterns", true);
$mt_title_customize = get_option("builder69_theme_options");
$mt_title_customize_bg_color = get_option("bg_default_color_title");

if ($mt_title_customize !="" and is_search() or is_404()) {
	
	if(isset($mt_title_customize['image_upload_test_title'])!="")  {
		
			if(!empty($mt_title_customize_bg_color))		{ echo "#header-title { background-color:"; echo esc_attr($mt_title_customize_bg_color); echo "!important;}";  } 
			if(!empty($mt_title_customize['background_repeat_title']))		{ echo "#header-title { background-repeat:"; echo esc_attr($mt_title_customize['background_repeat_title']); echo "!important;}";  } 				
			if(!empty($mt_title_customize['background_position_title']))		{ echo "#header-title { background-position:"; echo esc_attr($mt_title_customize['background_position_title']); echo "!important;}";  }  			
			if(!empty($mt_title_customize['image_upload_test_title']))		{ echo "#header-title { background-image:url('"; echo esc_url($mt_title_customize['image_upload_test_title']); echo "')!important;}";  }  			  						
			if(!empty($mt_title_customize['background_attachment_title']))	{ echo "#header-title { background-attachment:"; echo esc_attr($mt_title_customize['background_attachment_title']); echo "!important;}";  }		
			if(!empty($mt_title_customize['background_repeat_title']))		{  if($mt_title_customize['background_repeat_title']=="cover") {echo "#header-title { background-size:cover!important;}";  }  	}
			
	} else { 
		
		echo balanceTags("#header-title { background-color:". $mt_title_customize_bg_color ."}");
		
	}
	
} else if($mt_title_bg_image == "yes" or $mt_title_bg_color == "yes" or $mt_title_patterns!="" and $mt_title_patterns!="off") {

	if( get_post_meta(get_the_ID(), "m_title_backgrounds", true) != "") { 
	
		if(!empty($title_bg['background-color']))			{ echo "#header-title { background-color:"; echo esc_attr($title_bg['background-color']); echo "!important;}";  }
		if(!empty($title_bg['background-image']))			{ echo "#header-title { background-image:url('"; echo esc_url($title_bg['background-image']); echo "')!important;}";  } 	
		if(!empty($title_bg['background-repeat']))		{ echo "#header-title { background-repeat:"; echo esc_attr($title_bg['background-repeat']); echo "!important;}";  } 				
		if(!empty($title_bg['background-position']))		{ echo "#header-title { background-position:"; echo esc_attr($title_bg['background-position']); echo "!important;}";  }  			
		if(!empty($title_bg['background-attachment']))	{ echo "#header-title { background-attachment:"; echo esc_attr($title_bg['background-attachment']); echo "!important;}";  }
		if(!empty($title_bg['background-size']))			{ echo "#header-title { background-size:"; echo esc_attr($title_bg['background-size']); echo "!important;}";  }
		
	} else if($mt_title_patterns!="off") {
					
		echo "#header-title  { background-image:url('"; echo get_template_directory_uri(); echo balanceTags($mt_title_patterns); echo "')!important; background-repeat:repeat; background-position:center top;}"; 
					
	}
	
} else if ($mt_title_customize !="") {
	
	if(isset($mt_title_customize['image_upload_test_title'])!="")  {
		
			if(!empty($mt_title_customize_bg_color))		{ echo "#header-title { background-color:"; echo esc_attr($mt_title_customize_bg_color); echo "!important;}";  } 
			if(!empty($mt_title_customize['background_repeat_title']))		{ echo "#header-title { background-repeat:"; echo esc_attr($mt_title_customize['background_repeat_title']); echo "!important;}";  } 				
			if(!empty($mt_title_customize['background_position_title']))		{ echo "#header-title { background-position:"; echo esc_attr($mt_title_customize['background_position_title']); echo "!important;}";  }  			
			if(!empty($mt_title_customize['image_upload_test_title']))		{ echo "#header-title { background-image:url('"; echo esc_url($mt_title_customize['image_upload_test_title']); echo "')!important;}";  }  			  						
			if(!empty($mt_title_customize['background_attachment_title']))	{ echo "#header-title { background-attachment:"; echo esc_attr($mt_title_customize['background_attachment_title']); echo "!important;}";  }		
			if(!empty($mt_title_customize['background_repeat_title']))		{  if($mt_title_customize['background_repeat_title']=="cover") {echo "#header-title { background-size:cover!important;}";  }  	}
			
	} else { 
		
		echo balanceTags("#header-title { background-color:". $mt_title_customize_bg_color ."}");
		
	}
}


/* --------------------------------------------------------------------------------------- Font Style */

$mt_fonts = get_option("builder69_theme_options");

	
	if(!empty($mt_fonts['font_css'])){
		echo ".nav li a strongs, #title-button, .nivo-caption-bg h1, .tp-simpleresponsive .caption, .mega_dropdown .post_title, .mt-top-video-link, .mt-blog-quote-text p, .mt_ptag, .mt_button_holder,
        h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a,#title-left h1, .entry-title p, .entry-title p, #tribe-bar-form label,.mt_mobile_header_select select {"; echo balanceTags($mt_fonts['font_css']); echo "}";  
	 } else { 
		echo ".nav li a strongs, #title-button, .nivo-caption-bg h1, .tp-simpleresponsive .caption, .mega_dropdown .post_title, .mt-blog-quote-text p, .mt_ptag, .mt-top-video-link, .mt_button_holder, 
        h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a, .entry-title p, #tribe-bar-form label,.mt_mobile_header_select select {font-family: 'Lato', sans-serif;}"; 
	 } 
	 
	 if(!empty($mt_fonts['font_css_menu'])){
		echo "ul.sf-menu a, div.sf-menu ul a, .mt-left-menu a, .mt-m-phone-right-2 {"; echo balanceTags($mt_fonts['font_css_menu']); echo "}";  
	 } else { 
		echo "ul.sf-menu a, div.sf-menu ul a, .mt-left-menu a, .mt-m-phone-right-2 {font-family: 'Lato', sans-serif;}"; 
	 } 
	 
	  if(!empty($mt_fonts['font_css_content'])){
		echo "body {"; echo balanceTags($mt_fonts['font_css_content']); echo "}";  
	 } else { 
		echo "body {font-family: 'Lato', sans-serif;}"; 
	 } 
	 
	 
?>

<?php if(!empty($mt_fonts['font_css_h6'])){ ?> h6 { <?php echo balanceTags($mt_fonts['font_css_h6']); ?>!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_css_h5'])){ ?> h5 { <?php echo balanceTags($mt_fonts['font_css_h5']); ?>!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_css_h4'])){ ?> h4 { <?php echo balanceTags($mt_fonts['font_css_h4']); ?>!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_css_h3'])){ ?> h3 { <?php echo balanceTags($mt_fonts['font_css_h3']); ?>!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_css_h2'])){ ?> h2 { <?php echo balanceTags($mt_fonts['font_css_h2']); ?>!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_css_h1'])){ ?> h1 { <?php echo balanceTags($mt_fonts['font_css_h1']); ?>!important; } <?php } ?>


<?php if(!empty($mt_fonts['font_h1_size'])){ ?> h1 { font-size:<?php echo esc_attr($mt_fonts['font_h1_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_h2_size'])){ ?> h2 { font-size:<?php echo esc_attr($mt_fonts['font_h2_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_h3_size'])){ ?> h3 { font-size:<?php echo esc_attr($mt_fonts['font_h3_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_h4_size'])){ ?> h4 { font-size:<?php echo esc_attr($mt_fonts['font_h4_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_h5_size'])){ ?> h5 { font-size:<?php echo esc_attr($mt_fonts['font_h5_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_h6_size'])){ ?> h6 { font-size:<?php echo esc_attr($mt_fonts['font_h6_size']); ?>px!important; } <?php } ?>
<?php if(!empty($mt_fonts['font_p_size'])){ ?> p { font-size:<?php echo esc_attr($mt_fonts['font_p_size']); ?>px!important; } <?php } ?>




/* BUTTONS */



.port-file-3 .more-link span:hover,
.entry-meta .more-link span:hover,
#mb-content .form-submit #submit:hover,
.more-link.mt-donate-link span:hover,
.wpcf7-submit:hover,
#mb-content .wpcf7-submit:hover,
.grid figcaption a.mt-cpt-link:hover,
.glass-title a:hover,
.glass-arrows:hover, 
.glass-arrows-right:hover, 
.glass-arrows-pause:hover, 
.glass-arrows-play:hover,
.nav-previous a:hover,
.nav-next a:hover,
.single_add_to_cart_button:hover,
.add_to_cart_button:hover,
.mt-shortcode-button:hover,
ul.sf-menu .mt-hightlight-button a:hover,
.woocommerce .button:hover,
.widget_shopping_cart_content .button:hover,
.woocommerce .button.checkout-button,
.added_to_cart:hover,
.menu_categories #searchform #searchsubmit,
.woocommerce .addresses a.edit:hover,
.mt-more-link:hover{  
	background-color: <?php echo esc_attr($mt_color_type); ?>!important;
	color: white!important; 
	border-color: <?php echo esc_attr($mt_color_type); ?>!important;
}

.port-file-3 .more-link span,
.entry-meta .more-link span,
#mb-content .form-submit #submit,
.more-link.mt-donate-link span,
.wpcf7-submit,
#mb-content .wpcf7-submit,
.grid figcaption a.mt-cpt-link,
.glass-title a,
.glass-arrows, 
.glass-arrows-right, 
.glass-arrows-pause, 
.glass-arrows-play,
.nav-previous a,
.nav-next a,
.single_add_to_cart_button,
.add_to_cart_button,
ul.sf-menu .mt-hightlight-button a,
.widget_shopping_cart_content .button,
.woocommerce .button,
.woocommerce .button.checkout-button:hover,
.added_to_cart,
.menu_categories #searchform #searchsubmit:hover,
.woocommerce .addresses a.edit,
.mt-more-link {  
	background-color:  inherit!important;
	color: <?php echo esc_attr($mt_color_type); ?>!important; 
	border-color: <?php echo esc_attr($mt_color_type); ?>!important;
}

.mt_logo_class{ padding-top:<?php if(!empty($mt_options['mt_logo_t'])) { echo esc_attr($mt_options['mt_logo_t']); } else { echo "20"; } ?>px; padding-bottom:<?php if(!empty($mt_options['mt_logo_b'])) { echo esc_attr($mt_options['mt_logo_b']); } else { echo "20"; } ?>px }

<?php echo balanceTags(ot_get_option('mt_custom_css')); ?>

</style>