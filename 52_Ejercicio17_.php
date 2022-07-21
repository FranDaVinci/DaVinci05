<?php
//Crea una función que reciba un texto y lo escriba separando cada par de letras con un espacio. Las letras impares (primera, tercera, etc.) deben estar en negrita, pero las pares no 
    $cadena = $_GET ["cadena"];
    $separador = " ";

    $separada = explode($separador, $cadena);

    var_dump ($separada);


  
?>
