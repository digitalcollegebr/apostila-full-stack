<?php
    // A_S - Header
    include('../layouts/headerQ.php');
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

    <!-- CONTEUDO - Begin -->
    <!-- Back to top -->
    <a id="BackToTop"></a>

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="Titulo">035.2 - Noções básicas de NodeJs Express</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O <span class="code-color"><strong>Express.js</strong></span>, ou simplesmente Express, é um framework popular que roda em Node.js e é usado para escrever servidores HTTP que lidam com solicitações de clientes de aplicativos web. O Express oferece suporte a diversas maneiras de ler parâmetros enviados por HTTP.</p>
                <p class="Texto">Script inicial do servidor</p>
                <p class="Texto">Para demonstrar os recursos básicos do Express ao receber e tratar solicitações, vamos simular um aplicativo que solicita algumas informações ao servidor. Em particular, o servidor de exemplo.</p>
                <ul class="Texto">
                    <li>Fornece uma função echo, que simplesmente retorna a mensagem enviada pelo cliente.</li>
                    <li>Informa ao cliente seu endereço IP mediante solicitação</li>
                    <li>Usa cookies para identificar clientes conhecidos.</li>
                </ul>
                <p class="Texto">O primeiro passo é criar o arquivo JavaScript que funcionará como servidor. Usando npm, crie um diretório chamado myserver com o arquivo JavaScript:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                <pre><code class="Texto">
$ <strong>mkdir myserver</strong>
$ <strong>cd myserver/</strong>
$ <strong>npm init</strong>
                </code></pre>
                </div>
                <br>
                <p class="Texto">No ponto de entrada, qualquer nome de arquivo pode ser usado. Aqui, usaremos o nome de arquivo padrão: <span class="code-color"><em>index.js</em></span>. A lista a seguir mostra um arquivo index.js básico que será usado como ponto de entrada para o nosso servidor:</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>