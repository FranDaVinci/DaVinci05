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
        		//1
		//Asignamos un valor a la variable
		$variable = "Comer algas es realmente sano";
		echo "Respuesta 1: " . $variable."<br/>";

		//2
		//Determinar la posición de una palabra
		$posicion_cadena = strpos($variable, 'algas');
		echo "Respuesta 2: " .$posicion_cadena."<br/>";

		//3
		//Reemplazar texto en una variable
		$cadena_reemplazada = str_replace("realmente","muy",$variable);
		echo "Respuesta 3: ".$cadena_reemplazada."<br/>";

		//4
		//Determinar si existe o no una palabra en un string
		$existe_cadena = FALSE;
		$posicion_cadena = strpos($variable, 'anacardo');
		if($posicion_cadena !== FALSE){$existe_cadena = TRUE;}
		echo "Respuesta 4: ";
		echo $existe_cadena ? 'true' : 'false';
		echo "<br/>";

		//5
		//Inversa de un string
		$string_inversa = strrev($variable);
		echo "Respuesta 5: ".$string_inversa."<br/>";

		//6
		//Contar letra específica en un string
		$numero_letras = 0;
		$array_string = str_split($string_inversa);
		foreach($array_string as $split){
			if(strcmp($split,"e") == 0){
				$numero_letras += 1;
			}
		}
		echo "Respuesta 6: " . $numero_letras."<br/>";
    ?>
    
</body>
</html>