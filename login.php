<?php

session_start();
include("conexion.php");

if (isset($_POST['Correo']) && isset($_POST['Contrasena'])){


    if (empty($Correo)) {
        header("Location: inicio_sesion.php");
    }elseif (empty($Contrasena)) {
        header("Location: inicio_sesion.php");
    }else{


        $Sql = "SELECT * FROM usuario WHERE Correo = '$Correo' AND Contrasena='$Contrasena'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        if (password_verify($Contrasena, $row['Contrasena'])){

            if ($row['Correo'] === $Correo && $row['Contrasena'] === $Contrasena) {
                $_SESSION['Correo'] = $row['Correo'];
                header("Location; Apartado_Guias.html");
            }else {
                header("Location: inicio_sesion.php");
            }
        }
    }
}
}
?>