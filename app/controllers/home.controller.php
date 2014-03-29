<?php

/**
 * Description of Home Controller
 *
 * @author Ramón Albertí
 */
class Home_Controller extends Core_Controller {
    

    protected function pre_process() {
        echo "pre";
    }
    
    protected function process() {
        echo "pro";
    }
    
    protected function display() {
        echo "disp";
    }
}

?>
