<?php

add_action( 'after_setup_theme','themes_setup_func' );
function themes_setup_func(){
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
}




?>