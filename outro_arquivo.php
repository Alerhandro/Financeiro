<?php
session_start();


$_SESSION['teste'] = "Sessão está funcionando corretamente";

if (!isset($_SESSION['teste'])) {
    die("As sessões não estão funcionando corretamente.");
} else {
    echo "As sessões estão funcionando corretamente.<br>";
}

// Teste para verificar se a sessão está funcionando (ta sim)