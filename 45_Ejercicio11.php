
<?php
// Crea una página con un formulario que pida al usuario un número del 1 al 10 y escriba el nombre 
// del número (por ejemplo "tres" para el 3), usando "switch". 

    $numero = $_GET ["numero"];

    switch ($numero) {
        case 1:
           echo "Has elegido el número UNO";
           break;
        case 2:
           echo "Has elegido el número DOS";
           break;
        case 3:
           echo "Has elegido el número TRES";
           break;
        case 4:
           echo "Has elegido el número CUATRO";
           break;
        case 5:
           echo "Has elegido el número CINCO";
           break;
        case 6:
           echo "Has elegido el número SEIS";
           break;
        case 7:
           echo "Has elegido el número SIETE";
           break;
        case 8:
           echo "Has elegido el número OCHO";
           break;
        case 9:
           echo "Has elegido el número NUEVE";
           break;
        case 10:
           echo "Has elegido el número DIEZ";
            break;
        
    }

?>