<?php

class Profesor
{
    private $idProfesor;
    private $nombre;
    private $apellido;
    private $antiguedad;

    public function __construct($idProfesor, $nombre, $apellido, $antiguedad)
    {
        $this->idProfesor = $idProfesor;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->antiguedad = $antiguedad;
    }

    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }
}