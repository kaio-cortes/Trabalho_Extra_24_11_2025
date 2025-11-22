<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao excluir: " . $conn->error;
}

$conn->close();
?>
