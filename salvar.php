<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$acao = $_POST['acao'];

if ($acao == 'cadastrar') {
    $sql = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
} elseif ($acao == 'editar') {
    $id = $_POST['id'];
    $sql = "UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Volta para a página principal
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
