<?php
/* 
Plugin Name: Product Gallery Slider for Woocommerce
Plugin URI: http://www.mclanka.com/
Description: Product gallery slider for wooCommerce allows you to display a nice image slideshow in the product pages instead of the default lightbox.
Version: 1.5.1
Author:  Maya Creations
Author URI: http://www.mclanka.com
*/
/****************************************************************************************************************************/
  /****************************Plugin Constants****************************************************************************//*****************************************************************************************************************************/
define('MAYA_WOO_SLIDER',plugin_dir_url(__FILE__));
define('MAYA_WOO_SLIDER_CSS',MAYA_WOO_SLIDER.'/css');
define('MAYA_WOO_SLIDER_JS',MAYA_WOO_SLIDER.'/js');
define('MAYA_WOO_SLIDER_IMAGES',MAYA_WOO_SLIDER.'/images');
/*************************************************************************************************************************************************************/

/***************register hook************************************************************************************************/

/*************************************************************************************************************************************************************/

register_activation_hook(__FILE__,'mc_woo_slider_register_init');

function mc_woo_slider_register_init(){



	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){

		deactivate_plugins( plugin_basename( __FILE__ ) );

		die('<p class="error">Please install and activate Woocommerce Plugin before using Woocom Slider</p>');

	} 

		

       $settings_array=array(

                    'w_slider_width' => 600,

				    'w_slider_height' => 300,

				    'w_slider_type'=>'Thumbs',

				    'w_slider_autoplay' => 'true',

				    'w_slider_autoplayorientation' =>1,

				    'w_slider_dragorientation'=>3,

				    'w_slider_duration' => 500,

				    'w_slider_pauseonhover' => 'true',

				    'w_slider_autoplayinterval' => 4000,

				    'w_slider_autoplaysteps' =>1,

				    'w_slider_arrowkeynav' => 'true',

				    'w_slider_showarrownav' => 1,

				    'w_slider_arrowsteps' =>1,

				    'w_slider_showthumbnav' => 2,

				    'w_slider_thumbnavaction' => 1,					'w_slider_thumbnavai_position'=>'over',

				    'w_slider_thumb_nav_lanes' => 1,

				    //'w_slider_thumbnavorientation' => 1,

				    'w_slider_thumbnavdrag' => 'false',



				    'w_slider_showbulletnav'=>1,					'w_slider_bullet_position'=>'over',

'w_slider_bullet_nav_lanes'=>1,

 'w_slider_bulletsteps'=>1,



'w_slider_vthumb_nav_lanes'=>1,

  'w_slider_vthumbnavaction'=>1,
    'w_slider_thumb_width'=>70,
'w_slider_thumb_height'=> 70,
'w_slider_lane_color'=>'white',

 'w_slider_activate_lightbox'=>'yes',
    'w_slider_alwaysShowNavOnTouchDevices'=>'no',
'w_slider_disableScrolling'=> 'no',
'w_slider_showImageNumberLabel'=>'yes',
 'w_slider_wrapAround'=>'no',
    'w_slider_fadeDuration'=>500,
'w_slider_positionFromTop'=> 50,
'w_slider_resizeDuration'=>700,


     	);

       add_option('mc_woo_slider_settings',$settings_array);



}



       

function myplugin_plugin_path() {

  // gets the absolute path to this plugin directory

  return untrailingslashit( plugin_dir_path( __FILE__ ) );

}

function check_gallery_exist_of_a_product(){
global $post;
if(is_product()==false) return false;
 $attachment_ids=get_post_meta( $post->ID, '_product_image_gallery',false );
 $arr=explode(',',$attachment_ids[0]);
 return (count($arr)>0 && $arr[0]);

}

function locate_template_for_wooslider($template_names, $load = false, $require_once = true ) {

  $located = '';
  foreach ( (array) $template_names as $template_name ) {
  
    if ( !$template_name )
      continue;
    if ( file_exists(STYLESHEETPATH . '/' . $template_name) && $template_name=='woocommerce/single-product/product-image.php') {
      $located = myplugin_plugin_path().'/woocommerce/single-product/product-image.php';
	 
      break;
    
   }
   else if ( file_exists(TEMPLATEPATH . '/' . $template_name) ) {
      $located = TEMPLATEPATH . '/' . $template_name;
      break;
    }
  }

  if ( $load && '' != $located )
    load_template( $located, $require_once );

  return $located;

}


add_filter( 'woocommerce_locate_template', 'myplugin_woocommerce_locate_template', 10, 3 );

