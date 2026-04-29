<?php
$host = "mysql-johis.alwaysdata.net";
$user = "johis";
$pass = "Clase1234";
$db = "johis_gestion";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>