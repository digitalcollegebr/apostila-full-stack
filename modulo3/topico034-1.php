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
                <p class="Titulo">
                    034.1 Execução e sintaxe de JavaScript
                </p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                    As páginas web são desenvolvidas usando três tecnologias padrão: HTML, CSS e JavaScript. O
                    <span class="code-color"><strong>JavaScript</strong></span> é uma linguagem de programação que permite ao navegador atualizar dinamicamente o
                    conteúdo do site. Ele normalmente é executado pelo mesmo navegador usado para visualizar uma
                    página web. Dessa forma, como ocorre com o CSS e o HTML, o comportamento exato de um código
                    pode ser diferente de acordo com o navegador. Mas os navegadores mais comuns aderem à
                    especificação ECMAScript. Este é um padrão que unifica o uso do JavaScript na web e será a base
                    desta lição, junto com a especificação HTML5, que especifica como o JavaScript precisa ser posto em
                    uma página web para que um navegador possa executá-lo.
                </p>
                <p class="Subtopico"><strong>Executando o JavaScript no navegador</strong></p>
                <p class="Texto">
                    Para executar o JavaScript, o navegador precisa obter o código diretamente, como parte do HTML
                    que compõe a página, ou ainda na forma de uma URL que indica a localização de um script a ser
                    executado.
                </p>
                <p class="Texto">O exemplo a seguir mostra como incluir o código diretamente no arquivo HTML:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;html&gt;</strong></span>
    <span class="code-color"><strong>&lt;head&gt;</strong></span>
    <span class="code-color"><strong>&lt;/head&gt;</strong></span>
    <span class="code-color"><strong>&lt;body&gt;</strong></span>
            <span class="code-color"><strong>&lt;h1&gt;</strong></span>Cabeçalho do website<span class="code-color"><strong>&lt;/h1&gt;</strong></span>   
            <span class="code-color"><strong>&lt;p&gt;</strong></span>Conteúdo<span class="code-color"><strong>&lt;/p&gt;</strong></span>
            
            <span class="code-color"><strong>&lt;script&gt;</strong></span>
                console.log(<span class="orange-code">'test'</span>);
            <span class="code-color"><strong>&lt;/script&gt;</strong></span>
    <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/HTML&gt;</strong></span>
                    </code></pre>

                </div>
                <p class="Texto">
                        O código é empacotado entre as tags <span class="code-color"><strong>&lt;script&gt;</strong></span> e <span class="code-color"><strong>&lt;/script&gt;</strong></span>. Tudo o que for incluído nessas tags será
                        executado pelo navegador diretamente ao carregar a página.
                </p>
                <p class="Texto">
                    A posição do elemento <span class="code-color"><strong>&lt;script&gt;</strong></span> dentro da página determina quando ele será executado. Um
                    documento HTML é analisado de cima para baixo, e a partir disso o navegador decide quando exibir
                    os elementos na tela. No exemplo acima, as tags <span class="code-color"><strong>&lt;h1&gt;</strong></span> e <span class="code-color"><strong>&lt;p&gt;</strong></span> do website são analisadas, e
                    provavelmente exibidas, antes de o script ser executado. Se o código JavaScript dentro da tag
                    <span class="code-color"><strong>&lt;script&gt;</strong></span> for muito demorado de executar, ainda assim a página seria exibida sem problemas. Se,
                    porém, o script tiver sido posto acima das outras tags, o visitante da página teria de esperar até que o
                    script termine de ser executado para poder visualizar a página. Por essa razão, as tags <span class="code-color"><strong>&lt;script&gt;</strong></span>
                    costumam ser posicionadas em um destes locais:
                </p>
            </div>
        </div>
    </div>    
</body>
<?php include('../layouts/footerQ.php') ?>