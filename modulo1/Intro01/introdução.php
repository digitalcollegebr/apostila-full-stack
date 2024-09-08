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

    <!-- CONTEUDO - Begin -->
    <!-- Back to top -->
    <a id="BackToTop"></a>

    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <p class="Titulo">Desenvolvimentos de softwares e tecnologias web
                </p>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <br>
                        <p class="Texto">Os primeiros computadores eram programados através de um cansativo processo de conectar cabos em soquetes. Os cientistas da computação logo iniciaram uma busca incessante por maneiras mais fáceis de dizer ao computador o que fazer. Este capítulo é uma introdução às ferramentas de programação. Ele trata das principais maneiras pelas quais uma série de instruções em forma de texto —as linguagens de programação— representam as tarefas que um programador deseja realizar e as ferramentas que transformam o programa em uma forma chamada <span class="code-color"><strong>linguagem de máquina</strong></span> que pode ser executada por um computador.</p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <br>
                        <div class="image-container">
                            <img src="../../assets/img/first_Computer.jpg" alt="Computador antigo">
                        </div>
                    </div>
                </div>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Neste texto, os termos <em>programas</em> e <em>aplicativos</em> são usados de forma intercambiável</p>
                    </div>
                </div>
                <br><br>
                <p class="Subtopico"><strong>Código fonte</strong>
                </p>
                <p class="Texto">Um programador normalmente desenvolve um aplicativo escrevendo uma descrição textual, chamada <spa class="code-color"><strong>código-fonte</strong></spa>, da tarefa desejada. O código-fonte está em uma <span class="code-color"><strong>linguagem de programação</strong></span> cuidadosamente definida que representa o que o computador pode fazer em uma abstração de alto nível compreensível pelos humanos. Também foram desenvolvidas ferramentas para permitir que os
                programadores, bem como os não-programadores, expressem suas ideias visualmente, mas o código-fonte continua sendo a forma predominante de se programar.</p>
                <p class="Texto">Da mesma forma que uma linguagem natural inclui substantivos, verbos e construções para expressar ideias de forma estruturada, as palavras e a pontuação em uma linguagem de programação são representações simbólicas de operações que serão realizadas na máquina.</p>
                <div class="container-side">
                    <div class="text">
                    <p class="Texto">Nesse sentido, o código-fonte não difere muito de qualquer outro texto em que o autor emprega as regras bem estabelecidas de uma linguagem natural para se comunicar com o leitor. No caso do código-fonte, o “leitor” é a própria máquina e, portanto, o texto não pode conter ambigüidades ou inconsistências, nem mesmo as mais sutis. E como qualquer texto que discuta algum tópico em profundidade, o código-fonte também precisa ser bem estruturado e organizado de forma lógica ao se desenvolver aplicativos complexos. Programas muito simples e exemplos didáticos podem ser armazenados em poucas linhas de um único arquivo de texto contendo todo o código-fonte do programa. Programas mais complexos podem ser subdivididos em milhares de arquivos, cada um com milhares de linhas</p>
                    </div>
                    <div class="image-side">
                        <img src="../../assets/img/codigo.gif" alt="GIF de código">
                    </div>
                </div>
                <p class="Texto">O código-fonte dos aplicativos profissionais deve ser organizado em pastas diferentes, geralmente associadas a uma finalidade específica. Um programa de chat, por exemplo, pode ser organizado em duas pastas: uma que contém os arquivos de código que tratam da transmissão e recepção de mensagens pela rede e outra com os arquivos que constituem a interface e reagem às ações do usuário. De fato, é comum que haja muitas pastas e subpastas com arquivos de código-fonte dedicados a tarefas extremamente específicas dentro do aplicativo.</p>
                <p class="Texto">Além disso, o código-fonte nem sempre está isolado em seus próprios arquivos, com tudo escrito em uma única linguagem. No caso dos aplicativos web, por exemplo, um documento <span class="code-color"><strong>HTML</strong></span> pode incorporar código em  <span class="code-color"><strong>JavaScript</strong></span> para complementar o documento com funcionalidades extras.</p>
                <br>
                <p class="Subtopico"><strong>Editores de código e IDE</strong>
               </p>
               <p class="Texto">Existe uma variedade estonteante de maneiras de escrever um código-fonte. Assim, muitos desenvolvedores lançam mão de ferramentas que ajudam a escrever e testar o programa.</p>
               <p class="Texto">O arquivo de código-fonte não é mais que um arquivo de texto simples e, como tal, pode ser editado em qualquer editor de texto, por mais despojado que seja. Para facilitar a distinção entre códigofonte e texto simples, cada linguagem adota uma extensão de nome de arquivo autoexplicativa: <span class="code-color"><em>.c</em></span> para a linguagem <span class="code-color"><strong>C</strong></span>, <span class="code-color"><em>.py</em></span> para <span class="code-color"><strong>Python</strong></span>, <span class="code-color"><em>.js</em></span> para <span class="code-color"><strong>JavaScript</strong></span> etc. Os editores de texto de uso geral costumam reconhecer o código-fonte das linguagens mais populares e adicionam automaticamente itálico, cores e indentação para tornar o código mais legível.</p>
               <p class="Texto">Nem todo desenvolvedor escolhe editar o código-fonte em um editor de uso geral. Um ambiente de <em>desenvolvimento integrado (em inglês, integrated development environment ou IDE)</em> inclui um editor de texto junto com ferramentas que ajudam o programador a evitar erros de sintaxe e inconsistências óbvias. Esses editores são particularmente recomendados para os programadores menos experientes, mas os programadores experientes também podem usá-los.</p>
                <p class="Texto">Os IDEs mais populares, como o Visual Studio, o Eclipse e o Xcode, observam de forma inteligente o que o programador digita, muitas vezes sugerindo palavras (preenchimento automático) e verificando o código em tempo real. Os IDEs podem inclusive oferecer depuração e testes automatizados para identificar problemas sempre que o código-fonte é alterado.</p>
                <div class="image">
                    <img src="../../assets/img/ides.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php
    // A_S - Footer
    include('../../layouts/footer.php');
?>