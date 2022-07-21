<?php 
    
    function datos($campo) { 
        return isset($_GET [$campo]) ? $_GET [$campo] : '';
    } 
        //ESta forma es igual que la de arriba**********
        // if(isset($_GET[$campo])){
        //     return $_GET[$campo];
        // }
        // else{
        //     return "";
        // }
    
    
    $email1 = datos('email1');
    $email2 = datos('email2'); 
    $contra1 = datos('contra1'); 
    $contra2 = datos('contra2'); 
    $consulta  = datos('consulta');
    $nombre = datos('nombre');
    $apellidos = datos('apellidos');
    $aficion = datos('aficion[]');
    $conocio = datos('conocio');
    $referente = datos('referente');
    $error = FALSE;
    

    if ($email1 == '') { 
        $error = TRUE; 
        echo "<No has introducido tu E-MAIL.";
    } elseif ($email1 != $email2) {
        $error = TRUE;
        echo "Los E-MAILS introducidos no coinciden, vuelve a introducirlos.";
    }
    if ($contra1 == '') { 
        $error = TRUE; 
        echo "No has introducido tu CONTRASEÑA.";
    } elseif ($contra1 != $contra2) { 
        $error = TRUE;
        echo "Las CONTRASEÑAS introducidas no coinciden, vuelve a introducirlas.";
    }
    if ($nombre == '') { 
        $error = TRUE;
        echo "No has introducido tu NOMBRE.";
    }

    if ($apellidos == ''){ 
        $error = TRUE;
        echo "No has introducido tus APELLIDOS. <br>";
    }
    if ($referente == ''){ 
        $error = TRUE;
        echo "No has elegido el PROBLEMA referente a tu pedido. <br>";
    }



    if ($consulta == ''){ 
        $error = TRUE;
        echo "El área de la CONSULTA no puede quedar en blanco.";
    }
    if ($error) { //Aqui deberian imprimirse los errores
        echo "<p>&nbsp;</p>\n"; 
        echo "<p>No se ha podido enviar el mensaje por los errores que se detallan arriba.</p>\n";
        echo "<p>Por favor, vuelve a rellenar el formulario.</p>\n";
        echo "<p><a href=\"index.html\">Volver al formulario</a></p>\n";
    } else {
          //si todo es correcto tiene que imprirse esto.
        $para = "El mail lo recibirá fran.ramirez.art@gmail.com <br>"; 
        $asunto = "Contacto web: Fran DaVinci Ingenieros - consulta pedido sobre $referente <br>";
        $mensaje = "Datos del formulario de contacto:<br>"; 
        echo "$para <br> $asunto <br> $mensaje <br>";
        echo "Nombre: $nombre <br>";
        echo "Apellidos: $apellidos <br>";
        echo "E-Mail:  $email1 <br>";

        //para recorrer los checkbox y que te los imprima sin repetir el echo "has elegido..."
         if (!isset($_GET ['aficion'] )) {
             echo "No tienes aficiones.<br>";
        }
        else { 
            echo "Has elegido estas aficiones:";

            foreach ($_GET ['aficion'] as $valor) {
               echo "$valor.";        
        }       
        }
      
        echo "<br>Nos conocio: $conocio <br>";
        echo "Pregunta: $consulta <br><br>";     
        echo "Tu mensaje se ha enviado correctamente. Gracias por contactar con nosotros.<br>";
        echo "Nos pondremos en contacto lo antes posible.";
    }
?>