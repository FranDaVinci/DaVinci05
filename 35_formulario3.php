<?php
/*Crea un formulario que te pida introducir un número de día (1 a 31) y escoger el nombre de un mes (usando una lista desplegable, o "select"). Crea también una página en PHP que muestre el día y el mes que se han escogido. 
*/
    $meses = $_GET ["meses"]; 
    //$meses = array (1 => "Enero", 2 => "Febrero", 3 => "marzo", 4 => "abril", 5 => "mayo", 6 => "junio", 7 => "julio", 8 => "agosto", 9 => "septiembre", 10 => "octubre", 11 => "noviembre", 12 => "diciembre");
    $dias = $_GET ["dias"];
    //$dias = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);

    if($dias > 0 && $dias < 32){

        switch($meses) {
        
            case 1:        
            case 3:       
            case 5: 
            case 7:
            case 8:
            case 10:
            case 12:    
            echo ($dias < 32)?"Día $dias del mes $meses" : "No has introducido un dias correcto en el mes $meses";;
                break;
            case 2:
            echo($dias < 29)?"Día $dias del mes $meses" : "No has introducido un dias correcto en el mes $meses";
            break;       
            case 4:
            case 6:
            case 9:
            case 11:
            echo($dias < 31)?"Día $dias del mes $meses" : "No has introducido un dia correcto en el mes $meses";       
            break;       
        }
        
        }
        
        else {
        
        echo "No has introducido un dia correcto";
        
        }

// "<br>";

// "<hr>";
    // if ($meses = 2 && $dias = 29 || 30 || 31) {
    //     echo "Ha introducido mal la fecha, este mes solo tiene 28 días";
    // }
    // if ($meses = 4 || 6 || 9 || 11 && $dias > 30) {
    //     echo "Ha introducido mal la fecha, este mes solo tiene 30 días";
    // } else {
    //     echo "Hoy es $dias de $meses";
    // }

    // foreach ($_GET as $indice => $valor) {
    //  echo "$indice : $valor <br>";

    //  echo "Hoy es $dia de $valor <br>";
    // }

//     switch (isset($_GET["mes"])) {
//         case 1: 
//             echo "Hoy es $dia de Enero";
//             break;
//         case 2: 
//             echo "Hoy es $dia de Febrero";
//             break;
//         case 3: 
//             echo "Hoy es $dia de Marzo";
//             break;
//         case 4: 
//             echo "Hoy es $dia de Abril";
//             break;
//         case 5: 
//             echo "Hoy es $dia de Mayo";
//             break;
//         case 6: 
//             echo "Hoy es $dia de junio";
//             break;
//         case 7: 
//             echo "Hoy es $dia de Julio";
//             break;
//         case 8: 
//             echo "Hoy es $dia de Agosto";
//             break;
//         case 9: 
//             echo "Hoy es $dia de Septiembre";
//             break;
//         case 10: 
//             echo "Hoy es $dia de Octubre";
//             break;
//         case 11: 
//             echo "Hoy es $dia de Noviembre";
//             break;
//         case 12: 
//             echo "Hoy es $dia de Diciembre";
//             break;

//     }
// // ?>