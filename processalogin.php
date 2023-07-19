global$liga; global$liga;
<?php
include("liga.php");
session_start();
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 /*   $username = filter_input(INPUT_POST, 'username');*/
 /*   $password = filter_input(INPUT_POST, 'password');*/
	$username = $_POST['username'];
    $password = sha1($_POST['password']);
    $nome = $_POST['name'];
    $localidade = $_POST['localidade'];

    /* validar os dados recebidos do formulario */
    if (empty($username) || empty($password)){
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }    
}
else{
   echo " ERRO - Não foi possível executar a operação login. ";
   exit();
}

/* texto sql da consulta*/
    $consulta = "SELECT * FROM utilizadores WHERE username = '$username' AND password = '$password'";
    $resultado = $liga->query($consulta);

    /* executar a consulta e testar se ocorreu erro */
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        // o utilizador está correctamente validado
        // guardamos as suas informações numa sessão
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $_SESSION['nome'] = $row['nome']; // Definir a variável de sessão com o nome do utilizador

        header('location:index.php');
        exit();
    } else {
        // falhou o login
        echo "<p>Utilizador ou password invalidos. <a href=\"login.php\">Tente novamente</a></p>";
        $liga->close();  /* fechar a ligação */

}
?>