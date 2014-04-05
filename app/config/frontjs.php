<?php

/*
 * Loader of Css Files (Frontend)
 * 
 */

Assets_Fw::addFrontJs('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
Assets_Fw::addFrontJs('http://' . $_SERVER['SERVER_NAME'] . '/public/js/angular.js');
Assets_Fw::addFrontJs('http://' . $_SERVER['SERVER_NAME'] . '/public/bootstrap/js/bootstrap.min.js');

// Jquery plugins for CRUD
Assets_Fw::addFrontJs('http://' . $_SERVER['SERVER_NAME'] . '/public/plugin_crud/scripts/jquery-1.6.4.min.js');
Assets_Fw::addFrontJs('http://' . $_SERVER['SERVER_NAME'] . '/public/plugin_crud/scripts/jquery-ui-1.8.16.custom.min.js');
Assets_Fw::addFrontJs('http://' . $_SERVER['SERVER_NAME'] . '/public/plugin_crud/scripts/jtable/jquery.jtable.js');


?>