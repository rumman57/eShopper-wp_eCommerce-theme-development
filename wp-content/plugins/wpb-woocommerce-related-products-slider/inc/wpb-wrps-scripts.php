<?php 

/**
 * WPB WooCommerce Related Products Slider
 * By WPbean
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Enqueue js files
 */

function wpb_wrps_adding_scripts() {
	if (!is_admin()) {
		wp_enqueue_script('wpb-wps-owl-carousel', WPB_WRPS_URI.'/assets/js/owl.carousel.js',array('jquery'),'1.3.2', false);
	}
}
add_action( 'wp_enqueue_scripts', 'wpb_wrps_adding_scripts' ); 



/**
 * Enqueue CSS files
 */

function wpb_wrps_adding_style() {

	if (!is_admin()) {
		wp_enqueue_style( 'wpb_wrps_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed', false );
		wp_enqueue_style('wpb_wrps_owl_carousel', WPB_WRPS_URI.'/assets/css/owl.carousel.css','','1.3.2', false);
		wp_enqueue_style('wpb_wrps_main_style', WPB_WRPS_URI.'/assets/css/main.css','','1.0', false);
	}
}
add_action( 'wp_enqueue_scripts', 'wpb_wrps_adding_style',11 );


/**
 * Enqueue CSS For Admin
 */

function wpb_wrps_admin_adding_style() {
	$screen = get_current_screen();
	if( $screen->id == 'settings_page_wpb_wrps_product_slider' ){
		wp_enqueue_style('wpb_wrps_owl_carousel', WPB_WRPS_URI.'/admin/assets/css/main.css','','1.0', false);
	}
}
add_action( 'admin_enqueue_scripts', 'wpb_wrps_admin_adding_style',11 );