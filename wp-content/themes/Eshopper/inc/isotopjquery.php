<?php

if (!is_admin()) add_action( 'wp_enqueue_scripts', 'add_jquery_to_my_theme' );

function add_jquery_to_my_theme() {
    // scrap WP jquery and register from google cdn - load in footer
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", false, null, true );    
    // load jquery
    wp_enqueue_script('jquery');
}


?>