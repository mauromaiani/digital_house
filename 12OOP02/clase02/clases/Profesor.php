<?php
  include_once("Funcion.php");

  class Profesor{
    private $idProfesor;
    private $nombre;
    private $apellido;
    private $antiguedad;

    public function __construct($idProfesor, $nombre, $apellido, $antiguedad){
      $this->idProfesor = $idProfesor;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->antiguedad = $antiguedad;
    }


  // $profesor1 = new Profesor(1, "Juan", "Roman", 4);
  //
  // dd($profesor1);

  public function getIdProfedor(){
    return $this-> idProfesor;
  }
  public function setIdProfesor($idProfesor){
    $this-> idProfesor = $idProfesor;
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

  public function getAntiguedad(){
    return $this-> antiguedad;
  }
  public function setAntiguedad($antiguedad){
    $this-> antiguedad = $antiguedad;
  }

  }
 ?>
