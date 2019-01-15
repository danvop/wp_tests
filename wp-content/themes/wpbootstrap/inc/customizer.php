<?php

function wpb_customize_register($wp_customize){
    //Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase'), 'wpbootstrap'),
        'priority' => 130
    ));
    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image','wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));
    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Custom Bootstrap Wordpress Theme', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));
    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));
    $wp_customize->add_setting('btn_url', array(
        'default' => _x(get_permalink( get_option( 'page_for_posts' ) ), 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
        'label' => __('Button URL','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ));
    $wp_customize->add_setting('btn_text', array(
        'default' => _x('Read More', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
        'label' => __('Button Text','wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));
    //End Showcase Section

    //Footer Socila Media Links Section

    $wp_customize->add_section( 'footer_social_icons' , array(
    'title' => __( 'Footer Social Icons', 'wpbootstrap' ),
    'priority' => 105, // Before Widgets.
    ));

    $wp_customize->add_setting('social_icon_1', array(
        'default' => __('fab fa-facebook', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social_icon_1', array(
        'label' => __('Social Icon 1','wpbootstrap'),
        'description' => __('Use FontAwesome icons'),
        'section' => 'footer_social_icons',
        'priority' => 1
    ));

    $wp_customize->add_setting('social_url_1', array(
        'default' => __('#', 'wpbootstrap'),
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control('social_url_1', array(
        'label' => __('Social URL 1','wpbootstrap'),
        'description' => __('Insert social URL'),
        'section' => 'footer_social_icons',
        'priority' => 2
    ));



}

add_action('customize_register', 'wpb_customize_register');