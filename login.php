<?php
session_start();
include("conexion.php");
require_once("inicio_sesion.php");
$error='';
if (isset($_POST['Correo']) || isset($_POST['Contrasena'])) {

	function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return  $data;
}
$Correo = validate($_POST['Correo']);
$Contrasena = validate($_POST['Contrasena']);
    if (empty($Correo)){
        header("location: inicio_sesion.php?error=El Correo Es Requerido");
        exit();
    }elseif (empty($Contrasena)) {
        header("location: inicio_sesion.php?error=La Contraseña Es Requerido");
        exit();
    }else{
        $sql = "SELECT * FROM usuario WHERE Correo = '" . $Correo . "' and Contrasena = '" . $Contrasena . "';";
        $query=mysqli_query($con,$sql);
        if(mysqli_now_rows($query) === 1){
            $row = mysqli_fetch_assoc($query);
            if ($row['Correo'] === $Correo && $row['Contrasena'] === $Contrasena) {
                $_SESSION['Nombres'] = $row['Nombres'];
                $_SESSION['id_usuario'] = $row['id_usuario'];
                header("location: index.html");
                exit();
            }else{
                header("location: inicio_sesion.php?error=El Correo O Contraseña Son Es Incorrectos");
                exit();
            }
        }else{
            header("location: inicio_sesion.php?error=El Correo O Contraseña Son Es Incorrectos");
            exit();
        }
    }
}else{
	header("location: ");
	exit();
}

if ($counter==1){
    $_SESSION['login_user_sys']=$Correo;
    header("location: index.html");

}else{
$error = "El Correo Electrónico O La Contraseña Es Inválida.";
}
?>