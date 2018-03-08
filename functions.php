<?php

add_action( 'after_setup_theme','themes_setup_func' );
function themes_setup_func(){
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	load_theme_textdomain( 'simpletheme', get_template_directory_uri().'/language' );
	register_nav_menu( 'main-menu', __('Main Menu','simpletheme') );

	register_post_type('team',array(
		'labels' => array(
			'name' => 'Team',
			'add_new_item' => 'Add Team Member',

		),

		'public' => true,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title','thumbnail')


	));

}

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'anoceanofsky',get_template_directory_uri().'/css/anoceanofsky.css' );
	wp_enqueue_style( 'style',get_stylesheet_uri());
} );

require get_template_directory().'/inc/custom-metabox.php';


add_action( 'widgets_init',function(){

register_sidebar( array(
'name' => 'footer widget',
'id' => 'footer-wd',
'before_widget' => '<section>',
'after_widget' => '</section>',
));
register_sidebar( array(
'name' => 'Right Sidebar',
'description' => 'keep your Right Sidebar Widget here',
'id' => 'right-sidebar',
));
});

//shortcode
add_shortcode( 'ami', 'output_shortcode' );
function output_shortcode ($first,$content) {
	$output = shortcode_atts(array(
		"kalar" => 'blue',
		"text_align" => 'left',
		"font_size" => '20px',
		"text_transform" => '',

	),$first);

	extract($output);
	echo "<h1 style='text-align:".$text_align.";color:".$kalar.";font-size:".$font_size.";text-transform:".$text_transform."'>".do_shortcode($content)."</h1>";
}

add_shortcode( 'abar', function(){
	echo "<h1>Output</h1>";
} )
//TF Class-3 strated

?>

