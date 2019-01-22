<?php
function validacion(){
<<<<<<< HEAD
    $errores=[];
    $erroresNombre=esAlfabeticoYMinimoDeCaracteres($_POST["nombre"],"nombre",5);
    if($erroresNombre != null){
      $errores["nombre"]=$erroresNombre;
    }
    if(estaVacio($_POST["email"])){
      $errores["email"]="Debe completar este campo <br>";
    }
    if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"]= "El mail no tiene el formato correcto <br>";
    }
    if (estaVacio($_POST["fecha-nac"])) {
      $errores["fecha-nac"]= "Debe completar una fecha de nacimiento <br>";
    }
    $erroresClave=validar_pass($_POST["password"],$_POST["confPassword"]);
    if($erroresClave != null){
      $errores["password"]=$erroresClave;
    }
    if (isset($_POST["pregunta-seguridad"])==false ) {
      $errores["pregusnta-seguridad"]= "Debes elegir una pregunta <br>";
    }
    if(estaVacio($_POST["respuesta"])){
      $errores["respuesta"]="Debe escribir una respuesta <br>";
    }
    if (isset($_POST["genero"])==false) {
      $errores["genero"]= "Debes seleccionar una opcion <br>";
    }
    return $errores;
}
function estaVacio($campo) {
  if ($campo == "") {
    return true;
  } else {
    return false;
  }
}
function esAlfabeticoYMinimoDeCaracteres($campo, $nombreCampo, $min){
  if (estaVacio($campo)) {
    return "No llenaste el $nombreCampo <br>";
  } else if(strlen($campo) < $min){
    return "El $nombreCampo debe tener al menos $min caracteres <br>";
  } else if(ctype_alpha($campo) == false){
    return "El $nombreCampo debe ser alfabetico <br>";
  } else {
    return null;
  }
}
  function validar_pass($clave,$cpass){
     if(strlen($clave) < 6){
        $error_clave= "La $clave debe tener al menos 6 caracteres";
     }else if(strlen($clave) > 16){
        return "La $clave  no puede tener más de 16 caracteres";
     }else if (!preg_match('`[a-z]`',$clave)){
        return "La $clave debe tener al menos una letra minúscula";
     }else if (!preg_match('`[A-Z]`',$clave)){
        return "La $clave debe tener al menos una letra mayúscula";
     }else if (!preg_match('`[0-9]`',$clave)){
        return "La $clave debe tener al menos un caracter numérico";
     } else if(!estaVacio($clave) && !estaVacio($cpass) && $clave != $cpass){
       return"Las contraseñas no coinciden <br>";
     }else{
       return null;
     }
}
function crearUsuario($usuario){
  $usuarios=file_get_contents(usuarios.json);
  $usuarios=json_decode($usuarios,true);

  if($usuarios=== NULL){
    $usuarios=[];
  }
  $usuarios[]=$usuario;
  $usuarios=json_enconde($usuarios);
}
=======
$errores=[];
$erroresNombre=esAlfabeticoYMinimoDeCaracteres($_POST["nombre"],"nombre",3);
if($erroresNombre != null){
  $errores["nombre"]=$erroresNombre;
}
$erroresNacionalidad=esAlfabeticoYMinimoDeCaracteres($_POST["nacionalidad"],"nacionalidad",5);
if($erroresNacionalidad != null){
  $errores["nombre"]=$erroresNacionalidad;
}
if(estaVacio($_POST["email"])){
  $errores["email"]  = "Debe completar este campo <br>";
}if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
      $errores["email"]= "El mail no tiene el formato correcto <br>";
    }
    if (estaVacio($_POST["fecha-nac"])==0) {
      $errores["fecha-nac"]= "Debe completar una fecha de nacimiento <br>";
    if(estaVacio($_POST["password"])){
      $errores["password"]="Dejaste la contraseña vacia";
    }
    if(estaVacio($_POST["confpassword"])){
      $errores["confPassword"]="Dejaste la contraseña vacia";
    }
    if (!estaVacio($_POST["password"])&&!estaVacio($_POST["confPassword"])&&$_POST["password"]!=$_POST["confPassword"]{
      $errores["password"]="Las contraseñas no coinciden";
    }
    if (isset($_POST["pregunta-seguridad"])) {
      $errores["pregusnta-seguridad"]= "Debes elegir una pregunta <br>";
    }
    if(estaVacio($_POST["respuesta"])){
      $errores["respuesta"]="Debe escribir una respuesta";
    }
    if (isset($_POST["genero"])) {
      $errores["genero"]= "Debes seleccionar una opcion <br>";
    }




    return $errores;
}
function estaVacio($campo){
  if ($campo==""){
    return true;
  }else{
    return false;
  }
}
function esAlfabeticoYMinimoDeCaracteres($campo,$nombreCampo,$min){
  if (estaVacio($campo)==0) {
    return "No llenaste el $nombreCampo <br>";
  }else if(ctype_alpha($_POST["nombre"])==false){
      return"el campo debe ser alfabetico";
  }else if(strlen($_POST["nombre"]<3){
    return"El $campo debe tener al menos $min letras";
  }
}
 ?>
>>>>>>> master
