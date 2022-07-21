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
        $fechaAhora = date("d-m-Y");
        // 1 día mas
        echo "El futuro uuuuuuuuu: ";
        echo date("d-m-Y", strtotime($fechaAhora."+ 1 days")); 
        // 1 día menos
        echo "<br>";
        echo "Estamos en el pasado Beibi: ";
        echo date("d-m-Y", strtotime($fechaAhora."- 1 days"));
    ?>
    
</body>
</html>