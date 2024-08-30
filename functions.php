<?php

function recipe_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
    // wp_enqueue_script("main-js", get_template_directory_uri() . '/script/toggle__menu.js', [], microtime(), true);
}

add_action('wp_enqueue_scripts', 'recipe_assets');


function recipe_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'recipe_theme_support');