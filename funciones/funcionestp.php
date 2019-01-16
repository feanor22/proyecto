<?php
function validacion(){
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
