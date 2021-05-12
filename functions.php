<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/style.css' );
}

function add_files() {

	// custom js
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/library/js/custom.js?v=1');

	// custom stylesheet
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/library/css/custom.css?v=1');
}

add_action( 'wp_enqueue_scripts', 'add_files' );

?>