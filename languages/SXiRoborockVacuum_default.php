<?php

$dictionary=array(
 
'DEVICES_VACUUM_STATE' => 'State vacuum cleaner',
 
'DEVICES_VACUUM_STATE_0' =>	'Unknown',
'DEVICES_VACUUM_STATE_1' => 'Initiating',
'DEVICES_VACUUM_STATE_2' => 'Sleeping',
'DEVICES_VACUUM_STATE_3' => 'Waiting',
'DEVICES_VACUUM_STATE_4' => 'Remote control active',
'DEVICES_VACUUM_STATE_5' => 'Cleaning',
'DEVICES_VACUUM_STATE_6' => 'Back to home',
'DEVICES_VACUUM_STATE_7' => 'Manual mode',
'DEVICES_VACUUM_STATE_8' => 'Charging',
'DEVICES_VACUUM_STATE_9' => 'Charging Error',
'DEVICES_VACUUM_STATE_10' => 'Pause',
'DEVICES_VACUUM_STATE_11' => 'Spot Cleaning',
'DEVICES_VACUUM_STATE_12' => 'In Error',
'DEVICES_VACUUM_STATE_13' => 'Shutting down',
'DEVICES_VACUUM_STATE_14' => 'Updating',
'DEVICES_VACUUM_STATE_15' => 'Docking',
'DEVICES_VACUUM_STATE_16' => 'Going to target',
'DEVICES_VACUUM_STATE_17' => 'Zoned cleaning',
'DEVICES_VACUUM_STATE_18' => 'Room cleaning',
'DEVICES_VACUUM_STATE_100' => 'Full',
'DEVICES_VACUUM_STATE_101' => 'Wet cleaning',
'DEVICES_VACUUM_STATE_105' => 'Turbo',

'DEVICES_VACUUM_ERROR' => 'Error vacuum cleaner',

'DEVICES_VACUUM_ERROR_0' =>	'No error',
'DEVICES_VACUUM_ERROR_1' => 'Laser distance sensor error',
'DEVICES_VACUUM_ERROR_2' => 'Collision sensor error',
'DEVICES_VACUUM_ERROR_3' => 'Wheels on top of void, move robot',
'DEVICES_VACUUM_ERROR_4' => 'Clean hovering sensors, move robot',
'DEVICES_VACUUM_ERROR_5' => 'Clean main brush',
'DEVICES_VACUUM_ERROR_6' => 'Clean side brush',
'DEVICES_VACUUM_ERROR_7' => 'Main wheel stuck',
'DEVICES_VACUUM_ERROR_8' => 'Device stuck, clean area',
'DEVICES_VACUUM_ERROR_9' => 'Dust collector missing',
'DEVICES_VACUUM_ERROR_10' => 'Clean filter',
'DEVICES_VACUUM_ERROR_11' => 'Stuck in magnetic barrier',
'DEVICES_VACUUM_ERROR_12' => 'Low battery',
'DEVICES_VACUUM_ERROR_13' => 'Charging fault',
'DEVICES_VACUUM_ERROR_14' => 'Battery fault',
'DEVICES_VACUUM_ERROR_15' => 'Wall sensors dirty, wipe them',
'DEVICES_VACUUM_ERROR_16' => 'Place me on flat surface',
'DEVICES_VACUUM_ERROR_17' => 'Side brushes problem, reboot me',
'DEVICES_VACUUM_ERROR_18' => 'Suction fan problem',
'DEVICES_VACUUM_ERROR_19' => 'Unpowered charging station',
'DEVICES_VACUUM_ERROR_99' => 'Need service'
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
