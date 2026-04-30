<?php
$host = " mysql-johis.alwaysdata.net"; // cambia si tu hosting da otro
$user = "johis";
$pass = "Clase1234";
$db = "johis_gestion_usuarios";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>