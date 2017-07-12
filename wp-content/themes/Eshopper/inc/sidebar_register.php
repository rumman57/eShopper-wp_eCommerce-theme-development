<?php 

add_action( 'widgets_init', 'sidebar_register' );
function sidebar_register() {
    register_sidebar( array(
        'name'          => __( 'Shop Left Sidbar', 'theme-slug' ),
        'id'            => 'sfs_sidebar',
        'description'   => __( 'Shop Sidebar' ),
        'before_widget' => '<div class="left-sidebar">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h2>',
	    'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Header Search', 'theme-slug' ),
        'id'            => 'hsearch',
        'description'   => __( 'Only For Header Woocommerce Serch Box ' ),
        'before_widget' => '<div class="search_box pull-right">',
	    'after_widget'  => '</div>',
	    'before_title'  => '',
	    'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Home Page Sidebar', 'theme-slug' ),
        'id'            => 'homesidebar',
        'description'   => __( 'For Homepage Sidebar ' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'theme-slug' ),
        'id'            => 'blogsidebar',
        'description'   => __( 'For Blog Page Sidebar ' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Sidbar 1', 'theme-slug' ),
        'id'            => 'ftsidbar1',
        'description'   => __( 'For Footer1 Sidebar ' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Sidbar 2', 'theme-slug' ),
        'id'            => 'ftsidbar2',
        'description'   => __( 'For Footer2 Sidebar ' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Sidbar 3', 'theme-slug' ),
        'id'            => 'ftsidbar3',
        'description'   => __( 'For Footer3 Sidebar ' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Sidbar 4', 'theme-slug' ),
        'id'            => 'ftsidbar4',
        'description'   => __( 'For Footer4 Sidebar ' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Footer Sidbar 5', 'theme-slug' ),
        'id'            => 'ftsidbar5',
        'description'   => __( 'For Footer5 Sidebar ' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => __( 'Contact Info', 'theme-slug' ),
        'id'            => 'contactinfo',
        'description'   => __( 'For Footer5 Sidebar ' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="title text-center">',
        'after_title'   => '</h2>',
    ) );
    
   
}








?>