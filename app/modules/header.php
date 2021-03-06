<?php

/*
 * Header Module
 * @author Ramón Albertí
 */

?>
<html lang="es" ng-app>
<meta charset="utf-8">
<title>KR Framework</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="KRFramework Easy & Safe MVC Framework">
<meta name="author" content="">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- CSS -->
<?php Assets_Fw::getAllFrontCss(); ?>
<!-- JS -->
<?php Assets_Fw::getAllFrontJs(); ?>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
<!-- Fav and touch icons -->
<!--
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
-->
<link rel="shortcut icon" href="<?php echo Tools_Fw::GetFavicon(); ?>">

