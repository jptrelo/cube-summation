<?php
/**
 * Twenty Fifteen functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Integro
 * @since Integro 1.0
 */

add_theme_support( 'custom-logo' );

add_theme_support( 'post-thumbnails' ); 

wp_enqueue_style( 'style', get_theme_file_uri( '/assets/css/style.css' ));

add_image_size( 'integro-featured-image', 2000, 1200, true );

add_theme_support( 'custom-header', apply_filters( 'integro_custom_header_args', array(
        'default-image'      => get_parent_theme_file_uri( '/assets/images/integro-home.jpg' ),
        'width'              => 2000,
        'height'             => 900,
        'flex-height'        => true,
        'video'              => true,
    ) ) );

// This theme uses wp_nav_menu() in two locations.
function register_my_menu() {
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'integro' )
	) );
}
add_action( 'init', 'register_my_menu' );

/* Site Identity*/

function integro_the_custom_logo() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'integro_the_custom_logo' );

function integro_the_custom_link() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'integro_the_custom_logo' );



function your_theme_new_customizer_settings($wp_customize) {
    // add a setting for the site logo
    $wp_customize->add_setting('your_theme_title_link');
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'your_theme_title_link',
    array(
    'label' => 'Site Title Link',
    'section' => 'title_tagline',
    'settings' => 'your_theme_title_link',
    ) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');



