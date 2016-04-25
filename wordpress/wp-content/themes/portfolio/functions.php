<?php
function load_jquery() {
	wp_register_script( 'loadjquery', get_template_directory_uri() . '/js/bootstrap.js', array ('jquery') );

	wp_enqueue_script('loadjquery');


}

add_action( 'wp_enqueue_scripts', 'load_jquery');

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		));

?>