<?php
function zircon_form_system_theme_settings_alter(&$form, $form_state) {
  $form['nucleus']['global_settings']['theme_settings']['show_skins_menu'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Skins Menu'),
    '#default_value' => theme_get_setting('show_skins_menu'),
  );
  $form['#submit'][] = 'zircon_form_system_theme_settings_submit';
}

function zircon_form_system_theme_settings_submit(&$form, $form_state) {
  $inputs = $form_state['input'];
  if($form_state['input']['skin'] != $form_state['complete form']['nucleus']['layout']['skin']['#default_value']) {
    setcookie('nucleus_skin', $form_state['input']['skin'], time() + 100000, "/");
  }
}
