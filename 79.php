<?php
$lista = array();
$lista[] = array('nombre' => 'Carlos' , 'edad' => 19 );
$lista[] = array('nombre' => 'Jorge' , 'edad' => 25, 'profesion' => 'Profesor' );
$lista[] = array('nombre' => 'Ana' , 'edad' => 32 );
$cadena = $lista[2][0].' '. $lista[0][1].' '.$lista[1][2];
echo $cadena;

?>