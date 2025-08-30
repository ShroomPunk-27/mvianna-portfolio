<?php
$myconn = mysql_connection('localhost', '', '');
$mysql->select_db('commissions', $myconn) or die("No se pudo conectar a la base de datos");
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo de Menu Desplegable</title>
</head>
<body>
    <div align="center">
        <p>Seleccione una comision del siguiente menu:</p>
        <p>Comisiones:
            <select>
                <option value="0" disabled selected>Seleccione:</option>
                <?php
                $query = $mysql->query("SELECT * FROM comms_types");
                while ($valores = mysqli_fetch_array($query)) {
                    echo '<option value="'.$valores['ID_commst'].'">'.$valores['type'].'</option>';
                }
                ?>
            </select>
            <button>Enviar</button>
        </p>
    </div>
</body>
</html>