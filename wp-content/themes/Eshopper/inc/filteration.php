<?php 

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 ); //For the shop per page item filteration code



// custom excerpt length
function themify_custom_excerpt_length( $length ) {
   return 54;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   return '<a class="more-link" href="'. get_permalink($post->ID) . '">'. __('Read More', 'themify') .'</a>';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');



?>