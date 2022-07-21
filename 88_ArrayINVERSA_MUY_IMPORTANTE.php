
<?php

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    $longitud = count ($dias);

    //count me da la longitud del array, pero me daria 7
    //cuando las posiciones empiezan en 0

    for ($i = 0; $i < $longitud ; $i++) { 
        echo $diasInversa[$i] = $dias [$longitud-$i-1]."<br>"; 
    }
/*aqui hago el bucle con $longitud y creo ua array nueva en $diasInversa que la equiparo a $dias y como count me da la longitud de 7 tengo que poner un -1 despues de -i.


*/
?>

