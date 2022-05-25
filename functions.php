<?php








wp_enqueue_script( 'si-knowledge', get_template_directory_uri() . '/js/siknowledge.js' , array('jquery'), '1', true);



/*
add_action( 'wp_enqueue_scripts', 'siknowledge' ); 
function siknowledge() {
	wp_enqueue_script(
	  'js-frontend',
	  get_template_directory_uri() . '/js/siknowledge.js',
	  ['wp-element'],
	  time(), // NULL LATER
	  true
	);
}
*/




/* LOAD WP ICONS :) */
add_action( 'wp_enqueue_scripts', 'dashicons_front_end' );
function dashicons_front_end() {

   wp_enqueue_style( 'dashicons' );

}






?>