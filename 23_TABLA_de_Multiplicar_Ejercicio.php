<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr {

        }
    </style>
</head>
<body>
    
    <?php

        $multiplicando = 5;
        $multiplicador;
        
        echo "<table>";
     
        echo "<tr>";
        echo "<th><h1>Tabla de Multiplicar del 5</h1></th>";
        echo "</tr>";
        for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
            echo "<tr>";
                echo "<td>";
                    echo "<tr>" . "$multiplicando" . "</tr>". " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
                echo "</td>";
            echo "</tr>";
            echo "<br>";
        }
        
        echo "</table>";
    ?>

</body>
</html>