<?php
function holiday_form_system_theme_settings_alter(&$form, $form_state) {

  $form["theme_settings"]="";
  $default_value = "holiday_default";
  
  if(theme_get_setting("holiday_theme_style")){
  	$default_value = theme_get_setting("holiday_theme_style");
  }
  $form['holiday_theme_style'] = array(
    '#type' => 'select',
    '#options' => array("holiday_default"=>"默认","holiday_spring"=>"春", "holiday_summer"=>"夏", "holiday_autumn"=>"秋", "holiday_winter"=>"冬", 
    					"holiday_labour_day"=>"五一", "holiday_national"=>"十一", "holiday_spring_festival"=>"春节"),
  	'#title' => t('模板选择'),
  	'#description'   => t("选择模板后保存系统会自动切换到样式"),
  	'#default_value' => $default_value
  );
  
  
}
?>