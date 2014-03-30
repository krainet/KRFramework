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
                <a class="navbar-brand" href="/home">AngularJS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/home">Go Home</a></li>
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
            <img src="public/img/fw/AngularJS-small.png"><h2>AngularJS Integrado!</h2>
            <p>Potente Framework JS by Google.</p>
            <p><a href="http://angularjs.org" target='new' class="btn btn-primary btn-lg" role="button">Aprender más &raquo;</a></p>
        </div>



        <div class="row">
            <div class="col-sm-4">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ejemplo Base Ángular</h3>
                    </div>
                    <div class="panel-body">
                        &nbsp;<p>
                        <div>
                            <label>Nombre:</label>
                            <input type="text" ng-model="yourName" placeholder="Cual es tu nombre?">
                            <hr>
                            <h1>Hola, {{yourName}}!</h1>
                        </div>                       
                    </div>
                </div>

            </div><!-- /.col-sm-4 -->

            <div class="col-sm-4">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Angular Adding</h3>
                    </div>
                    <div class="panel-body">
                        More examples...
                    </div>
                </div>

            </div><!-- /.col-sm-4 -->            


        </div> <!-- /container -->


        <div class="container">
            <div class="well">
                <p>Krainet.NET - Ramón Albertí Danés (krainet@gmail.com)</p>
            </div>        
        </div>

</body>