<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="80_FORMULARIO_AVANZADO.php" method="post">
        <fieldset><legend>Venta de Productos Electrodomesticos</legend>
            Cliente:<input type="text" name="cliente">
            <br>
            Producto:<select name="selec" id="">
                <option value=""disabled selected>--------</option>
                <option value="750">Lavadora</option>
                <option value="870">Television</option>
                <option value="500">Tablet</option>
            </select>
            <br>
            Cantidad:<input type="number" name="cantidad" id="">
            <br>
            <input type="submit" value="Procesar">

        </fieldset>
    </form>
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
</body>
</html>