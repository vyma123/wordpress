<?php

function follow_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'follow_theme_support');

function follow_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'follow_menus');





function follow_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('follow-style', get_template_directory_uri() . "/style.css", array('follow-bootstrap'), $version, 'all');
    wp_enqueue_style('follow-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('follow-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'follow_register_styles');

function follow_register_scripts(){

    wp_enqueue_script('follow-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('follow-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('follow-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('follow-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);    
}

add_action('wp_enqueue_scripts', 'follow_register_scripts');


function follow_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action( 'widgets_init', 'follow_widget_areas')

?>