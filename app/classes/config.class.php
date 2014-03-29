<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config Class
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */


class Config_Class {
    
    var $conf_databases;
    var $conf_configuration;
    
    public function __construct() {
        $this->conf_databases = parse_ini_file(CONFIG_PATH.DS.'databases.ini');
        $this->conf_configuration = parse_ini_file(CONFIG_PATH.DS.'configuration.ini');
    }
    
    public function GetApiDatabaseConfig() {
        return $this->conf_databases;
    }
    
    public function GetApiConfig() {
        return $this->conf_configuration;
    }
}

?>
