<?php 
    function calcular($pcant, $piva = 7) {
    $total = $pcant * $piva / 100;
    return $total;
    }
    if(!empty($_GET['iva']))
    $miiva = calcular($_GET['cantidad'],$_GET['iva']) ;
    else
    $miiva = calcular($_GET['cantidad']);
?>