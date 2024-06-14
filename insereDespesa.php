<?php
require("conexao.php");

$descricao = $_POST['desc'];
$pagamento = $_POST['pag'];
$data = $_POST['date'];
$valor = $_POST['despesas'];
$status = $_POST['stats'];

$insereDespesa = "INSERT INTO despesa (desc_despesa, pagamento_despesa, data_despesa, valor_despesa, status_despesa) VALUES ('$descricao', '$pagamento', '$data', '$valor', '$status')";
$operacaoSQL = mysqli_query($conexao, $insereDespesa);

if (mysqli_affected_rows($conexao) != 0) {
    echo "Valor cadastrado com Sucesso!";
    header("Location: Desempenho.php");
} else {
    echo " O valor não foi cadastrado com Sucesso!";
    header("Location: fds.html");
}