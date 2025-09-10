<?php
$myconn = mysql_connection('localhost', 'root', '', 'commissions');
$mysql->select_db('commissions', $myconn) or die("No se pudo conectar a la base de datos");ç
    $query = $mysql->query("SELECT * FROM comms_types");
    while ($valores = mysqli_fetch_array($query)) {
        echo '<option value="'.$valores['ID_commst'].'">'.$valores['type'].'</option>';
    }
?>
