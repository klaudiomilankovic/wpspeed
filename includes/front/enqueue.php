<?php

function speed_enqueue() {
    // Styles
    wp_register_style('speed_style', get_stylesheet_uri());

    wp_enqueue_style('speed_style');

    // Scripts
    wp_enqueue_script('jquery');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/vendor/modernizr.min.js', true);
    wp_enqueue_script ('modernizr');
}