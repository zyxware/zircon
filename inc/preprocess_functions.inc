<?php
/**
 * @file
 * Override of preprocess functions.
 */

/**
 * Preprocess theme function to print a single record from a row, with fields
 */
function zircon_preprocess_views_view_fields(&$vars) {
  if (isset($vars['view']->style_plugin->definition['module']) && $vars['view']->style_plugin->definition['module'] == 'views_slideshow') {
    $fields = $vars['fields'];
    if (count($fields) >= 2) {
      $fields_key = array_keys($fields);
      $fields[$fields_key[1]]->wrapper_prefix = '<div class="slideshow-group-fields-wrapper">' . $fields[$fields_key[1]]->wrapper_prefix;
      $fields[$fields_key[count($fields_key) - 1]]->wrapper_suffix = $fields[$fields_key[count($fields_key) - 1]]->wrapper_suffix . '</div>';
    }
  }
}
