<?php

function builder69_sidebar_widget_init() {

$mt_columns = get_option("builder69_theme_options");

/* --------------------------------------------------------------------------------------- Mobile Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Mobile Widget Aera', 'builder69'),
		'id' => 'mobile-widget-area',
		'description' => esc_html__( 'The mobile menu widget area', 'builder69' ),
		'before_widget' => '<div class="mt-mobile-area">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="mt-mobile-title"><span>',
				'after_title' => '</span></h4>',
	) );

/* --------------------------------------------------------------------------------------- Page Widget Area 1 */

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'builder69'),
		'id' => 'sidebar-widget-area-1',
		'description' => esc_html__( 'The page sidebar widget area 1', 'builder69' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Blog Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Default Blog Sidebar', 'builder69'),
		'id' => 'sidebar-blog-widget-area',
		'description' => esc_html__( 'The blog sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );
	
/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Post Bottom Widget', 'builder69'),
		'id' => 'sidebar-single-bottom-widget-area',
		'description' => esc_html__( 'The post bottom widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );

/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) { 
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Sidebar', 'builder69'),
		'id' => 'sidebar-woocommerce-widget-area',
		'description' => esc_html__( 'WooCommerce sidebar area', 'builder69' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) { 
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Single Sidebar', 'builder69'),
		'id' => 'sidebar-woocommerce-single-widget-area',
		'description' => esc_html__( 'WooCommerce Single sidebar area', 'builder69' ),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Single Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Default Post Sidebar', 'builder69'),
		'id' => 'sidebar-single-widget-area',
		'description' => esc_html__( 'The single page sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Doctors Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Default Staff Post Sidebar', 'builder69'),
		'id' => 'sidebar-doctors-widget-area',
		'description' => esc_html__( 'The staff post page sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );

/* --------------------------------------------------------------------------------------- Doctors Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Default Services Post Sidebar', 'builder69'),
		'id' => 'sidebar-services-widget-area',
		'description' => esc_html__( 'The services post page sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );

/* --------------------------------------------------------------------------------------- Event Widget Area */

if(function_exists( 'tribe_is_event' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'Event Calendar Sidebar', 'builder69'),
		'id' => 'sidebar-event-widget-area',
		'description' => esc_html__( 'The event sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );
}	
		
/* --------------------------------------------------------------------------------------- Search Widget Area */


	register_sidebar( array(
		'name' => esc_html__( 'Search Page Sidebar', 'builder69'),
		'id' => 'sidebar-search-widget-area',
		'description' => esc_html__( 'The search page sidebar widget area' , 'builder69'),
		'before_widget' => '<div class="menu_categories">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
	) );

/* --------------------------------------------------------------------------------------- Footer Widget Areas */

        
            register_sidebar( array(
        		'name' => esc_html__( 'Footer Column 1', 'builder69'),
        		'id' => 'footer-midle-column-1',
        		'description' => esc_html__( 'Footer Column 1 Widget Area', 'builder69' ),
        		'before_widget' => '<div class="footer_widget_midle">',
        		'after_widget' => '</div><div class="clear"></div>',
        		'before_title' => '<h2 class="widget_h_3">',
        		'after_title' => '</h2>',
        	) );
       
 
        
            register_sidebar( array(
        		'name' => esc_html__( 'Footer Column 2', 'builder69'),
        		'id' => 'footer-midle-column-2',
        		'description' => esc_html__( 'Footer Column 2 Widget Area', 'builder69' ),
        		'before_widget' => '<div class="footer_widget_midle">',
        		'after_widget' => '</div><div class="clear"></div>',
        		'before_title' => '<h2 class="widget_h_3">',
        		'after_title' => '</h2>',
        	) );

  
            register_sidebar( array(
        		'name' => esc_html__( 'Footer Column 3' , 'builder69'),
        		'id' => 'footer-midle-column-3',
        		'description' => esc_html__( 'Footer Column 3 Widget Area' , 'builder69'),
        		'before_widget' => '<div class="footer_widget_midle">',
        		'after_widget' => '</div><div class="clear"></div>',
        		'before_title' => '<h2 class="widget_h_3">',
        		'after_title' => '</h2>',
        	) );
        
     
            register_sidebar( array(
        		'name' => esc_html__( 'Footer Column 4', 'builder69'),
        		'id' => 'footer-midle-column-4',
        		'description' => esc_html__( 'Footer Column 4 Widget Area' , 'builder69'),
        		'before_widget' => '<div class="footer_widget_midle">',
        		'after_widget' => '</div><div class="clear"></div>',
        		'before_title' => '<h2 class="widget_h_3">',
        		'after_title' => '</h2>',
        	) );
       
   

}

add_action( 'widgets_init', 'builder69_sidebar_widget_init' );
?>