<?php
function my_theme_enqueue_styles() {
    $parent_style = 'twentytwentythree-style'; // Это название стиля родительской темы.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

