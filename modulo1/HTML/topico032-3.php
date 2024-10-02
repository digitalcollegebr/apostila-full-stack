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
                <p class="Titulo">032.3 - Referências e recursos incorporados do HTML</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">As páginas web modernas raramente são constituídas somente de texto. Elas incluem muitos outros tipos de conteúdo, como imagens, áudio, vídeo e até outros documentos HTML. Junto com o conteúdo externo, os documentos HTML podem conter links para outros documentos, o que torna a experiência de navegação na Internet muito mais simples.</p>
                <p class="Subtopico"><strong>Conteúdo incorporado</strong></p>
                <p class="Texto">A troca de arquivos pela Internet é possível sem páginas web escritas em HTML. Nesse caso, por que o HTML é o formato de preferência para documentos web, e não o PDF ou qualquer outro formato de processamento de texto? Um motivo importante é que o HTML mantém seus recursos multimídia em arquivos separados. Em um ambiente como a Internet, onde as informações geralmente são redundantes e distribuídas em locais diferentes, é importante evitar transferências de dados desnecessárias. Na maioria das vezes, as novas versões de uma página web puxam as mesmas imagens e outros arquivos de suporte das versões anteriores, de modo que o navegador pode usar os arquivos reunidos anteriormente em vez de copiar tudo outra vez. Além disso, a separação dos arquivos facilita a personalização do conteúdo multimídia de acordo com as características do cliente, como localidade, tamanho da tela e velocidade de conexão.</p>
                <br>
                <p class="Subtopico"><strong>Imagens</strong></p>
                <p class="Texto">O tipo mais comum de conteúdo incorporado são as imagens que acompanham o texto. As imagens
                são salvas separadamente e referenciadas dentro do arquivo HTML com a tag <span class="code-color"><strong>&lt;img&gt;</strong></span>:</p>
                <div class="typewriter-small" style="width: 65%; text-align: center;" id="codecopy">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
    <span class="code-color"><strong>&lt;img</strong></span><span class="blue-code"> src=</span><span class="orange-code">"logo.png"</span><span class="code-color"><strong>&gt;</strong></span>
                </div>
                </code></pre>
                <br>
                <p class="Texto">A tag <span class="code-color"><strong>&lt;img&gt;</strong></span> não requer uma tag de fechamento. A propriedade src indica o local de origem do arquivo de imagem. Neste exemplo, o arquivo de imagem logo.png deve estar localizado no mesmo diretório do arquivo HTML, caso contrário o navegador não poderá exibi-lo. A propriedade de localização de origem aceita caminhos relativos, de forma que a notação de ponto pode ser usada para indicar o caminho até a imagem:</p>
                <div class="typewriter-small" style="width: 65%; text-align: center;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i>
                    Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"../logo.png"</span><span class="code-color"><strong>&gt;</strong></span>
                </code></pre>
                </div>
                <br>
                <p class="Texto">Os dois pontos indicam que a imagem está localizada dentro do diretório pai em relação ao diretório onde está o arquivo HTML. Se o nome do arquivo <span class="code-color"><em>../logo.png</em></span> for usado dentro de um arquivo HTML cuja URL é <em>http://example.com/library/periodicals/index.html</em>, o navegador solicitará o arquivo de imagem no endereço <em>http://example.com/library/logo.png</em>.</p>
                <p class="Texto">A notação de ponto também se aplica se o arquivo HTML não for um arquivo real no sistema de arquivos; o navegador HTML interpreta a URL como se fosse um caminho para um arquivo, mas é função do servidor HTTP decidir se esse caminho se refere a um arquivo ou a um conteúdo gerado dinamicamente. O domínio e o caminho correto são adicionados automaticamente a todas as solicitações ao servidor, caso o arquivo HTML venha de uma solicitação HTTP. Da mesma forma, o navegador abrirá a imagem adequada se o arquivo HTML vier diretamente do sistema de arquivos local.</p>
                <p class="Texto">Os locais de origem que começam com uma barra <span class="code-color"><strong>/</strong></span> são tratados como caminhos absolutos. Os caminhos absolutos incluem informações completas sobre os locais da imagem e, portanto, funcionam independentemente da localização do documento HTML. Se o arquivo de imagem estiver localizado em outro servidor, o que será o caso quando uma <span class="code-color"><em>rede de distribuição de conteúdo</em></span> (Content Delivery Network ou CDN) for usada, o nome de domínio também deve ser incluído.</p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                    NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">As redes de distribuição de conteúdo são compostas por servidores distribuídos geograficamente que armazenam conteúdo estático para outros sites. Eles ajudam a melhorar o desempenho e a disponibilidade dos sites com um grande número de acessos.</p>
                        </div>
                    </div>
                <br>
                <p class="Texto">Se a imagem não puder ser carregada, o navegador HTML mostrará o texto fornecido no atributo alt em vez da imagem. Por exemplo:</p>
                <div class="typewriter-small" id="copycode" style="width: 70%; text-align: center;" >
                <button class="copy-btn" onclick="copyCode()">
                     <i class="fas fa-copy"></i>
                     Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"logo.png"</span><span class="blue-code">alt=</span><span class="orange-code">"The Company logo"</span><span class="code-color"><strong>&gt;</strong></span>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O atributo alt também é importante para a acessibilidade. Os navegadores em modo texto e os leitores de tela usam-no como uma descrição para a imagem correspondente.</p>
                <br>
                <p class="Subtopico"><strong>Tipos de imagem</strong></p>
                <p class="Texto">Os navegadores podem exibir todos os tipos mais populares de imagem, como <span class="code-color"><em>JPEG</em></span>, <span class="code-color"><em>PNG</em></span>, <span class="code-color"><em>GIF</em></span> e <span class="code-color"><em>SVG</em></span>. As dimensões das imagens são detectadas no momento em que elas são carregadas, mas também podem ser predefinidas com os atributos <span class="code-color"><strong>width</strong></span> e <span class="code-color"><strong>height</strong></span> <em>(largura e altura)</em>:</p>
                <div class="typewriter-small"  id="copycode" style="text-align: center;">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
    <span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"logo.png"</span><span class="blue-code">alt=</span><span class="orange-code">"The Company logo"</span><span class="blue-code">width=</span><span class="orange-code">"300"</span><span class="blue-code">height=</span><span class="orange-code">"100"</span><span class="code-color"><strong>&gt;</strong></span>
                    </code></pre>
                </div>
                <p class="Texto">A única razão para incluir atributos de dimensão à tag <img> é evitar quebrar o layout quando a imagem demorar muito para carregar ou quando não puder ser carregada. O uso dos atributos <span class="code-color"><em>width</em></span> e <span class="code-color"><em>height</em></span> para alterar as dimensões originais da imagem pode ter resultados indesejáveis:</p>
                <ul>
                    <li class="Texto">As imagens serão distorcidas se o tamanho original for menor do que as novas dimensões ou se a proporção definida for diferente da original.
                    </li>
                    <li class="Texto"> Ao se reduzir o tamanho de imagens grandes, é necessária uma maior largura de banda, o que
                    resulta em tempos de carregamento mais longos.</li>
                </ul>
                <p class="Texto">O SVG é o único formato que não sofre com esses efeitos, porque todas as suas informações gráficas são armazenadas em coordenadas numéricas adequadas para o redimensionamento e suas dimensões não afetam o tamanho do arquivo (daí o nome <em>Scalable Vector Graphics</em>). Por exemplo, para desenhar um retângulo em SVG, são necessárias apenas a posição, as dimensões das arestas e as informações de cor. O valor específico de cada pixel será renderizado dinamicamente posteriormente. Na verdade, as imagens SVG são semelhantes aos arquivos HTML, no sentido de que seus elementos gráficos também são definidos por tags em um arquivo de texto. Os arquivos SVG destinam-se a representar desenhos com arestas bem definidas, como gráficos ou diagramas.</p>
                <p class="Texto">As imagens que não se enquadram nesses critérios devem ser armazenadas como bitmaps. Ao contrário dos formatos vetoriais de imagem, os bitmaps armazenam informações de cor de antemão para cada pixel da imagem. O armazenamento do valor cromático de cada pixel da imagem gera uma grande quantidade de dados e, por isso, os bitmaps geralmente são armazenados em formatos compactados, como JPEG, PNG ou GIF.</p>
                <div class="image-content">
                    <img src="../../assets/img/Bitmap_SVG.svg" alt="Bitmap" class="img-fluid">
                </div>
                <p class="Texto">O formato JPEG é recomendado para fotografias, porque seu algoritmo de compactação produz bons resultados para as sombras e fundos desfocados. Para as imagens em que prevalecem as cores sólidas, o formato PNG é o mais apropriado. Portanto, o formato PNG deve ser escolhido quando for necessário converter uma imagem vetorial em bitmap.</p>
                <p class="Texto">O formato GIF oferece a qualidade de imagem mais baixa dentre todos os formatos de bitmap populares. No entanto, ele ainda é amplamente utilizado devido ao seu suporte para animações. De fato, muitos sites empregam arquivos GIF para exibir vídeos curtos, mas existem maneiras melhores de exibir conteúdo de vídeo.</p>
                <br>
                <p class="Subtopico"><strong>Áudio e vídeo</strong></p>
                <p class="Texto">Podemos adicionar conteúdos de áudio e vídeo a um documento HTML mais ou menos da mesma maneira que as imagens. Sem surpresa, a tag para adicionar áudio é <span class="code-color"><strong>&lt;audio&gt;</strong></span> e a tag para adicionar vídeo é <span class="code-color"><strong>&lt;video&gt;</strong></span>. Obviamente, os navegadores em modo texto não são capazes de reproduzir conteúdo multimídia, de forma que as tags <span class="code-color"><strong>&lt;audio&gt;</strong></span> e <span class="code-color"><strong>&lt;video&gt;</strong></span> empregam uma tag de fechamento para conter o texto usado como explicação para o elemento que não pôde ser mostrado. Por exemplo:</p>
                <div class="typewriter-small" style="width: 70%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre>
                        <code class="Texto">
    <span class="code-color"><strong>&lt;audio</strong></span><span class="blue-code"> controls src=</span><span                    class="orange-code">"/media/recording.mp3"</span><span class="code-color"><strong>&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span>Áudio indisponível<span class="code-color"><strong>&lt;em&gt;</strong></span>recording.mp3<span class="code-color"><strong>&lt;/em&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/audio&gt;</strong></span>
                </code>
                    </pre>
                </div>
                
                <p class="Texto">Se o navegador não suportar a tag <span class="code-color"><strong>&lt;audio&gt;</strong></span>, a linha <em>“Unable to play recording.mp3”</em> será mostrada em seu lugar. O uso das tags de fechamento <span class="code-color"><strong>&lt;/audio&gt;</strong></span> ou <span class="code-color"><strong>&lt;/video&gt;</strong></span> permitem que a página web inclua conteúdos alternativos mais elaborados do que a simples linha de texto permitida pelo atributo <span class="code-color"><em>alt</em></span> da tag <span class="code-color"><strong>&lt;img&gt;</strong></span>.</p>
                <p class="Texto">O atributo <span class="code-color"><em>src</em></span> das tags <span class="code-color"><strong>&lt;audio&gt;</strong></span> e <span class="code-color"><strong>&lt;video&gt;</strong></span> funcionam da mesma forma que em <span class="code-color"><strong>&lt;img&gt;</strong></span>, mas ele também aceita URLs apontando para uma transmissão ao vivo. O navegador cuida de armazenar em buffer, decodificar e exibir o conteúdo conforme ele é recebido. O atributo controls exibe os controles de reprodução. Sem ele, o visitante não poderá pausar, retroceder ou controlar a reprodução de qualquer outra maneira.</p>
                <br>
                <p class="Subtopico"><strong>Conteúdo genérico</strong>
                <p class="Texto">Um documento HTML pode ser aninhado em outro documento HTML, de forma semelhante à inserção de uma imagem em um documento HTML, mas usando a tag <span class="code-color"><strong>&lt;iframe&gt;</strong></span>:</p>
                <div class="typewriter-small" style="width: 70%; text-align: left;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i>
                    Copiar
                </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;iframe&gt;</strong></span><span class="blue-code">name=</span><span class="orange-code">"viewer"</span><span class="blue-code">src=</span><span class="orange-code">"gallery.html"</span><span class="code-color"><strong>&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span>Unsupported browser<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/iframe&gt;</strong></span>
                </code>
                    </pre>
                </div>
                <p class="Texto">Os navegadores em modo texto mais simples não suportam a tag &lt;iframe&gt;, exibindo em seu lugar o texto incluído. Como acontece com as tags de multimídia, o atributo src <strong>define a localização de origem do documento aninhado</strong>. É possível incluir atributos width e height (largura e altura) para alterar as dimensões padrão do elemento iframe.</p>
                <p class="Texto">O atributo <span class="code-color"><em>name</em></span> permite fazer referência ao iframe e trocar o documento aninhado. Sem este atributo, o documento aninhado não pode ser trocado. Um elemento <span class="code-color"><em>anchor</em></span> pode ser usado para carregar um documento de outro local dentro de um iframe em vez da janela atual do navegador.</p>
                <br>
                <p class="Subtopico"><strong>Links</strong></p>
                <p class="Texto">O elemento de página comumente chamado de <em>link</em> da web também é conhecido pelo termo técnico <em>âncora</em> (anchor), o que explica o uso da tag <span class="code-color"><strong>a</strong></span>. A âncora leva a outro local, que pode ser qualquer endereço compatível com o navegador. A localização é indicada pelo atributo <span class="code-color"><em>href</em></span> <em>(hyperlink reference)</em>:</p>
                <div class="typewriter-small" style="width: 70%; text-align: center;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
            <span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href=</span><span class="orange-code">"contact.html"</span><span class="code-color"><strong>&lt;</strong></span>Contact Information<span class="code-color"><strong>&lt;/a&gt;</strong></span>
            </code></pre>
                </div>
                <p class="Texto">A localização pode ser informada como um caminho relativo ou absoluto, como acontece com o conteúdo incorporado de que falamos anteriormente. Somente o conteúdo de texto entre as tags (por exemplo, <span class="blue-code"><em><u>Contact Information</u></em></span>)e fica visível para o visitante, geralmente na forma de um texto em azul sublinhado e clicável, mas o item que contém o link também pode ser qualquer outro conteúdo visível, como imagens:</p>
                <div class="typewriter-small" style="width: 70%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
    <span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href=</span><span class="orange-code">"contact.html"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;img</strong></span><span class="blue-code"> src</span><span class="orange-code">"contact.png"</span><span class="blue-code"> alt=</span><span class="orange-code">"contact.png"</span><span class="code-color"><strong>&gt; </strong></span>Informações de contato<span class="code-color"><strong>&lt;/a&gt;</strong></span>
                    </code></pre>
                </div>
                <p class="Texto">Prefixos especiais podem ser adicionados ao caminho para informar ao navegador como abri-lo. Se a âncora apontar para um endereço de email, por exemplo, seu atributo href deve incluir o prefixo <span class="code-color"><em>mailto:</em></span>:</p>
                <div class="typewriter-small" style="width: 70%; text-align: center;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href=</span><span class="orange-code">"mailto:info@lpi.org"</span><span class="code-color"><strong>&gt;</strong></span>Contato via Email<span class="code-color"><strong>&lt;/a&gt;</strong></span>
            </code></pre>
                </div>
                <p class="Texto">O prefixo tel: indica um número de telefone. Essa indicação é particularmente útil para visitantes que visualizam a página em dispositivos móveis:</p>
                <div class="typewriter-small" style="width: 70%; text-align: center;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href=</span><span class="orange-code">"tel:+123456789"<span class="code-color"><strong>&gt;</strong></span></span>Contato via telefone<span class="code-color"><strong>&lt;/a&gt;</strong></span>
                </code></pre>
                </div>
                <p class="Texto">Quando o link é clicado, o navegador abre o conteúdo do caminho com o aplicativo associado.</p>
                <p class="Texto">O uso mais comum das âncoras é carregar outros documentos da web. Por padrão, o navegador substitui o documento HTML atual pelo conteúdo do novo local. Esse comportamento pode ser modificado usando o atributo target. O destino _blank, por exemplo, diz ao navegador para abrir o local fornecido em uma nova janela ou nova guia do navegador, dependendo das preferências do visitante:</p>
                <div class="typewriter-small" style="width: 70%; text-align: center;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href=</span><span class="orange-code">"contact.html"</span><span class="blue-code"> target=</span><span class="orange-code">"_blank"</span> <span class="code-color"><strong>&gt; </strong></span>Contate para mais informaçãoes<span class="code-color"><strong>&lt;/a&gt;</strong></span>
            </code></pre>
                </div>
                <p class="Texto">O destino <span class="code-color"><em>_self</em></span> é o padrão quando o atributo <span class="code-color"><em>target</em></span> não é fornecido. Ele faz com que o documento referenciado substitua o documento atual.</p>
                <p class="Texto">Outros tipos de destinos estão relacionados ao elemento <span class="code-color"><strong>&lt;iframe&gt;</strong></span>. Para carregar um documento referenciado dentro de um elemento <span class="code-color"><strong>&lt;iframe&gt;</strong></span>, o atributo <span class="code-color"><em>target</em></span> deve apontar para o nome do elemento iframe:</p>
                <div class="typewriter-small" style="width: 70%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>

                    <pre>
                        <code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;a</strong></span><span class="blue-code"> href</span><span class="orange-code">"gallery.html"</span><span class="blue-code"> target=</span><span class="orange-code">"viewer"</span> <span class="code-color"><strong>&gt; </strong></span>Galeria de fotos<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong>
