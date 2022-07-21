

<style>
    table, tr, td, th{
        border: black solid;
        border-collapse: collapse;
    }
</style>
    <?php
        //error_reporting (0); para ocultar los errores de php.

        // primer paso, conexion con el servidor***************************************************
        $servidor ='localhost';
        $usuario = 'root';
        $clave = '';
        $dbname = 'banco';

        $cn = mysqli_connect ('localhost', 'root', '', 'banco');

        if (!$cn) {
            echo "No pudo conectarse al servidor<br>";
            echo mysqli_connect_errno();
            echo mysqli_connect_error();
        }else {
            echo "Conexión satisfactoria<br>";

            echo "<br>informacion del servidor ".mysqli_get_host_info ($cn);
        }

        //Segundo paso hacemos la consulta*******************************************************
        $sql = "SELECT * FROM clientes";
        $result = mysqli_query($cn,$sql);
        //el resultado de la consulta se guarda en una variable.
        
        if (!$result) {
            echo "<br> Error en la ejecucion de la consulta";
        } else {
            echo "<table>
            <tr>
                <th>DNI:</th>
                <th>NOMBRE:</th>
            </tr>";
            while ($registro = mysqli_fetch_assoc ($result)) {
                //recordar que es un bucle y dejar fuera los th*************************************
                echo 
                    "<tr>
                        <td>".$registro['DNI']."</td>".
                        "<td>".$registro['NOMBRE']."</td> 
                    </tr> ";
                ;           
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

        //para conectar la base de datos si no lo has hecho arriba.
        //$db = mysqli_select_db ($cn ,'nombrebasededatos')
        //$db = mysqli_select_db ($cn, $dbname)





    ?>
</body>
</html>