<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $valor = 10;

        //suma el valor de la derecha al valor de la varaiable de la izquierday lo asigna a la variable( 
        // seria como incrementar la variable en una cantidad)
        $valor += 3; //$valor = $valor + 3
        
        echo "Valor 10 incrementado en 3: ", $valor;
        $valor -= 3; //$valor = $valor - 3
        echo "<br> Valor 13 decrementado en 3: ", $valor;

        $valor *= 3; //$valor = $valor * 3
        echo "<br> Valor 10 con acumulador de multiplicación en 3: ", $valor;

        $valor /= 3; //$valor = $valor / 3
        echo "<br> Valor 30 con acumulador de división en 3: ", $valor;

        $valor .= "100";
        echo "<br> Valor 10 con acumulador de concatenación es: ", $valor;

        //incremento en 1
        $valor1 = 10;

        $valor1++;
        echo "<br>Valor con incremento en uno ",$valor1;

        //decremento en 1
        $valor1--;
        echo "<br>Valor con decremento en uno ",$valor1;

        /*
        operadores de comparacion (condicionales), van a devolver valores booleanos, true, false

        == (igual)
        != (distinto a...)
        <>
        >
        >= (mayor o igual)
        <= (menor o igual)
        <
        === (estrictamente igual)

        */

        //Comparación de cadenas

        $cadena1 = "Antonio";
        $cadena2 = "Beatriz";
        //Si comparo las dos cadenas, la segunda es mayor que la primera.
        /*
        orden de prioridad de mayor a menor:
        1º.Minúsculas
        2º.Mayúsculas
        3º.Números  
        */
        if ($cadena1 < $cadena2) {
            echo "<br>Es mayor la segunda";
        } 
        
    ?>
    
</body>
</html>