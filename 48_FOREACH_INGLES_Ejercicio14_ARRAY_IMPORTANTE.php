<?php
//Crea un array que contenga textos en español como índice y textos en inglés como valor, de modo que se pueda usar para traducir los nombres de los números (del 1 al 10) de español a inglés (por ejemplo, a "uno" le corresponderá "one"). A partir de un formulario en el que el usuario introduzca una palabra, se le dirá su traducción o "word not found", según proceda. 
    $spain = $_GET ["idioma"];
    $idioma = array ("uno"=>"one","dos"=>"two","tres"=>"three","cuatro"=>"four","cinco"=>"five","seis"=>"six","siete"=>"seven","ocho"=>"eight","nueve"=>"nine","diez"=>"ten");
    $salida = false;
    
    foreach ($idioma as $espanol => $ingles) {
        if ($spain == $espanol ) {
            echo "$espanol en inglés se escribe $ingles <br>";
            $salida = true;
        } 
       
    }if ($salida == false ) {
        echo "word not found";
    }  
  

?>