<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="forstyle.css">
  <title>Formulario Registro</title>
</head>
<body>
  
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
    <p><a href="inicio_sesion.html">Iniciar Sesión</a></p>
    <?php include("loginuser.php") ?>
    </section>
</form>
</body>
</html>
