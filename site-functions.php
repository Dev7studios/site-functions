<?php
/*
Plugin Name: Site Functions
Description: Functionality changes to WordPress, plugins, and themes instead of using functions.php.
Version: 0.1
License: GPL
Author: Your Name
Author URI: yoururl
*/

// Sample filter and action code

/*

add_filter( 'example_filter', 'site_example_filter' );

function site_example_filter( $value ) {

}

add_action( 'example_action', 'site_example_action' );

function example_action() {

}

*/

// Add your code and snippets below

add_filter( 'nivoslider_settings_page_header', 'my_nivoslider_settings_page_header' );

function my_nivoslider_settings_page_header() {
	return 'Client Slider Settings';
}

add_filter( 'nivoslider_settings_intro', 'my_nivoslider_settings_intro' );

function my_nivoslider_settings_intro() {
	return 'Here you can do this and that...';
}