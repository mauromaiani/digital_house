<?php
  include_once("Funcion.php");


  class Alumno{
    private $idAlumno;
    private $nombre;
    private $apellido;
    private $email;

    public function __construct($idAlumno, $nombre, $apellido, $email){
      $this->idAlumno = $idAlumno;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->email = $email;
    }

// $alumno1 = new Alumno(1, "Juan", "Perez", "juan@perez.com");
//
// dd($alumno1);

// $primerAlumno = new Alumno("alu001", "Rodo", "Raskovsky", "rodo@dh.com");
//
// // dd($primerAlumno);
//
// $primerAlumno->nombre = "Nelson";
//
// dd($primerAlumno);

  public function getIdAlumno(){
    return $this-> idAlumno;
  }

  public function setIdAlumno($idAlumno){
    $this-> idAlumno = $idAlumno;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this-> nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this-> apellido = $apellido;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this-> email = $email;
  }




  }
 ?>
