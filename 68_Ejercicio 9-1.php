<!DOCTYPE html>
<html>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" author="LuisPR">
        <title>Ejercicio PHP</title>
        
</head>
<body>
    <?php
    $categoria=34;

    $array = array(
    0 => array( 'categoria' => 33, 'nombre' => 'Zapatos lala' ),
    1 => array( 'categoria' => 24, 'nombre' => 'Pantalones lolo' ),
    2 => array( 'categoria' => 34, 'nombre' => 'Zapatos lulu' ),
    3 => array( 'categoria' => 23, 'nombre' => 'Camiseta lili' ),
    );

    foreach($array as $valor)
    {
        if($valor['categoria']==$categoria)
            echo $valor['nombre'];
    }

    ?>
</body>
</html>