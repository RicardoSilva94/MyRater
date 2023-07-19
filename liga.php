<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbdatabase ='myrater';
$liga = mysqli_connect($dbhost, $dbuser, $dbpass, $dbdatabase)
or die ("Erro: ". mysqli_error($liga));
mysqli_set_charset($liga,'utf8');

?>