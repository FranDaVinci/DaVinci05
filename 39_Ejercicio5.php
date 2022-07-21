<?php

    $num1 = $_GET ["num1"];
    $num2 = $_GET ["num2"];

    $sumar = $num1 + $num2;

    echo "La suma de $num1 mas $num2 es: $sumar";


?>

<form action="39_Ejercicio5.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2" id="">
        <br>
        <input type="submit" value="Resultado">
</form>