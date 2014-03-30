<?php

/*
 * Loader of Css Files (Frontend)
 * 
 */

Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/css/themes/'.Config_Fw::GetThemeName().'/themebase.css');
?>