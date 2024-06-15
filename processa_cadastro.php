<?php
include('conexao.php');

// Recebe os dados do formulário
$nome_usuario = $conexao->real_escape_string($_POST['nome']);
$senha = $conexao->real_escape_string($_POST['senha']);
$tipo_usuario = $conexao->real_escape_string($_POST['tipo_usuario']); // Tipo de usuário

// Insere o novo usuário no banco de dados
$sql_code = "INSERT INTO usuario (nome_usuario, senha_usuario, tipo_usuario)
             VALUES ('$nome_usuario', '$senha', '$tipo_usuario')";

if ($conexao->query($sql_code) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
    // Aqui você pode redirecionar o usuário para uma página de sucesso, por exemplo
    header("Location: login.html");
} else {
    echo "Erro ao cadastrar usuário: " . $conexao->error;
}

$conexao->close();
