<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Tabla con PHP</title>
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

//tabla con php para que la primera fila sea el titulo
    
      <?php
        $colum;
        $fila;
        $num = 1;
        
        echo "<hr>";

        echo "<table>";

        for ($fila=0;$fila<10;$fila++) {
            echo "<tr>";
            $numero = ($fila == 0) ? "<th colspan='3'>Tabla to guapa BEIBI</th>" : "";
            echo $numero;
            echo "</tr>";
            echo "<tr>";
            for ($colum=0;$colum<3;$colum++) {
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
        echo "</table>";


//*********************************************************************************************************/
//*********************************************************************************************************/


        echo"<hr>";

        echo "<hr>";

        echo "<table>";
        $num = 1;

        for ($fila=0;$fila<10;$fila++) {
            echo "<tr>";

            for ($colum=0;$colum<3;$colum++) {
                if ($fila == 0){
                    echo "<th>$num</th>";
                } else {
                    echo "<td>$num</td>";
                }
    
                $num++;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>