<?php

$servername = "localhost";
$username = "root";
$password = ""; // corregido
$database = "miportal_web";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>