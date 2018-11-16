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
      <a class="nava1"  href="index.php">El nombre</a>
      <a class="nava"  href="index.php">Inicio</a>


    </header>

    <section class="call-md-8 call-xs-12">
        <h2>Login</h2>
      <form class="login" action="index.php" method="post">
        <p>
          <label for="email">Email</label>
          <input id="email" type="email" name="" value="">
        </p>
        <p>
          <label for="pass">Contraseña</label>
          <input id="pass" type="password" name="" value="">
        </p>
        <p>
          <button type="submit" name="button"></button>
        </p>
      </form>
      <h2>O registrate</h2>
      <form class="register" action="login.php" method="post">
        <p>
          <label for="nombre">Nombre y Apellido</label>
          <input id="nombre" type="text" name="" value="">
        </p>
        <p>
          <label for="email">Email</label>
          <input id="email" type="email" name="" value="">
        </p>
        <p>
          <label for="edad">Edad</label>
          <input id="edad" type="text" name="" value="">
        </p>
        <p>
          <label for="pass">Contraseña</label>
          <input id="pass" type="password" name="" value="">
        </p>
        <p class="button">
          <button type="submit" name="button"></button>
        </p>

      </form>
    </section>
    <footer>

    </footer>
  </body>
</html>
