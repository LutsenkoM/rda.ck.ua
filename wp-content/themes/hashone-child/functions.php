<?php

function load_style_script() {
    wp_enqueue_script('jquery-3.1.1.min.js', get_template_directory_uri() . '/js/lib/jquery-3.1.1.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');

?>