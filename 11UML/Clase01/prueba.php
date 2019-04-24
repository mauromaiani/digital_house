<?php
require_once("clases/persona.php");
  $alumno = new Persona("23456789", "Mauro", "lalala", 54);

  // $alumno->dni="23456789";
  // $alumno->nombre="Mauro";
  $alumno->setDni("0987654321");
  var_dump($alumno->getDni());

  var_dump($alumno->getNombre());

 ?>
