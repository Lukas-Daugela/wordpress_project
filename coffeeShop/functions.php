<?php

function coffeeShop_theme_support(){
    // Adds dynamic title tag support
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

add_action('after_setup_theme', 'coffeeShop_theme_support');


function coffeShop_menus(){

    $locations = array(
        'primary' => "Desktop Primary Navbar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'coffeShop_menus');


function coffeeShop_register_styles()
{
    wp_register_style('coffeeShop-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('coffeeShop-bootstrap');

    wp_register_style('coffeeShop-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css", array(), null, 'all');
    wp_enqueue_style('coffeeShop-bootstrap-icons');

    // wp_register_style('coffeeShop-owl-style', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), null, 'all');
    // wp_enqueue_style('coffeeShop-owl-style');

    // wp_register_style('coffeeShop-owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), null, 'all');
    // wp_enqueue_style('coffeeShop-owl-theme');

    // wp_register_style('coffeeShop-owl-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), null, 'all');
    // wp_enqueue_style('coffeeShop-owl-animate');

    wp_register_style('coffeeShop-template-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('coffeeShop-template-styles');
    
}
add_action('wp_enqueue_scripts', 'coffeeShop_register_styles');



function coffeeShop_register_scripts()
{
    wp_register_script('coffeeShop-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('coffeeShop-jquery');

    wp_register_script('coffeeShop-owl-script', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(), null, 'all', true);
    wp_enqueue_script('coffeeShop-owl-script');

    wp_register_script('coffeeShop-carousel', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js", array(), null, 'all');
    wp_enqueue_script('coffeeShop-carousel');
    
    wp_register_script('coffeeShop-script', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
    wp_enqueue_script('coffeeShop-script');
}
add_action('wp_enqueue_scripts', 'coffeeShop_register_scripts');