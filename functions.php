<?php
/*-----------------------------------------------------------------------------------*/
/* Option tree
/*-----------------------------------------------------------------------------------*/
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
 
require( get_template_directory() . '/option-tree/ot-loader.php' );
require( get_template_directory() . '/option-tree/theme-options.php' );

/*-----------------------------------------------------------------------------------*/
/* Function
/*-----------------------------------------------------------------------------------*/
require get_template_directory() .'/functions/class-widget.php'; 
require get_template_directory() .'/functions/functions-header.php'; 
require get_template_directory() .'/functions/functions-title.php'; 
require get_template_directory() .'/functions/functions-footer.php'; 
require get_template_directory() .'/functions/functions-demos.php'; 
require get_template_directory() .'/functions/functions-hooks.php'; 
require get_template_directory() .'/functions/functions-comment.php';
require get_template_directory() .'/functions/functions-plugins.php';
require get_template_directory() .'/functions/functions-general.php';
require get_template_directory() .'/functions/plugins/aq_resizer.php';
require get_template_directory() .'/functions/import/madza-import.php';
require get_template_directory() .'/functions/import/madza-export.php';

/*-----------------------------------------------------------------------------------*/
/* Customizer
/*-----------------------------------------------------------------------------------*/
require get_template_directory() .'/functions/customizer/customizer-cpt.php';
require get_template_directory() .'/functions/customizer/customizer-fonts.php';
require get_template_directory() .'/functions/customizer/customizer-footer.php';
require get_template_directory() .'/functions/customizer/customizer-header.php';
require get_template_directory() .'/functions/customizer/customizer-other.php';
require get_template_directory() .'/functions/customizer/customizer-social.php';

/*-----------------------------------------------------------------------------------*/
/* Madza Theme Setup
/*-----------------------------------------------------------------------------------*/
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

function builder69_theme_setup() {

	add_editor_style();
	add_theme_support( 'post-formats', array('image', 'video', 'link', 'quote', 'gallery', 'audio' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'woocommerce' );
	add_theme_support( "title-tag" );
	
	load_theme_textdomain( 'builder69', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	set_post_thumbnail_size( 999, 999, true );
	add_image_size( 'builder69_mtmedium', 550, 310, true );
	add_image_size( 'builder69_manzory_full', 360 );

	register_nav_menus( array(
		'primary' => esc_html__( 'Header Menu', 'builder69' ),
        'second' => esc_html__( 'Header Second Menu', 'builder69' ),
        'third' => esc_html__( 'Header Third Menu', 'builder69' ),
		'mobile' => esc_html__( 'Mobile Menu', 'builder69' ),
		'footer_menu' => esc_html__( 'Footer Navigation', 'builder69' ),
	) );
	if ( ! isset( $content_width ) ) { $content_width = 900; }
}

add_action( 'after_setup_theme', 'builder69_theme_setup' );

add_filter('widget_text', 'do_shortcode');

/*-----------------------------------------------------------------------------------*/
/* Default Options
/*-----------------------------------------------------------------------------------*/
function builder69_excerpt_length( $length ) {
	
	if(ot_get_option("blog_content_lenght")!="") { $lenghts = ot_get_option("blog_content_lenght"); } else { $lenghts = "100"; }
	return $lenghts;
	
}
add_filter( 'excerpt_length', 'builder69_excerpt_length' );


add_action( 'init', 'builder69_rocket_cdn_on_aqua_resizer_238' );
function builder69_rocket_cdn_on_aqua_resizer_238() {
	if( function_exists( 'aq_resize' ) ) {
		remove_filter( 'wp_get_attachment_url' , 'rocket_cdn_file', PHP_INT_MAX );
		add_filter( 'rocket_lazyload_html', 'builder69_rocket_cdn_on_data_lazy_src_attr_238' );
	}
}
function builder69_rocket_cdn_on_data_lazy_src_attr_238( $html ) {
	if( preg_match( '/data-lazy-src=[\'"]?([^\'"\s>]+)[\'"]/i', $html, $matches ) ) {
		$html = str_replace( $matches[1], get_rocket_cdn_url( $matches[1], array( 'all', 'images' ) ), $html );
	}
	return $html;
}

$builder69_allowed_html_array = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
    'br' => array(),
    'i' => array(
        'class' => array()
    ),
    'em' => array(),
    'strong' => array(),
    'div' => array(
        'class' => array()
    ),
    'span' => array(
        'class' => array()
    ),
);

/*-----------------------------------------------------------------------------------*/
/*	Sidebar functions
/*-----------------------------------------------------------------------------------*/
function builder69_sidebar_function() { 

    $loop = new WP_Query(array(
    	'post_type'=> 'mt_sidebar',
        'order' => 'ASC',
        'posts_per_page' => 999, 
        'orderby' => 'date', 
        'order' => 'DSC',
	 ));
		            
	 while ( $loop->have_posts() ) : $loop->the_post();
    
			register_sidebar(array(
			  'name' => get_the_title(),
			  'id' => 'sidebar-id-'.get_the_ID().'',
			  'description' => esc_html__( 'Widget area created from Sidebar custom post type.' , 'builder69'),
			  'before_widget' => '<div class="menu_categories">',
				'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h4 class="widget_h"><span>',
				'after_title' => '</span></h4>',
			));
			
	 endwhile; 
} 
add_action('builder69_sidebar_function', 'builder69_sidebar_function');

builder69_sidebar_function();

/*-----------------------------------------------------------------------------------*/
/*	Visual Composer
/*-----------------------------------------------------------------------------------*/
if(function_exists('vc_set_as_theme')) vc_set_as_theme(true);

// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
    function builder69_requireVcExtend(){
	    require get_template_directory() .'/functions/vc_functions.php';
    }
    add_action('init', 'builder69_requireVcExtend',2);
    
    $list = array(
	    'page',
	    'mt_section'
	);
	vc_set_default_editor_post_types( $list );
}
?>