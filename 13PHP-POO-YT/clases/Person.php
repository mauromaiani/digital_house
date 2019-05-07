<?php
class Person{
  private $name;
  private $lastName;
  private $dateOfBirth;

  public function __construct($name, $lastName, $dateOfBirth){
    $this->name = $name;
    $this->lastName = $lastName;
    $this->dateOfBirth = $dateOfBirth;
  }

  public function walk(){

  }
  public function login(){

  }

public function __toString(){
  return $this->name . " " . $this->lastName;
}



}


 ?>