</span>
<span class="code-color"><strong>&lt;iframe</strong></span><span class="blue-code"> name=</span><span class="orange-code">"viewer"</span><span class="blue-code"> src=</span><span class="orange-code">"gallery.html"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Seu navegador não suporta<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/iframe&gt;</strong></span>
                </code>
                    </pre>
                </div>
                <p class="Texto">O elemento iframe funciona como uma janela distinta do navegador e, portanto, quaisquer links carregados a partir do documento dentro do iframe substituirão apenas o conteúdo do quadro. Para mudar esse comportamento, os elementos âncora dentro do documento aninhado também podem usar o atributo <span class="code-color"><em>target</em></span>. O destino <span class="code-color"><em>_parent</em></span>, quando usado dentro de um documento aninhado, fará com que o local referenciado substitua o documento pai que contém a tag <span class="code-color"><strong>&lt;iframe&gt;</strong></span>. Por exemplo, o documento <em>gallery.html</em> incorporado pode conter uma âncora que carrega a si mesma e substitui o documento pai:</p>
                <div class="typewriter-small" style=" text-align: center;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre>
                        <code class="Texto">
<span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;a </strong></span><span class="blue-code">href</span><span class="orange-code">"gallery.html"</span><span class="blue-code"> target=</span><span class="orange-code">"_parent" <span class="code-color"><strong>&gt;</strong></span></span>Abrir como documento pai<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong>
</span>
                </code>
                    </pre>
                </div>
                <p class="Texto">Os documentos HTML suportam vários níveis de aninhamento com a tag <span class="code-color"><strong>&lt;iframe&gt;</strong></span>. O destino <span class="code-color"><em>_top</em></span>, quando usado em uma âncora dentro de um documento aninhado, fará com que o local referenciado substitua o documento principal na janela do navegador, independentemente de ele ser o pai imediato do <span class="code-color"><strong>&lt;iframe&gt;</strong></span> ou um ancestral mais distante.</p>
                <br>
                <p class="Subtopico"><strong>Locais dentro de documentos</strong></p>
                <p class="Texto">O endereço de um documento HTML pode conter opcionalmente um <em>fragmento</em> que pode ser usado para identificar um recurso dentro do documento. Este fragmento, também conhecido como <em>âncora de URL</em>, é uma string iniciada por uma cerquilha <em>#</em> no final da URL. Por exemplo, a palavra <em>History</em> é a âncora da URL <span class="code-color"><em class="Texto">https://en.wikipedia.org/wiki/Internet#History</em></span>.</p>
                <p class="Texto">Quando a URL tem uma âncora, o navegador rola a página até o elemento correspondente no documento: ou seja, o elemento cujo atributo id é idêntico à âncora da URL. No caso da URL de nosso exemplo, <span class="code-color"><em class="Texto">https://en.wikipedia.org/wiki/Internet#History</em></span>, o navegador irá diretamente para a seção “History”. Examinando o código HTML da página, descobrimos que o título da seção possui o atributo id correspondente:</p>
                <p class="Texto">Quando a URL tem uma âncora, o navegador rola a página até o elemento correspondente no documento: ou seja, o elemento cujo atributo id é idêntico à âncora da URL. No caso da URL de nosso exemplo, <span class="code-color"><em class="Texto">https://en.wikipedia.org/wiki/Internet#History</em></span>, o navegador irá diretamente para a seção “History”. Examinando o código HTML da página, descobrimos que o título da seção possui o atributo id correspondente:</p>
                <div class="typewriter-small" style="width: 70%; text-align: center;"   id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                </button>
                <pre><code class="Texto">
