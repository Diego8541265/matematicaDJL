<?php

require_once("conexion.php");
if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['tipDoc']) && !empty($_POST['numDoc']) && !empty($_POST['contraseña']) ) {

    $name = $_POST['nombres'];
    $name = $_POST['apellidos'];
    $name = $_POST['correo'];
    $name = $_POST['tipDoc'];
    $name = $_POST['numDoc'];
    $name = $_POST['contraseña'];
}
?>