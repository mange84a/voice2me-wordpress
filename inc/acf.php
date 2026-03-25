<?php defined( 'ABSPATH' ) || exit; ?>
<?php
/* Add optionspage to theme */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
		'menu_slug' 	=> 'theme-options',
		'menu_title' 	=> __('Temainställningar'),
		'page_title' 	=> __('Temainställningar'),
		'position' 		=> 60,
		'capability' => 'manage_options',
	]);
}

add_action('acf/init', function() {
    require_once(get_template_directory() . '/inc/acf-fields/flexible-content.php');
    require_once(get_template_directory() . '/inc/acf-fields/theme-settings.php');
    require_once(get_template_directory() . '/inc/acf-fields/page.php');
    require_once(get_template_directory() . '/inc/acf-fields/page_sidebar.php');
    require_once(get_template_directory() . '/inc/acf-fields/page_contact.php');
    require_once(get_template_directory() . '/inc/acf-fields/service.php');
    require_once(get_template_directory() . '/inc/acf-fields/reviews.php');
    require_once(get_template_directory() . '/inc/acf-fields/staff.php');
    require_once(get_template_directory() . '/inc/acf-fields/single.php');
});
