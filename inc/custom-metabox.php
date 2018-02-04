<?php

add_action( 'cmb2_admin_init', 'cmb2_simple_metaboxes' );
function cmb2_simple_metaboxes() {

	$fields = new_cmb2_box(array(
		'id'    	  => 'test-metabox',
		'title' 	  => 'additional field',
		'object_types' => array('post', 'page'),
		'context' 	  => 'normal',
	));

	//title text and bg color
	$fields->add_field( array(
		'name' => 'Title Bg Color',
		'id'    => 'title-bg-color',
		'type'  => 'colorpicker'
	) );


	$fields->add_field( array(
		'name' => 'Title Text Color',
		'id'    => 'title-text-color',
		'type'  => 'colorpicker'
	) );

	//subtitle field text and bg color
	$fields->add_field( array(
		'name' => 'Subtitle Text Field',
		'id'    => 'sub',
		'type'  => 'text'
	) );

	$fields->add_field( array(
		'name' => 'Subtitle Bg color',
		'id'    => 'sub-bg-color',
		'type'  => 'colorpicker'
	) );


	$fields->add_field( array(
		'name' => 'Subtitle Text Color',
		'id'    => 'sub-text-color',
		'type'  => 'colorpicker'
	) );

	//Email fields create
	$fields->add_field( array(
		'name' => 'Email Text Field',
		'id'    => 'email',
		'type'  => 'text_email'
	) );

	$fields->add_field( array(
		'name' => 'Email Bg color',
		'id'    => 'email-bg-color',
		'type'  => 'colorpicker'
	) );


	$fields->add_field( array(
		'name' => 'Email Text Color',
		'id'    => 'email-text-color',
		'type'  => 'colorpicker'
	) );



}



?>