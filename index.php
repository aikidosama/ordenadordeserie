<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Ordenador de serie</title>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="edit-Type" edit="text/html; charset=utf-8">

  	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	  <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
      <script type="text/javascript" src="js/mixitup.min.js"></script>
      <script type="text/javascript" src="js/functions.index.js"></script>
      <link type="text/css" href="css/stylesheet.css" rel="stylesheet" media="all" charset="utf-8" />
  </head>
  <body>
      <div id="wrapper">
          <div class="controls">  <!-- Clase de botones de control de mixitup -->
            <button class="item button" data-ref="button-add-new">Agregar números</button>  <!-- Llama a la función buttonAddNew de mixitup -->
          </div>
          <form action="result.php" id="the-form"  method="post"  >
              <div id="container" class="container" data-ref="container">  <!-- Contiene a los elementos de mixitup  -->
                  <div class="mix1" data-myorder="1"><input type="text" data-validation="number" data-validation-allowing="range[-99;999],negative" step="1" value="" maxlength="3" id="integ" name="integ[]" value="" placeholder="número" /></div>
              	  <div class="mix1" data-myorder="2"><input type="text" data-validation="number" data-validation-allowing="range[-99;999],negative" step="1" value="" maxlength="3" id="integ" name="integ[]" value="" placeholder="número" /></div>
              	  <div class="mix1" data-myorder="3"><input type="text" data-validation="number" data-validation-allowing="range[-99;999],negative" step="1" value="" maxlength="3" id="integ" name="integ[]" value="" placeholder="número" /></div>
              </div>
              <div class="clear" />
              <div class="info">Los números deben ser enteros y no repetirse</div>
              <p><input type="submit" id="submit" class="submit" value="Validar"></p>
              <input type="hidden" name="link" id="link" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />   <!-- input hidden para enviar la ruta actual por el formulario -->
          </form>
      </div>
      <script type="text/javascript">
        $.validate();  // Función del form-validator que llama y valida que los valores ingresados sean enteros
      </script>
  </body>
</html>
