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
//DATE para mostrar Fechas
        echo "Timesatamp actual: ".time()."<br>";//cantidad de segundos desde 1970

        echo "<br>".date_default_timezone_get();

        echo "<br>".date("d/m/Y -H:i:s");//Fecha actual
        
        echo "<br>".date("j/m/Y");//Fecha actual
        
        echo "<br>".date("H:i:s j/n/Y", 999914410); //Fecha cualquiera con el timestamp, el numero cambia la hora y el año.

        $fecha = strtotime("20 September 2014");
        echo "<br>".date("M", $fecha);





    

    ?>


</body>
</html>