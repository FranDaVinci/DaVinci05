<?php

    $y = $_GET ['a'];
    $z = $_GET ['b'];



    if (isset ($_GET ['btsuma'])) {
        $c = $y + $z; echo "El resultado de $y + $z es: ".$c;
    }
    if (isset ($_GET ['btresta'])) {
        $c = $y - $z; echo "El resultado de $y - $z es: ".$c;
    }
    if (isset ($_GET ['btmult'])) {
        $c = $y * $z; echo "El resultado de $y * $z es: ".$c;
    }
    if (isset ($_GET ['btdiv'])) {
        if ($z != 0)  $c = $y / $z;
        else $c = 0;
        echo "El resultado de $y / $z es: ".$c;
    }
    


?>
