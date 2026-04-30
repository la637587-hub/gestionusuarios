<?php include("conexion.php"); ?>

<h2>Usuarios</h2>
<a href="crear.php">➕ Nuevo Usuario</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM usuarios");

while($row = $result->fetch_assoc()):
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nombre'] ?></td>
    <td><?= $row['cedula'] ?></td>
    <td><?= $row['telefono'] ?></td>
    <td>
        <a href="editar.php?id=<?= $row['id'] ?>">✏️ Editar</a>
        <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar?')">❌ Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>

</table>