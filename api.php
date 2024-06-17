<?php

header('Content-Type: application/json');

$hostname = "localhost";
$username = "root";
$password = "";
$database = "financas";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT pagamento_receita, SUM(valor_receita) AS total_valor FROM receita GROUP BY pagamento_receita";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);
