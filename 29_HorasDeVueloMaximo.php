<?php
/*En una aplicación web para una agencia de vuelos requieren de nuestra ayuda, necesitan un pequeño script que impida que un piloto tenga más horas de vuelo que las recomendadas. Deberemos mostrar un mensaje de error en caso de que se hayan sobrepasado las horas o, en caso contrario, incrementar el número de horas dado en la variable con las horas de vuelo del piloto. Los datos iniciales para el ejercicio son: 

Recibimos las horas de vuelo totales del piloto en $horasTotales. 

Las horas de vuelo a añadir las podremos saber con $horasVuelo. 

Las horas máximas de vuelo permitidas a un mismo piloto vendrán en la variable $maxHoras.
*/

    if ( ( $horasTotales + $horasVuelo ) < $maxHoras ) {
        $horasTotales = $horasTotales + $horasVuelo;
    } else {
        echo 'Error, el piloto no puede volar más de ' . $maxHoras . ' horas de vuelo.';
    }

?>