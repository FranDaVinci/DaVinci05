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
    <title>Formulario ejercicio 2 Relacion 4 Insertar</title>
</head>
<body>

<a href="114_FormularioSQL_2_PHP.php">Formulario para BORRAR Datos</a>
<a href="116_FormularioSQL_2_PHP.php">Formulario para MODIFICAR Datos</a>

    <form class="form1" action="115_FormularioSQL_2_PHP.php" method="post">
        <fieldset><legend>Insertar Datos</legend>
        NOMBRE: <input class="in1" type="text" name="nombre" id="">  
        APELLIDO: <input class="in1" type="text" name="apellidos" id="">
        <br>
        TELEFONO: <input type="tel" name="telefono" id="" max="">
        DIRECCION: <input class="in1" type="text" name="direccion" id="">  
        <br>
        <input class="boton" type="submit" value="Enviar los datos">
        </fieldset>
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

        $sql = "INSERT into usuario values (null, '$nombre', '$apellidos', '$telefono', '$direccion')";

        $sql1 = "SELECT * FROM usuario";
        $result = mysqli_query($cn,$sql1);

        if (!$result) {
            echo "<br> Error en la ejecucion de la consulta";
        } else {
            echo "<table>
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
            echo "<br>El numero de registros es: $n";
        }
       
        if (empty ($_POST['nombre'])) { 
    
            echo "<br>No ha introducido el nombre.<br>";
            exit ();
        }
        if (empty ($_POST['apellidos'])) { 
        
            echo "No ha introducido el apellido.<br>";
            exit ();
        }
        if (empty ($_POST['telefono'])) { 
        
            echo "No ha introducido un teléfono.<br>";
            exit ();
        }
        if (empty ($_POST['direccion'])) { 
        
            echo "No ha introducido la direccion.<br>";
            exit ();
        }
       
        mysqli_query($cn,$sql); 
        
        $close = mysqli_close ($cn);

        header("refresh:0 url=115_FormularioSQL_2_PHP.php");

        if ($close){
            echo "<br>conexion cerrada satisfactoriamente"; 
        }else {
            echo "<br> error en la desconexión"; 
        }

        ?>

</body>
</html>