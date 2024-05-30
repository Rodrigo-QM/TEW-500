<?php

session_start(); //Iniciar sesion

if(isset($_SESSION["username"]) && isset($_SESSION["email"])){
    echo "Usuario: ".$_SESSION["username"]."<br>";
    echo "Email: ".$_SESSION["email"];
}else{
    echo "No hay variables de sesion establecidas";
}

?>