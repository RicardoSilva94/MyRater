<?php
// página protegida, verificação de login
session_start();

if (isset($_SESSION['id_utilizador'])) {
    global $liga;
    include("liga.php");

    /* definir o charset utilizado na ligação */
    $liga->set_charset("utf8");

    /* texto sql da consulta */
    $consulta = 'SELECT * FROM livros INNER JOIN avaliacoes ON avaliacoes.id_livro = livros.id_livro WHERE avaliacoes.id_utilizador=' . $_SESSION['id_utilizador'] .' ORDER BY avaliacoes.id_livro DESC';


    /* executar a consulta e testar se ocorreu erro */
    if (!$resultado = $liga->query($consulta)) {
        echo 'Falha na consulta: ' . $liga->error;
        $liga->close();  /* fechar a ligação */
    }


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Watercolor | Gallery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/gallery.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/spring.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />

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
    <script type="text/javascript" src="js/filterable.pack.js"></script>
    <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
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
    <!-- Prettyphotos -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>
    <!-- ENDS  Prettyphotos -->
    <!-- Font Lato -->
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- ENDS Font Lato -->

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
        <p class="section-title"><span class="title custom">Minha Lista</span><span class="desc">Consulta a tua lista de livros!</span></p>

        <div class="barra"></div>
        <!-- filter -->
        <ul id="portfolio-filter">
            <li>ORDENA A TABELA: </li>
            <li><a href="melhor_rating.php" >Melhor Rating</a></li>
            <li><a href="pior_rating.php">Pior Rating</a></li>
            <li><a href="#gallery.php">Mais Recente</a></li>
            <li><a href="mais_antigo.php">Mais Antigo</a></li>
            <li><a href="ordem_alf_autor.php">Ordem Alfabetica Autor</a></li>
            <li><a href="ordem_alf_titulo.php">Ordem Alfabetica Titulo</a></li>
        </ul>        <table class="flatTable table-sortable">
            <tr class="headingTr">

                <td data-column="titulo">TITULO</td>
                <td>AUTOR</td>
                <td>CATEGORIA</td>
                <td>RATING</td>
                <td data-column="data">DATA</td>
                <td>COMENTÁRIOS</td>
            </tr>
            <?php
            if (isset($_SESSION['id_utilizador']) && $resultado->num_rows > 0) {


                while ($row = $resultado->fetch_assoc()) {
                echo '<tr>';
                echo '<td data-column="titulo">' . $row['titulo'] . '</td>';
                echo '<td>' . $row['autor'] . '</td>';
                echo '<td>' . $row['categoria'] . '</td>';
                    $rating = $row['rating'];
                    echo '<td>' . ($rating === 0  ? 'N/A' : number_format($rating, 1)) . '</td>';
                    echo '<td data-column="data">' . $row['data'] . '</td>';
                echo '<td class="comment-cell">';


                $consulta2 = "SELECT comentario FROM livros WHERE id_utilizador = " . $_SESSION['id_utilizador'] . " AND id_livro = " . $row['id_livro'];

                if ($resultado2 = $liga->query($consulta2)) {
                    echo '<div class="comment-container">';
                    while ($row2 = $resultado2->fetch_assoc()) {
                        echo '<p class="comment-paragraph">' . $row2['comentario'] . '</p>';
                    }
                    echo '</div>';
                    $resultado2->free();
                } else {
                    echo 'Falha na consulta: ' . $liga->error;
                }
                echo '</td>';
                echo '</tr>';
            }
        } else {
                echo '<tr><td colspan="6">Não há livros para exibir. Experimenta adicionar livros ou verifica se estás Logado!</td></tr>';
            }
            ?>
        </table>
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

