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

        function obtener_edad_segun_fecha($fecha_nacimiento) {
            $nacimiento = new DateTime($fecha_nacimiento);
            $ahora = new DateTime(date("Y-m-d"));
            $diferencia = $ahora->diff($nacimiento);
            return $diferencia->format("%y");
        }


        $fechas = ['1984-06-12', '1990-07-09', '1937-01-01', '1789-12-31'];
        foreach($fechas as $fecha) {
            echo ("La edad para el que nació en la fecha " . $fecha ." es:<br>" . obtener_edad_segun_fecha ($fecha)) . " años de edad.<br>" ;
        }


    ?>
    
</body>
</html>