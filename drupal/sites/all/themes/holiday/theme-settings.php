<?php
function holiday_form_system_theme_settings_alter(&$form, $form_state) {
  $form['foo_example'] = array(
    '#type' => 'select',
    '#options' => array("默认","春", "夏", "秋", "冬", "五一", "十一", "春节"),
  	'#title' => t('模板选择'),
  	'#description'   => t("选择模板后保存系统会自动切换到响应的样式")
  );
}
?>