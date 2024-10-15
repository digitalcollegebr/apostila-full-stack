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
                <ul class="Texto">
                    <li>No finalzinho do corpo do HTML, para que o script seja a última coisa a ser executada. Fazemos
                        isso quando o código tem uma função que não seria útil sem o resto do conteúdo da página. Um
                        exemplo seria adicionar funcionalidade a um botão, já que o botão precisa existir para que a
                        funcionalidade faça sentido.
                    </li>
                    <br>
                    <li>
                    Dentro do elemento <span class="code-color"><strong>&lt;head&gt;</strong></span> do HTML. Esse posicionamento garante que o script seja executado
                    antes de o corpo do HTML ser analisado. Se você quiser alterar o comportamento de
                    carregamento da página, ou tiver algo que precisa ser executado enquanto a página ainda não
                    está totalmente carregada, coloque o script aqui. Além disso, se houver vários scripts que
                    dependem de um script específico, coloque esse script compartilhado dentro de head para fazer
                    com que ele seja executado antes dos outros.
                    </li>
                </ul>
                <p class="Texto">
                Por diversos motivos, incluindo uma maior facilidade de gerenciamento, vale a pena colocar o código
                JavaScript em arquivos separados externos ao código HTML. Os arquivos JavaScript externos são
                incluídos usando uma tag <span class="code-color"><strong>&lt;script&gt;</strong></span> com um atributo src, da seguinte maneira:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<span class="code-color"><strong>&lt;html&gt;</strong></span>
    <span class="code-color"><strong>&lt;head&gt;</strong></span>
        <span class="code-color"><strong>&lt;script </strong><span class="blue-code">src=</span> =<span class="orange-code">"/button-interaction.js"</span>&gt;</span><span class="code-color"><strong>&lt;/script&gt;</strong></span>
    <span class="code-color"><strong>&lt;/head&gt;</strong></span>
    <span class="code-color"><strong>&lt;body&gt;</strong></span>
    <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
                </code></pre>
                </div>
                <p class="Texto">
                    A tag src informa ao navegador a localização da fonte, ou seja, o arquivo que contém o código
                    JavaScript. O local pode ser um arquivo no mesmo servidor, como no exemplo acima, ou qualquer
                    URL acessível pela web, como <a href="https://www.lpi.org/example.js">https://www.lpi.org/example.js</a>. O valor do atributo src segue a
                    mesma convenção da importação de arquivos CSS ou de imagem, podendo ser relativo ou absoluto.
                    Ao encontrar uma tag de script com o atributo src, o navegador tentará obter o arquivo de origem
                    usando uma solicitação HTTP <span class="code-color"><em>GET</em></span>. Portanto, os arquivos externos precisam estar acessíveis.
                </p>
                <p class="Texto">
                    Quando usamos o atributo src, qualquer código ou texto posto entre as tags <span class="code-color"><strong>&lt;script&gt;</strong></span>…<span class="code-color"><strong>&lt;/script&gt;</strong></span> é
                    ignorado, de acordo com a especificação do HTML.
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<span class="code-color"><strong>&lt;html&gt;</strong></span>
    <span class="code-color"><strong>&lt;head&gt;</strong></span>
        <span class="code-color"><strong>&lt;script </strong><span class="blue-code">src=</span> =<span class="orange-code">"/button-interaction.js"</span>&gt;</span><span class="code-color"><strong>&lt;/script&gt;</strong></span>
            console.log(<span class="orange-code">"test"</span> ); <span class="comment">// <-- Isto é ignorado</span>
    <span class="code-color"><strong>&lt;/head&gt;</strong></span>
    <span class="code-color"><strong>&lt;body&gt;</strong></span>
    <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
                </code></pre>
                </div>
                <p class="Texto">
                    Existem outros atributos que podem ser adicionados à tag script para especificar ainda mais como o
                    navegador deve obter os arquivos e tratá-los posteriormente. A lista a seguir detalha os atributos
                    mais importantes:
                </p>
                <p class="Texto"><strong>async</strong>...</p>
                <p class="Texto"><strong>defer</strong>...</p>
                <p class="Texto"><strong>type</strong>...</p>
                
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloImportante">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                IMPORTANTE 
                        </div>
                        <div class="CaixaConteudo ConteudoImportante">
                            <p class="Texto">
                            Quando múltiplos scripts têm o atributo async, eles serão executados na
                            ordem em que o download for concluído, e não na ordem das tags script do
                            documento. O atributo defer, por outro lado, preserva a ordem das tags
                            script.
                            </p>
                        </div>
                </div>
                <br>
                <div class="Subtopico"><strong>Console do navegador</strong></div>
                <div class="Texto">
                    Embora ele geralmente seja executado como parte de um site, existe outra maneira de executar o
                    JavaScript: usando o console do navegador. Todos os navegadores modernos para desktop incluem
                    um menu que permite executar o código JavaScript no mecanismo JavaScript do navegador. O
                    recurso permite testar um novo código ou depurar sites existentes.
                </div>  
                <div class="Texto">
                Existem várias maneiras de acessar o console, dependendo do navegador. A maneira mais fácil é usar
                atalhos de teclado. Estes são os atalhos de teclado para alguns dos navegadores mais comuns:
                </div>
                <p class="Texto">
                    <ul>
                    
                        <strong>Chrome</strong>
                        <p><span class="keyboard">Ctrl</span>+<span class="keyboard">Shift</span>+<span class="keyboard">j</span>(<span class="keyboard">Cmd</span>+<span class="keyboard">Option</span>+<span class="keyboard">j</span> no mac)</p>

                
                        <strong>Firefox</strong>
                        <p><span class="keyboard">Ctrl</span>+<span class="keyboard">Shift</span>+<span class="keyboard">k</span>(<span class="keyboard">Cmd</span>+<span class="keyboard">Option</span>+<span class="keyboard">j</span> no mac)</p>


                        <strong>Safari</strong>
                        <p><span class="keyboard">Ctrl</span>+<span class="keyboard">Shift</span>+<span class="keyboard">?</span>(<span class="keyboard">Cmd</span>+<span class="keyboard">Option</span>+<span class="keyboard">?</span> no mac)</p>

                    </ul>
                </p>
                <p class="Texto">
                    Você também pode clicar com o botão direito em uma página web e selecionar a opção “Inspecionar”
                    ou “Inspecionar Elemento” para abrir o inspetor, que é outra ferramenta do navegador. Quando o
                    inspetor é aberto, aparece um novo painel. Selecione a guia “Console” para abrir o console do
                    navegador.
                </p>
                <p class="Texto">
                    Depois de acessar o console, você pode executar o JavaScript da página inserindo o código
                    diretamente no campo de entrada. O resultado de qualquer código executado será mostrado em uma
                    linha separada.
                </p>
                <p class="Subtopico"><strong>Declarações de JavaScript</strong></p>
                <p class="Texto">
                    Agora que sabemos como começar a executar um script, vamos tratar dos fundamentos dessa
                    execução. Um script JavaScript é uma coleção de declarações e blocos. Um exemplo de declaração é
                    <span class="blue-code">console.log('test')</span>. Esta instrução diz ao navegador para enviar a palavra test para o console do
                    navegador
                </p>
                <p class="Texto">
                    Cada declaração em JavaScript é encerrada por um ponto e vírgula (;). Graças a isso, o navegador
                    sabe que a declaração foi concluída e uma nova pode ser iniciada. Veja o seguinte script:
                </p>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<strong><span class="green-code">var</span></strong> message = <span class="orange-code">"test"</span>; console.log(message)
                </code></pre>
                </div>
                <p class="Texto">
                    Escrevemos duas declarações. Cada uma delas é encerrada por um ponto e vírgula ou pelo final do
                    script. Para fins de legibilidade, podemos colocar as declarações em linhas separadas. Dessa forma, o
                    script também pode ser escrito assim:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<strong><span class="green-code">var</span></strong> message = <span class="orange-code">"test"</span>; 
