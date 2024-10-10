<?php
include 'db.php';

    $id = intval($_GET['id']);

    $query = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conn);
    }
?>
