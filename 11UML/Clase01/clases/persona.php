<?php

class Persona{
  private $dni;
  private $nombre;
  private $apellido;
  private $edad;

  public function __construct($dni, $nombre, $apellido, $edad){
    $this->dni = $dni;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
  }

  public function getDni(){
    return $this->dni;
  }

  public function setDni($dni){
    $this->dni = $dni;
  }

  public function caminar(){
    return "Estoy caminando";
  }

  public function getNombre(){
    return $this->nombre;
  }

  
}

 ?>
