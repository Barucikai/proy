<?php
/*
Muestra la conexion si esta fallida o ingresa sin ningun problema
*/
include_once('Modelo/ing_servicio.php');
include_once("conexion.php");
BD::crearInstacia();

class ControllerAdmit
{
    public function inicio()
    {
        $registro = registros::consultar();

        include_once("vista/admit/inicio.php");
    }

    public function crear()

    {
        if ($_POST) {
            print_r($_POST);
            $usuario = $_POST['usur'];
            $nombre = $_POST['nombre'];
            $contrasena = $_POST['contra'];
            $telefono = $_POST['tele'];
            $email = $_POST['email'];
            registros::crear($usuario, $nombre, $contrasena, $telefono, $email);
            header("Location:./?controller=admit&accion=inicio");
        }
        include_once("vista/admit/crear.php");
    }



    public function editar()
    {

        if ($_POST) {
            $id = $_POST['id'];
            $usuario = $_POST['usur'];
            $nombre = $_POST['nombre'];
            $contrasena = $_POST['contra'];
            $telefono = $_POST['tele'];
            $email = $_POST['email'];
            registros::editar($id, $usuario, $nombre, $contrasena, $telefono, $email);
        }
        $id = $_GET['id'];
        $registro = registros::buscar($id);
        include_once("vista/admit/editar.php");
    }

    public function borrar()
    {
        $id = $_GET['id'];
        registros::borrar($id);
        header("Location:./?controller=admit&accion=inicio");
        include_once("vista/admit/borrar.php");
    }
}
