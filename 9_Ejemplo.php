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
    $i = 2;

    $persona = array (
        array ("nombre"=>"Juan", "apellido"=>"Lopez", "nacimiento"=>"1973", "residencia"=> "Madrid"),
        array ("nombre"=>"Maria", "apellido"=>"Flores", "nacimiento"=>"1968", "residencia"=> "Sevilla"),
        array ("nombre"=>"Ana", "apellido"=>"Garrido", "nacimiento"=>"1964", "residencia"=> "Barcelona"),
    );

    echo "El año de nacimiento de {$persona[$i]['nombre']} es {$persona[$i]['nacimiento']}";

//entre corchetes podriamos poner el numero de posicion de cada cosa que le pidas a la array
//echo "El año de nacimiento de {$persona[2][0]} es {$persona[2][2]}";************************************
    ?>
</body>
</html>