<?php
include("protect.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <header>
        <div class="user-info">
            <h4>Bem vindo ao sobre, <?php echo $_SESSION['nome']; ?></h4>
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
            <h3>
                <h1>Sobre nós</h1>
                <p>Nossa Missão</p> <br>

                No Paneja bem, nossa missão é capacitar indivíduos a tomar controle de suas finanças pessoais, oferecendo ajuda para alcançar a liberdade financeira. Acreditamos que com as ferramentas e o conhecimento certos, todos podem melhorar sua situação financeira. <br>

                <p>Quem Somos</p> <br>

                Pleneja bem foi fundado por Alerhandro Vidal e Danieli Souza. Somos estudante e Sistema de Informação, criamos o site para fins acadêmicos.<br>

                <p>Nosso Compromisso</p> <br>

                Estamos comprometidos em fornecer conteúdo de alta qualidade, baseado em pesquisa e adaptado às necessidades dos nossos usúarios. Queremos que você se sinta confiante ao tomar decisões financeiras importantes e que tenha todas as informações necessárias para construir um futuro financeiro seguro.<br>

                <p>Entre em Contato</p> <br>

                Adoramos ouvir de nossos usúarios! Se você tiver alguma pergunta, sugestão ou feedback, entre em contato conosco através de alerhandrojp@gmail.com e danielisouza7190@gmail.com.<br>

            </h3>
        </div>
    </div>


</body>

</html>