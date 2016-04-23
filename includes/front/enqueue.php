<?php

function wpspeed_enqueue() {
    // Styles
    wp_register_style('wpspeed_style', get_stylesheet_uri());
    wp_enqueue_style('wpspeed_style');

    // Scripts
    wp_enqueue_script('jquery');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/vendor/modernizr.min.js', true);
    wp_enqueue_script ('modernizr');

    wp_register_script('fastclick', get_template_directory_uri() . '/assets/vendor/fastclick.js', array(), false,  true);
    wp_enqueue_script('fastclick');
}