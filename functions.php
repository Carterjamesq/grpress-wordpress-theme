<?php
/**
 * GRPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GRPress
 * @since GRPress 1.0
 */

// Include the customizer settings
require get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue styles and scripts.
 *
 */
function enqueue_main_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('common-styles', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0.0', 'all');


    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/filename', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_main_styles');


/**
 * Enqueue scripts and styles for front end.
 *
 */
// Enqueue Customizer script


// Enable support for Custom Logo
function mytheme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
