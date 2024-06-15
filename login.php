<?php
include('conexao.php');
/*
if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario WHERE nome_usuario = '$email' AND senha_usuario = '$senha'";
    $resultado = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        session_start();
        $_SESSION["id"] = $usuario["id_usuario"];
        $_SESSION["nome"] = $usuario["nome_usuario"];
        $_SESSION["tipo"] = $usuario["tipo_usuario"];

        if ($usuario["tipo_usuario"] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: user_dashboard.php");
        }
        exit();
    } else {
        echo "<center>Login ou senha incorretos!</center>";
    }
}*/

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        // echo "Preencha seu Usuario!";
        header("Location: login.html");
    } else if (strlen($_POST['senha'] == 0)) {
        //  echo "Preencha sua senha!";
        header("Location: login.html");
    } else {
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario where nome_usuario = '$email' AND senha_usuario = '$senha';";
        $resultado = $conexao->query($sql_code) or die("Falha na execução do codigo SQL: " . $conexao->error);

        if ($resultado->num_rows == 1) {
            echo "Login realizado com Sucesso!";

            $usuario = $resultado->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION["id"] = $usuario["id_usuario"];
            $_SESSION["nome"] = $usuario["nome_usuario"];

            header("Location:painel.php");
        } else {
            echo "<center>login ou Senha incorretos!</center>";
        }
    }
}
