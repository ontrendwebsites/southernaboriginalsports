<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/library/css/style.css' );
}

function add_files() {

  wp_enqueue_script( 'remodal-script', get_stylesheet_directory_uri() . '/library/remodal/remodal.min.js', array(), '' );

	// custom js
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/library/js/custom.js?v=1');


  wp_enqueue_style( 'remodal-style', get_stylesheet_directory_uri() . '/library/remodal/remodal.min.css', array(), '' );
  wp_enqueue_style( 'remodal-themestyle', get_stylesheet_directory_uri() . '/library/remodal/remodal-default-theme.min.css', array(), '' );

	// custom stylesheet
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/library/css/custom.css?v=4');
}

add_action( 'wp_enqueue_scripts', 'add_files' );

?>