function validarFormulario(event) {
    let nome = document.forms["formContato"]["nome"].value;
    let email = document.forms["formContato"]["email"].value;
    let telefone = document.forms["formContato"]["telefone"].value;

    if (nome == "" || email == "" || telefone == "") {
        alert("Por favor, preencha todos os campos!");
        event.preventDefault(); // Impede o envio
        return false;
    }
    return true;
}

function confirmarExclusao(id) {
    if (confirm("Tem certeza que deseja excluir este contato?")) {
        window.location.href = "excluir.php?id=" + id;
    }
}
