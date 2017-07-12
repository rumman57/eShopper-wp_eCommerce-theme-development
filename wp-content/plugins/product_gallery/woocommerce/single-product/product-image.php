<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post, $woocommerce, $product;
$slider_settings=get_option('mc_woo_slider_settings');
$slider_width=$slider_settings['w_slider_width'].'px';
$slider_height=$slider_settings['w_slider_height'].'px';
$settings=get_option('mc_woo_slider_settings');
?>
<?php if($settings['w_slider_type']==='Dots'){    $slider_bullet_new_height=($slider_settings['w_slider_bullet_position']=='out') ? ((int)$slider_settings['w_slider_height']+30).'px' : $slider_height;?>
 <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" class="woocommerce-images" style="position: relative; top: 0px; left: 0px; width: <?php echo $slider_width;?>; height: <?php echo $slider_bullet_new_height;?>; overflow: hidden; ">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides"  class="woocommerce-images" style="cursor: move; position: absolute; left: 0px; top: 0px; width: <?php echo $slider_width;?>; height: <?php echo $slider_height;?>; overflow: hidden;">
         <?php
                  $attachment_ids = $product->get_gallery_attachment_ids();
                       foreach ( $attachment_ids as $attachment_id ) {
        			$image_link = wp_get_attachment_url( $attachment_id );
        			if ( ! $image_link )
        				continue;
                   $image= wp_get_attachment_image_src( $attachment_id, 'full');
        			$thumb       = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
        			?>
                      <div>
                        <a href="<?php echo $image[0];?>" data-lightbox="maya-woo-gallery"><img u="image" src="<?php echo $image[0];?>" /></a>
                    </div>
        			<?php
        		}
        		?>
        </div>
        <!-- Bullet Navigator Skin Begin -->
        <!-- jssor slider bullet navigator skin 01 -->
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Navigator Skin Begin -->
        <style>
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
    </div>
    <!-- Jssor Slider End -->
    <?php }else if($settings['w_slider_type']==='Thumbs'){ 
           $settings=get_option('mc_woo_slider_settings');
             $v_h_slider_thumb_width=floatval($settings['w_slider_h_thumb_width']).'px';
              $v_h_slider_thumb_height=floatval($settings['w_slider_h_thumb_height']).'px';			  			  $v_h_new_height_with_out_of_thumb=($settings['w_slider_thumbnavai_position']=='out') ? ((int)$settings['w_slider_h_thumb_height']+(int)$slider_settings['w_slider_height']).'px'   : $slider_height;			  			  //echo $v_h_new_height_with_out_of_thumb;			 // $v_h_new_bottom_with_out_of_thumb=(-(int)$settings['w_slider_h_thumb_height']).'px';
        ?>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" class="woocommerce-images" style="position: relative; top: 0px; left: 0px; width: <?php echo $slider_width;?>; height: <?php echo $v_h_new_height_with_out_of_thumb;?>; overflow: hidden; ">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url('<?php echo MAYA_WOO_SLIDER_IMAGES;?>/loading.gif') no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: <?php echo $slider_width;?>; height: <?php echo $slider_height;?>; overflow: hidden;">
          <?php
                  $attachment_ids = $product->get_gallery_attachment_ids();
                       foreach ( $attachment_ids as $attachment_id ) {
                    $image_link = wp_get_attachment_url( $attachment_id );
                    if ( ! $image_link )
                        continue;
                   $image= wp_get_attachment_image_src( $attachment_id, 'full');
                    $thumb       = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
                    ?>
                      <div>
                        <a href="<?php echo $image[0];?>" data-lightbox="maya-woo-gallery"><img u="image" src="<?php echo $image[0];?>" /></a>
                        <img u="thumb" src="<?php echo $thumb[0];?>" />
                    </div>
                    <?php
                }
          ?>
        </div>
        <!-- Arrow Navigator Skin Begin -->
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
       </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="jssort03" style="position: absolute; width: <?php echo $slider_width;?>; height: <?php echo $v_h_slider_thumb_height;?>; left:0px; bottom:0">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: <?php echo $v_h_slider_thumb_width;?>; HEIGHT: <?php echo $v_h_slider_thumb_height;?>; TOP: 0; LEFT: 0;">
                    <div class=w><ThumbnailTemplate style=" WIDTH: 100%; HEIGHT: 100%; border: none;position:absolute; TOP: 0; LEFT: 0;"></ThumbnailTemplate></div>
                    <div class=c style="POSITION: absolute; BACKGROUND-COLOR: #000; TOP: 0; LEFT: 0">
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->     
    </div>
    <!-- Jssor Slider End -->
    <?php } else {

        $settings=get_option('mc_woo_slider_settings');

            $v_slider_lanes=(int)$settings['w_slider_vthumb_nav_lanes'];
              $v_slider_lane_color=$settings['w_slider_lane_color'];

             $v_sliderwidth=$slider_width;

             $v_slider_image_wrapper_width=(floatval($slider_width)).'px';

             $v_slider_thumb_wrapper_width=((floatval($settings['w_slider_thumb_width'])+10)*$v_slider_lanes).'px';
             $v_slider_thumb_width=floatval($settings['w_slider_thumb_width']).'px';
             $v_slider_thumb_height=floatval($settings['w_slider_thumb_height']).'px';

            

        ?>







        <!-- Jssor Slider Begin -->

    <!-- You can move inline styles to css file or css block. -->

    <div id="slider1_container" class="woocommerce-images" style="position: relative; top: 0px; left: 0px; width:<?php echo $v_sliderwidth;?>;

        height:<?php echo $slider_height;?>; background:<?php echo $v_slider_lane_color;?>;  overflow: hidden;">



        <!-- Loading Screen -->

        <div u="loading" style="position: absolute; top: 0px; left: 0px;">

            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">

            </div>

            <div style="position: absolute; display: block; background: url('<?php echo MAYA_WOO_SLIDER_IMAGES;?>/loading.gif') no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">

            </div>

        </div>



        <!-- Slides Container -->

        <div u="slides" style="cursor: move; position: absolute; left: <?php echo $v_slider_thumb_wrapper_width;?>; top: 0px; width: <?php echo $v_slider_image_wrapper_width;?>; height: <?php echo $slider_height;?>; overflow: hidden;">

             <?php

                  $attachment_ids = $product->get_gallery_attachment_ids();

                       foreach ( $attachment_ids as $attachment_id ) {



                    $image_link = wp_get_attachment_url( $attachment_id );



                    if ( ! $image_link )

                        continue;

                   $image= wp_get_attachment_image_src( $attachment_id, 'full');

                    $thumb       = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );

                    ?>

                      <div>

                        <a href="<?php echo $image[0];?>" data-lightbox="maya-woo-gallery"><img u="image" src="<?php echo $image[0];?>" /></a>

                        <img u="thumb" src="<?php echo $thumb[0];?>" />

                    </div>

                    <?php

                }

          ?>

            

        </div>

        

       

        <!-- Arrow Left -->

        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left:<?php echo ((floatval($settings['w_slider_thumb_width'])+10)*$v_slider_lanes+8);?>px;">

        </span>

        <!-- Arrow Right -->

        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">

        </span>

        <!-- Arrow Navigator Skin End -->

        

        <!-- Thumbnail Navigator Skin 02 Begin -->

        <div u="thumbnavigator" class="jssort02" style="position: absolute; width: <?php echo $v_slider_thumb_wrapper_width;?>; height: <?php echo $slider_height;?>; left:0px; bottom: 0px; overflow:hidden; padding:0 5px">

        

            <div u="slides" style="cursor: move;">

                <div u="prototype" class="p" style="position: absolute; width: <?php echo $v_slider_thumb_width; ?>; height: <?php echo $v_slider_thumb_height; ?>; top: 0; left: 0;">

                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>

                    <div class=c>

                    </div>

                </div>

            </div>

            <!-- Thumbnail Item Skin End -->

        </div>

        <!-- Thumbnail Navigator Skin End -->

       

    </div>

    <!-- Jssor Slider End -->

    <?php } ?>