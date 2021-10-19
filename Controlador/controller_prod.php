
<?php
/*
Muestra la conexion si esta fallida o ingresa sin ningun problema
*/
include_once('Modelo/ing_productos.php');
include_once("conexion.php");
BD::crearInstacia();

class ControllerProd
{
    public function inicio()
    {
        $productosP = productos::consultar();

        include_once("vista/productos/inicio.php");
    }

    public function crear()

    {
        if ($_POST) {
            print_r($_POST);
            $nombre = $_POST['nombre'];
            $descrip = $_POST['descrip'];
            $foto = $_POST['foto'];
            productos::crear($nombre, $descrip, $foto);
            header("Location:./?controller=prod&accion=inicio");
        }
        include_once("vista/productos/crear.php");
    }

    public function editar()
    {

        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descrip = $_POST['descrip'];
            $foto = $_POST['foto'];
            productos::editar($id, $nombre, $descrip, $foto,);
        }
        $id = $_GET['id'];
        $productosP = productos::buscar($id);
        include_once("vista/productos/editar.php");
    }

    public function borrar()
    {
        $id = $_GET['id'];
        productos::borrar($id);
        header("Location:./?controller=prod&accion=inicio");
        include_once("vista/productos/borrar.php");
    }
}
