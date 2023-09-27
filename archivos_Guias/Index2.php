<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cargarficheros.php">
    <link rel="stylesheet" href="eliminar.php">
</head>
<body>
    <form method="POST" action="CargarArchivos.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="cargar Archivos">
    </form>
    <!-- https://www.baulphp.com/subir-y-descargar-archivos-php-ejemplo-completo/#estructura_del_sistema_subir_y_descargar_archivos_php -->
    <?php
// Esto devolverá todos los archivos de esa carpeta
$archivos = scandir("subidas");
$num=0;
for ($i=2; $i<count($archivos); $i++)
{$num++;
?>
<!-- Visualización del nombre del archivo !-->
        
    <tr>
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a></td>
      <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
    </tr>
 <?php }?>
 <a href="Eliminar.php?name=subidas/<?php echo $archivos[$a]; ?>" style="color: red;">
    Eliminar
</a>
</body>
</html>