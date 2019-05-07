<?php

// var_dump($_FILES['avatar']);

//validaciones

//registro

if($_FILES['avatar']['error'] == UPLOAD_ERR_OK){
//origen
  $origen = $_FILES['avatar']['tmp_name'];

//destino
  $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
  $nombreImagen = uniqid() . '.' . $ext;
  $destino = __DIR__ . '/../imagenes/' . $nombreImagen;

//subir imagen
  move_uploaded_file($origen, $destino);

  header('Location: registro-exito.php');
}

var_dump();

// move_uploaded_file($origen, $destino);



 ?>
