<?php

/**
 * Description of Tools Class
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Tools_Fw {

    public static $aVars = array(
        'params' => array(),
        'post' => array(),
        'get' => array(),
        'request' => array(),
        'cookie' => array()
    );

    public static function GetRequestUrl() {
        $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    public static function FileExistsUri($path) {
        error_log('Checking for file exists in ' . PUBLIC_PATH . $_SERVER['REQUEST_URI']);

        if (file_exists(PUBLIC_PATH . $_SERVER['REQUEST_URI']))
            return 1;
        else
            return 0;
    }

    public static function GetBaseUrl() {
        $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'];
    }

    public static function GetFavicon() {
        $protocol = isset($_SERVER['HTTPS']) ? 'https' : 'http';
        return $protocol . '://' . $_SERVER['HTTP_HOST'] . '/public/favicon.ico';
    }

    private static function init($params=null) {
        self::$aVars['params'] = $params;
        self::$aVars['post'] = $_POST;
        self::$aVars['get'] = $_GET;
        self::$aVars['request'] = $_REQUEST;
        self::$aVars['cookie'] = $_COOKIE;
        //unset ($params, $_POST, $_GET, $_REQUEST);
    }
    
    private static function initRequest() {
        self::$aVars['post'] = $_POST;
        self::$aVars['get'] = $_GET;
        self::$aVars['request'] = $_REQUEST;
        self::$aVars['cookie'] = $_COOKIE;
        //unset ($params, $_POST, $_GET, $_REQUEST);
    }    

    public static function filter($params) {
        self::init($params);
        foreach (self::$aVars as $container => $vars) {
            foreach ($vars as $k => $v) {
                self::$aVars[$container][$k] = $v;
            }
        }
    }

    public static function getVar($key, $type = "default", $container = 'all') {
        self::initRequest();
        $to_return = false;
        if ($container == 'all') {
            foreach (self::$aVars as $container => $vars) {
                if (key_exists($key, $vars)) {
                    $to_return = $container[$key];
                }
            }
        } else {
            $to_return = (isset(self::$aVars[$container][$key])) ? self::$aVars[$container][$key] : false;
        }
        switch ($type) {
            case 'numeric': return (is_numeric($to_return)) ? $to_return : false;
            case 'string': return $to_return;
            default: return $to_return;
        }
    }

    public static function getFilters() {
        $filters = array();
        foreach (self::$aVars['request'] as $k => $v) {
            if ($filter = strstr($k, 'filter_')) {
                if ($v != '') {
                    $filters[$filter] = $v;
                }
            }
        }
        return $filters;
    }

    public static function getArray($container) {
        return self::$aVars[$container];
    }

}
?>
