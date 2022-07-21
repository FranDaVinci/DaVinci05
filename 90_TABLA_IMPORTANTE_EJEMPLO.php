<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td {
            margin: 50px;
            padding: 10px;
            border: solid 3px;
            background-color: lightgrey;

        }
    </style>
    <title>Prueba</title>
</head>
<body>

    <?php

    $a = [
        ['Nombre' => 'Francisco',
        'Apellido' => 'Ramírez',
        'Correo' => 'fran.ramirez.art@gmail.com',
        ],
        ['Nombre' => 'Viola',
        'Apellido' => 'Da Vinci',
        'Correo' => 'viola.artist@gmail.com',
        ],
        ['Nombre' => 'Alba',
        'Apellido' => 'Rodriguez',
        'Correo' => 'albarodriguezoriol@gmail.com',
        ],
        ['Nombre' => 'Sema',
        'Apellido' => 'Dacosta',
        'Correo' => 'semadacosta@gmail.com',
        ],
    ];

    $s = '<table>';
    foreach ( $a as $r ) {
            $s .= '<tr>';
            foreach ( $r as $v ) {
                    $s .= '<td>'.$v.'</td>';
            }
            $s .= '</tr>';
    }
    $s .= '</table>';
    echo $s;
    ?>
    
</body>
</html>