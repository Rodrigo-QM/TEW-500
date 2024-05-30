<?php
class Materia{
    private $nombre;
    private $id;

    public function __construct($nombre, $id = null){
        $this->nombre = $nombre;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar (){
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO materias (nombre) VALUES (?)");
        $sentencia->bind_param("s",$this->nombre);
        $sentencia->execute();
    }

    public function obtener(){
        global $mysqli;
        $resultado = $mysqli->query("SELECT id, nombre FROM materias");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public static function obtenerUna($id){
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, nombre FROM materias WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }

    public function actualizar(){
        global $mysqli;
        $sentencia = $mysqli->prepare("UPDATE materias SET nombre=? WHERE id=?");
        $sentencia->bind_param("si",$this->nombre, $this->$id);
        $sentencia->execute();
    }

    public function eliminar($id){
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM materias WHERE id=?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
?>