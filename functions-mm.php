<?php

function magic_makar_enqueue_styles_scripts() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Raleway:300,400,700,900');
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/00aef0d8f3.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'magic_makar_enqueue_styles_scripts');

?>