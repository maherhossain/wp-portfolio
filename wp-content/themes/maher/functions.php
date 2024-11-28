<?php
require_once get_template_directory() . '/shortcode/faq-shortcode-functions.php';
require_once get_template_directory() . '/shortcode/faq-home-shortcode-functions.php';
require_once get_template_directory() . '/shortcode/client-shortcode-functions.php';
require_once get_template_directory() . '/shortcode/testimonials-shortcode-functions.php';
require_once get_template_directory() . '/shortcode/portfolios-shortcode-functions.php';
require_once get_template_directory() . '/shortcode/contact-shortcode-functions.php';

require_once get_template_directory() . '/settings/global-settings.php';

function maher_features()
{
  add_theme_support('post-thumbnails');
  add_post_type_support('post', 'excerpt');
}
add_action('after_setup_theme', 'maher_features');


function maher_load_theme_scripts()
{
  wp_enqueue_script('tailwind-script', 'https://cdn.tailwindcss.com', array(), '1.0.0', false);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '2.0.0', false);
  wp_enqueue_style('theme-main-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'maher_load_theme_scripts');



function track_page_visits()
{
  if (is_single()) {
    global $post;
    $current_count = get_post_meta($post->ID, 'visit_count', true);
    if ($current_count == '') {
      $current_count = 0;
      delete_post_meta($post->ID, 'visit_count');
      add_post_meta($post->ID, 'visit_count', '0');
    } else {
      $current_count++;
      update_post_meta($post->ID, 'visit_count', $current_count);
    }
  }
}
add_action('wp_head', 'track_page_visits');


// Fiverr WordPress Test
add_filter('acf/load_field/name=correct_answer', 'populate_correct_answer_choices');
function populate_correct_answer_choices($field)
{
  // Get the answers from the custom fields
  $answers = get_field('answers', false, false);
  $answers_2 = get_field('answers_2', false, false);
  $answers_3 = get_field('answers_3', false, false);
  $answers_4 = get_field('answers_4', false, false);
  $answers_5 = get_field('answers_5', false, false);

  // Initialize an array to store choices
  $field['choices'] = array();

  // Add answers to the choices array if they exist
  if (!empty($answers)) {
    $field['choices'][$answers] = $answers;
  }
  if (!empty($answers_2)) {
    $field['choices'][$answers_2] = $answers_2;
  }
  if (!empty($answers_3)) {
    $field['choices'][$answers_3] = $answers_3;
  }
  if (!empty($answers_4)) {
    $field['choices'][$answers_4] = $answers_4;
  }
  if (!empty($answers_5)) {
    $field['choices'][$answers_5] = $answers_5;
  }

  return $field;
}

// FAQ dashboard
function custom_post_type_order_in_admin($query)
{
  if (is_admin() && $query->is_main_query()) {
    if ($query->get('post_type') === 'faq') {
      $query->set('orderby', 'date');
      $query->set('order', 'DESC');
    }
  }
}
add_action('pre_get_posts', 'custom_post_type_order_in_admin');


// Add a custom column to the admin list table
function add_custom_post_type_category_column($columns)
{
  // Insert a new column for categories after the title
  $columns['custom_categories'] = __('Categories', 'maher');
  return $columns;
}
add_filter('manage_faq_posts_columns', 'add_custom_post_type_category_column');

// Populate the custom column with categories
function populate_custom_post_type_category_column($column, $post_id)
{
  if ($column === 'custom_categories') {
    $terms = get_the_terms($post_id, 'faq-for');
    if (!empty($terms) && !is_wp_error($terms)) {
      $categories = array_map(function ($term) {
        return $term->name;
      }, $terms);
      echo implode(', ', $categories);
    } else {
      echo __('No Categories', 'maher');
    }
  }
}
add_action('manage_faq_posts_custom_column', 'populate_custom_post_type_category_column', 10, 2);

// Make the new column sortable (optional)
function make_custom_category_column_sortable($sortable_columns)
{
  $sortable_columns['custom_categories'] = 'categories';
  return $sortable_columns;
}
add_filter('manage_edit-faq_sortable_columns', 'make_custom_category_column_sortable');
