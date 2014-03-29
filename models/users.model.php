<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users Class
 *
 * @author Ramón Albertí
 */
class Users_Model extends MySQL_Class {
    
    public function delete_user($id_user=null) {
        if(!$user) {
            $this->Delete('users', array('id'=>$id_user));
            return true;
        } else {
            return false;
        }
    }
    
    public function add_user($user,$pass) {
        if(!$user) {
            $this->Delete('users', array('id'=>1));
            return true;
        } else {
            return false;
        }
    }
    
    
    public function hello($param) {
        
        if($param['params'][0]=='es')
            return 'Hola';
        else if($param['params'][0]=='en')
            return 'Hello';
        else
            return 'no_lang';
    }
    
}

?>
