<?php

/**
 * Description of Ajax Controller
 *
 * @author Ramón Albertí
 */
class Ajax_Controller extends Core_Controller {
    
    private $theme;

    protected function pre_process() {
        $this->theme = Config_Fw::GetThemeName();
    }
    
    protected function process() {
        
    }
    
    protected function display() {
        include(THEMES_PATH.DS.$this->theme.DS.'ajax.view.php');
    }
}

?>