function myplugin_woocommerce_locate_template( $template, $template_name, $template_path ) {

if(!check_gallery_exist_of_a_product()){ /*if no gallery found redirect to the default template***/
remove_filter( 'woocommerce_locate_template', 'myplugin_woocommerce_locate_template', 10, 3 );

}


  global $woocommerce;

  $_template = $template;



  if ( ! $template_path ) $template_path = $woocommerce->template_url;

    $plugin_path  = myplugin_plugin_path() . '/woocommerce/';

  // Look within passed path within the theme - this is priority

  $template = locate_template_for_wooslider(

    array(

      $template_path . $template_name,

      $template_name

    )

  );



  // Modification: Get the template from this plugin, if it exists

  if ( ! $template && file_exists( $plugin_path . $template_name ) )

    $template = $plugin_path . $template_name;



  // Use default template

  if ( ! $template )

    $template = $_template;



  // Return what we found

  return $template;

}

function woo_slider_settings(){

	$settings=get_option('mc_woo_slider_settings');

	if($settings && is_array($settings)){

         $settings_array=array(

                    'w_slider_width' => $settings['w_slider_width'],

				    'w_slider_height' => $settings['w_slider_height'],

				    'w_slider_type'=>$settings['w_slider_type'],

				    'w_slider_autoplay' => ($settings['w_slider_autoplay']=='true') ? true :false,

				     'w_slider_autoplayorientation' => $settings['w_slider_autoplayorientation'],

				     'w_slider_dragorientation'=>$settings['w_slider_dragorientation'],

				    'w_slider_duration' => $settings['w_slider_duration'],

				    'w_slider_pauseonhover' => ($settings['w_slider_pauseonhover']=='true') ? 1 :0,

				    'w_slider_autoplayinterval' => $settings['w_slider_autoplayinterval'],

				    'w_slider_autoplaysteps' =>$settings['w_slider_autoplaysteps'],

				    'w_slider_arrowkeynav' => ($settings['w_slider_arrowkeynav']=='true') ? true :false,

				    'w_slider_showarrownav' => ($settings['w_slider_showarrownav']=='3') ? 0 :(int)$settings['w_slider_showarrownav'],

				    'w_slider_arrowsteps' => $settings['w_slider_arrowsteps'],

				    'w_slider_showthumbnav' => ($settings['w_slider_showthumbnav']=='3') ? 0 :(int)$settings['w_slider_showthumbnav'],

				    'w_slider_thumbnavaction' => ($settings['w_slider_thumbnavaction']=='4') ? 0 :(int)$settings['w_slider_thumbnavaction'],

				    'w_slider_thumb_nav_lanes' => $settings['w_slider_thumb_nav_lanes'],

				  //  'w_slider_thumbnavorientation' => $settings['w_slider_thumbnavorientation'],

				    'w_slider_thumbnavdrag' => ($settings['w_slider_thumbnavdrag']=='false') ? false :true,



				    'w_slider_showbulletnav' => ($settings['w_slider_showbulletnav']=='3') ? 0 :(int)$settings['w_slider_showbulletnav'],

				    'w_slider_bullet_nav_lanes' => $settings['w_slider_bullet_nav_lanes'],

                     'w_slider_bulletsteps' => $settings['w_slider_bulletsteps'],



                     'w_slider_vthumb_nav_lanes' => $settings['w_slider_vthumb_nav_lanes'],

                     'w_slider_vthumbnavaction' => ($settings['w_slider_vthumbnavaction']=='4') ? 0 :(int)$settings['w_slider_vthumbnavaction'],  



         	);

         

	}else{

           $settings_array=array(

                    'w_slider_width' => 600,

				    'w_slider_height' => 300,

				     'w_slider_type'=>'Thumbs',

				    'w_slider_autoplay' => true,

				    'w_slider_autoplayorientation' =>1,

				    'w_slider_dragorientation'=>3,

				    'w_slider_duration' => 500,

				    'w_slider_pauseonhover' =>1,

				    'w_slider_autoplayinterval' => 4000,

				    'w_slider_autoplaysteps' =>1,

				    'w_slider_arrowkeynav' => true,

				    'w_slider_showarrownav' => 1,

				    'w_slider_arrowsteps' => 1,

				    'w_slider_showthumbnav' => 2,

				    'w_slider_thumbnavaction' => 1,

				    'w_slider_thumb_nav_lanes' =>1,

				  //  'w_slider_thumbnavorientation' => 1,

				    'w_slider_thumbnavdrag' => false,



				    				    'w_slider_showbulletnav'=>1,

'w_slider_bullet_nav_lanes'=>1,

 'w_slider_bulletsteps'=>1,



 'w_slider_vthumb_nav_lanes'=>1,

  'w_slider_vthumbnavaction'=>1,



         	);

	}

	return $settings_array;

}



