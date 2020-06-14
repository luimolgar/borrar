<?php
ob_start();
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="UTF-8">
 <title>Página Borrado - DAMU</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!--boostrap--> <!--/* Incluye menú responsivo-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

<!-- REJILLA -->
<link href=" https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cerulean/bootstrap.min.css"  rel="stylesheet" integrity="sha256-Ucf/ylcKTNevYP6l7VNUhGLDRZPQs1+LsbbxuzMxUJM=  sha512-FW2XqnqMwERwg0LplG7D64h8zA1BsxvxrDseWpHLq8Dg8kOBmLs19XNa9oAajN/ToJRRklfDJ398sOU+7LcjZA=="  crossorigin="anonymous">
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"  type="text/javascript"></script>
<!-- REJILLA documentos -->


 <!--Iconos redes sociales-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Enlace hoja estilos -->
   <link rel="stylesheet" type="text/css" href="../recursos/style.css">
 <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
 <!--FAVICON-->
 <link rel="icon" href="recursos/favi.png" type="image/png" sizes="16x16">


 </head>
<body>
<?php

   //Intento video
   session_start();
   $_SESSION['iniciada'] = true;
   $autor = $_SESSION['nombre'];

   //include 'conf2.php';
   //$usuariofoto = $_POST['usuariofoto'];

   $id = $_REQUEST['id'];
   $conexion = mysqli_connect('db', 'root', 'test', 'myDb') or die("Problemas con la conexión");
   
    //nuevo introducido --> 
    $consulta = mysqli_query($conexion, "SELECT * FROM documentos WHERE id='$id'");

    $registros = mysqli_fetch_array($consulta);
    $campo = $registros['img'];

    $usuariofoto = $registros['nombreuser'];
    //$resultado = $registros[]
    

    if ($consulta)
 {
     echo "Se ha eliminado la foto";
     echo "<br>";
     if($_SESSION['nombre'] == 'Administrador'){
         //nuevo introducido -->   //eliminar el archivo físico
        unlink("..\\recursos\\$usuariofoto\\$campo");
 unlink(realpath($campo));
        //print_r($img);
         //fin nuevo
         echo "<a href=\"formadministrador.php\">Volver a Configuración</a>";
     }else if($_SESSION['nombre'] != 'Administrador'){
         //elimanar el archivo físico
        
         unlink(realpath($campo));
        //unlink("..\\recursos\\$autor\\$campo");
         //unlink("..\\recursos\\$autor\\$resultado");
	
        echo "<a href=\"usuarios.php\">Volver a Configuración</a>";
     }
     
    $consulta2 = mysqli_query($conexion, "DELETE FROM documentos where id ='$id'");

     

 } else {
     echo "No se elimino";
 }
   ?>
</body>
</html>
