<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "financas";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['email'];
    $pass = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $user;
        $_SESSION['role'] = $row['role'];
        header("Location: dashboard.php");
    } else {
        echo "<center>Login ou Senha incorretos!</center>";
    }
}

$conn->close();

/* ele valida os usuarios admin/user, mas nao usa mais */