<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos de Varibles</title>
</head>
<body>
    <?php

    //Variables de tipo booleano: si/no verdadero/falso, true/false o 0/1

    $moroso = true;
    $pagado = false;

    echo "El estudiante que no pagó está en estado ", $moroso;
    echo "<br>El estudiante que ya pagó está en estado ", $pagado;

    //Variable de tipo entero y decimal

    $entero = 40;
    $enteroNegativo = -20;
    $decimal = 7.6;
    $exponencial1 = 2e3; //2 * 10 ^ 3
    $exponencial2 = pow(2,3); //2 ^ 3
    $exponencial3 = 2**3; // 2 ^ 3

    echo "<br>Entero: ", $entero;
    echo "<br>Entero Negativo: ", $enteroNegativo;
    echo "<br>Decimal: ", $decimal;
    echo "<br>Exponencial: ", $exponencial1;
    echo "<br> Eponencial con pow (b,e): ",  $exponencial2;
    echo "<br> Eponencial con **: ",  $exponencial3;

    //Variables de tipo Array

    $color = array ("rojo", "amarillo", "azul", "naranja");

    echo "<br>El tercer color dentro de la array es: ", $color[2];

    ?>
    
</body>
</html>