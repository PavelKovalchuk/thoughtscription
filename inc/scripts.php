<?php
/**
 * Enqueue scripts and styles.
 */
function ts_scripts() {
	wp_enqueue_style( 'ts-style', get_stylesheet_directory_uri() . '/style.css', array(), '0.0.1' );

    wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'ts-js', get_template_directory_uri() . '/build/js/main.min.js', array(), filemtime( get_theme_file_path('/build/js/main.min.js')), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ts_scripts', 200 );