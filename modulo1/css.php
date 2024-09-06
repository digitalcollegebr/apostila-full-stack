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
                <p>Todos os navegadores web exibem as páginas HTML de acordo com regras de apresentação padrão
que são práticas e diretas, mas não visualmente atraentes. O HTML, por si só, oferece poucos
recursos para produzir páginas elaboradas que correspondam aos conceitos modernos de experiência
do usuário. Depois de criar algumas páginas HTML simples, você provavelmente percebeu que elas
são feiosas quando comparadas às páginas bem projetadas que vemos comumente na Internet. Isso
ocorre porque, no HTML moderno, o código de marcação destinado à estrutura e função dos
elementos no documento (ou seja, o conteúdo semântico) é separado das regras que definem a
aparência dos elementos (a apresentação). As regras de apresentação são escritas em uma linguagem
diferente, chamada Cascading Style Sheets (CSS). Ela permite alterar quase todos os aspectos visuais
do documento, como fontes, cores e o posicionamento dos elementos ao longo da página.
Na maioria dos casos, os documentos HTML não são pensados para ser exibidos em um layout fixo,
como um arquivo PDF. Em vez disso, as páginas web baseadas em HTML devem se adaptar a uma
ampla variedade de tamanhos de tela, ou até mesmo a formatos impressos. O CSS oferece opções
ajustáveis para garantir que a página seja exibida conforme o esperado, adaptada ao dispositivo ou
aplicativo que a abre.</p>
            </div>
        </div>
    </div>