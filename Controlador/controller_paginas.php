<?php
class ControllerPaginas
{

    public function inicio()
    {
        include_once("vista/paginas/Inicio.php");
    }
    public function error()
    {
        include_once("vista/paginas/Error.php");
    }
}
