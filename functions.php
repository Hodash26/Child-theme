<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    $theme = wp_get_theme('OceanWP');
    $version = $theme->get('Version');
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('oceanwp-style'), $version);
}



function my_custom_login() {

 

echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/login-style-perso.css" />' }

 

add_action('login_head', 'my_custom_login');


