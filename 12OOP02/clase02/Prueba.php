<?php

require_once("clases/Alumno.php");
require_once("clases/Curso.php");
require_once("clases/Funcion.php");
require_once("clases/ManagerSistema.php");
require_once("clases/Profesor.php");

$alumno1 = new Alumno (1, "Cacho", "Chocho", "cacho@cacho.com");
$alumno1 -> setApellido ("Saracatunga");

// dd($alumno1 -> getEmail());

$curso1 = new Curso(1, "full", 54);
$curso1 -> setVacantes (7);

$profesor1 = new Profesor(1, "lala", "lolo", 9);
$profesor1 -> setAntiguedad (10);



ddx3($alumno1, $curso1, $profesor1);
