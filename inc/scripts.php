<?php
/**
 * Enqueue scripts and styles.
 */
function stylewp_scripts() {
	wp_enqueue_style( 'stylewp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'stylewp-navigation', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stylewp_scripts' );