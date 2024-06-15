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
                <label for="forma_pagamento">Forma de pagamento</label> <br>
                <select id="forma_pagamento" name="pag">
                    <option value="">Selecione a forma de pagamento</option>
                    <option value="CARTAO DE CREDITO">Cartão de Crédito</option>
                    <option value="BOLETO">Boleto Bancário</option>
                    <option value="PIX">Pix</option>
                    <option value="TRANSFERENCIA">Transferência Bancária</option>
                </select> <br>
                <label for="">Insere a data feita o pagamento</label>
                <input class="campo" type="date" name="date" placeholder="Digite aqui a data" />
                <label for="">Insere o valor de sua despesa</label>
                <input class="campo" type="number" name="despesas" placeholder="Digite aqui sua despesa" step="0.01" min="0"/>
                <label for="status_pagamento">Status</label> <br>
                <select id="status_pagamento" name="stats">
                    <option value="">Selecione o status</option>
                    <option value="PAGO">Pago</option>
                    <option value="A_PAGAR">A pagar</option>
                </select>
                <button class="btn" type="submit">Adicionar</button>
            </form>
        </div>
    </div>
</body>

</html>