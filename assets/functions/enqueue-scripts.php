<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2.3', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '', true );

    // Add Twitter Fetcher
    wp_enqueue_script( 'twitter-fetcher-v16-js', get_template_directory_uri() . '/assets/js/twitterFetcher_V17.js', array(), '', true );

    // Add Twitter Fetcher
    wp_enqueue_script( 'twitter-fetcher-js', get_template_directory_uri() . '/assets/js/js_twitterfetcher.js', array(), '', true );

    // Add Jquery Sticky
    wp_enqueue_script( 'sticky-kit-js', get_template_directory_uri() . '/assets/js/sticky-kit.min.js', array(), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), '', 'all' );
    
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '', 'all' );

    wp_enqueue_style('remodaltheme-css', get_template_directory_uri() . '/assets/css/remodal-combined.css');
    wp_enqueue_script('remodal-js', get_template_directory_uri() . '/assets/js/remodal.min.js');

    if(is_page('contact-us')){
        // Add Maps script
         wp_enqueue_script('google-api', 'https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBdaP-lD1prvE6G9Popi3wWbwBPBIrNbLo&sensor=false', array(), '', true);
        wp_enqueue_script('chela-map', get_template_directory_uri() . '/assets/js/blaze-map.js', array(), '', true);
    }


    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);