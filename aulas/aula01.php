<?php
    // A_S - Header
    include('../layouts/header.php');
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
                <!-- Titulo -->
                <p class="Titulo">Marcação de documentos HTML</p>
                <br>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <!-- Texto -->
                <p class="Texto wow fadeIn">O HTML (HyperText Markup Language) é uma linguagem de marcação que informa aos navegadores
                como estruturar e exibir as páginas web. A versão atual é a 5.0, lançada em 2012. A sintaxe HTML é
                definida pelo World Wide Web Consortium (W3C).</p>
                <p class="Texto wow fadeIn">O HTML é uma habilidade fundamental para o desenvolvimento web, pois é a linguagem que define
                a estrutura e boa parte da aparência de um website. Se você deseja seguir uma carreira em
                desenvolvimento web, o HTML é um excelente ponto de partida.</p>
                <p class="Subtopico"><strong>Anatomia de um documento html</strong></p>
                <div class="container-code">
        <div class="code-section">
            <div class="typewriter">
                <strong><pre><code>&lt;!DOCTYPE html&gt;
               &lt;html&gt;
                    &lt;head&gt;
                        <span class="code-color">&lt;title&gt;</span>My HTML Page<span class="code-color">&lt;title&gt;</span>
                        &lt;!-- This is the Document Header --&gt;
                    &lt;/head&gt;
                    <span class="code-color">&lt;body&gt;</span>
                            &lt;!-- This is the Document Body --&gt;
                    <span class="code-color">&lt;/body&gt;</span>
                &lt;/html&gt;</code></pre></strong>
            </div>
        </div>
        <div class="text-section">
            <p class="Texto">O HTML usa elementos e tags para descrever e formatar o conteúdo. As tags consistem em parênteses angulares ao redor do nome da tag, por exemplo &lt;title&gt;. O nome da tag não fazdistinção entre maiúsculas e minúsculas, embora o World Wide Web Consortium (W3C) recomende o uso de minúsculas nas versões atuais do HTML. Essas tags HTML são usadas para construir elementos HTML</p>
        </div>
        </div>
        <br>
        <p class="Texto">A tag <strong><span class="code-color">&lt;title&gt;</span></strong> é um exemplo de tag de abertura de um elemento HTML que define
        o título de um documento HTML. No entanto, um elemento possui dois outros componentes. Um
        elemento <span class="code-color"><strong>&lt;title&gt;</strong></span> completo seria parecido com este:</p>
        <br>
        <div class="code-smaller">
                <span class="code-color"><strong>&lt;title&gt;</strong></span>My HTML Page<span class="code-color"><span class="code-color"><strong>&lt;/title&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">Aqui, My HTML Page representa o conteúdo do elemento, ao passo que </title> é a tag de fechamento que declara que este elemento está completo.</p>
        <br>
        <!-- Importante -->
        <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p>Nem todos os elementos HTML precisam ser fechados; nesses casos, falamos de elementos vazios, elementos de auto-fechamento ou elementos nulos.</p>
                    </div>
                </div>
        <br>
        <p class="Texto">Aqui estão os outros elementos HTML do exemplo anterior:</p>
        <br>
        <div class="typewriter-small">
                <strong>&lt;html&gt;</strong>
                Abrange todo o documento HTML. Contém todas as tags que compõem a página. Também indica que o conteúdo deste arquivo está em linguagem HTML. A tag de fechamento correspondente é: <span class="highlighter"><strong>&lt;/html&gt;</strong></span>
        </div>
        <br>
        <div class="typewriter-small">
                <strong>&lt;head&gt;</strong>
                Um receptáculo para todas as metainformações relacionadas à página. A tag de fechamento correspondente a este elemento é  <span class="highlighter"><strong>&lt;/head&gt;</strong></span>
        </div>
        <br>
        <div class="typewriter-small">
                <strong>&lt;body&gt;</strong>
                Um receptáculo para todas as metainformações relacionadas à página. A tag de fechamento correspondente a este elemento é  <span class="highlighter"><strong>&lt;/body&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">
        As tags &lt;html&gt;, &lt;head&gt;, &lt;body&gt; e &lt;title&gt; são as chamadas tags estruturais, que fornecem o esqueleto básico de um documento HTML. Em particular, elas informam o navegador web de que ele está lendo uma página HTML.
        </p>
        <!-- Fique Atento -->
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloFiqueAtento">
                        <i class="fa-solid fa-person-circle-exclamation"></i> 
                            FIQUE ATENTO 
                    </div>
                    <div class="CaixaConteudo ConteudoFiqueAtento">
                        <p>Dentre esses elementos HTML, o único que é necessário para um documento HTML ser validado é a tag &lt;title&gt;.
                        </p>
                    </div>
                </div>
                <br>
        <p class="Texto">Como se vê, cada página HTML é um documento bem estruturado que poderia ser comparado a uma árvore, na qual o elemento &lt;html&gt; representa a raiz e os elementos &lt;head&gt; e &lt;body&gt; são os primeiros galhos. O exemplo mostra que é possível aninhar elementos. Assim, o elemento &lt;title&gt; é aninhado dentro de &lt;head&gt;, que por sua vez é aninhado dentro de &lt;html&gt;.</p>
        <p class="Texto">Para garantir que seu código HTML possa ser lido e mantido, todos os elementos HTML devem estar fechados corretamente e em ordem. Os navegadores web ainda serão capazes de exibir seu site conforme o esperado, mas o aninhamento incorreto de elementos e suas tags é uma prática que pode causar erros.</p>
        <p class="Texto">Finalmente, uma menção especial à declaração doctype que aparece no alto da estrutura do documento de nosso exemplo. <span class="code-color"><strong>&lt;!DOCTYPE&gt;</strong></span> não é uma tag HTML, mas uma instrução para o navegador web que especifica a versão do HTML usada no documento. Na estrutura básica do documento HTML vista anteriormente, usamos <span class="code-color"><strong>&lt;!DOCTYPE&gt;</strong></span>, especificando que o HTML5 foi usado no documento.</p>
        <br>
        <p class="Subtopico"><strong>Comentários em HTML</strong></p>
        <p class="Texto">Ao criar uma página HTML, é recomendável inserir comentários no código para melhorar sua legibilidade e descrever a finalidade dos blocos de código maiores. As tags &lt;!-- e --&gt; indicam os comentários, como mostrado no exemplo a seguir:
        <div class="small-container">
        <div class="code-conatainer">
            <div class="typewriter">
                <pre><code>
                    &lt;!-- Isto é um comentário --&gt;
                    &lt;!-- Isto são
                     múltiplos 
                     comentários --&gt;
                </code></pre>
            </div>
        </div>
        </div>
        <div class="text-container">
            <p class="Texto">O exemplo demonstra que os comentários, no HTML, podem ser postos em uma única linha, mas também podem se estender por várias linhas. De qualquer maneira, o resultado é que o texto entre &lt;!-- e --&gt; é ignorado pelo navegador web e, portanto, não é exibido na página HTML. Com base nessas considerações, podemos deduzir que a página HTML básica mostrada no parágrafo “Anatomia de um documento HTML” não exibe nenhum texto, porque as linhas <span class="code-color">&lt;!-- This is the Document Header --&gt;</span> e <span class="code-color">!-- This is the Document Body --&gt;</span>&lt; são apenas dois comentários.
</p>
        
        </div>
        
</p>

        <?php include('../layouts/footer.php') ?>

</body>
</html>

        
            

        

   

