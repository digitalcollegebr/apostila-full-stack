<?php
// Configuração da conexão com o banco de dados
$host = 'localhost';
$db = 'u128712671_questoes';
$user = 'u128712671_digitalcollege';
$pass = 'Digital@2024';

$conn = new mysqli($host, $user, $pass, $db);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém o módulo desejado (por exemplo, passado via URL ou formulário)
$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'Modulo 1';

// Consulta o banco de dados para obter as questões do módulo especificado
$sql = "SELECT pergunta, resposta FROM questoes WHERE modulo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $modulo);
$stmt->execute();
$result = $stmt->get_result();

// Exibe as questões
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>Pergunta:</strong> " . $row['pergunta'] . "</p>";
    echo "<p><strong>Resposta:</strong> " . $row['resposta'] . "</p>";
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
