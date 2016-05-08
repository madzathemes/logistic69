<?php

function builder69_customize_other($wp_customize){
	
	//	==================================================
    //  =============================
    //  = ==== Seperator
    //  =============================

    $wp_customize->add_section('builder69_seperator', array(
        'title'    => esc_html__('Separator Style', 'builder69'),
        'priority' => 142,
        'description' => '',
    ));


	//  =============================
    //  = seperator width
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_separator_width]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_rewrite_doctor', array(
        'label'    	=> esc_html__('Width(px)', 'builder69'),
        'section'    => 'builder69_seperator',
        'settings'   => 'builder69_theme_options[mt_separator_width]',
    ));

    //  =============================
    //  = seperator height
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_separator_height]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_separator_height', array(
        'label'    => esc_html__('Height(px)', 'builder69'),
        'section'    => 'builder69_seperator',
        'settings'   => 'builder69_theme_options[mt_separator_height]',
    ));


	//  =============================
    //  = Seperator style  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_separator_style]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_separator_style', array(
        'settings' => 'builder69_theme_options[mt_separator_style]',
        'label'    => esc_html__('Seperator Style:', 'builder69'),
        'section' => 'builder69_seperator',
        'type'    => 'select',
        'choices'    => array(
       		'mt_seperator_1' => '1',
        	'mt_seperator_2' => '2',
            'mt_seperator_3' => '3'
        ),
    ));

    //	==================================================
    //  =============================
    //  = ==== Loading Options
    //  =============================

    $wp_customize->add_section('builder69_loading', array(
        'title'    	=> esc_html__('Loading', 'builder69'),
        'priority' => 221,
    ));


    //  =============================
    //  = Loading on/off	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_loading_icon_on]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_loading_icon_on', array(
        'settings' => 'builder69_theme_options[mt_loading_icon_on]',
        'label'    => esc_html__('Page Loading Animation', 'builder69'),
        'section' => 'builder69_loading',
        'type'    => 'select',
        'choices'    => array(
	        '1' => 'Select',
       		'2' => 'On',
        	'3' => 'Off',
        ),
    ));

	//  =============================
    //  = Loading icon             =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_loading_icon]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_loading_icon', array(
        'label'    => esc_html__('Loading Icon', 'builder69'),
        'section'  => 'builder69_loading',
        'settings' => 'builder69_theme_options[mt_loading_icon]',
    )));



}

add_action('customize_register', 'builder69_customize_other');

?>
