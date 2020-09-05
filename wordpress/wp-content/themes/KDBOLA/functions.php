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
        $output .= "\n$indent<ul class='dropdown-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) 
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}

add_theme_support( 'post-thumbnails' );
add_image_size('thumb-bt');


function return_excerpt_text(){
    return '';
}

function new_excerpt_more( $more ) {
  return '';
}

function get_excerpt_length(){
  return 19;
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');
add_filter('get_the_excerpt','clean_excerpt');
add_filter('the_time', 'dynamictime');



function dynamictime() {
    global $post;
    $date = $post->post_date;
    $time = get_post_time('G', true, $post);
    $mytime = time() - $time;
    if($mytime > 0 && $mytime < 24*60*60)
      $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));
    else
      
      $mytimestamp = date_format(new DateTime($date) ,"d M Y h:i");
    return $mytimestamp;
  }



  function clean_excerpt( $excerpt) {

        $excerpt = str_ireplace(array('kdbola.com','&ndash;','&#8211;','&#8212'),'' ,$excerpt);

        //  var_dump($excerpt);
       return $excerpt;
  }