<?php

session_start(); //Iniciar sesion

$_SESSION["username"] = "RODRIGO";
$_SESSION["email"] = "rodrigo123@gmail.com";

echo "Sesion iniciada y variables de sesion establecidas";

?>