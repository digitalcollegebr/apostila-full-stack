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
                <!-- Titulo -->
                <p class="Titulo">A semântica do HTML e a hierarquia de documentos</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <!-- Texto -->
                 <p class="Texto">Na lição anterior, aprendemos que o HTML é uma linguagem de marcação capaz de descrever semanticamente o conteúdo de um site. Um documento HTML contém uma estrutura, que consiste nos elementos HTML <span class="code-color"><em>&lt;html&gt;</em></span>, <span class="code-color"><em>&lt;head&gt;</em></span> e <span class="code-color"><em>&lt;body&gt;</em></span>. Enquanto o elemento <span class="code-color"><em>&lt;head&gt;</em></span> descreve um bloco de metainformações sobre o documento HTML que será invisível para o visitante do site, o elemento <span class="code-color"><em>&lt;body&gt;</em></span> abriga muitos outros elementos que definem a estrutura e o conteúdo do documento HTML.
                 </p>
                 <p class="Texto">Nesta lição, falaremos da formatação de texto, dos elementos semânticos fundamentais do HTML e sua finalidade e de como estruturar um documento HTML. Usaremos como exemplo uma lista de compras.</p>
                 <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Todos os exemplos de código apresentados estão dentro do elemento &lt;body&gt; de um documento HTML contendo a estrutura completa. Para facilitar a leitura, não incluiremos a estrutura HTML em todos os exemplos desta lição.</p>
                    </div>
                </div>
                <br>
                <p class="Subtopico"><strong>Texto</strong></p>
                <p class="Texto">Em HTML, nenhum bloco de texto deve estar nu, fora de um elemento. Até mesmo um parágrafo curto deve ser rodeado pelas tags HTML <span class="code-color"><strong>&lt;p&gt;</strong></span>, que representam um <span class="code-color"><em>parágrafo</em></span></p>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;p&gt;</strong></span><p>Elemento de texto curto que ocupa apenas uma linha.<span class="code-color"><strong>&lt;/p&gt;</strong></span></p>
                    <span class="code-color"><strong>&lt;p&gt;</strong></span><p>Um elemento de texto contendo um texto muito mais longo que pode se estender por várias linhas, dependendo do tamanho da janela do navegador.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
                    </div>
                    <br>
                    <p class="Texto">Quando aberto em um navegador, esse código HTML produz o resultado mostrado na Figure 1.</p>
                    <div class="image-content">
                    <img src="../../assets/img/figure1.png" alt="Modelo cliente/servidor">
                </div>
                <br>
                <p class="Texto"><em>Figure 1. Representação do código HTML acima em um navegador, exibindo dois parágrafos de texto. O primeiro parágrafo é bem curto. O segundo é um pouco mais longo e se estende em uma segunda linha.</em></p>
                <p class="Texto">Por padrão, os navegadores web adicionam espaçamento antes e depois dos elementos <span class="code-color"><em>&lt;p&gt;</em></span> para
                melhorar a legibilidade. Por essa razão, <span class="code-color"><em>&lt;p&gt;</em></span> é considerado um elemento de bloco.</p>
                <br>
                <p class="Subtopico"><strong>Títulos</strong></p>
                <div class="typewriter-small">
                <!-- Escrever aqui-->
                </div>
                    <br>
                <p class="Texto">Um navegador web exibiria este código HTML como mostrado na Figure 2.</p>

            </div>
        </div>
    </div>
    <a href="../questoesModulo01/unidade"></a>
    <?php include('../layouts/footer.php') ?>