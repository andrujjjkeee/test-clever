<?php

register_nav_menus( array(
	'menu' => 'common menu',
    'footer-menu' => 'footer-menu'
) );

// Add Favicon
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

function add_favicon(){
	$favicon_url = DIRECT . 'favicon/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

// Add Styles and Scripts
add_action('wp_enqueue_scripts', 'add_files');

function add_files(){

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', DIRECT . 'js/vendors/jquery-3.3.1.min.js', false, false, true);
	wp_enqueue_script('common_js', DIRECT . 'js/common.min.js', false, 1.1, true);

	wp_enqueue_style('common_css', DIRECT . 'css/common.css', false, 1.1);

}

acf_add_options_page(array(
    'page_title' 	=> 'Global Section',
    'menu_slug' 	=> 'global-sections',

));

acf_add_options_sub_page(array(
    'menu_title'	=> 'Social Links',
    'parent_slug'	=> 'global-sections',
));


