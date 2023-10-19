<?php

$host = "localhost";
$User = "root";
$pass = "";

$db = "matematicas_djl";

$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$con) {
    echo "conexion fallida";
}

?>