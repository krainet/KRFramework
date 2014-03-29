<?php

/**
 * Description of Module Loader
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Fw_Modules {

    public static function getModule($name, $params = array()) {
        include MODULES_PATH . DS . $name . '.php';
    }

}
?>



