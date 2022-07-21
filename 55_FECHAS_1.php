<?php
/**Elaborar un programa que pida al usuario en un formulario unos segundos y la convierta en horas, minutos y segundos.  */

    $segundos =3600;
    $segundos = $_GET ['segundos'];
    $minutos = intval($segundos / 60);
    $horas = intval($segundos / 3600);

    echo "Has ingresado $segundos Segundos <br>";
    echo "En minutos son: $minutos Minutos<br>";
    echo "En horas son: $horas Horas<br>";

    // $horasreales = intval($horas);
    // $horasreales = ($horas - $horasreales) * 60;
    // $minutosreales = intval($minutos);
    
    // $segundos = ($minutos - $minutosreales);
    // $segundosreales = intval($segundos);
    // echo "$horasreales h: $minutosreales : $segundosreales <br>"


?>