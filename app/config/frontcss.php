<?php

/*
 * Loader of Css Files (Frontend)
 * 
 */

Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/bootstrap/css/bootstrap-theme.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/css/themes/'.Config_Fw::GetThemeName().'/themebase.css');



// CSS For CRUD
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/plugin_crud/themes/redmond/jquery-ui-1.8.16.custom.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/plugin_crud/scripts/jtable/themes/lightcolor/blue/jtable.css');

?>