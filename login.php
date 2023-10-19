<?php

session_start();
include("conexion.php");

if (isset($_POST['Correo']) && isset($_POST['Contrasena'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Correo = validate($_POST['Correo']);
    $Contrasena = validate($_POST['Contrasena']);

    if (empty($Correo)) {
        header("Location: inicio_sesion.php?error=El correo es requerido");
        exit();
    }elseif (empty($Contrasena)) {
        header("Location: inicio_sesion.php?error=La contraseña es requerida");
        exit();
    }else{

        $Sql = "SELECT * FROM usuario WHERE Correo = '$Correo' AND Contrasena='$Contrasena'";
        $result = mysqli_queri($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Correo'] === $Correo && $row['Contrasena'] === $Contrasena) {
                $_SESSION['Correo'] = $row['Correo'];
                header("Location; Apartado_Guias.html");
                exit();
            }else {
                header("Location: inicio_sesion.php");
                exit();
            }
        }
    }
}

?>