<?php

require_once("conexion.php");
if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['correo']) && !empty($_POST['tipDoc']) && !empty($_POST['numDoc']) && !empty($_POST['contraseña']) ) {

    $name = $_POST['nombres'];
    $apell = $_POST['apellidos'];
    $email = $_POST['correo'];
    $tipDoc = $_POST['tipDoc'];
    $numDoc = $_POST['numDoc'];
    $pass = $_POST['contraseña'];

    $sql = "INSERT INTO usuario(Nombres,Apellidos,Correo,id_tipdoc,numDoc,Contraseña) VALUES(:nom,:apell,:email,:tipdoc,:numdoc,:pass)";
    $stms = $conexion->prepare($sql);
    $stms->bindParam(":nom",$name);
    $stms->bindParam(":apell",$apell);
    $stms->bindParam(":email",$email);
    $stms->bindParam(":tipdoc",$tipDoc);
    $stms->bindParam(":numdoc",$numDoc);
    $stms->bindParam(":pass",$pass);
    if($stmt->execute()){
        header("location: conexion.php");
    }else print ("Error en la consulta");
}else{
    print("Debe completar todos los campos del formulario");
}
?>