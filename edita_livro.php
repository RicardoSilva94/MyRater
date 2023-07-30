<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Watercolor | Single</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/spring.css" type="text/css" media="screen" />
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
    <script>/* EXAMPLE */ DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!-- ENDS CSS -->
    <!-- JS -->
    <script type="text/javascript" src="js/jquery_1.3.2.js"></script>
    <script type="text/javascript" src="js/jqueryui.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- ENDS JS -->
    <!-- superfish -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" />
    <script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
    <!-- ENDS superfish -->
    <!-- Cufon -->
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/bebas_400.font.js" type="text/javascript"></script>
    <script type="text/javascript">Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });</script>
    <!-- /Cufon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />
    <link rel="stylesheet" href="style.css">
    <!-- /Font Awesome -->
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- navigation -->
    <ul id="nav" class="sf-menu">
        <li class="custom"><a href="blog.php">READLIST</a></li>
        <li class="custom"><a href="gallery.php">LISTA</a></li>
        <li class="custom"><a href="about.php">LIVROS</a></li>
        <li class="custom"><a >UTILIZADOR</a>
            <ul>
                <li class="custom"><a href="login.php">LOGIN</a></li>
                <li class="custom"><a href="contact.php">REGISTAR</a></li>

            </ul>
        </li>


    </ul>
    <!-- ENDS navigation -->
    <!-- HEADER -->
    <div id="header">
        <a href="index.php"><img src="img/logo.png" alt="Logo" id="logo" /></a>
        <?php
        session_start();
        if (isset($_SESSION['nome'])) {
            echo '<div id="user-info">
            <div id="user-greeting">Bem-vindo, ' . $_SESSION['nome'] . '!</div>
            <a href="logout.php" id="logout-link">Logout</a>
          </div>';
        }
        ?>
        <img src="img/nav-arrow.png" alt="" id="arrow" class="arrow-home" />
    </div>
    <!-- ENDS HEADER -->
    <!-- MAIN -->
    <div id="main">
        <!-- posts -->
        <div id="posts">
            <!-- single -->
            <div class="single">
                <p class="post-title custom">Adiciona o teu livro</p>
                <p <h6> E avalia-o, selecionando apenas os critérios de avaliação que achares importantes! </h6>
                <br> <br> <br> <br>
                <!-- form -->
                <form id="comment-form" method="post" action="inserelivro.php" >
                    <fieldset>
                        <p>
                            <label>Título:</label>
                            <input name="titulo"  id="titulo" type="text" required/>
                        </p>
                        <p>
                            <label>Autor:</label>
                            <input name="autor"  id="autor" type="text" required />
                        </p>
                        <p>
                            <label>Categoria:</label>
                            <input name="categoria"  id="categoria" type="text" />
                        </p>
                        <p>
                            <label>Comentários:</label>
                            <textarea  name="comments"  id="comments" rows="5 cols="20"></textarea>
                        </p>

                        <p>
                            <button id="livroButton" type="submit" onclick="return processarFormulario()" name="send" />

                        </p>
                    </fieldset>

                </form>

                <!-- ENDS form -->
            </div>

            <!-- ENDS leave comment -->
        </div>
        <!-- ENDS posts -->
        <!-- sidebar -->


        <div class="container">
            <p class="post-title custom">RATING</p>
            <div class="skills">
                <h3 class="name">Personagens</h3>
                <div class="rating">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">
                    <input type="radio" name="personagens">

                </div>
            </div>

            <div class="skills">
                <h3 class="name">Enredo</h3>
                <div class="rating">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                    <input type="radio" name="enredo">
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Estilo de escrita</h3>
                <div class="rating">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">
                    <input type="radio" name="estilo_de_escrita">

                </div>
            </div>

            <div class="skills">
                <h3 class="name">Coerência</h3>
                <div class="rating">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                    <input type="radio" name="coerencia">
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Originalidade</h3>
                <div class="rating">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                    <input type="radio" name="originalidade">
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Desfecho</h3>
                <div class="rating">
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                    <input type="radio" name=desfecho>
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Relevância</h3>
                <div class="rating">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                    <input type="radio" name="relevancia">
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Estrutura</h3>
                <div class="rating">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                    <input type="radio" name="estrutura">
                </div>
            </div>

            <div class="skills">
                <h3 class="name">Detalhe</h3>
                <div class="rating">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                    <input type="radio" name="detalhe">
                </div>
            </div>





        </div>
        <!-- ENDS side-block -->
        <!-- side-block -->

        <!-- ENDS sidebar -->
    </div>
    <!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<!-- FOOTER -->
<div id="footer">
    <div id="footer-wrapper">

        <div class="footer-cols">
            <div>
                <ul>
                    <li><a href="contact.php" class="custom">Registar</a></li>

                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="about.php" class="custom">Livros</a></li>

                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="about.php" class="custom">Lista</a></li>

                </ul>
            </div>
            <div class="last">
                <ul>
                    <li><a href="blog.php" class="custom">ReadList</a></li>

                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="legal">&copy; Copyright 2023 <a href="#">MyRater</a> All Rights Reserved</p>
        </div>
    </div>
</div>
<!-- ENDS FOOTER -->
<!-- start cufon -->
<script type="text/javascript">Cufon.now();</script>
<!-- ENDS start cufon -->
</body>
</html>





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
        $mensagem = "Livro editado com sucesso!";
    }

    $stmt_avaliacao->close();
    $stmt->close();
    $liga->close();
} else {
    echo "Erro, formulário não submetido";
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Registo</title>
</head>
<body>
<style>
    /* Estilize o dialog para centralizá-lo */
    dialog {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        padding: 20px;
        z-index: 9999;
    }

    /* Estilize o botão de fechar com a cor vermelha */
    #fechar-dialog {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
</style>

<dialog id="mensagem-dialog">
    <?php echo $mensagem; ?>
    <button id="fechar-dialog">Fechar</button>
</dialog>

<script>
    var dialog = document.getElementById('mensagem-dialog');
    var fecharDialog = document.getElementById('fechar-dialog');

    /* Exibir o dialog ao carregar a página, se houver mensagem */
    if ("<?php echo $mensagem; ?>" !== '') {
        dialog.showModal();
    }

    /* Fechar o dialog quando o botão "Fechar" for clicado */
    fecharDialog.addEventListener('click', function() {
        dialog.close();
    });
</script>

<script>
    /* Redirecionar para a página login.php após 5 segundos */
    setTimeout(function() {
        window.location.href = 'about.php';
    }, 5000); // Tempo em milissegundos (5 segundos)
</script>
</body>
</html>
