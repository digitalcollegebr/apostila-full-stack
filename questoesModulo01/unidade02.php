<?php
    include('../layouts/header.php');
    include_once('../process/questoes.php');
?>

<!-- Adicionar um formulário HTML -->
<form id="quizForm" method="post" action="../process/questoes.php">
    <?php foreach ($questoes as $questao): ?>
        <?php if ($questao["modulo"] == 1): ?>
            <?php if ($questao["unidade"] == 2): ?>
            <div class="question">
                <p><strong>Enunciado:</strong> <?php echo htmlspecialchars($questao["enunciado"]); ?></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="A">
                    <label><?php echo htmlspecialchars($questao["item_a"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="B">
                    <label><?php echo htmlspecialchars($questao["item_b"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="C">
                    <label><?php echo htmlspecialchars($questao["item_c"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="D">
                    <label><?php echo htmlspecialchars($questao["item_d"]); ?></label></p>
            </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <button type="submit">Enviar Respostas</button>
</form>

<script>
document.getElementById('quizForm').addEventListener('submit', function(event) {
    const questions = document.querySelectorAll('.question');
    let allAnswered = true;
    
    questions.forEach(function(question) {
        const inputs = question.querySelectorAll('input[type=radio]');
        let isAnswered = false;
        
        inputs.forEach(function(input) {
            if (input.checked) {
                isAnswered = true;
            }
        });

        if (!isAnswered) {
            allAnswered = false;
            question.style.border = '2px solid red'; // Optional: Highlight unanswered questions
        } else {
            question.style.border = ''; // Remove highlight for answered questions
        }
    });

    if (!allAnswered) {
        event.preventDefault(); // Prevent form submission
        alert('Por favor, responda todas as perguntas antes de enviar o formulário.');
    }
});
</script>

<?php include('../layouts/footer.php') ?>
