<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width,initial-scale=1.0">
    <title>Clase 1 PHP</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <h1>Chino Basico</h1>
    <!-- <h2> -->
    <?php

    $numeroentero= 1;
    $numerodecimal= 5.5;
    $cadenasimple= ['hola'. 'que tal'];
    $cadenavariable= ["chau", "hasta pronto"];
    echo $numeroentero;
      echo "<br>";
    var_dump($numeroentero);
      echo "<hr>";
    echo $numerodecimal;
      echo "<br>";
    var_dump($numerodecimal);
      echo "<hr>";
    echo $cadenasimple;
      echo "<br>";
    var_dump ($cadenasimple);
      echo "<hr>";
    echo $cadenavariable;
      echo "<br>";
    var_dump($cadenavariable);
      echo "<hr>";


    $numeroentero= "que";
    echo $numeroentero;
    echo "<br>";
    var_dump($numeroentero);
    $cadenasimple= 3.2;
    echo $cadenasimple;
    echo "<br>";
    var_dump ($cadenasimple);

echo "<hr>";
    $numeroentero= "8";
    echo $numeroentero;
    echo "<br>";
    var_dump($numeroentero);
echo "<hr>";
echo "<br>";
echo "<hr>";
    $uno= "tres ";
    $dos= "tristes ";
    $tres= "tigres ";
    $cuatro= "tragan ";
    $cinco= "trigo ";
    $seis= "en ";
    $siete= "un ";
    $ocho= "trigal";
    echo $uno, $dos, $tres, $cuatro, $cinco, $seis, $siete, $ocho;
    echo "<br>"; echo "<hr>";
    echo "que vamos a hacer $dos no se $numeroentero";
    echo "<hr>";
    echo "<br>";
    echo "<hr>";

    $animales=["vaca", "chancho", "pato", "oveja", "pollo"];
    var_dump ($animales);
    echo "<br>";
    $animales[]= "elefante";
    $animales[]= "rino";
    var_dump ($animales);
    echo "<br>";
    echo "me gustan los animales: " .$animales[6]. " y " .$animales[0]. ".";
echo "<br>";
    $animales[0]= "reptil";
    echo "$animales[0]";
    $animales[100]= "koala";
    var_dump ($animales);
    echo "<hr>";
    echo "<br>";
    echo "<hr>";

    $autos=[
      "marca"=> ["ford"],
      "modelo"=> ["ka"],
      "color"=> ["rojo"],
      "año"=> [2018],
      "patente"=> [1111],
      ];
      // var_dump($autos);
      echo "<hr>";
      echo "<br>";
      echo "mi auto es ".$autos["marca"][0]. " ".$autos["modelo"][0]. ", patente ".$autos["patente"][0];
      // echo "Mi auto es ".$vehiculos["marcas"][1]. " modelos ".$vehiculos["modelos"][1]. " de color ".$vehiculos["colores"][1];
      echo "<br>";
      $autos[0]="jose";
      // var_dump($autos);
      echo "<hr>";
      echo "<br>";
      // echo "mi auto es $autos";
      echo "<br>";
      $autos[14]="seguro";
      // var_dump($autos);
      echo "<br>";
      $autos ["patente"] = [222];
      // var_dump($autos);
      echo "mi auto es ".$autos["marca"][0]. " ".$autos["modelo"][0]. ", patente ".$autos["patente"][0];
      echo "<br>";
      echo "soy ".$autos[0]. " y mi auto es ".$autos["marca"][0]. " ".$autos["modelo"][0]. ", patente ".$autos["patente"][0];
      echo "<br>";
      $autos[0]="mariano";
      echo "soy ".$autos[0]. " y mi auto es ".$autos["marca"][0]. " ".$autos["modelo"][0]. ", patente ".$autos["patente"][0];
      echo "<br>";
      echo "<hr>";
      echo "<br>";
      $entero= 1;
      $decimal= 1.5;
      echo $entero + $decimal;
      echo "<br>";
      echo $entero - $decimal;
      echo "<br>";
      echo $entero * $decimal;
      echo "<br>";
      echo $entero / $decimal;
      echo "<br>";
      $division= $entero / $decimal;
      echo $division;
      echo "<br>";
      echo 1 + ($entero + $decimal);
      echo "<br>";
      echo (5 + $entero) + (0.6 - $decimal);
      echo "<br>";
      $resultado= (($entero * 2) + $decimal) / ($entero / 2);
      echo $resultado;
      echo "<br>";
      $resultado2= ((1 * 2) + 1.5) / (1 / 2);
      echo $resultado2;
      echo "<br>";
      echo "<hr>";
      echo "<br>";

      $hola= "hola ";
      $mundo= "mundo";
      $holamundo= $hola . $mundo;
      echo $holamundo;
      echo "<br>";
      echo $holamundo . " te odio php";





     ?>

   <!-- </h2> -->
  </body>
</html>
