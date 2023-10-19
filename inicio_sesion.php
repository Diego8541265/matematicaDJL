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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="head">

  <div class="logo">
      <a href="index.html">Matematicas DJL</a>
  </div>

  <nav class="navbar">
      <a href="index.html">Inicio</a>
      <a href="inicio_sesion.php">Inicio de sesión</a>
  </nav>

</div>

<body>
<section class="form-register">
      <h4>Inicio de sesion</h4>
                    <form action="login.php" method="POST" class="text-center">
                            <div>

                            <input class="controls" type="email" name="Correo" id="Correo" placeholder="Ingrese su Correo">

                            <input class="controls" type="password" name="Contrasena" id="Contrasena" placeholder="Ingrese su Contraseña">

                            <input type="submit" value="iniciar sesión" class="button">

                            </div>
                        <p><a href="registro.php">Crear cuenta</a></p>
                        </form>

    </body>
</html>


