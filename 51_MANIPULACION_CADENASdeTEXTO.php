<?php 
$frase="EjEMplo de FRASE";
echo "Texto original: " . $frase . "<br />";
echo "Mayusculas: " . strtoupper($frase) . "<br />";
echo "Minusculas: " . strtolower($frase) . "<br />";
echo "Palabras en mayusculas: " . ucwords($frase) . "<br />";
echo "Palabras en mayusculas y resto en minúsculas: " . 
    ucwords(strtolower($frase)) . "<br />";
// La siguiente, solo en PHP 5.30 o superior 
// echo "Primera en minusculas: " . lcfirst($frase) . "<br />\\n"; 
echo "Palabras sin espacios: " . str_replace(" ", "", $frase) . "<br />";
echo "Longitud: " . strlen($frase) . "<br />";
echo "Primera letra: " . $frase[0] . "<br />";
echo "esta en la posicion: " . strpos($frase, "de") . "<br />";
 
echo "Palabras individuales:<br />";
$palabras = explode(" ", $frase);
foreach ($palabras as $unaPalabra) 
    echo "- " . $unaPalabra . "<br />";
$nuevaFrase = implode("-", $palabras);
echo "Vuelto a juntar: " . $nuevaFrase . "<br />";
 
echo "Al reves: " . strrev($frase) . "<br />";
$caracteresEspeciales = "<hola> &tal";
echo "Una frase con caracteres especiales: " 
  . htmlspecialchars($caracteresEspeciales) . "<br />";
 
$fraseLarga = "Ejemplo de una frase mas larga, que vamos a partir en varias lineas";
echo "Frase partida: <br />" 
  . wordwrap($fraseLarga, 15, "<br />");
 
$conEspacios = " de ";
echo "<br />";
echo "Sin espacios iniciales: -" . ltrim($conEspacios) . "-<br />";
echo "Sin espacios finales: -" . rtrim($conEspacios) . "-<br />";
echo "Sin espacios iniciales ni finales: -" . trim($conEspacios) . "-<br />";
?> 