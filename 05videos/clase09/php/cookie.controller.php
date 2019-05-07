<?php
//
// setcookie($indice, $valor, $vencimiento);


setcookie('email', $_POST['email'], time() + 60 * 60 * 3, '/');

// echo $_COOKIE['email']; exit;

header('Location: ../pagina1.php');


// header('Location: mostrarCookie.controller.php');
 ?>
