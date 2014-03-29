<?php

/**
 * Enrrutador por URL
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */

class Fw_Route {
    
    
    
    function LoadController($url) {
        $theme_name = Config_Class::GetThemeName();
        
        if(!$url) {    
            $this->err();            
        } else {
        
            $aChopUri = explode('/', $url);
            if(isset($aChopUri[1]))
                $sController = $aChopUri[1];
            if(isset($aChopUri[2]))
                $sAction = $aChopUri[2];
            
            if($sController)
                $sControllerClass = ucwords($sController).'_Controller';
            
            if(class_exists($sControllerClass)) {
                $Controller = new $sControllerClass;
            } else {
                
            }

        }
    }

    function err() {
        $theme_name = Config_Class::GetThemeName();
        header("HTTP/1.1 404 Not Found");
        include(THEMES_PATH.$theme_name. "/not-found.view.php");
    }
}

?>