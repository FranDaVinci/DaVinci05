<!DOCTYPE html>
<html>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" author="LuisPR">
        <title>Ejercicio formulario PHP</title>

</head>
<body>
<h1>VENTA DE PRODUCTOS ELECTRODOMÉSTICOS</h1>
<form name="form1" method="POST" action="85_electrodomesticos_MEJORADO.php">
       Nombre: <input type="text" name="nombre"><br>
       Producto:
       <select name="productos">
           <option value="0" name="nada" selected></option>
           <option value="1000" name="lavadora">Lavadora 10kg</option>
           <option value="2000" name="horno">Horno</option>
           <option value="3000" name="vitro">Vitrocerámica</option>
       </select><br>
       Cantidad: <input type="text" name="cantidad"><br>
       <input type="submit" value="Procesar">
    </form>
<?php
  
    if (empty($_POST['nombre'])? $nombre="" : $nombre=$_POST['nombre'] );
    if (empty($_POST['productos'])? $precio=0 : $precio=$_POST['productos'] );
    if (empty($_POST['cantidad'])? $cantidad=0 : $cantidad=$_POST['cantidad'] );



// if (empty($_POST["productos"]))
//     $precio=0;
// else 
//     $precio=$_POST["productos"];


// if (empty($_POST["cantidad"]))
//     $cantidad=0;
// else
//     $cantidad=$_POST["cantidad"];

  
echo "Nombre del cliente: $nombre. <br>";
echo "Precio del producto: ".$precio." €<br>";
echo "Cantidad: ".$cantidad."<br>";
echo "Precio total: ".$precio*$cantidad." €<br>";

if ($_POST) {
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['productos'];
    $subtotal = $cantidad * $precio;
    $descuento = 0;

    if ($cantidad > 0 && $cantidad <= 2) {
        echo "Lo sentimos pero esta compra no obtiene descuento.";

    }   elseif ($cantidad >= 2.01 && $cantidad <= 5) {
            $descuento = $subtotal * 0.10;
            echo "Esta compra tiene un descuento del 10%.";
    } 
        elseif ($cantidad >= 5.01 && $cantidad <= 10) {
            $descuento = $subtotal * 0.15;
            echo "Esta compra tiene un descuento del 15%.";
    } 
        else {
            $descuento = $subtotal * 0.20;
            echo "Esta compra tiene un descuento del 20%.";
    } 

    
    $precio = $subtotal - $descuento;
    echo "<br>El Precio total a pagar con el descuento es de: $precio €.";
}


?>  
</body>   