console.log(message);
                </code></pre>
                </div>
                <p class="Texto">
                    Isso é possível porque todos os espaços em branco entre as declarações, como um espaço, uma nova
                    linha ou uma tabulação, são ignorados. Também é possível incluir espaços em branco entre palavras-chave individuais dentro das declarações, mas isso será explicado em uma lição posterior. As
                    declarações também podem estar vazias ou ser compostas apenas por espaços em branco.
                </p>
                <p class="Texto">
                    Se uma declaração for inválida por não ter sido encerrada por um ponto e vírgula, o ECMAScript
                    tenta inserir automaticamente os pontos e vírgulas adequados com base em um conjunto complexo
                    de regras. A regra mais importante é: Se uma instrução inválida for composta de duas declarações
                    válidas separadas por uma nova linha, insira um ponto e vírgula na nova linha. Por exemplo, o
                    código a seguir não forma uma declaração válida:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
console.log(<span class='orange-code'>"hello"</span>)
console.log(<span class='orange-code'>"world"</span>)
                </code></pre>
                </div>
                <p class="Texto">
                    Mas um navegador moderno irá executá-lo automaticamente como se tivesse sido escrito com os
                    pontos e vírgulas adequados:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
console.log(<span class='orange-code'>"hello"</span>);
console.log(<span class='orange-code'>"world"</span>);
                </code></pre>
                </div>
                <p class="Texto">
                    Assim, é possível omitir o ponto e vírgula em certos casos. No entanto, como as regras para a
                    inserção automática de ponto e vírgula são complexas, recomendamos sempre encerrar
                    adequadamente suas declarações para evitar erros indesejados.
                </p>
                <p class="Subtopico"><strong>Comentários em JavaScript</strong></p>
                <p class="Texto">
                    Assim, é possível omitir o ponto e vírgula em certos casos. No entanto, como as regras para a
                    inserção automática de ponto e vírgula são complexas, recomendamos sempre encerrar
                    adequadamente suas declarações para evitar erros indesejados.
                </p>
                <p class="Texto">
                    Para possibilitar a inclusão dessas metainformações, o JavaScript suporta comentários. Um
                    desenvolvedor pode incluir caracteres especiais em um script, indicando certas partes como
                    comentários que serão ignorado na execução. O exemplo a seguir traz uma versão bem comentada
                    do script que vimos anteriormente.
                </p>

                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<span class="comment">
