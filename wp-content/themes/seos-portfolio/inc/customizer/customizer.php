<?php
/**
 * Seos Portfolio Theme Customizer.
 *
 * @package Seos_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function seos_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'seos_portfolio_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function seos_portfolio_customize_preview_js() {
	wp_enqueue_script( 'seos_portfolio_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20430508', true );
}
add_action( 'customize_preview_init', 'seos_portfolio_customize_preview_js' );

/************************************* Home Page Feature Image ***********************************************/	

		
		if ( ! function_exists( 'seos_portfolio_slide' ) ) :
	function seos_portfolio_slide( $wp_customize ) {
	
		$wp_customize->add_section( 'seos_portfolio_featured_slider_section' , array(
			'title'       => __( 'Home Page Featured IMG', 'seos-portfolio' ),
			'description' => __( 'Post your Title, IMG and URL. Featured IMG will appear only on your home page.', 'seos-portfolio' ),
			'priority'		=> 3,
		) );
		
		$wp_customize->add_setting( 'slider_activate', array (
			'sanitize_callback' => 'sanitize_text_field',
			'capability'     => 'edit_theme_options',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seos_portfolio_deactivate', array(
					'label'		=> __( 'Activate Read More button.', 'seos-portfolio' ),
					'section'	=> 'seos_portfolio_featured_slider_section',
					'settings'	=> 'slider_activate',
					'type'		=> 'select',
					'choices'	=> array
					(
						'Read More'	=> 'Deactivate',
						''	=> 'Activate'
						
					)
				) 
			) 
		);
		
		$wp_customize->add_setting( 'slider_text', array (
			'sanitize_callback' => 'sanitize_text_field',
			'capability'     => 'edit_theme_options',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slider_text', array(
			'label'    => __( 'Your Title Text:', 'seos-portfolio' ),
			'section'  => 'seos_portfolio_featured_slider_section',
			'settings' => 'slider_text',
			'type' => 'text',
		) ) );

		$wp_customize->add_setting( 'slider_img', array (
			'sanitize_callback' => 'esc_url_raw',
            'default' => get_template_directory_uri() . '/images/header.jpg',
		) );
		
		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
			$wp_customize, 
			'slider_img', 
			array(
				'label'      => __( 'Your IMG Upload:', 'seos-portfolio' ),
				'section'    => 'seos_portfolio_featured_slider_section',
				'settings'   => 'slider_img',
			) ) );
			
		$wp_customize->add_setting( 'slide_url', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'slide_url', array(
			'label'    => __( 'Enter your slide url', 'seos-portfolio' ),
			'section'  => 'seos_portfolio_featured_slider_section',
			'settings' => 'slide_url',
		) ) );	

	}
endif;
		add_action('customize_register', 'seos_portfolio_slide');
	
/******************** Seos Portfolio Custom CSS ******************************************/
	
	if ( ! function_exists( 'seos_portfolio_css' ) ) :
	function seos_portfolio_css( $wp_customize ) {	
	
	$wp_customize->add_section( 'seos_portfolio_css_section', array(
		'title'		=> __('Custom CSS', 'seos-portfolio'),
		'priority'	=> 6,

	));
	$wp_customize->add_setting( 'seos_portfolio_custom_css', array(
		'default'			=> '',
		'capability'		=> 'edit_theme_options',
		'transport'			=> 'refresh',
		'sanitize_callback'    => 'wp_filter_nohtml_kses',
		'sanitize_js_callback' => 'wp_filter_nohtml_kses'
	));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'seos_portfolio_custom_css', array(
				'label'		=> __( 'Custom CSS', 'seos-portfolio' ),
				'section'	=> 'seos_portfolio_css_section',
				'settings'	=> 'seos_portfolio_custom_css',
				'type'		=> 'textarea'
			)
		)
	);
	
	}
endif;
		add_action('customize_register', 'seos_portfolio_css');	