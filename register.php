<?php
if ($_POST) {

  require_once("funciones/funcionestp.php");
  $validacionLogin=validacion();
  if(count($validacionLogin)==0){
    header ("location:index.php");
}
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme|Cairo|Catamaran" rel="stylesheet">
    <meta name="viewport" content="width=device-width-initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <header>
      <img class="nav"  src="" alt="">
      <div class="nava1">
        <a class="nava1"  href="index.php">Adopt.ar</a>
      </div>
      <div class="nava">
        <a class="nava"  href="login.php">Login</a>
      </div>


    </header>

    <section class="call-md-8 call-xs-12" "container">
      <div class="call.md-4 call-xs-12">

      <form class="register" action="register.php" method="post">
        <fieldset class="register">
          <legend>Registrate</legend>
          <p>
            <input id="nombre" type="text" name="nombre" value=""placeholder="Nombre y apellido">
          </p>
          <p>
            <input id="email" type="email" name="email" value=""placeholder="Ingrese su email aqui...">
          </p>
          <p>
            <input id="edad" type="text" name="edad" value="" placeholder="Edad">
          </p>
          <p>
            <input id="pass" type="password" name="password" value=""placeholder="Contraseña">
          </p>
          <p>
            <label for="Sexo">Sexo</label>

            <input calss= "radio" type="radio" name="Sexo" value="">Hombre

            <input calss= "radio" type="radio" name="Sexo" value="">Mujer
          </p>
          <p class="button">
            <button type="submit" name="button">Enviar</button>
          </p>
        </fieldset>
      </form>
      </div>
    </section>
    <footer>

    </footer>
  </body>
</html>
