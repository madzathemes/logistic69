<?php

function builder69_customize_footer($wp_customize){
	
	class builder69_Customize_Textarea_Control extends WP_Customize_Control {
	
    public $type = 'textarea';

    public function render_content() {
	        ?>
	        <label>
	        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>
	        <?php
	    }
	}


	//  =============================
    //  = ==== Footer
    //  =============================


    $wp_customize->add_section('builder69_footer_settings', array(
        'title'    	=> esc_html__('Settings', 'builder69'),
        'priority' => 125,
        'panel'  => 'panel_footer',
    ));

     $wp_customize->add_section('builder69_footer_style', array(
        'title'    	=> esc_html__('Style', 'builder69'),'priority' => 126,
        'panel'  => 'panel_footer',
    ));
    $wp_customize->add_section('builder69_footer_back_top', array(
        'title'    	=> esc_html__('Back To Top Button', 'builder69'),
        'priority' => 126,
        'panel'  => 'panel_footer',
    ));
    
     $wp_customize->add_section('builder69_footer_parallax', array(
        'title'    	=> esc_html__('Parallax', 'builder69'),
        'priority' => 127,
        'panel'  => 'panel_footer',
    ));
    
    //  =============================
    //  = Footer Parallax 	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_footer_parallax]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_parallax', array(
        'settings' => 'builder69_theme_options[mt_footer_parallax]',
        'label'    	=> esc_html__('Footer Parallax', 'builder69'),
        'section' => 'builder69_footer_parallax',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'mt_footer_parallax_off' => 'Off',
            'mt_footer_parallax_on' => 'On',

        ),
    ));
    


      //  =============================
    //  = Heder Full Width 	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_footer_width]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_width', array(
        'settings' => 'builder69_theme_options[mt_footer_width]',
        'label'    	=> esc_html__('Footer Full Width', 'builder69'),
        'section' => 'builder69_footer_settings',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'mt_footer_full_off' => 'Off',
            'mt_footer_full_on' => 'On',

        ),
    ));


	//  =============================
    //  = Footer Top
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[footer_top]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_footer_top', array(
        'settings' => 'builder69_theme_options[footer_top]',
        'label'    	=> esc_html__('Display Top Footer', 'builder69'),
        'section'  => 'builder69_footer_settings',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Footer Bottom
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[footer_bottom]', array(
        'capability' => 'edit_theme_options',
        'default'        => "",
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_footer_bottom', array(
        'settings' => 'builder69_theme_options[footer_bottom]',
        'label'    	=> esc_html__('Display Bottom Footer', 'builder69'),
        'section'  => 'builder69_footer_settings',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Footer Top Columns  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[footer_columns]', array(
        'default'        => '2_4',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_columns', array(
        'settings' => 'builder69_theme_options[footer_columns]',
        'label'    	=> esc_html__('Footer Columns:', 'builder69'),
        'section' => 'builder69_footer_settings',
        'type'    => 'select',
        'choices'    => array(
       		'1_1' => '1/1',
        	'1_2' => '1/2',
            '1_3' => '1/3',
            '1_4' => '1/4',
            '2_4' => '2/4',
            '4_2' => '4/2',
        ),
    ));


	//  =============================
    //  = Copyright
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[copyright_text]', array(
        'default'    	=> esc_html__('Copyright 2016. Powered by WordPress Theme. By Madars Bitenieks', 'builder69'),
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'balanceTags',


    ));

    $wp_customize->add_control( new builder69_Customize_Textarea_Control( $wp_customize, 'mt_copyright_text', array(
        'label'    	=> esc_html__('Copyright Text', 'builder69'),
        'section'    => 'builder69_footer_settings',
        'settings'   => 'builder69_theme_options[copyright_text]',
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_top_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_top_bg', array(
        'label'    => esc_html__('Footer Top Background Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_top_bg',
        'priority'   => 1,
    )));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_top_heading', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_top_heading', array(
        'label'    => esc_html__('Footer Top Heading Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_top_heading',
        'priority'   => 2,
    )));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_top_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_top_text', array(
        'label'    => esc_html__('Footer Top Text Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_top_text',
        'priority'   => 3,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_top_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_top_link', array(
        'label'    => esc_html__('Footer Top Link Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_top_link',
        'priority'   => 4,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_top_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_top_link_hover', array(
        'label'    => esc_html__('Footer Top Link Hover Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_top_link_hover',
        'priority'   => 5,
    )));
     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_footer_top_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_footer_top_bg_img', array(
        'label'    => esc_html__('Footer Top BG Image', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'builder69_theme_options[mt_footer_top_bg_img]',
        'priority'   => 6,
    )));


    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_footer_top_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_top_bg_img_style', array(
        'settings' => 'builder69_theme_options[mt_footer_top_bg_img_style]',
        'label'    	=> esc_html__('Footer Top BG Image Style', 'builder69'),
        'section' => 'builder69_footer_style',
        'type'    => 'select',
		'priority'   => 7,
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
     $wp_customize->add_setting('builder69_theme_options[mt_footer_top_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_top_bg_img_position', array(
        'settings' => 'builder69_theme_options[mt_footer_top_bg_img_position]',
        'label'    	=> esc_html__('Footer Top BG Image Position', 'builder69'),
        'section' => 'builder69_footer_style',
        'type'    => 'select',
		'priority'   => 8,
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
    $wp_customize->add_setting('mt_footer_bottom_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_bottom_bg', array(
        'label'    => esc_html__('Footer Bottom Background Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_bottom_bg',
        'priority'   => 9,
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_bottom_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_bottom_text', array(
        'label'    => esc_html__('Footer Bottom Text Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_bottom_text',
        'priority'   => 10,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_bottom_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_bottom_link', array(
        'label'    => esc_html__('Footer Bottom Link Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_bottom_link',
        'priority'   => 11,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_bottom_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_bottom_link_hover', array(
        'label'    => esc_html__('Footer Bottom Link Hover Color', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'mt_footer_bottom_link_hover',
        'priority'   => 12,
    )));
     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('builder69_theme_options[mt_footer_bottom_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_footer_bottom_bg_img', array(
        'label'    => esc_html__('Footer Bottom BG Image', 'builder69'),
        'section'  => 'builder69_footer_style',
        'settings' => 'builder69_theme_options[mt_footer_bottom_bg_img]',
        'priority'   => 13,
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('builder69_theme_options[mt_footer_bottom_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_bottom_bg_img_style', array(
        'settings' => 'builder69_theme_options[mt_footer_bottom_bg_img_style]',
        'label'    	=> esc_html__('Footer Bottom BG Image Style', 'builder69'),
        'section' => 'builder69_footer_style',
        'type'    => 'select',
		'priority'   => 14,
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
     $wp_customize->add_setting('builder69_theme_options[mt_footer_bottom_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_footer_bottom_bg_img_position', array(
        'settings' => 'builder69_theme_options[mt_footer_bottom_bg_img_position]',
        'label'    	=> esc_html__('Footer Bottom BG Image Position', 'builder69'),
        'section' => 'builder69_footer_style',
        'type'    => 'select',
		'priority'   => 15,
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
    $wp_customize->add_setting('mt_footer_back_top_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_back_top_bg', array(
        'label'    => esc_html__('Background Color', 'builder69'),
        'section'  => 'builder69_footer_back_top',
        'settings' => 'mt_footer_back_top_bg',
        'priority'   => 9,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_back_top_bg_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_back_top_bg_hover', array(
        'label'    => esc_html__('Background Hover Color', 'builder69'),
        'section'  => 'builder69_footer_back_top',
        'settings' => 'mt_footer_back_top_bg_hover',
        'priority'   => 9,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_back_top_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_back_top_link', array(
        'label'    => esc_html__('Arrow Color', 'builder69'),
        'section'  => 'builder69_footer_back_top',
        'settings' => 'mt_footer_back_top_link',
        'priority'   => 9,
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_footer_back_top_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_footer_back_top_link_hover', array(
        'label'    => esc_html__('Arrow Hover Color', 'builder69'),
        'section'  => 'builder69_footer_back_top',
        'settings' => 'mt_footer_back_top_link_hover',
        'priority'   => 9,
    )));




}

add_action('customize_register', 'builder69_customize_footer');

?>
