<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
</head>
<body>
<div>
    <h1>Alertas Rede Brasil</h1>
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    
    ?>
    <form method="post" action="cadastro.php">
        <label>Nome: </label>
        <input type = "text" placeholder = "Ex: Micael Greff" name = "nome"><br><br>

        <label>E-mail: </label>
        <input type = "email" placeholder = "Ex: micael.greff@xxxx.com" name = "email"><br><br>
        <input type = "submit" value = "Cadastrar">

    </form>



</div>
</body>
</html>