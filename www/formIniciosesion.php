<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="UTF-8">
 <title>Inicio de sesión</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">

<!--Iconos redes sociales-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<!--FAVICON-->
 <link rel="icon" href="../recursos/favi.png" type="image/png" sizes="16x16">
<!-- css-->

 <link rel="stylesheet" href="../recursos/style.css" type="text/css">
<style>
* {
    box-sizing: border-box;
  }
   
  html, body{ 
   margin:0; 
   padding:0; 
   background-color:#D6EC8F; 
   
  } 
  
  body {
    
   text-align:center; 
  }
   
  #pagewidth{ 
   width: 100%;
   text-align: center; 
   margin:0 auto; 
  } 
   
  #maincol{
   background-color: #D6Ec8e;  
   position: relative; 
   }

   #footer{
    height:150px; 
     background-color:#2e9f84; 
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
   PRE{ font-family:sans-serif; background-color:#F6F7BE; }
   TABLE{background-color:#69c16f; }
   TR{background-color:#69c16f; color:#665744;}
   HEADER {background-color:#69c16f;}
   SELECT{color:#69c16f; }
   
   /*formulario*/
  
  form {
      overflow: hidden;
      color:#665744; background-color:#69c16f; 
  }
   
  label {
      float: left;
      width: 200px;
      /*padding-right: 24px;*/
        text-align: right;
    display: block;
    padding: 0.5em 1.5em 0.5em 0;
  }
   
  input {
      float: left;
      width: calc(100% - 200px);
      color:#665744; background-color:#69c16f;
      padding: 0.7em;
      margin-bottom: 0.5rem;
  
  }
   
  button {
      float: right;
      width: calc(100% - 200px);
  }
  
  SELECT{color:black; background-color:#69c16f; border-style:dotted; }
  OPTION{color:black; }
  TEXTAREA{color:black; background-color:#69c16f; border-style:solid; }
  
  form {
    padding: 1em;
    border: 1px solid #c1c1c1;
    margin-top: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    padding: 1em;
  }
  form input {
    margin-bottom: 1rem;
   border: 1px solid #9c9c9c;
  }
  form button {
    background: #FFFF;
    padding: 0.7em;
    border: 0;
  }
  /*form button:hover {
    background: gold;
  }*/
  

  input:focus {
    outline: 3px solid gold;
  }
  
  @media (min-width: 400px) {
    form {
      overflow: hidden;
    }
  
    label {
      float: left;
      width: 200px;
    }
  
    input {
      float: left;
      width: calc(100% - 200px);
    }
  
    button {
      float: right;
      width: calc(100% - 200px);
    }
  }
</style>
</head>
 <body>
   <div class="paginaweb text-center">
   <div id="pagewidth">
<div id="wrapper" class="clearfix">
  <div id="maincol" text-align="center">
      <h1>Por favor inicie sesión:</h1> <img src="../recursos/logo.png" width="40" height="40" title="logo_empresa" alt="logo"/> 
 
<!-- class="form-control" -->
      <form class="form-inline" method="post" class="login-form" action="../acciones/login.php"> 
        <div class="input-group">           
          <label for="correo"> Correo electrónico: </label> <input type="email" class="form-control" placeholder="Introduce email" name="email" required="true">
          <br>
          <label for="contra">Contraseña: </label> <input type="password" class="form-control" name="contraseña" placeholder="Introduce Contraseña" required="true">
          <br>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-danger" value="Iniciar" name="iniciar" >Iniciar Sesión </button>  
            </div>
       </form>
        </div>
</div>
</div>
      </div>
 <?php    
    echo "<pre>";
     //validacion formulario???   
    echo "</pre>";
 ?>
  <a href="../index.php"> <span>Volver al Inicio</span></a>
 </div>


 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
  <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <!--fin estilo principal-->
</div>
  <!--Pie de pagina-->
  <footer id="footer">

	<h3> SIGUENOS EN REDES SOCIALES </h3>
	<div class="sociales">
	    <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" style="font-size:20px;color:#4267B2;float:right;"></i></a>
	  <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter-square" style="font-size:20px;color:#00BBF2;float:right"></i></a>
	    <a target="_blank" href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram" style="font-size:20px;color:#FD2C80;float:right;"></i></a>
	  <a href="https://www.youtube.com/?gl=ES&hl=es"> <i class="fa fa-youtube-square" style="font-size:20px;color:red;float:right"></i></a>
	</div>
    <img src="recursos/logo.png" width="40" height="40" title="logo_empresa" alt="logo"/>
	<p> DAMU.&copy; 2020. Todos los derechos reservados.
  </div>
  </footer>
<script type="text/javascript" src="recursos/js.js"></script>
 </body>
</html>
<?php
ob_end_flush();
?>

