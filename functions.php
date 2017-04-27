<?php
/**
 * Jobify Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Jobify Child 1.0.0
 */

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
function jobify_child_styles() {
    wp_enqueue_style( 'jobify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'jobify_child_styles', 20 );

function jobify_child_setup() {
    register_nav_menus( array(
		'primary'       => __( 'Navigation Menu', 'jobify' ),
    	'secondary'       => __( 'Secondary Nav Menu', 'jobify' ),
		'footer-social' => __( 'Footer Social', 'jobify' )
	) );
}
//add_action( 'after_setup_theme', 'jobify_child_setup' );

// Add your own function to filter the fields
add_filter( 'submit_resume_form_fields', 'custom_submit_resume_form_fields' );

// This is your function which takes the fields, modifies them, and returns them
function custom_submit_resume_form_fields( $fields ) {

    // Here we target one of the job fields (candidate name) and change it's label
    $fields['resume_fields']['candidate_title']['label'] = "Specialization *";
    $fields['resume_fields']['candidate_title']['placeholder'] = "e.g., Paediatrics, Cardiology..";
    $fields['resume_fields']['candidate_title']['required'] = true;
    $fields['resume_fields']['candidate_location']['placeholder'] = 'e.g., "Abu Dhabi, UAE", "Dubai"';
    
    //Make name and email required
    $fields['resume_fields']['candidate_name']['required'] = true;
    $fields['resume_fields']['candidate_name']['label'] = "Your Name *";
    
	$fields['resume_fields']['candidate_email']['required'] = true;
	$fields['resume_fields']['candidate_email']['label'] = "Your Email *";
	
    // Unset any of the fields you'd like to remove - copy and repeat as needed
    unset( $fields['resume_fields']['candidate_photo'] );
	unset( $fields['resume_fields']['candidate_video'] );

    // And return the modified fields
    return $fields;
}