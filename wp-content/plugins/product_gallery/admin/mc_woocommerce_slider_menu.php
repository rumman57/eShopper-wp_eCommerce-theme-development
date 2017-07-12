<?php
add_action('admin_menu', 'mc_woo_slider_menu');
function mc_woo_slider_menu(){

add_menu_page('Product Gallery Slider', 'Product Gallery Slider', 'administrator', 'mc_woo_slider_settings','mc_woo_slider_settings');
}
function mc_woo_slider_settings(){ 

    if(isset($_POST['save_mc_woo_slider_settings']) && $_POST['save_mc_woo_slider_settings'] ){

     $updated_settings=array(

     'w_slider_width'=>($_POST['w_slider_width']) ? trim( sanitize_text_field($_POST['w_slider_width'])) : 600,
     'w_slider_height'=>($_POST['w_slider_height'])? trim( sanitize_text_field($_POST['w_slider_height'])) :300,
      'w_slider_type'=>($_POST['slider_type'][0]) ? trim( sanitize_text_field($_POST['slider_type'][0])) :'Thumbs',
     'w_slider_autoplay'=>($_POST['w_slider_autoplay']) ? trim( sanitize_text_field($_POST['w_slider_autoplay'])) :'true',
      'w_slider_autoplayorientation'=>($_POST['w_slider_autoplayorientation']) ? trim( sanitize_text_field($_POST['w_slider_autoplayorientation'])) :1,
      'w_slider_dragorientation'=>($_POST['w_slider_dragorientation']) ? trim( sanitize_text_field($_POST['w_slider_dragorientation'])) :3,
     'w_slider_duration'=>($_POST['w_slider_duration']) ?trim( sanitize_text_field($_POST['w_slider_duration'])) :500,
     'w_slider_pauseonhover'=>($_POST['w_slider_pauseonhover']) ?trim( sanitize_text_field($_POST['w_slider_pauseonhover'])) :'true',
     'w_slider_autoplayinterval'=>($_POST['w_slider_autoplayinterval']) ?trim( sanitize_text_field($_POST['w_slider_autoplayinterval'])) :4000,
     'w_slider_autoplaysteps'=>($_POST['w_slider_autoplaysteps']) ?trim( sanitize_text_field($_POST['w_slider_autoplaysteps'])) :1,
     'w_slider_arrowkeynav'=>($_POST['w_slider_arrowkeynav']) ?trim( sanitize_text_field($_POST['w_slider_arrowkeynav'])) :'true',
      'w_slider_showarrownav'=>($_POST['w_slider_showarrownav']) ?trim( sanitize_text_field($_POST['w_slider_showarrownav'])) :1,
      'w_slider_arrowsteps'=>($_POST['w_slider_arrowsteps']) ?trim( sanitize_text_field($_POST['w_slider_arrowsteps'])) :1,
      'w_slider_showthumbnav'=>($_POST['w_slider_showthumbnav']) ?trim( sanitize_text_field($_POST['w_slider_showthumbnav'])) :1,
      'w_slider_thumbnavaction'=>($_POST['w_slider_thumbnavaction']) ?trim( sanitize_text_field($_POST['w_slider_thumbnavaction'])) :1,	  	  'w_slider_thumbnavai_position'=>($_POST['w_slider_thumbnavai_position']) ?trim( sanitize_text_field($_POST['w_slider_thumbnavai_position'])) :'over',
       'w_slider_thumb_nav_lanes'=>($_POST['w_slider_thumb_nav_lanes']) ?trim( sanitize_text_field($_POST['w_slider_thumb_nav_lanes'])) :1,
     //  'w_slider_thumbnavorientation'=>($_POST['w_slider_thumbnavorientation']) ?trim( sanitize_text_field($_POST['w_slider_thumbnavorientation'])) :1,

        'w_slider_thumbnavdrag'=>($_POST['w_slider_thumbnavdrag']) ?trim( sanitize_text_field($_POST['w_slider_thumbnavdrag'])) :'false',
         'w_slider_h_thumb_width'=>($_POST['w_slider_h_thumb_width']) ? trim( sanitize_text_field($_POST['w_slider_h_thumb_width'])) : 70,
         'w_slider_h_thumb_height'=>($_POST['w_slider_h_thumb_height']) ? trim( sanitize_text_field($_POST['w_slider_h_thumb_height'])) : 70,
'w_slider_showbulletnav'=>($_POST['w_slider_showbulletnav']) ?trim( sanitize_text_field($_POST['w_slider_showbulletnav'])) :1, 'w_slider_bullet_position'=>($_POST['w_slider_bullet_position']) ?trim( sanitize_text_field($_POST['w_slider_bullet_position'])) :'over',
'w_slider_bullet_nav_lanes'=>($_POST['w_slider_bullet_nav_lanes']) ?trim( sanitize_text_field($_POST['w_slider_bullet_nav_lanes'])) :1,
 'w_slider_bulletsteps'=>($_POST['w_slider_bulletsteps']) ?trim( sanitize_text_field($_POST['w_slider_bulletsteps'])) :1,
 'w_slider_vthumb_nav_lanes'=>($_POST['w_slider_vthumb_nav_lanes']) ?trim( sanitize_text_field($_POST['w_slider_vthumb_nav_lanes'])) :1,
  'w_slider_vthumbnavaction'=>($_POST['w_slider_vthumbnavaction']) ?trim( sanitize_text_field($_POST['w_slider_vthumbnavaction'])) :1,
  'w_slider_thumb_width'=>($_POST['w_slider_thumb_width']) ? trim( sanitize_text_field($_POST['w_slider_thumb_width'])) : 70,
'w_slider_thumb_height'=>($_POST['w_slider_thumb_height']) ? trim( sanitize_text_field($_POST['w_slider_thumb_height'])) : 70,
'w_slider_lane_color'=>($_POST['w_slider_lane_color']) ? trim( sanitize_text_field($_POST['w_slider_lane_color'])) : 'white',

'w_slider_activate_lightbox'=>($_POST['w_slider_activate_lightbox']) ? trim( sanitize_text_field($_POST['w_slider_activate_lightbox'])) : 'no',
'w_slider_alwaysShowNavOnTouchDevices'=>($_POST['w_slider_alwaysShowNavOnTouchDevices']) ? trim( sanitize_text_field($_POST['w_slider_alwaysShowNavOnTouchDevices'])) : 'no',
'w_slider_disableScrolling'=>($_POST['w_slider_disableScrolling']) ? trim( sanitize_text_field($_POST['w_slider_disableScrolling'])) : 'no',
'w_slider_showImageNumberLabel'=>($_POST['w_slider_showImageNumberLabel']) ? trim( sanitize_text_field($_POST['w_slider_showImageNumberLabel'])) : 'no',
'w_slider_wrapAround'=>($_POST['w_slider_wrapAround']) ? trim( sanitize_text_field($_POST['w_slider_wrapAround'])) : 'no',
'w_slider_fadeDuration'=>($_POST['w_slider_fadeDuration']) ? trim( sanitize_text_field($_POST['w_slider_fadeDuration'])) : 500,
'w_slider_positionFromTop'=>($_POST['w_slider_positionFromTop']) ? trim( sanitize_text_field($_POST['w_slider_positionFromTop'])) : 50,
'w_slider_resizeDuration'=>($_POST['w_slider_resizeDuration']) ? trim( sanitize_text_field($_POST['w_slider_resizeDuration'])) : 700,




     );

     update_option('mc_woo_slider_settings',$updated_settings);
       $update_message='<p class="saved_message">Successfully Updated Your Settings</p>';
    }


       $settings=get_option('mc_woo_slider_settings');
	?>
    <div class="woo_slider_settings_wrapper">
      <form name="woo_slider_settings_form" id="woo_slider_settings_form" action="" method="post">

        <?php echo $update_message; ?>

               <div class="settings_section">

                      <h2 class="section_header">Configuration Settings</h2>
                      <div class="fields">
                                 <label for="w_slider_width">Slider Width</label>
                                 <input name="w_slider_width" id="w_slider_width" class="wtext" value="<?php echo  $settings['w_slider_width'];?>" /> px
                      </div>
                      <div class="fields">

                                 <label for="w_slider_height">Slider Height</label>
                                 <input name="w_slider_height" id="w_slider_height" class="text" value="<?php echo  $settings['w_slider_height'];?>" /> px
                      </div>
               </div>
                 <div class="settings_section">
                      <h2 class="section_header">Slider Type</h2>
                      <div class="fields">

                         <span class="radio_field">
                           <label for="slider_type_thumbs">Thumb Slider</label>
                           <input type="radio" name="slider_type[]" id="slider_type_thumbs" value="Thumbs" class="mc_woo_slider_type" <?php if($settings['w_slider_type']==='Thumbs') echo 'checked';?>/>
                          </span> 
                          <span class="radio_field">
                            <label for="slider_type_v_thumbs">Vertical Thumb Slider</label>
                           <input type="radio" name="slider_type[]" id="slider_type_v_thumbs" value="VThumbs" class="mc_woo_slider_type"  <?php if($settings['w_slider_type']==='VThumbs') echo 'checked';?>/>
                          </span>
                          <span class="radio_field">
                            <label for="slider_type_dots">Dotted Slider</label>
                           <input type="radio" name="slider_type[]" id="slider_type_dots" value="Dots" class="mc_woo_slider_type"  <?php if($settings['w_slider_type']==='Dots') echo 'checked';?>/>
                          </span>
                      </div>
                </div>
                <div class="settings_section">
                      <h2 class="section_header">General Slider Controller Settings</h2>
                      <div class="fields">
                                 <label for="w_slider_autoplay">Auto Play</label>



                                 <select name="w_slider_autoplay" id="w_slider_autoplay" class="wselect">



                                   <option value="true" <?php if($settings['w_slider_autoplay']==='true') echo "selected";?> >True</option>



                                   <option value="false" <?php if($settings['w_slider_autoplay']==='false') echo "selected";?>>False</option>



                                  </select> 



                                   



                      </div>



                       <div class="fields">



                                 <label for="w_slider_autoplay">Auto Play Orientation</label>



                                 <select name="w_slider_autoplayorientation" id="w_slider_autoplayorientation" class="wselect">



                                   <option value="1" <?php if($settings['w_slider_autoplayorientation']==='1') echo "selected";?> >Horizontal</option>



                                   <option value="2" <?php if($settings['w_slider_autoplayorientation']==='2') echo "selected";?>>Vertical</option>



                                    <option value="5" <?php if($settings['w_slider_autoplayorientation']==='5') echo "selected";?>> Horizontal Reverse</option>



                                    <option value="6" <?php if($settings['w_slider_autoplayorientation']==='6') echo "selected";?>> Vertical Reverse</option>



                                  </select> 



                                  <span class="description">Orientation to play slide</span>   



                      </div>







                       <div class="fields">



                                <div class="fields">



                                 <label for="w_slider_dragorientation">Drag Orientation</label>



                                 <select name="w_slider_dragorientation" id="w_slider_dragorientation" class="wselect">



                                   <option value="1" <?php if($settings['w_slider_dragorientation']=='1') echo "selected";?>>Horizontal</option>



                                   <option value="2" <?php if($settings['w_slider_dragorientation']=='2') echo "selected";?>>Vertical</option>



                                    <option value="3" <?php if($settings['w_slider_dragorientation']=='3') echo "selected";?>>Both Horizontal and Vertical</option>



                                    <option value="4" <?php if($settings['w_slider_dragorientation']=='4') echo "selected";?>>No Drag</option>



                                  </select> 



                                  <span class="description">Orientation to drag slide</span>   



                               </div>



                      </div>







                      <div class="fields">



                                 <label for="w_slider_duration">Slide Duration</label>



                                 <input name="w_slider_duration" id="w_slider_duration" class="wtext" value="<?php echo  $settings['w_slider_duration'];?>" /> ms



                                 <span class="description">Specifies default duration (swipe) for slide in milliseconds</span>   



                      </div>



                      <div class="fields">



                                 <label for="w_slider_pauseonhover">Pause On hover</label>



                                 <select name="w_slider_pauseonhover" id="w_slider_pauseonhover" class="wselect">



                                   <option value="true" <?php if($settings['w_slider_pauseonhover']==='true') echo "selected";?>>True</option>



                                   <option value="false" <?php if($settings['w_slider_pauseonhover']==='false') echo "selected";?>>False</option>



                                  </select> 



                                  <span class="description">Whether to pause when mouse over if a slider is auto playing</span>   



                      </div>



                      <div class="fields">



                                 <label for="w_slider_autoplayinterval">Auto Play Interval</label>



                                 <input name="w_slider_autoplayinterval" id="w_slider_autoplayinterval" class="wtext" value="<?php echo  $settings['w_slider_autoplayinterval'];?>"/> ms



                                 <span class="description">Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing</span>   



                      </div>



                     







                      <div class="fields">



                                 <label for="w_slider_autoplaysteps">Auto Play Steps</label>



                                 <input name="w_slider_autoplaysteps" id="w_slider_autoplaysteps" class="wtext"  value="<?php echo  $settings['w_slider_autoplaysteps'];?>"/>



                                 <span class="description">Steps to go for each navigation request</span>   



                      </div>







                      <div class="fields">



                                 <label for="w_slider_arrowkeynav">Arrow Key Navigation</label>



                                 <select name="w_slider_arrowkeynav" id="w_slider_arrowkeynav" class="wselect">



                                   <option value="true" <?php if($settings['w_slider_arrowkeynav']==='true') echo "selected";?> >True</option>



                                   <option value="false" <?php if($settings['w_slider_arrowkeynav']==='false') echo "selected";?> >False</option>



                                  </select> 



                                  <span class="description">Allows keyboard (arrow key) navigation or not</span>   



                      </div>







               </div>







                <div class="settings_section">



                      <h2 class="section_header">Arrow Navigation Options</h2>



                      <div class="fields">



                                <div class="fields">



                                 <label for="w_slider_showarrownav">Show Arrow Navigation</label>



                                 <select name="w_slider_showarrownav" id="w_slider_showarrownav" class="wselect">



                                   <option value="1" <?php if($settings['w_slider_showarrownav']=='1') echo "selected";?>>Show on Mouse Over</option>



                                   <option value="2" <?php if($settings['w_slider_showarrownav']=='2') echo "selected";?>>Show Always</option>



                                    <option value="3" <?php if($settings['w_slider_showarrownav']=='3') echo "selected";?>>Never</option>



                                  </select> 



                                  <span class="description">Describes the way of showing arrow navigation.</span>   



                               </div>



                      </div>



                      



                      <div class="fields">



                                 <label for="w_slider_arrowsteps">Steps</label>



                                 <input name="w_slider_arrowsteps" id="w_slider_arrowsteps" class="wtext" value="<?php echo  $settings['w_slider_arrowsteps'];?>" />



                                 <span class="description">Steps to go for each navigation request on clicking arrow navigation</span>   



                      </div>   







                 </div>











                  <div class="settings_section settings_section_slider_types <?php if($settings['w_slider_type']==='Thumbs'){ ?> show <?php } ?>" id="thumb_nav_settings">



                      <h2 class="section_header">Thumb Navigation Options</h2>

                      <div class="fields">
                                <div class="fields">
                                 <label for="w_slider_showthumbnav">Show Thumb Navigation</label>
                                 <select name="w_slider_showthumbnav" id="w_slider_showthumbnav" class="wselect">

                                   <option value="1" <?php if($settings['w_slider_showthumbnav']=='1') echo "selected";?>>Show on Mouse Over</option>
                                   <option value="2" <?php if($settings['w_slider_showthumbnav']=='2') echo "selected";?>>Show Always</option>
                                    <option value="3">Never</option>
                                  </select> 
                                  <span class="description" <?php if($settings['w_slider_showthumbnav']=='3') echo "selected";?>>Describes the way of showing thumb navigation.</span>   
                               </div>
                      </div>
                      <div class="fields">
                                <div class="fields">
                                 <label for="w_slider_thumbnavaction">Thumb Navigation Action Mode</label>
                                 <select name="w_slider_thumbnavaction" id="w_slider_thumbnavaction" class="wselect">
                                   <option value="1" <?php if($settings['w_slider_thumbnavaction']=='1') echo "selected";?>>On Click</option>
                                   <option value="2" <?php if($settings['w_slider_thumbnavaction']=='2') echo "selected";?>>On Mouse Hover</option>
                                    <option value="3" <?php if($settings['w_slider_thumbnavaction']=='3') echo "selected";?>>Both Click and MouseHover</option>
                                    <option value="4" <?php if($settings['w_slider_thumbnavaction']=='4') echo "selected";?>>None</option>
                                  </select> 
                                  <span class="description"></span>   
                               </div>
                      </div>
                   					        <div class="fields">                                <div class="fields">                                 <label for="w_slider_thumbnavai_position">Thumb Navigation Position</label>                                                                  <select name="w_slider_thumbnavai_position" id="w_slider_thumbnavai_position" class="wselect">                                   <option value="over" <?php if($settings['w_slider_thumbnavai_position']=='over') echo "selected";?>>Over the product image</option>                                   <option value="out" <?php if($settings['w_slider_thumbnavai_position']=='out') echo "selected";?>>Outside the product image</option>                                  </select>                                   <span class="description"></span>                                  </div>                      </div>					 					

                     <!-- <div class="fields">



                                 <label for="w_slider_thumb_nav_lanes">Rows</label>



                                 <input name="w_slider_thumb_nav_lanes" id="w_slider_thumb_nav_lanes" class="wtext" value="<?php echo  $settings['w_slider_thumb_nav_lanes'];?>"/>



                                 <span class="description">Specify rows to arrange thumbnails</span>   



                      </div>-->







                    <!--  <div class="fields">



                                <div class="fields">



                                 <label for="w_slider_thumbnavorientation">Orientaion</label>



                                 <select name="w_slider_thumbnavorientation" id="w_slider_thumbnavorientation" class="wselect">



                                   <option value="1"  <?php if($settings['w_slider_thumbnavorientation']=='1') echo "selected";?>  >Horizental</option>



                                   <option value="2" <?php if($settings['w_slider_thumbnavorientation']=='2') echo "selected";?> >Vertical</option>



                                  </select> 



                                  <span class="description">Orientation to arrange thumbnails</span>   



                               </div>



                      </div>-->







                       <div class="fields">



                                 <label for="w_slider_thumbnavdrag">Disable Drag</label>



                                 <select name="w_slider_thumbnavdrag" id="w_slider_thumbnavdrag" class="wselect">



                                   <option value="false" <?php if($settings['w_slider_thumbnavdrag']=='false') echo "selected";?>>False</option>



                                    <option value="true" <?php if($settings['w_slider_thumbnavdrag']=='true') echo "selected";?>>True</option>



                                  </select> 



                                  <span class="description">Disable drag or not</span>   



                      </div>   



                       <div class="fields">



                                 <label for="w_slider_h_thumb_width">Thumb Width</label>



                                 <input name="w_slider_h_thumb_width" id="w_slider_h_thumb_width" class="wtext" value="<?php echo  $settings['w_slider_h_thumb_width'];?>" /> px



                      </div>



                      <div class="fields">



                                 <label for="w_slider_h_thumb_height">Thumb Height</label>



                                 <input name="w_slider_h_thumb_height" id="w_slider_h_thumb_height" class="text" value="<?php echo  $settings['w_slider_h_thumb_height'];?>" /> px



                      </div>







                 </div>











               



                    <div class="settings_section settings_section_slider_types <?php if($settings['w_slider_type']==='Dots'){ ?> show <?php } ?>" id="bullet_nav_settings" >



                      <h2 class="section_header">Bullet Navigation Options</h2>



                      <div class="fields">



                                <div class="fields">



                                 <label for="w_slider_showbulletnav">Show Bullet Navigation</label>



                                 <select name="w_slider_showbulletnav" id="w_slider_showbulletnav" class="wselect">



                                   <option value="1" <?php if($settings['w_slider_showbulletnav']=='1') echo "selected";?>>Show on Mouse Over</option>



                                   <option value="2" <?php if($settings['w_slider_showbulletnav']=='2') echo "selected";?>>Show Always</option>



                                    <option value="3">Never</option>



                                  </select> 



                                  <span class="description" <?php if($settings['w_slider_showbulletnav']=='3') echo "selected";?>>Describes the way of showing thumb navigation.</span>   



                               </div>



                      </div>					  					  								  					       <div class="fields">                                <div class="fields">                                 <label for="w_slider_bullet_position">Bullet Navigation Position</label>                                                                  <select name="w_slider_bullet_position" id="w_slider_bullet_position" class="wselect">                                   <option value="over" <?php if($settings['w_slider_bullet_position']=='over') echo "selected";?>>Over the product image</option>                                   <option value="out" <?php if($settings['w_slider_bullet_position']=='out') echo "selected";?>>Outside the product image</option>                                  </select>                                   <span class="description"></span>                                  </div>                      </div>					 					



                      <div class="fields">



                                 <label for="w_slider_bulletsteps">Steps</label>



                                 <input name="w_slider_bulletsteps" id="w_slider_bulletsteps" class="wtext" value="<?php echo  $settings['w_slider_bulletsteps'];?>" />



                                 <span class="description">Steps to go for each navigation request on clicking bullet</span>   



                      </div> 



                      



                      <div class="fields">



                                 <label for="w_slider_bullet_nav_lanes">Rows</label>



                                 <input name="w_slider_bullet_nav_lanes" id="w_slider_bullet_nav_lanes" class="wtext" value="<?php echo  $settings['w_slider_bullet_nav_lanes'];?>"/>



                                 <span class="description">Specify rows to arrange bulltes</span>   



                      </div>



                      



                 </div>







                 <div class="settings_section settings_section_slider_types <?php if($settings['w_slider_type']==='VThumbs'){ ?> show <?php } ?>" id="vertical_thumb_nav_settings" >



                      <h2 class="section_header">Vertical Thumb Navigation Options</h2>



                      <div class="fields">



                            <div class="fields">



                                 <label for="w_slider_vthumb_nav_lanes">Columns</label>



                                 <input name="w_slider_vthumb_nav_lanes" id="w_slider_vthumb_nav_lanes" class="wtext" value="<?php echo  $settings['w_slider_vthumb_nav_lanes'];?>"/>



                                 <span class="description">Specify columns to arrange thumbs</span>   



                           </div>







                      </div>







                      <div class="fields">



                                <div class="fields">
                                 <label for="w_slider_vthumbnavaction">Thumb Navigation Action Mode</label>
                                 <select name="w_slider_vthumbnavaction" id="w_slider_vthumbnavaction" class="wselect">
                                   <option value="1" <?php if($settings['w_slider_vthumbnavaction']=='1') echo "selected";?>>On Click</option>
                                   <option value="2" <?php if($settings['w_slider_vthumbnavaction']=='2') echo "selected";?>>On Mouse Hover</option>
                                    <option value="3" <?php if($settings['w_slider_vthumbnavaction']=='3') echo "selected";?>>Both Click and MouseHover</option>
                                    <option value="4" <?php if($settings['w_slider_vthumbnavaction']=='4') echo "selected";?>>None</option>
                                  </select> 
                                  <span class="description"></span>   
                               </div>							   							   							   						
                      </div>



                       <div class="fields">



                                 <label for="w_slider_thumb_width">Thumb Width</label>



                                 <input name="w_slider_thumb_width" id="w_slider_thumb_width" class="wtext" value="<?php echo  $settings['w_slider_thumb_width'];?>" /> px



                      </div>



                      <div class="fields">



                                 <label for="w_slider_thumb_height">Thumb Height</label>



                                 <input name="w_slider_thumb_height" id="w_slider_thumb_height" class="text" value="<?php echo  $settings['w_slider_thumb_height'];?>" /> px



                      </div>



                      <div class="fields">



                                <div class="fields">



                                 <label for="w_slider_lane_color">Thumb Background Color</label>



                                 <select name="w_slider_lane_color" id="w_slider_lane_color" class="wselect">



                                   <option value="white" <?php if($settings['w_slider_lane_color']=='white') echo "selected";?>>White</option>



                                   <option value="black" <?php if($settings['w_slider_lane_color']=='black') echo "selected";?>>Black</option>



                                    <option value="gray" <?php if($settings['w_slider_lane_color']=='gray') echo "selected";?>>Gray</option>



                                   



                                  </select> 



                                  <span class="description"></span>   



                               </div>



                      </div>











                  </div>





                   <div class="settings_section" id="lightbox_settings" >
				       <h2 class="section_header">Lightbox Settings</h2>
					   
					    <div class="fields">
						   <input type="checkbox" id="w_slider_activate_lightbox" name="w_slider_activate_lightbox" <?php if($settings['w_slider_activate_lightbox']=='yes') echo "checked";?> value="yes" />
						   <label for="w_slider_activate_lightbox">Activate lightbox effect</label>
						
						</div>
						
						<div id="lightbox_sub_settings" <?php if($settings['w_slider_activate_lightbox']=='yes') { ?>style="display:block;" <?php  } ?>>
						
						   <div class="fields">
						      <input type="checkbox" id="w_slider_alwaysShowNavOnTouchDevices" name="w_slider_alwaysShowNavOnTouchDevices" <?php if($settings['w_slider_alwaysShowNavOnTouchDevices']=='yes') echo "checked";?> value="yes" />
						   <label for="w_slider_alwaysShowNavOnTouchDevices">Always show navigation on touch devices</label>
						   <span class="description">If set, the left and right navigation arrows which appear on mouse hover when viewing image sets will always be visible on devices which support touch.</span>
						   
						   </div>
						   
						   <div class="fields">
						       <input type="checkbox" id="w_slider_disableScrolling" name="w_slider_disableScrolling" <?php if($settings['w_slider_disableScrolling']=='yes') echo "checked";?> value="yes" />
						   <label for="w_slider_disableScrolling">Disable scrolling</label>
						   <span class="description">If set, prevent the page from scrolling while Lightbox is open. This works by settings overflow hidden on the body.</span>

						   </div>
						   
						   <div class="fields">
						       <input type="checkbox" id="w_slider_showImageNumberLabel" name="w_slider_showImageNumberLabel" <?php if($settings['w_slider_showImageNumberLabel']=='yes') echo "checked";?> value="yes" />
						   <label for="w_slider_showImageNumberLabel">Show image number label</label>
						   <span class="description">	If false, the text indicating the current image number and the total number of images in set (Ex. "image 2 of 4") will be hidden.</span>

						   </div>
						   
						   <div class="fields">
						       <input type="checkbox" id="w_slider_wrapAround" name="w_slider_wrapAround" <?php if($settings['w_slider_wrapAround']=='yes') echo "checked";?> value="yes" />
						   <label for="w_slider_wrapAround">Wrap around</label>
						   <span class="description">If set, when a user reaches the last image in a set, the right navigation arrow will appear and they will be to continue moving forward which will take them back to the first image in the set.</span>

						   </div>
						   
						   
						   
						    <div class="fields">
                                 <label for="w_slider_fadeDuration">Fade duration</label>
                                 <input name="w_slider_fadeDuration" id="w_slider_fadeDuration" class="text" value="<?php echo  $settings['w_slider_fadeDuration'];?>" /> ms
                                <span class="description">The time it takes for the Lightbox container and overlay to fade in and out, in milliseconds.</span>
                           </div>
						   
						   
						    <div class="fields">
                                 <label for="w_slider_positionFromTop">Position from top</label>
                                 <input name="w_slider_positionFromTop" id="w_slider_positionFromTop" class="text" value="<?php echo  $settings['w_slider_positionFromTop'];?>" /> px
                                <span class="description">	The distance from top of viewport that the Lightbox container will appear, in pixels.</span>
                           </div>
						   
						   
						<div class="fields">
                                 <label for="w_slider_resizeDuration">Resize duration</label>
                                 <input name="w_slider_resizeDuration" id="w_slider_resizeDuration" class="text" value="<?php echo  $settings['w_slider_resizeDuration'];?>" /> ms
                                <span class="description">	The time it takes for the Lightbox container to animate its width and height when transition between different size images, in milliseconds.</span>
                           </div>
						
						</div>
				   
				   </div>











                 <input type="submit" class="button button-primary" name="save_mc_woo_slider_settings" id="save_mc_woo_slider_settings" value="Save Settings"/>



      </form>







      <script>



             jQuery(document).ready(function($){
				 
				 
				 var lightBoxSubSettingsWrapper=$('#lightbox_sub_settings');
				 
				     $('#w_slider_activate_lightbox').on('change',function(){
						 
						if($('#w_slider_activate_lightbox:checked').length)
							lightBoxSubSettingsWrapper.show();
						else
							lightBoxSubSettingsWrapper.hide();
						 
					 })



                      $('.mc_woo_slider_type').change(function(){



                           var thisVal=$(this).val();



                          $('.woo_slider_settings_wrapper .settings_section_slider_types').removeClass('show');



                          if(thisVal==='Dots')



                           $('#bullet_nav_settings').addClass('show');



                          if(thisVal==='Thumbs')



                           $('#thumb_nav_settings').addClass('show');



                          if(thisVal==='VThumbs')



                           $('#vertical_thumb_nav_settings').addClass('show');



                      });







             });







      </script>



    </div>











<?php }