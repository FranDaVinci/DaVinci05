<?php
    $menu = array (1 => "Editorial", 2 => "Opinión", 3 => "Regional", 4 => "Nacional");
    echo ("<h3>Revista Digital</h3>");
    echo ("<h4>MENU</h4>");
    foreach ($menu as $indice => $valor){
    echo("<a href=\"FormRevista.php?menu=$indice\">$valor</a><br>");
    }
    if (isset($_GET["menu"])){
    echo ("<h4>NOTICIAS</h4>");
    switch ($_GET["menu"]){
    case 1:
    echo ("Editorial");
    break;
    case 2:echo ("Opinión");
    break;
    case 3:
    echo ("Regional");
    break;
    case 4:
    echo ("Nacional");
    break;
    default:
    echo ("Noticias de Portada");
    break;
    }
    }
    else{
    echo ("<h4>Tienes que elegir una opción</h4>");
    }
?>