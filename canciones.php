<style>
    .valida {
        color: blue;
    }
</style>

<?php
    $correcto = true;
    if(empty($_POST['texto'])){
        echo "<p>No puede dejar vacio el campo de búsqueda.</p>";
        $correcto = false;
    }else    
        $texto = $_POST['texto'];

    if(empty($_POST['busca'])){
        echo "<p>Debe elegir una opción.</p>";
        $correcto = false;
    }else    
        $busca = $_POST['busca'];
        
    if($_POST['genero'] == 0){
        $genero = 0;
    }else    
        $genero = $_POST['genero'];

    
    if($correcto == false){
        echo "<br><p>No ha introducido los datos que se piden</p><br>";
        echo "<p><a href='canciones.html'>Vuelva a realizar la búsqueda</a></p><br>";
    }else{
        echo "<h1 class='valida'>Validación de Formularios. Resultados del formulario</h1><br>";
        echo "<br><b></b>Estos son los datos introducidos:</b><br>";
        echo "<br><form action=''>
                    <fieldset>
                        <ul>
                            <li><b>Texto de búsqueda:</b> $texto</li>
                            <li><b>Buscar en:</b> $busca</li>
                            <li><b>Género:</b> $genero</li>
                        </ul>
                    </fieldset>
                  </form> ";
        echo "<p><a href='canciones.html'>[ Nueva búsqueda ]</a></p><br>";
    }
    


?>