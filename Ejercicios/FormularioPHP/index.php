<?php
include 'db.php';

$update = false;
$id = 0;
$nombre = "";
$email = "";
$telefono = "";

// Obtener todos los registros
$result = $conn->query("SELECT * FROM usuarios");

// Comprobar si se está editando
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $resultEdit = $conn->query("SELECT * FROM usuarios WHERE id=$id");
    if ($resultEdit->num_rows > 0) {
        $row = $resultEdit->fetch_assoc();
        $nombre = $row['nombre'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $update = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h1>CRUD de Usuarios</h1>
    <form method="POST" action="insert.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>
        <label>Teléfono:</label><br>
        <input type="text" name="telefono" value="<?php echo $telefono; ?>"><br><br>
        <?php if ($update): ?>
            <button type="submit" formaction="update.php">Actualizar Usuario</button>
        <?php else: ?>
            <button type="submit">Agregar Usuario</button>
        <?php endif; ?>
    </form>
    
    <h2>Listado de Usuarios</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <a href="?edit=<?php echo $row['id']; ?>">Editar</a> |
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
