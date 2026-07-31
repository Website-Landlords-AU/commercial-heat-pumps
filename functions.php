<?php
function chp_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
	register_nav_menus( array(
		'primary' => 'Primary Menu',
	) );
}
add_action( 'after_setup_theme', 'chp_theme_setup' );

function chp_enqueue_assets() {
	wp_enqueue_style( 'chp-google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'chp-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'chp_enqueue_assets' );
