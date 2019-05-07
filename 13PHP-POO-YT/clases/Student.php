<?php

class Student extends Person{
  protected $UniversityID;
  public function __construct($name, $lastName, $dateOfBirth, $UniversityID){
    parent::__construct($name, $lastName, $dateOfBirth);
    $this->UniversityID = $UniversityID;
  }
  public function enrollToCourse(){

  }
  public function __toString(){
    return parent::__toString() . " " . $this->UniversityID;
  }

}
