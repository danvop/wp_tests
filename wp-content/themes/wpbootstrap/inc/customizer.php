<?php

function wpb_customize_register($wp_customize){
    //Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase,' 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase')),
    ));
}

add_action('customize_register', 'wpb_customize_register');