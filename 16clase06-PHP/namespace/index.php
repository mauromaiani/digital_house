<?php
require_once("clases/Sumar.php");
require_once("clases/Sumar1.php");

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NameSpace</title>
  </head>
  <body>
    <h1>NameSpace</h1>
    <br>
    <?="<h2>".\operacion1\Sumatoria::sumar(2,2)."</h2>";?>
    <br>
    <?="<h2>".\operacion2\Sumatoria::sumar(2,2)."</h2>";?>

  </body>
</html>
