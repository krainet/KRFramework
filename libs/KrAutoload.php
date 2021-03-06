<?php

/*
 * Autoloader
 * Api Autoloader of Classes
 */

function __autoload($className) {
    $className = str_replace("..", "", $className);
    $className = strtolower($className);

    if (strpos($className, '_class')) {
        $className = str_replace("_", ".", $className);
        require_once( CLASS_PATH . "/$className.php" );
    } elseif (strpos($className, '_model')) {
        $className = str_replace("_", ".", $className);
        require_once( MODELS_PATH . "/$className.php" );
    } elseif (strpos($className, '_controller')) {
        $className = str_replace("_", ".", $className);
        require_once( CONTROLLERS_PATH . "/$className.php" );
    } elseif (strpos($className, '_fw')) {
        $className = str_replace("_", ".", $className);
        require_once( CLASS_PATH_FW . "/$className.php" );        
    } else {
        return true;
    }

    error_log("Loaded Class :: $className.php");
}

?>
