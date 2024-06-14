<?php
include("protect.php");
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesa</title>
    <link rel="stylesheet" href="teste.css">
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <header>
        <div class="user-info">
            <h4>Bem vindo as suas Despesas, <?php echo $_SESSION['nome']; ?></h4>
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
            <h1>Planeje bem</h1>
            <form method="POST" action="insereDespesa.php">
                <label for="">Insere a Descrição da sua despesa</label>
                <input class="campo" type="text" name="desc" placeholder="Digite aqui sua descrição" />
                <label for="">Insere o Forma de pagamento</label>
                <input class="campo" type="text" name="pag" placeholder="Digite aqui a Forma de pagamento" />
                <label for="">Insere a data feita o pagamento</label>
                <input class="campo" type="date" name="date" placeholder="Digite aqui a data" />
                <label for="">Insere o valor de sua despesa</label>
                <input class="campo" type="number" name="despesas" placeholder="Digite aqui sua despesa" />
                <label for="">Insere se foi pago ou a pagar</label>
                <input class="campo" type="text" name="stats" placeholder="Digite aqui status" />
                <button class="btn" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
</body>

</html>