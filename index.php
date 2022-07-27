<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertas - Autenticação</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id = "tit"><
        <header>Home</header>
    </div>
    <div id = "login-container">
        <h1>Login</h1>
        <?php
        if(isset($_SESSION['naoautentic'])){
            echo "<div id = 'errologin'>E-mail ou senha inválidos</div>";
            unset($_SESSION["naoautentic"]);
        }
        ?>
        <form action="login.php" method="POST">
            <label for = "email">E-mail</label>
            <input type = "email" name = "email" id="email" placeholder = "Digite seu e-mail">
            <label for = "password">Senha</label>
            <input type = "password" name = "senha" id = "senha" placeholder = "Digite sua senha">
            <a href="esqueceu.php" id="forgot-pass">Esqueceu a senha?</a>
            <input type = "submit" value = "Entrar">
        </form>
    </div>
</body>
</html>