<?php
require_once("clases/Person.php");
require_once("clases/Student.php");

$esmeralda = new Person("Juana", "Diaz", "9333");
$luis = new Student("Luis", "Rodriguez", "2010-1", "329837984");

echo $luis;
echo "<br>";
echo $esmeralda;
// echo "Funciona!";
echo "<br>";

$people = [$esmeralda, $luis];
foreach ($people as $id => $person):
  print $person;
endforeach;
