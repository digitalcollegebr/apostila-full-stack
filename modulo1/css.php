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
                <p class="Titulo">Noções básicas de CSS</p>
                <br>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <!-- Texto -->
                <p class="Texto">Todos os navegadores web exibem as páginas HTML de acordo com regras de apresentação padrão que são práticas e diretas, mas não visualmente atraentes. O HTML, por si só, oferece poucos recursos para produzir páginas elaboradas que correspondam aos conceitos modernos de experiência do usuário. Depois de criar algumas páginas HTML simples, você provavelmente percebeu que elas são feiosas quando comparadas às páginas bem projetadas que vemos comumente na Internet. Isso ocorre porque, no HTML moderno, o código de marcação destinado à estrutura e função dos elementos no documento (ou seja, o conteúdo semântico) é separado das regras que definem a aparência dos elementos (a apresentação). As regras de apresentação são escritas em uma linguagem diferente, chamada <span class="code-color"><strong>Cascading Style Sheets (CSS)</strong></span>. Ela permite alterar quase todos os aspectos visuais do documento, como <em>fontes</em>, <em>cores</em> e o <em>posicionamento</em> dos elementos ao longo da página. Na maioria dos casos, os documentos HTML não são pensados para ser exibidos em um layout fixo, como um arquivo PDF. Em vez disso, as páginas web baseadas em HTML devem se adaptar a uma ampla variedade de tamanhos de tela, ou até mesmo a formatos impressos. O CSS oferece opções ajustáveis para garantir que a página seja exibida conforme o esperado, adaptada ao dispositivo ou aplicativo que a abre.</p>
                <br>
                <p class="Texto">Na maioria dos casos, os documentos HTML não são pensados para ser exibidos em um layout fixo, como um arquivo PDF. Em vez disso, as páginas web baseadas em HTML devem se adaptar a uma ampla variedade de tamanhos de tela, ou até mesmo a formatos impressos. O CSS oferece opções ajustáveis para garantir que a página seja exibida conforme o esperado, adaptada ao dispositivo ou aplicativo que a abre.</p>
                <br>
                <p class="Subtopico"><strong>Aplicação de estilos</strong></p>
                <p class="Texto">Existem várias maneiras de incluir CSS em um documento HTML: escrever diretamente na tag do elemento, em uma seção separada do código-fonte da página ou em um arquivo externo a ser referenciado pela página HTML.</p>
                <br>
                <p class="Subtopico"><strong>O atributo</strong> <em>style</em></p>
                <p class="Texto">A maneira mais simples de modificar o estilo de um elemento específico é escrevê-lo diretamente na tag do elemento usando o atributo style. Todos os elementos HTML visíveis aceitam um atributo style, cujo valor pode ser uma ou mais regras de CSS, também conhecidas como propriedades. Vamos começar com um exemplo simples, um elemento de parágrafo:
                <div class="code-smaller">
                <span class="code-color"><strong>&lt;p&gt;</strong></span>My stylized paragraph<span class="code-color"><span class="code-color"><strong>&lt;/p&gt;</strong></span>
            </div>
</p>
            </div>
        </div>
    </div>