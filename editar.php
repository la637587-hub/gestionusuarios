<?php
include("conexion.php");

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<h2>Editar Usuario</h2>

<form method="POST">
    <input type="text" name="nombre" value="<?= $user['nombre'] ?>" required><br>
    <input type="text" name="cedula" value="<?= $user['cedula'] ?>" required><br>
    <input type="text" name="telefono" value="<?= $user['telefono'] ?>" required><br>
    <button type="submit">Actualizar</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $stmt = $conn->prepare("UPDATE usuarios SET nombre=?, cedula=?, telefono=? WHERE id=?");
    $stmt->bind_param("sssi", $_POST['nombre'], $_POST['cedula'], $_POST['telefono'], $id);

    if($stmt->execute()){
        header("Location: index.php");
    }
}
?>
