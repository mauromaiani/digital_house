<?php
require_once("autoload.php");
$administradorSistema = new ManagerSistema();


$alumno1 = new Alumno(1,"daniel","fuentes","df@dh.com");

$alumno2 = new Alumno(2,"Herni", "Facundo", "herni@dh.com");

$curso = new Curso(1,"'FullStack",5);

$profesor1 = new Profesor("001", "Daniel", "Fuentes", 1);

$administradorSistema->setAlumnos($alumno1);
$administradorSistema->setAlumnos($alumno2);
$administradorSistema->setProfesores($profesor1);
$administradorSistema->setCursos($curso);
dd($administradorSistema);

// dd($alumno2->getApellido());

//dd($alumno1->getNombre());
//dd($curso);
//dd($profesor1);
// dd($profesor1->getApellido());
?>
