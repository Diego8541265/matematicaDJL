<?php

include("conexion.php");

$mysqli = new mysqli($host, $user, $pw, $db);


if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Correo= $_POST["Correo"];
    $Contrasena = $_POST["Contrasena"];

 
    $query = "SELECT * FROM usuario WHERE nom_usuario = '$Correo' AND Contrasena = '$Contrasena'";
    //$result = $mysqli->query($sql);
    $result = mysqli_query($mysqli,$query);

    if ($result->num_rows == 1) {
        $_SESSION['Correo'] = $Correo;
        header("apartado_guias.html");
        //echo "holaaaaa";
        exit();
    } else {
        //echo "Nombre o usuario incorrecto. Inténtelo de nuevo.";
        header("inicio_sesion.php");
    }
}


$mysqli->close();
?>