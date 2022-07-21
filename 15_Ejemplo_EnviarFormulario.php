<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        echo "<hr>";

        if (is_array ($d)) {echo "Si es array" . var_dump ($d);} else {echo "No es array";}

        echo "<hr>";

        if(isset($_POST["enviar"])) {
            echo "Formulario enviado con éxito";
        }
        else {
            echo "<form action='ejercicio-25-Funciones.php' method='post'>";
            echo "Dime tu nombre: <input type='text' name='nombre'>";
            echo "<input type='submit' name='enviar' value='ENVIAR'>";
            echo "</form>";
        }
    ?>
    
</body>
</html>