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
              <textarea  name="comments"  id="comments" rows="5" cols="20"></textarea>
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
