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

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    }

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
    
     <form action="index.php" method="POST">     
                
        <p><input type="text" name="nome" id="nome"required>
            <label for="nome">Nome completo</label></p>

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
                
        <p><label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nasc" id="data_nasc" required></p>
            
        <p><input type="text" name="cidade" id="cidade" required>
            <label for="cidade">Cidade</label></p>
                
        <p><input type="text" name="estado" id="estado" required>
            <label for="estado">Estado</label></p>
                
        <p><input type="text" name="endereco" id="endereco" required>
            <label for="endereco">Endereço</label></p>
                
        <p><input type="submit" name="submit" id="submit"></p>

        </form>
</body>
</html>