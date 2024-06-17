<?php
include("protect.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Usuário</title>
</head>

<body>
    <h1>Bem-vindo ao Painel de Usuário, <?php echo $_SESSION['nome']; ?>!</h1>
    <p>Conteúdo exclusivo para usuários omuns.</p>
</body>

</html>

<!-- aqui era pra ser as telas onde cada usuario teria a sua, mas deu preguiça e falta de conhecimento antecipado -->