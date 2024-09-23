<?php
    // A_S - Header
    include('../../layouts/header.php');
?>

<body>
    <!-- A_S - Habilita o VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>    


    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="Titulo">033.4 - Layout e modelo de caixa com CSS</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                Cada um dos elementos visíveis em um documento HTML é renderizado como uma caixa retangular. Assim, o termo <em>modelo de caixa</em> descreve o método usado pelo CSS para modificar as propriedades visuais dos elementos. Como caixas de tamanhos diferentes, os elementos HTML podem ser aninhados dentro de elementos <em>contêiner</em> — normalmente o elemento <span class="code-color"><em>div</em></span> — e em seguida separados em seções.
                </p>
                <p class="Texto">
                Com o CSS, é possível modificar a posição das caixas, desde pequenos ajustes até mudanças drásticas na disposição dos elementos na página. Além do fluxo normal, a posição de cada caixa pode se basear nos elementos que a rodeiam, seja em seu relacionamento com o contêiner pai ou com a <em>janela de visualização</em>, que é a área da página visível para o usuário. Nenhum mecanismo atende a todos os requisitos de layout possíveis, então costuma ser necessário usar uma combinação deles.
                </p>
                <p class="Subtopico"><strong>Fluxo normal</strong></p>
                <p class="Texto">
                A forma padrão como o navegador renderiza a árvore do documento é chamada de <em>fluxo normal</em>. Os retângulos correspondentes aos elementos são postos mais ou menos na mesma ordem em que aparecem na árvore do documento em relação aos seus elementos pais. No entanto, dependendo do tipo de elemento, a caixa correspondente pode seguir regras de posicionamento distintas.
                </p>
                <p class="Texto">Uma boa maneira de entender a lógica do fluxo normal é tornar as caixas visíveis. Podemos começar com uma página bem básica contendo apenas três elementos div separados, cada um com um parágrafo de texto aleatório:</p>
                <br>
                <div style class="typewriter-small" style="align-items: center; display: flex; justify-content: center;">
  <pre><code class="Texto">
<span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span><span class="orange-code">"pt"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;head&gt;</strong></span>
 <span class="code-color"><strong>&lt;title&gt;</strong></span>Layout e modelo de caixa com CSS<span class="code-color"><strong>&lt;/title&gt;</strong></span>
 <span class="code-color"><strong>&lt;link</strong></span> <span class="blue-code">rel=</span><span class="orange-code">"stylesheet"</span> <span class="blue-code">href=</span><span class="orange-code">"style.css"</span>
 <span class="code-color"><strong>&lt;/head&gt;</strong></span>
 <span class="code-color"><strong>&lt;body&gt;</strong></span>
 <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"first"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Primeira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Sed <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>velit <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>id <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ante <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>tempus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>porta <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>pulvinar <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>et <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>ex. <span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #first --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"second"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Segunda div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Fusce <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vitae <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vehicula <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>neque. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Etiam <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>maximus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>neque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eu <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>lobortis. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Phasellus <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>condimentum,<span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>felis <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eleifend <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>aliquam,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dui <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dolor <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>bibendum <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>leo.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="code-color">&lt;!-- #second --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"third"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Terceira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Pellentesque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ornare <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ultricies <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>elementum.<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Morbi <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>pretium <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>arcu,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>sed <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>faucibus.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #third --&gt;</span>
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
</code></pre>
</div>

            </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade08.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"></a>

    <?php include('../../layouts/footer.php') ?>
</body>
</html>