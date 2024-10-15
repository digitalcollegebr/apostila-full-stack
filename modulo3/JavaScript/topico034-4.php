<?php
    include('../../layouts/header.php')
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
                <p class="Titulo">034.4 Manipulação de conteúdo e estilo de websites com JavaScript</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                    HTML, CSS e JavaScript são três tecnologias distintas que andam de mãos dadas na web. Para criar
                    páginas que sejam de fato dinâmicas e interativas, o programador de JavaScript deve saber combinar
                    componentes de HTML e CSS em tempo de execução, uma tarefa muito facilitada pelo uso do
                    <span class="code-color"><em>Document Object Model </em></span>(DOM).
                </p>
                <p class="Subtopico"><strong>Interagindo com o DOM</strong></p>
                <p class="Texto">
                    O DOM é uma estrutura de dados que funciona como uma interface de programação para o
                    documento, na qual cada aspecto do documento é representado como um nó no DOM e cada
                    alteração feita no DOM reverbera imediatamente no documento. Para mostrar como usar o DOM em
                    JavaScript, salve o seguinte código HTML em um arquivo chamado <span class="code-color"><em>example.html</em></span>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html&gt;</strong></span>
    <span class="code-color"><strong>&lt;head&gt;</strong></span>
        <span class="code-color"><strong>&lt;meta </strong><span class="blue-code">charset=</span><span class="orange-code">"utf-8"</span> <strong>/&gt;</strong></span>
        <span class="code-color"><strong>&lt;title&gt;</strong></span>Manipulação de HTML com JavaScript<span class="code-color"><strong>&lt;/title&gt;</strong></span>
    <span class="code-color"><strong>&lt;/head&gt;</strong></span>
    <span class="code-color"><strong>&lt;body&gt;</strong></span>
        <span class="code-color"><strong>&lt;div </strong><span class="blue-code">class=</span><span class="orange-code">"content"</span> <span class="blue-code">id=</span><span class="orange-code">"content_first"</span><strong>&gt;</strong></span>
            <span class="code-color"><strong>&lt;p&gt;</strong></span>O conteúdo dinâmico vai aqui<span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;/div&gt;</strong></span> <!-- #content_first -->
        <span class="code-color"><strong>&lt;div </strong><span class="blue-code">class=</span><span class="orange-code">"content"</span> <span class="blue-code">id=</span><span class="orange-code">"content_second"</span> <span class="blue-code">hidden</span><strong>&gt;</strong></span>
            <span class="code-color"><strong>&lt;p&gt;</strong></span>Segunda seção<span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;/div&gt;</strong></span> <!-- #content_second -->
    <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
                    </code></pre>
                </div>
                <p class="Texto">
                    O DOM estará disponível somente depois que o HTML for carregado. Assim, escreva o seguinte
                    código JavaScript no final do corpo da página (antes da tag <span class="code-color"><em>&lt;/body&gt;</em></span> final):
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;script&gt;</strong></span>
    <span class="green-code"><strong>let</strong></span> body = <span class="blue-code">document</span>.getElementsByTagName(<span class="orange-code">"body"</span>)[<span class="dark_blue_code"><strong>0</strong></span>];
    console.log(body.innerHTML);
