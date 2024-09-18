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
                <p class="Titulo">Referências e recursos incorporados do HTML</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">As páginas web modernas raramente são constituídas somente de texto. Elas incluem muitos outros tipos de conteúdo, como imagens, áudio, vídeo e até outros documentos HTML. Junto com o conteúdo externo, os documentos HTML podem conter links para outros documentos, o que torna a experiência de navegação na Internet muito mais simples.</p>
                <p class="Subtopico"><strong>Conteúdo incorporado</strong></p>
                <p class="Texto">A troca de arquivos pela Internet é possível sem páginas web escritas em HTML. Nesse caso, por que o HTML é o formato de preferência para documentos web, e não o PDF ou qualquer outro formato de processamento de texto? Um motivo importante é que o HTML mantém seus recursos multimídia em arquivos separados. Em um ambiente como a Internet, onde as informações geralmente são redundantes e distribuídas em locais diferentes, é importante evitar transferências de dados desnecessárias. Na maioria das vezes, as novas versões de uma página web puxam as mesmas imagens e outros arquivos de suporte das versões anteriores, de modo que o navegador pode usar os arquivos reunidos anteriormente em vez de copiar tudo outra vez. Além disso, a separação dos arquivos facilita a personalização do conteúdo multimídia de acordo com as características do cliente, como localidade, tamanho da tela e velocidade de conexão.</p>
                <br>
                <p class="Subtopico"><strong>Imagens</strong></p>
                <p class="Texto">O tipo mais comum de conteúdo incorporado são as imagens que acompanham o texto. As imagens
                são salvas separadamente e referenciadas dentro do arquivo HTML com a tag <span class="code-color"><strong>&lt;img&gt;</strong></span>:</p>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"logo.png"</span><span class="code-color"><strong>&gt;</strong></span>
                </div>
                <br>
                <p class="Texto">A tag <span class="code-color"><strong>&lt;img&gt;</strong></span> não requer uma tag de fechamento. A propriedade src indica o local de origem do arquivo de imagem. Neste exemplo, o arquivo de imagem logo.png deve estar localizado no mesmo diretório do arquivo HTML, caso contrário o navegador não poderá exibi-lo. A propriedade de localização de origem aceita caminhos relativos, de forma que a notação de ponto pode ser usada para indicar o caminho até a imagem:</p>
                <div class="typewriter-small">
                <span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"../logo.png"</span><span class="code-color"><strong>&gt;</strong></span>
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
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"logo.png"</span><span class="blue-code">alt=</span><span class="orange-code">"The Company logo"</span><span class="code-color"><strong>&gt;</strong></span>
                </div>
                <br>
                <p class="Texto">O atributo alt também é importante para a acessibilidade. Os navegadores em modo texto e os leitores de tela usam-no como uma descrição para a imagem correspondente.</p>
                <br>
                <p class="Subtopico"><strong>Tipos de imagem</strong></p>
                <p class="Texto">Os navegadores podem exibir todos os tipos mais populares de imagem, como <span class="code-color"><em>JPEG</em></span>, <span class="code-color"><em>PNG</em></span>, <span class="code-color"><em>GIF</em></span> e <span class="code-color"><em>SVG</em></span>. As dimensões das imagens são detectadas no momento em que elas são carregadas, mas também podem ser predefinidas com os atributos <span class="code-color"><strong>width</strong></span> e <span class="code-color"><strong>height</strong></span> <em>(largura e altura)</em>:</p>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;img </strong></span><span class="blue-code">src=</span><span class="orange-code">"logo.png"</span><span class="blue-code">alt=</span><span class="orange-code">"The Company logo"</span><span class="blue-code">width=</span><span class="orange-code">"300"</span><span class="blue-code">height=</span><span class="orange-code">"100"</span><span class="code-color"><strong>&gt;</strong></span>
                </div>
                <p class="Texto">A única razão para incluir atributos de dimensão à tag <img> é evitar quebrar o layout quando a imagem demorar muito para carregar ou quando não puder ser carregada. O uso dos atributos <span class="code-color"><em>width</em></span> e <span class="code-color"><em>height</em></span> para alterar as dimensões originais da imagem pode ter resultados indesejáveis:</p>
                <ul>
                    <li>As imagens serão distorcidas se o tamanho original for menor do que as novas dimensões ou se a proporção definida for diferente da original.
                    </li>
                    <li> Ao se reduzir o tamanho de imagens grandes, é necessária uma maior largura de banda, o que
                    resulta em tempos de carregamento mais longos.</li>
                </ul>
                <p class="Texto">O SVG é o único formato que não sofre com esses efeitos, porque todas as suas informações gráficas são armazenadas em coordenadas numéricas adequadas para o redimensionamento e suas dimensões não afetam o tamanho do arquivo (daí o nome <em>Scalable Vector Graphics</em>). Por exemplo, para desenhar um retângulo em SVG, são necessárias apenas a posição, as dimensões das arestas e as informações de cor. O valor específico de cada pixel será renderizado dinamicamente posteriormente. Na verdade, as imagens SVG são semelhantes aos arquivos HTML, no sentido de que seus elementos gráficos também são definidos por tags em um arquivo de texto. Os arquivos SVG destinam-se a representar desenhos com arestas bem definidas, como gráficos ou diagramas.</p>
                <p class="Texto">As imagens que não se enquadram nesses critérios devem ser armazenadas como bitmaps. Ao contrário dos formatos vetoriais de imagem, os bitmaps armazenam informações de cor de antemão para cada pixel da imagem. O armazenamento do valor cromático de cada pixel da imagem gera uma grande quantidade de dados e, por isso, os bitmaps geralmente são armazenados em formatos compactados, como JPEG, PNG ou GIF.</p>
                <div class="image-content">
                    <img src="../../assets/img/Bitmap_SVG.svg" alt="Bitmap" class="img-fluid">
                </div>
                <p class="Texto">O formato JPEG é recomendado para fotografias, porque seu algoritmo de compactação produz bons resultados para as sombras e fundos desfocados. Para as imagens em que prevalecem as cores sólidas, o formato PNG é o mais apropriado. Portanto, o formato PNG deve ser escolhido quando for necessário converter uma imagem vetorial em bitmap.</p>
                <p class="Texto">O formato GIF oferece a qualidade de imagem mais baixa dentre todos os formatos de bitmap populares. No entanto, ele ainda é amplamente utilizado devido ao seu suporte para animações. De fato, muitos sites empregam arquivos GIF para exibir vídeos curtos, mas existem maneiras melhores de exibir conteúdo de vídeo</p>

            </div>
        </div>
    </div>
    <?php include('../../layouts/footer.php') ?>