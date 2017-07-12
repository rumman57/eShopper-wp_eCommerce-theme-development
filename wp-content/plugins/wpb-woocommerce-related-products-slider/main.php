<?php
/**
 * Plugin Name:       WPB WooCommerce Related Products Slider
 * Plugin URI:        http://wpbean.com/plugins/
 * Description:       Highly customizable related product slider plugin for WooCommerce. 
 * Version:           1.01
 * Author:            wpbean
 * Author URI:        http://wpbean.com
 * Text Domain:       wpb-wrps
 * Domain Path:       /languages
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 


/**
 * Define Path 
 */
define( 'WPB_WRPS_URI', WP_CONTENT_URL. '/plugins/wpb-woocommerce-related-products-slider' );


/**
 * Define Text Domain
 */

function wpb_wrps_textdomain() {
	load_plugin_textdomain( 'wpb-wrps', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'wpb_wrps_textdomain' );


/**
 * Plugin Activation redirect 
 */

if( !function_exists( 'wpb_wrps_activation_redirect' ) ){
	function wpb_wrps_activation_redirect( $plugin ) {
	    if( $plugin == plugin_basename( __FILE__ ) ) {
	        exit( wp_redirect( admin_url( 'options-general.php?page=wpb_wrps_product_slider' ) ) );
	    }
	}
}
add_action( 'activated_plugin', 'wpb_wrps_activation_redirect' );



/**
 * Plugin Action Links
 */

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wpb_wrps_add_action_links' );

function wpb_wrps_add_action_links ( $links ) {

	$links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=wpb_wrps_product_slider') ) .'">'. __( 'Settings', 'wpb-wrps' ) .'</a>';
	$links[] = '<a style="color: red; font-weight: bold" href="'. esc_url( 'http://bit.ly/1IpFfXU' ) .'">'. __( 'Go PRO!', 'wpb-wrps' ) .'</a>';

	return $links;
}



/**
 * Require Files
 */

require_once dirname( __FILE__ ) . '/inc/wpb-wrps-filter.php';
require_once dirname( __FILE__ ) . '/inc/wpb-wrps-functions.php';
require_once dirname( __FILE__ ) . '/inc/wpb-wrps-scripts.php';
require_once dirname( __FILE__ ) . '/admin/class.settings-api.php';
require_once dirname( __FILE__ ) . '/admin/settings-config.php';