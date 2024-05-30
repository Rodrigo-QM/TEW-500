<?php

echo "Mostrar tiempo de vida de cookie<br>";

if (isset($_COOKIE["tew"])) {
    echo "Existe la cookies";
}else{
    echo "La cookie ha Expirado";
}

?>