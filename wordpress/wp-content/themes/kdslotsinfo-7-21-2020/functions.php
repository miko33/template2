<?php
add_filter('show_admin_bar', '__return_false');

function load_file()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), rand(111,9999), 'all' );
    wp_enqueue_style('bootstrap.min.css', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), rand(111,9999), 'all' );

    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('all', get_stylesheet_directory_uri() . '/assets/css/all.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate', array(), rand(111,9999), 'all' );
    wp_enqueue_style('owl.carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('css-maintenance', get_stylesheet_directory_uri() . '/assets/css/css-maintenance.css', array(), rand(111,9999), 'all' );
    wp_enqueue_style('tab', get_stylesheet_directory_uri() . '/assets/css/tab.css', array(), rand(111,9999), 'all' );


    wp_enqueue_script( 'jquery.slim.min', get_stylesheet_directory_uri() . '/assets/js/jquery.slim.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'jquery.min', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'marquee.min', get_stylesheet_directory_uri() . '/assets/js/marquee.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'popper.min', get_stylesheet_directory_uri() . '/assets/bootstrap/js/popper.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'bootstrap.min', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'owl.carousel.min', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), rand(111,9999), 'all' );
    wp_enqueue_script( 'my', get_stylesheet_directory_uri() . '/assets/js/my.js', array(), rand(111,9999), 'all' );
    
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() )
    {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"inner\">\n";
    }
}

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

add_action('wp_enqueue_scripts','load_file');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) )
    {
        $classes[] = 'active ';
    }
    return $classes;
}

function menu_id_page($item, $args)
{
  $page = get_post($args->object_id);
  $item = $page->post_name;
  return $item;
}

add_filter('nav_menu_item_id', 'menu_id_page', 10, 2);
