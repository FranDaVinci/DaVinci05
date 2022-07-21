<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: tahoma;
            font-size: 12px;
        }
        table{
            width: 100%;
            border: 1px solid #000;
        }
    </style>
    <title>Tabla MySql</title>
</head>
<body>
    <header>
        <h2>LISTADO DE CLIENTES</h2>
    </header>
    <section>
        <?php
            $cn = mysqli_connect ('localhost', 'root', '', 'empresa');

           // mysqli_select_db ('empresa', $cn);

            $rs = mysqli_query('SELECT * FROM clientes', $cn);

            $n = mysqli_num_rows($rs);

        ?>
        <table border="0" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td>CODIGO</td>
                <td>CLIENTE</td>
                <td>DIRECCION</td>
                <td>TELEFONO</td>
                <td>DISTRITO</td>
                <td>CORREO ELECTRONICO</td>
            </tr>
            <?php for ($i=0; $i<$n; $i++){ ?>
            <tr>
                <td><?php echo mysqli_result ($rs, $i, 'código'); ?></td>
                <td>
                    <?php echo mysqli_result ($rs, $i, 'cliente');?>
                </td>
                <td>
                    <?php echo mysqli_result ($rs, $i, 'dirección');?>
                </td>
                <td>
                    <?php echo mysqli_result ($rs, $i, 'teléfono');?>
                </td>
                <td>
                    <?php echo mysqli_result ($rs, $i, 'distrito');?>
                </td>
                <td>
                    <?php echo mysqli_result ($rs, $i, 'correo_electronico');?>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td>
                    <?php echo 'EL TOTAL DE CLIENTES ES: '.$n; ?>
                </td>
            </tr>
        </table>
    </section>
    
</body>
</html>