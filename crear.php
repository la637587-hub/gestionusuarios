<?php include("conexion.php"); ?>

<h2>Crear Usuario</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="text" name="cedula" placeholder="Cédula" required><br>
    <input type="text" name="telefono" placeholder="Teléfono" required><br>
    <button type="submit">Guardar</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, cedula, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['nombre'], $_POST['cedula'], $_POST['telefono']);

    if($stmt->execute()){
        header("Location: index.php");
    } else {
        echo "Error al guardar";
    }
}
?>