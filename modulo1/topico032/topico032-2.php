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
                <div class="container-main">
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
                        <img src="../../assets/img/figure1.png" alt="Código" class="img-fluid">
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
                        <img src="../../assets/img/figure2.png" alt="Código" class="img-fluid">
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
                    <img src="../../assets/img/figure3.png" alt="Código" class="img-fluid">
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
                    <img src="../../assets/img/figure4.png" alt="Código"  class="img-fluid">
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
                    <img src="../../assets/img/figure5.png" alt="Código" class="img-fluid">
                </div>
                <br>
                <p class="Texto"><em>Figure 5. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples com uma lista de compras em duas seções separadas por uma linha horizontal.</em></p>
                <br>
                <p class="Subtopico"><strong>Listas em HTML</strong></p>
                <p class="Texto">Em HTML, podemos definir três tipos de listas:</p>
                <p class="Subtopico" style="font-size: 14px;"><strong>Listas ordenadas</strong></p>
                <p class="Texto">nas quais a ordem dos elementos listados é importante</p>
                <p class="Subtopico" style="font-size: 14px;"><strong>Listas não ordenadas</strong></p>
                <p class="Texto">nas quais a ordem dos elementos listados não é particularmente importante</p>
                <p class="Subtopico" style="font-size: 14px;"><strong>Listas de definição</strong></p>
                <p class="Texto">para descrever mais detalhadamente certos termos</p>
                <br>
                <hr>
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
                        
                        <p class="Texto">Em nosso exemplo, podemos preencher a programação da festa ao ar livre usando um elemento <span class="code-color"><strong>&lt;ol&gt;</strong></span> com o seguinte código:</p>
        <div class="typewriter-small" style="width: 50%; text-align: left;" >
        <pre><code>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Agenda<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        &lt;ol&gt;
            &lt;li&gt;Welcome&lt;/li&gt;
            &lt;li&gt;Barbecue&lt;/li&gt;
            &lt;li&gt;Dessert&lt;/li&gt;
            &lt;li&gt;Fireworks&lt;/li&gt;
        &lt;/ol&gt;
        </pre></code>
        </div>
                        <p class="Texto">Em um navegador web, esse código HTML produz o resultado mostrado na <em>Figure 6.</em></p>
                        <img src="../../assets/img/figure6.png" alt="Código" class="img-fluid">
                        <p class="Texto"><em>Figure 6. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples contendo um título de segundo nível seguido por uma lista ordenada com quatro itens referentes à programação de uma festa ao ar livre.</em></p>
                        <br>
                        <p class="Subtopico"><strong>Opções</strong></p>
                        <p class="Texto">Como vemos neste exemplo, os itens da lista são organizados com algarismos arábicos começando em 1 por padrão. No entanto, é possível alterar esse comportamento especificando o atributo <span class="code-color"><em>type</em></span> da tag &lt;ol&gt;. Os valores válidos para este atributo são <em>1</em> para algarismos arábicos, A para letras maiúsculas, a para letras minúsculas, <em>I</em> para algarismos romanos maiúsculos e <em>i</em> para algarismos romanos minúsculos.</p>
                        <p class="Texto">Se quiser, você também pode definir o valor inicial usando o atributo start da tag &lt;ol&gt;. O atributo <span class="code-color"><em>start</em></span> sempre é acompanhado por um valor numérico decimal, mesmo que o atributo <span class="code-color"><em>type</em></span> defina umntipo diferente de numeração.</p>
                        <p class="Texto">Por exemplo, poderíamos ajustar a lista ordenada do exemplo anterior para que os itens da lista sejam prefixados com letras maiúsculas, começando com a letra C, como mostrado no exemplo a seguir:</p>
        <div class="typewriter-small" style="width: 50%; text-align: left;" >
        <pre><code>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Agenda<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        &lt;ol <span class="dark_blue_code">type=</span><span class="red-color">"A"</span><span class="dark_blue_code">start=</span><span class="red-color">"3"</span>&gt;
            &lt;li&gt;Welcome&lt;/li&gt;
            &lt;li&gt;Barbecue&lt;/li&gt;
            &lt;li&gt;Dessert&lt;/li&gt;
            &lt;li&gt;Fireworks&lt;/li&gt;
        &lt;/ol&gt;
        </pre></code>
        </div>
                        <p class="Texto">Em um navegador web, esse código HTML é exibido como na <em>Figure 7</em>.</p>
                        <br>
                        <img src="../../assets/img/figure7.png" alt="Código" class="img-fluid">
                        <p class="Texto"><em>Figure 7. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples contendo um título de segundo nível seguido por uma lista ordenada de itens prefixados por letras maiúsculas começando com a letra C.</em></p>
                        <p class="Texto">A ordem dos itens da lista também pode ser invertida usando o atributo reversed sem um valor.</p>
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Em uma lista ordenada, também é possível definir o valor inicial de um item específico usando o atributo value da tag &lt;li&gt;. Os itens da lista serão incrementados a partir desse número. O atributo value sempre leva um valor numérico decimal.</p>
                    </div>
                </div>
                <p class="Subtopico"><strong>Listas não ordernadas</strong></p>
                <p class="Texto">Uma lista não ordenada contém uma série de itens de lista que, ao contrário daqueles em uma lista ordenada, não têm uma ordem ou sequência especial. O elemento HTML para esse tipo de lista é <span class="code-color"><strong>&lt;ul&lg;</strong></span>. Também neste caso, <span class="code-color"><strong>&lt;li&lg;</strong></span>. é o elemento HTML que demarca os itens de lista.</p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Os elementos <span class="code-color"><strong>&lt;li&lg;</strong></span>. são os únicos elementos filho válidos dentro de um elemento
                        <span class="code-color"><strong>&lt;ul&lg;</strong></span>.</p>
                    </div>
                </div>
                <p class="Texto">Em nosso site de exemplo, podemos usar uma lista não ordenada para sugerir os itens que os convidados devem trazer para a festa. Usamos para isso o seguinte código HTML:</p>
                <br>
                <div class="typewriter-small" style="width: 50%; text-align: left;" >
    <pre><code>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Please bring<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    &lt;ul <span class="dark_blue_code">type=</span><span class="red-color">"A"</span><span class="dark_blue_code">start=</span><span class="red-color">"3"</span>&gt;
        <span class="code-color"><strong>&lt;li&gt;</strong></span>Salad<span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;li&gt;</strong></span>Drinks<span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;li&gt;</strong></span>Bread<span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;li&gt;</strong></span>Snacks<span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;li&gt;</strong></span>Desserts<span class="code-color"><strong>&lt;/li&gt;</strong></span>
     &lt;/ul&gt;
    </pre></code>
