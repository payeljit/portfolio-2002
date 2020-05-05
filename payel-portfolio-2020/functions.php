<?php
// Add menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Add featured image to wordpress editor
add_theme_support( 'post-thumbnails' );
// Activate html5
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );


function load_stylesheets() {

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), false, 'all');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js() {
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(),'', false );
  wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'', true );
   wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, true );
  wp_enqueue_script('custom-js',get_stylesheet_directory_uri().'/assets/js/main.js',array('js'),NULL,false);

	}

add_action( 'wp_enqueue_scripts', 'load_js' );
