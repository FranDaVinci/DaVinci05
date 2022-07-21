<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alvaro">
    <meta name="descripticon" content="Plantilla">
    <meta name="keyword" content="plantilla">
    <title>Plantilla</title>
    <link rel="stylesheet" type="text/css" href="pagina.css"/> <!--link para css-->
    <script type="text/javascript" src="pagina.js"></script> <!--link para javascript-->
</head>
<body>
    <form action="Ejer18.php" method="post">
        Columnas: <input type="text" name="columnas" size="4">
        Filas: <input type="text" name="filas" size="4"><br>
        <input type="submit">
    </form>
    <br>
    <div><?php escribir(); ?></div>
</body>
</html>

<?php
    function escribir()
    {
        //CAPTURAMOS LOS VALORES PARA GENERAR LA TABLA
        $texto = "";
        if (empty($_POST["columnas"]))
        {$_POST["columnas"]="0";$columnas = $_POST["columnas"];}
        else
        {$columnas = $_POST["columnas"];}

        if (empty($_POST["filas"]))
        {$_POST["filas"]="0";$filas = $_POST["filas"];}
        else
        {$filas = $_POST["filas"];}

        $texto .= "Generamos una tabla de ".($columnas-1)." columnas y ".($filas-1)." filas <br><br>";

        //GENERAMOS LA TABLA
        //Generamos el style de la tabla
        $texto .="<style>table,tr,th,td{border: 1px black solid; border-collapse: collapse; text-align: center; padding: 5px;}</style>";
        $texto .="<table>";
        for($x=0;$x<=$filas;$x++)
        {   
            $texto .="<tr>";
            if($x==0)
            {
                //Generamos los titulos de la tabla y las columnas
                for($y=0;$y<=$columnas;$y++)
                {
                    if($y == 0)
                    {$texto .="<th>TABLA</th>";}
                    else
                    {$texto .="<th>COLUMNA $y</th>";}
                    
                }
            }
            else
            {
                //Generamos los titulos de las filas y el contenido de las celdas
                for($y=0;$y<=$columnas;$y++)
                {
                    if($y == 0)
                    {$texto .="<th>FILA $x</th>";}
                    else
                    {$texto .="<td>col y $y<br> fila x $x<br></td>";}
                }
            }
            $texto .="</tr>";
        }    
        $texto .="</table>";

        //MOSTRAMOS LA TABLA EN PANTALLA
        echo $texto;
    }
    
    ?>