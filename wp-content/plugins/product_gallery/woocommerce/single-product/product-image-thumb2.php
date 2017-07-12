<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

$slider_settings=get_option('mc_woo_slider_settings');
$slider_width=$slider_settings['w_slider_width'].'px';
$slider_height=$slider_settings['w_slider_height'].'px';

?>

 <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" class="woocommerce-images" style="position: relative; top: 0px; left: 0px; width: <?php echo $slider_width;?>; height: <?php echo $slider_height;?>; overflow: hidden; ">

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
                        <img u="image" src="<?php echo $image[0];?>" />
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
        <div u="thumbnavigator" class="jssort03" style="position: absolute; width: <?php echo $slider_width;?>; height: 60px; left:0px; bottom: 0px;">
            <div style=" background-color: #000; filter:alpha(opacity=30); opacity:.3; width: 100%; height:100%;"></div>

            <!-- Thumbnail Item Skin Begin -->
           
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 62px; HEIGHT: 32px; TOP: 0; LEFT: 0;">
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