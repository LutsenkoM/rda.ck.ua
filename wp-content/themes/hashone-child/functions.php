<?php

function load_style_script() {
  /*  wp_enqueue_style('skin.css', get_stylesheet_directory() . '/css/skins/'<?php $options = get_option('sample_theme_options'); echo $options['selectinput'];?> '.css'); */

}

add_action('wp_enqueue_scripts', 'load_style_script');

require_once ( get_stylesheet_directory() . '/theme-options.php' );

?>