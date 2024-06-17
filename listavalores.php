<?php
require("conexao.php");
?><!DOCTYPE html>
<html>
<head>
    <title>Tabela de Receitas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Tabela de Receitas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DESC</th>
                <th>PAG</th>
                <th>DATA</th>
                <th>VALOR</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consulta = "SELECT * FROM receita";
            $executaConsulta = $conexao->query($consulta);

            if ($executaConsulta->num_rows > 0) {
                while ($receita = $executaConsulta->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?= $receita['id_receita']; ?></td>
                        <td><?= $receita['desc_receita']; ?></td>
                        <td><?= $receita['pagamento_receita']; ?></td>
                        <td><?= $receita['data_receita']; ?></td>
                        <td><?= $receita['valor_receita']; ?></td>
                        <td><?= $receita['status_receita']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>Nenhuma receita cadastrada.</td></tr>";
            }
            $conexao->close();
        ?>
        </tbody>
    </table>
</body>
</html>

<!-- feito para eu ver kekw -->