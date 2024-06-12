<?php
include("protect.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="teste.css">
</head>

<body>
    <header>
        <div class="user-info">
            <h4>Bem vindo ao Inicio, <?php echo $_SESSION['nome']; ?></h4>
            <p><a href="logout.php">Sair</a></p>
        </div>
    </header>
    <div class="container">
        <div class="sidebar">
            <button><a href="painel.php">INICIO</a></button>
            <button>Relatório</button>
            <button>Desempenho</button>
            <button><a href="sobre.php">SOBRE</a></button>
        </div>
        <div class="content">
            <h3>
                <h1>Planeje bem</h1>

            </h3>
        </div>
    </div>


</body>

</html>