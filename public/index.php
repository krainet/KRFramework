<?php

/*
 * KrFramework 
 * POO Easy Framework ;D
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 'On');

define('DS', DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', dirname(__FILE__));
define('APP_PATH', PUBLIC_PATH . DS . '..' . DS . 'app');
define('CONFIG_PATH', APP_PATH . DS . 'config');

require_once CONFIG_PATH . '/defines.php';
require_once LIBS_PATH . '/KrAutoload.php';


$Init = new AppInit_Fw();

if(!Tools_Fw::FileExistsUri($_SERVER['REQUEST_URI'])) {
    $Route = new Route_Fw();
    $Route->LoadController($_SERVER['REQUEST_URI']);
} 

?>
