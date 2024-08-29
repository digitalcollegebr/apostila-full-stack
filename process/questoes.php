<?php
include_once('conn.php');

// Inicializar variáveis para o resultado
$respostasCorretas = 0;
$totalQuestões = 0;
$questoesErradas = [];

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter todas as respostas enviadas
    $respostas = $_POST;

    // Contar o número total de questões respondidas
    $totalQuestões = count($respostas);

    // Loop para cada resposta enviada
    foreach ($respostas as $questao_id => $resposta_usuario) {
        // Ignorar chaves não relacionadas às questões
        if (strpos($questao_id, 'questao_') !== 0) {
            continue;
        }

        // Extrair o ID da questão
        $id = substr($questao_id, 8);

        // Obter a resposta correta e o número da questão
        $sql = "SELECT item_certo, numero FROM questoes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $questao = $result->fetch_assoc();
            $item_certo = $questao['item_certo'];
            $numero = $questao['numero'];

            // Comparar resposta do usuário com a resposta correta
            if ($resposta_usuario === $item_certo) {
                $respostasCorretas++;
            } else {
                // Adicionar à lista de questões erradas
                $questoesErradas[] = [
                    'numero' => $numero,
                    'resposta_usuario' => $resposta_usuario,
                    'item_certo' => $item_certo
                ];
            }
        }
    }

    // Mostrar resultado
    $nota = $respostasCorretas / $totalQuestões * 10;
    if ($nota > 7) {
        echo "Parabéns, sua nota foi: " . number_format($nota, 2);
    } else {
        echo "Revise o conteúdo, sua nota foi: " . number_format($nota, 2);
    }
    echo "<p>Você acertou " . htmlspecialchars($respostasCorretas) . " de " . htmlspecialchars($totalQuestões) . " questões.</p>";

    // Mostrar questões erradas
    if (!empty($questoesErradas)) {
        echo "<h3>Questões que você errou:</h3>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Número da Questão</th><th>Resposta Dada</th><th>Resposta Correta</th></tr>";
        foreach ($questoesErradas as $questaoErrada) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($questaoErrada['numero']) . "</td>";
            echo "<td>" . htmlspecialchars($questaoErrada['resposta_usuario']) . "</td>";
            echo "<td>" . htmlspecialchars($questaoErrada['item_certo']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
    // Obter todas as questões
    $questoes_query = "SELECT id, numero, enunciado, item_a, item_b, item_c, item_d, unidade, modulo FROM questoes";
    $result = $conn->query($questoes_query);

    // Verificar se a consulta foi bem-sucedida
    if ($result) {
        // Obter todos os resultados em um array associativo
        $questoes = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        // Em caso de erro na consulta
        $questoes = [];
    }
}
?>
