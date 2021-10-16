<?php
//se establece la conxion de la base de datos
class BD
{
    private static $instancia = NULL;

    public static function crearInstacia()
    {
        if (!isset(self::$instancia)) {

            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia = new PDO('mysql:host=localhost;dbname=novacel', 'root', '', $opcionesPDO);
        }
        return self::$instancia;
    }
}
