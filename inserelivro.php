<?php
global $liga;
include("liga.php");
session_start();

/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = filter_input(INPUT_POST, 'titulo');
    $autor = filter_input(INPUT_POST, 'autor');
    $categoria = filter_input(INPUT_POST, 'categoria');
    $comentario = filter_input(INPUT_POST, 'comments');
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
/* texto sql da iserir*/
$consulta = "INSERT INTO livros (titulo, autor, categoria, comentario, id_utilizador) VALUES ('$titulo', '$autor', '$categoria', '$comentario', '$id_utilizador' )";
/* executar a consulta e testar se ocorreu erro */
if (!$liga->query($consulta)) {
    echo " Falha ao executar a consulta: \"$consulta\" <br>" . $liga->error;
    $liga->close();  /* fechar a ligação */
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    echo " Novo livro inserido com sucesso" ;
	echo '<br> <a href="about.php">Voltar para inserir livro </a>';
}
$liga->close();       /* fechar a ligação */
?>
