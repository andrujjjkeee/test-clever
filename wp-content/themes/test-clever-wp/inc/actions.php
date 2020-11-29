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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}
