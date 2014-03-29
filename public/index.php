<?php

/*
 * KrFramework 
 * OS Easy Framework ;D
 * 
 * @autor Ramón Albertí
 * @KrFramework
 * 
 */

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 'On');

//Define paths
define('DS'             , DIRECTORY_SEPARATOR);
define('PUBLIC_PATH'	, dirname(__FILE__));
define('APP_PATH'       , PUBLIC_PATH.DS.'..'.DS.'app');
define('LIBS_PATH'		, PUBLIC_PATH.DS.'..'.DS.'libs');

define('JS_PATH'		, PUBLIC_PATH.DS.'js');
define('CSS_PATH'		, PUBLIC_PATH.DS.'css');
define('IMG_PATH'		, PUBLIC_PATH.DS.'img');

define('BASE_URI'		, str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('JS_URI'			, BASE_URI.'js/');
define('CSS_URI'		, BASE_URI.'css/');
define('IMG_URI'		, BASE_URI.'img/');

define('CONTROLLERS_PATH'	, APP_PATH.DS.'controllers');
define('CONFIG_PATH'		, APP_PATH.DS.'config');
define('HELPERS_PATH'		, APP_PATH.DS.'helpers');
define('MODULES_PATH'		, APP_PATH.DS.'modules');
define('CLASS_PATH' 		, APP_PATH.DS.'classes');
define('LAYOUTS_PATH'		, APP_PATH.DS.'templates');
define('LOGS_PATH'          , APP_PATH.DS.'logs');
define('MODELS_PATH'		, APP_PATH.DS.'models');
define('VIEWS_PATH'         , APP_PATH.DS.'views');
define('THEMES_PATH'        , VIEWS_PATH.DS.'themes');
define('CACHE_PATH'         , APP_PATH.DS.'cache');

define('UPLOAD_PATH'        , PUBLIC_PATH.DS.'uploads');
define('UPLOAD_URI'         , BASE_URI.'uploads');

define('LIBS_ON'            , 'Fw');

require_once LIBS_PATH.'/KrAutoload.php';

$Route = new Route_Class();

$Route->LoadController($_SERVER['REQUEST_URI']);



?>
