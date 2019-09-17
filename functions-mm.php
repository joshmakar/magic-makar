<?php

/*///////////////////////////////////////////////
Enqueue Scripts
///////////////////////////////////////////////*/

function magic_makar_enqueue_styles_scripts() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Bitter:400,400i,700|Montserrat:400,700&display=swap" rel="stylesheet');
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/00aef0d8f3.js', '', '', true);
  wp_enqueue_script('testtheme-navigation', get_template_directory_uri() . '/js/navigation-custom.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'magic_makar_enqueue_styles_scripts');


/*///////////////////////////////////////////////
Custom Functionality
///////////////////////////////////////////////*/

// Output custom logo as either an image or svg contents.
function magic_makar_custom_logo_output(){
  if (has_custom_logo()) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $custom_logo_info = pathinfo($custom_logo_url[0]);
    
    if ($custom_logo_info['extension'] !== 'svg') {
      the_custom_logo();
    } else {
      $site_url = get_site_url();
      $custom_logo_svg_contents = file_get_contents(str_replace(trailingslashit(get_site_url()), '', $custom_logo_url[0]));
      echo "<a href='$site_url' class='custom-logo-link' rel='home'>$custom_logo_svg_contents</a>";
    }
  }
}


/*///////////////////////////////////////////////
Add Support
*////////////////////////////////////////////////

// SVG Support - ADMINS ONLY. Must configure SVG sanitization first if you want to add general support
function magic_makar_add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg']  = 'image/svg+xml';
  $new_filetypes['svgz'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
}
// add_action('upload_mimes', 'magic_makar_add_file_types_to_uploads');


/*///////////////////////////////////////////////
Dev Tools
///////////////////////////////////////////////*/

// Show template used
function magic_makar_show_template() {
  global $template;
  print_r( $template );
}
add_action( 'admin_bar_menu', 'magic_makar_show_template' );

?>