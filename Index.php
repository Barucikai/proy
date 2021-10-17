<?php

$controller = "paginas";
$accion = "inicio";

if (isset($_GET['controller']) && isset($_GET['accion'])) {


    /* Validacion se los parametros llegan vacios o que no existan */
    if (($_GET['controller'] != "") && ($_GET['accion'] != "")) {
        $controller = $_GET['controller'];
        $accion = $_GET['accion'];


        //Esta llegando el controlador print_r($controller);
    }
}



require_once("vista/template.php");
