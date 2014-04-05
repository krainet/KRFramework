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
        $post_params = Tools_Fw::getVar('test');
        error_log('POST::'.$post_params);
    }
    
    protected function process() {
        
    }
    
    protected function display() {
        include(THEMES_PATH.DS.$this->theme.DS.'ajax.view.php');
    }
}

?>
