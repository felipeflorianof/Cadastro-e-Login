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

        //users
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        

        //endereco
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $municipio = $_POST['municipio'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $fk_endereco = $_POST['cep'];

        $result = mysqli_query($conexao, "INSERT INTO endereco(cep, estado, cidade, municipio, bairro, rua, numero, complemento) VALUES ('$cep', '$estado', '$cidade', '$municipio', '$bairro', '$rua', '$numero', '$complemento')");
        $result = mysqli_query($conexao, "INSERT INTO users(cpf, nome, senha, email, telefone, sexo, nascimento, fk_endereco) VALUES ('$cpf','$nome','$senha','$email','$telefone','$sexo','$nascimento', '$fk_endereco')",);
        
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
    <a href="home.php">Voltar</a>
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
                
        <p><label for="nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="nascimento" id="nascimento" required></p>


                    <!-- Address Table -->
        <p><input type="number" name="cep" id="cep" maxlength="11" minlength="11">
            <label for="cep">Cep</label></p>

        <p><input type="text" name="estado" id="estado" required>
            <label for="estado">Estado</label></p>
            
        <p><input type="text" name="cidade" id="cidade" required>
            <label for="cidade">Cidade</label></p>
                
        <p><input type="text" name="municipio" id="municipio">
            <label for="municipio">Municipio</label></p>

        <p><input type="text" name="bairro" id="bairro">
            <label for="bairro">Bairro</label></p>

        <p><input type="text" name="rua" id="rua">
            <label for="rua">Rua</label></p>

        <p><input type="text" name="numero" id="numero">
            <label for="numero">nº</label></p>
                
        <p><input type="text" name="complemento" id="complemento">
            <label for="complemento">Complemento</label></p>
                
        <p><input type="submit" name="submit" id="submit"></p>

        </form>
</body>
</html>