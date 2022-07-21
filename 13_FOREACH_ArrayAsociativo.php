<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: solid 1px;
            width: 60%;
            background-color: #669999;
            border-color: #000000;
            color: white;
            border-spacing: 0;
        }
    </style>
    <title>Document</title>
</head>
<body>

    <?php
    $luis = array ("Luis Garcia", "2453-7654", "Trabajo");
    $paco = array ("Paco Martínez", "1987-3456", "Estudio");
    $sofia = array ("Sofia López", "3467-2138", "Cliente");
    $pilar = array ("Pilar Martínez", "4076-9876", "Familia");

    $agenda = array ($luis, $paco, $sofia, $pilar);
    echo "<table>";
    echo "<th>NOMBRE</th> <th>TELEFONO</th> <th>CONTACTO</th>";
    //recorre el array $agenda y cada elemento(es un array) lo mete en $fila
    //en la primera vuelta $fila e el array de $luis.
    foreach ($agenda as $fila) {
        echo "<tr>";
    //Recorre el array que se ha generado en $fila (que corresponde en la primera vuela a $luis)
    //y cada elemento lo introduce en la variable $columna
            foreach ($fila as $columna){
                echo "<td>$columna</td>";
            }

        echo "</tr>";
    }

    echo "</table>";


    echo "<hr>";

    ?>
    
</body>
</html>