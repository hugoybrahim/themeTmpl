<?php

function assets() {
    // add Google fonts
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Staatliches&display=swap", array(), false, 'all');
    wp_enqueue_style("google-fonts-kulim", "https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap", array(), false, 'all');

    // add Bootstrap
    wp_enqueue_style( "bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",array(),"5.3.3","all" );

    // Slick Carousel
    wp_enqueue_style("slick", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css", array(), false, 'all');
    wp_enqueue_style("slick-theme", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css", array(), false, 'all');
    wp_enqueue_style("slick-caro", "https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css", array(), false, 'all');

    // Main Stylesheet
    wp_enqueue_style("styles", get_template_directory_uri(). "assets/css/style.css", array("google-fonts","google-fonts-kulim", "bootstrap", "slick", "slick-theme", "slick-caro"));

    // jQuery
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.0.min.js", array(), false, true);

    // Slick Carousel JS
    wp_enqueue_script("slick", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", array('jquery'), false, true);
    wp_enqueue_script("slick-caro", "https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js", array('jquery', 'slick'), false, true);

    // Custom Scripts
    wp_enqueue_script("scripts", get_template_directory_uri(). "assets/js/script.js", array('jquery', 'slick', 'slick-caro'), false, true);
}
add_action("wp_enqueue_scripts","assets");


// Menu

function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('after_setup_theme', 'register_my_menu');


// Add Theme supports

function my_theme_supports() {
    add_theme_support( "title-tag"); // If you don't want to put a title in the header
    add_theme_support("post-thumbnails"); // Thumbnail image for a post or page
    add_theme_support("custom-logo",array(
        "width"         => 170,
        "height"        => 35,
        "flex-width"    => true,
        "flex-height"   => true,
    )); //
}
add_action( "after_setup_theme","my_theme_supports" );