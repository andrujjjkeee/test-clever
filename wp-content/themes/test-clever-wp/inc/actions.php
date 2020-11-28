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

	wp_enqueue_style('preloader_css', DIRECT . 'css/preload.css', false, 1.1);
	wp_enqueue_style('common_css', DIRECT . 'css/common.css', false, 1.1);

}

// Add Languages Support
add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
	load_theme_textdomain( 'default', get_template_directory() . '/languages' );
}

// Prevent Update Plugins
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

function filter_plugin_updates( $update ) {
	global $DISABLE_UPDATE;

	if( !is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0 ){  return $update;  }

	foreach( $update->response as $name => $val ){
		foreach( $DISABLE_UPDATE as $plugin ){
			if( stripos($name,$plugin) !== false ){
				unset( $update->response[ $name ] );
			}
		}
	}

	return $update;
}
