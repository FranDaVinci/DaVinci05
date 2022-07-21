<?php
    $num1 = $_GET ["num1"];
    $num2 = $_GET ["num2"];

    $oper1 = $_GET ["oper1"];

    if ($oper1 == "suma") {
        $oper1 = $num1 + $num2;
        echo "La Suma de $num1 mas $num2 es: $oper1";
    }
    if ($oper1 == "resta") {
        $oper1 = $num1 - $num2;
        echo "La Resta de $num1 menos $num2 es: $oper1";
    }
    if ($oper1 == "multiplicacion") {
        $oper1 = $num1 * $num2;
        echo "La Multiplicación de $num1 entre $num2 es: $oper1";
    }
    if ($num2 == 0) {
        echo "No se puede dividir entre cero";       
    }
    elseif ($oper1 == "division") {
    $oper1 = $num1 / $num2;
    echo "La División de $num1 entre $num2 es: $oper1"; 
?>

    <form action="40_Ejercicio6.php" method="get">
        <input type="number" name="num1" id=""><br>
        <input type="number" name="num2" id=""><br>
        <select name="oper1" id="">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="submit" value="Resultado">

    </form>

<?php
    }


    // if ($num2 == 0) {
    //     echo "No se puede dividir entre cero";       
    // }

?>