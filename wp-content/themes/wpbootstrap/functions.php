<?php

//Register Nav Walker class_alias

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme Support

function wpb_theme_setup(){
    //post thumbnails support
    //add featured image
    add_theme_support('post-thumbnails');

    //Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
        
}
add_action('after_setup_theme', 'wpb_theme_setup');

function set_excerpt_length(){
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

//widget Locations
function wpb_init_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="p-3">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init','wpb_init_widgets');