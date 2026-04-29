<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<h2>Editar Usuario</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>"><br>
    Cédula: <input type="text" name="cedula" value="<?php echo $user['cedula']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $user['telefono']; ?>"><br>
    <input type="submit" name="actualizar" value="Actualizar">
</form>

<?php
if(isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios 
            SET nombre='$nombre', cedula='$cedula', telefono='$telefono'
            WHERE id=$id";

    if($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>