<?php
class Nota{
    private $puntaje, $idEstudiante, $idMateria;

    public function __construct($puntaje, $idEstudiante, $idMateria){
        $this->puntaje = $puntaje;
        $this->idEstudiante = $idEstudiante;
        $this->idMateria = $idMateria;
    }

    public function guardar (){
        global $mysqli;
        $this->eliminar();
        $sentencia = $mysqli->prepare("INSERT INTO notas_estudiantes_materias
        (id_estudiante, id_materia, puntaje) VALUES (?, ?, ?)");
        $sentencia->bind_param("ssd",$this->idEstudiante, $this->idMateria, $this->puntaje);
        $sentencia->execute();
    }

    public static function obtenerDeEstudiante($idEstudiante){
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT id, id_estudiante, id_materia, puntaje
        FROM notas_estudiantes_materias WHERE id_estudiante = ?");
        $sentencia->bind_param("i", $idEstudiante);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public static function combinar($materias, $notas){
        for ($x=0; $x < count($materias); $x++) {
            $materias[$x]["puntaje"] = self::obtenerCalificacion($notas, $materias[$x]["id"]);
        }
        return $materias;
    }

    public static function obtenerCalificacion($notas, $idMateria){
        foreach ($notas as $nota) {
            if (intval($nota["id_materia"]) === intval($idMateria)) {
                return $nota["puntaje"];
            }
        }
        return 0;
    }

    public function eliminar(){
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM notas_estudiantes_materias
        WHERE id_estudiante=? AND id_materia=?");
        $sentencia->bind_param("ii", $this->idEstudiante, $this->idMateria);
        $sentencia->execute();
    }
}
?>