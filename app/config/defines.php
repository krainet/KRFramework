<?php

/**
 * Description of Defines
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */

//Define paths

define('LIBS_PATH'		, PUBLIC_PATH.DS.'..'.DS.'libs');

define('JS_PATH'		, PUBLIC_PATH.DS.'js');
define('CSS_PATH'		, PUBLIC_PATH.DS.'css');
define('IMG_PATH'		, PUBLIC_PATH.DS.'img');

define('BASE_URI'		, str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('JS_URI'			, BASE_URI.'js/');
define('CSS_URI'		, BASE_URI.'css/');
define('IMG_URI'		, BASE_URI.'img/');

define('CONTROLLERS_PATH'	, APP_PATH.DS.'controllers');
define('HELPERS_PATH'		, APP_PATH.DS.'helpers');
define('MODULES_PATH'		, APP_PATH.DS.'modules');
define('CLASS_PATH' 		, APP_PATH.DS.'classes');
define('CLASS_PATH_FW' 		, CLASS_PATH.DS.'Fw');
define('LOGS_PATH'          , APP_PATH.DS.'logs');
define('MODELS_PATH'		, APP_PATH.DS.'models');
define('VIEWS_PATH'         , APP_PATH.DS.'views');
define('THEMES_PATH'        , VIEWS_PATH.DS.'themes');
define('CACHE_PATH'         , APP_PATH.DS.'cache');

define('UPLOAD_PATH'        , PUBLIC_PATH.DS.'uploads');
define('UPLOAD_URI'         , BASE_URI.'uploads');



?>