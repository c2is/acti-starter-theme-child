<?php

add_action('wp_enqueue_scripts', 'addOwnStyles');
add_action('wp_enqueue_scripts', 'addOwnScripts');

function addOwnStyles(){
    wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/assets/css/styles.css');
}

function addOwnScripts(){
    wp_enqueue_script('vendors', get_stylesheet_directory_uri() . '/assets/js/vendors.js', array(), false, true);
    wp_enqueue_script('script-front', get_stylesheet_directory_uri() . '/assets/js/scripts-front.js', array('vendors'), false, true);
}
