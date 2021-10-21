<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
function theme_styles() {
    // style
    wp_enqueue_style( 'tailwind-theme', get_template_directory_uri().'/dist/css/theme.css', array(), rand(100, 999) );
    wp_enqueue_style( 'my-style', get_template_directory_uri().'/dist/css/style.css', array(), rand(100, 999) );

    
    // script
    wp_enqueue_script( 'my-js', get_template_directory_uri() . '/dist/js/main.js', array(), rand(100, 999), false );
}