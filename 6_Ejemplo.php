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
    $cadena1 = "Hola";
    $cadena2 = "Mundo";

    $dia = 19;
    $hoy = "<br> Hoy es el dia $dia en comillas dobles";
    $hoy2 = '<br> Hoy es el dia $dia en comillas simples';
    $hoy3 = "<br> Hoy es el dia {$dia} en comillas dobles";
    $hoy4 = "<br> Hoy es el dia '$dia' en comillas simples dentro de dobles";

    echo "<br>", $cadena1,$cadena2;
    echo "<br>", $cadena1."".$cadena2;
    echo $hoy;
    echo $hoy2;
    echo $hoy3;
    echo $hoy4;

    ?>
    
</body>
</html>