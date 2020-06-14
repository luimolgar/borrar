<?php
ob_start();
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="UTF-8">
 <title>WEB CORPORATIVA - DAMU</title>
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
  <!-- <link rel="stylesheet" type="text/css" href="recursos/estilos.css">-->
 <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
 <!--FAVICON-->
 <link rel="icon" href="recursos/favi.png" type="image/png" sizes="16x16">

 <!--css-->
 <STYLE TYPE='text/css'>
/* CSS generated at csscreator.com */

* {
  box-sizing: border-box;
}

html, body{ 
 margin:0; 
 padding:0; 
 background-color:#D6EC8F; 
 } 
 
#pagewidth{ }
 
#maincol{
 background-color: #D6EC8F;  
 position: relative; 
 }
 
#footer{
 height:150px; 
  background-color:#515760; 
 clear:both;
 display:block;
 overflow:auto;
} 
 


.clearfix:after {
 content: "."; 
 display: block; 
height: 0; 
 clear: both; 
 visibility: hidden;
 }
 
.clearfix{display: inline-block;}

/* Hides from IE-mac \*/
* html .clearfix{height: 1%;}
.clearfix{display: block;}
/* End hide from IE-mac */ 
/*P{ font-family:sans-serif; background-color:#665744; }*/
PRE{ font-family:sans-serif; background-color:#D6EC8F; }
TABLE{background-color:#69C16F; }
TR{background-color:#D6EC8F; color:black;}
TD{color:#69C16F;}
HEADER {background-color:#69C16F;}
SELECT{color:#69C16F; }
</STYLE>
 </head>
<body>
<?php

    //Variable que contendrá el resultado de la búsqueda

    $texto = "";

    //Variable que contendrá el número de resgistros encontrados

    $registros = "»";

    if($_POST){

    $busqueda = trim($_POST['buscar']);

    $entero = 0;

    if (empty($busqueda)){

    $texto = 'Búsqueda sin resultados';

    }else{

        // Si hay información para buscar, abrimos la conexión
        $conexion = mysqli_connect('db', 'root', 'test', 'myDb') or die("Problemas con la conexión");
        //Ejecución de la consulta
        $consulta = mysqli_query($conexion, "SELECT nombreuser, img, date_format(fecha,'%d/%m/%Y') as fecha2
                                                FROM documentos where nombreuser = '" .$busqueda. "' order by fecha2 desc")
        or die("Problemas en la consulta:".mysqli_error($conexion));

        //Si hay resultados…

        if (mysqli_num_rows($consulta) > 0){

            // Se recoge el número de resultados

            $registros = '<p>HEMOS ENCONTRADO ' . mysqli_num_rows($consulta) . ' registros </p>';

            // Se almacenan las cadenas de resultado
            echo "<table class='table table-striped' style='background-color: white'>";
                echo "<tr><th>Subido por:</th><th>Fecha de nómina/contrato:</th>";
                while($fila = mysqli_fetch_assoc($consulta)){
                $img = $fila['img'];
                        echo "<tr>";
                            echo "<td>" . $fila['nombreuser'] . "</td>";
                            echo "<td>" . $fila['fecha2'] . "</td>";
                            echo "<td>" . " <img src='recursos/$img' border='0' width='300' height='100'>" . "</td>";
                        echo "</tr>";

               // $texto .= $fila['nombreuser'] . '<br />'; //Imprime el nombre del usuario que ha subido la foto tantas veces como documentos haya

                }

        }else{ 
            $texto = "Este usuario no existe o no tiene documentos subidas";
        }
        mysqli_close($conexion);
        }

    }


// Resultado, número de registros y contenido.


echo $texto;

echo "<br>";
echo "<a href=\"index.php\">Volver a inicio</a>";

?>

 </body>
</html>
<?php
ob_end_flush();
?>

