<?php 
require 'conexao.php'; 
 
$id         = $_GET['ID']; 
 
$exclusao = "DELETE from despesa WHERE id_despesa ='$id' "; 
$execultaExclusao = mysqli_query($conexao, $exclusao); 
 
if ($execultaExclusao) { 
    echo "Cliente excluído com sucesso"; 
    header("Location: Desempenho.php"); 
    exit(0); 
} else { 
    echo "Erro ao excluir Cliente"; 
    header("Location: Sobre.php"); 
    exit(0); 
}