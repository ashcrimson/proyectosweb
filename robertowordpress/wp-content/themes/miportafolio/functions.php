<?php
	/*
		================================
		Include scripts
		================================

	*/
function miportafolio_script_enqueue() {
	//css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/miportafolio.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '3.3.4', 'all' );
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js', array(), '3.3.4', true);
	
}

add_action( 'wp_enqueue_scripts', 'miportafolio_script_enqueue');
	/*
		================================
		Activate menus
		================================

	*/

function miportafolio_theme_setup(){

add_theme_support('menus');

register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'miportafolio_theme_setup');

	/*
		================================
		Theme support function
		================================

	*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
?>