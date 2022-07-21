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
<form name="form1" method="POST" action="85_electrodomesticos.php">
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
if (empty($_POST["productos"]))
    $precio=0;
else 
    $precio=$_POST["productos"];


if (empty($_POST["cantidad"]))
    $cantidad=0;
else
    $cantidad=$_POST["cantidad"];
  

echo "Precio del producto: ".$precio." €<br>";
echo "Cantidad: ".$cantidad."<br>";
echo "Precio total: ".$precio*$cantidad." €";

?>  
</body>   