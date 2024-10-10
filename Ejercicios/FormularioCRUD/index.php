<?php
include 'db.php';

$name = "";
$email = "";
$id = 0;
$update = false;

if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $update = true;
    }
}

$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .button {
            padding: 7px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
        }
        .button.edit {
            background-color: #2196F3;
        }
        .button.delete {
            background-color: #f44336;
        }
        .button.cancel {
            background-color: #555555;
        }
    </style>
</head>
<body>
    <h1>CRUD de Usuarios</h1>

    <form method="POST" action="<?php echo $update ? 'update.php' : 'create.php'; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <label>Nombre:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>
        
        <?php if ($update): ?>
            <button type="submit" class="button edit">Actualizar Usuario</button>
            <a href="index.php" class="button cancel">Cancelar</a>
        <?php else: ?>
            <button type="submit" class="button">Agregar Usuario</button>
        <?php endif; ?>
    </form>

    <h2>Listado de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Creado</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['created']; ?></td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="button edit">Editar</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="button delete" onclick="return confirm('¿Estás seguro de eliminar este registro?');">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>
