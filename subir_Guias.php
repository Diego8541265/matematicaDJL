<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUIAS</title>
    <link rel="stylesheet" href="subir_Guas.css">

</head>
<body>
    <div  class="head1">

        <div class="logo">
            <a href="index.html">Matematicas DJL</a>
        </div>

        
    <nav class="navbar">
        <a href="index.html">Inicio</a>
        <a href="inicio_sesion.html">sesión</a>
   
    </nav>
</div>
<header>
    <div>
        <h1 style="color: rgb(4, 0, 255);">Hola</h1>
    </div>
    <div>
    <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login.php</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . "";
echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>";
echo "<br><p><a href='PanelControl.php'>Ir al panel de control</a>";
}else {
?>
<h2>Creando la sesion</h2>
<form action="PanelControl.php" method="POST">
<p>Nombres:</p>
<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required/></p>
<p><input type="submit" value="Crear Sesion" /></p>
</form>
<?php
}
?>

</body>
</html>
  

    </div>
</header>

</body>
</html>