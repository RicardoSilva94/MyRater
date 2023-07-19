<?php

global $liga, $liga;
include("liga.php");

/* Inicializar a variável da mensagem como vazia */
$mensagem = '';

/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se todos os campos estão preenchidos
    if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['localidade'])) {
        $mensagem = "ERRO - Preencha todos os campos do formulário.";
    } else {
        $nome = $_POST['name'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $localidade = $_POST['localidade'];

        /* texto sql da consulta */
        $consulta = "INSERT INTO utilizadores (id_utilizador, nome, username, password, localidade) VALUES (null, '$nome', '$username', '$password', '$localidade')";
        /*$resultado = $liga->query($consulta);*/
        /* executar a consulta e testar se ocorreu erro */
        if (!$liga->query($consulta)) {
            $mensagem = "ERRO - Utilizador não inserido.";
        } else {
            $mensagem = "Utilizador criado com sucesso!";
            $liga->close(); /* fechar a ligação */
        }
    }
} else {
    $mensagem = "ERRO - Não foi possível executar a operação login.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Registo</title>
</head>
<body>
<dialog id="mensagem-dialog">
    <?php echo $mensagem; ?>
    <button id="fechar-dialog">Fechar</button>
</dialog>

<script>
    var dialog = document.getElementById('mensagem-dialog');
    var fecharDialog = document.getElementById('fechar-dialog');


    if ("<?php echo $mensagem; ?>" !== '') {
        dialog.showModal();
    }


    fecharDialog.addEventListener('click', function() {
        dialog.close();
        window.location.href = 'index.html';
    });
</script>
</body>
</html>





