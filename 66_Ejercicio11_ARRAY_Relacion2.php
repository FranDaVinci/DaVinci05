<?php
    
    $categoria = 33;

    $array = array (
    0 => array( 'categoria' => 33, 'nombre' => 'Zapatos lala', 'precio' => 33.91 ),
    1 => array( 'categoria' => 24, 'nombre' => 'Pantalones lolo', 'precio' => 45.95 ),
    2 => array( 'categoria' => 33, 'nombre' => 'Zapatos lulu', 'precio' => 29.99 ), 
    3 => array( 'categoria' => 23, 'nombre' => 'Camiseta lili', 'precio' => 15.00 ),
    );
//Con Bucle For

//     $total_productos = sizeof ( $arrayProductos );
//     for ( $i = 0; $i < $total_productos; $i++ ) {
//     //datos del producto que voy a ordenar 
//         $producto = $arrayProductos[$i];
//         $posicionArray = $i;
//             for ( $j = $i; $j < $total_productos; $j++ ) {
//                 $precioProducto2 = $arrayProductos[$j]['precio'];
//                 if ( $precioProducto2 < $producto['precio'] ) {
//     //si el precio del producto es menor que el precio que estoy ordenando me guardo los datos
//                     $producto = $arrayProductos[$j];
//                     $posicionArray = $j;
//     }
//     }
//     //intercambiamos las posiciones
//         $arrayProductos[$posicionArray] = $arrayProductos[$i];
//         $arrayProductos[$i] = $producto;
 
 
// }


//intento con WHILE

    $total_productos = sizeof( $arrayProductos );
    $i = 0;
    while ( $i < $total_productos ) {
    //datos del producto que voy a ordenar
        $producto = $arrayProductos[$i];
        $posicionArray = $i;
        $j = $i;
        while( $j < $total_productos) {
            $precioProducto2 = $arrayProductos[$j]['precio'];
            if ( $precioProducto2 < $producto['precio'] ) {
    //si el precio del producto es menor que el precio que estoy ordenando me guardo los datos
                $producto = $arrayProductos[$j];
                $posicionArray = $j;
    }
        $j++;
    }
    //intercambiamos las posiciones
        $arrayProductos[$posicionArray] = $arrayProductos[$i];
        $arrayProductos[$i] = $producto;
        $i++; 
    }

?>