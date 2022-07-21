<?php
$minutos = 3;
$minutos = $_GET['minutos'];

$resto = $minutos % 3;
$minutos = ( $minutos - $resto) / 3; 
$precio = $minutos * 5 + 10;
echo "Coste: $precio";

?>