function woo_slider_lightbox_settings(){
	
	$settings=get_option('mc_woo_slider_settings');

	if($settings && is_array($settings)){

         $settings_array=array(

                    'w_slider_activate_lightbox' => ($settings['w_slider_activate_lightbox']=='yes') ? true :false,
				    'w_slider_alwaysShowNavOnTouchDevices' => ($settings['w_slider_alwaysShowNavOnTouchDevices']=='yes') ? true :false,
				    'w_slider_disableScrolling'=>($settings['w_slider_disableScrolling']=='yes') ? true :false,
				    'w_slider_showImageNumberLabel' => ($settings['w_slider_showImageNumberLabel']=='yes') ? true :false,
				     'w_slider_wrapAround' => ($settings['w_slider_wrapAround']=='yes') ? true :false,
				     'w_slider_fadeDuration'=>$settings['w_slider_fadeDuration'],
				    'w_slider_positionFromTop' => $settings['w_slider_positionFromTop'],
					'w_slider_resizeDuration' => $settings['w_slider_resizeDuration'],
					);
	}else{
		  $settings_array=array(

                        'w_slider_activate_lightbox'=>'yes',
						'w_slider_alwaysShowNavOnTouchDevices'=>'no',
						'w_slider_disableScrolling'=> 'no',
						'w_slider_showImageNumberLabel'=>'yes',
						'w_slider_wrapAround'=>'no',
						'w_slider_fadeDuration'=>500,
						'w_slider_positionFromTop'=> 50,
						'w_slider_resizeDuration'=>700,
					);
		
	}
	return $settings_array;
	
}

/*************************************************************************************************************************************************************/

/*************** admin functions************************************************************************************************/

/*************************************************************************************************************************************************************/

//admin menu

require_once('admin/mc_woocommerce_slider_menu.php');



/************************************************************************************************************************************************************/

/*************************************required scripts and styles******************************************/

/************************************************************************************************************************************************************/

function mc_woo_slider_scripts(){   

    wp_enqueue_script( 'jquery');

    if(is_single() && is_product()){
		
		global $post;
		
		$images = get_post_meta($post->ID, '_product_image_gallery',false );
		
		if(!isset($images[0]) || !$images[0])return;
		

    	$settings=get_option('mc_woo_slider_settings');



    	if($settings['w_slider_type']==='Dots')

        wp_enqueue_script('mc_woo_jsor_slider', MAYA_WOO_SLIDER_JS.'/jssor.slider.mini-dots.js',array('jquery'),'1.0', false);

        else if($settings['w_slider_type']==='Thumbs')

        wp_enqueue_script('mc_woo_jsor_slider', MAYA_WOO_SLIDER_JS.'/jssor.slider.mini-thumbs.js',array('jquery'),'1.0', false);

        else

          wp_enqueue_script('mc_woo_jsor_slider', MAYA_WOO_SLIDER_JS.'/jssor.slider.mini-thumbs-vertical.js',array('jquery'),'1.0', false);

          	

         wp_localize_script( 'mc_woo_jsor_slider', 'mcWooSliderParam', woo_slider_settings());
		 
		 
		if(isset($settings['w_slider_activate_lightbox']) && $settings['w_slider_activate_lightbox']=='yes' ){
			
			wp_enqueue_script('mc_woo_lightbox', MAYA_WOO_SLIDER_JS.'/lightbox.js',array('jquery'),'1.0', true);
			wp_enqueue_script('lightbox_woo_action', MAYA_WOO_SLIDER_JS.'/lightbox_woo_action.js',array('jquery','mc_woo_lightbox'),'1.0', true);
			
			 wp_localize_script( 'lightbox_woo_action', 'mcWooLightBoxParam', woo_slider_lightbox_settings());
		}
		

    }

 

}

add_action('wp_print_scripts', 'mc_woo_slider_scripts');



function mc_woo_slider_styles() {
	
	

  if(is_singular('product')){
	  
	  global $post;
		
		$images = get_post_meta($post->ID, '_product_image_gallery',false );
		
		if(!isset($images[0]) || !$images[0])return;
	  
      $settings=get_option('mc_woo_slider_settings');
     wp_enqueue_style('mc_woo_slider_style', MAYA_WOO_SLIDER_CSS.'/front/mc_wooslider_styles.css',array() , '1.0.0', 'screen');
	 
	 
	 if(isset($settings['w_slider_activate_lightbox']) && $settings['w_slider_activate_lightbox']=='yes' ){
			
			wp_enqueue_style('mc_woo_slider_lightbox_style', MAYA_WOO_SLIDER_CSS.'/front/lightbox.css',array(),'1.0.0', 'screen');
		}
		
  }

  

}

add_action('wp_print_styles', 'mc_woo_slider_styles');



function mc_woo_slider_admin_styles() {

     wp_enqueue_style('mc_woo_slider_admin_style', MAYA_WOO_SLIDER_CSS.'/admin/mc_wooslider_admin_styles.css',array() , '1.0.0', 'screen');

}

add_action('admin_print_styles', 'mc_woo_slider_admin_styles');


