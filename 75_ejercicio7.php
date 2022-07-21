<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$operacion = $_POST['operacion'];
$suma = $n1+$n2;
$resta = $n1-$n2;
$producto = $n1*$n2;
$division = $n1/$n2;


switch($operacion){
    case '+':
        echo "El resultado de la suma de $n1 y $n2 es: $suma ";
        break;
    case '-':
        echo "El resultado de la resta de $n1 y $n2 es: $resta ";
        break;
    case '*':
        echo "El resultado de la multiplicación de $n1 y $n2 es: $producto ";
        break;
    case '/':
        echo "El resultado de la división de $n1 y $n2 es: $division ";
        break;
    
}

echo '<br><br><a href="ejercicio7.html">Volver al formulario</a>';
?>