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
                        <img src="../../assets/img/figure1.png" alt="Código">
                    </div>
                <br>
                <p class="Texto"><em>Figure 1. Representação do código HTML acima em um navegador, exibindo dois parágrafos de texto. O primeiro parágrafo é bem curto. O segundo é um pouco mais longo e se estende em uma segunda linha.</em></p>
                <p class="Texto">Por padrão, os navegadores web adicionam espaçamento antes e depois dos elementos <span class="code-color"><em>&lt;p&gt;</em></span> para
                melhorar a legibilidade. Por essa razão, <span class="code-color"><em>&lt;p&gt;</em></span> é considerado um elemento de bloco.</p>
                <br>
                <p class="Subtopico"><strong>Títulos</strong></p>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;h1&gt;</strong></span>
                    Nível de cabeçalho 1 para identificar de forma única a página&lt;/h1&gt;
                    <span class="code-color"><strong>&lt;h2&gt;</strong></span>
                    Nível de cabeçalho 2&lt;/h2&gt;
                    <span class="code-color"><strong>&lt;h3&gt;</strong></span>
                    Nível de cabeçalho 3&lt;/h3&gt;
                    <span class="code-color"><strong>&lt;h4&gt;</strong></span>
                    Nível de cabeçalho 4&lt;/h4&gt;
                    <span class="code-color"><strong>&lt;h5&gt;</strong></span>
                    Nível de cabeçalho 5&lt;/h5&gt;
                    <span class="code-color"><strong>&lt;h6&gt;</strong></span>
                    Nível de cabeçalho 6&lt;/h6&gt;
                </div>
                    <br>
                <p class="Texto">Um navegador web exibiria este código HTML como mostrado na Figure 2.</p>
                <div class="image-content">
                        <img src="../../assets/img/figure2.png" alt="Código">
                </div>
                <p class="Texto"><em>Figure 2. Representação do código HTML acima em um navegador, mostrando diferentes níveis de títulos em um documento HTML. A hierarquia dos títulos é indicada pelo tamanho do texto.</em></p>
                <p class="Texto">Se você está familiarizado com processadores de texto como o LibreOffice ou o Microsoft Word, provavelmente vai notar algumas semelhanças na utilização dos diferentes níveis de títulos e como eles são processados no navegador. Por padrão, o HTML usa o tamanho para indicar a hierarquia e a importância dos títulos e adiciona espaços antes e depois deles para separá-los visualmente do conteúdo.</p>
                <p class="Texto">
                    O título que usa o elemento <span class="code-color">&lt;<em>h1</em>&gt;</span> fica no topo da hierarquia e, assim, é considerado o mais importante, o que identifica o conteúdo da página. Ele é comparável ao elemento <span class="code-color">&lt;<em>title</em>&gt;</span> discutido na lição anterior, mas dentro do conteúdo do documento HTML. Os elementos de título subsequentes podem ser usados para estruturar mais detalhadamente o conteúdo. Procure não saltar níveis. A hierarquia de um documento deve começar com <span class="code-color">&lt;<em>h1</em>&gt;</span>, continuar com <span class="code-color">&lt;<em>h2</em>&gt;</span>, em seguida <span class="code-color">&lt;<em>h3</em>&gt;</span> e assim por diante. Não é obrigatório usar todos os elementos de título até o <span class="code-color">&lt;<em>h6</em>&gt;</span> se o conteúdo não o exigir.
                </p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            EXEMPLO 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Os títulos são ferramentas importantes para estruturar um documento HTML, tanto semântica quanto visualmente. No entanto, eles nunca devem ser usados para aumentar o tamanho de um texto estruturalmente sem importância. Pelo mesmo princípio, não se deve colocar um parágrafo curto em negrito ou itálico para parecer um título; use tags de título para marcar títulos.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">Vamos começar a criação de nossa lista de compras em HTML definindo sua estrutura. Criamos primeiro um elemento &lt;h1&gt; para conter o título da página, neste caso Garden Party, seguido por um pequeno texto inserido em um elemento &lt;p&gt;. Em seguida, usamos dois elementos &lt;h2&gt; para introduzir as duas seções do conteúdo: <em>Agenda e Please bring</em>.</p>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;h1&gt;</strong></span>
                    Garden Party<span class="code-color"><strong>&lt;/h1&gt;</strong></span>
                    <span class="code-color"><strong>&lt;p&gt;</strong></span>
                    Invitation to John's garden party on Saturday next week.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
                    <span class="code-color"><strong>&lt;h2&gt;</strong></span>
                    Agenda&lt;/h2&gt;
                    <span class="code-color"><strong>&lt;h2&gt;</strong></span>
                    Please bring&lt;/h2&gt;
                </div>
                <br>
                <p class="Texto">Quando aberto em um navegador web, este código produz o resultado mostrado na <em>Figure 3</em>.</p>
                <br>
                <div class="image-content">
                    <img src="../../assets/figure3.png" alt="Código">
                </div>
                <br>
                <p class="Texto"><em>Figure 3. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples com um convite para uma festa ao ar livre, com dois títulos para a programação e uma lista de coisas a levar</em></p>
                <p class="Subtopico"><strong>Quebras de linha</strong></p>
                <p class="Texto">Às vezes, pode ser necessário fazer uma quebra de linha sem inserir outro elemento &lt;p&gt; ou qualquer elemento de bloco semelhante. Nesses casos, você pode usar o elemento de auto-fechamento <span class="code-color"><strong>&lt;br&gt;</strong></span>. Esse elemento deve ser usado somente para inserir quebras de linha inerentes ao conteúdo, como no caso de poemas, letras de música ou endereços. Para separar mudanças de conteúdo, é preferível usar um elemento &lt;p&gt;.</p>
                <p class="Texto">Por exemplo, poderíamos dividir o texto do parágrafo informativo de nosso exemplo anterior da seguinte maneira:</p>
                <br>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;p&gt;</strong></span>
                    Invitation to John's garden party <span class="span code-color"><strong>&lt;br&gt;</strong></span><br> Saturday, next week.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
                </div>
                <br>
                <p class="Texto">No navegador, esse código HTML teria o resultado mostrado na <em>Figure 4</em>.</p>
                <div class="image-content">
                    <img src="../../assets/img/figure4.png" alt="Código">
                </div>
                <p class="Texto"><em>Figure 4. Representação do código HTML acima em um navegador, mostrando um exemplo de documentosimples com uma quebra de linha forçada.</em></p>
                <br>
                <p class="Subtopico"><strong>Linhas horizontais</strong></p>
                <p class="Texto">O elemento <span class="code-color"><strong>&lt;hr&gt;</strong></span> define uma linha horizontal, também chamada de separador horizontal. Por padrão, ela se estende por toda a largura do elemento pai. O elemento <span class="code-color"><strong>&lt;hr&gt;</strong></span> ajuda a definir uma mudança temática no conteúdo ou separar as seções do documento. Esse é um elemento vazio e, portanto, não tem tag de fechamento.</p>
                <p class="Texto">Em nosso exemplo, poderíamos separar os dois títulos:</p>
                <br>
                <div class="typewriter-small">
                    <span class="code-color"><strong>&lt;h1&gt;</strong></span>
                    Garden Party<span class="code-color"><strong>&lt;/h1&gt;</strong></span>
                    <span class="code-color"><strong>&lt;p&gt;</strong></span>
                    Invitation to John's garden party on Saturday next week.<span class="code-color"><strong>&lt;/p&gt;</strong></span>
                    <span class="code-color"><strong>&lt;h2&gt;</strong></span>
                    Agenda&lt;/h2&gt;
                    &lt;hr&gt;
                    <span class="code-color"><strong>&lt;h2&gt;</strong></span>
                    Please bring&lt;/h2&gt;
                </div>
                <br>
                <p class="Texto">A <em>Figure 5</em> mostra o resultado desse código.</p>
                <br>
                <div class="image-content">
                    <img src="../../figure5.png" alt="Código">
                </div>
                <br>
                <p class="Texto"><em>Figure 5. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples com uma lista de compras em duas seções separadas por uma linha horizontal.</em></p>
                <br>
                <p class="Subtopico" style="font-size: 18px;">Listas em HTML<strong></strong></p>
                <p class="Texto">Em HTML, podemos definir três tipos de listas:</p>
                <p class="Subtopico" style="font-size: 14px;">Listas ordenadas<strong></strong></p>
                <p class="Texto">nas quais a ordem dos elementos listados é importante</p>
                <p class="Subtopico" style="font-size: 14px;">Listas não ordenadas<strong></strong></p>
                <p class="Texto">nas quais a ordem dos elementos listados não é particularmente importante</p>
                <p class="Subtopico"><strong>Listas de definição</strong></p>
                <p class="Texto">para descrever mais detalhadamente certos termos</p>
                <br>
                <p class="Texto">Cada uma delas contém um certo número de <em>itens de lista</em>. Vamos conhecer melhor esses tipos.</p>
                <br>
                <p class="Subtopico"><strong>Listas ordenadas</strong></p>
                <p class="Texto">Uma lista ordenada em HTML, definida pelo elemento <span class="code-color"><strong>&lt;ola&gt;</strong></span>, é uma coleção organizada de <em>itens de lista</em>. O que torna este elemento especial é que a ordem dos itens é relevante. Para enfatizar o fato, os navegadores web exibem números por padrão antes dos elementos filho da lista. </p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Os elementos &lt;li&gt; são os únicos elementos filho válidos dentro de um elemento &lt;ol&gt;.</p>
                        </div>
                        </div>
                        <br>
                        
                        <p class="Texto">Em nosso exemplo, podemos preencher a programação da festa ao ar livre usando um elemento <ol> com o seguinte código:</p>
                        <div class="typewriter-small">
                            <pre><code><span class="code-color"><strong>&lt;h2&gt;</strong></span>
                            Agenda&lt;/h2&gt;
                            &lt;ol&gt;
                                &lt;li&gt;
                                &lt;li&gt;

</pre></code>
                            
                        

                    
                </div>
            </div>
        </div>
    </div>
    <a href="../questoesModulo01/unidade"></a>
    <?php include('../../layouts/footer.php') ?>