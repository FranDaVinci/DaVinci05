<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $comentario = $_GET['comentario'];
    $maximo = strlen($comentario);
 
    if ( $maximo <= 150 ) {
        echo 'Todo correcto! Gracias por dejar tu comentario! ';
     } else {
        echo 'La longitud máxima de los comentarios es de 150 caracteres, tu comentario en cambio tiene ' . $maximo . ' caracteres';
     }
     

    ?>
    
</body>
</html>