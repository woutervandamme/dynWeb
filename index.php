<?php
session_start();

// constanten ivm de paths
define('APPLICATION_PATH', 'application/');
define('SYSTEM_PATH', 'system/');

require_once(SYSTEM_PATH . 'view/viewHelper.php');
require_once(APPLICATION_PATH . 'config.php');
require_once(SYSTEM_PATH . 'model/Db.php');
require_once(SYSTEM_PATH . 'controller/Controller.php');

$controller = new Controller();
$controller->run();