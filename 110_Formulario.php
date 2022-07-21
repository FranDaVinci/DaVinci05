

<?php
    error_reporting (0);

    $servidor ='localhost';
    $usuario = 'root';
    $clave = '';
    $dbname = 'usuario';

    $cn = mysqli_connect ('localhost', 'root', '', 'usuario');

//prueba de conexion al sevidor**************************************
    if (!$cn) {
        echo "No pudo conectarse al servidor<br>";
        echo mysqli_connect_errno();
        echo mysqli_connect_error();
    }else {
        echo "Conexión satisfactoria<br>";

        echo "<br>Informacion del servidor ".mysqli_get_host_info ($cn);
    }
//******************************************************************** */

//aqui recoge los datos y se envian********************************************** 
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $direccion = $_POST ['direccion'];
    $fecha = date ('Y-m-d', time());
    $sql = "INSERT into cliente values (null, '$nombre', '$apellido', '$direccion', '$fecha')";

    if (empty ($_POST['nombre'])) { 

        echo "<br>No ha introducido el nombre.<br>";
        exit ();
    }
    if (empty ($_POST['apellido'])) { 
    
        echo "No ha introducido el apellido.<br>";
        exit ();
    }
    if (empty ($_POST['direccion'])) { 
    
        echo "No ha introducido la direccion.<br>";
        exit ();
    }
    //*************************************************************************** */

//aqui comprueba que los datos estan correctos************************************
    if(mysqli_query($cn, $sql)) {
        echo '<br>Datos introducidos correctamente.<br>';
    } else{
        echo "ERROR: $sql. " .mysqli_error($cn);
    }
//******************************************************************************* */
 
//Aqui cerramos conexion*********************************************************
    $close = mysqli_close ($cn);

    if ($close){
        echo "<br>Conexión cerrada satisfactoriamente."; 
    }else {
        echo "<br> ERROR en la desconexión"; 
    }
//********************************************************************************* */

?>


