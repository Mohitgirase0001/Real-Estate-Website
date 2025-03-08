<?php
// Enqueue Styles and Scripts
function satoru_enqueue_styles() {
    wp_enqueue_style('satoru-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/homepage.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'satoru_enqueue_styles');

// Register Navigation Menu
function satoru_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'satoru'),
    ));
}
add_action('init', 'satoru_register_menus');

// Custom Post Type for Properties
function satoru_custom_post_type_properties() {
    register_post_type('properties',
        array(
            'labels' => array('name' => __('Properties')),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'satoru_custom_post_type_properties');
?>
