<?php

/**
 * Description of Home Controller
 *
 * @author Ramón Albertí
 */
class Home_Controller extends Core_Controller {
    
    private $theme;

    protected function pre_process() {
        $this->theme = Config_Class::GetThemeName();
        error_log('THEME::'.$this->theme);
    }
    
    protected function process() {
        
    }
    
    protected function display() {
        include(VIEWS_PATH.DS.$this->theme.DS.'home.view.php');
    }
}

?>
