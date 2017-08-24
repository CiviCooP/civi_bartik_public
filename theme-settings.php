<?php
/*
 * Hook theme settings alter
 *  
 * https://www.codexworld.com/create-drupal-custom-theme-from-scratch/
 */
function civi_bartik_public_form_system_theme_settings_alter(&$form, &$form_state) {
    $form['civi_bartik_public']['font'] = array(
        '#type' => 'fieldset',
        '#title' => t('Typography'),
        '#collapsible' => False,
        '#collapsed' => False,
    );

    // Select font family
    $form['civi_bartik_public']['font']['font_family'] = array(
        '#type'          => 'select',
        '#title'         => t('Select a font family'),
        '#default_value' => theme_get_setting('font_family'),
        '#options'       => array(
            'font-family-default' => t('Default'),
            'font-family-open-sans' => t('"Open Sans", Helvetica, Roboto, Arial, sans-serif'),
            'font-family-verdana' => t('Verdana, Helvetica, Roboto, Arial, sans-serif'),
        ),
    );
  
    // Select font size
    $form['civi_bartik_public']['font']['font_size'] = array(
        '#type'          => 'select',
        '#title'         => t('Select a font size'),
        '#default_value' => theme_get_setting('font_size'),
        '#options'       => array(
            'font-size-default' => t('Default'),
            'font-size-10' => t('10px'),
            'font-size-11' => t('11px'),
            'font-size-12' => t('12px'),
            'font-size-13' => t('13px'),
            'font-size-14' => t('14px'),
            'font-size-15' => t('15px'),
            'font-size-16' => t('16px'),
            'font-size-17' => t('17px'),
            'font-size-18' => t('18px'),
            'font-size-19' => t('19px'),
            'font-size-20' => t('20px'),
            'font-size-21' => t('21px'),
            'font-size-22' => t('22px'),
            'font-size-23' => t('23px'),
            'font-size-24' => t('24px'),
        ),
    );
    
    //civi_bartik_public_theme_settings_add_new_colors();
    return $form;
}

/*
 * Work around for the Notice in the color.module
 * 
 * https://www.drupal.org/node/1236098
 */
/*function civi_bartik_public_form_system_theme_settings_alter(&$form, &$form_state) {
  civi_bartik_public_theme_settings_add_new_colors();
  return $form;
}*/

/*function civi_bartik_public_theme_settings_add_new_colors() {
  // Add in any new colors that are defined in default scheme
  // but are not defined in the saved palette values.
  // Supplements logic in color.module color_scheme_form().
  $theme = 'civi_bartik_public_';
  $info = color_get_info($theme);
  $names = $info['fields'];
  $palette = color_get_palette($theme); //calls variable_get
  $default = color_get_palette($theme, TRUE);
  $new = array();
  foreach ($default as $name => $value) {
    if (!isset($palette[$name]) && isset($names[$name])) {
      $palette[$name] = $default[$name];
      $new[] = $names[$name];
    }
  }
  if (count($new)) {
    drupal_set_message(t('One or more new colors are now available: @colors',
        array('@colors' => implode(', ', $new))));
    variable_set('color_' . $theme . '_palette', $palette);
  }*
}*/
