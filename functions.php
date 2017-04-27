<?php

function mu_rcm_enqueue_scripts() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mu_rcm_enqueue_scripts', 20 );
