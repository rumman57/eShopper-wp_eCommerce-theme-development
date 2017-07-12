<?php
function getCssJs()
{
	wp_enqueue_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css","null","v1.20",'all');
	wp_enqueue_style('isotopstyle',get_template_directory_uri()."/css/isotop.css","null","v1.20",'all');

	wp_enqueue_style('fontawsm',get_template_directory_uri()."/css/font-awesome.min.css","null","v1.20",'all');

	wp_enqueue_style('prettyPhoto',get_template_directory_uri().'/css/prettyPhoto.css','null','v1.20','all');

	wp_enqueue_style('pricerange',get_template_directory_uri().'/css/price-range.css','null','v1.20','all');

	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css','null','v1.20','all');


	
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css','null','v1.20','all');

	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css','null','v1.20','all');
	wp_enqueue_style('styel',get_stylesheet_uri());


	wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('scrollUp',get_template_directory_uri().'/js/jquery.scrollUp.min.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('pricerangrjs',get_template_directory_uri().'/js/price-range.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('preetyPhotojs',get_template_directory_uri().'/js/jquery.prettyPhoto.js',array('jquery'),'v1.23',true);

	wp_enqueue_script('mainjs',get_template_directory_uri().'/js/main.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('isotop',get_template_directory_uri().'/js/isotop.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('isotopfunction',get_template_directory_uri().'/js/functionisotopo.js',array('jquery'),'v1.23',true);
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','getCssJs');



         // Na  dileu hbe
/*function getBelowFooter()
{ ?>

<script src="<?php echo get_template_directory_uri();?>/js/functionisotopo.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/isotop.js"></script>
  
<?php
}
add_action('wp_footer','getBelowFooter',30);*/


?>