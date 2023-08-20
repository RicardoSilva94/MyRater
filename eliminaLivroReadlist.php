<?php
global $liga;
session_start();

if (isset($_SESSION['id_utilizador'])) {
    // Verifique se o ID do livro foi fornecido na solicitação POST
    if (isset($_GET['id_livro'])) {
        $idLivro = $_GET['id_livro'];


        include("liga.php");
        $liga->set_charset("utf8");


        $consulta = 'DELETE FROM desejos WHERE id_livro=' . $idLivro;

        if ($liga->query($consulta)) {

            echo 'success';
            header('Location: blog.php');
        } else {

            echo 'Falha na eliminação: ' . $liga->error;
        }


        $liga->close();
    }
}
?>
