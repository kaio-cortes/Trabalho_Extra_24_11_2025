<?php
$servername = "localhost";
$username = "root";
$password = ""; // Geralmente é vazio no XAMPP
$dbname = "agenda_contatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
