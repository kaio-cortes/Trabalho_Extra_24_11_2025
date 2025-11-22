<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2>Minha Agenda</h2>
        
        <form name="formContato" action="salvar.php" method="POST" onsubmit="return validarFormulario(event)">
            <input type="hidden" name="acao" value="cadastrar">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="telefone" placeholder="Telefone" required>
            <button type="submit">Adicionar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM contatos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>
                                <a href='editar.php?id=" . $row["id"] . "' class='btn btn-edit'>Editar</a>
                                <button onclick='confirmarExclusao(" . $row["id"] . ")' class='btn btn-delete'>Excluir</button>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum contato cadastrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
