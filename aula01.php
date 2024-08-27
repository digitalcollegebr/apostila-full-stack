<?php
    include('layouts/header.php');
    include_once('process/conn.php');
?>

  <!-- form de perguntas -->
  <?php foreach ($questoes as $questao): ?>
            <div class="question">
                <p><strong>Enunciado:</strong> <?php echo htmlspecialchars($questao["enunciado"]); ?></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="a">
                    <label><?php echo htmlspecialchars($questao["item_a"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="b">
                    <label><?php echo htmlspecialchars($questao["item_b"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="c">
                    <label><?php echo htmlspecialchars($questao["item_c"]); ?></label></p>
                <p><input type="radio" name="questao_<?php echo $questao["id"]; ?>" value="d">
                    <label><?php echo htmlspecialchars($questao["item_d"]); ?></label></p>
            </div>
        <?php endforeach; ?>

<?php include('layouts/footer.php') ?>