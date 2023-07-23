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
    <p class="section-title"><span class="title custom">Minha Lista</span><span class="desc">Consulta a tua lista de livros!</span></p>
    <!-- filter -->
    <ul id="portfolio-filter">
      <li>FILTER: </li>
      <li><a href="#all">ALL</a></li>
      <li><a href="#cat-images">IMAGES</a></li>
      <li><a href="#cat-flash">FLASH</a></li>
      <li><a href="#cat-video">VIDEO</a></li>
    </ul>

    <div class="barra">

    </div>
    <table class="flatTable">

      <tr class="headingTr">
        <td>TITULO</td>
        <td>AUTOR</td>
        <td>CATEGORIA</td>
        <td>RATING</td>
        <td>DATA</td>
        <td>OBS</td>
      </tr>

      <tr>
        <td>1984</td>
        <td>George Orwell</td>
        <td>Ficção</td>
        <td>7.5</td>
        <td>13/07/2023</td>
        <td class="controlTd">

          <a  href="#" class="modal-trigger verMais" data-modal="modal-name" > </a>


        </td>
      </tr>

      <tr>
        <td>Ensaio sobre a Cegueira</td>
        <td>José Saramago</td>
        <td>Romance</td>
        <td>6.8</td>
        <td>20/06/2023</td>
        <td class="controlTd">
          <a  href="#" class="modal-trigger verMais" data-modal="modal-name" > </a>
        </td>
      </tr>

      <tr>
        <td>O Silmarillion</td>
        <td>J.R.R. Tolkien</td>
        <td>Fantasia</td>
        <td>8.5</td>
        <td>13/01/2023</td>
        <td class="controlTd">
          <a  href="#" class="modal-trigger verMais" data-modal="modal-name" > </a>
        </td>
      </tr>

    </table>



  </div>
  <!-- ENDS MAIN -->
  <!-- Modal -->
  <div class="modal" id="modal-name">
    <div class="modal-sandbox"></div>
    <div class="modal-box">
      <div class="modal-header">
        <div class="close-modal">&#10006;</div>
        <h1>Comentários</h1>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta saepe, atque, iure quidem maiores non dolores, fuga eaque voluptatibus corporis accusantium quas. Eligendi velit eum fugiat eius? Distinctio reiciendis sint error, repellat ut soluta doloremque, accusamus vitae placeat?</p>
        <p>Laboriosam voluptas, iure rem provident laborum culpa atque fugit inventore sit. Corrupti dolore architecto inventore officia, odit totam voluptatem laboriosam tempore reiciendis, et neque, consequuntur. Non, tenetur? Tempore reprehenderit tenetur nemo asperiores alias commodi assumenda architecto minima numquam repellendus debitis nulla, rerum officia itaque, sunt nihil sequi quod perspiciatis, animi quas voluptates velit aperiam voluptatem.</p>
      </div>
    </div>
  </div>

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