<span class="code-color"><strong>&lt;/script&gt;</strong></span>
                    </code></pre>
                </div>
                <p class="Texto">
                    O objeto document é o elemento DOM superior; todos os outros se ramificam a partir dele. O método
                    <span class="code-color"><em>getElementsByTagName()</em></span> lista todos os elementos descendentes de document que possuem o nome de
                    tag dado. Mesmo que a tag body seja usada apenas uma vez no documento, o método
                    <span class="code-color"><em>getElementsByTagName()</em></span> sempre retorna uma coleção semelhante a uma matriz com os elementos
                    encontrados, por isso usamos o índice [<span class="dark_blue_code"><strong>0</strong></span>] para retornar o primeiro (e único) elemento encontrado.
                </p>
                <p class="Subtopico"><strong>Conteúdo em HTML</strong></p>
                <p class="Texto">
                    Como mostrado no exemplo anterior, o elemento DOM retornado por <span class="code-color"><em>document.getElementsByTagName("body")[0]</em></span> foi atribuído à variável <span class="code-color"><em>body</em></span>. A variável <span class="code-color"><em>body</em></span> pode
                    então ser usada para manipular o elemento do corpo da página, porque ela herda todos os métodos e
                    atributos DOM daquele elemento. Por exemplo, a propriedade <span class="code-color"><em>innerHTML</em></span> contém todo o código de
                    marcação HTML escrito dentro do elemento correspondente, podendo assim ser usada para ler a
                    marcação interna. Nossa chamada <span class="code-color"><em>console.log(body.innerHTML)</em></span> imprime o conteúdo dentro de
                    <span class="code-color"><strong>&lt;body&gt;</strong></span><span class="code-color"><strong>&lt;/body&gt;</strong></span> no console web. A variável também pode ser usada para substituir esse conteúdo,
                    como em <span class="code-color"><em>body.innerHTML</em></span> = <span class="code-color"><em>"&lt;p&gt;Content erased&lt;/p&gt;.</em></span>
                </p>
                <p class="Texto">
                    Em vez de alterar partes inteiras da marcação HTML, é mais prático manter a estrutura do
                    documento inalterada e apenas interagir com seus elementos. Depois que o documento é renderizado
                    pelo navegador, todos os elementos são acessíveis por métodos DOM. É possível, por exemplo, listar
                    e acessar todos os elementos HTML usando a string especial * no método <span class="code-color"><em>getElementsByTagName()</em></span>
                    do objeto document:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> elements = document.<span class="blue-code">getElementsByTagName</span>(<span class="orange-code">"*"</span>);
