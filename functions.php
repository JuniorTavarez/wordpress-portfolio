<?php

function portfolio_files (){
    if (is_home()){
        wp_enqueue_script('portfolio_main_script', get_theme_file_uri('./js/home/script.js'), NULL, '1.0', true);
    } else {
        wp_enqueue_script('portfolio_main_script', get_theme_file_uri('./js/portfolio/script.js'), NULL, '1.0', true);
    }

    wp_enqueue_script('fontawsome_main_script', 'https://kit.fontawesome.com/39dcb8d7a0.js', NULL, '1.0', true);
    wp_enqueue_style('portfolio_main_style', get_stylesheet_uri());
  

}

add_action('wp_enqueue_scripts', 'portfolio_files');


function portfolio_features (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    add_image_size('projectLandscape', 300, 200, false);
    add_image_size('projectsmall', 260, 160, false);
}


add_action('after_setup_theme', 'portfolio_features');

