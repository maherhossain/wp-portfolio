<?php

/**
 * Register Custom Navigation Walker
 */

$navwalker_path = get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

if (file_exists($navwalker_path)) {
  require_once $navwalker_path;
}


// Register menu locations in WordPress theme
function my_theme_register_menus()
{
  register_nav_menus(array(
    'primary_menu' => __('Primary Menu', 'maherh'),
    'footer_menu' => __('Footer Menu', 'maherh')
  ));
}
add_action('init', 'my_theme_register_menus');



function maherh_features()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'maherh_features');



function maherh_load_theme_scripts()
{

  wp_enqueue_script('bootstrap-bundle-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '1.0', true);

  wp_enqueue_style('custom-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0');
  wp_enqueue_style('theme-main-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'maherh_load_theme_scripts');


function load_local_css()
{
  if (!wp_style_is('bootstrap-css', 'registered')) {
    wp_enqueue_style('local-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
  }
}
add_action('wp_enqueue_scripts', 'load_local_css', 11);