<span class="green-code"><strong>for</strong></span> (element <span class="green-code"><strong>of</strong></span> elements )
{
  <span class="green-code"><strong>if</strong></span> ( element.id == <span class="orange-code">"content_first"</span> )
  {
    element.innerHTML = <span class="orange-code">"&lt;p&gt;New content&lt;/p&gt;"</span>;
  }
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Este código coloca todos os elementos encontrados em <span class="code-color"><em>document</em></span> na variável <span class="code-color"><em>elements</em></span>. A variável
                    <span class="code-color"><em>elements</em></span> é um objeto semelhante a uma matriz (array), de modo que podemos iterar por cada um de
                    seus itens com um loop <span class="code-color"><em>for</em></span>. Se a página HTML onde este código é executado tiver um elemento com
                    um atributo id definido como content_first (veja a página HTML de exemplo no início da lição), a
                    instrução <span class="code-color"><em>if</em></span> corresponderá a esse elemento e seu conteúdo de marcação será alterado para <span class="code-color"><em><span class="code-color"><strong>&lt;p&gt;</strong></span>New
                    content<span class="code-color"><strong>&lt;/p&gt;</strong></span></em></span>. Observe que os atributos de um elemento HTML no DOM são acessíveis usando a
                    notação de pontos das propriedades do objeto JavaScript: portanto, <span class="code-color"><em>element.id</em></span> se refere ao atributo
                    id do elemento atual do loop <span class="code-color"><em>for</em></span>. O método <span class="code-color">getAttribute()</span> também pode ser usado, como em
                    <span class="code-color"><em>element.getAttribute("id")</em></span>.
                </p>
                <p class="Texto">
                    Não é necessário iterar por todos os elementos se a ideia for inspecionar apenas um subconjunto
                    deles. Por exemplo, o método <span class="code-color"><em>document.getElementsByClassName()</em></span> limita os elementos
                    correspondentes aos que possuem uma classe específica:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> elements = <span class="blue-code">document</span>.getElementsByClassName(<span class="orange-code">"content"</span>);
<span class="green-code"><strong>for</strong></span> ( element <span class="green-code"><strong>of</strong></span> elements )
{
  <span class="green-code"><strong>if</strong></span> ( element.id == <span class="orange-code">"content_first"</span> )
  {
    element.innerHTML = <span class="orange-code">"&lt;p&gt;New content&lt;/p&gt;"</span>;
  }
}
                    </code></pre>
                </div>
                <p class="Texto">
                    No entanto, iterar por meio de muitos elementos do documento usando um loop não é a melhor
                    estratégia quando é preciso alterar um elemento específico na página.
                </p>
                <p class="Subtopico"><strong>Seleção de elementos específicos</strong></p>
                <p class="Texto">
                    O JavaScript oferece métodos otimizados para selecionar o elemento exato no qual você deseja
                    trabalhar. O loop anterior pode ser totalmente substituído pelo método <span class="code-color"><em>document.getElementById()</em></span>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> element = <span class="blue-code">document</span>.getElementById(<span class="orange-code">"content_first"</span>);
element.innerHTML = <span class="orange-code">"&lt;p&gt;New content&lt;/p&gt;"</span>;
                    </code></pre>
                </div>
                <p class="Texto">
                    Cada atributo <span class="code-color"><em>id</em></span> no documento deve ser único, então o método <span class="code-color"><em>document.getElementById()</em></span> retorna
                    apenas um único objeto DOM. Até mesmo a declaração da variável <span class="code-color"><em>element</em></span> pode ser omitida, porque
                    o JavaScript nos permite encadear métodos diretamente:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="blue-code">document</span>.getElementById(<span class="orange-code">"content_first"</span>).innerHTML = <span class="orange-code">"&lt;p&gt;New content&lt;/p&gt;"</span>;
                    </code></pre>
                </div>
                <p class="Texto">
                    Como o método <span class="code-color"><em>querySelector()</em></span> usa a sintaxe do seletor, o ID fornecido deve iniciar com um
                    caractere de hash. Se nenhum elemento correspondente for encontrado, o método <span class="code-color"><em>querySelector()</em></span>
                    retornas <em>null</em>.
                </p>
                <p class="Texto">
                    No exemplo anterior, todo o conteúdo do div <span class="code-color"><em>content_first</em></span> é substituído pela string de texto
                    fornecida. A string contém código HTML, o que não é considerado uma prática recomendada. É preciso ter cuidado ao adicionar marcação HTML embutida (hard-coded) ao código JavaScript,
                    porque fica mais difícil rastrear elementos quando é necessário fazer alterações na estrutura geral do
                    documento.
                </p>
                <p class="Texto">
                    Os seletores não se restringem ao ID do elemento. O elemento interno <span class="code-color"><em>p</em></span> pode ser endereçado
                    diretamente:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="blue-code">document</span>.querySelector(<span class="orange-code">"#content_first p"</span>).<span class="green-code">innerHTML</span> = <span class="orange-code">"New content"</span>;
                    </code></pre>
                </div>
                <p class="Texto">
                    O seletor <span class="code-color"><em>#content_first p</em></span> encontrará apenas o primeiro elemento <span class="code-color"><em>p</em></span> dentro do div <span class="code-color"><em>#content_first</em></span>.
                    Isso funciona bem quando queremos manipular o primeiro elemento. Mas pode ser que seja preciso
                    alterar o segundo parágrafo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;div</strong></span> class=<span class="orange-code">"content"</span> id=<span class="orange-code">"content_first"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>Don't change this paragraph.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>The dynamic content goes here.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="comment"><-- #content_first --></span>
                    </code></pre>
                </div>
                <p class="Texto">
                    Nesse caso, usamos a pseudoclasse <span class="code-color"><em>:nth-child(2)</em></span> para encontrar o segundo elemento <span class="code-color"><em>p</em></span>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="blue-code">document</span>.querySelector(<span class="orange-code">"#content_first p:nth-child(2)"</span>).<span class="green-code">innerHTML</span> = <span class="orange-code">"New content"</span>;
                    </code></pre>
                </div>
                <p class="Texto">
                    O número 2 em <span class="code-color"><em>p:nth-child(2)</em></span> indica o segundo parágrafo que corresponde ao seletor. Veja a lição
                    sobre seletores CSS para saber mais sobre seletores e como usá-los.
                </p>
                <p class="Subtopico"><strong>Trabalhando com atributos</strong></p>
                <p class="Texto">
                    A capacidade do JavaScript de interagir com o DOM não se restringe à manipulação de conteúdo. Na
                    verdade, o uso mais difundido do JavaScript no navegador é modificar os atributos dos elementos
                    HTML existentes.Na verdade, o uso mais difundido do JavaScript no navegador é modificar os atributos dos elementos
                    HTML existentes.
                </p>
                <p class="Texto">Digamos que nossa página HTML de exemplo original tenha agora três seções de conteúdo:</p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<strong><span class="code-color">&lt;!DOCTYPE html&gt;</span></strong>
<strong><span class="code-color">&lt;html&gt;</span></strong>
<strong><span class="code-color">&lt;head&gt;</span></strong>
    <strong><span class="code-color">&lt;meta</span></strong> <span class="blue-code">charset</span>=<span class="orange-code">"utf-8"</span> <strong><span class="code-color">&gt;</span></strong>
    <strong><span class="code-color">&lt;title&gt;</span></strong>HTML Manipulation with JavaScript<strong><span class="code-color">&lt;/title&gt;</span></strong>
<strong><span class="code-color">&lt;/head&gt;</span></strong>
<strong><span class="code-color">&lt;body&gt;</span></strong>
<strong><span class="code-color">&lt;div</span></strong> <span class="blue-code">class</span>=<span class="orange-code">"content"</span> <span class="blue-code">id</span>=<span class="orange-code">"content_first"</span> <strong><span class="code-color">hidden</span></strong><strong><span class="code-color">&gt;</span></strong>
    <strong><span class="code-color">&lt;p&gt;</span></strong>First section.<strong><span class="code-color">&lt;/p&gt;</span></strong>
<strong><span class="code-color">&lt;/div&gt;</span></strong><!-- #content_first -->
<strong><span class="code-color">&lt;div</span></strong> <span class="blue-code">class</span>=<span class="orange-code">"content"</span> <span class="blue-code">id</span>=<span class="orange-code">"content_second"</span> <strong><span class="code-color">hidden</span></strong><strong><span class="code-color">&gt;</span></strong>
    <strong><span class="code-color">&lt;p&gt;</span></strong>Second section.<strong><span class="code-color">&lt;/p&gt;</span></strong>
<strong><span class="code-color">&lt;/div&gt;</span></strong><!-- #content_second -->
<strong><span class="code-color">&lt;div</span></strong> <span class="blue-code">class</span>=<span class="orange-code">"content"</span> <span class="blue-code">id</span>=<span class="orange-code">"content_third"</span> <strong><span class="code-color">hidden</span></strong><strong><span class="code-color">&gt;</span></strong>
    <strong><span class="code-color">&lt;p&gt;</span></strong>Third section.<strong><span class="code-color">&lt;/p&gt;</span></strong>
<strong><span class="code-color">&lt;/div&gt;</span></strong><!-- #content_third -->
<strong><span class="code-color">&lt;/body&gt;</span></strong>
<strong><span class="code-color">&lt;/html&gt;</span></strong>
                    </code></pre>
                </div>
                <p class="Texto">
                    Podemos querer tornar apenas um deles visível por vez, daí o atributo hidden em todas as tags div.
                    Isso é útil, por exemplo, para exibir apenas uma imagem de uma galeria de imagens. Para tornar um
                    deles visível quando a página for carregada, adicionamos o seguinte código JavaScript à página:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// Which content to show</span>
let content_visible;
<span class="green-code"><strong>switch</strong></span>( <span class="blue-code">Math.floor</span>(<span class="blue-code">Math.random</span>() * <span class="orange-code">3</span>) )
{
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">0:</span>
  content_visible = <span class="orange-code">"#content_first";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">1:</span>
  content_visible = <span class="orange-code">"#content_second";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">2:</span>
  content_visible = <span class="orange-code">"#content_third";</span>
  <span class="green-code"><strong>break;</strong></span>
}
<span class="blue-code">document</span>.querySelector(content_visible).<span class="green-code">removeAttribute</span>(<span class="orange-code">"hidden"</span>);

                    </code></pre>
                </div>
                <p class="Texto">
                    A expressão avaliada pela instrução <span class="code-color"><em>switch</em></span> retorna aleatoriamente o número 0, 1 ou 2. O seletor de
                    ID correspondente é então atribuído à variável <span class="code-color"><em>content_visible</em></span>, que é usada pelo método
                    <span class="code-color"><em>querySelector(content_visible)</em></span>. A chamada <span class="code-color"><em>removeAttribute("hidden")</em></span> encadeada remove o
                    atributo <span class="code-color"><em>hidden</em></span> do elemento.
                </p>
                <p class="Texto">
                    Também é possível fazer o contrário: todas as seções podem estar inicialmente visíveis (sem o
                    atributo <span class="code-color"><em>hidden</em></span>) e o programa em JavaScript conferir o atributo <span class="code-color"><em>hidden</em></span> a cada seção, exceto a que
                    está em <span class="code-color"><em>content_visible</em></span>. Para fazer isso, você deve iterar por todos os elementos div de conteúdo
                    que forem diferentes do escolhido, o que pode ser feito usando o método <span class="code-color"><em>querySelectorAll():</em></span>
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// Which content to show</span>
let content_visible;
<span class="green-code"><strong>switch</strong></span>( <span class="blue-code">Math.floor</span>(<span class="blue-code">Math.random</span>() * <span class="orange-code">3</span>) )
{
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">0:</span>
  content_visible = <span class="orange-code">"#content_first";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">1:</span>
  content_visible = <span class="orange-code">"#content_second";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">2:</span>
  content_visible = <span class="orange-code">"#content_third";</span>
  <span class="green-code"><strong>break;</strong></span>
}
<span class="comment">// Hide all content divs, except content_visible</span>
for (element <span class="green-code"><strong>of</strong></span> <span class="blue-code">document</span>.querySelectorAll(<span class="orange-code">".content:not("+content_visible+")"</span>))
{
  <span class="comment">// Hidden is a boolean attribute, so any value will enable it</span>
  element.<span class="green-code">setAttribute</span>(<span class="orange-code">"hidden"</span>, <span class="orange-code">""</span>);
}

                    </code></pre>
                </div>
                <p class="Texto">
                    Se a variável <span class="code-color"><em>content_visible</em></span> for definida como <span class="code-color"><em>#content_first</em></span>, o seletor será
                    <span class="code-color"><em>.content:not(#content_first)</em></span>, o que indica todos os elementos da classe <span class="code-color"><em>content</em></span>, exceto os que
                    têm o ID <span class="code-color"><em>content_first</em></span>. O método <span class="code-color"><em>setAttribute()</em></span> adiciona ou altera os atributos dos elementos
                    HTML. Seu primeiro parâmetro é o nome do atributo e o segundo é o valor do atributo.
                </p>
                <p class="Texto">
                    Todavia, a maneira correta de alterar a aparência dos elementos é com CSS. Nesse caso, podemos
                    definir a propriedade CSS display como hidden e, em seguida, alterá-la para block usando
                    JavaScript:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;style&gt;</strong></span>
<span class="green-code">div.content { display: none }</span>
<span class="code-color"><strong>&lt;/style&gt;</strong></span>

<span class="code-color"><strong>&lt;div class="content" id="content_first"&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span><span class="green-code">First section.</span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="green-code"><strong><!-- #content_first --></strong></span>

<span class="code-color"><strong>&lt;div class="content" id="content_second"&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span><span class="green-code">Second section.</span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="green-code"><strong><!-- #content_second --></strong></span>

<span class="code-color"><strong>&lt;div class="content" id="content_third"&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span><span class="green-code">Third section.</span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="green-code"><strong><!-- #content_third --></strong></span>

<span class="code-color"><strong>&lt;script&gt;</strong></span>
<span class="green-code"><strong>// Which content to show</strong></span>
let content_visible;
<span class="green-code"><strong>switch</strong></span>( <span class="blue-code">Math.floor</span>(<span class="blue-code">Math.random</span>() * <span class="orange-code">3</span>) )
{
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">0:</span>
  content_visible = <span class="orange-code">"#content_first";</span>
  <span class="green-code"><strong>break;</strong></span>
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">1:</span>
  content_visible = <span class="orange-code">"#content_second";</span>
  <span class="green-code"><strong>break;</strong></span>
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">2:</span>
  content_visible = <span class="orange-code">"#content_third";</span>
  <span class="green-code"><strong>break;</strong></span>
}
document.querySelector(content_visible).<span class="green-code">style.display</span> = <span class="orange-code">"block";</span>
<span class="code-color"><strong>&lt;/script&gt;</strong></span>
                    </code></pre>
                </div>
                <p class="Texto">
                    As mesmas boas práticas que se aplicam à combinação de tags HTML com JavaScript também se
                    aplicam ao CSS. Portanto, não é recomendado escrever propriedades CSS diretamente no código
                    JavaScript. Em vez disso, as regras CSS devem ser escritas separadamente do código JavaScript. A
                    maneira adequada de alternar estilos visuais é selecionar uma classe CSS predefinida para o
                    elemento.
                </p>
                <p class="Subtopico"><strong>Trabalhando com classes</strong></p>
                <p class="Texto">
                    Os elementos podem ter mais de uma classe associada, sendo mais fácil escrever estilos que podem
                    ser adicionados ou removidos quando necessário. Seria cansativo alterar muitos atributos CSS
                    diretamente em JavaScript, então é melhor criar uma nova classe CSS com esses atributos e, em
                    seguida, adicionar a classe ao elemento. Os elementos DOM têm a propriedade <span class="code-color"><em>classList</em></span>, que pode
                    ser usada para visualizar e manipular as classes atribuídas ao elemento correspondente.
                </p>
                <p class="Texto">
                    Por exemplo, em vez de alterar a visibilidade do elemento, podemos criar uma classe CSS adicional
                    para destacar nosso div content:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>div.content</strong></span> {
  <span class="blue-code">border</span>: <span class="orange-code">"1px solid black;"</span>
  <span class="blue-code">opacity</span>: <span class="orange-code">0.25;</span>
}
<br>
<span class="code-color"><strong>div.content.highlight</strong></span> {
  <span class="blue-code">border</span>: <span class="orange-code">"1px solid red;"</span>
  <span class="blue-code">opacity</span>: 1;
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Esta folha de estilo adiciona uma borda preta fina e uma semitransparência a todos os elementos da
                    classe <span class="code-color"><em>content</em></span>. Apenas os elementos que também pertencem à classe <span class="code-color"><em>highlight</em></span> serão totalmente
                    opacos e terão a borda vermelha fina. Então, em vez de alterar as propriedades CSS diretamente
                    como fizemos antes, podemos usar o método <span class="code-color"><em>classList.add("highlight")</em></span> no elemento selecionado:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// Which content to highlight</span>
<span class="green-code"><strong>let</strong></span> content_highlight;
<span class="comment">// Select a random content ID</span>
<span class="green-code"><strong>switch</strong></span> ( <span class="blue-code">Math.floor</span>(<span class="blue-code">Math.random</span>() * 3) )
{
  <span class="green-code"><strong>case</strong></span> <span class="dark_blue_code"><strong>0</strong></span>:
  content_highlight = <span class="orange-code">"#content_first";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="dark_blue_code"><strong>1</strong></span>:
  content_highlight = <span class="orange-code">"#content_second";</span>
  <span class="green-code"><strong>break;</strong></span>
  <span class="green-code"><strong>case</strong></span> <span class="dark_blue_code"><strong>2</strong></span>:
  content_highlight = <span class="orange-code">"#content_third";</span>
  <span class="green-code"><strong>break;</strong></span>
}
<span class="comment">// Highlight the selected div</span>
<span class="blue-code">document</span>.querySelector(content_highlight).<span class="green-code">classList.add</span>(<span class="orange-code">"highlight";</span>)
                    </code></pre>
                </div>
                <p class="Texto">
                Todas as técnicas e exemplos que vimos até agora foram realizados no final do processo de
carregamento da página, mas eles não se limitam a essa etapa. Na verdade, o que torna o JavaScript
tão útil para os desenvolvedores web é sua capacidade de reagir aos eventos da página, como
veremos a seguir.
                </p>
                <p class="Subtopico"><strong>Manipuladores de eventos</strong></p>
                <p class="Texto">
                Todos os elementos visíveis da página são suscetíveis a eventos interativos, como os cliques ou o
próprio movimento do mouse. Podemos associar ações personalizadas a esses eventos, o que expande
muito as capacidades de um documento HTML.
                </p>
                <p class="Texto">
                    O elemento HTML que mais obviamente se beneficia de uma ação associada é o elemento button.
                    Para entender como funciona, adicione três botões acima do primeiro elemento <span class="code-color"><em>div</em></span> da página de
                    exemplo:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span>
<span class="code-color"><strong>&lt;button&gt;</strong></span>First<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;button&gt;</strong></span>Second<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;button&gt;</strong></span>Third<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;div </strong><span class="blue-code">class=</span>=<span class="orange-code">"content"</span> <span class="blue-code">id=</span>=<span class="orange-code">"content_first"</span><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>First section.<span class="code-color">&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="comment"><-- #content_first --></span>
<span class="code-color"><strong>&lt;div </strong><span class="blue-code">class=</span>=<span class="orange-code">"content"</span> <span class="blue-code">id=</span>=<span class="orange-code">"content_second"</span><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Second section.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="comment"><-- #content_second --></span>
<span class="code-color"><strong>&lt;div </strong><span class="blue-code">class=</span>=<span class="orange-code">"content"</span> <span class="blue-code">id=</span>=<span class="orange-code">"content_third"</span><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Third section.<span class="code-color">&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="comment"><-- #content_third --></span>
                    </code></pre>
                </div>
                <p class="Texto">
                    Os botões não fazem nada por conta própria, mas suponha que você queira destacar o <span class="code-color"><em>div</em></span>
                    correspondente ao botão pressionado. Podemos usar o atributo <span class="code-color"><em>onClick</em></span> para associar uma ação a
                    cada botão:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span>
<span class="code-color"><strong>&lt;button </strong></span>
<span class="blue-code">onClick</span>=<span class="orange-code">"document.getElementById('content_first').classList.toggle('highlight')"</span><span class="code-color"><strong>&gt;</strong></span>
First
<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;button </strong></span>
<span class="blue-code">onClick</span>=<span class="orange-code">"document.getElementById('content_second').classList.toggle('highlight')"</span><span class="code-color"><strong>&gt;</strong></span>
Second
<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;button </strong></span>
<span class="blue-code">onClick</span>=<span class="orange-code">"document.getElementById('content_third').classList.toggle('highlight')"</span><span class="code-color"><strong>&gt;</strong></span>
Third
<span class="code-color"><strong>&lt;/button&gt;</strong></span>
<span class="code-color"><strong>&lt;/p&gt;</strong></span>

                    </code></pre>
                </div>
                <p class="Texto">
                    O método <span class="code-color"><em>classList.toggle()</em></span> adiciona a classe especificada ao elemento se ela não estiver presente
                    e remove essa classe se ela já estiver presente. Se você executar o exemplo, notará que mais de um
                    <span class="code-color"><em>div</em></span> pode ser destacado ao mesmo tempo. Para destacar apenas o <span class="code-color"><em>div</em></span> correspondente ao botão
                    pressionado, é necessário remover a classe <span class="code-color"><em>highlight</em></span> dos outros elementos <span class="code-color"><em>div</em></span>. No entanto, se a
                    ação personalizada for muito longa ou envolver mais de uma linha de código, é mais prático escrever
                    uma função separada da tag do elemento:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>function</strong></span> highlight(id)
{
  <span class="comment">// Remove the "highlight" class from all content elements</span>
  <span class="green-code"><strong>for</strong></span> (element <span class="green-code"><strong>of</strong></span> <span class="blue-code">document</span>.querySelectorAll(<span class="orange-code">".content"</span>))
  {
    element.classList.remove(<span class="orange-code">'highlight'</span>);
  }
  <span class="comment">// Add the "highlight" class to the corresponding element</span>
  <span class="blue-code">document</span>.getElementById(<span class="orange-code">id</span>).classList.add(<span class="orange-code">'highlight'</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Como nos exemplos anteriores, esta função pode ser posta dentro de uma tag <span class="code-color"><em>&lt;script&gt;</em></span> ou em um
                    arquivo JavaScript externo associado ao documento. A função <span class="code-color"><em>highlight</em></span> remove primeiro a classe
                    <span class="code-color"><em>highlight</em></span> de todos os elementos <span class="code-color"><em>div</em></span> associados à classe <span class="code-color"><em>content</em></span>, adicionando em seguida a classe
                    <span class="code-color"><em>highlight</em></span> ao elemento escolhido. Cada botão deve então chamar esta função a partir de seu atributo
                    <span class="code-color"><em>onClick</em></span>, usando o ID correspondente como argumento da função:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color">&lt;p&gt;</span>
    <span class="code-color">&lt;button <span class="blue-code">onClick</span>=&quot;<span class="orange-code">highlight('content_first')</span>&quot;&gt;</span>
        Primeiro
    <span class="code-color">&lt;/button&gt;</span>
    <span class="code-color">&lt;button <span class="blue-code">onClick</span>=&quot;<span class="orange-code">highlight('content_second')</span>&quot;&gt;</span>
        Segundo
    <span class="code-color">&lt;/button&gt;</span>
    <span class="code-color">&lt;button <span class="blue-code">onClick</span>=&quot;<span class="orange-code">highlight('content_third')</span>&quot;&gt;</span>
        Terceiro
    <span class="code-color">&lt;/button&gt;</span>
<span class="code-color">&lt;/p&gt;</span>
                    </code></pre>
                </div>
                <p class="Texto">
                    Além do atributo <span class="code-color"><em>onClick</em></span>, poderíamos usar o atributo <span class="code-color"><em>onMouseOver</em></span> (disparado quando o dispositivo
                    apontador é usado para mover o cursor sobre o elemento), o atributo<span class="code-color"><em>onMouseOut</em></span> (disparado quando
                    o dispositivo apontador não está mais sobre o elemento), etc. Além disso, os manipuladores de
                    eventos não se restringem aos botões; portanto, podemos atribuir ações personalizadas a esses
                    manipuladores de eventos para todos os elementos HTML visíveis.
                </p>

            </div>
        </div>
    </div>

<?php
        include('../../layouts/footer.php')
?>