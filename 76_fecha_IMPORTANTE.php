<html> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Relación 4 - Formularios - Ejercicio 3</title> 
</head> 
<body> 
    <?php

    //recojo los valores desde la variable global $_GET recorriendo el array
    echo "Has elegido<br>";
    foreach($_GET as $indice => $valor){
        echo "$indice: $valor<br>";
    }
    echo "<br>";

    //recojo los valores independientemente
    $dia = $_GET["dia"];
    $mes = $_GET["mes"];

    echo "Has elegido el día $dia y el mes $mes<br>";

    echo "<br> Comprobación de fecha si es correcta o no <br>";

    switch($mes){
        case "enero":
        case "marzo":
        case "mayo":
        case "julio":
        case "agosto":
        case "octubre":
        case "diciembre":
            if (($dia<1)||($dia>31)) {
                echo "El día es erróneo";
            } else {
                echo "Fecha correcta, $dia de $mes";
            }
            break;
        case "abril":
        case "junio":
        case "septiembre":
        case "noviembre":
            if (($dia<1)||($dia>30)) {
                echo "El día es erróneo";
            } else {
                echo "Fecha correcta, $dia de $mes";
            }
            break;
        case "febrero":
            if (($dia<1)||($dia>28)) {
                echo "El día es erróneo";
            } else {
                echo "Fecha correcta, $dia de $mes";
            }
            break;
    }

    /**** OTRA FORMA LARGA****/

    if( ($mes == "enero")||($mes == "marzo")||($mes == "mayo")||($mes == 'julio')||($mes == 'agosto')||($mes == 'octubre')||($mes == 'diciembre') && (($dia<1)||($dia>31)) )
        echo "<br>Fecha incorrecta<br>";
    
    /** ...... **/
    

    /**** OTRA FORMA MEJORADA  ****/

    if(($dia<1)||($dia>31)){
        echo "<br>Fecha incorrecta";
    }else if(( ($mes == "abril") ||($mes == "junio") ||($mes == "septiembre") ||($mes == "noviembre") ) && ($dia>30)){
        echo "<br>Fecha incorrecta";
    }else if(($mes == "febrero") && ($dia>28)){
        echo "<br>Fecha incorrecta";
    }
   
    /**** OTRA FORMA CON ARRAYS  *****/

    ?>
</body> 
</html> 