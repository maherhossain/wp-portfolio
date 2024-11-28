<?php
function maher_post_types()
{
  // Custom post type = Service
  register_post_type('service', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'services'),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-screenoptions'
  ));

  // Custom post type = Portfolio
  register_post_type('portfolio', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'portfolios'),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'labels' => array(
      'name' => 'Portfolios',
      'add_new_item' => 'Add New Portfolio',
      'edit_item' => 'Edit Portfolio',
      'all_items' => 'All Portfolios',
      'singular_name' => 'Portfolio'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));

  // Custom post type = Testimonial
  register_post_type('testimonial', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'supports' => array('title', 'editor', 'thumbnail'),
    'labels' => array(
      'name' => 'Testimonials',
      'add_new_item' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'all_items' => 'All Testimonials',
      'singular_name' => 'Testimonial'
    ),
    'menu_icon' => 'dashicons-testimonial'
  ));

  // Custom post type = Client
  register_post_type('client', array(
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'clients'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'labels' => array(
        'name' => 'Top Clients',
        'add_new_item' => 'Add New Client',
        'edit_item' => 'Edit Client',
        'all_items' => 'All Clients',
        'singular_name' => 'Client'
      ),
      'menu_icon' => 'dashicons-groups'
    ));

  // Custom post type = Service
  register_post_type('team', array(
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'teams'),
    'supports' => array('title', 'editor', 'thumbnail'),
    'labels' => array(
      'name' => 'My Teams',
      'add_new_item' => 'Add New Team',
      'edit_item' => 'Edit Team',
      'all_items' => 'All Teams',
      'singular_name' => 'Team'
    ),
    'menu_icon' => 'dashicons-groups'
  ));
}

add_action('init', 'maher_post_types');
