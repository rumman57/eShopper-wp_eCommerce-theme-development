<?php 

/**
 * WPB WooCommerce Related Products Slider
 * By WPbean
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Configure The Settings
 */

if ( !class_exists('wpb_wrps_settings' ) ):
class wpb_wrps_settings {

    private $settings_api;

    function __construct() {
        $this->settings_api = new WeDevs_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }
	
    function admin_menu() {
        add_options_page( __( 'WPB WooCommerce Related Products Slider','wpb-wrps' ), __( 'WPB Related Products Slider','wpb-wrps' ), 'manage_options', 'wpb_wrps_product_slider', array($this, 'wpb_plugin_page') );

    }
	// setings tabs
    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'wpb_wrps_general',
                'title' => __( 'General Settings', 'wpb-wrps' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array( 
			
            'wpb_wrps_general' => array(
            	array(
                    'name' 		=> 'wpb_wrps_theme',
                    'label' 	=> __( 'Slider Theme', 'wpb-wrps' ),
                    'desc' 		=> __( 'Choose a theme for related products slider, Default: Hover Effect Theme.', 'wpb-wrps' ),
                    'type' 		=> 'select',
                    'default' 	=> 'no',
                    'options' 	=> array(
                        'wrps_theme_hover' 	=> __( 'Hover Effect Theme', 'wpb-wrps' ),
                        'wrps_theme_box' 	=> __( 'Box Theme', 'wpb-wrps' ),
                    )
                ),
                array(
                    'name'              => 'wpb_wrps_number_of_products',
                    'label'             => __( 'Number of Related Products', 'wpb-wrps' ),
                    'desc'              => __( 'Number of Related Products to show in this slider.', 'wpb-wrps' ),
                    'type'              => 'number',
                    'default'           => 100,
                    'sanitize_callback' => 'intval'
                ),
                array(
                    'name'              => 'wpb_wrps_number_of_columns',
                    'label'             => __( 'Number of columns in Slider', 'wpb-wrps' ),
                    'desc'              => __( 'Default: 3 columns.', 'wpb-wrps' ),
                    'type'              => 'number',
                    'default'           => 3,
                    'sanitize_callback' => 'intval'
                ),
            )
			
        );
		return $settings_fields;
    }
	
	// warping the settings
    function wpb_plugin_page() {
        ?>
            <?php do_action ( 'wpb_wrps_before_settings' ); ?>
            <div class="wpb_wrps_settings_area">
                <div class="wrap wpb_wrps_settings">
                    <?php
            			$this->settings_api->show_navigation();
            			$this->settings_api->show_forms();
                    ?>
        		</div>
                <div class="wpb_wrps_settings_content">
                    <?php do_action ( 'wpb_wrps_settings_content' ); ?>
                </div>
            </div>
            <?php do_action ( 'wpb_wrps_after_settings' ); ?>
        <?php
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }
        return $pages_options;
    }
}
endif;

$settings = new wpb_wrps_settings();