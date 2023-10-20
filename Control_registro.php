<?php

include_once 'conexion.php';

$sentencia_select=$con->prepare('SELECT *FROM usuario');
$sentencia_select->execute();
$resultado=$sentencia_select->fetchAll();

// Metodo para buscar
 if(isset($_POST['btn_buscar'])){
    $buscar_text=$_POST['buscar'];
    $select_buscar=$con->prepare('
    SELECT *FROM usuario WHERE nombres LIKE :campo OR apellidos LIKE :campo;'
);

$select_buscar->execute(array(
    ':campo' =>"%".$buscar_text."%"
));

$resultado=$select_buscar->fetchAll();

 }
?>

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
        <div class="head">
        <div class="logo">
            <a href="index.html">Matematicas DJL</a>
        </div>
    
        <nav class="navbar">
            <a href="Apartado_Guias.html">Apartado Guias</a>
            <a href="inicio_sesion.php">Inicio de sesión</a>
        </nav>
        </div>
<!--tomado de : https://www.youtube.com/watch?v=Fc9X9xs4vgQ  -->
<div class="contenedor">
    <h2>Control de Registro de Usuarios</h2>
    <div class="barra__buscador">
        <form action="" class="formulario" method="post">
           <input type="text" name="buscar" placeholder="buscar nombre o apellidos" value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
           <input type="submit" class="btn" name="btn_buscar" value="Buscar">
           <a href="Nuevo_usuario.php" class="btn btn__nuevo">Nuevo</a>
        </form>
    </div>
    <table>
    <tr class="head2">
        <td>id_usuario</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Correo</td>
        <td>id_tipdoc</td>
        <td>numDoc</td>
        <td>Contraseña</td>
        <td colspan="2">Acción</td>
    </tr>
    <?php foreach($resultado as $fila):?>
    <tr>
        <td><?php echo $fila['id_usuario']; ?></td>
        <td><?php echo $fila['Nombres']; ?></td>
        <td><?php echo $fila['Apellidos']; ?></td>
        <td><?php echo $fila['Correo']; ?></td>
        <td><?php echo $fila['id_tipdoc']; ?></td>
        <td><?php echo $fila['numDoc']; ?></td>
        <td><?php echo $fila['Contrasena']; ?></td>
        <td><a href="Actualizar_usuario.php?id=<?php echo $fila['id_usuario']; ?>" class="btn__update">Editar</a></td>
        <td><a href="borrar_usuario.php?id=<?php echo $fila['id_usuario']; ?>" class="btn__delete">Eliminar</a></td>
    </tr>
  <?php endforeach ?>

</table>
</div>
</body>
</html> 