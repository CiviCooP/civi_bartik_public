<?php
/**
 * Override or insert variables into the page template.
 */
function civi_bartik_public_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function civi_bartik_public_process_html(&$variables) {
    // Hook into color.module.
    if (module_exists('color')) {
      _color_html_alter($variables);
    }

    // font-family and font-size
    $classes = explode(' ', $variables['classes']);
    
    // font_family
    $font_family = theme_get_setting('font_family');
    if('font-family-default' != $font_family){
        $classes[] = $font_family;
    }
    
    // font size
    $font_size = theme_get_setting('font_size');
    if('font-size-default' != $font_size){
        $classes[] = $font_size;
    }
    
    $classes = array_filter($classes);
    $variables['classes'] = trim(implode(' ', $classes));
}
