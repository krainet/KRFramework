<?php

/*
 * Loader of Css Files (Frontend)
 * 
 */

//Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/bootstrap/css/bootstrap.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/bootstrap/css/bootstrap-theme.min.css');
Assets_Fw::addFrontCSS('http://' . $_SERVER['SERVER_NAME'] . '/public/css/themes/'.Config_Fw::GetThemeName().'/themebase.css');
?>