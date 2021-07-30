<?php
$dictionary=array(
 
'DEVICES_HUMIDIFIER_MODE' => 'Режим',
'DEVICES_HUMIDIFIER_MODE_AUTO' => 'Авто',
'DEVICES_HUMIDIFIER_MODE_HIGH' => 'Швидкий',
'DEVICES_HUMIDIFIER_MODE_MEDIUM' => 'Середній',
'DEVICES_HUMIDIFIER_MODE_SILENT' => 'Повільний',
'DEVICES_HUMIDIFIER_WATER_LEVEL' => 'Рівень води',
'DEVICES_HUMIDIFIER_SPEED' => 'Швидкість',
'DEVICES_HUMIDIFIER_DRY' => 'Режим сушки',
'DEVICES_HUMIDIFIER_USE_TIME' => 'Використовувався(сек)',
'DEVICES_HUMIDIFIER_LED' => 'Індикація',
'DEVICES_HUMIDIFIER_LED_BRIGHT' => 'Яскраво',
'DEVICES_HUMIDIFIER_LED_DIM' => 'Тьмяно',
'DEVICES_HUMIDIFIER_LED_OFF' => 'Вимкнено',
'DEVICES_HUMIDIFIER_BUZZER' => 'Звуковой сигнал',
'DEVICES_HUMIDIFIER_CHILD_LOCK' => 'Захист від дітей',
'DEVICES_HUMIDIFIER_LIMIT_NUM' => 'Ліміт вологості',
 
'DEVICES_HUMIDIFIER_SET_MODE_AUTO' => 'Автоматичний режим',
'DEVICES_HUMIDIFIER_SET_MODE_HIGH' => 'Швидкий режим',
'DEVICES_HUMIDIFIER_SET_MODE_MEDIUM' => 'Середній режим',
'DEVICES_HUMIDIFIER_SET_MODE_SILENT' => 'Повільний режим',
);
foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}
?>
