<?php
/**
 * Jobify Classic child theme.
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Classic 1.0.0
 */
function jobify_child_styles() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jobify_child_styles', 20 );