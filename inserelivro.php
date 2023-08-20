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

/*Funções*/

function ratingAverage($row)
{
    $average = 0;
    $counter = 0;

}

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

    $average = 0;
    $counter = 0;
    if ($personagens>0){
        $average += $personagens;
        $counter++;
    }
    if ($enredo>0){
        $average += $enredo;
        $counter++;
    }
    if ($estilo_de_escrita>0){
        $average += $estilo_de_escrita;
        $counter++;
    }
    if ($coerencia>0){
        $average += $coerencia;
        $counter++;
    }
    if ($originalidade>0){
        $average += $originalidade;
        $counter++;
    }
    if ($desfecho>0){
        $average += $desfecho;
        $counter++;
    }
    if ($relevancia>0){
        $average += $relevancia;
        $counter++;
    }
    if ($estrutura>0){
        $average += $estrutura;
        $counter++;
    }
    if ($detalhe>0){
        $average += $detalhe;;
        $counter++;
    }
    if ($counter === 0) {
        $average = 0;
    } else {
        $average = $average / $counter;
        $average = round($average, 1);
    }


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
    echo "Novo livro inserido com sucesso\n" ;
}

$id_livro = $liga->insert_id;

$avaliacao = "INSERT INTO avaliacoes (id_utilizador, id_livro, data, personagens, enredo, estilo_de_escrita, coerencia, originalidade, desfecho, relevancia, estrutura, detalhe, rating) 
VALUES ('$id_utilizador', '$id_livro', '$data', $personagens, '$enredo', '$estilo_de_escrita', '$coerencia', '$originalidade', '$desfecho', '$relevancia', '$estrutura', '$detalhe', '$average')";


if (!$liga->query($avaliacao)){
    echo " Falha ao avaliar livro: \"$avaliacao\" <br>" . $liga->error;
    $liga->close();
    exit(0);
}
else{
    $mensagem = "Novo livro adicionado e avaliado com sucesso!";
}
$liga->close();       /* fechar a ligação */


?>

<!DOCTYPE html>
<html>
<head>
    <title>Mensagem de Registo</title>
</head>
<body>
<style>
    /* Estiliza o dialog para centralizá-lo */
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

    /* Estiliza o botão de fechar com a cor vermelha */
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