<?php
/* 
Crea una página que contenga un formulario con una casilla de texto que pida al usuario su nombre y sus dos apellidos. Cuando introduzca datos, una segunda página le mostrará su primer apellido (con todas las letras en minúscula menos la primera), el segundo apellido (igual) y el nombre (igual). Supondremos que habrá dos apellidos y que cada apellido estará formado por una única palabra, pero que el nombre puede ser compuesto (tener una palabra, dos o más). 
*/

    $nombre = $_GET ["nombre"];

    echo ucwords(strtolower($nombre));

?>