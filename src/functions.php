<?php

// Load the theme stylesheets
function theme_assets()
{
	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/app.css' );
	wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/dist/app.js', array('jquery'), 1, true );

}
add_action('wp_enqueue_scripts', 'theme_assets');

?>
