<html> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ejemplo pagina 16 manual part1</title> 
</head> 
<body> 
    <?php
    // echo !(isset($_POST["nombre"]));
    if( ( empty($_POST["nombre"]) || empty($_POST["edad"])) ){
   ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <p>Dime tu nombre: <input type="text" name="nombre" /></p>
        <p>Y tu edad: <input type="text" name="edad" /></p>
        <p><input type="submit" value="Saludar"/></p>
    </form>

<?php
    } 
    else// Si ya se ha indicado nombre
    { 
?>
   <p>Hola <?php echo $_POST["nombre"]; ?>. </p><br />
   <p>Así que tienes <?php echo $_POST["edad"]; ?> años de edad. </p>
   
   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <p>Dime tu nombre: <input type="text" name="nombre" /></p>
        <p>Y tu edad: <input type="text" name="edad" /></p>
        <p><input type="submit" value="Saludar"/></p>
    </form>
<?php
}
?>
        
</body> 
</html> 