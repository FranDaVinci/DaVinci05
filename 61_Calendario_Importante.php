<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {border: 1px solid black;
                text-align: center;
                width:300px;
                background-color:beige;
                font-size: 24px;}
        th, td  {border: 1px solid black;
                     text-align: center;}                      
        thead {background-color:aqua;}
        .festivo {background-color:red;}
    </style>
</head>
<body>
<?php
 echo "<h1>CALENDARIO</h1>";
 $meses=["-","ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"];
 $mes=5;        // Introduzco el mes para el calendario  
 $annio=2022;   // Introduzco el año para el calendario  
 $fecha="01-".$mes."-".$annio;   // Almaceno una variable fecha compuesta por el primer día de la fecha del calendario , más el mes y el año. Esto se hace para saber después qué día de la semana es el primero del mes que se va a mostrar.
 $fechaUnix=strtotime($fecha);
 $ultimoDiaMes=date("t",$fechaUnix);  // Obtiene el número de días del mes (28 a 31)
 $primerdia=date("w",$fechaUnix);     // Obtengo el número de día en el que comienza el mes (0=Domingo, 1=Lunes...6=Sábado)
 if($primerdia==0) $primerdia=7;      // Si el primer día es 0 (domingo), lo pongo como 7 para que en la tabla coincida con la columna del domingo 
 // El primer día de la semana se podría obtener directamente con la función date y el parámetro "N", que devuelve 1 para lunes hasta 7 para domingo
 // $primerdia=date("N",$fechaUnix);
 
 echo "<table>";
 echo "<caption><b>$meses[$mes] DE $annio</b></caption>";
 echo "<colgroup>";
 echo "<col span='6'>";
 echo "<col class='festivo'>";
 echo "</colgroup>";
 // Escribimos la primera fila con los días de la semana
 echo "<thead>";
 echo "<tr>";
 echo "<th>Lu</th><th>Ma</th><th>Mi</th><th>Ju</th><th>Vi</th><th>Sa</th><th>Do</th>";
 echo "</tr>";
 echo "</thead>";
 //  Escribo la primera línea de números del calendario, que es especial. 
 //  Para ello se comprueba cuando la variable del for ($i) es >=  que la variable que contiene el primer día del mes ($primerdia).
 //  Mientras sea menor, no se imprimiría nada (se haría <td></td>) y cuando sea mayor es cuando se empezaría a imprimir el calendario  (<td>$numdias</td>) 
 
 $numdias=1;    // Acumula los días que se van a ir imprimiendo en el calendario
 echo "<tr>";
 for($i=1;$i<=7;$i++)
 { if($i>=$primerdia) 
  { echo "<td>$numdias</td>";
    $numdias++; }
    else 
    {echo "<td></td>";}    
  }
  echo "</tr>";
  // Ahora pintamos el resto del calendario hasta que lleguemos al últimio día del mes
  $salida=false;  // Empieza con el valor False. Cuando hayamos escrito el último día del mes, se cambiará a True para indicar que hay que salir del ciclo porque ya se ha pintado el calendario...
  do
  {
    echo "<tr>";
    for($i=1;$i<=7;$i++)
    { if($numdias>$ultimoDiaMes) 
      { $salida=true;
        echo "<td></td>";}
        else 
           { echo "<td>$numdias</td>";
             $numdias++;}
     }
    echo "</tr>";
 } while ($salida==false);
 echo "</table>";
?>    
</body>
</html>