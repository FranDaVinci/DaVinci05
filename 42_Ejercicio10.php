<?php
    $mes = $_GET ["mes"];

    switch ($mes) {
        case 1:
            echo "El mes 1 corresponde a Enero";
            break;
        case 2:
            echo "El mes 2 corresponde a Febrero";
            break;
        case 3:
            echo "El mes 3 corresponde a Marzo";
            break;
        case 4:
            echo "El mes 4 corresponde a Abril";
            break;
        case 5:
            echo "El mes 5 corresponde a Mayo";
            break;
        case 6:
            echo "El mes 6 corresponde a Junio";
            break;
        case 7:
            echo "El mes 7 corresponde a Julio";
            break;
        case 8:
            echo "El mes 8 corresponde a Agosto";
            break;
        case 9:
            echo "El mes 9 corresponde a Septiembre";
            break;
        case 10:
            echo "El mes 10 corresponde a Octubre";
            break;
        case 11:
            echo "El mes 11 corresponde a Noviembre";
            break;
        case 12:
            echo "El mes 12 corresponde a Diciembre";
            break;
        
        default:
            # code...
            break;
    }


?>