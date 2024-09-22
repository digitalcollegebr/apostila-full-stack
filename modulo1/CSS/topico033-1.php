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
                <p class="Titulo">Noções básicas de CSS</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                Todos os navegadores web exibem as páginas HTML de acordo com regras de apresentação padrão que são práticas e diretas, mas não visualmente atraentes. O HTML, por si só, oferece poucos recursos para produzir páginas elaboradas que correspondam aos conceitos modernos de experiência do usuário. Depois de criar algumas páginas HTML simples, você provavelmente percebeu que elas são feiosas quando comparadas às páginas bem projetadas que vemos comumente na Internet. Isso ocorre porque, no HTML moderno, o código de marcação destinado à estrutura e função dos elementos no documento (ou seja, o conteúdo semântico) é separado das regras que definem a aparência dos elementos (a apresentação). As regras de apresentação são escritas em uma linguagem diferente, chamada <span class="code-color"><strong>Cascading Style Sheets (CSS)</strong></span>. Ela permite alterar quase todos os aspectos visuais do documento, como fontes, cores e o posicionamento dos elementos ao longo da página.
                </p>
                <p class="Texto">
                Na maioria dos casos, os documentos HTML não são pensados para ser exibidos em um layout fixo, como um arquivo PDF. Em vez disso, as páginas web baseadas em HTML devem se adaptar a uma ampla variedade de tamanhos de tela, ou até mesmo a formatos impressos. O CSS oferece opções ajustáveis para garantir que a página seja exibida conforme o esperado, adaptada ao dispositivo ou aplicativo que a abre.
                </p>
                <br>
                <p class="Subtopico"><strong>Aplicação de estilos</strong></p>
                <p class="Texto">Existem várias maneiras de incluir CSS em um documento HTML: escrever diretamente na tag do elemento, em uma seção separada do código-fonte da página ou em um arquivo externo a ser referenciado pela página HTML. </p>
                <br>
                <p class="Subtopico"><strong>O atributo style</strong></p>
                <p class="Texto">
                A maneira mais simples de modificar o estilo de um elemento específico é escrevê-lo diretamente na tag do elemento usando o atributo <span class="code-color"><em>style</em></span>. Todos os elementos HTML visíveis aceitam um atributo <span class="code-color"><em>style</em></span>, cujo valor pode ser uma ou mais regras de CSS, também conhecidas como <span class="code-color"><em>propriedades</em></span>. Vamos começar com um exemplo simples, um elemento de parágrafo:
                </p>
                <br>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;p&gt;</strong></span>Meu parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
                </div>
                <br>
                <p class="Texto">A sintaxe básica de uma propriedade CSS personalizada é <span class="code-color"><em>property: value</em></span>, onde <span class="code-color"><em>property</em></span> é o aspecto particular que você deseja alterar no elemento e <span class="code-color"><em>value</em></span> define o que substituirá a opção padrão feita pelo navegador. Algumas propriedades se aplicam a todos os elementos e outras se aplicam apenas a elementos específicos. Da mesma forma, existem valores adequados a serem utilizados em cada propriedade.</p>
                <p class="Texto">
                Para mudar a cor do nosso parágrafo simples, por exemplo, usamos a propriedade <span class="code-color"><em>color</em></span>. A propriedade <span class="code-color"><em>color</em></span> refere-se à cor do <em>primeiro plano</em>, ou seja, a cor das letras do parágrafo. A cor em si é indicada na parte do valor da regra e pode ser especificada em vários formatos diferentes, incluindo nomes simples como <em>red</em>, <em>green</em>, <em>blue</em>, <em>yellow</em> etc. Assim, para deixar a letra do parágrafo roxa, adicione a propriedade personalizada <span class="code-color"><em>color: purple</em></span> ao atributo <span class="code-color"><em>style</em></span> do elemento:
                </p>
                <br>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: purple"</span>Meu primeiro parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
                    </div>
                    <br>
                    <p class="Texto">Outras propriedades personalizadas podem entrar na mesma propriedade style, mas devem ser separadas por ponto e vírgula. Se você quiser aumentar o tamanho da fonte, por exemplo, adicione <span class="code-color"><em>font-size: larger</em></span> à propriedade style:</p>
                    <br>
                    <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: purple"; font-size: larger</span>Meu primeiro parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
                    </div>
                    <br>
                    <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">Não é necessário adicionar espaços ao redor dos dois pontos e ponto e vírgula, mas
                            eles ajudam a facilitar a leitura do código CSS.</p>
                        </div>
                    </div>
                    <br>
                    <p class="Texto">
                        <p class="Texto">
                        Para ver o resultado dessas alterações, salve o HTML a seguir em um arquivo e abra-o em um
                        navegador web (os resultados são mostrados na <em>Figure 32</em>):
                    </p>
                    <br>
                    <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>CSS Básico<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: purple"; font-size: larger;<span class="code-color"><strong>&gt;</strong></span></span>Meu primeiro parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: green"; font-size: larger;<span class="code-color"><strong>&gt;</strong></span></span> Meu segundo parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>

