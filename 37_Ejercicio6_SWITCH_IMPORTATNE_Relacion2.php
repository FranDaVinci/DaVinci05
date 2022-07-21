
<?php
    $controlador = $_GET ["controlador"];

    switch ( $controlador ) {
        case 1:
        echo 'Controlador de página de contacto';
        break;
        case 2:
        echo 'Controlador de página de Inicio';
        break;
        case 3:
        echo 'Controlador de página de blog';
        break;
        case 4:
        echo 'Controlador de página de empleados';
        break;
        case 5:
        echo 'Controlador de página de Quienes Somos';
        break;
        case 6:
        echo 'Controlador de página de Mapa del sitio';
        break;
    }

    
?>
