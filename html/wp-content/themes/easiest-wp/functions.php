<?php
function easiestwp_scripts()
{
    wp_enqueue_style('easiestwp-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'easiestwp_scripts');

function easiest_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'comment-form',
        'comment-list'
    ));
    add_image_size('easiestwp-thumbnail', 190, 130, true);
    add_image_size('easiestwp-hero', 1200, 630, true);
    register_nav_menus(array(
        'global' => 'Global Menu',
    ));
}
add_action('after_setup_theme', 'easiest_setup');

function easiestwp_widgets_init()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
    ));
    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer',
    ));
}
add_action('widgets_init', 'easiestwp_widgets_init');

function easiestwp_customize_register($wpc)
{
    $wpc->add_section('theme_options', array(
        'title' => 'Theme Options',
        'priority' => 130,
    ));

    for ($i = 1; $i <= 5; $i++) {
        $wpc->add_setting('front_page_content_' . $i, array(
            'default' => false,
            'sanitize_callback' => 'absint',
        ));
        $wpc->add_control('front_page_content_' . $i, array(
            'label' => 'Front Page Content ' . $i,
            'section' => 'theme_options',
            'type' => 'dropdown-pages',
            'allow_addition' => true,
        ));
    }
}
add_action('customize_register', 'easiestwp_customize_register');

function easiestwp_front_page_template($template)
{
    return is_home() ? '' : $template;
}
add_action('frontpage_template', 'easiestwp_front_page_template');
