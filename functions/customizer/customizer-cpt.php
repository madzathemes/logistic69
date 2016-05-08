<?php

function builder69_customize_cpt($wp_customize){
	//	==================================================
    //  =============================
    //  = ==== Rewrite CPT
    //  =============================

    $wp_customize->add_section('builder69_rewrite', array(
        'title'    => esc_html__('Rewrite CPT slug', 'builder69'),
        'priority' => 141,
        'description' => '<p class="customize-red">IMPORTANT: After you change slug, Go to Settings/Permalinks/Common Settings - set it Default and save. After this you can set previous slug structure. (Or You will get 404 error page for this posts)</p>',
    ));


	//  =============================
    //  = CPT doctor
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_rewrite_doctor]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_rewrite_doctor', array(
        'label'    	=> esc_html__('Rewrite Staff CPT slug', 'builder69'),
        'section'    => 'builder69_rewrite',
        'settings'   => 'builder69_theme_options[mt_rewrite_doctor]',
    ));

    //  =============================
    //  = CPT Services
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_rewrite_services]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_rewrite_services', array(
        'label'    	=> esc_html__('Rewrite Service CPT slug', 'builder69'),
        'section'    => 'builder69_rewrite',
        'settings'   => 'builder69_theme_options[mt_rewrite_services]',
    ));

	//  =============================
    //  = CPT Portfolio
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_rewrite_portfolio]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_rewrite_portfolio', array(
        'label'    	=> esc_html__('Rewrite Portfolio CPT slug', 'builder69'),
        'section'    => 'builder69_rewrite',
        'settings'   => 'builder69_theme_options[mt_rewrite_portfolio]',
    ));


	//  =============================
    //  = CPT Causes
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_rewrite_causes]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_rewrite_causes', array(
        'label'    	=> esc_html__('Rewrite Causes CPT slug', 'builder69'),
        'section'    => 'builder69_rewrite',
        'settings'   => 'builder69_theme_options[mt_rewrite_causes]',
    ));


}

add_action('customize_register', 'builder69_customize_cpt');

?>
