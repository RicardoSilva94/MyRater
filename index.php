<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>MyRater</title>
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
    <!-- slideshow -->
    <div id="slideshow">
      <ul id="slides">
        <li><img src="slides/01.jpg" alt="" /></li>
        <li><img src="slides/02.jpg" alt="" /></li>
        <li><img src="slides/03.jpg" alt="" /></li>
      </ul>
      <span></span> <a href="#"><img src="img/prev-slide.png" alt="" id="prev" /></a> <a href="#"><img src="img/next-slide.png" alt="" id="next" /></a> </div>
    <!-- ENDS slideshow -->
    <p class="custom excerpt">aqui PODES...</p>
    <!-- blocks -->
    <div class="holder">
      <div class="block">
        <div class="thumb-holder"> <a href="about.php"><img src="img/dummies/dummy-block1.jpg" alt="" class="thumb" /> </a> </div>
        <h2 class="custom">Adicionar Livro</h2>
        
        <p class="thumb-text">Adiciona um novo livro, avalia-o segundo critérios selecionados e comenta!</p>
        <p><a href="about.php" class="more">Adicionar</a></p>
      </div>
      <div class="block">
        <div class="thumb-holder"> <a href="gallery.php"><img src="img/dummies/dummy-block2.jpg" alt="" class="thumb" /> </a> </div>
        <h2 class="custom">Ver a tua lista</h2>
        
        <p class="thumb-text">Consulta, organiza e filtra a tua lista de livros de acordo com vários critérios!</p>
        <p><a href="gallery.php" class="more">More</a></p>
      </div>
      <div class="block last">
        <div class="thumb-holder"> <a href="blog.php"><img src="img/dummies/wish.jpg" alt="" class="thumb" /> </a> </div>
        <h2 class="custom">Criar uma Readlist</h2>
        
        <p class="thumb-text">Adiciona aqui livros que pretendes ler no futuro!</p>
        <p><a href="blog.php" class="more">More</a></p>
      </div>
    </div>
    <!-- ENDS blocks -->
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
          <li><a href="gallery.php" class="custom">Lista</a></li>

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