<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <br>
            <div class="image-content">
                <img src="../../assets/img/figure32.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figura32.Uma alteração visual simples usando CSS</em></p>
            <br>
            <p class="Texto">
            Podemos imaginar cada elemento da página como um retângulo ou caixa cujas propriedadesvgeométricas e decorações podem ser manipuladas com CSS. O mecanismo de renderização emprega dois conceitos básicos padrão para o posicionamento do elemento: posicionamento <em>em bloco</em> e posicionamento <em>em linha</em>. Os elementos de bloco ocupam todo o espaço horizontal do <pan class="code-color"><em>elemento pai</em></pan> e são posicionados sequencialmente, de cima para baixo. Sua altura (sua dimensão vertical, que não deve ser confundida com sua posição no alto da página) geralmente depende da quantidade de conteúdo que incluem. Os elementos em linha são posicionados horizontalmente, da esquerda para a direita, até que não haja mais espaço no lado direito; depois disso, o elemento continua em uma nova linha logo abaixo da atual. Elementos como <span class="code-color"><em>p</em></span>, <span class="code-color"><em>div</em></span> e <span class="code-color">section</span> são posicionados como blocos por padrão, ao passo que elementos como <span class="code-color"><em>span</em></span>, <span class="code-color"><em>em</em></span>, <span class="code-color"><em>a</em></span> e letras sozinhas são posicionados em linha. Esses métodos básicos de posicionamento podem ser modificados fundamentalmente pelas regras do CSS.
            </p>
            <p class="Texto">O retângulo correspondente ao elemento p no corpo do documento HTML de amostra ficará visível se adicionarmos a propriedade background-color à regra (<em>Figure 33</em>):</p>
            <br>
            <div style class="typewriter-small" style="width: 50%; text-align:">
            <span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: purple"; font-size: larger; background-color: silver"<span class="code-color"><strong>&gt;</strong></span></span>Meu primeiro parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
            <span class="code-color"><strong>&lt;p</strong></span> <span class="blue-code">style=</span><span class="orange-code">"color: green"; font-size: larger; background-color: silver"<span class="code-color"><strong>&gt;</strong></span></span> Meu segundo parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
            </div>
            <br>
            <div class="image-content">
                <img src="../../assets/img/figure33.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figura 33. Retângulos correspondentes aos parágrafos.</em></p>
            <br>
            <p class="Texto">
            Conforme adicionamos novas propriedades personalizadas de CSS ao atributo style, o código como um todo vai começando a ficar confuso. A inclusão de muitas regras de CSS no atributo style prejudica a separação entre a estrutura (HTML) e a apresentação (CSS). Além disso, você logo perceberá que muitos estilos são compartilhados entre diferentes elementos e não vale a pena repetilos em cada um deles.</p>
            <br>
            <p class="Subtopico"><strong>Regras de CSS</strong></p>
                  <p class="Texto">
                  Em vez de estilizar os elementos diretamente nos atributos style de cada um deles, é muito mais prático informar ao navegador sobre a coleção inteira de elementos aos quais o estilo personalizado se aplica. Para isso, adicionamos um seletor às propriedades personalizadas, combinando elementos por tipo, <span class="code-color"><em>classe</em></span>, <span class="code-color"><em>ID único</em></span>, <span class="code-color"><em>posição relativa</em></span> etc. A combinação de um seletor com as propriedades personalizadas correspondentes—o que também chamamos de <em>declarações</em> — constitui uma regra de CSS. A sintaxe básica de uma regra de CSS é <span class="code-color"><em>selector { property: value }</em></span>. Como no caso do atributo style, propriedades separadas por ponto e vírgula podem ser agrupadas, como em p { color: purple; font-size: larger }. Essa regra pega todos os elementos p da página e aplica as propriedades personalizadas color e font-size.
                  </p>
                  <p class="Texto">
                  Uma regra de CSS para um elemento pai abarcará automaticamente todos os seus elementos filhos. Assim, podemos aplicar propriedades personalizadas a todo o texto da página, independentemente de ele estar dentro ou fora de uma tag <span class="code-color"><strong>&lt;p&gt;</strong></span>, usando o seletor <span class="code-color"><strong>body</strong></span>: <span class="code-color"><em>body { color: purple; font-size: larger }</em></span>. Essa estratégia nos livra de precisar escrever a mesma regra novamente para todos os elementos filhos, embora possa ser necessário escrever regras adicionais para “desfazer” ou modificar as regras herdadas.
                  </p>
                  <p class="Subtopico"><strong>A tag style</strong></p>
                  <p class="Texto">
                  A tag <span class="code-color"><strong>&lt;style&gt;</strong></span> permite escrever regras de CSS dentro da página HTML que queremos estilizar. Ela permite ao navegador diferenciar o código CSS do código HTML. A tag <span class="code-color"><strong>&lt;style&gt;</strong></span> entra na seção <span class="code-color"><em>head</em></span> do documento:
                  </p>
                  <br>
                  <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>CSS Básico<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class="code-color"><strong>&lt;p&gt;</strong></span>Meu primeiro parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Meu segundo parágrafo estilizado <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
  <br>
                   <p class="Texto">
                   O atributo type informa ao navegador qual tipo de conteúdo está dentro da tag <span class="code-color"><strong>&lt;strong&gt;</strong></span>, ou seja, seu tipo MIME. Como todo navegador que suporta CSS pressupõe que o tipo da tag <span class="code-color"><strong>&lt;strong&gt;</strong></span> é text/css por padrão, a inclusão do atributo <span class="code-color"><em>type</em></span> é opcional. Há também um atributo <span class="code-color"><em>media</em></span> que indica o tipo de mídia—monitores ou impressão, por exemplo—a que se aplicam as regras de CSS na tag <span class="code-color"><strong>&lt;strong&gt;</strong></span>. Por padrão, as regras de CSS se aplicam a qualquer mídia em que o documento for exibido.
                   </p>
                   <p class="Texto">
                   Como no código HTML, as quebras de linha e o recuo de código não alteram a forma como as regras
                   de CSS são interpretadas pelo navegador. Se escrevermos:
                   </p>
                   <br>
                   <div style class="typewriter-small" style="width: 50%; text-align:">
                    <span class="code-color"><strong>&lt;style type=</strong></span><span class="orange-code">"text/css"</span><span class="code-color"><strong>&gt;</strong></span>
                    <br>
                    <span class="code-color"><strong>p{</strong></span> <span class="blue-code">color: </span><span class="dark_blue_code">purple;</span> <span class="blue-code">font-size: </span><span class="dark_blue_code">larger;</span> <span class="code-color"><strong>}</strong></span>
                    <br>
                    <span class="code-color"><strong>&lt;style&gt;</strong></span>
                  </div>
                  <br>
                  <p class="Texto">o resultado será exatamente igual ao de:</p>
                  <br>
    <div style class="typewriter-small" style="width: 50%; text-align:">
    <pre><code>
