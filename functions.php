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


    // wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/filename', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_main_styles');


// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'menu' => esc_html__( 'Primary', 'grpress' )
    )
);


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


function grpress_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'grpress' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'grpress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
        )
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'grpress' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'grpress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
        )
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Navbar', 'grpress' ),
			'id'            => 'navbar',
			'description'   => esc_html__( 'Add widgets here.', 'grpress' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
        )
	);
}
add_action( 'widgets_init', 'grpress_widgets_init' );
