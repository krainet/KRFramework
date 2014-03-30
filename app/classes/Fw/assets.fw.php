<?php

/**
 * Description of Assets Loader
 *
 * @author Ramón Albertí <admin@krainet.net at Krainet.net>
 */
class Assets_Fw {

    public static $aFrontJs = array();
    public static $aBackJs = array();
    public static $aFrontCss = array();
    public static $aBackCss = array();

    public static function addFrontJs($resource, $bRaw = false) {
        if ($bRaw) {
            self::$aFrontJs['raw'][md5($resource)] = $resource;
        } else {
            self::$aFrontJs['routes'][$resource] = $resource;
        }
    }

    public static function addBackJs($resource, $bRaw = false) {
        if ($bRaw) {
            self::$aBackJs['raw'][md5($resource)] = $resource;
        } else {
            self::$aBackJs['routes'][$resource] = $resource;
        }
    }

    public static function addFrontCss($resource, $bRaw = false) {
        if ($bRaw) {
            self::$aFrontCss['raw'][md5($resource)] = $resource;
        } else {
            self::$aFrontCss['routes'][$resource] = $resource;
        }
    }

    public static function addBackCss($resource, $bRaw = false) {
        if ($bRaw) {
            self::$aBackCss['raw'][md5($resource)] = $resource;
        } else {
            self::$aBackCss['routes'][$resource] = $resource;
        }
    }

    public static function getAllFrontJs() {
        $minified = false;
        if (MINIFY_JS) {
            $directory = JS_PATH . DS . 'generated' . DS . 'front';
            if (is_dir($directory) && $handler = opendir($directory)) {
                while (false !== ($entry = readdir($handler))) {
                    if ($entry != '.' && $entry != '..') {
                        preg_match('/.*[.](.*)/', $entry, $matches);
                        if ($matches[1] == 'js') {
                            echo '<script type="text/javascript" src="' . JS_URI . 'generated/front/' . $entry . '"></script>';
                            $minified = true;
                        }
                    }
                }
            }
        }
        if (!$minified && isset(self::$aFrontJs['routes'])) {
            foreach (self::$aFrontJs['routes'] as $route) {
                echo '<script type="text/javascript" src="' . $route . '"></script>';
            }
        }
        if (isset(self::$aFrontJs['raw'])) {
            foreach (self::$aFrontJs['raw'] as $code) {
                echo $code;
            }
        }
    }

    public static function getAllFrontCss() {
        $minified = false;
        if (!$minified && isset(self::$aFrontCss['routes'])) {
            foreach (self::$aFrontCss['routes'] as $route) {
                echo '<link rel="stylesheet" href="' . $route . '"/>';
            }
        }
        if (isset(self::$aFrontCss['raw'])) {
            foreach (self::$aCss['raw'] as $code) {
                echo $code;
            }
        }
    }

    public static function getAllBackJs() {
        $minified = false;
        if (MINIFY_JS) {
            $directory = JS_PATH . DS . 'generated' . DS . 'back';
            if (is_dir($directory) && $handler = opendir($directory)) {
                while (false !== ($entry = readdir($handler))) {
                    if ($entry != '.' && $entry != '..') {
                        preg_match('/.*[.](.*)/', $entry, $matches);
                        if ($matches[1] == 'js') {
                            echo '<script type="text/javascript" src="' . JS_URI . 'generated/back/' . $entry . '"></script>';
                            $minified = true;
                        }
                    }
                }
            }
        }
        if (!$minified && isset(self::$aBackJs['routes'])) {
            foreach (self::$aBackJs['routes'] as $route) {
                echo '<script type="text/javascript" src="' . $route . '"></script>';
            }
        }
        if (isset(self::$aFrontJs['raw'])) {
            foreach (self::$aFrontJs['raw'] as $code) {
                echo $code;
            }
        }
    }

    public static function getAllBackCss() {
        $minified = false;
        if (MINIFY_CSS) {
            $directory = CSS_PATH . DS . 'generated' . DS . 'back';
            if (is_dir($directory) && $handler = opendir($directory)) {
                while (false !== ($entry = readdir($handler))) {
                    if ($entry != '.' && $entry != '..') {
                        preg_match('/.*[.](.*)/', $entry, $matches);
                        if ($matches[1] == 'css') {
                            echo '<link rel="stylesheet" href="' . CSS_URI . 'generated/back/' . $entry . '"/>';
                            $minified = true;
                        }
                    }
                }
            }
        }
        if (!$minified && isset(self::$aBackCss['routes'])) {
            foreach (self::$aBackCss['routes'] as $route) {
                echo '<link rel="stylesheet" href="' . $route . '"/>';
            }
        }
        if (isset(self::$aBackCss['raw'])) {
            foreach (self::$aCss['raw'] as $code) {
                echo $code;
            }
        }
    }
}

?>