<span class="code-color"><strong>&lt;style type=</strong></span><span class="orange-code">"text/css"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>p{</strong></span> 
     <span class="blue-code">color:</span><span class="dark_blue_code">purple;</span> 
     <span class="blue-code">font-size:</span><span class="dark_blue_code">larger;
    </span>
    <span class="code-color"><strong>}</strong></span>
    <span class="code-color"><strong>&lt;style&gt;</strong></span>
                  </pre></code>
                  </div>
                  <p class="Texto">Os bytes extras ocupados pelos espaços e quebras de linha fazem pouca diferença no tamanho final do documento e não têm um impacto significativo no tempo de carregamento da página, portanto a escolha do layout é questão de gosto. Observe o ponto e vírgula após a última declaração <span class="code-color"><em>(fontsize: larger;)</em></span> da regra de CSS. Esse ponto e vírgula não é obrigatório, mas sua presença facilita a inclusão de outra declaração na linha seguinte sem se preocupar com a falta de um ponto e vírgula.</p>
                  <p class="Texto">As declarações em linhas separadas também ajudam quando precisamos comentar uma declaração. Sempre que você quiser desabilitar temporariamente uma declaração para, por exemplo, resolver um problema na página, basta colocar a linha correspondente entre <span class="code-color"><em>/*</em></span> e <span class="code-color"><em>*/</em></span>:</p>
                  <br>
                  <div class="typewriter-small">
    <pre><code>
