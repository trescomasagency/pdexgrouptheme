<?php

add_action("wp_enqueue_scripts", function() {

    wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), false, 'all');
    wp_register_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', array(), false, 'all');
    wp_register_style('roboto-slab', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap', array(), false, 'all');

    wp_enqueue_style('style', get_stylesheet_uri(), array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/styles/header.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('front', get_stylesheet_directory_uri() . '/assets/styles/front.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('about-us', get_stylesheet_directory_uri() . '/assets/styles/about.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('services', get_stylesheet_directory_uri() . '/assets/styles/services.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('contact-us', get_stylesheet_directory_uri() . '/assets/styles/contact-us.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('aviation', get_stylesheet_directory_uri() . '/assets/styles/aviation.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('products', get_stylesheet_directory_uri() . '/assets/styles/products.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('cards', get_stylesheet_directory_uri() . '/assets/styles/cards.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');

});

add_action('after_setup_theme', function() {
    add_theme_support('custom-logo', array(
        'flex-width'    => true,
        'flex-height'   => true
    ));

    add_theme_support('post-thumbnails');
});

add_action('after_setup_theme', function() {

    register_nav_menus(array(
        'menu_desktop'          => __("Desktop Menu", "pdexgroup"),
        'menu_desktop_spanish'  => __("Desktop Menu Spanish", "pdexgroup")
    ));

});

add_action('init', function() {

    $args = array(
        'label'                 => 'Products',
        'labels'                => array(
            'name'              => 'Products',
            'singular_name'     => 'product',
        ),
        'description'           => 'Products',
        'public'                => true,
        'hierarchical'          => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'show_in_rest'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-database',
        'supports'              => array('title', 'thumbnail', 'editor', 'custom-fields', 'page-attributes'),
        'rewrite'               => true
    );

    register_post_type('product', $args);

});