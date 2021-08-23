<?php

if (!function_exists( 'blank_template_setup' )){
	function blank_template_setup() {
		add_theme_support( 'post-thumbnails' ); //enables featured image
	}
}
add_action( 'after_setup_theme', 'blank_template_setup' );

// add_action( 'customize_register', function( $wp_customize ){
// 	$wp_customize->remove_section('static_front_page');
// });