</div>
                <br>
                <p class="Texto">Em um navegador da web, esse código HTML produz o resultado mostrado na <em>Figure 8</em>.</p>
                <br>
                <img src="../../assets/img/figure8.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 8. Representação do código HTML acima em um navegador, mostrando um exemplo de documento simples contendo um título de segundo nível seguido por uma lista não ordenada de itens com sugestões de alimentos que os convidados devem trazer para a festa.</em>
                <br>
                <p class="Texto">Por padrão, cada item da lista é representado por um marcador circular. É possível alterar a aparência do marcador usando CSS, o que será discutido em lições posteriores</p>
                <br>
                <p class="Subtopico"><strong>Listas aninhadas</strong></p>
                    As listas podem ser aninhadas em outras listas, como listas ordenadas em listas não ordenadas e vice-versa. 
                    Para isso, a lista aninhada deve fazer parte de um elemento de lista <span class="code-color"><strong>&lt;li&gt;</strong></span>, 
                    já que <span class="code-color"><strong>&lt;li&gt;</strong></span> é o único elemento filho válido nas listas ordenadas e não ordenadas. 
                    Ao aninhar, cuidado para não sobrepor as tags HTML.</p>
                <p class="Texto">Em nosso exemplo, poderíamos adicionar algumas informações à programação que criamos antes,como mostrado no exemplo a seguir: </p>
                <br>
                <div class="typewriter-small" style="width: 50%; text-align: left;">
    <pre><code>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Agenda<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;ol type=</strong></span><span class="red-color">"A"</span><span class="code-color"><strong> start=</strong></span><span class="red-color">"3"</span><span class="code-color"><strong>&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Welcome<span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>
      Barbecue
      <span class="code-color"><strong>&lt;ul&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Vegetables<span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Meat<span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Burgers, including vegetarian options<span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;/ul&gt;</strong></span>
      <span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Dessert<span class="code-color"><strong>&lt;/li&gt;</strong></span>
      <span class="code-color"><strong>&lt;li&gt;</strong></span>Fireworks<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;/ol&gt;</strong></span>
    </pre></code>
