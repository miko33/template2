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


function get_excerpt_length(){
  return 19;
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');




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

  add_filter('the_time', 'dynamictime');



  function clean_excerpt( $excerpt) {

        $excerpt = str_ireplace(array('kdbola.com','&ndash;','&#8211;','&#8212'),'' ,$excerpt);

        //  var_dump($excerpt);
       return $excerpt;
  }
  add_filter('get_the_excerpt','clean_excerpt');


  function widget_setup(){
      register_sidebar(array(
        'name' => "sidebar pertama",
        'id' => "sidebar1"
      ));

  }

  add_action('widgets_init','widget_setup');


  


/*=============================================
                BREADCRUMBS
=============================================*/
//  to include in functions.php
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '>'; // delimiter between crumbs
    $home = 'KDbola.com'; // text for the 'Home' link
    $showCurrent = 0; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
        }
    } else {
        echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
                if ($showCurrent == 1) {
                    echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
                }
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $cats;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs)-1) {
                    echo ' ' . $delimiter . ' ';
                }
            }
            if ($showCurrent == 1) {
                echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</div>';
    }
} // end the_breadcrumb()