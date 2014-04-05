<?php

/**
 * Description of Module Loader
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Modules_Fw {

    public static function getModule($name, $params = array()) {
        if(strpos($name, '/')) {
            //die($name);
            $dirs = explode('/', $name);
            include MODULES_PATH . DS . $dirs[0] .DS. $dirs[1] . '.ajax.php';   
        } else {
            include MODULES_PATH . DS . $name . '.php';   
        }
    }

}
?>



