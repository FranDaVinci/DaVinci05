<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecolum$columercicio de Tabla con PHP</title>
    <style>
        table, td {
            padding: 9px;
            border: solid 2px;
            border-collapse: collapse;
            background-color: lightgreen;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
        $colum;
        $fila;
        $num = 1;

        echo "<table>";

        for ($fila=0; $fila < 10 ; $fila++) { 
            echo "<tr>";

            for ($colum=0; $colum < 1 ; $colum++) { 
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
        echo "</table>";

//********************************************************************************************************/
        
        echo "<hr>";

        echo "<table>";
        $num = 1;

        for ($fila=0;$fila<10;$fila++) {
            echo "<tr>";

            for ($colum=0;$colum<3;$colum++) {
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>