<?php

add_action( 'after_setup_theme','themes_setup_func' );
function themes_setup_func(){
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'anoceanofsky',get_template_directory_uri().'/css/anoceanofsky.css' );
} )




?>