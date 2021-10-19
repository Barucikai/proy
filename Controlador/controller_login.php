<?php

include_once('Modelo/ing_servicio.php');
include_once("conexion.php");
BD::crearInstacia();
session_start();

class ControllerRol
{

    public function session()
    {

        if (isset($_GET['cerrar sesion'])) {
            session_unset();

            session_destroy();
        }

        if (isset($_SESSION['rol'])) {
            switch ($_SESSION['rol']) {
                case 1:
                    header("Location:./?controller=admit&accion=inicio");
                    break;
                case 2:
                    header("Location:./?controller=admit&accion=editar&id=?");
                    break;
                default:
            }

            if (isset($_POST['usur']) && isset($_POST['contra'])) {
                $usuario = $_POST['usur'];
                $contrasena = $_POST['contra'];
                $registro = registros::buscar($usuario, $contrasena);
                include_once("vista/admit/editar.php");
            }
        }
    }
}
