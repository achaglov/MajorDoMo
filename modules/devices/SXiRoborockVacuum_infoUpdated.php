<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

$error = 0;

if ($params['PROPERTY'] == 'main_brush_life')
{
    $this->setProperty('main_brush_life_proc', abs(100*$params['NEW_VALUE']/300));
}
if ($params['PROPERTY'] == 'side_brush_life')
{
    $this->setProperty('side_brush_life_proc', abs(100*$params['NEW_VALUE']/200));
}
if ($params['PROPERTY'] == 'filter_life')
{
    $this->setProperty('filter_life_proc', abs(100*$params['NEW_VALUE']/150));
}
if ($params['PROPERTY'] == 'sensor_dirty_life')
{
    $this->setProperty('sensor_dirty_life_proc', abs(100*$params['NEW_VALUE']/30));
}

if ($params['NEW_VALUE'] < 1)
    $this->setProperty('error', 99);


