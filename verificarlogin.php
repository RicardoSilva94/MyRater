<?php
session_start();

// Verificar se o utilizador já está autenticado
if (isset($_SESSION['nome'])) {
	header('Location: index.php');
	exit();
}