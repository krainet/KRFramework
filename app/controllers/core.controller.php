<?php

/**
 * Description of core
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */


abstract class Core_Controller {
    
    private $sCaction;
    
    public function __construct($action='default') {
        
        $this->sCaction = $action;
        
        $this->pre_process();
        $this->process();
        $this->display();
    }
    
    abstract protected function pre_process();
    abstract protected function process();
    abstract protected function display();
    
}

?>
