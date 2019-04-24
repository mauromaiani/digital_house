<?php
  include_once("Funcion.php");

  class Curso{
    private $idCurso;
    private $nombre;
    private $vacantes;

    public function __construct($idCurso, $nombre, $vacantes){
      $this->idCurso = $idCurso;
      $this->nombre = $nombre;
      $this->vacantes = $vacantes;
    }

  // $curso1 = new Curso(1, "Matematica", 8);
  //
  // dd($curso1);

  public function getIdCurso(){
    return $this-> idCurso;
  }
  public function setIdCurso($idCurso){
    $this-> idCurso = $idCurso;
  }

  public function getNombre(){
    return $this-> nombre;
  }
  public function setNombre($nombre){
    $this-> nombre = $nombre;
  }

  public function getVacantes(){
    return $this-> vacantes;
  }
  public function setVacantes($vacantes){
    $this-> vacantes = $vacantes;
  }





}
 ?>
