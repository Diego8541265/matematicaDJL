<?php

require_once("conexion.php");
if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['tipDoc']) && !empty($_POST['numDoc']) && !empty($_POST['contrasena']) ) {

    $name = $_POST['nombres'];
    $apell = $_POST['apellidos'];
    $email = $_POST['correo'];
    $tipDoc = $_POST['tipDoc'];
    $numDoc = $_POST['numDoc'];
    $pass = $_POST['contrasena'];
    $hash = password_hash($pass, PASSWORD_DEFAULT, [10]);

    $sql = "INSERT INTO usuario(Nombres,Apellidos,Correo,id_tipdoc,numDoc,Contrasena) VALUES(:nom,:apell,:email,:tipdoc,:numdoc,:pass)";
    $stms = $con->prepare($sql);
    $stms->bindParam(":nom",$name);
    $stms->bindParam(":apell",$apell);
    $stms->bindParam(":email",$email);
    $stms->bindParam(":tipdoc",$tipDoc);
    $stms->bindParam(":numdoc",$numDoc);
    $stms->bindParam(":pass",$hash);
    if($stms->execute()){
        header("location: inicio_sesion.html");
    }else print ("Error en la consulta");
}else{
    print("Debe completar todos los campos del formulario");
}
?>