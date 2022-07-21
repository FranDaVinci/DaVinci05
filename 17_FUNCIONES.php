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
//empty
    $a = 0;
    $b = empty($a);

    echo "Usando empty (): ";
    echo $b;

//isset
    $c = 5;
    $d = isset($c);

    echo "<br>Usando isset (): "; //devolveria false
    echo $d;

//is_integer() devuelve true si la variable es de tipo entero
    $e = 5.3;
    $f =is_integer($e);

    echo "<br>Usando is_integer(): "; //devolveria false
    echo $f;

//is_numeric() devuelve true si la variable es un valor numerico
    $g = "casa";
    $h = is_numeric($g);

    echo "<br>Usando is_numeric(): ";
    echo $h;

//is_string() devuelve true si la variable es una cadena
    $i = "casa";
    $j = is_string($i);

    echo "<br>Usando is_string(): ";
    echo $j;

//is_array() devuelve true si la variable es un array
    $k = array ("casa" , "coche");
    $l = is_array($k);

    echo "<br>Usando is_array(): ";
    echo $l;


/******************************************************
Funciones para las cadenas

strlen() Devuelve la longitud de la la cadena(número de caracteres)
 */
    $cadena = "casa";
    echo "<br>Usando strlen(): ";
    echo strlen($cadena);

//Substr() devuelve la subcadena de una cadena, indicando la cadena principal, 
//la posicion de inicio y la del final
    $cadena1 = "En un lugar de la mancha";
    $subcadena = substr($cadena1,6,5);
    echo "<br>Usando substr(): ";
    echo $subcadena;

//Elimina los espacios del principio y del final de la cadena de caracteres
    $cadena2 = "    Fran es el mas molón     ";
    $cadena3 = trim($cadena2);
    echo "<br>el tamaño de cadena2 ahora mismo es; ".strlen($cadena2);
    echo "<br>Usando trim(): ";
    echo trim($cadena3);
    echo "<br>el tamaño de cadena2 despues de trim es: ".strlen($cadena3);

//str_replace() busca la primera cadena, la sustituye con la segunda, dentro de una cadena
    $cadena4 = "gato";
    $cadena5 = str_replace("g","p",$cadena4);
    echo "<br>Usando str_replace(): ";
    echo $cadena5;

//Explode transfroma una cadena en un array, indicandole el caracte que se usa para separar
//los elemento en la caddena y la cadena en si. guiandose por el signo de puntuacion que le indiques.
    $cadena6 = "uno,dos,tres,cuatro,cinco";
    $array1 = explode(",", $cadena6);
    echo "<br>Usando explode(); ";
    echo $array1[3];

//Sort ordena una array de menor a mayor (ascendente), y si además añadimso SOR_NATURAL 
//ordena de manera natural, y SORT_FLAG_CASE no diferencia entre mayusculas o minusculas
    $nombre = array("ana", "pedro", "luis", "marta", "Ana", "Pedro");
    sort($nombre, SORT_NATURAL | SORT_FLAG_CASE);

    foreach ($nombre as $persona) {
        echo "<br/>".$persona;
    }

?>
    
</body>
</html>