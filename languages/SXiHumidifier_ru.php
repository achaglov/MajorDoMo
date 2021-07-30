<?php

$dictionary=array(
 
'DEVICES_HUMIDIFIER_MODE' => 'Режим',
'DEVICES_HUMIDIFIER_MODE_AUTO' => 'Авто',
'DEVICES_HUMIDIFIER_MODE_HIGH' => 'Быстрый',
'DEVICES_HUMIDIFIER_MODE_MEDIUM' => 'Средний',
'DEVICES_HUMIDIFIER_MODE_SILENT' => 'Медленный',
'DEVICES_HUMIDIFIER_WATER_LEVEL' => 'Уровень воды',
'DEVICES_HUMIDIFIER_SPEED' => 'Скорость',
'DEVICES_HUMIDIFIER_DRY' => 'Режим сушки',
'DEVICES_HUMIDIFIER_USE_TIME' => 'Использовался(сек)',
'DEVICES_HUMIDIFIER_LED' => 'Индикация',
'DEVICES_HUMIDIFIER_LED_BRIGHT' => 'Ярко',
'DEVICES_HUMIDIFIER_LED_DIM' => 'Тускло',
'DEVICES_HUMIDIFIER_LED_OFF' => 'Выключено',
'DEVICES_HUMIDIFIER_BUZZER' => 'Звуковой сигнал',
'DEVICES_HUMIDIFIER_CHILD_LOCK' => 'Защита от детей',
'DEVICES_HUMIDIFIER_LIMIT_NUM' => 'Лимит влажности',
 
'DEVICES_HUMIDIFIER_SET_MODE_AUTO' => 'Автоматический режим',
'DEVICES_HUMIDIFIER_SET_MODE_HIGH' => 'Быстрый режим',
'DEVICES_HUMIDIFIER_SET_MODE_MEDIUM' => 'Средний режим',
'DEVICES_HUMIDIFIER_SET_MODE_SILENT' => 'Медленный режим',
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
