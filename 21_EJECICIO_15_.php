<?php
			//1
			$variable = "a-a-r-e-f-a";
			echo "Respuesta 1: " . $variable."<br/>";

			//2
			//Reemplazamos un carácter por una cadena
			$variable = str_replace("a", "tortuga", $variable);
			echo "Respuesta 2: $variable <br/>";

			//3
			//Separar una cadena en un array
			$array = explode('-', $variable);
			echo "Respuesta 3:";
			print_r($array);
			echo "<br/>";

			//4
			//Ordenar un array de manera descendente
			rsort($array);
			echo "Respuesta 4:";
			print_r($array);
			echo "<br/>";

			//5
			//Separamos del array sólo los valores indicados
			$nueva_array = array();
			foreach ($array as $contenido) {
			    if (strpos($contenido, 'a') == false) {
				    array_push($nueva_array,$contenido);
				}
			}
			echo "Respuesta 5:";
			print_r($nueva_array);
			echo "<br/>";

			//6
			//Contar el tamaño de un array
			$cantidad = count($nueva_array);
			echo "Respuesta 6: " . $cantidad."<br/>";

		?>