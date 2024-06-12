<?php
require("conexao.php");

$usuario = $_POST['nome'];
$senha = $_POST['senha'];

$insereCliente = "INSERT INTO usuario(nome_usuario, senha_usuario) VALUES ('$usuario','$senha')";
$operacaoSQL = mysqli_query($conexao, $insereCliente);

if (mysqli_affected_rows($conexao) != 0) {
    echo "Cliente cadastrado com Sucesso!";
    header("Location: login.html");
} else {
    echo " O Cliente não foi cadastrado com Sucesso!";
    header("Location: login.html");
}