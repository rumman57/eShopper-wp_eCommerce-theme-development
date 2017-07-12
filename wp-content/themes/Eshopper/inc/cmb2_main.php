<?php
add_action('cmb2_admin_init','getCMB2');
function getCMB2()
{
	$prefix = '_rumman_';
	$obj = new_cmb2_box( array(
        'id'            => 'Slider_metabox',
        'title'         => __( 'Slider Metabox', 'cmb2' ),
        'object_types'  => array('homepageslider'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );


    $obj->add_field( array(
        'name'       => __( 'H1 formating part with Color', 'cmb2' ),
        'desc'       => __( 'Give the color format part of the H1 formatting tag', 'cmb2' ),
        'id'         => $prefix . 'h1colorpart',
        'type'       => 'text',
        
    ) );
    $obj->add_field( array(
        'name'       => __( 'H1 formatting second part', 'cmb2' ),
        'desc'       => __( 'Give the H1 formatting second part', 'cmb2' ),
        'id'         => $prefix . 'h1secondpart',
        'type'       => 'text',    
    ) );
     $obj->add_field( array(
        'name'       => __( 'Give the H2 Part', 'cmb2' ),
        'desc'       => __( 'Give The part of the H2 formatting', 'cmb2' ),
        'id'         => $prefix . 'h2format',
        'type'       => 'text',    
    ) );
     $obj->add_field( array(
        'name'       => __( 'Description part', 'cmb2' ),
        'desc'       => __( 'Give the description of the slider body', 'cmb2' ),
        'id'         => $prefix . 'descpart',
        'type'       => 'textarea',    
    ) );
     $obj->add_field( array(
        'name'       => __( 'Button title', 'cmb2' ),
        'desc'       => __( 'Slider body button title', 'cmb2' ),
        'id'         => $prefix . 'bttntitlepart',
        'type'       => 'text',    
    ) );


     $businessTemplate = new_cmb2_box( array(
        'id'            => 'business_template_metabox',
        'title'         => __( 'Business Template Metabox', 'cmb2' ),
        'object_types'  => array('business_template'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
     $businessTemplate->add_field( array(
        'name'       => __( 'Template title', 'cmb2' ),
        'desc'       => __( 'Give The Template Title', 'cmb2' ),
        'id'         => $prefix . 'templatetitle',
        'type'       => 'text',
      ) );
     $businessTemplate->add_field( array(
        'name'       => __( 'Template icon', 'cmb2' ),
        'desc'       => __( 'Give The Template icon', 'cmb2' ),
        'id'         => $prefix . 'templateicon',
        'type'       => 'text',
      ) );
     $businessTemplate->add_field( array(
        'name'       => __( 'Template Description', 'cmb2' ),
        'desc'       => __( 'Give The Template Description', 'cmb2' ),
        'id'         => $prefix . 'templatedesc',
        'type'       => 'text',
      ) );
     $businessTemplate->add_field( array(
        'name'       => __( 'Template LInk Title', 'cmb2' ),
        'desc'       => __( 'Give The Template Link Title', 'cmb2' ),
        'id'         => $prefix . 'templatelinktitle',
        'type'       => 'text',
      ) );
     $businessTemplate->add_field( array(
        'name'       => __( 'Template LInk Link', 'cmb2' ),
        'desc'       => __( 'Give The Template Link Link', 'cmb2' ),
        'id'         => $prefix . 'templatelinklink',
        'type'       => 'text_url',
      ) );
    
     $portfolio = new_cmb2_box( array(
        'id'            => 'portfolio_metabox',
        'title'         => __( 'Portfolio Metabox', 'cmb2' ),
        'object_types'  => array('portfolio'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );
     $portfolio->add_field( array(
        'name'       => __( 'Zoom title', 'cmb2' ),
        'id'         => $prefix . 'zoomtitle',
        'type'       => 'text',
      ) );


}



//Using Format
//function cmb2_sample_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    //$prefix = '_yourprefix_';

    /**
     * Initiate the metabox
     */
   /* $cmb = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Test Text', 'cmb2' ),
        'desc'       => __( 'field description (optional)', 'cmb2' ),
        'id'         => $prefix . 'text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // URL text field
    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    // Email text field
    $cmb->add_field( array(
        'name' => __( 'Test Text Email', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'email',
        'type' => 'text_email',
        // 'repeatable' => true,
    ) );

    // Add other metaboxes as needed

}














/**


// Grab the metadata from the database
$text = get_post_meta( get_the_ID(), '_yourprefix_text', true );

// Echo the metadata
echo esc_html( $text );

 ///////////////////////


 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
get_header(); ?>

        <div id="primary">
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                    $text  = get_post_meta( get_the_ID(), '_yourprefix_text', true );
                    $email = get_post_meta( get_the_ID(), '_yourprefix_email', true );
                    $url   = get_post_meta( get_the_ID(), '_yourprefix_url', true );
                    echo esc_html( $text );
                    echo is_email( $email );
                    echo esc_url( $url );
                    ?>

                    <?php comments_template( '', true ); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->

 get_footer(); */





















?>