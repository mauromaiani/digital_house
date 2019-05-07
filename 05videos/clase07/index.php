<?php
//-----creo un archivo y lo escribo
// $recurso = fopen('datos.txt', 'a');
// fwrite($recurso, '123456'.PHP_EOL);
// fclose($recurso);


// $size = filesize('datos.txt');
//
// $recurso = fopen('datos.txt', 'r');
// $texto = fread($recurso, $size);
// fclose($recurso);
//
// echo str_replace(PHP_EOL, '<br>', $texto);

// $texto = file_get_contents('datos.txt');
// echo str_replace(PHP_EOL, '<br>', $texto);

// file_put_contents('datos.txt', 'hola', FILE_APPEND | LOCK_EX);
//
// $recurso = fopen('datos.txt', 'r');
// // $linea = fgets($recurso);
//
// while(($linea = fgets($recurso)) !== false ){
//   echo $linea . "<br>";
// }


// $miArray = [
//   'nombre' => 'Juan',
//   'color' => 'azul',
//   'categorias' => ['js', 'php', 'css']
// ];

// $json = json_encode($miArray);
//
// file_put_contents('datos.txt', $json. PHP_EOL, FILE_APPEND | LOCK_EX);

$recurso = fopen('datos.txt', 'r');

while (($linea = fgets($recurso)) !== false) {
  $miArray = json_decode($linea, true);
  var_dump($miArray);
}





 ?>
