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

    $diadelasemana = array (1, 2, 3, 4, 5, 6, 7); 

    $diadelasemana =6;

    if ($diadelasemana == 1) {
        echo "Hoy es Lunes";
    } elseif ($diadelasemana == 2) {
            echo "Hoy es Martes";
    }
      elseif ($diadelasemana == 3) {
            echo "Hoy es Miercoles";
    }
      elseif ($diadelasemana == 4) {
            echo "Hoy es jueves";
    }
      elseif ($diadelasemana == 5) {
            echo "Hoy es Viernes";
    }
      elseif ($diadelasemana == 6) {
            echo "Hoy es Sabado";
    }
      elseif ($diadelasemana == 7) {
            echo "Hoy es Domingo";
    }
        else echo "El dia no es correcto";

    

    ?>
    
</body>
</html>