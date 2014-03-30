<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppInit Class
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class AppInit_Fw {
    
    public function __construct() {
        $this->LoadStyles();
    }
    
    private function LoadStyles() {
        include CONFIG_PATH . DS . 'frontcss.php';
        include CONFIG_PATH . DS . 'frontjs.php';
    }
    
}

?>
