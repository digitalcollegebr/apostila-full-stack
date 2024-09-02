

<?php
    // A_S - Header
    include('layouts/header.php');
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

    <?php 
        // A_S - Nav
        include('layouts/nav.php'); 
    ?>

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <!-- Titulo -->
                <p class="Titulo">Marcação de documentos HTML</p>
                <br>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <!-- Texto -->
                <p class="Texto wow fadeIn">O HTML (HyperText Markup Language) é uma linguagem de marcação que informa aos navegadores
                como estruturar e exibir as páginas web. A versão atual é a 5.0, lançada em 2012. A sintaxe HTML é
                definida pelo World Wide Web Consortium (W3C).</p>
                <p class="Texto wow fadeIn">O HTML é uma habilidade fundamental para o desenvolvimento web, pois é a linguagem que define
                a estrutura e boa parte da aparência de um website. Se você deseja seguir uma carreira em
                desenvolvimento web, o HTML é um excelente ponto de partida.</p>
                <p class="Subtopico"><strong>Anatomia de um documento html</strong></p>
                <div class="container-code">
        <div class="code-section">
            <div class="typewriter">
                <strong><pre><code>&lt;!DOCTYPE html&gt;
               &lt;html&gt;
                    &lt;head&gt;
                        <span class="code-color">&lt;title&gt;</span>My HTML Page<span class="code-color">&lt;title&gt;</span>
                        &lt;!-- This is the Document Header --&gt;
                    &lt;/head&gt;
                    <span class="code-color">&lt;body&gt;</span>
                            &lt;!-- This is the Document Body --&gt;
                    <span class="code-color">&lt;/body&gt;</span>
                &lt;/html&gt;</code></pre></strong>
            </div>
        </div>
        <div class="text-section">
            <p class="Texto">O HTML usa elementos e tags para descrever e formatar o conteúdo. As tags consistem em parênteses angulares ao redor do nome da tag, por exemplo &lt;title&gt;. O nome da tag não fazdistinção entre maiúsculas e minúsculas, embora o World Wide Web Consortium (W3C) recomende o uso de minúsculas nas versões atuais do HTML. Essas tags HTML são usadas para construir elementos HTML</p>
        </div>
        </div>
        <br>
        <p class="Texto">A tag <strong><span class="code-color">&lt;title&gt;</span></strong> é um exemplo de tag de abertura de um elemento HTML que define
        o título de um documento HTML. No entanto, um elemento possui dois outros componentes. Um
        elemento <span class="code-color">&lt;title&gt;</span> completo seria parecido com este:</p>
        <br>
        <div class="typewriter-small">
                <span class="code-color"><strong>&lt;title&gt;</strong></span>My HTML Page<span class="code-color"><strong>&lt;title&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">Aqui, <strong>My HTML Page</strong> representa o conteúdo do elemento, ao passo que </title> é a tag de fechamento que declara que este elemento está completo.</p>
        <br>
        <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p>Nem todos os elementos HTML precisam ser fechados; nesses casos, falamos de elementos vazios, elementos de auto-fechamento <br> ou elementos nulos.</p>
                    </div>
                </div>

        

   

