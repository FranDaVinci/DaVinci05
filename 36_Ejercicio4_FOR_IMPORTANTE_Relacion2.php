<?php

    $paginas = 15;
    //Aquí solo hace páginas/enlace de 1 al numero que tu quieras

    // for( $i = 1; $i <= $paginas; $i++ ) {
    //     echo '<a href="#" >' . $i . '</a> <br>';
    // }

    //Aquí hace las paginas/enlace que quieras entre la "primera" y la "Ultima"

        if( $paginas > 1 ){
            echo '<A href="?pag=1" >Primera</a> <br>';
        }
        $i = 1;
        while ( $i <= $paginas ) {
        echo '<a href="?pag=' . $i . '" >' . $i . '</a><br>';
        $i++;
        }
        if( $paginas > 1 ){
            echo '<a href="?pag=' . $paginas . '" >Última</a><br>';
        } 
?>