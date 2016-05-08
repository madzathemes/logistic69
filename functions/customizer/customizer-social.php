<?php

function builder69_customize_icon($wp_customize){
	//	==================================================
    //  =============================
    //  = ==== Social Icons
    //  =============================

    $wp_customize->add_section('builder69_icons', array(
        'title'    => esc_html__('Social Icons', 'builder69'),
        'priority' => 140,
    ));

	//  =============================
    //  = Open Icon in new page
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_icon_blank]', array(
        'capability' => 'edit_theme_options',
        'default'        => "off",
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_icon_blank', array(
        'settings' => 'builder69_theme_options[mt_icon_blank]',
        'label'    	=> esc_html__('Open in new page', 'builder69'),
        'section'  => 'builder69_icons',
       'type'    => 'select',
        'choices'    => array(
        	'on' => 'On',
            'off' => 'Off',
        ),
    ));

	//  =============================
    //  = Google Font name
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_icon_facebook]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_facebook', array(
        'label'    	=> esc_html__('Facebook icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_facebook]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_intagram]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_intagram', array(
       'label'    	=> esc_html__('Instagram icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_intagram]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_twitter]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_twitter', array(
        'label'    	=> esc_html__('Twitter icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_twitter]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_vimeo]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_vimeo', array(
        'label'    	=> esc_html__('Vimeo icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_vimeo]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_youtube]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_youtube', array(
       'label'    	=> esc_html__('Youtube icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_youtube]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_linkedin]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_linkedin', array(
        'label'    	=> esc_html__('LinkedIn icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_linkedin]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_gplus]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_gplus', array(
       'label'    	=> esc_html__('Google plus link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_gplus]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_dribble]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_dribble', array(
        'label'    	=> esc_html__('Dribble icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_dribble]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_skype]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_skype', array(
        'label'    	=> esc_html__('Skype icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_skype]',
    ));



    $wp_customize->add_setting('builder69_theme_options[mt_icon_pinterest]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_pinterest', array(
        'label'    	=> esc_html__('Pinterest icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_pinterest]',
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_icon_rss]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
    ));
	$wp_customize->add_control('mt_icon_rss', array(
        'label'    	=> esc_html__('Rss icon link', 'builder69'),
        'section'    => 'builder69_icons',
        'settings'   => 'builder69_theme_options[mt_icon_rss]',
    ));


}

add_action('customize_register', 'builder69_customize_icon');

?>
