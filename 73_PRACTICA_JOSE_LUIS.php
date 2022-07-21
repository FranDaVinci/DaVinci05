<?php
    $salida=true;
    $observaciones=$_POST["observaciones"];

    if (empty($_POST["nombre"])) {
        echo "<p class='erroneo'>No has introducido tu nombre.</p>"; $salida=false;
    } else $nombre=$_POST["nombre"];

    if (empty($_POST["email"])) {
        echo "<p class='erroneo'>No has introducido eMail.</p>"; $salida=false;
    } else $email=$_POST["email"];
 
    if (empty($_POST["fecha"])) {
        echo "<p class='erroneo'>No has indicado la fecha de la visita</p>"; $salida=false;
    } else $fecha=$_POST["fecha"];
 
    if (empty($_POST["personas"])) {echo "<p class='erroneo'>No has indicado el número de personas del grupo.</p>"; $salida=false;
    } else $personas=$_POST["personas"];          
 
    if (empty($_POST["edades"])) {
        echo "<p class='erroneo'>No has indicado la edad del grupo.</p>"; $salida=false;
    } else $edades=$_POST["edades"];
 
    if (empty($_POST["aula"])) $aula="NO"; else $aula=$_POST["aula"];             
 
    if($salida==false) { 
        echo"<hr>";
        echo "<p>No se ha enviado la reserva por los errores que se detallan arriba.</p>";
        echo "<p>Por favor, vuelve a rellenar el formulario.</p>";  
        echo "<a href='reservas.html'>Volver al formulario</a>";
     }
   else
     { echo "<h2>datos de tu reserva</h2>";
       echo "<b>Nombre: </b>$nombre<br>";
       echo "<b>eMail: </b>$email<br><br>";  
       echo "<h3>Información de la reserva</h3>";
       echo "<b>Día de la visita: </b>$fecha<br>";
       echo "<b>Con edades: </b>$edades<br>";
       echo "<b>Aula educativa: </b>$aula<br>";
       echo "<b>Observaciones: </b> $observaciones<br>";
       echo "<p>Tu reserva se ha enviado correctamente</p>";
       echo "<p>Nos pondremos en contacto lo antes posible. Esperamos que disfrutes del parque.</p>";
    }  
?>