<?php

    function calcular($campo) { 
        return isset($_GET [$campo]) ? $_GET [$campo] : '';
    }

    $primer = calcular ('primer');
    $segun = calcular ('segun');
    $postre = calcular ('postre');

    $factura = $primer + $segun + $postre;
    $iva = $factura * 0.21;
    $total = $factura + $iva;

    echo "la factura asciende a $factura €";
    echo "<br>El IVA del 21% es $iva €";
    echo "<br><p style= 'background-color: red; color: white;'>Total a pagar '$total' € </p>";



?>