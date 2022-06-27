<?php

    if(isset($_POST['submit'])) {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $loginv = $_POST['loginv'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $complemento = $_POST['complemento'];

        $result = mysqli_query($conexao,
        "INSERT INTO vendedor(nomeEmp, loginv, senha, email, cnpj, telefone)
            VALUES ('$nome', '$loginv', '$senha', '$email', '$cnpj', '$telefone')");
        $result = mysqli_query($conexao,
        "INSERT INTO enderecoVendedor(codVendedor, cep, rua, numero, bairro, complemento)
             VALUES (LAST_INSERT_ID(), '$cep', '$rua', '$numero', '$bairro', '$complemento');");

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTCV.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="telaCadastroVendedor.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Vendedor</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Empresa</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="login" class="labelInput">Login</label>
                    <input type="text" name="loginv" id="login" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cnpj"
                    class="labelInput">CNPJ</label>
                    <input type="number" name="cnpj" id="cnpj" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cep" class="labelInput">CEP</label>
                    <input type="cep" name="cep" id="cep" class="inputUser" required>
                </div> 
                <br><br>
                <div class="inputBox">
                    <label for="rua" class="labelInput">Rua</label>
                    <input type="rua" name="rua" id="rua" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="numero" class="labelInput">Número</label>
                    <input type="num" name="numero" id="numero" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="bairro" class="labelInput">Bairro</label>
                    <input type="bairro" name="bairro" id="bairro" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="complemento" class="labelInput">Complemento</label>
                    <input type="comp" name="complemento" id="complemento" class="inputUser" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
