<?php
$servername = "localhost";
$username = "julio";
$password = "1q2w3e4r5t";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
