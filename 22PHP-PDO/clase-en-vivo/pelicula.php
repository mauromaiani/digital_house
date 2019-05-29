<?php
require_once("autoload.php");

if(isset($_GET["id"])){
    $query = $pdo ->query("select * from movies where id =".$_GET["id"]);
    $query->execute();
    $resultado = $query->fetchall(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelicula</title>
</head>
<body>



<?php
    foreach($resultado as $value){
        echo "<h2>" .$value['title']. "</h2> Puntuacion: ".$value['rating'];
    }
    ?>
<br>
<br>
<a href="peliculas.php">Volver</a>
</body>
</html>
