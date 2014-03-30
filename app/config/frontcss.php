<?php

/*
 * Loader of Css Files (Frontend)
 * 
 */

//Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS(PUBLIC_PATH . '/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS(CSS_THEME_PATH.'/'.Config_Fw::GetThemeName().'/themebase.css');
?>