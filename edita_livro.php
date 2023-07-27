<?php
global $liga;
include("liga.php");
session_start();

/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_livro = filter_input(INPUT_POST, 'id_livro', FILTER_VALIDATE_INT);
    $titulo = filter_input(INPUT_POST, 'titulo');
    $autor = filter_input(INPUT_POST, 'autor');
    $categoria = filter_input(INPUT_POST, 'categoria');
    $comentario = filter_input(INPUT_POST, 'comments');
    $id_utilizador = $_SESSION['id_utilizador'];

    /* validar os dados recebidos do formulário */
    if (empty($id_livro) || empty($titulo) || empty($autor)) {
        echo "Os campos 'id_livro', 'titulo' e 'autor' do formulário devem conter valores";
        exit();
    }

    $consulta = "UPDATE livros SET titulo=?, autor=?, categoria=?, comentario=? WHERE id_livro=?";
    $stmt = $liga->prepare($consulta);
    $stmt->bind_param('ssssi', $titulo, $autor, $categoria, $comentario, $id_livro);
    if (!$stmt->execute()) {
        echo "Falha ao atualizar livro: \"$consulta\" <br>" . $stmt->error;
        $stmt->close();
        $liga->close();
        exit(0);
    } else {
        echo "Livro atualizado com sucesso\n";
    }

    $data = date('Y-m-d H:i:s');
    $personagens = filter_input(INPUT_POST, 'personagens', FILTER_VALIDATE_INT);
    $enredo = filter_input(INPUT_POST, 'enredo', FILTER_VALIDATE_INT);
    $estilo_de_escrita = filter_input(INPUT_POST, 'estilo_de_escrita', FILTER_VALIDATE_INT);
    $coerencia = filter_input(INPUT_POST, 'coerencia', FILTER_VALIDATE_INT);
    $originalidade = filter_input(INPUT_POST, 'originalidade', FILTER_VALIDATE_INT);
    $desfecho = filter_input(INPUT_POST, 'desfecho', FILTER_VALIDATE_INT);
    $relevancia = filter_input(INPUT_POST, 'relevancia', FILTER_VALIDATE_INT);
    $estrutura = filter_input(INPUT_POST, 'estrutura', FILTER_VALIDATE_INT);
    $detalhe = filter_input(INPUT_POST, 'detalhe', FILTER_VALIDATE_INT);

    /* texto sql para atualizar a avaliação do livro */
    $avaliacao = "UPDATE avaliacoes SET data=?, personagens=?, enredo=?, estilo_de_escrita=?, coerencia=?, originalidade=?, desfecho=?, relevancia=?, estrutura=?, detalhe=? WHERE id_livro=? AND id_utilizador=?";
    $stmt_avaliacao = $liga->prepare($avaliacao);
    $stmt_avaliacao->bind_param('siiiiiiiiiii', $data, $personagens, $enredo, $estilo_de_escrita, $coerencia, $originalidade, $desfecho, $relevancia, $estrutura, $detalhe, $id_livro, $id_utilizador);
    if (!$stmt_avaliacao->execute()) {
        echo "Falha ao avaliar livro: \"$avaliacao\" <br>" . $stmt_avaliacao->error;
        $stmt_avaliacao->close();
        $stmt->close();
        $liga->close();
        exit(0);
    } else {
        echo "Avaliação do livro atualizada com sucesso\n";
    }

    $stmt_avaliacao->close();
    $stmt->close();
    $liga->close();
} else {
    echo "Erro, formulário não submetido";
    exit();
}

echo '<br> <a href="about.php">Voltar para inserir livro </a>';
?>


