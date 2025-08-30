<?php
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];

if(!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 2000000))) {
    echo "La extensión o el tamaño de los archivos no es correcta. <br><br>
    - Se permiten archivos .gif, .jpg, o .png. <br>
    - Se permiten archivos de 2 MB máximo."; }
    else {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/'.$nombre_archivo)){
        echo "El archivo ha sido cargado correctamente.";
    } else {
        echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}


?>