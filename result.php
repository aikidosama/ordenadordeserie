<?php
  if(count(array_unique($_POST["integ"]))<count($_POST["integ"])) // Compara si hay valores numéricos repetidos
  {
      header('location: ' . $_POST['link']);  // Verdadero, retorna a la página anterior
      //header("location:javascript://history.go(-1)"); 
      exit();
  } // Falso, continua
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Ordenador de serie</title>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="edit-Type" edit="text/html; charset=utf-8">

  	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script type="text/javascript" src="js/mixitup.min.js"></script>
      <script type="text/javascript" src="js/functions.result.js"></script> <!--   -->
      <link type="text/css" href="css/stylesheet.css" rel="stylesheet" media="all" charset="utf-8" />
  </head>
  <body>
      <div id="wrapper">
          <div class="controls">  <!-- Clase de botones de control de mixitup -->
              <button class="toggle-sort" data-sort="default:desc">Ordenar</button>
          </div>
          <div id="container" class="container" data-ref="container">
            <?php
              for ($i=0; $i < sizeof($_POST["integ"]); $i++) { 
          	     echo "<div class=\"mix\" data-myorder=\"".$_POST["integ"][$i]."\"><input name=\"integ[]\" class=\"disabled\" value=\"".$_POST["integ"][$i]."\" disabled=\"disabled\" /></div>";
              } // Genera todos los valores numericos en el mismo orden creados por el usuario
            ?> 
          </div>
      </div>
  </body>
</html>
