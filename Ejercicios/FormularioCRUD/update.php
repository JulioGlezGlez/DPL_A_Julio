<?php
include 'db.php';

$id = intval($_POST['id']);
$name = $_POST['name'];
$email = $_POST['email'];

$query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error al actualizar el usuario: " . mysqli_error($conn);
}
?>