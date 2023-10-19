<?php

$host = "localhost";
$User = "root";
$pass = "";

$db = "matematicas_djl";

$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$conexion) {
    echo "conexion fallida";
}

?>