</div>
                <p class="Texto">Um navegador web exibiria esse código da maneira mostrada na <em>Figure 9</em>.</p>
                <br>
                <img src="../../assets/img/figure9.png" alt="Código"  class="img-fluid">
                <br>
                <em>Figure 9. Representação do código HTML acima em um navegador, mostrando uma lista não ordenadaaninhada em uma lista ordenada, representando a programação de uma festa ao ar livre.</em>
                <br>
                <p class="Texto">Podemos ainda mais longe e aninhar múltiplos níveis de profundidade. Teoricamente, não há limite de quantidade para as listas aninhadas. Porém, ao fazer isso, leve em conta a legibilidade da página.</p>
                <br>
                <p class="Subtopico"><strong>Listas de definição</strong></p>
                <p class="Texto">Uma <em>lista de definição</em> é criada com o elemento <span class="code-color"><strong>&lt;dl&gt;</strong></span> e representa um dicionário de <em>termos</em> e <em>descrições</em>. O termo é uma palavra ou nome a descrever e a descrição é a explicação. As listas de definição vão desde pares simples de termo-descrição até definições mais extensas.</p>
                <p class="Texto">Os termos (ou termos de definição) são designados com o elemento <span class="code-color"><strong>&lt;dt&gt;</strong></span>; já a descrição usa o elemento <span class="code-color"><strong>&lt;dd&gt;</strong></span>.</p>
                <p class="Texto">Um exemplo de lista de definição seria uma lista de frutas exóticas explicando a aparência delas.
                Um exemplo de lista de definição seria uma lista de frutas exóticas explicando a aparência delas.</p>
                <br>
                <div class="typewriter-small" style="width: 50%; text-align: left;">
    <pre><code>
    <span class="code-color"><strong>&lt;h3&gt;</strong></span>Frutas Exóticas<span class="code-color"><strong>&lt;/h3&gt;</strong></span>
    <span class="code-color"><strong>&lt;dl&gt;</strong></span>
      <span class="code-color"><strong>&lt;dt&gt;</strong></span>Banana<span class="code-color"><strong>&lt;/dt&gt;</strong></span>
      <span class="code-color"><strong>&lt;dd&gt;</strong></span>
      Uma fruta longa e curva que tem a casca amarela quando madura. A casca da fruta também pode ter uma cor verde suave quando não madura e manchas marrons quando passa do ponto.
      <span class="code-color"><strong>&lt;/dd&gt;</strong></span>
      <span class="code-color"><strong>&lt;dt&gt;</strong></span>Kiwi<span class="code-color"><strong>&lt;/dt&gt;</strong></span>
      <span class="code-color"><strong>&lt;dd&gt;</strong></span>
      Uma fruta pequena e oval com polpa verde, sementes pretas e uma casca marrom e peluda.
      <span class="code-color"><strong>&lt;/dd&gt;</strong></span>
      <span class="code-color"><strong>&lt;dt&gt;</strong></span>Manga<span class="code-color"><strong>&lt;/dt&gt;</strong></span>
      <span class="code-color"><strong>&lt;dd&gt;</strong></span>
      Uma fruta maior que um punho, com casca verde, polpa laranja e uma grande semente. A casca pode ter manchas que variam de verde a amarelo ou vermelho.
      <span class="code-color"><strong>&lt;/dd&gt;</strong></span>
    <span class="code-color"><strong>&lt;/dl&gt;</strong></span>
    </pre></code>
