<?php

/**
 * Description of Tools Class
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Tools_Fw {

    public static function GetRequestUrl() {
        $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    public static function FileExistsUri($path) {
        error_log('Checking for file exists in '.PUBLIC_PATH . $_SERVER['REQUEST_URI']);
        
        if (file_exists(PUBLIC_PATH . $_SERVER['REQUEST_URI']))
            return 1;
        else
            return 0;
    }

}

?>
