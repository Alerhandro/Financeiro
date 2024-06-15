<?php
require("conexao.php");

$descricao = $_POST['desc'];
$pagamento = $_POST['pag'];
$data = $_POST['date'];
$valor = $_POST['receitas'];
$status = $_POST['stats'];

$insereValores = "INSERT INTO receita (desc_receita, pagamento_receita, data_receita, valor_receita, status_receita) VALUES ('$descricao', '$pagamento', '$data', '$valor', '$status')";
$operacaoSQL = mysqli_query($conexao, $insereValores);

if (mysqli_affected_rows($conexao) != 0) {
    echo "Valor cadastrado com Sucesso!";
    header("Location: calculos.php");
} else {
    echo " O valor não foi cadastrado com Sucesso!";
    header("Location: fds.html");
}