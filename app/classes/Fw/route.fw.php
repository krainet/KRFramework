<?php

/**
 * Enrrutador por URL
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Route_Fw {


    function LoadController($url) {
        
        
        
        $theme_name = Config_Fw::GetThemeName();

        if (!$url) {
            $this->err();
        } else {

            $aChopUri = explode('/', $url);
            if (isset($aChopUri[1]))
                $sController = $aChopUri[1];
            if (isset($aChopUri[2]))
                $sAction = $aChopUri[2];

            if ($sController)
                $sControllerClass = ucwords($sController) . '_Controller';

            if (class_exists($sControllerClass)) {
                error_log('Loading Controller:: ' . $sControllerClass);
                $Controller = new $sControllerClass;
            } else {
                error_log($sController . ' is not a loadable Class');
            }
        }
    }

    function err() {
        $theme_name = Config_Fw::GetThemeName();
        header("HTTP/1.1 404 Not Found");
        include(THEMES_PATH . $theme_name . "/not-found.view.php");
    }

}

?>