<?php

/**
 * Description of core
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */


abstract class Core_Controller {
    
    public function __construct() {
        $this->pre_process();
        $this->process();
        $this->display();
    }
    
    abstract protected function pre_process();
    abstract protected function process();
    abstract protected function display();
    
}

?>
