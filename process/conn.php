<?php
// Configuração da conexão com o banco de dados
$host = 'localhost';
$db = 'u128712671_questoes';
$user = 'u128712671_digitalcollege';
$pass = '1323LotusADS#';

$conn = new mysqli($host, $user, $pass, $db);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
