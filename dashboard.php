<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: painel.php");
    exit();
}

$role = $_SESSION['role'];

if ($role == 'admin') {
    include('admin_dashboard.php');
} elseif ($role == 'user') {
    include('user_dashboard.php');
} else {
    echo "Role desconhecida!";
}
