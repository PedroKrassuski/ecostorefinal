<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTLV.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem-vindo a EcoStore<br>Faça seu login ou<br>Cadastre-se</h1>
            <img src="imagens/logo.png" class="left-login-image" alt="logotipo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="login" placeholder="Usuário" required>
                    </div> 
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>
                    <button class="btn-login" type="submit" name="submit" id="submit">Entrar</button>
                </form>   
                <p>Não possui login? 
                    <a href="telaCadastroVendedor.php">Cadastre-se</a>.
                    </p>
            </div>    
        </div>
    </div>
</body>
</html>