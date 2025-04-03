<?php
    $servername = "mysql-db";
    $username = "sea";
    $password = "proyectose@";
    $database = "bd_keyloggers";

/*
MYSQL_ROOT_PASSWORD=proyectose@
MYSQL_DATABASE=bd_keyloggers
MYSQL_USER=sea
MYSQL_PASSWORD=proyectose@


$servername = "localhost";
$username = "sea";
$database = "coaching";
$password = "Pr0j3cts3@";
*/

// Creamos la conexion y seleccionamos la base de datos
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>
