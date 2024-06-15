<?php
session_start();

// Teste para verificar se a sessão está funcionando
$_SESSION['teste'] = "Sessão está funcionando corretamente";

if (!isset($_SESSION['teste'])) {
    die("As sessões não estão funcionando corretamente.");
} else {
    echo "As sessões estão funcionando corretamente.<br>";
}
