<?php

if ( function_exists('register_sidebar') )
     register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Top',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
    register_nav_menus(
        array(
            'menu-1' => __( 'Main Menu' ),
            'menu-2' => __( 'Sub Menu' )
        )
    );
}

remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
add_theme_support( 'post-thumbnails' ); 
?>