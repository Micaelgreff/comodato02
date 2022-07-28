<?php
include('concomodato.php');
if(isset($_POST['submit']))
{
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $setor = $_POST["setor"];
    $data = $_POST["data"];
    $equipamento = $_POST["equipamento"];
    $patrimonio = $_POST["patrimonio"];

    $query = "INSERT INTO comodatos (nome, cpf, data, carteira, equipamento, pat) VALUES ('$nome', '$cpf', '$data', '$setor', '$equipamento', '$patrimonio')";

    if(mysqli_query($concomodato, $query))
    {
        echo "DADOS ENVIADOS!";
    }
    else{
        echo "Error: " . $query . ":-" . mysqli_error($concomodato);
    }

    mysqli_close($concomodato);
}
?>