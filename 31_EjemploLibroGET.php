<?php
    // echo "<h3>Salida de datos mediante un recorrido:</h3>";
    // foreach ($_GET as $indice => $valor){
    // echo "$indice: $valor<br>";
    // }
    // echo "<h3>Salida de datos mediante llamadas a las variables:</h3>";
    // echo "Nombre: ".$_GET ["nombre"]."<br>";
    // echo "Apellidos: ".$_GET ["apellidos"]."<br>";
    // echo "Correo: ".$_GET ["correo"]."<br>";
    // echo "Estado: ".$_GET ["estado"]."<br>";
    // echo "Hijos: ".$_GET ["hijos"]."<br>";
    // echo "Gustos: ".$_GET ["gustos"]."<br>";


    //Opcion de $_GET que recoge los elementos uno a uno.
    $nombre = $_GET ["nombre"];
    $apellidos = $_GET ["apellidos"];
    $correo = $_GET ["correo"];
    $estado = $_GET ["estado"];
    $hijos = $_GET ["hijos"];
    $gustos = $_GET ["gustos"];

    echo "Nombre: $nombre<br>";
    echo "Apellidos: $apellidos <br>";
    echo "Correo: $correo <br>";
    echo "Estado: $estado <br>";
    echo "Hijos: $hijos <br>";
    //echo "Gustos: $gustos <br>";

    foreach ($gustos as $indice => $valor){
         echo "$indice: $valor<br>";
         }

    // foreach ($gustos as $valor) {
    //      echo "$valor <br>";
    //      }
?>