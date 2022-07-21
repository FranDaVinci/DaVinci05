<?php
    $num = [11, 2566, 23, 460, 5, 65, 17, 8, 49, 10];
    // $num1 = count($num);
    $result = 0;

//empezamos el bucle. COUNT cuenta el numero de valores de la array
    for ($i = 0; $i < count($num) ; $i++) { 
        $result = $result + $num[$i];
    }
    $media = $result / count($num);
    echo "La media es: $media";

// a partir de aqui muestra los numeros que son mayores a la media.
    for ($i=0 ; $i < count($num) ; $i++) { 
        if ($num[$i] > $media) {
            echo "<br>Por encima de la media estan: $num[$i]";
        }
    }




?>