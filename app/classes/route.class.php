<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of route
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */

class Route_Class {
    
    
    
    function AddRoute($reg_expr,$action) {
        if (!is_callable($action) && !is_file($action))
            return false;
        $this->route[$reg_expr] = $action;
    }

    function LoadController($url) {
        $theme_name = Config_Class::GetThemeName();
        
        if(!$url) {    
            $this->err();            
        } else {
        
            $aChopUri = explode('/', $url);
            var_dump($aChopUri);
            
        }

    }

    function err() {
        $theme_name = Config_Class::GetThemeName();
        header("HTTP/1.1 404 Not Found");
        include(THEMES_PATH.$theme_name. "/not-found.view.php");
    }
}

?>