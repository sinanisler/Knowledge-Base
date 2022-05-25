<?php


/*
function si_knowledge_script() {
    wp_enqueue_script( 'si-knowledge', get_stylesheet_directory_uri() . '/js/siknowledge.js');
}
add_action( 'wp_enqueue_scripts', 'si_knowledge_script' );

wp_register_script ( 'si-knowledge', get_template_directory_uri() . '/js/siknowledge.js' );
wp_enqueue_script ( 'si-knowledge' );

*/




add_action( 'wp_enqueue_scripts', 'siknowledge' ); 

function siknowledge() {
	wp_enqueue_script(
	  'my-plugin-frontend',
	  get_template_directory_uri() . '/js/siknowledge.js',
	  ['wp-element'],
	  time(), // Change this to null for production
	  true
	);
}











?>