<?php

// if (isset($_POST['categorias'])){
//
// }

var_dump($_POST);
echo "<br>";

echo "Nombre: " . $_POST['nombre'] . "<br>";
echo "Email: " . $_POST['email'] . "<br>";
echo "Pass: " . $_POST['password'] . "<br>";
echo "Pais: " . $_POST['pais'] . "<br>";
  if (isset($_POST['categorias'])){
  echo "Categorias: " . implode(', ', $_POST['categorias']);
  }
 ?>
