<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width,initial-scale=1.0">
    <title>Clase 1 PHP</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
      <h1>Vamos a laburar con PHP</h1>

      <h2>
      <?php
        $nombre= "lalala";
        $edad= 5;
        echo "Mi nombre es $nombre";
        echo "<hr>";
        echo 'Mi edad es ' .$edad;
        echo "<hr>";
        echo "Mi nombre es $nombre y tengo $edad anios";
        echo "<hr>";
        var_dump($nombre);
        echo "<br>";
        $nombres = ["Diego", "Rafa", "nico"];
        $nombres[]= "santi";
        $nombres[100]="Luna";
        $nombres[5.5]= "Pame";
        var_dump ($nombres);
        echo "<br>";
        $vehiculos=[
          "marcas"=> ["ford", "chevy", "bmw"],
          "modelos"=> ["exlporer", "blazer", "beatle"],
          "colores"=> ["gris", "azul", "rojo"],
        ];
        var_dump ($vehiculos);
        echo "Mi auto es ".$vehiculos["marcas"][1]. " modelos ".$vehiculos["modelos"][1]. " de color ".$vehiculos["colores"][1];



       ?>
      </h2>



  </body>
</html>
