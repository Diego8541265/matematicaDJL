<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "matematicas_djl";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno) {
    die("Conexion Fallida" . $conexion->connect_errno);
} else {
    echo"Conexion exitosa";
}

?>