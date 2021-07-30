<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

@include_once(ROOT.'languages/SXiRoborockVacuum_'.SETTINGS_SITE_LANGUAGE.'.php');
@include_once(ROOT.'languages/SXiRoborockVacuum_default'.'.php'); 

$state = $params['NEW_VALUE'];
$desc = constant('LANG_DEVICES_VACUUM_STATE_'. $state);

$this->setProperty('state_description', $desc);

say(LANG_DEVICES_VACUUM_STATE . ": " . $desc);

switch ($state) {
    case 2: $this->setProperty('state_icon', 'far fa-clock'); break;
    case 3: $this->setProperty('state_icon', 'far fa-clock'); break;
    case 5: $this->setProperty('state_icon', 'fas fa-broom'); break;
    case 6: $this->setProperty('state_icon', 'fas fa-angle-double-left'); break;
    case 8: $this->setProperty('state_icon', 'fas fa-charging-station'); break;
    default:
       $this->setProperty('state_icon', 'fas fa-question-circle'); break;
}

if ($state == 8)
    $this->setProperty('status', 0);
else
    $this->setProperty('status', 1);


