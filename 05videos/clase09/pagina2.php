<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAG 02</title>
  </head>
  <body>
    <h1>Pagina 02</h1>
    <ul>
      <li> <a href="form.php">Formulario</a></li>
      <li> <a href="pagina1.php">Pagina 01</a></li>
      <li> <a href="php/cerrarSesion.controller.php">Cerrar Sesión</a></li>

    </ul>
    <?php if(isset($_SESSION['email'])): ?>
    <p>El valor del indice email es $_SESSION es: <?php echo $_SESSION['email']; ?></p>
    <?php endif; ?>

    <?php if(isset($_COOKIE['email'])): ?>
    <p>El valor del indice email es $_COOKIE es: <?php echo $_COOKIE['email']; ?></p>
    <?php endif; ?>


  </body>
</html>
