<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width,initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>Clase PHP - 2</title>
  </head>
  <body>

      <?php
        $valor1=10;
        $valor2=20;
        $resultado=0;
        if ($valor1>$valor2) {
          $resultado=$valor1+$valor2;
        }else{
          $resultado=$valor1*$valor2;
        }
        echo "<h2>El resulado es: $resultado</h2>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $numeroUno=50;
        $numeroDos=100;
        if ($numeroUno>$numeroDos){
          echo "El numero mayor es $numeroUno";
        } else {
          echo "El numero mayor es $numeroDos";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $numeroMinimo=1;
        $numeroMaximo=5;
        $numeroAleatorio=rand ($numeroMinimo, $numeroMaximo);
        if ($numeroAleatorio ==3 || $numeroAleatorio ==5){
          echo "El numero de la suerte es $numeroAleatorio";
        } else {
          echo "No hay numero de la suerte ($numeroAleatorio)";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        if ($numeroAleatorio !=3){
          echo "El numero NO es 3";
        }else{
          echo "El numero es 3";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $numeroMayor=rand(1,100);
        if ($numeroMayor >= 50){
          echo "El numero es mayor a 50 ($numeroMayor)";
        }else{
          echo "El numero es menor a 50 ($numeroMayor)";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $nombreDeUsuario="admin";
        $contraseniaDeUsuario="1234";
        if ($nombreDeUsuario === "admin" && $contraseniaDeUsuario === "1234"){
          echo "Bienvenido!";
        }else{
          echo "Error";
        }
        echo "<hr>";
        $nombreDeUsuario="admin";
        $contraseniaDeUsuario="";
        if ($nombreDeUsuario === "admin" && $contraseniaDeUsuario === "1234"){
          echo "Bienvenido!";
        }else if($nombreDeUsuario != "admin"){
          echo "Error en Usuario";
        }else if($contraseniaDeUsuario != "1234"){
          echo "Error en Pass";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $edad=30;
        $casado=false;
        $sexo=["Masculino", "Femenido", "Otro"];
        if ($edad >=18 && !$casado){
          echo "Bienvenido";
        }
        echo "<hr>";
        $edad=30;
        $casado=false;
        $sexo="Otro";
        if ($sexo == "Otro"){
          echo $sexo;
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $cantidadDeAlumnos=20;
        if ($cantidadDeAlumnos) {
        echo "true";
        }else {
        echo "false";
        }
        echo "<hr>";
        $cantidadDeAlumnos=0;
        if ($cantidadDeAlumnos) {
        echo "true";
        }else {
        echo "false";
        }
        echo "<hr>";
        $cantidadDeAlumnos=100;
        if ($i = 1){
        echo "true";
        }else{
        echo "false";
        }
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        $dias=["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
        var_dump ($dias);
        $diaFestivo= rand(0,7);
        switch ($diaFestivo) {
          case 0:
            echo "$dias[0] ". "Este dia es festivo";
            break;
          case 1:
            echo "$dias[1] ". "Este dia es festivo";
            break;
          case 2:
            echo "$dias[2] ". "Este dia es festivo";
            break;
          case 3:
            echo "$dias[3] ". "Este dia es festivo";
            break;
          case 4:
            echo "$dias[4] ". "Este dia es festivo";
            break;
          case 5:
            echo "$dias[5] ". "Este dia es festivo";
            break;
          case 6:
            echo "$dias[6] ". "Este dia es festivo";
            break;
          default:
            echo "Debe especificar un valor entre 0 y 6";
            break;
        }

        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $dni=25333111;
        $nombre= "Ramon Ramirez";
        $sueldo= 10000;
        $aumento= 30;
        $sueldoNuevo= $sueldo*1.3;

        echo "<h2>Estimado $nombre, portador DNI $dni, su sueldo actual es: $$sueldo.- Su aumento fue de $aumento%, y su nuevo sueldo es $$sueldoNuevo.-</h2>";

        echo "<br>";
        echo "<hr>";
        echo "<br>";
        $dni2=111111111;
        $nombre2= "Ramon Ramirez";
        $sueldo2= rand(1, 100000);
        $aumento2= 0;

        switch ($sueldo2) {
          case ($sueldo2 < 12000):
              $aumento2= $sueldo2*1.3;
            break;

          default:
            // code...
            break;
        }

        echo "<h2>Estimado $nombre2: portador DNI $dni2, su sueldo actual es: $$sueldo2.- Su aumento fue de $aumento2%, y su nuevo sueldo es $.-</h2>";

          echo $sueldo2







       ?>
  </body>
</html>
