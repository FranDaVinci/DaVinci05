
<?php
    $fichero = $_GET ["fichero"];
    $controlador = array ("contacto", "inicio", "blog", "empleados", "quienes-somos", "sitemap") ;
    echo "$fichero";
    switch ( $controlador ) {
        case 'contacto':
        $fichero = 'contacto.php';
        break;
        case 'inicio':
        $fichero = 'inicio.php';
        break;
        case 'blog':
        $fichero = 'blog.php';
        break;
        case 'empleados':
        $fichero = 'empleados.php';
        break;
        case 'quienes-somos':
        $fichero = 'quienes_somos.php';
        break;
        case 'sitemap':
        $fichero = 'sitemap.php';
        break;
        default:
        $fichero = 'error404.php';
    }
 
?>
