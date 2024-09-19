<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários HTML</title>
</head>
<body>
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
                <p class="Titulo">Formulários  HTML</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Os formulários web são uma maneira simples e eficiente de solicitar informações ao visitante de uma página HTML. O desenvolvedor front-end pode usar diversos componentes, como campos de texto, caixas de seleção, botões e muitos outros para construir interfaces que enviam dados ao servidor de forma estruturada.</p>
                <p class="Subtopico"><strong>Formulários HTML simples</strong></p>
                <p class="Texto">Antes de falar do código de marcação específico para formulários, vamos começar com um documento HTML simples em branco, sem nenhum conteúdo no corpo:</p>
                <br>
                <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>Working with HTML Forms<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class=".C_inicializeted">&lt;!-- The body content goes here --&gt;</span>
  
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">Salve esse código de exemplo como um arquivo de texto simples com a extensão <span class="code-color"><em>.html</em></span> (por exemplo, <em>form.html</em>) e use seu navegador favorito para abri-lo. Após alterá-lo, pressione o botão de recarregar no navegador para exibir as modificações.</p>
            <p class="Texto">A estrutura básica do formulário é dada pela própria tag <span class="code-color"><strong>&lt;form&gt;</strong></span> e seus elementos internos:</p>

            </div>
        </div>
    </div>
    <?php include('../../layouts/footer.php') ?>
</body>
</html>