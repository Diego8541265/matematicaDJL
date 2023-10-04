<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="registro.css">
    <!-- Logo -->
    <link rel="shortcut icon" href="img/logosinfondo.ico">
    <link rel="icon" sizes="192x192" href="img/logosinfondo.ico">
    <link rel="favicon" href="img/logosinfondo.ico">
    <link rel="apple-touch-icon" href=" img/logosinfondo.ico">
    <!-- Fin codigo del Logo -->
  <title>Formulario Registro</title>
</head>
<body>
<div class="head">

<div class="logo">
    <a href="index.html">Matematicas DJL</a>
</div>

<nav class="navbar">
    <a href="index.html">Inicio</a>
    <a href="inicio_sesion.php">Inicio de sesión</a>
 

</nav>

</div>
  
  <form action="loginuser.php" method="POST">
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    

<select class="controls" name="tipDoc" id="tipDoc" placeholder="tipDoc">tipo de Documento
  
  <option value="CC">CC</option>
<option value="TI">TI</option>

</select>


    <input class="controls" type="" name="numDoc" id="correo" placeholder="numero de documento">
    <input class="controls" type="password" name="contrasena" id="correo" placeholder="Ingrese su Contraseña">
    <input type="submit" value="registrarse" class="button">
    <p><a href="inicio_sesion.php">Iniciar Sesión</a></p>
    <?php include("loginuser.php") ?>
    </section>
</form>
</body>
</html>
