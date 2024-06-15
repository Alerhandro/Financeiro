<?php
include("protect.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Admin</title>
</head>

<body>
    <h1>Bem-vindo ao Painel de Admin, <?php echo $_SESSION['nome']; ?>!</h1>
    <p>Conteúdo exclusivo para administradores.</p>

</body>

</html>