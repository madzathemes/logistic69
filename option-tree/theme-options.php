<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
   $builder69_allowed_html_array = array('a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'Custom CSS'
      ),
      array(
        'id'          => 'blog',
        'title'       => 'Blog'
      ),
      array(
        'id'          => 'more',
        'title'       => 'More Options'
      ),
   
    ),
    
    'settings'        => array( 
	    
	 array(
        'id'          => 'mt_custom_css',
        'label'       => esc_html__('Custom Css Code', 'builder69' ),
        'desc'        => esc_html__('Paste your css code here. This will be added into the style of your theme.', 'builder69' ),
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
 

       
      array(
        'id'          => 'blog_content_type',
        'label'       => esc_html__('Excerpt or Full Content', 'builder69' ),
        'std'         => 'full_content',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'full_content',
            'label'       => 'Full Content',
            'src'         => ''
          ),
          array(
            'value'       => 'exscerpt',
            'label'       => 'Exscerpt',
            'src'         => ''
          )
        ),
      ),
      
       array(
        'id'          => 'blog_content_lenght',
        'label'       => esc_html__('Excerpt Lenght', 'builder69' ),
        'desc'        => '',
        'section'     => 'blog',
        'std'         => '350',
        'type'        => 'numeric_slider',
        'min_max_step'=> '10,1000,10',
          ),
          
        array(
        'id'          => 'blog_meta_on',
        'label'       => esc_html__('Blog Meta Description', 'builder69' ),
        'std'         => 'on',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'on',
            'label'       => 'On',
            'src'         => ''
          ),
          array(
            'value'       => 'off',
            'label'       => 'Off',
            'src'         => ''
          )
        ),
      ),
     
      array(
        'id'          => 'help',
        'label'       => esc_html__('Use Customizer for more theme options', 'builder69' ),
        'desc'        => wp_kses(__( '<h2>All theme Options</h2><p>Go to Appearance/Customize</p> <h2>Support Forum</h2><p>Go to <a href="https://madzathemes.ticksy.com/" target="_blank">madzathemes.ticksy.com</a></p>', 'builder69' ), $builder69_allowed_html_array ),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'more',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}