<?php
require_once("funciones/funcionestp.php");
$validacionLogin=validacion();
if(count($validacionLogin)==0){
  header ("location:index.php");exit;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width-initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <header class="call-md-12 call-xs-12">
      <img class="nav"  src="" alt="">
      <a class="nava1"  href="index.php">Adopt.ar</a>
      <a class="nava"  href="login.php">Login</a>


    </header>

    <section class="call-md-8 call-xs-12" "container">
      <div class="call.md-4 call-xs-12">
      <h2> registrate</h2>
      <form class="register" action="register.php" method="post">
        <p>
          <label for="nombre">Nombre y Apellido</label>
          <input id="nombre" type="text" name="nombre" value=<?php $usuario ?>>
        </p>
        <p>
          <label for="email">Email</label>
          <input id="email" type="email" name="email" value=<?php $email ?>>
        </p>
        <p>
          <label for="edad">Edad</label>
          <input id="edad" type="text" name="edad" value=<?php $edad ?>>
        </p>
        <p>
          <label for="pass">Contraseña</label>
          <input id="pass" type="password" name="password" value="">
        </p>
        <p class="button">
          <button type="submit" name="button"></button>
        </p>

      </form>
      </div>
    </section>
    <footer>

    </footer>
  </body>
</html>
