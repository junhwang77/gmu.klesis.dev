<?php

function wpshout_enqueue_my_theme_stylesheet( ) {
	wp_enqueue_style(
		'my-theme',
		get_template_directory_uri() . '/style.css'
	);
}
add_action( 'wp_enqueue_scripts', 'wpshout_enqueue_my_theme_stylesheet' );
