<?php
include_once 'conexion.php';
if(isset($_GET['id'])){
    $id=(int) $_GET['id']; 
    $delete=$con->prepare('DELETE FROM usuario WHERE id_usuario=:id');
    $delete->execute(array(
        ':id'=>$id
    ));
    header('Location:  Control_registro.php');
    }else{
        header('Location:  Control_registro.php');
    }
?>