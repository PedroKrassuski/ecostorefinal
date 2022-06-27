<?php

    if(isset($_POST['submit'])) {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valorUni = $_POST['valorUni'];
        $foto = $_POST['foto'];
        $estoque = $_POST['estoque'];


        $result = mysqli_query($conexao,
        "INSERT INTO produto(nomeProduto, descricao, valorUni, foto, estoque)
            VALUES ('$nome', '$descricao', '$valorUni', '$foto', '$estoque');");

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTP.css">
    <title>Cadastrar produto</title>

</head>
<body>
    <div class="box">
        <form action="telaProduto.php" method="POST">
            <fieldset>
                <legend><b>Anunciar produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Título</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br>
                <p>Categoria:</p>
                <input type="radio" id="casa" name="casa" value="casa">
                <label for="casa">Para casa</label>
                <br>
                <input type="radio" id="masculino" name="higiene" value="higiene">
                <label for="higiene">Higiene</label>
                <br>
                <input type="radio" id="acessorios" name="acessorios" value="acessorios">
                <label for="acessorios">Acessórios</label>
                <br>
                <input type="radio" id="alimentacao" name="alimentacao" value="alimentacao">
                <label for="alimentacao">Alimentação</label>
                <br><br>
                <label for="foto">Imagens:</label>
                <input type="file" name="foto" id="foto" accept=".jpg, .png, .jpeg, .webp" required>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="valorUni" id="valorUni" class="inputUser" required>
                    <label for="valor" class="labelInput">Valor Unitário</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="estoque" name="estoque" id="estoque" class="inputUser" required>
                    <label for="estoque" class="labelInput">Quantidade Estoque</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
