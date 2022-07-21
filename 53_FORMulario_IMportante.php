<?php
    $nombre = $_GET ["nombre"];
    $clave = $_GET ["clave"];
    $saludo = $_GET ["saludo"];
    $posibilidad = $_GET ["posibilidad"];
    $texto = $_GET ["texto"];


      echo "<h1>Hola  $nombre, Como estas?</h1>";
      echo "<br />Tu contraseña era: $clave";
      echo "<br />Querias que te dijera $saludo";
      echo "<br />Y en la lista has elegido la $posibilidad";
      echo "<br />Finalmente, en el area de texto has escrito:<br /> $texto";

?>