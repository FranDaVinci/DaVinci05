<?php
    $cliente = $_POST['cliente'];
    $selec = $_POST ['selec'];
    $cantidad = $_POST ['cantidad'];

    echo "Cliente: $cliente<br>";
    echo "Cantidad: $cantidad<br>";
 

    // if (isset($_POST['cantidad']))
    // {
    //   if (!empty($_POST['cantidad']))
    //   {
    //       echo "<br/>";
    //       $cantidad = $selec;
    //       $cantidad = $_POST['cantidad'];
    //       echo "Cantidad a comprar: " . $cantidad;
    //   }
    // }
 
    $precio = $selec;
    $subprecio = $cantidad * $selec;
    // $descuento = $total * 0.10;
    $total = $subprecio ;
   


    echo "<br>El precio es: $selec €";
    // echo "<br>El descuento es: $descuento €" ;
    echo "<br>El total es: $total €"

?>