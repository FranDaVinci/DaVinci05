<?php
      function calcular($campo) { 
        return isset($_GET [$campo]) ? $_GET [$campo] : '';
    }
    
    $primer = calcular ('primer');
    $segun = calcular ('segun');
    $postre = calcular ('postre');
    $comentario = $_GET ['comentario'];
    $maximo = strlen($comentario);
   
    $totalsin = $primer + $segun + $postre;
    $iva = $totalsin * 0.21;
    $total = $totalsin + $iva; 
   
    $error = FALSE;
    
    if ($comentario == ''){ 
        $error = TRUE;
        echo "El área de la CONSULTA no puede quedar en blanco.<br>";
    }
    elseif ( $maximo <= 150 ) {
        echo 'Todo correcto! Gracias por dejar tu comentario! <br> ';
     } else {
        echo 'La longitud máxima de los comentarios es de 150 caracteres, tu comentario en cambio tiene ' . $maximo . ' caracteres <br>';
     }

    echo "La Factura asciende a un total sin IVA de $totalsin €.<br>";
    echo "El IVA del 21% es de $iva €.<br><br>";
    echo "El Total a pagar asciende a $total €."

?>