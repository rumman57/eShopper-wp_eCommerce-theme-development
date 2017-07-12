<?php

/*
* @Author 		pickplugins
* Copyright: 	2015 pickplugins
*/

if ( ! defined('ABSPATH')) exit;  // if direct access


class class_accordions_functions  {
	
	
    public function __construct(){
				
		//add_action( 'admin_menu', array( $this, 'admin_menu' ), 12 );
       //add_action('admin_menu', array($this, 'create_menu'));
    }
	




		
	public function accordions_themes($themes = array())
		{

			$themes = array( 
							'flat'=>'Flat',					
							'border-bottom'=>'Border Bottom',																		
							);
			
			foreach(apply_filters( 'accordions_themes', $themes ) as $theme_key=> $theme_name)
				{
					$theme_list[$theme_key] = $theme_name;
				}

			
			return $theme_list;

		}
	
		
		
	}
	
new class_accordions_functions();