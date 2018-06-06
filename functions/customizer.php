<?php
/**
 * Theme Customizer Functions
 *
 * @package Bulmapress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bulmapress_customize_register( $wp_customize ) {
	$wp_customize->remove_section("colors");
 	$wp_customize->remove_section("background_image");
 	$wp_customize->remove_section("title_tagline");


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

//	$wp_customize->add_setting( 'header_textcolor' , array(
//		'default'   =>  '#000000',
//		'transport' =>  'refresh',
//	));
//
//	$wp_customize->add_section ( 'bulmapress_text_section' , array(
//		'title'     => __( 'Text Section', 'bulmapress'),
//		'priority'  => 30,
//	));
//
//	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
//		'label'     => __( 'Header Color' , 'bulmapress' ),
//		'section'   => 'bulmapress_text_section',
//		'settings'  => 'header_textcolor',
//	)));

//	$wp_customize->add_panel( 'text_blocks' , array(
//		'priority'          => 500,
//		'theme-supports'    => '',
//		'title'             => __( 'Text Blocks', 'bulmapress' ),
//		'description'       => __( 'Set editable text for certain content.', 'bulmapress' ),
//	) );
//
//	$wp_customize->add_section( 'custom_body_text' , array(
//		'title'     => __('Change Body Text' , 'bulmapress'),
//		'panel'     => 'text_blocks',
//		'priority'  => 10,
//	) );
//
//	//Add setting
//
//	$wp_customize->add_setting('body_text_block' , array(
//		'default'           => __( 'default text' , 'bulmapress'),
//		'sanitize_callback' => 'sanitize_text',
//	) );
//
//	//Add Control
//
//	$wp_customize->add_control( new WP_Customize_Control(
//		$wp_customize,
//		'custom_body_text',
//			array(
//				'label'     => __( 'Body Text' , 'bulmapress'),
//				'section'   => 'custom_body_text',
//				'settings'  => 'body_text_block',
//				'type'      => 'text',
//			)
//		)
//	);
//
//	//Sanitize Text
//	function sanitize_text( $text ) {
//		return sanitize_text_field( $text );
//	}

    // --------- Home Page Start --------- //

    //Home Title
	$wp_customize->add_section( 'tuglyt_home_title_section' , array (
		'title'     => 'Home Title Text',
		'priority'  => 10,
	) );

	$wp_customize->add_setting( 'tuglyt_home_title_setting' , array());
	$wp_customize->add_control( 'tuglyt_hero_home_title_ctrl' , array(
		'label'     => 'Home Title',
		'type'      => 'text',
		'section'   => 'tuglyt_home_title_section',
		'settings'  => 'tuglyt_home_title_setting',
	) );

	//Home Body
	$wp_customize->add_section( 'tuglyt_home_body_section' , array (
		'title'     => 'Home Body Text',
		'priority'  => 10,
	) );

	$wp_customize->add_setting( 'tuglyt_home_body_setting' , array());
	$wp_customize->add_control( 'tuglyt_hero_home_body_ctrl' , array(
		'label'     => 'Home Body Text',
		'type'      => 'textarea',
		'section'   => 'tuglyt_home_body_section',
		'settings'  => 'tuglyt_home_body_setting',
	) );

    // --------- Home Page End --------- //


    // --------- About Page Start --------- //

    //About Title
	$wp_customize->add_section( 'tuglyt_about_title_section' , array (
	    'title'     => 'About Title Text',
        'priority'  => 10,
    ) );

	$wp_customize->add_setting( 'tuglyt_about_title_setting' , array ());
	$wp_customize->add_control( 'tuglyt_hero_about_title_ctrl' , array (
	  'label'       => 'About Title Text',
      'type'        => 'text',
      'section'     => 'tuglyt_about_title_section',
      'settings'    => 'tuglyt_about_title_setting',
    ) );

	//About Body
    $wp_customize->add_section( 'tuglyt_about_body_section' , array (
        'title'     => 'About Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_about_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_about_body_ctrl' , array (
        'label'       => 'About Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_about_body_section',
        'settings'    => 'tuglyt_about_body_setting',
    ) );

    //About Second Title
    $wp_customize->add_section( 'tuglyt_about_secondtitle_section' , array (
        'title'     => 'About Second Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_about_secondtitle_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_about_secondtitle_ctrl' , array (
        'label'       => 'About Second Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_about_secondtitle_section',
        'settings'    => 'tuglyt_about_secondtitle_setting',
    ) );

    // --------- About Page End --------- //

    // --------- History Page Start --------- //

    //History Main Title
    $wp_customize->add_section( 'tuglyt_history_main_title_section' , array (
        'title'     => 'History Main Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_main_title_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_main_title_ctrl' , array (
        'label'       => 'History Main Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_history_main_title_section',
        'settings'    => 'tuglyt_history_main_title_setting',
    ) );

    //History First Section Body
    $wp_customize->add_section( 'tuglyt_history_first_body_section' , array (
        'title'     => 'History First Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_first_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_first_body_ctrl' , array (
        'label'       => 'History First Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_history_first_body_section',
        'settings'    => 'tuglyt_history_first_body_setting',
    ) );


    //History Second Title
    $wp_customize->add_section( 'tuglyt_history_second_title_section' , array (
        'title'     => 'History Second Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_second_title_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_second_title_ctrl' , array (
        'label'       => 'History Second Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_history_second_title_section',
        'settings'    => 'tuglyt_history_second_title_setting',
    ) );

    //History Second Section Body
    $wp_customize->add_section( 'tuglyt_history_second_body_section' , array (
        'title'     => 'History Second Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_second_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_second_body_ctrl' , array (
        'label'       => 'History Second Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_history_second_body_section',
        'settings'    => 'tuglyt_history_second_body_setting',
    ) );


    //History Third Title
    $wp_customize->add_section( 'tuglyt_history_third_title_section' , array (
        'title'     => 'History Third Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_third_title_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_third_title_ctrl' , array (
        'label'       => 'History Third Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_history_third_title_section',
        'settings'    => 'tuglyt_history_third_title_setting',
    ) );

    //History Third Section Body
    $wp_customize->add_section( 'tuglyt_history_third_body_section' , array (
        'title'     => 'History Third Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_third_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_third_body_ctrl' , array (
        'label'       => 'History Third Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_history_third_body_section',
        'settings'    => 'tuglyt_history_third_body_setting',
    ) );


    //History Fourth Title
    $wp_customize->add_section( 'tuglyt_history_fourth_title_section' , array (
        'title'     => 'History Fourth Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_fourth_title_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_fourth_title_ctrl' , array (
        'label'       => 'History Fourth Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_history_fourth_title_section',
        'settings'    => 'tuglyt_history_fourth_title_setting',
    ) );

    //History Fourth Section Body
    $wp_customize->add_section( 'tuglyt_history_fourth_body_section' , array (
        'title'     => 'History Fourth Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_fourth_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_fourth_body_ctrl' , array (
        'label'       => 'History Fourth Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_history_fourth_body_section',
        'settings'    => 'tuglyt_history_fourth_body_setting',
    ) );


    //History Fifth Title
    $wp_customize->add_section( 'tuglyt_history_fifth_title_section' , array (
        'title'     => 'History Fifth Title Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_fifth_title_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_fifth_title_ctrl' , array (
        'label'       => 'History Fifth Title Text',
        'type'        => 'text',
        'section'     => 'tuglyt_history_fifth_title_section',
        'settings'    => 'tuglyt_history_fifth_title_setting',
    ) );

    //History Fifth Section Body
    $wp_customize->add_section( 'tuglyt_history_fifth_body_section' , array (
        'title'     => 'History Fifth Body Text',
        'priority'  => 10,
    ) );

    $wp_customize->add_setting( 'tuglyt_history_fifth_body_setting' , array ());
    $wp_customize->add_control( 'tuglyt_hero_history_fifth_body_ctrl' , array (
        'label'       => 'History Fifth Body Text',
        'type'        => 'textarea',
        'section'     => 'tuglyt_history_fifth_body_section',
        'settings'    => 'tuglyt_history_fifth_body_setting',
    ) );

    // --------- History Page End --------- //



}
add_action( 'customize_register', 'bulmapress_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bulmapress_customize_preview_js() {
	wp_enqueue_script( 'bulmapress_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bulmapress_customize_preview_js', 'bulmapress_customize_register' );


/* Text Area */
/* Template - Use get theme mod