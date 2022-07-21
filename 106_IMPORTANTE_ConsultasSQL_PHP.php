
    <?php
        error_reporting (0);

        // primer paso, conexion con el servidor***************************************************
        $servidor ='localhost';
        $usuario = 'root';
        $clave = '';
        $dbname = 'ejercicio6';
        $cn = mysqli_connect ('localhost', 'root', '');

        if (!$cn) {
            echo "No pudo conectarse al servidor<br>";
            echo mysqli_connect_errno();
            echo mysqli_connect_error();
        }else {
            echo "Conexión satisfactoria<br>";

            echo "<br>informacion del servidor ".mysqli_get_host_info ($cn);
        }

        //Segundo paso hacemos la consulta*******************************************************
        $sql = "CREATE database if not exists $dbname";
        $result = mysqli_query($cn,$sql);

        if (!$result){//aqui creamos la base de datos y ya no da error si intentas volver a crearla
           // if  (mysqli_connect_errno()<>0) si hay not exists esta sentencia ya no hace falta.
            echo "<br> error al crer la base de datos";
            echo "<br>".mysqli_connect_errno();
            echo "<br>".mysqli_connect_error();
            exit();
        } else "base de datos creada correctamente";

        $result = mysqli_select_db ($cn, $dbname);
        if (!$result) {
            echo "<br> error al seleccionar la tabla";
            echo "<br>".mysqli_connect_errno();
            echo "<br>".mysqli_connect_error();
        } else "base de datos seleccionada correctamente";

//primer tabla********************************************************
        $sql = "CREATE TABLE if not exists departamento ( 
          codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          nombre VARCHAR(100) NOT NULL, 
          presupuesto DOUBLE UNSIGNED NOT NULL, 
          gastos DOUBLE UNSIGNED NOT NULL 
        );";
        $result = mysqli_query($cn, $sql);
        if (!$result) {
            echo "<br> error al crear la tabla";
            echo "<br>".mysqli_connect_errno();
            echo "<br>".mysqli_connect_error();
        } else "tabla creada correctamente";

       //SEgunda Tabla**********************************************+ 
        $sql = "CREATE TABLE if not exists empleado ( 
            codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            nif VARCHAR(9) NOT NULL UNIQUE, 
            nombre VARCHAR(100) NOT NULL, 
            apellido1 VARCHAR(100) NOT NULL, 
            apellido2 VARCHAR(100), 
            codigo_departamento INT UNSIGNED, 
            FOREIGN KEY (codigo_departamento) REFERENCES departamento(codigo) 
          );";
          
        $result = mysqli_query($cn, $sql);
        if (!$result) {
            echo "<br> error al crear la tabla";
            echo "<br>".mysqli_connect_errno();
            echo "<br>".mysqli_connect_error();
        } else "tabla creada correctamente";

        //Insertar datos en las tablas****************************************

        $sql = "INSERT INTO departamento VALUES
        (1, 'Desarrollo', 120000, 6000), 
        (2, 'Sistemas', 150000, 21000),
        (3, 'Recursos Humanos', 280000, 25000), 
        (4, 'Contabilidad', 110000, 3000), 
        (5, 'I+D', 375000, 380000),
        (6, 'Proyectos', 0, 0), 
        (7, 'Publicidad', 0, 1000);";

        $result = mysqli_query($cn, $sql);
            if (!$result) {
                echo "<br> error al insertar los datos";
                echo "<br>".mysqli_connect_errno();
                echo "<br>".mysqli_connect_error();
            } else "datos insertados correctamente";


        $sql = "INSERT INTO empleado VALUES 
        (1, '32481596F', 'Aarón', 'Rivero', 'Gómez', 1),
        (2, 'Y5575632D', 'Adela', 'Salas', 'Díaz', 2), 
        (3, 'R6970642B', 'Adolfo', 'Rubio', 'Flores', 3), 
        (4, '77705545E', 'Adrián', 'Suárez', NULL, 4), 
        (5, '17087203C', 'Marcos', 'Loyola', 'Méndez', 5),
        (6, '38382980M', 'María', 'Santana', 'Moreno', 1), 
        (7, '80576669X', 'Pilar', 'Ruiz', NULL, 2), 
        (8, '71651431Z', 'Pepe', 'Ruiz', 'Santana', 3), 
        (9, '56399183D', 'Juan', 'Gómez', 'López', 2),
        (10, '46384486H', 'Diego','Flores', 'Salas', 5), 
        (11, '67389283A', 'Marta','Herrera', 'Gil', 1), 
        (12, '41234836R', 'Irene','Salas', 'Flores', NULL), 
        (13, '82635162B', 'Juan Antonio','Sáez', 'Guerrero', NULL);";

        $result = mysqli_query($cn, $sql);
        if (!$result) {
            echo "<br> error al insertar los datos";
            echo "<br>".mysqli_connect_errno();
            echo "<br>".mysqli_connect_error();
        } else "datos insertados correctamente";
        //el resultado de la consulta se guarda en una variable.
        
        // if (!$result) {
        //     echo "<br> Error en la ejecucion de la consulta";
        // } else {
        //     echo "<table>
        //     <tr>
        //         <th>DNI:</th>
        //         <th>NOMBRE:</th>
        //     </tr>";
        //     while ($registro = mysqli_fetch_assoc ($result)) {
        //         //recordar que es un bucle y dejar fuera los th*************************************
        //         echo 
        //             "<tr>
        //                 <td>".$registro['DNI']."</td>".
        //                 "<td>".$registro['NOMBRE']."</td> 
        //             </tr> ";
        //         ;           
        //     }
        //     echo "</table>";

            $n = mysqli_num_rows ($result);
            echo "<br>El numero de registros es: $n";
        // }
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