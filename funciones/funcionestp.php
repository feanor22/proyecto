<?php
function validacion(){
$errores=[];
  if ($_POST){
    $hash=password_hash($_POST["password"], PASSWORD_DEFAULT);
    if (strlen($_POST["nombre"])==0) {
      $errores[]= "No llenaste el nombre <br>";
    }
    if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
      $errores[]= "El mail no tiene el formato correcto <br>";
    }
    if (is_numeric($_POST["edad"])==false) {
      $errores[]= "La edad debe ser numerica <br>";
    }

    }

    return $errores;
}

 ?>
