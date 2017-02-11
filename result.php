<?php
  if(count(array_unique($_POST["integ"]))<count($_POST["integ"]))
  {
      header('location: ' . $_POST['link']);
      //header("location:javascript://history.go(-1)");
      exit();
  }
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
          <div class="controls">
              <button class="toggle-sort" data-sort="default:desc">Ordenar</button>
          </div>
          <div id="container" class="container" data-ref="container">
            <?php
              for ($i=0; $i < sizeof($_POST["integ"]); $i++) { 
          	     echo "<div class=\"mix\" data-myorder=\"".$_POST["integ"][$i]."\"><input name=\"integ[]\" class=\"disabled\" value=\"".$_POST["integ"][$i]."\" disabled=\"disabled\" /></div>";
              }
            ?> 
          </div>
      </div>
  </body>
</html>
