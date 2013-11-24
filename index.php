<?php

session_start();
	
define('APPLICATION_PATH', 'application/');
	
define('SYSTEM_PATH', 'system/');
	
require_once(APPLICATION_PATH . 'config.php');

require_once(SYSTEM_PATH . 'model/Db.php');
	
require_once(SYSTEM_PATH . 'controller/FrontController.php');
	
require_once(SYSTEM_PATH . 'view/viewHelpers.php');
	
	
$frontController = new FrontController();
	
$frontController->run();