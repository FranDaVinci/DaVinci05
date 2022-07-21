<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $n1 = 20;
    $n2 = "15";

    echo "La Suma es: ", $n1 + $n2;
    echo "<br>La resta es: ", $n1 - $n2;
    echo "<br>La Multiplicación es: ", $n1 * $n2;
    echo "<br>La División es ", $n1 / $n2;

    //la división sin decimales:

    printf("<br>División sin decimales %d", $n1 / $n2);

    //División sin decimales cogiendo la parte entera:

    echo "<br> O bien: ", intval ($n1/$n2);

    echo "<br> El módulo de la división es ", $n1 % $n2;

    //Para concatenar se usa el punto

    echo "<br>Y así concatenamos: ", $n1 . $n2;



    ?>
    
</body>
</html>