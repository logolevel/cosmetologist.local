<?php

function register_styles() {
	wp_register_style('my-bootstrap', get_template_directory_uri() . 
        '/libs/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('my-bootstrap');
 
    wp_register_style('font-awesome', get_template_directory_uri() . 
        '/libs/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
 
    wp_register_style('style', get_template_directory_uri() . 
 		'/style.css');
    wp_enqueue_style('style'); 
 
}
add_action( 'wp_enqueue_scripts', 'register_styles' );

function load_my_script() {
  
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . 
 		'/libs/jquery/jquery.min.js');
    wp_enqueue_script('jquery');
  
    wp_register_script('bootstrap-js', get_template_directory_uri() . 
 		'/libs/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap-js');
  
    wp_register_script('bootstrap-validation', get_template_directory_uri() . 
 		'/libs/js/jqBootstrapValidation.js');
    wp_enqueue_script('bootstrap-validation');
  
    wp_register_script('contact-me', get_template_directory_uri() . 
        '/libs/js/contact_me.js');
    wp_enqueue_script('contact-me');
  
    wp_register_script('counterup', get_template_directory_uri() . 
        '/libs/counterup/jquery.countup.js');
    wp_enqueue_script('counterup');
  
    wp_register_script('waypoints', get_template_directory_uri() . 
 		'/libs/waypoints/jquery.waypoints.min.js');
    wp_enqueue_script('waypoints');

    wp_register_script('clean-blog', get_template_directory_uri() . 
 		'/libs/js/clean-blog.js');
    wp_enqueue_script('clean-blog');
	
}
 
add_action('wp_enqueue_scripts', 'load_my_script');

/*menu*/

register_nav_menu( 'menu', 'Main menu' );
