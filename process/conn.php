<?php
// Configuração da conexão com o banco de dados
$host = 'localhost';
$db = 'questoes';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
