<?php 
    
    function datos($campo) { 
        return isset($_GET [$campo]) ? $_GET [$campo] : '';
    }

    $nombre = datos ('nombre');
    $email = datos ('email');
    $fecha = datos ('fecha');
    $personas = datos ('personas');
    $edad = datos ('edad');
    // $aula = datos ('aula');  //**Aqui ya no vale ***/ 
    // $aula = isset($_GET ['aula']) ? 'si' : 'no'; /******simplificado con operador ternario.*****/

        // if(isset($_GET['aula'])) //Igual que arriba pero la forma mas amplia
        // $aula = "si";
        // else
        // $aula = "no";
    
    $observa = datos ('observa');
    $error = FALSE;

    if ($nombre == '') { 
        $error = TRUE;
        echo "No has introducido tu NOMBRE.";
    }
    if ($email == '') { 
        $error = TRUE;
        echo "No has introducido tu EMAIL.";
    }
    if ($fecha == '') { 
        $error = TRUE;
        echo "No has introducido la FECHA.";
    }
    if ($personas == '') { 
        $error = TRUE;
        echo "No has especificado el número de PERSONAS que van a asistir a la visita.";
    }
    
    if ($edad == '') { 
        $error = TRUE;
        echo "No has especificado la EDAD de los visitantes.";
    }

    if (isset($_GET ['aula'] )) {
         $aula = "Si";
        }
        else{
            $aula = "No";
        }
    
    if ($observa == '') { 
        $error = TRUE;
        echo "No ha rellenado el campo de OBSERVACION.";
    }
    if ($error) { // a partir de aquí empiezan a imprimirse los errores si algun campo no esta relleno
        echo "<br>"; 
        echo "No se ha podido enviar el mensaje por los errores que se detallan arriba.<br><br>";
        echo "Por favor, vuelve a rellenar el formulario.";
      
    } else {
        echo "<h1>Datos de la reserva</h1>";
        echo "<hr>";
        echo "<br><br>";
        echo "<b>Nombre</b>: $nombre<br>";
        echo "<b>EMAIL</b>: $email";
        echo "<br><br><br>";
        echo "<h2>Informacion de la reserva:</h2>";
        echo "<b>Dia de la visita:</b> $fecha<br>";
        echo "<b>Personas del grupo:</b> $personas<br>";
        echo "<b>Con edades:</b> $edad<br>";
        echo "<b>Aula educativa:</b> $aula<br>";
        echo "<b>Observaciones:</b> $observa<br>";
        echo "<br>Tu reserva se enviado Correctamente.";
        echo "<br>Nos Pondremos en contacto lo antes posible. Esperamos que disfrute del parque.";
      
    }



    /******************Otra Manera de hacerlo*****************/





?>