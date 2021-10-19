<?php

class productos
{
    public $id;
    public $nombre;
    public $descrip;
    public $foto;

    public function __construct($id, $nombre, $descrip, $foto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descrip = $descrip;
        $this->foto = $foto;
    }

    public static function consultar()
    {
        $listaRegistrosP = [];
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->query("SELECT * FROM registro_p");
        foreach ($sql->fetchAll() as $registroP) {
            $listaRegistrosP[] = new productos($registroP['Id_Registro_p'], $registroP['Nombre'], $registroP['Descripcion'], $registroP['foto']);
        }
        return $listaRegistrosP;
    }


    public static function crear($nombre, $descrip, $foto)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("INSERT INTO registro_p(Nombre, Descripcion, foto) VALUES (?,?,?)");
        $sql->execute(array($nombre, $descrip, $foto));
    }


    public static function borrar($id)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare(" DELETE FROM registro_p WHERE Id_Registro_p =?");
        $sql->execute(array($id));
    }
    public static function buscar($id)
    {
        $conexionBD = BD::crearInstacia();

        $sql = $conexionBD->prepare("SELECT * FROM registro_p WHERE Id_Registro_p=?");
        $sql->execute(array($id));
        $registroP = $sql->fetch();
        return new productos($registroP['Id_Registro_p'], $registroP['Nombre'], $registroP['Descripcion'], $registroP['foto']);
    }

    public static function editar($id, $nombre, $descrip, $foto)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("UPDATE registro_p SET Nombre=?, Descripcion=?, foto=?  WHERE Id_Registro_p=?");
        $sql->execute(array($nombre, $descrip, $foto, $id));
    }
    /*
    public static function login($id)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("SELECT * FROM registro_u WHERE Usuario = :usuario AND Contrasena = :contrasena");
        $sql->execute(array($id));
        $registro = $sql->fetch();
        return new registros($registro['Id_Registro'], $registro['id_roles'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
    }
    */
}
