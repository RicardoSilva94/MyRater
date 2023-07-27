<?php
global $liga;
session_start();

if (isset($_SESSION['id_utilizador'])) {
    // Verifique se o ID do livro foi fornecido na solicitação POST
    if (isset($_GET['id_livro'])) {
        $idLivro = $_GET['id_livro'];

        // Inclua o arquivo de conexão com o banco de dados (liga.php)
        include("liga.php");
        $liga->set_charset("utf8");

        // Realize a operação de eliminação no banco de dados
        $consulta = 'DELETE FROM livros WHERE id_livro=' . $idLivro;

        if ($liga->query($consulta)) {
            // Se a eliminação for bem-sucedida, você pode retornar qualquer resposta
            // para o JavaScript indicando o sucesso. Neste caso, vamos retornar 'success'.
            echo 'success';
            header('Location: about.php');
        } else {
            // Em caso de erro, você pode retornar uma mensagem de erro ou um código de erro.
            // Aqui, estamos apenas retornando a mensagem de erro do MySQL.
            echo 'Falha na eliminação: ' . $liga->error;
        }

        // Fechar a conexão com o banco de dados
        $liga->close();
    }
}
?>