</div>
                <p class="Texto">Em um navegador web, isso produziria o resultado mostrado na <em>Figure 10</em>.</p>
                <br>
                <img src="../../assets/img/figure10.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 10. Exemplo de lista de definição usando frutas exóticas. A lista descreve a aparência de três frutas diferentes.</em>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">Ao contrário das listas ordenadas e não ordenadas, em uma lista de definição qualquer elemento HTML pode ser usado como filho. Isso permite agrupar elementos e estilizá-los usando CSS.</p>
                        </div>
                    </div>
                <br>
                <p class="Subtopico"><strong>Formatação de texto na linha</strong></p>
                <p class="Texto">Em HTML, podemos usar elementos de formatação para alterar a aparência do texto. Esses elementos podem ser categorizados como elementos de apresentação ou elementos de expressão (ou de frase).</p>
                <p class="Subtopico" styele="font-size: 14px;"><strong>Elementos de apresentação</strong></p>
                <p class="Texto">Os elementos básicos de apresentação alteram a fonte ou a aparência do texto; eles são 
                    <span class="code-color"><strong>&lt;b&gt;</strong></span>, 
                    <span class="code-color"><strong>&lt;i&gt;</strong></span>, 
                    <span class="code-color"><strong>&lt;u&gt;</strong></span> e 
                    <span class="code-color"><strong>&lt;tt&gt;</strong></span>. 
                    Esses elementos originalmente eram definidos antes que o CSS passasse a permitir o uso de negrito, itálico, etc. 
                    Atualmente, existem maneiras melhores de alterar a aparência do texto, mas ainda encontramos esses elementos ocasionalmente.
                </p>
                <br>
                <p class="Subtopico"><strong>Texto em negrito</strong></p>
                <p class="Texto">Para deixar o texto em negrito, usamos o elemento <span class="code-color"><strong>&lt;b&gt;</strong></span> como ilustrado no exemplo a seguir. Oresultado aparece na Figure 11.</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;b&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/b&gt;</strong></span>está em negrito.
                </div>
                <br>
                <img src="../../assets/img/figure11.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 11. A tag <span class="code-color"><strong>&lt;b&lg;</strong></span> é usada para deixar o texto em negrito.</em>
                <br>
                <p class="Texto">De acordo com a especificação do HTML5, o elemento &lt;b&gt; deve ser usado apenas quando não houver tags mais apropriadas. O elemento que produz a mesma aparência visual, aumentando ao mesmo tempo a importância semântica do texto marcado, é <span class="code-color"><strong>&lt;strong&gt;</strong></span>.</p>
                <br>
                <p class="Subtopico"><strong>Texto em itálico</strong></p>
                <p class="Texto">Para colocar o texto em itálico, usamos o elemento <span class="code-color"><strong>&lt;i&gt;</strong></span>, como ilustrado no exemplo a seguir. O resultado aparece na <em>Figure 12</em>.</p>
                <br>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;i&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/i&gt;</strong></span>está em itálico.
                </div>
                <br>
                <img src="../../assets/img/figure12.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 12. A tag &lt;i&gt; é usada para colocar o texto em itálico</em>
                <p class="Texto">De acordo com a especificação do HTML5, o elemento &lt;i&gt; deve ser usado apenas quando não houver tags mais apropriadas</p>
                <br>
                <p class="Subtopico"><strong>Texto sublinhado</strong></p>
                <p class="Texto">Para sublinhar o texto, usamos o elemento <span class="code-color"><strong>&lt;u&gt;</strong></span>, como ilustrado no exemplo a seguir. O resultado aparece na <em>Figure 13</em>.</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;u&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/u&gt;</strong></span>está sublinhada.
                </div>
                <br>
                <img src="../../assets/img/figure13.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 13. A tag &lt;u&gt; é usada para sublinhar um texto.</em>
                <br>
                <p class="Texto">De acordo com a especificação do HTML 5, o elemento &lt;u&gt; deve ser usado apenas quando não houver maneiras melhores de sublinhar o texto. O CSS oferece uma alternativa mais moderna</p>
                <br>
                <p class="Subtopico"><strong>Largura fixa ou fonte monoespaçada</strong></p>
                <p class="Texto">Para exibir texto em fonte monoespaçada (largura fixa), freqüentemente usada para exibir código de computador, usamos o elemento <span class="code-color"><strong>&lt;tt&gt;</strong></span>, como ilustrado no exemplo a seguir. O resultado aparece na  <em>Figure 14</em>.</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;tt&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/tt&gt;</strong></span> está em fonte de largura fixa.
                </div>
                <br>
                <img src="../../assets/img/figure14.png" alt="Código" class="img-fluid">
                <br>
                <p class="Texto">A tag <span class="code-color"><strong>&lt;tt&gt;</strong></span> não é suportada em HTML5. Os navegadores ainda a exibem como esperado; porém, é preferível usar tags mais apropriadas, como <span class="code-color"><strong>&lt;code&gt;</strong></span>, <span class="code-color"><strong>&lt;kbd&gt;</strong></span>, <span class="code-color"><strong>&lt;var&gt;</strong></span> e <span class="code-color"><strong>&lt;samp&gt;</strong></span>.</p>
                <br>
                <p class="Subtopico" style="font-size: 14px;"><strong>Elementos de expressão</strong></p>
                <p class="Texto">Os elementos de expressão ou de frase não apenas alteram a aparência do texto, como também adicionam importância semântica a uma palavra ou frase. Ao usá-los, podemos enfatizar uma palavra ou marcá-la como importante. Esses elementos, ao contrário dos elementos de apresentação, são reconhecidos pelos leitores de tela, o que torna o texto mais acessível aos visitantes com deficiência visual e permite que os mecanismos de busca leiam e avaliem melhor o conteúdo da página. Os elementos de frase que usamos ao longo desta lição são <span class="code-color"><strong>&lt;em&gt;</strong></span>, <span class="code-color"><strong>&lt;strong&gt;</strong></span> e <span class="code-color"><strong>&lt;code&gt;</strong></span>.</p>
                <br>
                <p class="Subtopico"><strong>Texto enfatizado</strong></p>
                <p class="Texto">Para enfatizar um texto, usamos o elemento <span class="code-color"><strong>&lt;em&gt;</strong></span>, como mostrado no exemplo a seguir:</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;em&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/em&gt;</strong></span> está enfatizada.
                </div>
                <br>
                <img src="../../assets/img/figure15.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 15. A tag &lt;em&gt; é usada para enfatizar o texto</em>
                <br>
                <p class="Texto">Como vemos, os navegadores web exibem &lt;em&gt; com a mesma aparência de &lt;i&gt;, mas &lt;em&gt; adiciona  importância semântica ao elemento de frase, o que melhora a acessibilidade para visitantes com deficiência visual.</p>
                <br>
                <p class="Subtopico"><strong>Texto forte</strong></p>
                <p class="Texto">Para demonstrar que um texto é importante, usamos o elemento <span class="code-color"><strong>&lt;strong&gt;</strong></span> como no exemplo a seguir. O resultado aparece na <em>Figure 16</em>.</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>palavra</strong></span> é importante.
                </div>
                <br>
                <img src="../../assets/img/figure15.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 16. A tag &lt;strong&gt; é usada para marcar a importância de um texto.</em>
                <br>
                <p class="Texto">Como vemos, os navegadores web exibem <span class="code-color"><strong>&lt;strong&gt;</strong></span> da mesma forma que &lt;b&gt;, mas <span class="code-color"><strong>&lt;strong&gt;</strong></span> adiciona importância semântica ao elemento de frase, o que melhora a acessibilidade para visitantes com deficiência visual.</p>
                <br>
                <p class="Subtopico"><strong>Código de Computador</strong></p>
                <p class="Texto">Para inserir um trecho de código, podemos colocá-lo dentro do elemento &lt;code&gt; como ilustrado no
                exemplo a seguir. O resultado aparece na <em>Figure 17</em>.</p>
                <div class="code-smaller">
                  O código Markdown<span class="code-color"><strong>&lt;code&gt;</strong></span># Heading<span class="code-color"><strong>&lt;/code&gt;</strong></span> cria um título no nível mais alto da hierarquia.
                </div>
                <br>
                <img src="../../assets/img/figure17.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 17. A tag &lt;code&gt; é usada para inserir um trecho de código de computador.</em>
                <br>
                <p class="Subtopico"><strong>Texto destacado</strong></p>
                <p class="Texto">Para destacar o texto com um fundo amarelo, semelhante ao estilo de um marca-texto, usamos o elemento <span class="code-color"><strong>&lt;mark&gt;</strong></span> como no exemplo a seguir. O resultado aparece na <em>Figure 18</em>.</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;mark&gt;</strong></span>palavra <span class="code-color"><strong>&lt;/mark&gt;</strong></span> está destacada.
                </div> 
                <br>
                <img src="../../assets/img/figure18.png" alt="Código" class="img-fluid">
                <br>
                <em>Figure 18. A tag &lt;mark&gt; é usada para para realçar um texto com um fundo amarelo<em>
                <br>
                <p class="Subtopico"><strong>Formatando o texto de nossa lista de compras em HTML</strong></p>
                <p class="Texto">Com base em nossos exemplos anteriores, vamos inserir alguns elementos de expressão para alterar a aparência do texto e, ao mesmo tempo, adicionar importância semântica. O resultado aparece na <em>Figure 19</em>.</p>
                <br>
                <div style="display: flex; flex-wrap: wrap;">
  <div style="flex-basis: 50%; padding: 10px;">
  <pre><code>
        <span class="code-color"><strong>&lt;h1&gt;</strong></span>Garden Party<span class="code-color"><strong>&lt;/h1&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span>
            Invitation to <span class="code-color"><strong>&lt;strong&gt;</strong></span>John's garden party<span class="code-color"><strong>&lt;/strong&gt;</strong></span>.<br>
            <span class="code-color"><strong>&lt;strong&gt;</strong></span>Saturday, next week<span class="code-color"><strong>&lt;/strong&gt;</strong></span>.
        <span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Agenda<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        <span class="code-color"><strong>&lt;ol&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Welcome<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>
                Barbecue
                <span class="code-color"><strong>&lt;ul&gt;</strong></span>
                    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;em&gt;</strong></span>Vegetables<span class="code-color"><strong>&lt;/em&gt;</strong></span><span class="code-color"><strong>&lt;/li&gt;</strong></span>
                    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;em&gt;</strong></span>Meat<span class="code-color"><strong>&lt;/em&gt;</strong></span><span class="code-color"><strong>&lt;/li&gt;</strong></span>
                    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;em&gt;</strong></span>Burgers<span class="code-color"><strong>&lt;/em&gt;</strong></span>, including vegetarian options<span class="code-color"><strong>&lt;/li&gt;</strong></span>
                <span class="code-color"><strong>&lt;/ul&gt;</strong></span>
            <span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Dessert<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;mark&gt;</strong></span>Fireworks<span class="code-color"><strong>&lt;/mark&gt;</strong></span><span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;/ol&gt;</strong></span>
        <span class="code-color"><strong>&lt;hr&gt;</strong></span>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Please bring<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        <span class="code-color"><strong>&lt;ul&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Salad<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Drinks<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Bread<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Snacks<span class="code-color"><strong>&lt;/li&gt;</strong></span>
            <span class="code-color"><strong>&lt;li&gt;</strong></span>Desserts<span class="code-color"><strong>&lt;/li&gt;</strong></span>
        <span class="code-color"><strong>&lt;/ul&gt;</strong></span>
    </pre></code>
  </div>
  <div style="flex-basis: 50%; padding: 10px;">
    <img src="../../assets/img/figure19.png" alt="Código" class="img-fluid">
  </div>
