<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td, th{
            border: black solid;
            border-collapse: collapse;
        }
    </style>
    <title>Formulario ejercicio 2 Relacion 4 Borrar</title>
</head>
<body>

    <a href="115_FormularioSQL_2_PHP.php">Formulario para INSERTAR Datos</a>
    <a href="116_FormularioSQL_2_PHP.php">Formulario para MODIFICAR Datos</a>

    <form class="form1" action="114_FormularioSQL_2_PHP.php" method="post">
        <fieldset><legend>Borrar datos</legend>
        NOMBRE: <input class="in1" type="text" name="nombre" id="">
        APELLIDOS: <input  type="text" name="apellidos" id="">
        </fieldset>
        <br><br>
        <input class="boton" type="submit" value="Borrar datos">
        <br><br>

    </form>

    <?php
        error_reporting (0);

        $servidor ='localhost';
        $usuario = 'root';
        $clave = '';
        $dbname = 'usuario2';

        $cn = mysqli_connect ('localhost', 'root', '', 'usuario2');
    
        if (!$cn) {
            echo "No pudo conectarse al servidor<br>";
            echo mysqli_connect_errno();
            echo mysqli_connect_error();
        }else {
            echo "Conexión satisfactoria<br>";

            echo "<br>informacion del servidor ".mysqli_get_host_info ($cn);
        }
       
        $nombre = $_POST ['nombre'];
        $apellidos = $_POST ['apellidos'];
        $telefono = $_POST ['telefono'];
        $direccion = $_POST ['direccion'];
        
        $sql = "DELETE from usuario where nombre = '$nombre' and apellidos = '$apellidos'";
        mysqli_query($cn,$sql); 

                
         $sql1 = "SELECT * FROM usuario";
         $result = mysqli_query($cn,$sql1);
               
        if (!$result) {
            echo "<br> Error en la ejecucion de la consulta";
        } else {
                echo 
                    "<table>
                        <tr>
                        <th>NOMBRE:</th>
                        <th>APELLIDO:</th>
                        <th>TELEFONO:</th> 
                        <th>DIRECCION:</th>               
                    </tr>";
            while ($registro = mysqli_fetch_assoc ($result)) {
                echo 
                    "<tr>
                        <td>".$registro['Nombre']."</td>".
                        "<td>".$registro['Apellidos']."</td>
                        <td>".$registro['Telefono']."</td>
                        <td>".$registro['Direccion']."</td>
                    </tr> ";
                                   
                    }
                    echo "</table>";
        
                    $n = mysqli_num_rows ($result);
                    echo "<br>El numero de registros es: $n <br>";
            }

        $correcto = true;
       
        if (empty ($_POST['nombre'])) { 
    
            echo "<br>No ha introducido el nombre.<br>";
            $correcto = false;
        }
        if (empty ($_POST['apellidos'])) { 
        
            echo "No ha introducido el apellido.<br>";
            $correcto = false;
        }

        $close = mysqli_close ($cn);

        if ($close){
            echo "<br>conexion cerrada satisfactoriamente"; 
        }else {
            echo "<br> error en la desconexión"; 
        }

        ?>

</body>
</html>