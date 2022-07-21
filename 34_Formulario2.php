<?php
/*
 Crea un formulario que te pida el radio de una circunferencia y una página en PHP que muestre la longitud de la circunferencia (2*PI*radio) y la superficie del círculo correspondiente (PI*radio2). 
*/
    $radio = $_GET ["radio"];
    $pi = 3.1415;
    $longitud = 2 * $pi * $radio;
    $superficie = $pi * pow ($radio,2);

    echo "La longitud es: $longitud";
    echo "<br>La superficie es: $superficie";



?>