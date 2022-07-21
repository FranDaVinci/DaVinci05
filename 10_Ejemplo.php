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
//Recorremos el array semana y cada valor lo asigna a la variable d$ia
        $semana = array ("lunes","martes","miercoles","jueves","viernes","sabado","domingo");

        foreach ($semana as $dia) {
            echo "$dia, " ;
        }
        echo "<hr>";

        // Foreach

        $capital = array ("Cantabria" => "Santander", "Esukadi" => "Vitoria", "Aragón" => "Zaragoza", "Navarra" => "Pamplona");
        foreach ($capital as $clave => $ciudad) {
            echo "$ciudad es la capital de $clave <br>";
        }




    ?>
    
</body>
</html>