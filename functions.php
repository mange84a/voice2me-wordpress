<?php
/* Composer */
require_once(__DIR__ . '/vendor/autoload.php');

/* Setup the theme */
require_once get_template_directory() . '/inc/webbma-helpers.php';
require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/acf.php';

//Disable gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);
//Disable gutenberg editor for widgets
add_filter('use_widgets_block_editor', '__return_false');

//Disable editor for some pages
add_action('admin_init', function() {

    //Front page
    $front_page_id = get_option('page_on_front');
    if (isset($_GET['post']) && $_GET['post'] == $front_page_id) {
        remove_post_type_support('page', 'editor');
    }
});


//Set excerpt length
function webbma_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'webbma_excerpt_length');

//Change excerpt more text
function webbma_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'webbma_excerpt_more');
