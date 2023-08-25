<?php

require_once("conexion.php");
if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['tipDoc']) && !empty($_POST['numDoc']) && !empty($_POST['contraseña']) ) {

    $name = $_POST['nombres'];
    $apell = $_POST['apellidos'];
    $email = $_POST['correo'];
    $tipDoc = $_POST['tipDoc'];
    $numDoc = $_POST['numDoc'];
    $pass = $_POST['contraseña'];

    $sql = "INSERT INTO usuario"
}
?>