</div>
            <em>Figure 19. A página HTML com alguns elementos de formatação.</em>
            <br>
            <p class="Texto">Neste exemplo de documento HTML, as informações mais importantes sobre a festa ao ar livre foram realçadas usando o elemento <span class="code-color"><strong>&lt;strong&gt;</strong></span>. As iguarias disponíveis para o churrasco foram enfatizadas com o elemento <span class="code-color"><strong>&lt;em&gt;</strong></span>. Os fogos de artifício foram destacados simplesmente com o elemento <span class="code-color"><strong>&lt;mark&gt;</strong></span>.</p>
            <p class="Texto">Para treinar, você pode remodelar outras partes do texto usando os outros elementos de formatação.</p>
            <br>
            <p class="Subtopico"><strong>Texto pré-formatado</strong></p>
            <p class="Texto">Na maioria dos elementos HTML, o espaço em branco geralmente é reduzido a um espaçamento simples ou mesmo totalmente ignorado. No entanto, existe um elemento HTML chamado <span class="code-color"><strong>&lt;pre&gt;</strong></span> que permite definir o chamado texto pré-formatado. Qualquer espaço em branco incluído no conteúdo deste elemento, incluindo espaços e quebras de linha, é preservado e exibido no navegador web. Além disso, o texto é exibido em uma fonte de largura fixa, semelhante ao elemento &lt;code&gt;.</p>
    <div class="typewriter-small" style="width: 50%; text-align: left;" >
    <pre><code>
