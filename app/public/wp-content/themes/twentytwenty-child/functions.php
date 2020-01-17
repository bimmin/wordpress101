<?php

function my_theme_enqueue_styles() {
    // enqueue style.css to child
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
// fires when scripts and styles are enqueued
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// register a new style from outsource
wp_register_style( 'Bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
wp_enqueue_style( 'Bootstrap4' );