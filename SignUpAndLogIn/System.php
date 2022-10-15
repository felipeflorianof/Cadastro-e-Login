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
    <br>
    <br>
    <!--Após posicionar onde vai ficar mesmo apague os br's acima-->
    <a href="profile.php">Configurações</a>
    <?php
    echo "<h1>Bem vindo ao Recifácil <u>$logado</u></h1>";
    ?>

    <p>Faça seu pedido de Coleta abaixo:</p>
    <p>Lorem ipsum dolor sit amet. Eum quas enim est eius nesciunt quo magnam corrupti eum accusamus provident!<br> Qui omnis ratione est temporibus dolorem in omnis perferendis. Non quaerat dolores et blanditiis provident qui soluta dolores!<br>
    Sed dolor dicta vel facilis ipsa aut consectetur accusamus quo ipsum.<br> tempora ut alias sint quo nisi exercitationem eos consequatur quidem. Rem necessitatibus iusto aut laborum ratione At officia iure.</p>
    <form action="System.php">


    <input type="submit" value="Solocitar Coleta">
    </form>

    
</body>
</html>