<?php

class registros
{
    public $id;
    public $usuario;
    public $nombre;
    public $contrasena;
    public $telefono;
    public $email;

    public function __construct($id, $usuario, $nombre, $contrasena, $telefono, $email)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public static function consultar()
    {
        $listaRegistros = [];
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->query("SELECT * FROM registro");
        foreach ($sql->fetchAll() as $registro) {
            $listaRegistros[] = new registros($registro['Id_Registro'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
        }
        return $listaRegistros;
    }

    public static function crear($usuario, $nombre, $contrasena, $telefono, $email)
    {
        $conexionBD = BD::crearInstacia();


        $sql = $conexionBD->prepare("INSERT INTO registro(Usuario, Nombre, Contrasena, Telefono, Email) VALUES (?,?,?,?,?)");
        $sql->execute(array($usuario, $nombre, $contrasena, $telefono, $email));
    }
    public static function borrar($id)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare(" DELETE FROM registro WHERE Id_Registro =?");
        $sql->execute(array($id));
    }
    public static function buscar($id)
    {
        $conexionBD = BD::crearInstacia();

        $sql = $conexionBD->prepare("SELECT * FROM registro WHERE Id_Registro=?");
        $sql->execute(array($id));
        $registro = $sql->fetch();
        return new registros($registro['Id_Registro'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
    }

    public static function editar($id, $usuario, $nombre, $contrasena, $telefono, $email)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("UPDATE registro SET Usuario=?, Nombre=?, Contrasena=?, Telefono=?, Email=?  WHERE Id_Registro=?");
        $sql->execute(array($usuario, $nombre, $contrasena, $telefono, $email, $id));
    }
}
