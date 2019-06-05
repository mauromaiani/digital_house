<?php
echo "hola";
$dsn = "mysql:dbname=movies_db;host=127.0.0.1;port=3306";
$usuario = "root";
$pass = "12345678"

try {
$baseDeDatos = new PDO ($dsn, $usuario, $pass);
$baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e){
 echo "hay un error"; exit;
}
echo "esta todo liso";
