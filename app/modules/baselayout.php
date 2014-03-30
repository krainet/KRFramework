<?php
/*
 * Header Module
 * @author Ramón Albertí
 */
?>

<body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">KR Framework</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/demoboot">Demo Bootstrap</a></li>
                            <li><a href="/demoangular">Demo Ángular</a></li>
                            <li><a href="#">Demo BBDD</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Otros</li>
                            <li><a href="#">Manual de instalación</a></li>
                            <li><a href="#">Como empezar</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    &nbsp;<p>
    <div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1><img src='public/img/fw/logo-small.png'>&nbsp;KR Framework!</h1>
            <p>KR Framewor es un pequeño framework preparado para el diseño de webs rápidas con artquitectura MVC fácil e intuitiva.</p>
            <p><a href="http://www.krainet.net" class="btn btn-primary btn-lg" role="button">Ver más &raquo;</a></p>
        </div>


        <div class="row">

            <div class="col-sm-4">
                <div class="list-group">
                    <a href="/demoboot" class="list-group-item active">
                        <h4 class="list-group-item-heading">Soporte Bootstrap v3.x</h4>
                        <p class="list-group-item-text">Disfruta de las funcionalidades de Bootstrap integradas.</p>
                    </a>
                    <a href="/demoangular" class="list-group-item">
                        <h4 class="list-group-item-heading">Soporte Angular JS</h4>
                        <p class="list-group-item-text">Icluye la última versión de Ángular (Google) con algunos ejemplos.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">Gestión BBDD</h4>
                        <p class="list-group-item-text">CRUD Básico para gestión de BBDD's.</p>
                    </a>
                </div>
            </div><!-- /.col-sm-4 -->
        </div>

        <div class="alert alert-success">
            <strong>KR Framework</strong> Funcionando Correctamente!.
        </div>

        <div class="well">
            <p>Krainet.NET - Ramón Albertí Danés (krainet@gmail.com)</p>
        </div>


    </div> <!-- /container -->


</body>