<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 04/02 PHP</title>
  </head>
  <body>

    <h2> Uno </h2>
    <?php
      function mayor($numUno, $numDos, $numTres){
        echo max(mayor);
      }

      echo mayor(2,4,6);

      echo max(2,6,8);
     ?>

     <h2> Dos </h2>
     <?php
     function tabla($a, $b){
       foreach (range($a, $b) as $numerosTabla){
         echo "$numerosTabla <br>";
       }

     }

     foreach (range(0, 12) as $número) {
         echo "$número <br>";
     }
      ?>

      <h2> Tres </h2>
      <?php
      

       ?>

  </body>
</html>
