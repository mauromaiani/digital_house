<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 04 PHP</title>
  </head>
  <body>

    <h2> Uno </h2>
    <?php
      for ($i=2; $i <= 20; $i= $i + 2) {
        echo "$i <br>";
      }
     ?>

     <h2> Dos </h2>
     <?php
      $contador = 1;
      while ($contador <= 5) {
        echo $contador*2;
        $contador++;
      }
      ?>

      <h2> Tres </h2>
      <?php
       $cara=1;
       $seca=0;
       $moneda= rand($cara, $seca);
       do {
         echo $moneda;
         $moneda++;
       } while ($moneda==1);

       ?>

       <h2> Cuatro </h2>
       <?php
        $nombres = ["Juan", "Maria", "Pedro", "Jose", "Manuel"];

        for ($i=0; $i < count($nombres); $i++) {
          echo "$nombres[$i] <br>";
        }


        ?>

        <h2> Cinco </h2>
        <?php
         $aleatorios = rand(1,10);
         // var_dump ($aleatorios);
         while ($aleatorios != 5) {
           echo "Se encontró un 5!";
           $aleatorios++;
         }


         ?>

         <h2> Seis </h2>
         <?php
         foreach (range('a', 'i') as $letras) {
           echo "En la posición [index] se encuentra el valor $letras";
         }


          ?>

          <h2> Siete y Ocho</h2>
          <?php
          $mascotas = [
            "animal" => "perro",
            "edad" => 1,
            "altura" => 0.30,
            "nombre" => "pipa",
          ];

          foreach ($mascotas as $key => $value) {
            echo "$key : $value <br>";
          }



           ?>



  </body>
</html>
