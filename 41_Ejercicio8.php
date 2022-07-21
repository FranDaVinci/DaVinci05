<?php
/* 
Crea una página con un formulario, que pida al usuario un nombre y una contraseña. Si el nombre es "yo" y la contraseña es "1234", dirá "Bienvenido"; de lo contrario, dirá "Acceso no permitido". 
*/
    $nombre = $_POST ["nombre"];
    $pass = $_POST ["pass"];

    if (($nombre == "yo") && ($pass == 1234)) {
        echo "Bienvenido a su cuenta";
    } else {
            echo "Acceso no permitido";
    }


?>