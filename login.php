<?php


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width-initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme|Cairo|Catamaran" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <header class="call-md-12 call-xs-12">
      <img class="nav"  src="" alt="">
      <div class="nava1">
        <a class="nava1"  href="index.php">Adopt.ar</a>
      </div>
      <div class="nava">
        <a class="nava"  href="register.php">Registrate</a>
      </div>



    </header>

    <section class="call-md-8 call-xs-12" "container">
      <div class="logueate">

          <form class="login" "container" action="login.php" method="post">
            <fieldset>
              <legend>Login</legend>
              <p>
                <input id="email" type="email" name="email" value=""placeholder="Ingrese su email aqui...">
              </p>
              <p>
                <input id="pass" type="password" name="password" value=""placeholder="Contraseña">
              </p>
              <p>
                <button type="submit" name="button">Entrar</button>
              </p>
            </fieldset>
          </form>
      </div>

    </section>
    <footer>

    </footer>
  </body>
</html>
