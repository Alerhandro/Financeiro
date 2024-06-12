<?php
require("conexao.php");
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Listagem de Clientes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar- container" id="textoNavbar">
            <ul class="navbar-nav mr-auto mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.html">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>

    <h4>Clientes cadastrados</h4>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT * FROM usuario";
            $executaConsulta = mysqli_query($conexao, $consulta);

            if (mysqli_num_rows($executaConsulta) > 0) {
                foreach ($executaConsulta as $clientes) {
            ?>
                    <tr>
                        <td><?= $clientes['id_usuario']; ?></td>
                        <td><?= $clientes['nome_usuario']; ?></td>
                        <td><?= $clientes['senha_usuario']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "Nenhum cliente cadastrado.";
            }
            ?>
        </tbody>
    </table>
</body>

</html>