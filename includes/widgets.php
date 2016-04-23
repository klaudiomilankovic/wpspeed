<?php

function wpspeed_widgets() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'wpspeed'),
        'id'   => 'wpspeed_sidebar',
        'description' => __('Main Sidebar For The Theme', 'wpspeed'),
        'class' => 'sidebar'
        ));
};