<span class="code-color"><strong>&lt;pre&gt;</strong></span>
field() {
    shift $1 ; echo $1
    }
<span class="code-color"><strong>&lt;/pre&gt;</strong></span>
    </pre></code>
    </div>
            <p><em>Figure 20. Representação do código HTML em um navegador, ilustrando como o elemento &lt;pre&gt; preserva os espaços em branco.</em></p>
            <br>
            <p class="Subtopico"><strong>Agrupando elementos</strong></p>
            <p class="Texto">Por convenção, os elementos HTML são divididos em duas categorias:</p>
            <p class="Subtopico" style="font-size: 14px;"><strong>Elementos de bloco</strong></p>
            <p class="Texto">Aparecem em uma nova linha e ocupam toda a largura disponível. Alguns exemplos já discutidos são <strong>&lt;p&gt;</strong>, <strong>&lt;ol&gt;</strong> e <strong>&lt;h2&gt;</strong>.</p>
            <p class="Subtopico" style="font-size: 14px;"><strong>Elementos de linha</strong></p>
            <p class="Texto">Aparecem na mesma linha que outros elementos de texto, ocupando apenas o espaço necessário ao conteúdo. Dentre esses elementos temos <strong>&lt;strong&gt;</strong>, <strong>&lt;pre&gt;</strong> e <strong>&lt;i&gt;</strong>.</p>
            <br>
            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">O HTML5 introduziu categorias de elementos mais precisas para evitar confusões com os blocos CSS. Para simplificar, nos limitaremos aqui à subdivisão convencional em elementos de bloco e de linha.</p>
                        </div>
                    </div>
                <br>
                <p class="Texto">Os elementos fundamentais para agrupar diversos elementos juntos são <span class="code-color"><strong>&lt;div&gt;</strong></span> e <span class="code-color"><strong>&lt;span&gt;</strong></span>.</p>
                <p class="Texto">O elemento <span class="code-color"><strong>&lt;div&gt;</strong></span> é um contêiner em nível de bloco para outros elementos HTML e não adiciona valor semântico por si só. Este elemento serve para dividir um documento HTML em seções e estruturar seu conteúdo, tanto para melhorar a legibilidade do código quanto para aplicar estilos CSS a um grupo de elementos, como veremos em uma lição posterior.</p>
                <p class="Texto">Por padrão, os navegadores web sempre inserem uma quebra de linha antes e depois de cada elemento <span class="code-color"><strong>&lt;div&gt;</strong></span> para que sejam exibidos em sua própria linha.</p>
                <p class="Texto">Por sua vez, o elemento <span class="code-color"><strong>&lt;span&gt;</strong></span> é usado como um envoltório para texto em HTML e geralmente serve para agrupar outros elementos de linha para permitir a aplicação de estilos em uma parte menor do texto usando CSS.</p>
                <p class="Texto">O elemento &lt;span&gt; se comporta como um texto normal e não inicia uma nova linha. Portanto, tratase de um <em>elemento de linha</em>.</p>
                <p class="Texto">O exemplo a seguir compara a representação visual do elemento semântico &lt;p&gt; e os elementos de agrupamento &lt;div&gt; e &lt;span&gt;:</p>
                <br>
                <p class="Texto">O exemplo a seguir compara a representação visual do elemento semântico &lt;p&gt; e os elementos de agrupamento &lt;div&gt; e &lt;span&gt;:</p>
                <div class="typewriter-small" style="width: 50%; text-align: left;" >
        <pre><code>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Texto dentro de um parágrafo<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>Outro parágrafo de texto<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;hr&gt;</strong></span>
