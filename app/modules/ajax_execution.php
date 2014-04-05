<?php
/*
 * Users Module
 * @author Ramón Albertí
 */
?>


&nbsp;<p>
<div class="container theme-showcase" role="main">

    &nbsp;<p>

    <div class="well">
        <form name="ftest" method="post" action="self">
            <input type="text" name="prueba" value=""><input type="submit" value="Enviar">
        </form>
    </div>
        
        
    <div class="alert alert-success">
        <strong>KR Framework</strong> Ajax Module Loaded!.
    </div>

    <div class="well">
        <p>Krainet.NET - Ramón Albertí Danés (krainet@gmail.com)</p>
    </div>


</div> <!-- /container -->


<?php Modules_Fw::getModule('ajax/users'); ?>

