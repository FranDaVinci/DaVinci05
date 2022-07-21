<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .erroneo {
            color: #DF7E0D;	
        }
        .error {
            color: red;	
        }
        .enviado {
            color: green;	
        }
    </style>
</head>
<body>
    <?php
        $correcto = true;
        
        if(empty($_POST['nombre'])){
            echo "<p class='erroneo'>Debe introducir un nombre.</p>";
            $correcto = false;
        }else    
            $nombre = $_POST['nombre'];
        
        if(empty($_POST['apellidos'])){
            echo "<p class='erroneo'>Debe introducir los apellidos.</p>";
            $correcto = false;
        }else    
            $apellidos = $_POST['apellidos'];
        
        if(empty($_POST['dni'])){
            echo "<p class='erroneo'>Debe introducir un dni.</p>";
            $correcto = false;
        }else    
            $dni = $_POST['dni'];

        if(empty($_POST['direccion'])){
            echo "<p class='erroneo'>Debe introducir una dirección.</p>";
            $correcto = false;
        }else    
            $direccion = $_POST['direccion'];

        if(empty($_POST['estado'])){
            echo "<p class='erroneo'>Debe indicar un estado.</p>";
            $correcto = false;
        }else    
            $estado = $_POST['estado'];

        if($_POST['hijos'] == 0){
            $hijos = 0;
        }else     
            $hijos = $_POST['hijos'];

        if(empty($_POST['jubilado'])){
           $jubilado = "no";
        }else    
            $jubilado = $_POST['jubilado'];

        if(empty($_POST['salario'])){
            echo "<p class='erroneo'>Debe introducir un salario.</p>";
            $correcto = false;
        }else    
            $salario = $_POST['salario'];

        if($correcto == false){
            echo "</p><p class='error'> Su formaluario no se ha enviado correctamente, faltan datos por rellenar</p>";
            echo "<p><a href='Salario.html'>Vuelva a rellenar el formulario</a></p>";
        }else{
            $bonif_viud = 15;
            $bonif_viud2 = "no";
            $bonif_familia = 20;
            $bonif_familia2 = "no";
            $bonif_jubilado = 10;
            $bonif_jubilado2 = "no";

            $salariototal1 = 0;
            $salariototal2 = 0;
            $salariototal3 = 0;
            
            if($estado == "viudo/a"){
                $salariototal1 = $salario * $bonif_viud/100;
                $bonif_viud2 = "si";
            }
            if($hijos == "Más de 3"){
                $salariototal2 = $salario * $bonif_familia/100;
                $bonif_familia2 = "si";
            }

            if($jubilado == "si"){
                $salariototal3 = $salario * $bonif_jubilado/100;
                $bonif_jubilado2 = "si";
            }

            $salariototal = $salario + $salariototal1 + $salariototal2 + $salariototal3;

            echo "<h3>Datos personales</h3>
                <p><b>Nombre:</b> $nombre</p>
                <p><b>Apellidos</b>: $apellidos</p>
                <p><b>DNI:</b> $dni</p>
                <p><b>Dirección:</b> $direccion</p>
                <p><b>Estado civil:</b> $estado</p>
                <p><b>Número de hijos:</b> $hijos</p>
                <p><b>Jubilado:</b> $jubilado</p>
                <p><b>Salario base:</b> $salario €</p>
                <hr>";

            echo "<h3>Cálculo salario total</h3>
                Bonificación por estado civil (15%):";
            echo ($bonif_viud2 == "si")? "Si":"No";

            echo "<br>Bonificación por familia numerosa, más de 3 hijos (20%):";
            echo ($bonif_familia2 == "si")? "Si":"No";

            echo "<br>Bonificación por jubilado (10%):";
            echo ($bonif_jubilado2 == "si")? "Si":"No";

        
            echo "<h4>Salario Total Percibido: $salariototal €</h4>";

                
            echo "<hr><p class='enviado'>Su formulario se ha enviado correctamente</p>";
        }

    ?>

</body>
</html>