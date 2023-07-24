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


    $data = date('Y-m-d H:i:s');
    $personagens = filter_input(INPUT_POST, 'personagens');
    $enredo = filter_input(INPUT_POST, 'enredo');
    $estilo_de_escrita = filter_input(INPUT_POST, 'estilo_de_escrita');
    $coerencia = filter_input(INPUT_POST, 'coerencia');
    $originalidade = filter_input(INPUT_POST, 'originalidade');
    $desfecho = filter_input(INPUT_POST, 'desfecho');
    $relevancia = filter_input(INPUT_POST, 'relevancia');
    $estrutura = filter_input(INPUT_POST, 'estrutura');
    $detalhe = filter_input(INPUT_POST, 'detalhe');



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
    echo " Falha ao inserir livro: \"$consulta\" <br>" . $liga->error;
    $liga->close();  /* fechar a ligação */
    exit(0);
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    echo " Novo livro inserido com sucesso" ;
}

$id_livro = $liga->insert_id;

$avaliacao = "INSERT INTO avaliacoes (id_utilizador, id_livro, data, personagens, enredo, estilo_de_escrita, coerencia, originalidade, desfecho, relevancia, estrutura, detalhe) 
VALUES ('$id_utilizador', '$id_livro', '$data', '1', '2', '3', '4', '5', '6', '7', '8', '9')";
//$avaliacao = "INSERT INTO avaliacoes(id_utilizador, id_livro, data, personagens, enredo, estilo_de_escrita, coerencia, originalidade, desfecho, relevancia, estrutura, detalhe) VALUES ('$id_utilizador', '$id_livro' '$data', '$personagens', '$enredo', '$estilo_de_escrita', '$coerencia', '$originalidade', '$desfecho', '$relevancia', '$estrutura', '$detalhe' )";


if (!$liga->query($avaliacao)){
    echo " Falha ao avaliar livro: \"$avaliacao\" <br>" . $liga->error;
    $liga->close();
    exit(0);
}
else{
    echo "Novo livro avaliado com sucesso" ;
}
$liga->close();       /* fechar a ligação */

echo '<br> <a href="about.php">Voltar para inserir livro </a>';

?>
