<?php
include("protect.php");

// Conexão com o banco de dados
$hostname = "localhost";
$username = "root";
$password = "";
$database = "financas";

$conexao = mysqli_connect($hostname, $username, $password, $database);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="chat.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <header>
        <div class="user-info">
            <h4>Bem vindo ao Relatório, <?php echo $_SESSION['nome']; ?></h4>
            <p><a href="logout.php">Sair</a></p>
        </div>
    </header>
    <div class="container">
        <div class="sidebar">
            <button><a href="painel.php">RECEITAS</a></button>
            <button><a href="despesa.php">DESPESAS</a></button>
            <button><a href="Relatoriocopy.php">RELATORIO ENTRADA</a></button>
            <button><a href="Relatoriodespesa.php">RELATORIO SAIDA</a></button>
            <button><a href="Desempenho.php">ENTRADA/SAIDA</a></button>
            <button><a href="sobre.php">SOBRE</a></button>
        </div>
        <div class="content">
            <h1>Valores Gastos</h1>
            <div class="grafico">
                <canvas id="graficoPizza" class="grafico"></canvas>
            </div>
            <div class="tabela">
                <table>
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $consulta = "SELECT desc_despesa, valor_despesa, pagamento_despesa FROM despesa";
                        $executaConsulta = mysqli_query($conexao, $consulta);

                        if ($executaConsulta && mysqli_num_rows($executaConsulta) > 0) {
                            while ($receita = mysqli_fetch_assoc($executaConsulta)) {
                        ?>
                        <tr>
                            <td><?= $receita['desc_despesa']; ?></td>
                            <td>R$ <?= number_format($receita['valor_despesa'], 2, ',', '.'); ?></td>
                            <td><?= $receita['pagamento_despesa']; ?></td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='3'>Nenhum valor cadastrado.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    fetch('http://localhost/PROJETO/Financeiro/apid.php')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.pagamento_despesa);
            const valores = data.map(item => item.total_valor);

            const ctxPizza = document.getElementById('graficoPizza').getContext('2d');
            const graficoPizza = new Chart(ctxPizza, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Valores por Método de Pagamento',
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        })
        .catch(error => console.error('Erro:', error));
    </script>
</body>

</html>