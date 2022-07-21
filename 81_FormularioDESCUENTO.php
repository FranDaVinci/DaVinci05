<?php

    if ($_POST) {
        $cantidad = $_POST['cantidad'];
        $valor = $_POST['valor'];
        $subtotal = $cantidad * $valor;
        $descuento = 0;

        if ($cantidad > 0 && $cantidad <= 2) {
            echo "Descuento del 0%";

        }   elseif ($cantidad >= 2.01 && $cantidad <= 5) {
                $descuento = $subtotal * 0.10;
                echo "El descuento es del 10%";
        } 
            elseif ($cantidad >= 5.01 && $cantidad <= 10) {
                $descuento = $subtotal * 0.15;
                echo "El descuento es del 15%";
        } 
            else {
                $descuento = $subtotal * 0.20;
                echo "El descuento es del 20%";
        } 

        
        $total = $subtotal - $descuento;
        echo "<br>El total a pagar es de $total €.";
    }

?>