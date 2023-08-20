<?php
global $liga;
include("liga.php");
session_start();

/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = filter_input(INPUT_POST, 'titulo');
    $autor = filter_input(INPUT_POST, 'autor');
    $id_utilizador = $_SESSION['id_utilizador'];




    /* validar os dados recebidos do formulario */
    if (empty($titulo) || empty($autor)){
        echo "Os campos 'titulo' e 'autor' do formulário devem conter valores ";
        exit();
    }
}
else{
    echo " Erro, formulário não submetido ";
    exit();
}
/* texto sql de inserir*/
$consulta = "INSERT INTO desejos (titulo, autor, id_utilizador) VALUES ('$titulo', '$autor', '$id_utilizador' )";

/* executar a consulta e testar se ocorreu erro */
if (!$liga->query($consulta)) {
    echo " Falha ao inserir livro: \"$consulta\" <br>" . $liga->error;
    $liga->close();  /* fechar a ligação */
    exit(0);
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    header('Location: blog.php');
}


$liga->close();       /* fechar a ligação */


?>
