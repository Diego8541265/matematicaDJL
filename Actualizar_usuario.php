<?php
include_once 'conexion.php';

if(isset($_GET['id'])){
    $id=(int) $_GET['id'];
    
    $buscar_id=$con->prepare('SELECT * FROM usuario WHERE id_usuario=:id');
    $buscar_id->execute(array(
        ':id'=>$id
    ));
    $resultado=$buscar_id->fetch();
}else{
    header('Location: Control_registro.php');
}


    if(isset($_POST['guardar'])){
        $name = $_POST['nombres'];
        $apell = $_POST['apellidos'];
        $email = $_POST['correo'];
        $tipDoc = $_POST['tipdoc'];
        $numDoc = $_POST['numdoc'];
        $pass = $_POST['contraseña'];
        $hash = password_hash($pass, PASSWORD_DEFAULT, [10]);
    
        
        if(!empty($name)&& !empty($apell) && !empty($email)&& !empty($tipDoc)&& !empty($numDoc)&& !empty($pass) ){
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
             echo "<script> alert('Correo no valdo');</script>";
            }else{
                $consulta_update=$con->prepare("UPDATE usuario SET 
                Nombres=:nombres,
                Apellidos=:apellidos,
                Correo=:correo,
                id_tipdoc=:id_tipdoc,
                numDoc=:numdoc,
                Contrasena=:contraseña
                WHERE id=:id
                ");

                $consulta_update->execute(array(
                  ':nom'=>$name,
                  ':apell'=>$apell,
                  ':email'=>$email,
                  ':tipdoc'=>$tipDoc,
                  ':numdoc'=>$numDoc,
                  ':pass'=>$hash,
                  ':id' =>$id
                ));
                header('Location: Control_registro.php');
            }    
        }else{
            echo "<script> alert('Los campos estan vacios');</script>";
         }
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Registro</title>
    <link rel="stylesheet" href="Control_registro.css">
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
     <form action="nuevo_usuario_controlador.php" method="post">
     <div class="form-group">
     <input type="text" name="nombres"  value="<?php if($resultado) echo $resultado['Nombres']; ?>" class="input_text">
     <input type="text" name="apellidos"  value="<?php if($resultado) echo $resultado['Apellidos']; ?>" class="input_text">
     </div>
     <div class="form-group">
     <input type="text" name="correo"  value="<?php if($resultado) echo $resultado['Correo']; ?>" class="input_text">
     <input type="text" name="tipdoc"  value="<?php if($resultado) echo $resultado['id_tipdoc']; ?>" class="input_text">
     </div>
     <div class="form-group">
          <input type="text" name="numdoc"  value="<?php if($resultado) echo $resultado['numDoc']; ?>" class="input_text">
          <input type="text" name="contraseña"  value="<?php if($resultado) echo $resultado['Contrasena']; ?>" class="input_text">
     </div>
     <div class="btn__group">
          <a href="Control_registro.php" class="btn btn__danger">Cancelar</a>
          <input type="submit" name="guardar"  value="Guardar" class="btn btn__primary">
     </div>
     </form>
     </div>
</body>
</html> 