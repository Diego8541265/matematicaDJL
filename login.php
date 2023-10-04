<?php
session_start();
include("conexion.php");
require_once("inicio_sesion.php");
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['Correo']) || empty($_POST['Contrasena'])) {
	function validate($data)
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['Correo'];
$password=$_POST['Contrasena'];


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