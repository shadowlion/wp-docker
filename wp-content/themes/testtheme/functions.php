<?php

function wpbootstrap_enqueue_styles() {
	wp_enqueue_style(
		'bootstrap',
		'//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
	);

	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

?>
