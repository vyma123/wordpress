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
    wp_enqueue_style('follow-semantic', "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css", array(), '2.5.0', 'all');

}

add_action('wp_enqueue_scripts', 'follow_register_styles');

function follow_register_scripts(){

    wp_enqueue_script('follow-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('follow-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('follow-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('follow-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);    
    wp_enqueue_script('follow-jq', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('follow-se', 'https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js', array(), '2.4.1', true);


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

add_action( 'widgets_init', 'follow_widget_areas');


function custom_theme_customizer_register($wp_customize) {
    $wp_customize->add_section('custom_theme_options', array(
        'title'    => __('Theme Options', 'your-theme'),
        'priority' => 130,
    ));

    $wp_customize->add_setting('custom_adv_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_adv_image_control', array(
        'label'    => __('Upload Advertisement Image', 'your-theme'),
        'section'  => 'custom_theme_options',
        'settings' => 'custom_adv_image',
    )));

    $wp_customize->add_setting('custom_adv_title', array(
        'default'   => 'Text advertisement',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('custom_adv_title_control', array(
        'label'    => __('Advertisement Title', 'your-theme'),
        'section'  => 'custom_theme_options',
        'settings' => 'custom_adv_title',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('custom_adv_link', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('custom_adv_link_control', array(
        'label'    => __('Advertisement Link', 'your-theme'),
        'section'  => 'custom_theme_options',
        'settings' => 'custom_adv_link',
        'type'     => 'url',
    ));

    $wp_customize->add_setting('custom_adv_button_text', array(
        'default'   => 'Đặt ngay',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('custom_adv_button_text_control', array(
        'label'    => __('Button Text', 'your-theme'),
        'section'  => 'custom_theme_options',
        'settings' => 'custom_adv_button_text',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'custom_theme_customizer_register');


function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section('mytheme_address_section', array(
        'title'    => __('Thay đổi địa chỉ', 'mytheme'),
        'priority' => 30,
    ));

    $addresses = array(
        'address_1' => __('Address 1', 'mytheme'),
        'address_2' => __('Address 2', 'mytheme'),
        'address_3' => __('Address 3', 'mytheme'),
        'address_4' => __('Address 4', 'mytheme'),
    );

    foreach ($addresses as $key => $label) {
        $wp_customize->add_setting("mytheme_{$key}_setting", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("mytheme_{$key}_control", array(
            'label'    => $label,
            'section'  => 'mytheme_address_section',
            'settings' => "mytheme_{$key}_setting",
            'type'     => 'text',
        ));
    }
}
add_action('customize_register', 'mytheme_customize_register');


function mytheme_customize_register2($wp_customize) {
    $wp_customize->add_setting('mytheme_title_color_setting', array(
        'default'           => '#FF5733',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mytheme_title_color_control', array(
        'label'    => __('Tiêu đề chính', 'mytheme'),
        'section'  => 'colors',
        'settings' => 'mytheme_title_color_setting',
    )));

    $wp_customize->add_setting('mytheme_subtitle_color_setting', array(
        'default'           => '#2ECC71',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'mytheme_subtitle_color_control', array(
        'label'    => __('Tiêu đề phụ', 'mytheme'),
        'section'  => 'colors',
        'settings' => 'mytheme_subtitle_color_setting',
    )));

   



    
}
add_action('customize_register', 'mytheme_customize_register2');


function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
