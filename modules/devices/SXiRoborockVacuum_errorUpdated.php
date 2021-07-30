<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

@include_once(ROOT.'languages/SXiRoborockVacuum_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SXiRoborockVacuum_default'.'.php'); 

$desc = constant('LANG_DEVICES_VACUUM_ERROR_'. $params['NEW_VALUE']);

$this->setProperty('error_description', $desc);
if ($params['NEW_VALUE'] != 0)
   say(LANG_DEVICES_VACUUM_ERROR . ": " . $desc);
