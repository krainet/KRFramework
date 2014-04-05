<?php

/**
 * Enrrutador por URL
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Route_Fw {

    private $sCaction;
    
    public function __construct($action='default') {
        $this->sCaction = $action;
    }
    
    function LoadController($url,$action='default') {
        
        $theme_name = Config_Fw::GetThemeName();

        if (!$url) {
            $this->err();
        } else {

            $aChopUri = explode('/', $url);
            if (isset($aChopUri[1]))
                $sController = $aChopUri[1];
            if (isset($aChopUri[2]))
                $sAction = $aChopUri[2];
            else
                $sAction = 'default';

            if ($sController)
                $sControllerClass = ucwords($sController) . '_Controller';

            if (class_exists($sControllerClass)) {
                error_log('Loading Controller:: ' . $sControllerClass. ' with Action:: '.$sAction);
                $Controller = new $sControllerClass;
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