<?php defined( 'ABSPATH' ) || exit; ?>
<?php
//Enque scripts and styles
function webbma_theme_scripts() {
	/* Styles */
	wp_enqueue_style( 'webbma-style', get_template_directory_uri() . '/dist/bundle.min.css', [], '1.0.0');
	wp_enqueue_script( 'webbma-script', get_template_directory_uri() . '/dist/bundle.min.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'webbma_theme_scripts' );
