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
    
    static $conf_database_static;
    static $conf_configuration_static;
    
    public function __construct() {
        $this->conf_databases = parse_ini_file(CONFIG_PATH.DS.'databases.ini');
        $this->conf_configuration = parse_ini_file(CONFIG_PATH.DS.'configuration.ini');
        self::$conf_configuration_static = parse_ini_file(CONFIG_PATH.DS.'configuration.ini');
        self::$conf_database_static = parse_ini_file(CONFIG_PATH.DS.'databases.ini');
    }
    
    public function GetDatabaseConfig() {
        return $this->conf_databases;
    }
    
    public function GetBaseConfig() {
        return $this->conf_configuration;
    }
    
    public static function GetThemeName() {
        $aConf = parse_ini_file(CONFIG_PATH.DS.'configuration.ini');
        return $aConf['theme_name'];
    }
}

?>
