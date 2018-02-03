<?php

add_action( 'cmb2_admin_init', 'cmb2_simple_metaboxes' );
function cmb2_simple_metaboxes() {

	$fields = new_cmb2_box(array(
		'id'    	  => 'test-metabox',
		'title' 	  => 'additional field',
		'object_types' => array('post', 'page'),
		'context' 	  => 'normal',
	));

	$fields->add_field( array(
		
	) );
}



?>