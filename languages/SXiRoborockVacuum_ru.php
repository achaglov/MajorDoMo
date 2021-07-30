<?php

$dictionary=array(
 
 'DEVICES_VACUUM_STATE' => 'Статус пылесоса',
 
'DEVICES_VACUUM_STATE_0' =>	'Неизвестный',
'DEVICES_VACUUM_STATE_1' => 'Инициирование',
'DEVICES_VACUUM_STATE_2' => 'Сон',
'DEVICES_VACUUM_STATE_3' => 'Ожидание',
'DEVICES_VACUUM_STATE_4' => 'Пульт дистанционного управления активен',
'DEVICES_VACUUM_STATE_5' => 'Уборка',
'DEVICES_VACUUM_STATE_6' => 'Возвращение домой',
'DEVICES_VACUUM_STATE_7' => 'Ручной режим',
'DEVICES_VACUUM_STATE_8' => 'Зарядка',
'DEVICES_VACUUM_STATE_9' => 'Ошибка зарядки',
'DEVICES_VACUUM_STATE_10' => 'Пауза',
'DEVICES_VACUUM_STATE_11' => 'Чистка места',
'DEVICES_VACUUM_STATE_12' => 'Ошибка',
'DEVICES_VACUUM_STATE_13' => 'Выключение',
'DEVICES_VACUUM_STATE_14' => 'Обновление',
'DEVICES_VACUUM_STATE_15' => 'Стыковка',
'DEVICES_VACUUM_STATE_16' => 'Движение к цели',
'DEVICES_VACUUM_STATE_17' => 'Зональная уборка',
'DEVICES_VACUUM_STATE_18' => 'Уборка комнаты',
'DEVICES_VACUUM_STATE_100' => 'Заполнен',
'DEVICES_VACUUM_STATE_101' => 'Влажная уборка',
'DEVICES_VACUUM_STATE_105' => 'Турбо',

'DEVICES_VACUUM_ERROR' => 'Ошибка пылесоса',

'DEVICES_VACUUM_ERROR_0' =>	'Нет ошибки',
'DEVICES_VACUUM_ERROR_1' => 'Ошибка лазерного датчика расстояния',
'DEVICES_VACUUM_ERROR_2' => 'Ошибка датчика столкновения',
'DEVICES_VACUUM_ERROR_3' => 'Колеса сверху пустоты',
'DEVICES_VACUUM_ERROR_4' => 'Очистить датчики зависания',
'DEVICES_VACUUM_ERROR_5' => 'Очистить основную щетку',
'DEVICES_VACUUM_ERROR_6' => 'Очистить боковую щетку',
'DEVICES_VACUUM_ERROR_7' => 'Главное колесо застряло',
'DEVICES_VACUUM_ERROR_8' => 'Устройство зависло, чистая зона',
'DEVICES_VACUUM_ERROR_9' => 'Пылеуловитель отсутствует',
'DEVICES_VACUUM_ERROR_10' => 'Очистите фильтр',
'DEVICES_VACUUM_ERROR_11' => 'Застрял в магнитном барьере',
'DEVICES_VACUUM_ERROR_12' => 'Низкий заряд батареи',
'DEVICES_VACUUM_ERROR_13' => 'Ошибка зарядки',
'DEVICES_VACUUM_ERROR_14' => 'Неисправность батареи',
'DEVICES_VACUUM_ERROR_15' => 'Стенные датчики загрязнены, протрите их',
'DEVICES_VACUUM_ERROR_16' => 'Поместите меня на ровную поверхность',
'DEVICES_VACUUM_ERROR_17' => 'Проблема боковых щеток, перезагрузите меня',
'DEVICES_VACUUM_ERROR_18' => 'Проблема с всасывающим вентилятором',
'DEVICES_VACUUM_ERROR_19' => 'Зарядная станция без питания',
'DEVICES_VACUUM_ERROR_99' => 'Необходимо обслуживание'

);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
