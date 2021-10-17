<?php

class registros
{
    public $id;
    public $usuario;
    public $nombre;
    public $contrasena;
    public $telefono;
    public $email;
    public $rol;

    public function __construct($id, $rol, $usuario, $nombre, $contrasena, $telefono, $email)
    {
        $this->id = $id;
        $this->rol = $rol;
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
        $sql = $conexionBD->query("SELECT * FROM registro_u");
        foreach ($sql->fetchAll() as $registro) {
            $listaRegistros[] = new registros($registro['Id_Registro'], $registro['id_roles'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
        }
        return $listaRegistros;
    }



    public static function crear($rol, $usuario, $nombre, $contrasena, $telefono, $email)
    {
        $conexionBD = BD::crearInstacia();
        var_dump($conexionBD);

        $sql = $conexionBD->prepare("INSERT INTO registro_u(id_roles, Usuario, Nombre, Contrasena, Telefono, Email) VALUES (?,?,?,?,?,?)");
        $sql->execute(array($usuario, $nombre, $contrasena, $telefono, $email));
    }
    public static function borrar($id)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare(" DELETE FROM registro_u WHERE Id_Registro =?");
        $sql->execute(array($id));
    }
    public static function buscar($id)
    {
        $conexionBD = BD::crearInstacia();

        $sql = $conexionBD->prepare("SELECT * FROM registro_u WHERE Id_Registro=?");
        $sql->execute(array($id));
        $registro = $sql->fetch();
        return new registros($registro['Id_Registro'], $registro['id_roles'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
    }

    public static function editar($id, $rol, $usuario, $nombre, $contrasena, $telefono, $email)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("UPDATE registro_u SET Id_Registro=?, id_roles=?, Usuario=?, Nombre=?, Contrasena=?, Telefono=?, Email=?  WHERE Id_Registro=?");
        $sql->execute(array($rol, $usuario, $nombre, $contrasena, $telefono, $email, $id));
    }

    public static function login()
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare("SELECT * FROM registro_u WHERE Usuario = :usuario AND Contrasena = :contrasena");
        $sql->execute(array($id));
        $registro = $sql->fetch();
        return new registros($registro['Id_Registro'], $registro['id_roles'], $registro['Usuario'], $registro['Nombre'], $registro['Contrasena'], $registro['Telefono'], $registro['Email']);
    }
}
