<?php include("conexion.php"); ?>

<h2>Crear Usuario</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Cédula: <input type="text" name="cedula"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <input type="submit" name="guardar" value="Guardar">
</form>

<?php
if(isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, cedula, telefono)
            VALUES ('$nombre', '$cedula', '$telefono')";

    if($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>