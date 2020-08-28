<?php

add_filter('show_admin_bar', '__return_false');

function load_file()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );
    wp_enqueue_style('bootstrap.min.css', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), rand(111,9999), 'all' );

    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('app-mobile', get_stylesheet_directory_uri() . '/assets/css/app-mobile.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('all', get_stylesheet_directory_uri() . '/assets/css/all.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate', array(), rand(111,9999), 'all' );


    wp_enqueue_script( 'jquery.slim.min', get_stylesheet_directory_uri() . '/assets/js/jquery.slim.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'jquery.min', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'marquee.min', get_stylesheet_directory_uri() . '/assets/js/marquee.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'popper.min', get_stylesheet_directory_uri() . '/assets/bootstrap/js/popper.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'mini', get_stylesheet_directory_uri() . '/assets/js/mini.js', array(), rand(111,9999), 'all' );
}
add_action('wp_enqueue_scripts','load_file');

class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) 
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='dropdown-menu'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) 
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

add_theme_support( 'post-thumbnails' );
add_image_size('thumb-bt');

// function get_excerpt_length() {
//     return 20;
// }

function custom_excerpt_length( $length ) {
	return 19;
}

function return_excerpt_text(){
    return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'custom_excerpt_length', 99);