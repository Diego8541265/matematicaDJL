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
}
elseif (empty($Contrasena)) {
	header("location: inicio_sesion.php?error=La Contraseña Es Requerido");
	exit();
}
else
{
$sql = "SELECT * FROM usuario WHERE Correo = '" . $Correo . "' and Contrasena = '" . $Contrasena . "';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$Correo;
		header("location: index.html");
	
} else {
$error = "El correo electrónico o la contraseña es inválida.";
}
}
}
?>