<span class="code-color"><strong>p;{</strong></span>
     <span class="blue-code">color: </span><span class="dark_blue_code">purple</span>;
     <span style="color: #797979;">/*</span>
     <span style="color: #797979;">font-size: larger;</span>
     <span style="color: #797979;">*/</span>
<span class="code-color"><strong>p;{</strong></span>
    </pre></code>
                </div>
                <br>
                <p class="Texto">ou:</p>
                <br>
                <div class="typewriter-small">
    <pre><code>
<span class="code-color"><strong>p;{</strong></span>
     <span class="blue-code">color: </span><span class="dark_blue_code">purple</span>;
     <span style="color: #797979;">/*</span> <span style="color: #797979;">font-size: larger;</span> <span style="color: #797979;">*/</span>
<span class="code-color"><strong>p;}</strong></span>
    </pre></code>
                </div>
                <br>
                <p class="Texto">Escrita assim, a declaração <span class="code-color"><em>font-size: larger</em></span> será ignorada pelo navegador. Tenha o cuidado de abrir e fechar os comentários corretamente; caso contrário, o navegador pode não ser capaz de interpretar as regras.</p>
                <p class="Texto">Os comentários também são úteis para escrever lembretes sobre as regras:</p>
                <br>
                <div class="typewriter-small">
    <pre><code>
    <span style="color: #797979;">/* O texto dentro de &lt;p&gt; é roxo e largo */</span>
<span class="code-color"><strong>p;{</strong></span>
     <span class="blue-code">color: </span><span class="dark_blue_code">purple</span>;
     <span class="blue-code">font-size: </span><span class="dark_blue_code">larger</span>;
<span class="code-color"><strong>}</strong></span>
    </pre></code>
                </div>
                <br>
                <p class="Texto">Lembretes como o do exemplo são opcionais em folhas de estilo contendo um pequeno número de regras, mas tornam-se essenciais para ajudar a navegar por folhas de estilo com centenas de regras (ou mais).</p>
                <p class="Texto">Embora o atributo <span class="code-color"><em>style</em></span> e a tag <span class="code-color"><strong>&lt;strong&gt;</strong></span> sejam adequados para testar estilos personalizados e úteis em situações específicas, eles não são usados comumente. Em vez disso, as regras de CSS normalmente são mantidas em um arquivo separado que pode ser consultado a partir do documento HTML.</p>
                <br>
                <p class="Subtopico"><strong>CSS em arquivos externos</strong></p>
                <p class="Texto">O método mais usado para associar definições CSS a um documento HTML é armazenar o CSS em um arquivo separado. Este método oferece duas vantagens principais sobre os anteriores:</p>
                <ul>
                    <li>As mesmas regras de estilo podem ser compartilhadas entre documentos distintos.</li>
                    <li>O arquivo CSS geralmente é armazenado em cache pelo navegador, acelerando os tempos de carregamento futuros. Os arquivos CSS têm a extensão <span class="code-color"><em>.css</em></span> e, como os arquivos HTML, podem ser editados em qualquer editor de texto simples. Ao contrário dos arquivos HTML, os arquivos CSS não têm uma estrutura em níveis construída com tags hierárquicas, como <span class="code-color"><em>&lt;head&gt;</em></span> ou <span class="code-color"><em>&lt;body&gt;</em></span>. Em vez disso, o arquivo CSS é apenas uma lista de regras processadas em ordem sequencial pelo navegador. As mesmas regras escritas dentro de uma tag <span class="code-color"><strong>&lt;style&gt;</strong></span> poderiam constar em um arquivo CSS</li>
                </ul>
                <p class="Texto">
                A associação entre o documento HTML e as regras de CSS armazenadas em um arquivo é definida apenas no documento HTML. Para o arquivo CSS, não importa se existem elementos que correspondem às suas regras e, portanto, não há necessidade de enumerar no arquivo CSS os documentos HTML aos quais ele está vinculado. No lado do HTML, todas as folhas de estilo vinculadas serão aplicadas ao documento, como se as regras estivessem escritas em uma tag <span class="code-color"><strong>&lt;style&gt;</strong></span>.
                </p>
                <p class="Texto">
                A tag HTML <span class="code-color"><strong>&lt;link&gt;</strong></span> define uma folha de estilo externa a ser usada no documento atual e deve constar da seção <span class="code-color"><em>head</em></span> do documento HTML:
                </p>
                <br>
                <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>CSS Básico<span class="code-color"><strong>&lt;/title&gt;</strong></span>
    <span class="code-color"><strong>&lt;link</strong></span><span class="blue-code">href=</span> <span class="orange-code">"style.css"</span> <span class="blue-code">rel=</span><span class="orange-code">"stylesheet"</span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
</pre></code>
</div>
                <p class="Texto">
                Podemos colocar a regra para o elemento p que usamos anteriormente no arquivo <span class="code-color"><em>style.css</em></span> e o resultado visto pelo visitante da página web será o mesmo. Se o arquivo CSS não estiver no mesmo diretório do documento HTML, especifique o caminho relativo ou completo até ele no atributo <span class="code-color"><em>href</em></span>. A tag <span class="code-color"><strong>&lt;strong&gt;</strong></span> pode fazer referência a diferentes tipos de recursos externos, por isso é importante estabelecer a relação que o recurso externo tem com o documento atual. Para os arquivos CSS externos, a relação é definida em <span class="code-color"><em>rel="stylesheet"</em></span></p>
                <p class="Texto">
                O atributo media pode ser usado da mesma forma que na tag <span class="code-color"><strong>&lt;style&gt;</strong></span>: ele indica as mídias, como monitores de computador ou impressão, às quais as regras do arquivo externo devem se aplicar</p>
                <p class="Texto">O CSS pode alterar completamente um elemento, mas ainda assim é importante empregar o elemento apropriado para os componentes da página. Caso contrário, as tecnologias de acessibilidade, como os leitores de tela, podem não ser capazes de identificar as seções corretas da página.</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footer.php') ?>
</body>
</html>
