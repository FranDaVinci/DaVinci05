<?php
/*Crea un formulario que te pida dos números y una página en PHP que muestre su suma, su diferencia, su producto y el resultado de dividir el primero entre el segundo.  */

    $n1 = $_GET ["numero1"];
    $n2 = $_GET ["numero2"];

    $sumar = $n1 + $n2;
    $restar = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;

    echo "La Suma de $n1 mas $n2 es: $sumar";
    echo "<br>La Resta de $n1 menos $n2 es: $restar";
    echo "<br>La Multiplicación de $n1 entre $n2 es: $mult";
    echo "<br>La División de $n1 entre $n2 es: $div";
?>