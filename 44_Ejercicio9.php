<?php

    $num1 = $_GET ["num1"];
    $num2 = $_GET ["num2"];
    $idiom = $_GET ["idiom"];
    $multi = $num1 % $num2;

    if ($multi == 0) {
        if ($idiom == "español")
            echo "El número $num1 es multiplo de $num2.";
        
        else {
            echo "The number $num1 is multiple of $num2";
        } 
    }
    else {
       echo "Los números que ha introducido no son multiplos";
    }
?>