<?php

/**
 * Description of Ajax Controller
 *
 * @author Ramón Albertí
 */
class Ajaxtest_Controller extends Core_Controller {
    
    private $theme;

    protected function pre_process() {
        $this->theme = Config_Fw::GetThemeName();
    }
    
    protected function process() {
        
    }
    
    protected function display() {
        include(THEMES_PATH.DS.$this->theme.DS.'ajaxtest.view.php');
    }

    
    
}

?>
