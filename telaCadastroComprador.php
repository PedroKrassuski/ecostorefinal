<?php

    if(isset($_POST['submit'])) {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $loginc = $_POST['loginc'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];

        $result = mysqli_query($conexao,
        "INSERT INTO comprador(nome, loginc, senha, dataNasc, email, cpf, telefone)
            VALUES ('$nome', '$loginc', '$senha', '$dataNasc', '$email', '$cpf', '$telefone')");

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTCC.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="telaCadastroComprador.php" method="POST"> 
            <fieldset>
                <legend><b>Cadastro Comprador</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required> 
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="login" class="labelInput">Login</label>
                    <input type="text" name="loginc" id="login" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="dataNasc">Data de Nascimento</label>
                    <input type="date" name="dataNasc" id="dataNasc" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cpf"
                    class="labelInput">CPF</label>
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset> 
        </form>
    </div>
</body>
</html>