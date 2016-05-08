<?php

function builder69_customize_fonts($wp_customize){
	//	==================================================
    //  =============================
    //  = ==== Fonts
    //  =============================

    $wp_customize->add_section('builder69_fonts', array(
        'title'    => esc_html__('Google Fonts', 'builder69'),
        'description' => 'Find best font for your project from Google font library. <a href="http://www.google.com/fonts" target="_blank">Go To Google Fonts</a> <br><br>',
        'priority' => 130,
    ));


	//  =============================
    //  = Google Font name
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('mt_google_font_name', array(
        'label'    	=> esc_html__('Google Font Name', 'builder69'),
        'description'    => esc_html__('Sample: Open+Sans:300,400,600,700', 'builder69'),
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name]',
    ));


    //  =============================
    //  = Google Font name
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('mt_google_font_css', array(
        'label'      => 'Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Open Sans', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css]',
    ));


	//  =============================
    //  = Google Font name menu
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_menu]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('mt_google_font_name_menu', array(
        'label'      => 'Menu Google Font',
        'description' => 'Sample: Open+Sans:300,400,600,700',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_menu]',
    ));


    //  =============================
    //  = Google Font name menu
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_menu]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('mt_google_font_css_menu', array(
        'label'      => 'Menu Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Open Sans', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_menu]',
    ));

    //  =============================
    //  = Google Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_content]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_content', array(
        'label'      => 'Conent Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_content]',
    ));


    //  =============================
    //  = Google Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_content]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_content', array(
        'label'      => 'Content Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_content]',
    ));


    //  =============================
    //  = H6 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_h6]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_h6', array(
        'label'      => 'H6 Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_h6]',
    ));


    //  =============================
    //  = H6 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_h6]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_h6', array(
        'label'      => 'H6 Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_h6]',
    ));

    //  =============================
    //  = H5 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_h5]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_h5', array(
        'label'      => 'H5 Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_h5]',
    ));


    //  =============================
    //  = H5 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_h5]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_h5', array(
        'label'      => 'H5 Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_h5]',
    ));



    //  =============================
    //  = H4 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_h4]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_h4', array(
        'label'      => 'H4 Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_h4]',
    ));


    //  =============================
    //  = H4 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_h4]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_h4', array(
        'label'      => 'H4 Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_h4]',
    ));

    //  =============================
    //  = H3 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_h3]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_h3', array(
        'label'      => 'H3 Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_h3]',
    ));


    //  =============================
    //  = H3 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_h3]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_h3', array(
        'label'      => 'H3 Google Font CSS',
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_h3]',
    ));

    //  =============================
    //  = H2 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_name_h2]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_name_h2', array(
        'label'      => 'H2 Google Font',
        'description' => 'Sample: Lato',
        'section'    => 'builder69_fonts',
        'settings'   => 'builder69_theme_options[font_name_h2]',
    ));


    //  =============================
    //  = H2 Font name content
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_css_h2]', array(
        'default'        => "",
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',

    ));

    $wp_customize->add_control('font_css_h2', array(
        'label'    	=> esc_html__('H2 Google Font CSS', 'builder69'),
        'section'    => 'builder69_fonts',
        'description' => "Sample: font-family: 'Lato', sans-serif;",
        'settings'   => 'builder69_theme_options[font_css_h2]',
    ));

     //	==================================================
    //  =============================
    //  = ==== Fonts  Size
    //  =============================

    $wp_customize->add_section('builder69_fonts_size', array(
        'title'    => esc_html__('Font Size', 'builder69'),
        'description' => '',
        'priority' => 131,
    ));



     //  =============================
    //  = H1
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h1_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h1_size', array(
        'label'    	=> esc_html__('H1 size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 72', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h1_size]',
    ));

     //  =============================
    //  = H2
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h2_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h2_size', array(
        'label'    	=> esc_html__('H2 size (px)', 'builder69'),
       'description'    => esc_html__('Sample: 56', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h2_size]',
    ));

     //  =============================
    //  = H3
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h3_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h3_size', array(
        'label'    	=> esc_html__('H3 size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 48', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h3_size]',
    ));

     //  =============================
    //  = H4
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h4_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h4_size', array(
        'label'    	=> esc_html__('H4 size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 31', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h4_size]',
    ));

     //  =============================
    //  = H5
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h5_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h5_size', array(
        'label'    	=> esc_html__('H5 size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 24', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h5_size]',
    ));

     //  =============================
    //  = H6
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_h6_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_h6_size', array(
        'label'    	=> esc_html__('H6 size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 18', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_h6_size]',
    ));


     //  =============================
    //  = p
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[font_p_size]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control('font_p_size', array(
        'label'    	=> esc_html__('p size (px)', 'builder69'),
        'description'    => esc_html__('Sample: 15', 'builder69'),
        'section'    => 'builder69_fonts_size',
        'settings'   => 'builder69_theme_options[font_p_size]',
    ));

}

add_action('customize_register', 'builder69_customize_fonts');

?>
