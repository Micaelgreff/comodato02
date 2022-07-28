<?php
session_start();
include('verificalogin.php');
include('..\dadoslogin.php');
include('concomodato.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Comodatos</title>
    <link rel = "stylesheet" href = "..\css\comodato.css">
</head>
<body>
    <header class = "headerin">
        <h1>Olá <?php echo $nome; ?>, seja bem-vindo!</h1>
        <nav>
            <ul class = "menuin">
                <li><a href = '..\home.php'>Página Inicial</a></li>
                <li><a href = '/'>Comodatos</a></li>
                <li><a href = '/'>Informações</a></li>
                <li><a href = '/'>Meu perfil</a></li>
                <li><a href = '..\logout.php'>Sair</a></li>
            </ul>
        </nav>
    </header>
    <section class = "container">
        <div class = "board">
            <div class = "top">   <!--Div que tem o campo de pesquisa -->
                <p>Comodatos em sua visão</p>
            </div>
            <div class = "consulta"> <!--aqui mostra os dados da pesquisa -->
                <table>
                    <tr>
                        <th class = 'nome'>Nome</th>
                        <th class = 'cpf'>CPF</th>
                        <th class = 'data'>Data</th>
                        <th class = 'carteira'>Carteira</th>
                        <th class = 'equipamento'>Equipamento</th>
                        <th class = 'pat'>Pat</th>
                    </tr>
                    <?php

                        $query = "SELECT nome, cpf, data, carteira, equipamento, pat, id FROM comodatos";
                        $result = mysqli_query($concomodato, $query);
                        while($fetch = mysqli_fetch_row($result)){
                            echo "<tr>";
                            echo "  <td>$fetch[0]</td>
                                    <td>$fetch[1]</td>
                                    <td>$fetch[2]</td>
                                    <td>$fetch[3]</td>
                                    <td>$fetch[4]</td>
                                    <td>$fetch[5]</td>
                                    <td><a href='form_editar.php?id=$fetch[6]'><button>EDITAR</button></a></td>
                                    <td><button onclick='confirmacaoExclusao($fetch[6])'>EXCLUIR</button></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
    <script>
        // Realiza um redirecionamento da página, dependendo da opção escolhida no pop-up
        function confirmacaoExclusao(id)
        {
            if (confirm("Você realmente deseja excluir?"))
            {
                window.location.href=`exclui_comodato?id=${id}.php`;
            }
            else
            {
                window.location.href='comodato.php';
            }
        }
    </script>
</body>
</html>