<span class="code-color"><strong>&lt;span</strong></span><span class="blue-code"> class=</span><span class="orange-code">"my-headline"</span><span class="blue-code">id=</span><span class="orange-code">"history"</span><span class="code-color"> <strong>&gt;</strong></span>History<span class="code-color"><strong>&lt;/span&gt;</strong></span><span class="code-color"></span>
                        </code></pre>
                </div>
                <p class="Texto">As âncoras de URL podem ser usadas no atributo <em>href</em> da tag <span class="code-color"><strong>a</strong></span>, tanto para apontar para páginas externas quanto para para locais dentro da página atual. Neste último caso, basta usar apenas a cerquilha com o fragmento da URL, como em <span class="code-color"><em>&lt;a href="#History"&gt;History&lt;/a&gt;</em></span>.</p>
                <br>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p class="Texto">O atributo id não deve conter espaços em branco (espaços, tabulações etc.) e deve ser único no documento.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">Existem maneiras de personalizar a forma como o navegador reage às âncoras de URL. É possível, por exemplo, escrever uma função JavaScript que escuta o evento da janela hashchange e dispara uma ação personalizada, como uma animação ou uma solicitação HTTP. Vale notar, porém, que o fragmento de URL nunca é enviado ao servidor com a URL e, portanto, não pode ser usado como um identificador pelo servidor HTTP.</p>
                </div>
            </div>
        </div>
        <a href="../../questoesModulo01/unidade03.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"></a>
    

    <?php include('../../layouts/footer.php') ?>
            
    