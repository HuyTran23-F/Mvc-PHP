<?php

use Mvc\Dispatcher;

define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]). 'src/');
define('BASEPATH', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
// require(ROOT . 'Config/core.php');
// require(ROOT . 'Router.php');
// require(ROOT . 'Request.php');
// require(ROOT . 'Dispatcher.php');

require_once BASEPATH . 'vendor/autoload.php';

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>