<?php

function enqueue_bootstrap_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Global Settings',
        'menu_title' => 'Global Settings',
        'menu_slug' => 'global-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
