<?php
App::uses('EnvSwitcher', 'Lib/EnvSwitcher');
EnvSwitcher::includeBaseFile(__FILE__);
CakePlugin::load('DebugKit');
CakePlugin::load('BoostCake');
CakePlugin::load('Utils', array('bootstrap' => false, 'routes' => false));
