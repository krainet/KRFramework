<?php

/**
 * Description of Home Controller
 *
 * @author Ramón Albertí
 */
class Home_Controller {

    function user_controller($params) {
        if (
                !is_array($params) ||
                !isSet($params[1]) ||
                !is_numeric($params[1])
            )
                return false;
        /* llamamos el modelo */
        $dbu   = new User;
        $users = $dbu->Select(array("id"=>$params[1]));
        /* incluimos la vista */
        /* la variable $users es visible para vista */
        include("vista.php");
    }    
    
}

?>
