<style>
    table, tr, th, td {
        border: solid blue;
        padding: 9px;
        border-radius: 5px;
    }
</style>
    <?php
        //error_reporting (0);

        // primer paso, conexion con el servidor***************************************************
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
       
        mysqli_query($cn,$sql); //siempre para acabar la consulta
        
        //Segundo paso hacemos la consulta*******************************************************
        $sql1 = "SELECT * FROM usuario";
        $result = mysqli_query($cn,$sql1);
        //el resultado de la consulta se guarda en una variable.
        
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
                //recordar que es un bucle y dejar fuera los th*************************************
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
        //entre corchetes el la columna de la base de datos, recordar so lo pones en mayuscula o en minuscula
        //recorremos los registros de las consultas
    
        

        //el final es para cerrar la consulta.********************************************************
        $close = mysqli_close ($cn);

        if ($close){
            echo "<br>conexion cerrada satisfactoriamente"; 
        }else {
            echo "<br> error en la desconexión"; 
        }

        ?>