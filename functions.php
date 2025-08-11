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
    wp_enqueue_style('taxonomy', get_stylesheet_directory_uri() . '/assets/styles/taxonomy.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');
    wp_enqueue_style('single', get_stylesheet_directory_uri() . '/assets/styles/single.css', array('montserrat', 'open-sans', 'roboto-slab'), false, 'all');

});

add_action("wp_enqueue_scripts", function() {

    wp_enqueue_script('routing', get_template_directory_uri() . '/assets/js/routing.js', array(), false, 'all');

    wp_enqueue_script('controller-taxonomy', get_template_directory_uri() . '/assets/js/controllers/controllerTaxonomy.js', array(), false, 'all');
    wp_enqueue_script('view-taxonomy', get_template_directory_uri() . '/assets/js/views/viewTaxonomy.js', array('controller-taxonomy'), false, 'all');

     wp_enqueue_script('view-header', get_template_directory_uri() . '/assets/js/views/viewHeader.js', array('controller-taxonomy'), false, 'all');
    wp_enqueue_script('header', get_template_directory_uri() . '/assets/js/app-header.js', array('view-header'), false, 'all');
    wp_enqueue_script('taxonomy', get_template_directory_uri() . '/assets/js/app-taxonomy.js', array('routing', 'view-taxonomy'), false, 'all');

});

add_action("wp_enqueue_scripts", function() {

    wp_localize_script("controller-taxonomy", "controllertaxonomy", array(
        'rest_url'  => rest_url()
    ));

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

    register_post_type('product-pdex', $args);

});

add_action('rest_api_init', function() {

    register_rest_route('pdexgroup', 'products', array(
        'methods'               => 'GET',
        'callback'              => 'get_products',
        'permission_callback'   => function() {
            return true;
        }
    )); 

});

// API REST functions
function get_products($request) {

    $term  = $request['term'];
    $paged = $request['paged'];
    $data  = array();

    $taxonomy_query_arr = array(
        'post_type'         => 'product-pdex',
        'post_status'       => 'publish',
        'posts_per_page'    => 9,
        'paged'             => $paged,
        'order'             => 'ASC',
        'orderby'           => 'date',
        'tax_query'         => array(
            array(
                'taxonomy'  => 'product-category-pdex',
                'field'     => 'slug',
                'terms'     => array($term)
            )
        )
    );

    $query = new WP_Query($taxonomy_query_arr);

    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();

            $product_id     = get_the_ID(); 
            $image_id       = get_post_meta($product_id ,'id_imagen_producto', true);
            $image_url      = wp_get_attachment_image_url($image_id, 'id_imagen_producto', true);
            $contact_url    = get_post_meta($product_id, 'contact_url', true);
            $message        = "Hello, I would like to know more about this product: " . get_permalink($product_id);
            $message        = urlencode($message);

            $data[] = array(
                'title'         => get_the_title(),
                'content'       => substr(get_the_content(), 0, 200) . '...',
                'image_url'     => $image_url,
                'contact_url'   => $contact_url,
                'message'       => $message
            );

        }
    } else {
        wp_send_json_error(array(
            'data'      => null,
            'message'   => 'Not found'
        ), 404);
    }

    wp_send_json_success(array(
        'data'      => $data,
        'message'   => count($data) . ' results'
    ), 200); 

}