<?php

session_start(); //Iniciar sesion

if(isset($_SESSION["C.I."]) && isset($_SESSION["NOMBRE"]) 
    && isset($_SESSION["ApPATERNO"]) && isset($_SESSION["ApMATERNO"]) 
    && isset($_SESSION["CARRERA"]) && isset($_SESSION["MATERIA"])){
    echo "Cedula Identidad: ".$_SESSION["C.I."]."<br>";
    echo "Nombre: ".$_SESSION["NOMBRE"]."<br>";
    echo "Apellido Paterno: ".$_SESSION["ApPATERNO"]."<br>";
    echo "Apellido Materno: ".$_SESSION["ApMATERNO"]."<br>";
    echo "Carrera: ".$_SESSION["CARRERA"]."<br>";
    echo "Materia: ".$_SESSION["MATERIA"];
}else{
    echo "No hay variables de sesion establecidas";
}

?>