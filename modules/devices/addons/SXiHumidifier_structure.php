<?php

@include_once(ROOT . 'languages/SXiHumidifier_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SXiHumidifier_default' . '.php');

$this->device_types['humidifier'] = array(
    'TITLE'=>'XiHumidifier',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SXiHumidifier',
    'PROPERTIES'=>array(
        'humidity'=>array('DESCRIPTION'=>LANG_DEVICES_CURRENT_HUMIDITY,'KEEP_HISTORY'=>7),
        'temperature'=>array('DESCRIPTION'=>LANG_DEVICES_CURRENT_TEMPERATURE,'KEEP_HISTORY'=>7),
        'mode'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_MODE,'_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'auto='.LANG_DEVICES_HUMIDIFIER_MODE_AUTO.',high='.LANG_DEVICES_HUMIDIFIER_MODE_HIGH.',medium='.LANG_DEVICES_HUMIDIFIER_MODE_MEDIUM.',silent='.LANG_DEVICES_HUMIDIFIER_MODE_SILENT),
        'depth'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_WATER_LEVEL),
        'speed'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_SPEED),
        'dry'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_DRY,'_CONFIG_TYPE'=>'yesno'),
        'use_time'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_USE_TIME),
        'led_b'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_LED,'_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'bright='.LANG_DEVICES_HUMIDIFIER_LED_BRIGHT.', dim='.LANG_DEVICES_HUMIDIFIER_LED_DIM.', off='.LANG_DEVICES_HUMIDIFIER_LED_OFF),
        'buzzer'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_BUZZER,'_CONFIG_TYPE'=>'yesno'),
        'child_lock'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_CHILD_LOCK,'_CONFIG_TYPE'=>'yesno'),
        'limit_hum'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_LIMIT_NUM,'_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'20,30,40,50,60,70,80')
    ),
    'METHODS'=>array(
        'modeAuto'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_SET_MODE_AUTO,'_CONFIG_SHOW'=>1),
        'modeHigh'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_SET_MODE_HIGH,'_CONFIG_SHOW'=>1),
        'modeMeduim'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_SET_MODE_MEDIUM,'_CONFIG_SHOW'=>1),
        'modeSilent'=>array('DESCRIPTION'=>LANG_DEVICES_HUMIDIFIER_SET_MODE_SILENT,'_CONFIG_SHOW'=>1)
    ),
);
