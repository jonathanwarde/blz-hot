<?php

/* Add custom image sizes to theme */

add_action( 'after_setup_theme', 'image_sizes' );
function image_sizes() {
    // To enable only for posts:
    //add_theme_support( 'post-thumbnails', array( 'post' ) );
    // To enable only for posts and custom post types:
    //add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
    // Register a new image size.
    // This means that WordPress will create a copy of the post image with the specified dimensions
    // when you upload a new image. Register as many as needed.
    // Adding custom image sizes (name, width, height, crop)

    //add_image_size('1280x720', 1280, 720, true); //(cropped)
    //add_image_size('960x540', 960, 540, true); //(cropped)
    //add_image_size('240x135', 240, 135, true); //(cropped)
    add_image_size('250x250', 250, 250, true); //(cropped)
    add_image_size('600x450', 600, 450, true); //(cropped)
    add_image_size('660x325', 650, 325, true); //(cropped)
    //add_image_size('75x50', 75, 50, true); //(cropped)
    //add_image_size('190x107', 190, 107, true); //(cropped)
    //set_post_thumbnail_size( 80, 80, true ); // 50 pixels wide by 50 pixels tall, crop mode
}

// Remove unwanted admin menu items

function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Blaze Talk'; // Change Posts to Blaze Talk

    //remove_menu_page('edit.php'); // Remove the Posts Menu
    //remove_menu_page('tools.php'); // Remove the Tools Menu
    //remove_submenu_page('options-general.php','options-discussion.php'); // Remove the Discussion submenu
    //remove_submenu_page('themes.php','nav-menus.php'); // Remove Appearance, Menus submenu
    //remove_submenu_page('themes.php','widgets.php'); // Remove Appearance, widgets submenu
    //remove_submenu_page('themes.php','customize.php'); // Remove Appearance, Customize submenu
}
add_action( 'admin_menu', 'edit_admin_menus' );


// Deregister Contact Form 7 CSS

add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}


?>