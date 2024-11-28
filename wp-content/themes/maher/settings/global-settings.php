<?php

function maher_add_global_settings_page()
{
  add_menu_page(
    'Global Settings', // Page title
    'Global Settings', // Menu title
    'manage_options', // Capability required
    'maher-global-settings', // Menu slug
    'maher_global_settings_page_callback', // Callback function
    'dashicons-admin-generic', // Icon
    110 // Position
  );
}
add_action('admin_menu', 'maher_add_global_settings_page');


function maher_global_settings_page_callback()
{
  echo '<h2>Global Settings</h2>';
}




####################################################################################################################

// function maher_global_settings_fields($fields)
// {

//   foreach ($fields as $field) {
//     add_settings_field($field[0], $field[1], function () use ($field) {
//       echo '<input id="field-' . $field[0] . '" type="text" class="regular-text" name="' . $field[0] . '" value="' . get_option($field[0], $field[2]) . '" placeholder="' . $field[3] . '">';
//     }, "particlejs-banner", "particles_events_section_id");
//     register_setting("particles_events_section_id", $field[0]);
//   }
// }

// $mhFields = [
//   ['background_color_of_banner', 'Banner Background Color', '#000', 'Color name or Hexadecimal code']
// ];
