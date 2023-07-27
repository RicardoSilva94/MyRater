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
<title>Watercolor | About</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!-- Cufon -->
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/bebas_400.font.js" type="text/javascript"></script>
<script type="text/javascript">Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });</script>
<!-- /Cufon -->
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
        <p class="section-title"><span class="title custom">Livros</span><span class="desc">Adiciona, edita ou elimina os teus livros!</span></p>

        <?php
        if (isset($_SESSION['id_utilizador'])) {
            // Sessão iniciada, exibir o botão "Adicionar"
            echo '<form action="single.php">';
            echo '<button class="button button1">+ Adicionar </button>';
            echo '</form>';
        }
        ?>

        <?php
        if (isset($_SESSION['id_utilizador'])) {
            // Sessão iniciada, exibir a tabela de livros
            if ($resultado->num_rows > 0) {
                echo '<table class="books">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Titulo</th>';
                echo '<th>Autor</th>';
                echo '<th>Categoria</th>';
                echo '<th></th>';
                echo '<th></th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                while ($row = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['titulo'] . '</td>';
                    echo '<td>' . $row['autor'] . '</td>';
                    echo '<td>' . $row['categoria'] . '</td>';
                    // Rating column removed
                    echo '<td class="edit">';
                    echo '<a href="editarlivro.php?id_livro=' . $row['id_livro'] . '"><img src="img/edit.png" width="17" height="17" alt="editar" /></a>';
                    // Resto do código da imagem do botão "Editar"
                    echo '</td>';
                    echo '<td>';
                    echo '<img src="img/bin.png" width="17" height="17" alt="Caixote do lixo" class="delete-button" data-id-livro="' . $row['id_livro'] . '">';

                                    // Resto do código da imagem do botão "Eliminar"
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p>Não há livros para exibir.</p>';
            }

            // Liberar o resultado da consulta
            $resultado->free();
            // Fechar a conexão com o banco de dados
            $liga->close();
        } else {
            // Sessão não iniciada, exibir mensagem ou redirecionar para login
            echo '<p>Faz login para adicionares livros!</p>';
            // Ou redirecionar para a página de login
            // header("Location: login.php");
            // exit();
        }
        ?>
    </div>
</div>
<!-- ENDS MAIN -->


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
