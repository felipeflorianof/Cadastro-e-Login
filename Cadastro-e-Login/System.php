<?php
// Trabalhando com Sessões php
session_start();
//print_r($_SESSION); Informações da Sessão atual.
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
   unset($_SESSION['email']);
   unset($_SESSION['senha']);
   header('Location: login.php');
}
$logado = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="quit.php">Sair</a>
    <?php
    echo "<h1>Bem vindo ao Recifácil <u>$logado</u></h1>";
    ?>
</body>
</html>