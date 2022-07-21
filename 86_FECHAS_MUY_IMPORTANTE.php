<?php 
$fecha = date("d-m-y"); /* Dia, mes y año con dos cifras \*/ 
echo "La fecha de hoy es: " . $fecha . "<br />";
 
$mes[1] = "enero"; $mes[2] = "febrero"; $mes[3] = "marzo";
$mes[4] = "abril"; $mes[5] = "mayo"; $mes[6] = "junio";
$mes[7] = "julio"; $mes[8] = "agosto"; $mes[9] = "septiembre";
$mes[10] = "octubre"; $mes[11] = "noviembre"; $mes[12] = "diciembre";
echo date("j") /* Dia sin 0 inicial */ 
  . " de ".  $mes[date("n")]  /* Mes sin 0 inicial \*/ 
  . " de ".  date("Y") /* Año con 4 cifras \*/ 
  . "<br />";

echo "D&iacute;a de la semana (0 a 6): " . date("w"). "<br />";
 
$dia[1] = "lunes"; $dia[2] = "martes"; $dia[3] = "mi&eacute;rcoles";
$dia[4] = "jueves"; $dia[5] = "viernes"; $dia[6] = "s&aacute;bado";
$dia[0] = "domingo";
 
echo "El d&iacute;a de la semana es: " . $dia[date("w")] . "<br />";
echo "o bien: " . date("l") . "<br />";
 
echo "D&iacute;a del a&ntilde;o (0 a 365): " . date("z"). "<br />";
 
echo "Hora actual: " 
  . date("H:i:s"). "<br />"; /* Hora de 00 a 23, mins y segs de 00 a 59 \*/ 
?> 