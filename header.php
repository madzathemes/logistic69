<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 oldie no-js"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9 no-js"> <![endif]-->
<html <?php language_attributes(); ?>>
<head class="animated">    
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?> >
	
<?php builder69_loading(); ?>
<?php builder69_demos(); ?>

<div class="mt-modal-search">
	<i class="mt-close-icon ti-close"></i>
	<div class="container mt-search-top">
		<div class="row">
			<div class="col-md-12">
	
					<?php get_search_form(); ?>
			
			</div>
		</div>
	</div>
</div>

<div class="mt-modal-menu">
	<i class="mt-close-menu-icon ti-close"></i>
	<div>
		<?php wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mt-mobile-nav',  'echo' => true, 'depth' => 1)); ?>
		<?php if ( is_active_sidebar( 'mobile-widget-area' ) ) { dynamic_sidebar( 'mobile-widget-area' );  }  ?>
		<?php builder69_socials(); ?>
	</div>
</div>

<?php builder69_header_fixed(); ?>

<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

<div class="mt_wrap">
	
<?php builder69_header_multi(); ?>

<div class="mt-content-frame" id="mt-ajax">
<?php if(get_post_meta(get_the_ID(), "mt_slider_shortcude", true)!="" and !is_search()) { ?> 
		<div id="mt-slider-frame"><?php echo do_shortcode(get_post_meta(get_the_ID(), "mt_slider_shortcude", true)); ?></div> 
<?php } ?>
<?php builder69_header_titles(); ?>

<div id="mb-content"> <div  class="container<?php if(is_singular('mt_section')){ echo "-off"; } ?> mt-single-effect">