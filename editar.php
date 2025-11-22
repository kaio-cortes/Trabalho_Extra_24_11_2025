<?php
include 'conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM contatos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Editar Contato</h2>
        <form action="salvar.php" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
            <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required>
            
            <button type="submit">Salvar Alterações</button>
        </form>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
