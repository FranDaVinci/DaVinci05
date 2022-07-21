    <?php
        $DiaHoy = $_GET['DiaHoy'];
        $HoraHoy = $_GET['HoraHoy'];
        $DiaSalida = $_GET['DiaSalida'];
        $HoraSalida = $_GET['HoraSalida'];
    
        $HorasDesdeHoy = $HoraHoy + 24 * $DiaHoy;
        $HorasDesdeSalida = $HoraSalida + 24 * $DiaSalida;
    
        $DiferenciaHoras = $HorasDesdeSalida - $HorasDesdeHoy;
        $HorasDiferencia = $DiferenciaHoras % 24;
        $DiasDiferencia = ($DiferenciaHoras - $HorasDiferencia) / 24;
    
        echo "Faltan $DiasDiferencia Dias y $HorasDiferencia Horas";
    ?> 
