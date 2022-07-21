<?php
    $edad = $_GET ["edad"];

    if ( $edad < 18 ) {
        echo "Lo sentimos, este contenido no esta recomendado para menores de 18 años.";
    }
    if ( $edad >= 18 && $edad < 65 ) {
        echo 'bienvenido a la web www.srcodigofuente.es/adultos-no-jubilados.';
     } 
    if ( $edad > 65 ) {
        echo 'Lo sentimos, este contenido está restringido a un rango de edad entre 18 y 65 años.';
     }
    
    //  ( $edad < 18 ) ? "Lo sentimos, este contenido no esta recomendado para menores de 18 años." (( $edad >= 18 && $edad < 65 ) ? "bienvenido a la web www.srcodigofuente.es/adultos-no-jubilados."  (( $edad > 65 )) : 'Lo sentimos, este contenido está restringido a un rango de edad entre 18 y 65 años.') 
    


     /*
     En este ejercicio vamos a resolver un problema surgido en una web de contenido especial, limitado a adultos no jubilados. Al usuario se le muestra por pantalla un mensaje y un campo para que introduzca su edad. Nosotros, en php, debemos de programar un algoritmo que resuelva el problema:  

Si la edad introducida es de un menor de edad, deberemos indicar que tiene el acceso prohibido  

Si la edad edad está por encima de los 65 le avisaremos diciéndole que el contenido, por desgracia, no es para jubilados.  

Por último si la edad está comprendida entre 18 y 65 le daremos la bienvenida a la web con un mensaje: bienvenido a la web www.srcodigofuente.es/adultos-no-jubilados.  
     */ 

?>