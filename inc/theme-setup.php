<?php defined( 'ABSPATH' ) || exit; ?>
<?php
//Activate important theme features
if ( ! function_exists( 'webbma_theme_setup' ) ) {
    function webbma_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
        //Add menues
        register_nav_menu('main-menu', __( 'Huvudmenyn', 'webbma' ));
        register_nav_menu('footer-menu-1', __( 'Sidfotsmeny 1', 'webbma' ));
        register_nav_menu('footer-menu-2', __( 'Sidfotsmeny 1', 'webbma' ));
        
        //Image sizes
        add_image_size( 'image-600-500', 600, 500, array( 'center', 'center' )); 
        add_image_size( 'image-1000-600', 1000, 600, array( 'center', 'center' )); 
    }
}
add_action('after_setup_theme','webbma_theme_setup');


//Add custom post types
function webbma_custom_post_types() {
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Tjänster', 'webbma'),
            'singular_name' => __('Tjänst', 'webbma')
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'tjanster'),
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-hammer',
    ));

    //Reviews
    register_post_type('reviews', array(
        'labels' => array(
            'name' => __('Recensioner', 'webbma'),
            'singular_name' => __('Recension', 'webbma')
        ),
        'public' => false,
        'show_in_menu' => true,
        'show_ui' => true,
        'has_archive' => false,
        'rewrite' => false,

        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-thumbs-up',
    ));

    //Staff
    register_post_type('staff', array(
        'labels' => array(
            'name' => __('Medarbetare', 'webbma'),
            'singular_name' => __('Medarbetare', 'webbma')
        ),
        'public' => false,
        'show_in_menu' => true,
        'show_ui' => true,
        'has_archive' => false,
        'rewrite' => false,

        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-businessman',
    ));

}
add_action('init', 'webbma_custom_post_types');


