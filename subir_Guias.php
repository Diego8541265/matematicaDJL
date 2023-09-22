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
</body>
</html>
  

    </div>
</header>

</body>
</html>