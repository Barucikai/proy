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
        foreach ($sql->fetchAll() as $registroz) {
            $listaRegistros[] = new registros($registroz['Id_Registro'], $registroz['Usuario'], $registroz['Contrasena'], $registroz['Telefono'], $registroz['Email']);
        }
        return $listaRegistros;
    }

    /*

    public static function crear($nombre, $descripcion, $redes)
    {
        $conexionBD = BD::crearInstacia();
        var_dump($conexionBD);

        $sql = $conexionBD->prepare("INSERT INTO servicios(nombre_ser, descripcion_ser, redes_ser) VALUES (?,?,?)");
        $sql->execute(array($nombre, $descripcion, $redes));
    }
    public static function borrar($id)
    {
        $conexionBD = BD::crearInstacia();
        $sql = $conexionBD->prepare(" DELETE FROM servicios WHERE id_ser =?");
        $sql->execute(array($id));
    }
    public static function buscar($id)
    {
        $conexionBD = BD::crearInstacia();

        $sql = $conexionBD->prepare("SELECT * FROM servicios WHERE id_ser=?");
        $sql->execute(array($id));
        $servicios = $sql->fetch();
        return new servicio($servicios['id_ser'], $servicios['nombre_ser'], $servicios['descripcion_ser'], $servicios['redes_ser']);
    }
    public static function editar($id, $nombre, $descripcion, $redes)
    {
        //Realiza la conexion
        $conexionBD = BD::crearInstacia();
        //inicia la conexion /luego prepara la sintaxis de MYSQL para relizar la actualizacion. | pregunta nombre  = ? que esoara le llamod de $_POST
        $sql = $conexionBD->prepare("UPDATE servicios SET nombre_ser=?, descripcion_ser=?, redes_ser=? WHERE id_ser=?");
        //Ejecuta la intrucon y la guarda en un ARREGLO para lugo enviara al controlador
        $sql->execute(array($nombre, $descripcion, $redes, $id));
    }
    */
}
