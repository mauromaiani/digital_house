<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bucle PHP - Clase 03</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>Bucles</h1>


      <?php
        echo "<br>";
        echo "<hr>";
        echo "<br>";


          function mensaje($mensaje){
            echo "<h2>$mensaje</h2><br>";
          }

          mensaje("hola hola hola");
          mensaje("chau chau chau");


          function dd($valor)
          {
            var_dump($valor);
            exit;
          }

          echo "<br>";
          echo "<hr>";
          echo "<br>";

          // $valor1=10;
          // function sumar ($valor2){
          //   global $valor1;
          //   return $valor1 + $valor2;
          // }
          // $resultado = sumar(50)
          // echo "la suma es $resultado";
          // echo "$valor1";

      ?>


  </body>
</html>
