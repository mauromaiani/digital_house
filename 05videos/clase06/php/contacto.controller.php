<?php
// var_dump($_POST);
$errores = [];

$nombre = trim($_POST['nombre']);
if ($nombre == ''){
  $errores[] = "El nombre es obligatorio";
}

$email = trim($_POST['email']);
if ($email == ''){
  $errores[] = "El mail es obligatorio";
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $errores[] = "El email no es valido";
}

$edad = trim($_POST['edad']);
if (!is_numeric($edad)){
  $errores[] = "La edad tiene que ser un numero";
} elseif($edad < 18){
  $errores[] = "Tenes que ser mayor de edad";
}

$mensaje = trim($_POST['mensaje']);
$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
if (strlen($mensaje) > 10){
  $errores[] = "Escribinos algo más largo";
}

var_dump($errores);

// echo $mensaje;

 ?>
