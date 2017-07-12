<?php 
function getCustomPost()
{
		register_post_type('homepageslider',array(
      'labels' => array(
          'name' => "custom_hmpslider",
          'menu_name' =>"Custom HomePageSlider",
          'all_items' => "AllCustom_HPG_Slider",
          'add_new' => 'AddNewSlider',
          'add_new_item' =>'Add A Custom HomePage Slider'
      	),
      'public'=> true,
      'supports' => array(
            'title','editor','thumbnail','page-attributes','revisions','author'
      	)
	));

}
add_action('init','getCustomPost');

?>