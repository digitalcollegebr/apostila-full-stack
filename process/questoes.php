<?php
include_once('conn.php');
include_once('../layouts/header.php');  

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

        // Obter a resposta correta, enunciado e número da questão
        $sql = "SELECT item_certo, numero, item_a, item_b, item_c, item_d, enunciado FROM questoes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $questao = $result->fetch_assoc();
            $item_certo = $questao['item_certo'];
            $numero = $questao['numero'];
            $enunciado = $questao['enunciado'];

            // Mapeia as respostas para os itens
            $respostas = [
                'A' => $questao['item_a'],
                'B' => $questao['item_b'],
                'C' => $questao['item_c'],
                'D' => $questao['item_d']
            ];

            // Comparar resposta do usuário com a resposta correta
            if ($resposta_usuario === $item_certo) {
                $respostasCorretas++;
            } else {
                // Adicionar à lista de questões erradas
                $questoesErradas[] = [
                    'numero' => $numero,
                    'enunciado' => $enunciado,
                    'resposta_usuario' => $respostas[$resposta_usuario],
                    'item_certo' => $respostas[$item_certo],
                    'resposta_usuario_letra' => array_search($resposta_usuario, $respostas),
                    'item_certo_letra' => array_search($item_certo, $respostas)
                ];
            }
        }
    }

    // Mostrar resultado
    $nota = $respostasCorretas / $totalQuestões * 10;
    $mensagem = $nota > 7 ? "Parabéns, sua nota foi: " . number_format($nota, 2) : "Revise o conteúdo, sua nota foi: " . number_format($nota, 2);
    $notaClass = $nota > 7 ? 'nota-alta' : 'nota-baixa';

    echo "<div class='resultado $notaClass'>";
    echo "<h2>Resultado do Quiz</h2>";
    echo "<p>$mensagem</p>";
    echo "<p>Você acertou " . htmlspecialchars($respostasCorretas) . " de " . htmlspecialchars($totalQuestões) . " questões.</p>";
    echo "</div>";

    // Mostrar questões erradas
    if (!empty($questoesErradas)) {
        echo "<div class='questoes-erradas'>";
        echo "<h3>Questões que você errou:</h3>";
        echo "<table>";
        echo "<tr><th>Número da Questão</th><th>Enunciado</th><th>Resposta Dada</th><th>Resposta Correta</th></tr>";
        foreach ($questoesErradas as $questaoErrada) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($questaoErrada['numero']) . "</td>";
            echo "<td>" . htmlspecialchars($questaoErrada['enunciado']) . "</td>";
            echo "<td>" . htmlspecialchars($questaoErrada['resposta_usuario']) . "</td>";
            echo "<td>" . htmlspecialchars($questaoErrada['item_certo']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
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
