<?php
require_once("funciones/funcionestp.php");
$validacionLogin=[];
$nombreDefault="";
$emailDefault="";
$fechaNacDefault="";

if ($_POST) {
  $validacionLogin=validacion();

  if(count($validacionLogin)==0){
    $usuario = armarUsuario();
    guardarUsuario($usuario);
    guardarAvatar($usuario);
    header ("location:index.php");exit;
  }
  $nombreDefault=$_POST["nombre"];
  $emailDefault=$_POST["email"];
  $fechaNacDefault=$_POST["fecha-nac"];
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
            <ul style="color:red; font-size:10px;text-alingn:right;">
              <?php foreach ($validacionLogin as $error) :?>
              <li><?= $error; ?></li>
            <?php endforeach; ?>
            </ul>
            <legend>Registrate</legend>
            <p>
              <?php if (isset($validacionLogin["nombre"])) :?>
                    <input style="border: 1px solid red;" id="nombre" type="text" name="nombre" value= "" placeholder="Nombre y apellido">
                    <p style="color:red; font-size:8px;"><?php $validacionLogin["nombre"] ;?></p>
              <?php else : ?>
                    <input id="nombre" type="text" name="nombre" value= "<?php $nombreDefault;?>" placeholder="Nombre y apellido" >
              <?php endif; ?>
            </p>
            <p>
              <?php if (isset($validacionLogin["email"])) :?>
                    <input style="border: 1px solid red;" type="email" name="email" value= "" placeholder="Ingrese su email aqui...">
                    <p style="color:red; font-size:8px;"><?php $validacionLogin["email"] ;?></p>
              <?php else : ?>
                    <input id="email" type="email" name="email" value="<?php $emailDefault;?>" placeholder="Ingrese su email aqui...">
              <?php endif; ?>
            </p>
            <p>
              <?php if (isset($validacionLogin["fecha-nac"])) :?>
                    <input style="border: 1px solid red;" id="fecha-nac" type="date" name="fecha-nac" value= "" placeholder="dd/mm/aaaa">
                    <p style="color:red; font-size:8px;"><?php $validacionLogin["fecha-nac"]; ?></p>
              <?php else : ?>
                    <input id="fecha-nac" type="date" name="fecha-nac" value= "<?php $fechaNacDefault;?>" placeholder="fecha de nac dd/mm/aaaa">
              <?php endif ;?>
            </p>
            <p>
              <input id="pass" type="password" name="password" value=""placeholder="Contraseña">
            </p>
            <p>
              <input id="confPass" type="password" name="confPassword" value=""placeholder="confirmar Contraseña">
            </p>
            <p>
            <select style="width:240px" class="form-control" name="pregunta-seguridad">
              <option value="null"class="hidden" selected disabled>Elegi una pregunta</option>
              <option value="0">Nombre de tu primer mascota?</option>
              <option value="1">Cual fue tu primer auto?</option>
              <option value="2">Como se llamaba tu escuela primaria?</option>
            </select>
            <p>
            <p>
              <input id="respuesta" type="text" name="respuesta" value=""placeholder="">
            </p>
              <label >Genero</label>
              <?php if(isset($_POST["genero"])&& $_POST["genero"]=="H"):?>
              <input calss= "radio" type="radio" name="genero" value="H" checked>Hombre
              <?php else :?>
              <input calss= "radio" type="radio" name="genero" value="H">Hombre
            <?php  endif; ?>
            <?php if(isset($_POST["genero"])&& $_POST["genero"]=="M"):?>
            <input calss= "radio" type="radio" name="genero" value="M" checked>Mujer
          <?php else :?>
            <input calss= "radio" type="radio" name="genero" value="M">Mujer
          <?php endif ;?>
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
