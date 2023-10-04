<?php
session_start(); // Iniciando sesion
include("conexion.php");//Contiene de conexion a la base de datos
require_once("inicio_sesion.php");
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['Correo']) || empty($_POST['Contrasena'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username y $password
$username=$_POST['Correo'];
$password=$_POST['Contrasena'];
// Estableciendo la conexion a la base de datos

$sql = "SELECT * FROM usuario WHERE Correo = '" . $username . "' and Contrasena = '".$password."';";
$query=mysqli_query($con,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Iniciando la sesion
		header("location: index.html"); // Redireccionando a la pagina profile.php
	
	
} else {
$error = "El correo electrónico o la contraseña es inválida.";	
}
}
}
?>