<?php
session_start();
include("protect.php");
include("conexao.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho</title>
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="cor.css">
</head>

<body>
    <header>
        <div class="user-info">
            <h4>Bem vindo ao Desempenho, <?php echo $_SESSION['nome']; ?></h4>
            <p><a href="logout.php">Sair</a></p>
        </div>
    </header>
    <div class="container">
        <div class="sidebar">
            <button><a href="painel.php">RECEITAS</a></button>
            <button><a href="despesa.php">DESPESAS</a></button>
            <button><a href="Relatoriocopy.php">RELATORIO ENTRADA</a></button>
            <button><a href="Relatoriodespesa.php">RELATORIO SAIDA</a></button>
            <button><a href="calculos.php">ENTRADA/SAIDA</a></button>
            <button><a href="sobre.php">SOBRE</a></button>
        </div>
        <div class="content">
            <h1>Planeje bem</h1>

            <table>
                <thead>
                    <tr>
                        <!--   <th>ID</th> -->
                        <th>DESCRIÇÃO</th>
                        <th>FORMA DE PAGAMENTO</th>
                        <th>DATA DA COMPRA </th>
                        <th>VALOR DO PAGAMENTO</th><br>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta = "SELECT * FROM receita";
                    $executaConsulta = mysqli_query($conexao, $consulta);

                    if (mysqli_num_rows($executaConsulta) > 0) {
                        foreach ($executaConsulta as $receita) {
                    ?>
                            <tr>
                                <!--   <td><?= $receita['id_receita']; ?></td> -->
                                <td><?= $receita['desc_receita']; ?></td>
                                <td><?= $receita['pagamento_receita']; ?></td>
                                <td><?= $receita['data_receita']; ?></td>
                                <td class="receita">R$ <?= $receita['valor_receita']; ?></td>
                                <td><?= $receita['status_receita']; ?></td>
                                <td>
                                    <a href="excluirReceita.php?ID=<?= $receita['id_receita']; ?>">Excluir</a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "Nenhum valor cadastrado.";
                    }
                    ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <!--  <th>ID</th> -->
                        <th>DESCRIÇÃO</th>
                        <th>FORMA DE PAGAMENTO</th>
                        <th>DATA DA COMPRA </th>
                        <th>VALOR DO PAGAMENTO</th><br>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consulta = "SELECT * FROM despesa";
                    $executaConsulta = mysqli_query($conexao, $consulta);

                    if (mysqli_num_rows($executaConsulta) > 0) {
                        foreach ($executaConsulta as $despesa) {
                    ?>
                            <tr>
                                <!-- <td><?= $despesa['id_despesa']; ?></td> -->
                                <td><?= $despesa['desc_despesa']; ?></td>
                                <td><?= $despesa['pagamento_despesa']; ?></td>
                                <td><?= $despesa['data_despesa']; ?></td>
                                <td class="despesas">R$ <?= $despesa['valor_despesa']; ?></td>
                                <td><?= $despesa['status_despesa']; ?></td>
                                <td>
                                    <a href="excluirDespesa.php?ID=<?= $despesa['id_despesa']; ?>">Excluir</a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "Nenhum valor cadastrado.";
                    }
                    ?>
                </tbody>
            </table>
            <table>

                <?php


                // Verifica se os dados estão na sessão
                if (!isset($_SESSION['totalReceitas']) || !isset($_SESSION['totalDespesas']) || !isset($_SESSION['resultado'])) {
                    die("Os dados não foram recebidos corretamente.");
                }

                $totalReceitas = $_SESSION['totalReceitas'];
                $totalDespesas = $_SESSION['totalDespesas'];
                $resultado = $_SESSION['resultado'];
                ?>

                <!DOCTYPE html>
                <html lang="pt-BR">

                <head>
                    <meta charset="UTF-8">
                    <title>Resultados</title>
                    <link rel="stylesheet" href="cor.css">
                </head>

                <body>
                    <h1>Resultados</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Receita</th>
                                <th>Despesa</th>
                                <th>Valor Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="receita">R$ <?= $totalReceitas; ?></td>
                                <td class="despesas">R$ - <?= $totalDespesas; ?></td>
                                <td class="total">R$ <?= $resultado; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </body>

                </html>


            </table>
        </div>
    </div>
</body>

</html>