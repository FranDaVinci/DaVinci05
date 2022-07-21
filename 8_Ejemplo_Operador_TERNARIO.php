<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // if (date('G') < 12) { $mensaje = 'Buenos días';
    // } else { $mensaje = 'Buenas tardes'; } 
    // echo $mensaje;

    // $mensaje = (date('G') < 12) ? 'Buenos días' : 'Buenas tardes'; 
    // echo $mensaje;

    // echo (date('G') < 12) ? 'Buenos días' : 'Buenas tardes';

//*****************************************************************************************************/   

    //Sin Simplificar con IF

    // $hora = 16; 
    
    // if ($hora < 12) { 
    //     $hora = 'Buenos dias';
    // } elseif ($hora < 20) {
    //     $hora = 'Buenas tardes';
    // } else {
    //     $hora = 'Buenas noches';
    // } echo $hora;

//*****************************************************************************************************/

//Simplificado con operador ternario
    // $hora1 = 22;

    // $mostrar = ($hora1 < 12) ? "Buenos Dias" : (($hora1 < 20) ? "Buenas Tardes" : "Buenas Noches");
    // echo $mostrar;
    
//******************************************************************************************************/    
    
    $hora = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);
    $hora1 = $hora [1];
    $mostrar = ($hora1 < 12 && $hora1 > 6) ? "Buenos Dias" : (($hora1 < 20 && $hora1 > 12) ? "Buenas Tardes" : (($hora1 > 20 && $hora1 == 6 || 5 ||4 || 3 || 2 || 1) ? "Buenas Noches" : "Introduzca una hora correcta"));
    
    echo $mostrar;

//*****************************************************************************************************/    
    ?>
</body>
</html>