<span class="code-color"><strong>&lt;div&gt;</strong></span>Texto envolvido dentro de um elemento <span class="code-color"><strong>&lt;code&gt;</strong></span>div<span class="code-color"><strong>&lt;/code&gt;</strong></span><span class="code-color"><strong>&lt;/div&gt;</strong></span>
<span class="code-color"><strong>&lt;div&gt;</strong></span>Outro elemento <span class="code-color"><strong>&lt;code&gt;</strong></span>div<span class="code-color"><strong>&lt;/code&gt;</strong></span> com mais texto<span class="code-color"><strong>&lt;/div&gt;</strong></span>
<span class="code-color"><strong>&lt;hr&gt;</strong></span>
<span class="code-color"><strong>&lt;span&gt;</strong></span>Conteúdo do span<span class="code-color"><strong>&lt;/span&gt;</strong></span>
<span class="code-color"><strong>&lt;span&gt;</strong></span>e mais conteúdo do span<span class="code-color"><strong>&lt;/span&gt;</strong></span>
        </pre></code>

                    </div>
                <p class="Texto">Um navegador web exibiria este código como mostrado na <em>Figure 21</em>.</p>
                <img src="../../assets/img/figure21.png" alt="Código" class="img-fluid">
                <p><em>Figure 21. Representação do documento de teste em um navegador, ilustrando as diferenças entre os elementos
                parágrafo, div e span em HTML.</em></p>
                <p class="Texto">Já vimos que, por padrão, o navegador adiciona espaços antes e depois dos elementos &lt;p&gt;. Esses
                espaços não são aplicados aos elementos de agrupamento &lt;div&gt; e &lt;span&gt;. Entretanto, os elementos
                &lt;div&gt; são formatados como blocos independentes, ao passo que o texto nos elementos &lt;span&gt; são
                mostrados na mesma linha</p>
                <br>
                <p class="Subtopico"><strong>Estrutura da página HTML</strong></p>
                <p class="Texto">Já falamos de como como usar elementos HTML para descrever o conteúdo de uma página web semanticamente—em outras palavras, para transmitir significado e contexto ao texto. Outro grupo
                de elementos tem o propósito de descrever a estrutura semântica de uma página web, uma expressão
                ou sua estrutura. Esses são os elementos de bloco, ou seja, elementos que se comportam visualmente
                de forma semelhante a um elemento <div>. Sua finalidade é definir a estrutura semântica de uma
                página web especificando áreas bem definidas como cabeçalhos, rodapés e o conteúdo principal da
                página. Esses elementos permitem o agrupamento semântico do conteúdo de forma que ele também
                possa ser entendido por um computador, incluindo mecanismos de busca e leitores de tela.</p>
                <p class="Subtopico" style="font-size: 14px;"><strong>O elemento  &lt;header&gt;</strong></p>
                <p class="Texto">O elemento <span class="code-color"><strong>&lt;header&gt;</strong></span> (cabeçalho) contém informações introdutórias ao elemento semântico circundante dentro de um documento HTML. Um cabeçalho é diferente de um título, mas um cabeçalho geralmente inclui um elemento de título ( &lt;h1&gt;, … ,  &lt;h6&gt;).</p>
                <p class="Texto">Na prática, esse elemento é mais frequentemente usado para representar o cabeçalho da página, como um banner com um logotipo. Também pode ser usado para introduzir o conteúdo dos seguintes elementos:  &lt;body&gt;, &lt;section&gt;, &lt;article&gt;,  &lt;nav&gt;,  &lt;aside&gt;
                </p>
                <p class="Texto">Um mesmo documento pode ter <strong>múltiplos</strong> elementos &lt;header&gt;, mas um elemento &lt;header&gt; <strong>não</strong> pode ser aninhado dentro de outro elemento &lt;header&gt;. Um elemento &lt;footer&gt; também não pode ser usado dentro de um elemento &lt;header&gt;.
                </p>
                <p class="Texto">Por exemplo, para adicionar um cabeçalho ao nosso documento de exemplo, podemos fazer o
                seguinte:</p>
                <div class="code-smaller">
                    Esta <span class="code-color"><strong>&lt;b&gt;</strong></span>palavra<span class="code-color"><strong>&lt;/b&gt;</strong></span>está em negrito.
                </div>

                </div>
            </div>
        </div>
    </div>
    <a href="../questoesModulo01/unidade"></a>
    <?php include('../../layouts/footer.php') ?>