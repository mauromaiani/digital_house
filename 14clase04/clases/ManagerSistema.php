<?php
class ManagerSistema{
  private $alumnos=array();
  private $profesores=array();
  private $cursos=array();

  public function __construct(array $alumnos= null, array $profesores= null, array $cursos= null ){
    $this->alumnos = $alumnos;
    $this->profesores = $profesores;
    $this->cursos= $cursos;
  }
  public function getIdAlumnos(){
    return $this->$alumnos;
  }
  public function setAlumnos($alumno){
    $this->alumnos[]=$alumno;
  }

  public function getIdProfesores(){
    return $this->$profesores;
  }
  public function setProfesores($profesores){
    $this->profesores[]=$profesores;
  }

  public function getIdCursos(){
    return $this->$cursos;
  }
  public function setCursos($cursos){
    $this->cursos[]=$cursos;
  }




}

 ?>
