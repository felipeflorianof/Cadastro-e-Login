<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $senhaponto = $_POST['senhaponto'];
        $emailponto = $_POST['emailponto'];
        $telefone = $_POST['telefone'];
        $fundacao = $_POST['fundacao'];

        $resultponto = mysqli_query($conexao, "INSERT INTO colaborador(cnpj, nome, senhaponto, emailponto, telefone, fundacao) VALUES ('$cnpj','$nome','$senhaponto','$emailponto','$telefone','$sexo','$fundacao')");
        
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <a href="index.html">Voltar</a>
        <h1>Cadastro</h1>
    <form action="cadastro.php" method="POST">     
                
                    <!-- Users Table -->
        <p><input type="text" name="nome" id="nome"required>
            <label for="nome">Nome Da empresa</label></p>

        <p><input type="number" name="cnpj" id="cnpj">
            <label for="cnpj">CNPJ</label></p>

        <p><input type="password" name="senha" id="senha" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="email" id="email"required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone"required>
            <label for="telefone">Telefone</label></p>
                
                
        <p><label for="fundacao"><b>Data de Fundação:</b></label>
            <input type="date" name="fundacao" id="fundacao" required></p>

            
        <!--Fazer Validação de marcação, se esta caixa não estiver marcada o usuário não poderá se cadastrar-->    
        <p><input type="checkbox" name="termos" id="termos" onclick="termos()">
            <label for="termos">Termos</label></p>

        <p><input type="submit" name="submit" id="submit"></p>
    </form>

        <a href="">Cadastrar-se como ponto de Coleta</a>
</body>
</html>