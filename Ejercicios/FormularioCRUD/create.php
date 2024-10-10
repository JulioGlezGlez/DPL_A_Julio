<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

$query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error al agregar el usuario: " . mysqli_error($conn);
}
?>