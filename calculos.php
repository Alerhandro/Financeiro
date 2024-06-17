<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "financas";

$conn = mysqli_connect($hostname, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para somar todas as receitas
$sqlReceitas = "SELECT SUM(valor_receita) AS total_receitas FROM receita";
$resultReceitas = $conn->query($sqlReceitas);

// Verifica se a consulta retornou algum resultado
if (!$resultReceitas) {
    die("Erro na consulta de receitas: " . $conn->error);
}

// Obter o valor das receitas
$rowReceitas = $resultReceitas->fetch_assoc();
$totalReceitas = $rowReceitas['total_receitas'];

// Consulta SQL para somar todas as despesas
$sqlDespesas = "SELECT SUM(valor_despesa) AS total_despesas FROM despesa";
$resultDespesas = $conn->query($sqlDespesas);

// Verifica se a consulta retornou algum resultado
if (!$resultDespesas) {
    die("Erro na consulta de despesas: " . $conn->error);
}

// Obter o valor das despesas
$rowDespesas = $resultDespesas->fetch_assoc();
$totalDespesas = $rowDespesas['total_despesas'];

// Calculando o resultado
$resultado = $totalReceitas - $totalDespesas;

// Fechar conexão
$conn->close();

// Redirecionamento para outro arquivo PHP com os resultados via POST
session_start();
$_SESSION['totalReceitas'] = $totalReceitas;
$_SESSION['totalDespesas'] = $totalDespesas;
$_SESSION['resultado'] = $resultado;

header("Location: Desempenho.php");
exit;
