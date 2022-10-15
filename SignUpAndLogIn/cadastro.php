<?php

    if(isset($_POST['submit'])){
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        
        /*$cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $municipio = $_POST['municipio'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $fk_endereco = $_POST['cep'];*/

        $result = mysqli_query($conexao, "INSERT INTO users(cpf, nome, senha, email, telefone, sexo, nascimento) VALUES ('$cpf','$nome','$senha','$email','$telefone','$sexo','$nascimento')");

        /*$result = mysqli_query($conexao, "INSERT INTO endereco(cep, estado, cidade, municipio, bairro, rua, numero, complemento) VALUES ('$cep', '$estado', '$cidade', '$municipio', '$bairro', '$rua', '$numero', '$complemento')");*/
        
        
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
            <label for="nome">Nome completo</label></p>

        <p><input type="number" name="cpf" id="cpf">
            <label for="cpf">CPF</label></p>

        <p><input type="password" name="senha" id="senha" required>
            <label for="senha">Senha:</label></p>
                
        <p><input type="text" name="email" id="email"required>
            <label for="email">Email</label></p>
                
        <p><input type="tel" name="telefone" id="telefone"required>
            <label for="telefone">Telefone</label></p>
                
    <p>Sexo:</p>
        <p><input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label></p>
               
        <p><input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label></p>

        <p><input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label></p>

        <p><input type="radio" id="pfnd" name="genero" value="pfnd" required>
            <label for="pfnd">Prefiro não dizer</label></p>
                
        <p><label for="nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="nascimento" id="nascimento" required></p>
        
        <p><input type="submit" name="submit" id="submit"></p>

        </form>

        <a href="cadastroponto.php">Cadastrar-se como ponto de Coleta</a>
</body>
</html>