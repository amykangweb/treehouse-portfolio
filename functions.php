<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
  // Can add multiple menus
  register_nav_menus(
    array(
      'primary-menu' => _('Primary Menu')
    )
  );
}
add_action('init', 'register_theme_menus');

function wpt_theme_styles() {
  wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
  // wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {

  // Set to false if you don't want this to load in the footer.
  wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
  // First param array of dependent files. Foundation dependent on jquery.
  wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '', true);
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');

?>
