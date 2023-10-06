<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Registro</title>
    <link rel="stylesheet" href="../matematicaDJL/Control_registro.css">
     <!-- Logo -->
     <link rel="shortcut icon" href="img/logosinfondo.ico">
     <link rel="icon" sizes="192x192" href="img/logosinfondo.ico">
     <link rel="favicon" href="img/logosinfondo.ico">
     <link rel="apple-touch-icon" href=" img/logosinfondo.ico">
     <!-- Fin codigo del Log -->
</head>
<body>  
<!--tomado de : https://www.youtube.com/watch?v=Fc9X9xs4vgQ  -->
      <div class="contenedor2">
    <h2>Control de Registro de Usuarios</h2>
     <form action="" method="post">
     <div class="form-group">
     <input type="text" name="nombre"  placeholder="Nombres" class="input_text">
     <input type="text" name="apellido"  placeholder="Apellidos" class=input_text>
     </div>
     <div class="form-group">
     <input type="text" name="correo"  placeholder="Correo" class="input_text">
     <input type="text" name="id_tipdoc"  placeholder="id_tipdoc" class="input_text">
     </div>
     <div class="form-group">
          <input type="text" name="numdoc"  placeholder="numDoc" class="input_text">
          <input type="text" name="contraseña"  placeholder="Contraseña" class="input_text">
     </div>
     <div class="btn__group">
          <a href="Control_registro.php" class="btn btn__danger">Cancelar</a>
          <input type="submit" name="guardar"  value="Guardar" class="btn btn__primary">
     </div>
     </form>
     </div>
</body>
</html> 