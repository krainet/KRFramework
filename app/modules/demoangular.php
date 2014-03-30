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
                <a class="navbar-brand" href="#">Demo Angular</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/home">Go Back</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container theme-showcase" role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
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

        </div>



        <div class="well">
            <p>Krainet.NET - Ramón Albertí Danés (krainet@gmail.com)</p>
        </div>


    </div> <!-- /container -->


</body>