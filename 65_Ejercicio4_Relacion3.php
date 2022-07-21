<?php
/* Elabore un programa que lea un carácter y determine si es: 1. una letra mayúscula 2. una letra minúscula 3. un carácter numérico 4. un blanco 5. un carácter de puntuación 6. un carácter especial (punto o coma) */ 

    $caracter = $_GET['caracter'];

    if ($caracter > "a" && $caracter < "z") {
        echo "$caracter es una letra Minúscula";
    }  
    else if ($caracter > "A" && $caracter < "Z") {
        echo "$caracter es una letra Mayúscula";
    }
    else if ($caracter >= 0 && $caracter < 10000000000) {
        echo "$caracter es un NUMERO Positivo";
    }
    else if ($caracter <= 0 && $caracter > -10000000000) {
        echo "$caracter es un NUMERO Negativo";
    }
    else if ($caracter == "." || $caracter == ",") {
        echo "$caracter es un caracter de Puntuación";
    }
    else if ($caracter == " ") {
        echo "$caracter es un espacio en Blanco";
    }
?>