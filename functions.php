<?php

// Set up
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Includes
include( get_template_directory() . '/includes/front/enqueue.php');
include( get_template_directory() . '/includes/theme-setup.php');
include( get_template_directory() . '/includes/widgets.php');


// Actions & Filter Hooks
add_action('wp_enqueue_scripts', 'wpspeed_enqueue');
add_action('after_setup_theme', 'wpspeed_setup_theme');
add_action('widgets_init', 'wpspeed_widgets');


// Shortcodes