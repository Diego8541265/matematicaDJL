<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="inicio_sesion.css">
   <!-- Logo -->
   <link rel="shortcut icon" href="img/logosinfondo.ico">
   <link rel="icon" sizes="192x192" href="img/logosinfondo.ico">
   <link rel="favicon" href="img/logosinfondo.ico">
   <link rel="apple-touch-icon" href=" img/logosinfondo.ico">
   <!-- Fin codigo del Logo -->
</head>
<div class="head">

  <div class="logo">
      <a href="index.html">Matematicas DJL</a>
  </div>

  <nav class="navbar">
      <a href="index.html">Inicio</a>
      <a href="inicio_sesion.html">Inicio de sesión</a>
   
  
  </nav>

</div>

<body>
  <section class="form-register">
      <h4>Inicio de sesion</h4>
      <input class="controls" type="email" name="Correo" id="correo" placeholder="Ingrese su Correo">
      <input class="controls" type="password" name="Contrasena" id="contrasena" placeholder="Ingrese su Contraseña">
      <p><a href="registro.php">Crear cuenta</a></p>
   <a href="index.html">
      <input type="submit" value="iniciar sesión" class="button">
    </a>
    <?php include("login.php")?>
</body>
</html>