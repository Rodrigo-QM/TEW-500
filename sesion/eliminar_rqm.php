<?php

session_start(); //Iniciar sesion

session_unset();

session_destroy();

echo "Secion destruida y variables de sesion eliminadas";

?>