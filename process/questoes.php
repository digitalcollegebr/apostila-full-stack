<?php
include_once('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Corrigir consulta SQL removendo a cláusula WHERE
    $questoes_query = "SELECT id, enunciado, item_a, item_b, item_c, item_d, item_certo FROM questoes";
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


// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter todas as respostas enviadas
    $respostas = $_POST;

    $totalQuestões = count($respostas);
    $respostasCorretas = 0;

    // Loop para cada resposta enviada
    foreach ($respostas as $questao_id => $resposta_usuario) {
        // Ignorar chaves não relacionadas às questões
        if (strpos($questao_id, 'questao_') !== 0) {
            continue;
        }

        // Extrair o ID da questão
        $id = substr($questao_id, 8);

        // Obter a resposta correta da questão
        $sql = "SELECT item_certo FROM questoes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $questao = $result->fetch_assoc();
            $item_certo = $questao['item_certo'];

            // Comparar resposta do usuário com a resposta correta
            if ($resposta_usuario === $item_certo) {
                $respostasCorretas++;
            }
        }
    }

    // Mostrar resultado
    echo "Você acertou " . $respostasCorretas . " de " . $totalQuestões . " questões.";
}

?>
