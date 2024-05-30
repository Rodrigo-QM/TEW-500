<?php
class Estudiante{
    private $nombre;
    private $grupo;
    private $id;

    public function __construct($nombre, $grupo, $id = null){
        $this->nombre = $nombre;
        $this->grupo = $grupo;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar (){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO estudiantes (nombre, grupo) VALUES (?, ?)");
        $sentencia->bind_param("ss",$this->nombre, $this->grupo);
        $sentencia->execute();
    }

    public function obtener(){
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre, grupo FROM estudiantes");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerUno($id){
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre, grupo FROM estudiantes WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }

    public function actualizar(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE estudiantes SET nombre=?, WHERE id=?");
        $sentencia->bind_param("ssi",$this->nombre, $this->grupo, $this->$id);
        $sentencia->execute();
    }

    public function eliminar($id){
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM estudiantes WHERE id=?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
?>