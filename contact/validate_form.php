<?php

    $nombre_archivo = $_FILES['references']['name'];
    $tipo_archivo = $_FILES['references']['type'];
    $tamano_archivo = $_FILES['references']['size'];

    if (isset($_POST['submit'])) {
        if(empty($name)) {
            echo "<p class='error'>* X Name is required.</p>";
        } else {
            if(strlen($name) > 30) {
                echo "<p class='error'>* X Name must be less than 30 characters.</p>";
            }
        }
        if(empty($instagram)) {
            echo "<p class='error'>* I. Instagram Handle is required.</p>";
        }
        if(empty($email)) {
            echo "<p class='error'>* II. Email is required.</p>";
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='error'>* II. Invalid email format.</p>";
            }
        }
        
        if(empty($description)) {
            echo "<p class='error'>* IV. Description is required.</p>";
        }

        if(!empty($_FILES['references']['name'])) {
            if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpg") || strpos($tipo_archivo, "pdf")) && ($tamano_archivo < 5000000))) {
                echo "<p class='error'>* V. The file extension or size is not correct. Only .gif, .jpg, .jpeg, .png or .pdf files under 5MB are allowed.</p>";
                } else {
                    if (move_uploaded_file($_FILES['references']['tmp_name'],  $nombre_archivo)){
                        echo "<p>File uploaded successfully.</p>";
                        } else {
                        echo "<p class='error'>* V. An error occurred while uploading the file. It could not be saved.</p>";
                        }
                }
            }
    }
?>