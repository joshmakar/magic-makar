<?php

// Enqueue Scripts
function magic_makar_enqueue_styles_scripts() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Raleway:300,400,700,900');
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/00aef0d8f3.js', '', '', true);
  wp_enqueue_script('testtheme-navigation', get_template_directory_uri() . '/js/navigation-custom.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'magic_makar_enqueue_styles_scripts');


// Set Post Thumbnail Size
set_post_thumbnail_size(811, 456, true);

?>