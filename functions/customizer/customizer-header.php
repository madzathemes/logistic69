<?php

function builder69_customize_header($wp_customize){
	$wp_customize->add_section('builder69_header', array(
        'title'    	=> esc_html__('Header', 'builder69'),
        'priority' => 124,
    ));

	
	//	==================================================
    //  =============================
    //  = ==== Logo Options
    //  =============================
      $wp_customize->add_panel( 'panel_header', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Header', 'builder69'),
    'description'    => '',
	) );


	 $wp_customize->add_panel( 'panel_footer', array(
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Footer', 'builder69'),
    'priority' => 131,
    'description' => '<p>1. Custom footer widgets from Apperance/Widgets. <br> <br>2. Add more footer sections from Page Sections/Add Page Section/Options/Show in all pages.</p> <br>',
	) );

    $wp_customize->add_section('builder69_logo', array(
        'title'    	=> esc_html__('Logo Image', 'builder69'),
        'priority' => 122,

    'panel'  => 'panel_header',
    ));
    
    $wp_customize->add_section('builder69_logo_settings', array(
        'title'    	=> esc_html__('Logo Settings', 'builder69'),
        'priority' => 123,

    'panel'  => 'panel_header',
    ));
    $wp_customize->add_section('builder69_menu_fixed', array(
        'title'    	=> esc_html__('Fixed Menu', 'builder69'),
        'priority' => 126,

    'panel'  => 'panel_header',
    ));
    
    $wp_customize->add_setting('builder69_theme_options[mt_fixed_top]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_fixed_top', array(
        'label'    	=> esc_html__('Top space (px)', 'builder69'),
        'description'    => esc_html__('Default: 25', 'builder69'),
        'section'    => 'builder69_menu_fixed',
        'settings'   => 'builder69_theme_options[mt_fixed_top]',
    ));
    
    $wp_customize->add_setting('builder69_theme_options[mt_fixed_bottom]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_fixed_bottom', array(
        'label'    	=> esc_html__('Bottom space (px)', 'builder69'),
        'description'    => esc_html__('Default: 25', 'builder69'),
        'section'    => 'builder69_menu_fixed',
        'settings'   => 'builder69_theme_options[mt_fixed_bottom]',
    ));



    //  =============================
    //  = Logo             =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_logo', array(
        'label'    => esc_html__('Upload Logo Dark', 'builder69'),
        'section'  => 'builder69_logo',
        'settings' => 'builder69_theme_options[mt_logo]',
    )));

    //  =============================
    //  = Logo Responsive            =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_r]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_logo_r', array(
        'label'    => esc_html__('Upload Responsive Logo Dark', 'builder69'),
        'section'  => 'builder69_logo',
        'settings' => 'builder69_theme_options[mt_logo_r]',
    )));


	//  =============================
    //  = Logo Black           =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_black]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_logo_black', array(
        'label'    => esc_html__('Upload Logo Light', 'builder69'),
        'section'  => 'builder69_logo',
        'settings' => 'builder69_theme_options[mt_logo_black]',
    )));

    //  =============================
    //  = Logo Responsive Black           =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_r_black]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
	));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_logo_r_black', array(
        'label'    => esc_html__('Upload Responsive Logo Light', 'builder69'),
        'section'  => 'builder69_logo',
        'settings' => 'builder69_theme_options[mt_logo_r_black]',
    )));


    //  =============================
    //  = Logo Widht
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_w]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_w', array(
        'label'    	=> esc_html__('Width (px)', 'builder69'),
        'section'    => 'builder69_logo_settings',
        'settings'   => 'builder69_theme_options[mt_logo_w]',
    ));

    //  =============================
    //  = Logo Height
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_h]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h', array(
        'label'    	=> esc_html__('Height (px)', 'builder69'),
        'section'    => 'builder69_logo_settings',
        'settings'   => 'builder69_theme_options[mt_logo_h]',
    ));

	//  =============================
    //  = Logo margin Top
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_t]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
		));

    $wp_customize->add_control('mt_logo_t', array(
        'label'    	=> esc_html__('Top space (px)', 'builder69'),
        'section'    => 'builder69_logo_settings',
        'settings'   => 'builder69_theme_options[mt_logo_t]',
    ));

    //  =============================
    //  = Logo margin Bottom
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_b]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_b', array(
        'label'    	=> esc_html__('Bottom space (px)', 'builder69'),
        'section'    => 'builder69_logo_settings',
        'settings'   => 'builder69_theme_options[mt_logo_b]',
    ));
        
    //  =============================
    //  = Logo Height fixed
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_logo_h_f]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h_f', array(
        'label'    	=> esc_html__('Logo height (px)', 'builder69'),
        'section'    => 'builder69_menu_fixed',
        'description'    => esc_html__('Default: 40', 'builder69'),
        'settings'   => 'builder69_theme_options[mt_logo_h_f]',
    ));

    //	==================================================
    //  =============================
    //  = ==== Header Options
    //  =============================


    $wp_customize->add_section('builder69_menu_information', array(
        'title'    	=> esc_html__('Menu Information', 'builder69'),
        'priority' => 125,
        'panel'  => 'panel_header',
    ));

     $wp_customize->add_section('builder69_menu_style', array(
        'title'    	=> esc_html__('Menu Style', 'builder69'),
        'priority' => 124,
        'panel'  => 'panel_header',
    ));

    $wp_customize->add_section('builder69_menu_mobile', array(
        'title'    	=> esc_html__('Mobile Menu', 'builder69'),
        'priority' => 126,
        'panel'  => 'panel_header',
    ));
    
      $wp_customize->add_section('builder69_header_parallax', array(
        'title'    	=> esc_html__('Parallax', 'builder69'),
        'priority' => 127,
        'panel'  => 'panel_header',
    ));
    
    //  =============================
    //  = Header Parallax 	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_header_parallax]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_header_parallax', array(
        'settings' => 'builder69_theme_options[mt_header_parallax]',
        'label'    	=> esc_html__('Header Parallax', 'builder69'),
        'section' => 'builder69_header_parallax',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'mt_header_parallax_off' => 'Off',
            'mt_header_parallax_on' => 'On',

        ),
    ));
    
     $wp_customize->add_setting('builder69_theme_options[mt_header_parallax_speed]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_header_parallax_speed', array(
        'settings' => 'builder69_theme_options[mt_header_parallax_speed]',
        'label'    	=> esc_html__('Parallax Speed', 'builder69'),
        'section' => 'builder69_header_parallax',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',

        ),
    ));
    
     //  =============================
    //  = Menu Style 	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_style', array(
        'settings' => 'builder69_theme_options[mt_menu_style]',
        'label'    	=> esc_html__('Menu Style', 'builder69'),
        'section' => 'builder69_menu_style',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Style 1',
            '2' => 'Style 2',
			'3' => 'Style 3',
			'4' => 'Style 4',
			'5' => 'Style 5',
			'6' => 'Style 6',
			'7' => 'Style 7',
			'8' => 'Style 8',
			'9' => 'Style 9',
			'10' => 'Style 10',
			'11' => 'Style 11',
            '12' => 'Style 12',
			'13' => 'Style 13',
			'14' => 'Style 14',
			'15' => 'Style 15',
			'16' => 'Style 16',
			'17' => 'Style 17',
			'18' => 'Style 18',
			'19' => 'Style 19',
			'20' => 'Style 20',
			'21' => 'Style 21',
            '22' => 'Style 22',
			'23' => 'Style 23',
			'24' => 'Style 24',
			'25' => 'Style 25',
			'26' => 'Style 26',
			'27' => 'Style 27',
			'28' => 'Style 28',
			'29' => 'Style 29',
			'30' => 'Style 30',
			'31' => 'Style 31',
            '32' => 'Style 32',
			'33' => 'Style 33',
			'34' => 'Style 34',
			'35' => 'Style 35',
			'36' => 'Style 36',
			'37' => 'Style 37',
			'38' => 'Style 38',
			'39' => 'Style 39',
			'40' => 'Style 40',
			'41' => 'Style 41',
            '42' => 'Style 42',
			'43' => 'Style 43',
			'44' => 'Style 44',
			'45' => 'Style 45',
			'46' => 'Style 46',
			'47' => 'Style 47',
			'48' => 'Style 38',
			'49' => 'Style 49',
			'50' => 'Style 50',
			'51' => 'Style 51',
            '52' => 'Style 52',
			'53' => 'Style 53',
			'54' => 'Style 54',
			'55' => 'Style 55',
			'56' => 'Style 56',
			'57' => 'Style 57',
			'58' => 'Style 58',
			'59' => 'Style 59',
			'60' => 'Style 60',
			'61' => 'Style 61',
            '62' => 'Style 62',
			'63' => 'Style 63',
			'64' => 'Style 64',
			'65' => 'Style 65',
			'66' => 'Style 66',
			'67' => 'Style 67',
			'68' => 'Style 68',
			'69' => 'Style 69',

        ),
    ));

    //  =============================
    //  = Menu hover on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_hover]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_hover', array(
        'settings' => 'builder69_theme_options[mt_menu_hover]',
        'label'    	=> esc_html__('Menu Hover Effect (flipping)', 'builder69'),
        'section' => 'builder69_menu_style',
        'type'    => 'select',
		'priority'   => 2,
        'choices'    => array(

            'on' => 'On',
        	'off' => 'Off'

        ),
    ));

    //  =============================
    //  = Menu FUll on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_full]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_full', array(
        'settings' => 'builder69_theme_options[mt_menu_full]',
        'label'    	=> esc_html__('Header Full Width', 'builder69'),
        'section' => 'builder69_menu_style',
        'type'    => 'select',
		'priority'   => 2,
        'choices'    => array(
        	'1' => 'Off',
            '2' => 'On'

        ),
    ));

    //  =============================
    //  = Menu fixed
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_menu_fix]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_menu_fix', array(
        'settings' => 'builder69_theme_options[mt_menu_fix]',
        'label'    	=> esc_html__('On/Off', 'builder69'),
        'priority'   => 2,
        'section'  => 'builder69_menu_fixed',
        'type'     => 'checkbox',
    ));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_header_bg]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_header_bg', array(
        'label'    => esc_html__('Menu Background Image', 'builder69'),
        'section'  => 'builder69_menu_style',
        'priority'   => 99,
        'description'    => esc_html__('Background image only for menu style 33, 34, 35, 36, 37, 38, 39, 40, 54, 61, 63, 64, 67', 'builder69'),
        'settings' => 'builder69_theme_options[mt_header_bg]',
    )));


	//  =============================
    //  = Phone
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_header_phone]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('mt_header_phone', array(
        'label'    	=> esc_html__('Phone', 'builder69'),
        'section'    => 'builder69_menu_information',
        'settings'   => 'builder69_theme_options[mt_header_phone]',
    ));

    //  =============================
    //  = E-mail
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_header_email]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('mt_header_email', array(
        'label'    	=> esc_html__('E-mail', 'builder69'),
        'section'    => 'builder69_menu_information',
        'settings'   => 'builder69_theme_options[mt_header_email]',
    ));

    //  =============================
    //  = Header text
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_header_text]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',


    ));

    $wp_customize->add_control('mt_header_text', array(
        'label'    	=> esc_html__('Header text', 'builder69'),
        'section'    => 'builder69_menu_information',
        'settings'   => 'builder69_theme_options[mt_header_text]',
    ));


     //  =============================
    //  = Button on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_button]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_button', array(
        'settings' => 'builder69_theme_options[mt_menu_button]',
        'label'    	=> esc_html__('Button', 'builder69'),
        'section' => 'builder69_menu_information',
        'type'    => 'select',
		'priority'   => 10,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));

    $wp_customize->add_setting('builder69_theme_options[mt_menu_button_name]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_menu_button_name', array(
        'label'    	=> esc_html__('Button Name', 'builder69'),
        'description' => '',
        'priority'   => 11,
        'section'    => 'builder69_menu_information',
        'settings'   => 'builder69_theme_options[mt_menu_button_name]',
    ));
    $wp_customize->add_setting('builder69_theme_options[mt_menu_button_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
	$wp_customize->add_control('mt_menu_button_link', array(
        'label'    	=> esc_html__('Button URL', 'builder69'),
        'description' => '',
        'priority'   => 12,
        'section'    => 'builder69_menu_information',
        'settings'   => 'builder69_theme_options[mt_menu_button_link]',
    ));

     //  =============================
    //  = Search on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_search]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_search', array(
        'settings' => 'builder69_theme_options[mt_menu_search]',
        'label'    	=> esc_html__('Search', 'builder69'),
        'section' => 'builder69_menu_information',
        'type'    => 'select',
		'priority'   => 13,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));

    //  =============================
    //  = Menu Small on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_small]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_small', array(
        'settings' => 'builder69_theme_options[mt_menu_small]',
        'label'    	=> esc_html__('Menu Icon', 'builder69'),
        'section' => 'builder69_menu_mobile',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_shop]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_shop', array(
        'settings' => 'builder69_theme_options[mt_menu_shop]',
       'label'    	=> esc_html__('Shop', 'builder69'),
        'section' => 'builder69_menu_information',
        'type'    => 'select',
		'priority'   => 15,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_menu_language]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_language', array(
        'settings' => 'builder69_theme_options[mt_menu_language]',
        'label'    	=> esc_html__('Language', 'builder69'),
        'section' => 'builder69_menu_information',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));
    

    $wp_customize->add_section('builder69_color_scheme', array(
        'title'    => esc_html__('Style', 'builder69'),
        'priority' => 125,
    ));



     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('default_color', array(
        'default'           => '#41AEDF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'default_color', array(
        'label'    => esc_html__('Default Color', 'builder69'),
        'section'  => 'builder69_color_scheme',
        'settings' => 'default_color',
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_menu_color_hover', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_menu_color_hover', array(
        'label'    => esc_html__('Light Menu hover color', 'builder69'),
        'section'  => 'builder69_menu_style',
        'settings' => 'mt_menu_color_hover',
    )));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_menu_color_hover_dark', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_menu_color_hover_dark', array(
        'label'    => esc_html__('Dark Menu hover color', 'builder69'),
        'section'  => 'builder69_menu_style',
        'settings' => 'mt_menu_color_hover_dark',
    )));


   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_bg', array(
        'label'    => esc_html__('Mobile Menu Background', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_bg',
    )));

     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link', array(
        'label'    => esc_html__('Mobile Menu Link', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_link',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link_hover', array(
        'label'    => esc_html__('Mobile Menu Link Hover', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_link_hover',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_title', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_title', array(
        'label'    => esc_html__('Mobile Menu Title', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_title',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_text', array(
        'label'    => esc_html__('Mobile Menu Text', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_text',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon', array(
        'label'    => esc_html__('Mobile Menu Social Icon', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_icon',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon_hover', array(
        'label'    => esc_html__('Mobile Menu Social Icon Hover', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'mt_color_mobile_icon_hover',
    )));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_mobile_menu_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_mobile_menu_bg_img', array(
        'label'    => esc_html__('Mobile Menu BG Image', 'builder69'),
        'section'  => 'builder69_menu_mobile',
        'settings' => 'builder69_theme_options[mt_mobile_menu_bg_img]',
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_mobile_menu_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_style', array(
        'settings' => 'builder69_theme_options[mt_mobile_menu_bg_img_style]',
        'label'    	=> esc_html__('Mobile Menu BG Image Style', 'builder69'),
        'section' => 'builder69_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'Cover',
			'3' => 'Repeat',
			'4' => 'No-Repeat'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_mobile_menu_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_position', array(
        'settings' => 'builder69_theme_options[mt_mobile_menu_bg_img_position]',
        'label'    	=> esc_html__('Mobile Menu BG Image Position', 'builder69'),
        'section' => 'builder69_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
	        '0' => 'Default',
        	'1' => 'Center',
            '2' => 'Top Center',
			'3' => 'Bottom Center',
			'4' => 'Left Center',
			'5' => 'Left Top',
			'6' => 'Left Bottom',
			'7' => 'Right Center',
			'8' => 'Right Top',
			'9' => 'Right Bottom'

        ),
    ));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_fixed_menu_bg', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_fixed_menu_bg', array(
        'label'    => esc_html__('Background color', 'builder69'),
        'section'  => 'builder69_menu_fixed',
        'settings' => 'mt_color_fixed_menu_bg',
    )));






    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[layout_style]', array(
        'default'        => 'full',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('layout_style', array(
        'label'      => esc_html__('Layout Style', 'builder69'),
        'section'    => 'builder69_color_scheme',
        'settings'   => 'builder69_theme_options[layout_style]',
        'type'       => 'radio',
        'choices'    => array(
            'full' => 'Full Width',
            'border' => 'Border',
            'box' => 'Boxed',
        ),
    ));






   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('bg_default_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_default_color', array(
        'label'    => esc_html__('Background Color', 'builder69'),
        'section'  => 'builder69_color_scheme',
        'settings' => 'bg_default_color',
    )));





    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[image_upload_test]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => esc_html__('Upload Background Image', 'builder69'),
        'section'  => 'builder69_color_scheme',
        'settings' => 'builder69_theme_options[image_upload_test]',
    )));




    //  =============================
    //  = Background Repeat  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_repeat]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box1', array(
        'settings' => 'builder69_theme_options[background_repeat]',
        'label'    	=> esc_html__('Background Repeat:', 'builder69'),
        'section' => 'builder69_color_scheme',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
            'full' => 'Full',
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
            'inherit' => 'Inherit',
        ),
    ));

    //  =============================
    //  = Background Attachment  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_attachment]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box22', array(
        'settings' => 'builder69_theme_options[background_attachment]',
        'label'    	=> esc_html__('Background Attachment:', 'builder69'),
        'section' => 'builder69_color_scheme',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
            'fixed' => 'Fixed',
            'scroll' => 'Scroll',
            'inherit' => 'Inherit',
        ),
    ));

    //  =============================
    //  = Background Position  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box33', array(
        'settings' => 'builder69_theme_options[background_position]',
        'label'    	=> esc_html__('Background Position:', 'builder69'),
        'section' => 'builder69_color_scheme',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
            'left top' => 'Left Top',
            'left center' => 'Left Center',
            'left bottom' => 'Left Bottom',
            'center top' => 'Center Top',
            'center center' => 'Center Center',
            'center bottom' => 'Center Bottom',
            'right top' => 'Right Top',
            'right center' => 'Right Center',
            'right bottom' => 'Right Bottom',
        ),
    ));





    //	==================================================
    //  =============================
    //  = ==== Title
    //  =============================

    $wp_customize->add_section('builder69_title', array(
        'title'    => esc_html__('Title', 'builder69'),
        'priority' => 129,
        'panel'  => 'panel_header',
    ));

	  //  =============================
    //  = Title Style  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_header_title_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box5', array(
        'settings' => 'builder69_theme_options[mt_header_title_style]',
        'label'    	=> esc_html__('Title Style:', 'builder69'),
        'section' => 'builder69_title',
        'type'    => 'select',

        'priority' => 1,
        'choices'    => array(
        	'mt_title_style_1' => esc_html__('Style 1', 'builder69'),
            'mt_title_style_2' => esc_html__('Style 2', 'builder69'),
            'mt_title_style_3' => esc_html__('Style 3', 'builder69'),
            'mt_title_style_4' => esc_html__('Style 4', 'builder69'),
            'mt_title_style_5' => esc_html__('Style 5', 'builder69'),
            'mt_title_style_6' => esc_html__('Style 6', 'builder69'),
            'mt_title_style_7' => esc_html__('Style 7', 'builder69'),
            'mt_title_style_8' => esc_html__('Style 8', 'builder69'),
            'mt_title_style_9' => esc_html__('Style 9', 'builder69'),
            'mt_title_style_10' => esc_html__('Style 10', 'builder69'),
            'mt_title_style_11' => esc_html__('Style 11', 'builder69'),
        ),
    ));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('bg_default_color_title', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_default_color_title', array(
        'label'    => esc_html__('Title Background Color', 'builder69'),
        'section'  => 'builder69_title',
        'settings' => 'bg_default_color_title',
        'priority' => 2,
    )));


    //  =============================
    //  = Color Picker Last word    =
    //  =============================
    $wp_customize->add_setting('bg_default_color_title_word', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_default_color_title_word', array(
        'label'    => esc_html__('Title last word color for light background', 'builder69'),
        'section'  => 'builder69_title',
        'settings' => 'bg_default_color_title_word',
        'priority' => 2,
    )));

	//  =============================
    //  = Color Picker Last word    =
    //  =============================
    $wp_customize->add_setting('bg_default_color_title_word_dark', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_default_color_title_word_dark', array(
        'label'    => esc_html__('Title last word color for dark backgrund', 'builder69'),
        'section'  => 'builder69_title',
        'settings' => 'bg_default_color_title_word_dark',
        'priority' => 2,
    )));





    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[image_upload_test_title]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test_title', array(
        'label'    => esc_html__('Default Title Background Image', 'builder69'),
        'section'  => 'builder69_title',
        'settings' => 'builder69_theme_options[image_upload_test_title]',

        'priority' => 3,
    )));




    //  =============================
    //  = Background Repeat  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_repeat_title]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));


    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'builder69_theme_options[background_repeat_title]',
        'label'    	=> esc_html__('Background Repeat:', 'builder69'),
        'section' => 'builder69_title',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
        	'cover' => 'Cover',
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
            'inherit' => 'Inherit',
        ),

        'priority' => 5,
    ));

    //  =============================
    //  = Background Attachment  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_attachment_title]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box2', array(
        'settings' => 'builder69_theme_options[background_attachment_title]',
        'label'    	=> esc_html__('Background Attachment:', 'builder69'),
        'section' => 'builder69_title',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
            'fixed' => 'Fixed',
            'scroll' => 'Scroll',
            'inherit' => 'Inherit',
        ),

        'priority' => 6,
    ));

    //  =============================
    //  = Background Position  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[background_position_title]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box3', array(
        'settings' => 'builder69_theme_options[background_position_title]',
        'label'    	=> esc_html__('Background Position:', 'builder69'),
        'section' => 'builder69_title',
        'type'    => 'select',
        'choices'    => array(
        	'none' => 'Select',
            'left top' => 'Left Top',
            'left center' => 'Left Center',
            'left bottom' => 'Left Bottom',
            'center top' => 'Center Top',
            'center center' => 'Center Center',
            'center bottom' => 'Center Bottom',
            'right top' => 'Right Top',
            'right center' => 'Right Center',
            'right bottom' => 'Right Bottom',
        ),

        'priority' => 7,
    ));

     //  =============================
    //  = Title Color	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_title_color]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'example_select_box9', array(
        'settings' => 'builder69_theme_options[mt_title_color]',
        'label'    	=> esc_html__('Title Color:', 'builder69'),
        'section' => 'builder69_title',
        'type'    => 'select',
        'choices'    => array(
	        'mt_title_dark' => 'Dark',
	        'mt_title_light' => 'Light'
        ),

        'priority' => 2,
    ));


    //  =============================
    //  = Breadcrumb
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_breadcrumb]', array(
        'capability' => 'edit_theme_options',
        'default'        => "1",
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_breadcrumb', array(
        'settings' => 'builder69_theme_options[mt_breadcrumb]',
        'label'    	=> esc_html__('Display Breadcrumb', 'builder69'),
        'section'  => 'builder69_title',
       'type'    => 'select',
        'choices'    => array(
        	'1' => 'On',
            '2' => 'Off',
        ),
        'priority' => 10,
    ));



}

add_action('customize_register', 'builder69_customize_header');

?>
