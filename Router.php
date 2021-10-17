<?php

/*Validar con un swich los parametros que se envien por _GET,
sen casos de que el usuario consulte un controlador o accion n validad*/

include_once("Controlador/controller_" . $controller . ".php");
$objControlador = "Controller" . ucfirst($controller);
$controller = new $objControlador();
$controller->$accion();
