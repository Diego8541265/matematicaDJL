<?php

//include("conexion.php");

$mysqli = new mysqli("localhost", "root", "", "matematicas_djl");

if ($mysqli->connect_errno) {
    die("error de conexión: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Correo= $_POST["Correo"];
    $Contrasena = $_POST["Contrasena"];
 
    $query = "SELECT * FROM usuario WHERE Correo = '$Correo' AND Contrasena = '$Contrasena'";
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