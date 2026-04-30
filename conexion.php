<?php
$conexion = new mysqli("mysql-johis.alwaysdata.net", "johis", "Clase1234", "johis_gestion_usuarios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>