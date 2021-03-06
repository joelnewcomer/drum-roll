<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.6.1', 'all' );
		
		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		// register scripts
		wp_register_script( 'header-scripts', get_template_directory_uri() . '/assets/javascript/header-scripts.js', array(), '1.0.0', false );
		wp_register_script( 'footer-scripts', get_template_directory_uri() . '/assets/javascript/footer-scripts.js', array('jquery'), '1.0.0', true );

		// enqueue scripts
		wp_enqueue_script('header-scripts');
		wp_enqueue_script('footer-scripts');

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
