<?php

// Customizer settings
function mytheme_customize_register($wp_customize) {
    // Add a new section for theme colors
    $wp_customize->add_section('theme_colors', array(
        'title'    => __('Theme Colors', 'mytheme'),
        'priority' => 30,
    ));

    // Add a new section for layout options
    $wp_customize->add_section('layout_options', array(
        'title'    => __('Layout Options', 'mytheme'),
        'priority' => 35,
    ));

    // Add settings for theme colors
    $wp_customize->add_setting('body_background_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_background_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_background_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('heading_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('link_color', array(
        'default'   => '#0000ff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('paragraph_color', array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));

    // Add settings for layout options
    $wp_customize->add_setting('container_width', array(
        'default'   => '1200px',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('container_padding', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    // Add settings for header container
    $wp_customize->add_setting('header_container_width', array(
        'default'   => '1200px',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('header_container_padding', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    // Add settings for footer container
    $wp_customize->add_setting('footer_container_width', array(
        'default'   => '1200px',
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('footer_container_padding', array(
        'default'   => '15px',
        'transport' => 'refresh',
    ));

    // Add color controls for theme colors
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background_color', array(
        'label'    => __('Body Background Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'body_background_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color', array(
        'label'    => __('Header Background Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'header_background_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background_color', array(
        'label'    => __('Footer Background Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'footer_background_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'heading_color', array(
        'label'    => __('Heading Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'heading_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'link_color',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'paragraph_color', array(
        'label'    => __('Paragraph Color', 'mytheme'),
        'section'  => 'theme_colors',
        'settings' => 'paragraph_color',
    )));

    // Add controls for layout options
    $wp_customize->add_control('container_width_control', array(
        'label'    => __('Container Width', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'container_width',
        'type'     => 'text',
    ));

    $wp_customize->add_control('container_padding_control', array(
        'label'    => __('Container Padding', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'container_padding',
        'type'     => 'text',
    ));

    // Add controls for header container
    $wp_customize->add_control('header_container_width_control', array(
        'label'    => __('Header Container Width', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'header_container_width',
        'type'     => 'text',
    ));

    $wp_customize->add_control('header_container_padding_control', array(
        'label'    => __('Header Container Padding', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'header_container_padding',
        'type'     => 'text',
    ));

    // Add controls for footer container
    $wp_customize->add_control('footer_container_width_control', array(
        'label'    => __('Footer Container Width', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'footer_container_width',
        'type'     => 'text',
    ));

    $wp_customize->add_control('footer_container_padding_control', array(
        'label'    => __('Footer Container Padding', 'mytheme'),
        'section'  => 'layout_options',
        'settings' => 'footer_container_padding',
        'type'     => 'text',
    ));
}

// Hook the function to the customize_register action
add_action('customize_register', 'mytheme_customize_register');

// Apply the customizer styles to the theme
function mytheme_customizer_css() {
    ?>
    <style type="text/css">
        body {
            background-color: <?php echo get_theme_mod('body_background_color', '#ffffff'); ?>;
            color: <?php echo get_theme_mod('paragraph_color', '#000000'); ?>;
        }
        header {
            background-color: <?php echo get_theme_mod('header_background_color', '#ffffff'); ?>;
        }
        footer {
            background-color: <?php echo get_theme_mod('footer_background_color', '#ffffff'); ?>;
        }
        h1, h2, h3, h4, h5, h6 {
            color: <?php echo get_theme_mod('heading_color', '#000000'); ?>;
        }
        a {
            color: <?php echo get_theme_mod('link_color', '#0000ff'); ?>;
        }

        .container {
            max-width: <?php echo get_theme_mod('container_width', '1200px'); ?>;
            padding-left: <?php echo get_theme_mod('container_padding', '15px'); ?>;
            padding-right: <?php echo get_theme_mod('container_padding', '15px'); ?>;
            margin: 0 auto; /* Center the container */
        }

        header .container {
            max-width: <?php echo get_theme_mod('header_container_width', '1200px'); ?>;
            padding-left: <?php echo get_theme_mod('header_container_padding', '15px'); ?>;
            padding-right: <?php echo get_theme_mod('header_container_padding', '15px'); ?>;
            margin: 0 auto; /* Center the container */
        }

        footer .container {
            max-width: <?php echo get_theme_mod('footer_container_width', '1200px'); ?>;
            padding-left: <?php echo get_theme_mod('footer_container_padding', '15px'); ?>;
            padding-right: <?php echo get_theme_mod('footer_container_padding', '15px'); ?>;
            margin: 0 auto; /* Center the container */
        }
        /* Responsive Styles */
        @media (max-width: 1024px) {
            .container {
                max-width: 90%; /* Adjust as needed */
            }

            header .container {
                max-width: 90%; /* Adjust as needed */
            }

            footer .container {
                max-width: 90%; /* Adjust as needed */
            }
        }

        @media (max-width: 768px) {
            .container {
                max-width: 100%; /* Adjust as needed */

            }

            header .container {
                max-width: 100%; /* Adjust as needed */

            }

            footer .container {
                max-width: 100%; /* Adjust as needed */
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customizer_css');
