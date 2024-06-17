<?php
require 'conexao.php';

$id = $_POST['id_receita'];
$descricao = $_POST['desc'];
$pagamento = $_POST['pag'];
$data = $_POST['date'];
$valor = $_POST['receitas'];
$status = $_POST['stats'];

$alteracao = "UPDATE receita SET desc_receita ='$descricao', pagamento_receita = '$pagamento', data_receita ='$data', valor_receita ='$valor', 
status_receita ='$status' WHERE id_receita='$id'";
$execultaAlteracao= mysqli_query($conexao, $alteracao);

if ($execultaAlteracao) {
    echo "Produto atualizado com sucesso";
    header("Location: Desempenho.php");
    exit(0);
} else {
    echo "Erro ao atualizar Produto";
    header("Location: sobre.php");
    exit(0);
}
//iria mexer mas resolvi deixar quieto