/*
 This script was written by the author of this lesson in May, 2020.
 It has exactly the same effect as the previous script, but includes comments.
*/
</span>
<span class="green-code">var</span> message = <span class="orange-code">"test"</span>;

console.log(message); <span class="comment">//Then, we output the message to the console</span> 
                </code></pre>
                </div>
                <p class="Texto">
                    Os comentários não são declarações e não precisam ser encerrados com ponto e vírgula. Eles seguem
                    suas próprias regras de encerramento, dependendo da forma como o comentário é escrito. Existem
                    duas maneiras de escrever comentários em JavaScript:
                </p>

                <p class="Subtopico"><strong>Comentários multilinhas</strong></p>
                <p class="Texto">
                Use <span class="code-color"><strong>*/ </strong></span>  e <span class="code-color"><strong>*/ </strong></span> para indicar o início e o fim de um comentário multilinhas. Tudo o que vier após <span class="code-color"><strong>*/ </strong></span>,
                até a primeira ocorrência de <span class="code-color"><strong>*/ </strong></span>, é ignorado. Esse tipo de comentário geralmente abrange mais de
                uma linha, mas também pode ser usado para linhas únicas ou mesmo no meio de uma linha, desta
                forma:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
console.log(<span class="comment">/* what we want to log: */</span> <span class="orange-code">"hello world"</span> ) 
                </code></pre>
                </div>
                <p class="Texto">
                    Como o objetivo dos comentários geralmente é aumentar a legibilidade de um script, evite usar
                    esse estilo de comentário dentro de uma linha.
                </p>
                <p class="Subtopico"><strong>Comentário de uma linha</strong></p>
                <p class="Texto">
                    Use <span class="code-color"><strong>//</strong></span> (duas barras) para comentar uma linha. Tudo o que vem após a barra dupla na mesma
                    linha é ignorado. No exemplo mostrado anteriormente, esse padrão é usado primeiro para
                    comentar uma linha inteira. Após a declaração console.log(message);, ele é usado para escrever
                    um comentário sobre o resto da linha.
                </p>
                <p class="Texto">
                Em geral, comentários de uma linha devem ser usados para linhas únicas e comentários multilinha
                para linhas múltiplas, mesmo sendo possível usá-los de outras maneiras. Evite incluir comentários
                dentro das declarações.
                </p>

                <p class="Texto">
                    Em geral, comentários de uma linha devem ser usados para linhas únicas e comentários multilinha
                    para linhas múltiplas, mesmo sendo possível usá-los de outras maneiras. Evite incluir comentários
                    dentro das declarações.
                </p>

                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                                    <i class="fas fa-copy"></i>
                                    Copiar
                    </button>
                <pre><code class="Texto">
<span class="comment">// We temporarily want to use a different message
// var message = "test";</span>
<span class="green-code"><strong>var</strong></span> message = <span class="orange-code">"something else"</span>;
                </code></pre>
                </div>
            </div>
        </div>
    </div>    
</body>
<?php include('../../layouts/footer.php') ?>