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
                <p><strong class="nQuestion"><?php echo $questao['id'] ?></strong><strong>) </strong><strong><?php echo htmlspecialchars($questao["enunciado"]); ?></strong></p>
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
            question.classList.add('unanswered'); // Highlight unanswered questions
        } else {
            question.classList.remove('unanswered'); // Remove highlight for answered questions
        }
    });

    const errorAlert = document.getElementById('errorAlert');
    const errorMessage = document.getElementById('errorMessage');

    if (!allAnswered) {
        event.preventDefault(); // Prevent form submission
        errorAlert.style.display = 'block'; // Show error alert
        errorMessage.textContent = 'Por favor, responda todas as perguntas antes de enviar o formulário.';
    } else {
        errorAlert.style.display = 'none'; // Hide error alert if all questions are answered
    }
});
</script>

<?php include('../layouts/footer.php') ?>
