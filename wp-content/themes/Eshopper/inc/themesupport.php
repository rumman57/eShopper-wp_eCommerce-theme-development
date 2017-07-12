
<?php

function getThemeSupport()
{
	add_theme_support( 'title-tag' ); //For title tag dynamic..optional use for wp_title
	add_theme_support('post-thumbnails'); //For image
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) ); //For Post Formats
	$custom_back = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
   );
  add_theme_support( 'custom-background', $custom_back ); //For Custom Background
  $dcustom_header = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $dcustom_header ); //For Custom Header
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); //For HTML5 Support
add_theme_support( 'automatic-feed-links' );//For automatic feed links
//add_image_size('slider_image',1500,400,true);
add_image_size('fetures_image',845,390,true);

	
}
add_action("after_setup_theme","getThemeSupport");


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


function wmpudev_enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );


?>