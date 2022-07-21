<?php
    $dia = $_GET ["dia"];
    $mes = $_GET ["mes"];

    $dias = array ("", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    $meses = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    echo ($dia > 0 && $dia <= 7) ? (($mes > 0 && $mes <= 12)?"Día $dias[$dia] y mes $meses[$mes]":"Mes incorrecto"):"Día incorrecto";
      

?>