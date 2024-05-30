<?php

$cookie_name = "tew";//Nombre de la cookie
$cookie_valor = "Olga, Rodrigo, Jheferson, Limbert";//Valor de la cookie
$cookie_expire = time() + 10;//Tiempo de expiracion de la cookie

//Crear la cookie
setcookie($cookie_name, $cookie_valor, $cookie_expire, "/");

echo "cookie creada";

?>