<?php

function portfolio_theme_load_resources() {
    wp_enqueue_style('stylesheet', get_template_directory_uri(). '/style.css');

    wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/js/scrollreveal.min.js', array(), false, true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array(), false, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), false, true);
    
    wp_enqueue_style('remixicon', 'https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css', array(), '4.2.0');
    wp_enqueue_style('coluna-font', 'https://fonts.cdnfonts.com/css/coluna');
    wp_enqueue_style('kollektif-font', 'https://fonts.cdnfonts.com/css/kollektif');
}
add_action('wp_enqueue_scripts', 'portfolio_theme_load_resources');

function portfolio_theme_remove_gutenberg(){
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

add_action('init', 'portfolio_theme_remove_gutenberg');