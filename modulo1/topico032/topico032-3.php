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
            </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade03.php" class="button-prox"><img src="../../assets/img/arrow-circle-right (1).png" alt="" class="next"></a>
    <br><br>
    <?php include('../../layouts/footer.php') ?>