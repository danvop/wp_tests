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
    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="card mb-4 shadow-sm">',
        'after_widget' => '</div>',
        'before_title' => '<div class="card-header mb-2"><h4 class="my-0 font-weight-normal">',
        'after_title' => '</h4></div>'
    ));
    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="card mb-4 shadow-sm">',
        'after_widget' => '</div>',
        'before_title' => '<div class="card-header mb-2"><h4 class="my-0 font-weight-normal">',
        'after_title' => '</h4></div>'
    ));
    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="card mb-4 shadow-sm">',
        'after_widget' => '</div>',
        'before_title' => '<div class="card-header mb-2"><h4 class="my-0 font-weight-normal">',
        'after_title' => '</h4></div>'
    ));
    register_sidebar(array(
        'name' => 'Facebook Link',
        'id' => 'facebook_link',
        'before_widget' => '<a class="blog-footer-link" href="',
        'after_widget' => '"><i class="fab fa-facebook"></i></a>',
        'before_title' => '',
        'after_title' => ''
    ));
}

add_action('widgets_init','wpb_init_widgets');

// Front-page Customizer File
require get_template_directory(). '/inc/customizer.php';

add_action('widgets_init','register_my_widgets');

function register_my_widgets() {
    register_sidebar(array(
        'name' => 'test-widget',
        'id' => 'test-widget',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<a class="blog-footer-link" href="',
        'after_widget' => '"><i class="fab fa-facebook"></i></a>',
        'before_title' => '',
        'after_title' => '',
    ));
    register_widget( 'My_Text_Widget' );
}



class My_Text_Widget extends WP_Widget_Text {
    function widget( $args, $instance ) {

        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
        echo $before_widget;
        if ( !empty( $title ) ) { echo $before_title . $title . $after_title; } ?>
            <?php echo !empty( $instance['filter'] ) ? wpautop( $text ) : $text; ?>
        <?php
        echo $after_widget;
    }
}