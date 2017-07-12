<?php 

/**
 * WPB WooCommerce Related Products Slider
 * By WPbean
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Adding this plugin relative products slider to @woocommerce_after_single_product_summary 
 */

add_action( 'woocommerce_after_single_product_summary', 'wpb_wrps_related_products',22 );


/**
 * Removing WooCommerce default relative products form @woocommerce_after_single_product_summary 
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20 );