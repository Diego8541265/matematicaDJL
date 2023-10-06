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
$correo = validate($_POST['Correo']);
$contrasena = validate($_POST['Contrasena']);

if (empty($Correo)){
	header("location: inicio_sesion.php?error=El Correo Es Requerido");
	exit();
}
elseif (empty($clave)) {
	header("location: inicio_sesion.php?error=La Contraseña Es Requerido");
	exit();
}
else
{
$sql = "SELECT * FROM usuario WHERE Correo = '" . $username . "' and Contrasena = '".$password."';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username;
		header("location: index.html");
	
		
} else {
$error = "El correo electrónico o la contraseña es inválida.";
}
}
}
?>