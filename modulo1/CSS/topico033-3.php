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
                <p class="Titulo">033.3 - Estilização com CSS</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O CSS inclui centenas de propriedades que podem ser usadas para modificar a aparência dos elementos HTML. Somente os designers experientes conseguem memorizar a maioria deles. No entanto, vale a pena conhecer as propriedades básicas que são aplicáveis a qualquer elemento, bem como algumas propriedades específicas de determinados elementos. Este capítulo trata de algumas propriedades populares que você certamente encontrará em seu caminho.</p>
                <br>
                <p class="Subtopico"><strong>Propriedades e valores comuns do CSS</strong></p>
                <p class="Texto">
                Muitas propriedades CSS têm o mesmo tipo de valor. As cores, por exemplo, têm o mesmo formato numérico, quer estejamos mexendo na cor da fonte ou na cor do fundo. Da mesma forma, as unidades disponíveis para mudar o tamanho da fonte também são usadas para alterar a espessura de uma borda. No entanto, o formato do valor nem sempre é único. As cores, por exemplo, podem ser inseridas em vários formatos diferentes, como veremos a seguir.
                </p>
                <br>
                <p class="Subtopico"><strong>Cores</strong></p>
                <p class="Texto">
                Alterar a cor de um elemento é provavelmente uma das primeiras coisas que os designers aprendem a fazer em CSS. É possível trocar a cor do texto, a cor do plano de fundo, a cor da borda dos elementos e muito mais.
                </p>
                <p class="Texto">
                O valor de uma cor em CSS pode ser escrito como uma palavra-chave da cor (ou seja, um nome de cor) ou como um valor numérico que lista cada componente da cor. Todos os nomes de cores comuns (em inglês), como <span class="code-color"><em>black</em></span>, <span class="code-color"><em>white</em></span>, <span class="code-color"><em>red</em></span>, <span class="code-color"><em>purple</em></span>, <span class="code-color"><em>green</em></span>, <span class="code-color"><em>yellow</em></span> e <span class="code-color"><em>blue</em></span>, são aceitos como palavras-chave de cores. A lista completa de palavras-chave de cores aceitas pelo CSS está disponível na página web da W3C. Mas para ter um controle mais preciso sobre a cor, é melhor usar o valor numérico.
                </p>
                <br>
                <p class="Subtopico"><strong>Valores numéricos de cor</strong></p>
                <p class="Texto">
                Embora intuitivas, as palavras-chave de cor não oferecem a gama completa de cores possíveis nos monitores modernos. Os webdesigners geralmente desenvolvem uma paleta de cores personalizada, atribuindo valores específicos aos componentes vermelho, verde e azul.
                </p>
                <p class="Texto">
                Cada componente de uma cor é representado por um número binário de oito bits, variando de <span class="code-color"><strong>0 a 255</strong></span>. Todos os três componentes devem ser especificados na mistura de cores, sempre na ordem <span class="red-code"><strong>vermelho</strong></span>, <span class="green-color"><strong>verde</strong></span>, <span class="dark_blue_code"><strong>azul</strong></span>. Portanto, para trocar a cor de todo o texto da página para vermelho usando a notação RGB, usamos <span class="code-color"><em>rgb(255,0,0)</em></span>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>*</strong></span> {
    <span class="blue-code">color:</span><span class="dark_blue_code"> rgb</span>(<span class="code-color"><strong>255,0,0</strong></span>);
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Um componente definido como <span class="code-color"><em>0</em></span> indica que a cor básica correspondente não é usada na mistura de cores. Também é possível usar porcentagens em vez de números:</p>
                <br>
                <div class="typewriter-small" style="width: 60%"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>*</strong></span> {
<span class="blue-code">color:</span><span class="dark_blue_code"> rgb</span>(<span class="code-color"><strong>100%,0%,0%</strong></span>);
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                A notação RGB raramente é vista nos aplicativos de desenho para a criação de layouts ou apenas para a escolha de cores. Em vez disso, é mais comum ver as cores CSS expressas em valores <span class="code-color"><em>hexadecimais</em></span>. Os componentes de uma cor em notação hexadecimal também variam de 0 a 255, mas de uma forma mais sucinta, começando com um símbolo de <em>hash</em> (cerquilha) # e limitando-se a um comprimento fixo de dois dígitos para todos os componentes. O valor mínimo 0 é <span class="code-color"><em>00</em></span> e o valor máximo 255 é <span class="code-color"><em>FF</em></span>, de modo que a cor red (vermelho) seria <span class="code-color"><em>#FF0000</em></span>.
                </p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-head-side-virus"></i> 
                        DICA
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                    <p class="Texto">Se os dígitos de cada componente de uma cor hexadecimal se repetirem, o segundo dígito pode ser omitido. A cor red, por exemplo, pode ser escrita com um único dígito para cada componente: #F00.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">
                A lista a seguir mostra a notação RGB e hexadecimal para algumas cores básicas:
                </p>
                <br>
                <table border="1" cellpadding="10">
                <thead>
                  <tr>
                    <th>Palavra-chave da cor</th>
                    <th>Notação RGB</th>
                    <th>Valor Hexadecimal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>black</td>
                    <td>rgb(0,0,0) </td>
                    <td>#000000</td>
                  </tr>
                  <tr>
                    <td>white</td>
                    <td>rgb(255,255,255)</td>
                    <td>#FFFFFF</td>
                  </tr>
                  <tr>
                    <td>red</td>
                    <td>rgb(255,0,0)</td>
                    <td>#FF0000</td>
                  </tr>
                  <tr>
                    <td>purple</td>
                    <td>rgb(128,0,128)</td>
                    <td>#800080</td>
                  </tr>
                  <tr>
                    <td>gree</td>
                    <td>rgb(0,128,0) </td>
                    <td>#008000</td>
                  </tr>
                  <tr>
                    <td>yellow</td>
                    <td>rgb(255,255,0)</td>
                    <td>#FFFF00</td>
                  </tr>
                  <tr>
                    <td>blue</td>
                    <td>rgb(0,0,255) </td>
                    <td>#0000FF</td>
                  </tr>
                </tbody>
              </table>
              <br>
              <p class="Texto">
              As palavras-chave de cores e as letras nos valores de cor hexadecimais não diferenciam maiúsculas de minúsculas.
              </p>
              <br>
              <p class="Subtopico"><strong>Opacidade da cor</strong></p>
              <p class="Texto">
              Além de cores opacas, é possível preencher os elementos da página com cores semitransparentes. A opacidade de uma cor é definida com um quarto componente no valor da cor. Ao contrário dos outros componentes, cujos valores são números inteiros entre 0 a 255, a opacidade é uma fração que varia de <span class="code-color"><strong>0</strong></span> a <span class="code-color"><strong>1</strong></span>.
              </p>
              <p class="Texto">
              O valor mais baixo, <span class="code-color"><strong>0</strong></span>, resulta em uma cor completamente <span class="code-color"><em>transparente</em></span>, tornando-a indistinguível de qualquer outra cor totalmente transparente. O valor mais alto, <span class="code-color"><strong>1</strong></span>, resulta em uma cor totalmente <span class="code-color"><em>opaca</em></span>, idêntica à cor original, sem nenhuma transparência.
              </p>
              <p class="Texto">
              Ao usar a notação RGB, especifique as cores com um componente de opacidade por meio do prefixo <span class="code-color"><em>rgba</em></span> em vez de rgb. Portanto, para tornar a cor vermelha semitransparente, use <span class="code-color"><em>rgba(255,0,0,0.5)</em></span>. O caractere <span class="code-color"><em>a</em></span> indica o canal <em>alpha</em>, um termo comumente usado para especificar o componente de opacidade no jargão gráfico digital.
              </p>
              <br>
              <p class="Texto">
              A opacidade também pode ser definida na notação hexadecimal. Nesse caso, como os outros componentes de cor, a opacidade varia de 00 a FF. Portanto, para tornar a cor red semitransparente usando a notação hexadecimal, usaríamos <span class="code-color"><em>#FF000080</em></span>.
              </p>
              <br>
              <p class="Subtopico"><strong>Plano de fundo</strong></p>
              <p class="Texto">
              A cor de fundo de elementos individuais ou de toda a página é definido com a propriedade <span class="code-color"><em>background-color</em></span>. Ela aceita os mesmos valores da propriedade <span class="code-color"><em>color</em></span>, seja na forma de palavraschave ou em notação RGB/hexadecimal.
              </p>
              <p class="Texto">
              No entanto, o plano de fundo dos elementos HTML não se restringe às cores. Com a propriedade <span class="code-color"><em>background-image</em></span>, é possível usar uma imagem como fundo. Todos os formatos convencionais aceitos pelo navegador, como JPEG e PNG, podem ser usados.
              </p>
              <p class="Texto">
              O caminho para a imagem deve ser especificado usando um designador <span class="code-color"><em>url()</em></span>. Se a imagem que você deseja usar estiver na mesma pasta do arquivo HTML, basta incluir o nome do arquivo:
              </p>
              <br>
              <div class="typewriter-small" style="width: 60%;" id="copycode">
              <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>body</strong></span> {
    <span class="blue-code">background-image:</span><span class="green-code"> url("background.jpg")</span>;
}
                    </code></pre>
              </div>
                <br>
                <p class="Texto">
                Neste exemplo, o arquivo de imagem <em>background.jpg</em> será usado como imagem de fundo para todo o corpo da página. Por padrão, a imagem de fundo é repetida se seu tamanho não bastar para cobrir a página inteira, começando no canto superior esquerdo da área correspondente ao seletor da regra. Esse comportamento pode ser modificado com a propriedade <span class="code-color"><em>background-repeat</em></span>. Se você quiser que a imagem de fundo seja posta na área do elemento sem repeti-la, use o valor <span class="code-color"><em>no-repeat</em></span>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>body</strong></span> {
    <span class="blue-code">background-image:</span><span class="green-code"> url("background.jpg")</span>;
    <span class="blue-code">background-repeat:</span><span class="dark_blue_code"> no-repeat</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Também podemos fazer a imagem se repetir apenas na direção horizontal <span class="code-color"><em>(background-repeat: repeat-x)</em></span> ou apenas na vertical <span class="code-color"><em>(background-repeat: repeat-y)</em></span>.
                </p>
                <br>
                <div class="image-content">
                    <img src="../../assets/img/background-repeat-illustration.png" alt="Background-repeat" class="img-fluid">
                </div>
                <br>
                <p class="em">
                Figure 34. Posicionamento do fundo usando a propriedade background-repeat.
                </p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-head-side-virus"></i> 
                        DICA
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                    <p class="Texto">Duas ou mais propriedades CSS podem ser combinadas em uma só, que seria a propriedade abreviada (ou shorthand) do plano de fundo. As propriedades background-image e background-repeat, por exemplo, podem ser reunidas em uma única propriedade de plano de fundo com background: no-repeat url("background.jpg").</p>
                    </div>
                </div>
                <br>
                <p class="Texto">
                A porcentagem de cada posição é relativa ao tamanho correspondente do elemento. No exemplo, o lado esquerdo da imagem de fundo estará a 30% da largura do corpo (normalmente o corpo é todo o documento visível) e o lado superior da imagem estará a 10% da altura do corpo.
                </p>
                <br>
                <p class="Subtopico"><strong>Bordas</strong></p>
                <p class="Texto">
                Outra personalização de layout comum feita com CSS é alterar a borda de um elemento. A borda se refere à linha que forma um retângulo ao redor do elemento e tem três propriedades básicas: <span class="code-color"><em>color</em></span>, <span class="code-color"><em>style</em></span> e <span class="code-color"><em>width</em></span>.
                </p>
                <p class="Texto">
                A cor da borda, definida com border-color, segue o mesmo formato que vimos para as outras propriedades de cor.
                </p>
                <p class="Texto">
                As bordas podem ser traçadas em um estilo diferente de uma linha sólida. A propriedade <span class="code-color"><em>borderstyle: dashed</em></span>, por exemplo, criaria uma borda tracejada. Os outros valores de estilo possíveis são:
                </p>
                <br>
                
                <div class="typewriter-small" style="width: 70%;">
                <strong>dotted</strong><p>Uma sequência de pontos redondos.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>double</strong>
                    <p>Duas linhas retas.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>groove</strong>
                    <p>Uma linha com aparência sulcada</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>ridge</strong>
                    <p>Uma linha com aparência tridimensional</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>inset</strong>
                    <p>Um elemento em baixo relevo</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>outset</strong>
                    <p>Um elemento em alto relevo</p>
                </div>
                <br>
                <p class="Texto">
                Os tamanhos e distâncias em CSS podem ser definidos de diferentes maneiras. As unidades absolutas são baseadas em um número fixo de pixels da tela e, portanto, não são tão diferentes dos tamanhos e dimensões fixos usados na mídia impressa. Existem também unidades relativas, que são calculadas dinamicamente a partir de alguma medida fornecida pela mídia onde a página está sendo exibida, como o espaço disponível ou outro tamanho escrito em unidades absolutas.
                </p>
                <br>
                <p class="Subtopico"><strong>Unidades absolutas</strong></p>
                <p class="Texto">
                As unidades absolutas são equivalentes às suas correspondentes físicas, como centímetros ou polegadas. Nos monitores convencionais, uma polegada tem 96 pixels de largura. As seguintes unidades absolutas são comumente usadas:
                </p>
                <br>
                <div class="typewriter-small" style="width: 70%;">
                <strong>in (polegada)</strong><p>1 in equivale a a 2,54 cm ou 96 px.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>cm  (centímetro)</strong>
                    <p> 1 cm equivale a 96 px / 2,54.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>mm (milímetro)</strong>
                    <p>1 mm equivale a 1 cm / 10.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>px (píxel)</strong>
                    <p>1 px equivale a 1 / 96 de polegada.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>pt (ponto)</strong>
                    <p>1pt equivale a 1 / 72 de polegada.</p>
                </div>
                <br>
                <p class="Texto">
                As unidades relativas variam de acordo com as outras medidas ou com as dimensões da janela de visualização. A janela de visualização é a área do documento atualmente visível em sua janela. No modo de tela inteira, a janela de visualização corresponde à tela do dispositivo. As seguintes unidades relativas são comumente usadas:
                </p>
                <br>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>%</strong>
                    <p>Porcentagem—é relativa ao elemento pai.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                <strong>em</strong><p>O tamanho da fonte usada no elemento.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>rem</strong>
                    <p>O tamanho da fonte usada no elemento raiz.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>vw</strong>
                    <p>1% da largura da janela de visualização</p>
                </div>
                <div class="typewriter-small"  style="width: 70%;">
                    <strong>vh</strong>
                    <p>1% da altura da janela de visualização.</p>
                </div>
                <br>
                <p class="Texto">
                A vantagem de se usar unidades relativas é poder criar layouts ajustáveis alterando apenas alguns tamanhos determinados. Por exemplo, podemos usar a unidade <span class="code-color"><em>pt</em></span> para definir o tamanho da fonteno elemento do corpo e a unidade rem para as fontes dos outros elementos. Depois de alterar o tamanho da fonte do corpo, todos os outros tamanhos de fonte serão ajustados a partir dali. Além disso, o uso de vw e vh para definir as dimensões das seções da página as torna ajustáveis para telas de tamanhos diferentes.
                </p>
                <br>
                <p class="Subtopico"><strong>Propriedades das fontes de do texto</strong></p>
                <p class="Texto">
                A tipografia, ou o estudo dos tipos de fonte, é um assunto muito amplo dentro do design, e a tipografia CSS não fica para trás. No entanto, existem algumas propriedades básicas de fonte que atenderão às necessidades da maioria dos usuários que estão aprendendo CSS.
                </p>
                <p class="Texto">
                A propriedade font-family define o nome da fonte a ser usada. Não há garantia de que a fonte escolhida estará disponível no sistema onde a página será visualizada, portanto esta propriedade talvez não tenha efeito no documento. Embora seja possível fazer o navegador baixar e usar o arquivo de fonte especificado, a maioria dos webdesigners prefere usar uma família de fontes genérica em seus documentos.
                </p>
                <p class="Texto">
                As três famílias de fontes genéricas mais comuns são <sapn class="code-color"><em>serif</em></sapn>, <span class="code-color"><em>sans-serif</em></span> e <span class="code-color"><em>monospace</em></span>. Serif é a família de fontes padrão da maioria dos navegadores. Se você preferir usar sans-serif para a página inteira, adicione a seguinte regra à sua folha de estilo:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>*</strong></span> {
    <span class="blue-code">font-family: </span><span class="dark_blue_code"> sans-serif</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Opcionalmente, podemos primeiro definir um nome específico de família de fonte, seguido pelo nome de família genérico:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>*</strong></span> {
    <span class="blue-code">font-family: </span><span class="orange-code">"DejaVu Sans"</span>,<span class="dark_blue_code"> sans-serif</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Se o dispositivo que exibe a página tiver essa família de fontes específica, o navegador a usará. Caso contrário, ele usará a fonte padrão correspondente ao nome de família genérico. Os navegadores procuram pelas fontes na ordem em que elas estão especificadas na propriedade.
                </p>
                <p class="Texto">
                Qualquer pessoa que tenha usado um aplicativo de processamento de texto também estará familiarizado com três outros ajustes de fonte: tamanho, peso e estilo. Esses três ajustes têm seus equivalentes nas propriedades CSS: <span class="code-color"><em>font-size</em></span>, <span class="code-color"><em>font-weight</em></span> e <span class="code-color"><em>font-style</em></span>.
                </p>
                <p class="Texto">
                A propriedade <span class="code-color"><em>font-size</em></span> aceita palavras-chave de tamanho como <span class="code-color"><em>xx-small</em></span>, <span class="code-color"><em>x-small</em></span>, <span class="code-color"><em>small</em></span>, <span class="code-color"><em>medium</em></span>, <span class="code-color"><em>large</em></span>, <span class="code-color"><em>x-large</em></span>, <span class="code-color"><em>xx-large</em></span>, <span class="code-color"><em>xxx-large</em></span>. Essas palavras-chave são relativas ao tamanho de fonte padrão usado pelo navegador. As palavras-chave larger e smaller alteram o tamanho da fonte com relação ao tamanho da fonte do elemento pai. Também é possível expressar o tamanho da fonte com valores numéricos, incluindo a unidade após o valor, ou com porcentagens.
                </p>
                <p class="Texto">
                Se você não deseja alterar o tamanho da fonte, mas sim a distância entre as linhas, use a propriedade <span class="code-color"><em>line-height</em></span>. Uma <span class="code-color"><em>line-height</em></span> de <span class="code-color"><em>1</em></span> torna a altura da linha do mesmo tamanho da fonte do elemento, o que pode deixar as linhas de texto próximas demais umas das outras. Portanto, um valor maior que 1 é mais apropriado para textos. Assim como na propriedade <span class="code-color"><em>font-size</em></span>, outras unidades podem ser usadas junto com o valor numérico.
                </p>
                <p class="Texto">
                <span class="code-color"><em>font-weight</em></span> define a espessura da fonte, usando as conhecidas palavras-chave normal ou bold (negrito). As palavras-chave <span class="code-solor"><em>lighter</em></span> e <span class="code-color"><em>bolder</em></span> alteram o peso da fonte do elemento em relação ao peso da fonte de seu elemento pai.
                </p>
                <p class="Texto">
                A propriedade <span class="code-color"><em>font-style</em></span> pode ser definida como <span class="code-color"><em>italic</em></span> para selecionar a versão em itálico da família de fontes atual. O valor oblique seleciona a versão oblíqua da fonte. Essas duas opções são quase idênticas, mas a versão em itálico de uma fonte geralmente é um pouco mais estreita do que a versão oblíqua. Se não houver versões em itálico ou oblíquo da fonte, a fonte será inclinada artificialmente pelo navegador.
                </p>
                <p class="Texto">
                Existem outras propriedades que alteram a forma como o texto é processado no documento. Você pode, por exemplo, adicionar um sublinhado a algumas partes do texto que deseja enfatizar. Primeiro, use uma tag <span> para delimitar o texto:
                </p>
                <br>
                <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span>CSS é o <span class="code-color"><strong>&lt;span</strong></span> <span class="blue-code">class=</span><span class="orange-code">"under"</span><span class="code-color"><strong>&gt;</strong></span>mecanismo dedicado <span class="code-color"><strong>&lt;/span&gt;</strong></span> para estilizar documentos HTML. <span class="code-color"><strong>&lt;/p&gt;</strong></span>
            </code></pre>
                </div>
                <br>
                <p class="Texto">
                Use então o seletor <span class="code-color"><em>.under</em></span> para alterar a propriedade <span class="code-color"><em>text-decoration</em></span>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>.under</strong></span> {
    <span class="blue-code">text-decoration: </span><span class="dark_blue_code"> underline</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Por padrão, todos os elementos a (link) são sublinhados. Para remover o sublinhado, use o valor none em <span class="code-color"><em>text-decoration</em></span> de todos os elementos a:
                </p>
                <br>
                <div class="typewriter-small" style="width:60%;" id="copycode">]
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>a</strong></span> {
    <span class="blue-code">text-decoration: </span><span class="dark_blue_code"> none</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Ao revisar o conteúdo, alguns autores gostam de riscar as partes incorretas ou desatualizadas do texto, para que o leitor saiba que o texto foi atualizado e o que foi removido. Para fazer isso, use o valor <span class="code-color"><em>line-through</em></span> da propriedade <span class="code-color"><em>text-decoration</em></span>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>.disregard</strong></span> {
    <span class="blue-code">text-decoration: </span><span class="dark_blue_code"> line-through</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Mais uma vez, uma tag <span class="code-color"><strong>&lt;span&gt;</strong></span> pode ser usada para aplicar o estilo:
                </p>
                <br>
                <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span>Netscape Navigator <span class="code-color"><strong>&lt;span</strong></span> <span class="blue-code">class=</span><span class="orange-code">"disregard"</span><span class="code-color"><strong>&gt;</strong></span>é<span class="code-color"><strong>&lt;/span&gt;</strong></span> era o mais popular dos web browsers. <span class="code-color"><strong>&lt;/p&gt;</strong></span>
                </code></pre>
                </div>
                <br>
                <p class="Texto">
                Existem decorações específicas a um elemento. Os círculos nas listas de marcadores podem ser personalizados usando a propriedade <em>list-style-type</em>. Para transformá-los em quadrados, por exemplo, usamos <span class="code-color"><em>list-style-type: square</em></span>. Para simplesmente removê-los, definimos o valor de <span class="code-color"><em>list-style-type</em></span> como <span class="code-color"><em>none</em></span>.
                </p>
            </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade07.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"></a>

    <?php include('../../layouts/footer.php') ?>
</body>
</html>