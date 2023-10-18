<?php
  include_once 'conexion.php';

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
             $consulta_insert=$con->prepare("INSERT INTO usuario(Nombres,Apellidos,Correo,id_tipdoc,numDoc,Contrasena)
             VALUES(:nom,:apell,:email,:tipdoc,:numdoc,:pass)");
             $consulta_insert->execute(array(
               ':nom'=>$name,
               ':apell'=>$apell,
               ':email'=>$email,
               ':tipdoc'=>$tipDoc,
               ':numdoc'=>$numDoc,
               ':pass'=>$hash,
             ));
             header('Location: Control_registro.php');
         }    
     }else{
         echo "<script> alert('Los campos estan vacios');</script>";
      }
  }



?>