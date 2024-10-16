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
                <p class="Titulo">031.1 - Desenvolvimentos de softwares e tecnologias web</p>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <br>
                        <p class="Texto">Os primeiros computadores eram programados através de um cansativo processo de conectar cabos em soquetes. Os cientistas da computação logo iniciaram uma busca incessante por maneiras mais fáceis de dizer ao computador o que fazer. Este capítulo é uma introdução às ferramentas de programação. Ele trata das principais maneiras pelas quais uma série de instruções em forma de texto — as linguagens de programação — representam as tarefas que um programador deseja realizar e as ferramentas que transformam o programa em uma forma chamada <span class="code-color"><strong>linguagem de máquina</strong></span> que pode ser executada por um computador.</p>
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
                <p class="Subtopico"><strong>Código fonte</strong></p>
                <p class="Texto">Um programador normalmente desenvolve um aplicativo escrevendo uma descrição textual, chamada <span class="code-color"><strong>código-fonte</strong></span>, da tarefa desejada. O código-fonte está em uma <span class="code-color"><strong>linguagem de programação</strong></span> cuidadosamente definida que representa o que o computador pode fazer em uma abstração de alto nível compreensível pelos humanos. Também foram desenvolvidas ferramentas para permitir que os programadores, bem como os não-programadores, expressem suas ideias visualmente, mas o código-fonte continua sendo a forma predominante de se programar.</p>
                <p class="Texto">Da mesma forma que uma linguagem natural inclui substantivos, verbos e construções para expressar ideias de forma estruturada, as palavras e a pontuação em uma linguagem de programação são representações simbólicas de operações que serão realizadas na máquina.</p>
                <div class="container-side">
                    <div class="text">
                        <p class="Texto">Nesse sentido, o código-fonte não difere muito de qualquer outro texto em que o autor emprega as regras bem estabelecidas de uma linguagem natural para se comunicar com o leitor. No caso do código-fonte, o “leitor” é a própria máquina e, portanto, o texto não pode conter ambigüidades ou inconsistências, nem mesmo as mais sutis. E como qualquer texto que discuta algum tópico em profundidade, o código-fonte também precisa ser bem estruturado e organizado de forma lógica ao se desenvolver aplicativos complexos. Programas muito simples e exemplos didáticos podem ser armazenados em poucas linhas de um único arquivo de texto contendo todo o código-fonte do programa. Programas mais complexos podem ser subdivididos em milhares de arquivos, cada um com milhares de linhas.</p>
                    </div>
                    <br>
                    <div class="image-side">
                        <img src="../../assets/img/codigo.gif" alt="GIF de código">
                    </div>
                </div>
                <br>
                <p class="Texto">O código-fonte dos aplicativos profissionais deve ser organizado em pastas diferentes, geralmente associadas a uma finalidade específica. Um programa de chat, por exemplo, pode ser organizado em duas pastas: uma que contém os arquivos de código que tratam da transmissão e recepção de mensagens pela rede e outra com os arquivos que constituem a interface e reagem às ações do usuário. De fato, é comum que haja muitas pastas e subpastas com arquivos de código-fonte dedicados a tarefas extremamente específicas dentro do aplicativo.</p>
                <p class="Texto">Além disso, o código-fonte nem sempre está isolado em seus próprios arquivos, com tudo escrito em uma única linguagem. No caso dos aplicativos web, por exemplo, um documento <span class="code-color"><strong>HTML</strong></span> pode incorporar código em  <span class="code-color"><strong>JavaScript</strong></span> para complementar o documento com funcionalidades extras.</p>
                <br>
                <p class="Subtopico"><strong>Editores de código e IDE</strong></p>
                <p class="Texto">Existe uma variedade estonteante de maneiras de escrever um código-fonte. Assim, muitos desenvolvedores lançam mão de ferramentas que ajudam a escrever e testar o programa.</p>
                <p class="Texto">O arquivo de código-fonte não é mais que um arquivo de texto simples e, como tal, pode ser editado em qualquer editor de texto, por mais despojado que seja. Para facilitar a distinção entre código-fonte e texto simples, cada linguagem adota uma extensão de nome de arquivo autoexplicativa: <span class="code-color"><em>.c</em></span> para a linguagem <span class="code-color"><strong>C</strong></span>, <span class="code-color"><em>.py</em></span> para <span class="code-color"><strong>Python</strong></span>, <span class="code-color"><em>.js</em></span> para <span class="code-color"><strong>JavaScript</strong></span> etc. Os editores de texto de uso geral costumam reconhecer o código-fonte das linguagens mais populares e adicionam automaticamente itálico, cores e indentação para tornar o código mais legível.</p>
                <p class="Texto">Nem todo desenvolvedor escolhe editar o código-fonte em um editor de uso geral. Um ambiente de <em>desenvolvimento integrado (em inglês, integrated development environment ou IDE)</em> inclui um editor de texto junto com ferramentas que ajudam o programador a evitar erros de sintaxe e inconsistências óbvias. Esses editores são particularmente recomendados para os programadores menos experientes, mas os programadores experientes também podem usá-los.</p>
                <p class="Texto">Os IDEs mais populares, como o Visual Studio, o Eclipse e o Xcode, observam de forma inteligente o que o programador digita, muitas vezes sugerindo palavras (preenchimento automático) e verificando o código em tempo real. Os IDEs podem inclusive oferecer depuração e testes automatizados para identificar problemas sempre que o código-fonte é alterado.</p>
                
                <p class="Texto">Alguns programadores mais experientes optam por editores menos intuitivos, como o Vim, que oferece maior flexibilidade e não requer a instalação de pacotes adicionais. Esses programadores usam ferramentas externas independentes para adicionar os recursos que são integrados quando você usa um IDE.</p>
                <br>
                <p class="Subtopico"><strong>Manutenção de código</strong></p>
                <p class="Texto">Seja em um IDE ou usando ferramentas autônomas, é importante empregar algum tipo de <em>sistema de controle de versão (VCS)</em>. O código-fonte está em constante evolução porque as falhas imprevistas precisam ser corrigidas e aprimoramentos devem ser incorporados. Uma consequência inevitável dessa evolução é que as correções e aprimoramentos podem interferir em outras partes dos aplicativos em uma grande base de código. Ferramentas de controle de versão como Git, Subversion e Mercurial mantêm um registro de todas as alterações feitas no código e a pessoa que as fez, permitindo rastrear e, eventualmente, voltar atrás em uma modificação malsucedida.</p>
                <p class="Texto">Além disso, as ferramentas de controle de versão permitem que cada desenvolvedor da equipe trabalhe em uma cópia dos arquivos do código-fonte sem interferir no trabalho dos outros programadores. Assim que as novas versões do código-fonte estiverem prontas e testadas, as correções ou melhorias feitas em uma cópia podem ser incorporadas pelos outros membros da equipe.</p>
                <div class="container-side">
                    <div class="text">
                        <p class="Texto">O Git, o sistema de controle de versão mais popular hoje em dia, permite que muitas cópias independentes de um repositório sejam mantidas por diferentes pessoas, que compartilham suas alterações como desejarem. No entanto, quer o sistema de controle de versão seja centralizado ou descentralizado, a maioria das equipes mantém um único repositório confiável, com um código-fonte e recursos sólidos. Muitos serviços online oferecem espaços de armazenamento para repositórios de código-fonte. Os mais populares dentre eles são o <span class="code-color"><strong>GitHub</strong></span> e o <span class="code-color"><strong>GitLab</strong></span>, mas o <span class="code-color"><strong>Savannah</strong></span>, do projeto GNU, também vale a menção.</p>
                    </div>
                    <div class="image-side">
                            <div class="video-container">
                            <video autoplay loop muted>
            <source src="../../assets/img/GitHub.mp4" type="video/mp4">
        </video>
                     </div>
                    </div>
                </div>

                <p class="Subtopico" style="font-size:26px;"><strong>Linguagens de programação</strong></p>
                <p class="Subtopico"><strong>Paradigmas</strong></p>
                <p class="Texto">Os paradigmas definem as premissas nas quais se baseia uma linguagem de programação, especialmente no que diz respeito à maneira como o código-fonte deve ser estruturado.</p>
                <p class="Texto">O desenvolvedor parte do paradigma da linguagem para formular as tarefas a serem executadas pela máquina. Essas tarefas, por sua vez, são expressas simbolicamente com as palavras e construções sintáticas oferecidas pela linguagem.</p>
                <p class="Texto">O código a seguir é um exemplo de linguagem procedural. Escrito em <span class="code-color"><strong>C</strong></span>, ele define variáveis que representam as faces, a área e o volume de formas geográficas. O valor da variável side é atribuído em <span class="code-color"><em>main()</em></span>, que é a função invocada quando o programa é executado. As variáveis <em>area e volume</em> são calculadas nas sub-rotinas <span class="code-color"><em>square()</em></span> e <span class="code-color"><em>cube()</em></span> que precedem a função principal:</p>
                <br>
            <div class="typewriter-small" id="copycode"  style="width: 70%;">
            <button class="copy-btn" onclick="copyCode()">
        <i class="fas fa-copy"></i>
        Copiar
    </button>
                  <p><pre><code><span class="red-color"><strong>include</strong></span> <span class="comment">&lt;stdio.h&gt;</span>
        <span class="comment"><strong>float</strong></span> side;
        <span class="comment"><strong>float</strong></span> area;
        <span class="comment"><strong>float</strong></span> volume;

        <span class="comment"><strong>void</strong></span> <span class="dark_blue_code"><strong>square</strong></span>()&lbrace; area = side * side;  &rbrace;

        <span class="comment"><strong>void</strong></span> <span class="dark_blue_code"><strong>cube</strong></span>()&lbrace; volume = area * side;  &rbrace;

        <span class="comment"><strong>int</strong></span><span class="dark_blue_code"><strong> main</strong></span>() &lbrace;
                side = <span class="blue-color"><strong>2</strong></span>;
                square();
                cube();
                printf(<span class="orange-code">"Volume: %f\n"</span>), volume;
                <span class="green-code"><strong>return</strong></span><span class="dark_blue_code"><strong> 0</strong></span>;
        &rbrace;
            </p>
                </code></pre>
            </div>
        </div>
        <div class="text-section">
            <p class="Texto">A ordem das ações definidas em <em>main()</em> determina a sequência de estados do programa, caracterizada pelo valor das variáveis <em>side, area</em> e <em>volume</em>. O exemplo se encerra após exibir o valor de volume com a instrução <span class="code-color"><em>printf</em></span>. Por outro lado, o paradigma da <em>programação orientada a objetos (POO)</em> tem como principal característica a separação do estado do programa em subestados independentes. Esses subestados e as operações associadas são os objetos, assim chamados porque têm uma existência mais ou menos independente dentro do programa e porque têm finalidades específicas.</p>
        </div>
        </div>
        <br>
        <p class="Texto">Os diferentes paradigmas não restringem necessariamente o tipo de tarefa que pode ser executada por um programa. O código do exemplo anterior pode ser reescrito de acordo com o paradigma POO usando a linguagem <span class="code-color"><strong>C++</strong></span>:</p>
        <br>
        <div class="typewriter-small" style=" margin: 0 auto;">
        <button class="copy-btn" onclick="copyCode()">
        <i class="fas fa-copy"></i>
        Copiar
    </button>
                  <p><pre><code><span class="red-color"><strong>include</strong></span> <span class="comment">&lt;iostream&gt;</span>
        <span class="green-code"><strong>class</strong></span><span class="code-color"><strong> Cube</strong></span>&lbrace;
        <span class="comment"><strong>float</strong></span> side;
        <span class="blue-code">public:</span>
        Cube&lpar;<span class="comment"><strong>float</strong></span> s&rpar; &lbrace; side * side; &rbrace;
        &rbrace;;

        <span class="comment"><strong>int</strong></span> <span class="dark_blue_code"><strong>main</strong></span>()&lbrace;
        <span class="comment"><strong>float</strong></span> side  = <span class="dark_blue-code"><strong>2</strong></span>;
        Cube cube(side);
        std::cout << <span class="orange-code">"Volume: "</span> cube.volume() << std::endl;
        <span class="green-code"><strong>return</strong></span><span class="dark_blue_code"><strong> 0</strong></span>;
        &rbrace;
        </p>
            </code></pre>
        </div>
        <br>
        <p class="Texto">A função <span class="code-color"><em>main()</em></span> ainda está presente. Mas agora temos uma nova palavra, <em>class</em> (classe), que introduz a definição de um objeto. A classe definida, chamada <em>Cube</em>, contém suas próprias variáveis e sub-rotinas. No POO, uma variável também é chamada de <em>atributo</em> e uma sub-rotina é chamada de <em>método</em>.</p>
        <p class="Texto">É possível criar vários objetos independentes pertencentes à mesma classe; as classes também podem ser compostas por outras classes Lembre-se de que esses mesmos recursos podem ser escritos de maneira diferente e que os exemplos deste capítulo são bem simplificados. C e C++ possuem recursos muito mais sofisticados, possibilitando construções bem mais complexas e práticas.</p>
        <p class="Texto">A maioria das linguagens de programação não impõe rigorosamente um paradigma, mas permite que os programadores escolham diversos aspectos de um paradigma ou de outro. O JavaScript, por exemplo, incorpora aspectos de diferentes paradigmas. O programador pode decompor o programa inteiro em funções que não compartilham um estado comum entre si:</p>
        <div class="typewriter-small" style="" id="copycode">
        <button class="copy-btn" onclick="copyCode()">
        <i class="fas fa-copy"></i>
        Copiar
    </button>
                <p><pre><code><span class="green-code"><strong>function</strong></span> cube(side) &lbrace;
                <span class="green-code"><strong>return</strong></span> side*side*side;
        &rbrace;
        console.log(<span class="orange-code">"Volume: " </span> + cube(<span class="dark-blue_code">2</span>));
</pre></code>
        </p>
        </div>
        <br>
        <p class="Texto">Embora este exemplo seja semelhante à programação procedural, note que a função recebe uma cópia de todas as informações necessárias para sua execução e sempre produz o mesmo resultado para o mesmo parâmetro, independentemente das alterações que ocorram fora do escopo da função. Este paradigma, denominado <em>funcional</em>, é fortemente influenciado pelo formalismo matemático, no qual toda operação é autossuficiente.</p>
        <p class="Texto">Outro paradigma cobre as linguagens <em>declarativas</em>, que descrevem os estados em que se deseja que o sistema esteja. Uma linguagem declarativa pode descobrir como atingir os estados especificados. O <span class="code-color"><strong>SQL</strong></span>, a linguagem universal para consulta de bancos de dados, às vezes é chamada de linguagem declarativa, embora na verdade ocupe um nicho único no panteão da programação.</p>
        <p class="Texto">Não existe um paradigma universal que possa ser adotado em qualquer contexto. A escolha da linguagem também pode ser restrita pelos idiomas suportados na plataforma ou ambiente de execução em que o programa será usado.</p>
        <p class="Texto">Um aplicativo web que será executado pelo navegador, por exemplo, precisa ser escrito em <span class="code-color"><strong>JavaScript</strong></span>, que é uma linguagem universalmente suportada pelos navegadores (na verdade, algumas outras linguagens podem ser usadas porque fornecem conversores para criar JavaScript). Assim, para o navegador web—às vezes chamado de <em>lado do cliente</em> ou <em>front end</em> do aplicativo web—o desenvolvedor terá de usar os paradigmas permitidos em JavaScript. O <em>lado do servidor</em> ou <em>back end</em> do aplicativo, que lida com as solicitações do navegador, normalmente é programado em uma linguagem diferente; o <span class="code-color"><strong>PHP</strong></span> é mais popular para essa finalidade.</p>
        <p class="Texto">Independentemente do paradigma, toda linguagem possui bibliotecas de funções pré-construídas que podem ser incorporadas ao código. Funções matemáticas—como as ilustradas no código de exemplo—não precisam ser implementadas do zero, pois a linguagem já tem a função pronta para uso. O JavaScript, por exemplo, fornece o objeto <span class="code-color"><em>Math</em></span>, com as operações matemáticas mais comuns.</p>
        <p class="Texto">Geralmente há funções ainda mais especializadas disponibilizadas pelo fornecedor da linguagem ou por outros desenvolvedores. Essas bibliotecas de recursos extras podem estar na forma de códigofonte, ou seja, em arquivos extras que são incorporados ao arquivo em que serão usados. Em JavaScript, a incorporação é feita com <span class="code-color"><em>import from</em></span>:</p>
        <div class="typewriter-small" id="copycode"  style=" width: 45%; font-size: 12px;">
        <button class="copy-btn" onclick="copyCode()">
            <i class="fas fa-copy"></i>
            Copiar
         </button>
         <pre><code class="Texto">
<span class="green-code"><strong>import</strong></span>{ OrbitControls }<span class="green-code"><strong>from</strong></span><span class="orange-code">'modules/OrbitControls.js'</span>;
                </code></pre>
            </div>
            <br>
            <p class="Texto">Esse tipo de importação, em que o recurso incorporado também é um arquivo de código-fonte, é mais frequentemente usado nas chamadas <em>linguagens interpretadas</em>. As <em>linguagens compiladas</em> permitem, entre outras coisas, a incorporação de funcionalidades pré-compiladas em linguagem de máquina, ou seja, bibliotecas <em>compiladas</em>. A próxima seção explica as diferenças entre esses tipos de linguagem.</p>
            <br>
            <p class="Subtopico"><strong>Compiladores e interpretadores</strong></p>
            <p class="Texto">Como já sabemos, o código-fonte é uma representação simbólica de um programa que precisa ser traduzido em linguagem de máquina para ser executado.</p>
            <p class="Texto">Grosso modo, existem duas maneiras possíveis de se fazer a tradução: converter com antecedência o código-fonte para execução futura ou converter o código no momento de sua execução. As linguagens da primeira modalidade são chamadas de <em>linguagens compiladas</em> e as da segunda, <em>linguagens interpretadas</em>. Algumas linguagens interpretadas oferecem a compilação como opção para que o programa possa iniciar mais rápido.</p>
            <p class="Texto">Nas linguagens compiladas, existe uma distinção clara entre o código-fonte do programa e o programa em si, que será executado pelo computador. Depois de compilado, o programa normalmente rodará apenas no sistema operacional e na plataforma para os quais foi compilado.</p>
            <p class="Texto">Em uma linguagem interpretada, o próprio código-fonte é tratado como o programa, e o processo de conversão para linguagem de máquina é transparente para o programador. Nas linguagens interpretadas, é comum chamar o código-fonte de script. O interpretador traduz o <em>script</em> para a linguagem de máquina do sistema em que ele está sendo executado.</p>
            <br>
            <p class="Subtopico"><strong>Compilação e compiladores</strong></p>
            <p class="Texto">A linguagem de programação C é um dos exemplos mais conhecidos de linguagem compilada. Os principais pontos fortes da linguagem C são sua flexibilidade e desempenho. Tanto supercomputadores e quando os microcontroladores de alto desempenho de eletrodomésticos podem ser programados na linguagem C. Outros exemplos de linguagens compiladas populares são C++ e C# (C sharp). Como seus nomes sugerem, essas linguagens são inspiradas em C, mas incluem recursos que suportam o paradigma orientado a objetos.</p>
            <p class="Texto">O mesmo programa escrito em C ou C++ pode ser compilado para diferentes plataformas, exigindo pouca ou nenhuma alteração no código-fonte. É o compilador que define a plataforma de destino do programa. Existem compiladores específicos a plataformas, bem como compiladores que atendem a diversas plataformas, como o GCC (que significa <em>GNU Compiler Collection</em>) , capazes de produzir programas binários para muitas arquiteturas distintas.</p>
            <br>
            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Existem também ferramentas que automatizam o processo de compilação. Em vez de invocar o compilador diretamente, o programador cria um arquivo indicando as diferentes etapas de compilação a serem executadas automaticamente. A ferramenta tradicional usada para esse propósito é make, mas certas ferramentas mais recentes, como o Maven e o Gradle, também são bastante usadas. Todo o processo de build (a compilação final ou geração do binário) é automatizado quando se usa um IDE.</p>
                    </div>
                </div>
                <br>
            <p class="Texto">O processo de compilação nem sempre gera um programa binário em linguagem de máquina. Existem linguagens compiladas que produzem um programa em um formato genericamente denominado <em>bytecode</em>. Como um script, o bytecode não está em uma linguagem específica à plataforma e, por isso, requer um programa interpretador, que o traduz para a linguagem de máquina. Neste caso, o programa interpretador é simplesmente chamado de <em>runtime</em>.</p>
            <p class="Texto">A linguagem Java adota essa abordagem; assim, os programas compilados escritos em Java podem ser usados em diferentes sistemas operacionais. Apesar do nome, o Java não tem relação com o JavaScript.</p>
            <p class="Texto">O bytecode está mais próximo da linguagem de máquina do que do código-fonte, de forma que sua execução tende a ser comparativamente mais rápida. Como ainda há um processo de conversão durante a execução do bytecode, é difícil obter o mesmo desempenho de um programa equivalente compilado em linguagem de máquina.</p>
            <br>
            <p class="Subtopico"><strong>Interpretação e interpretadores</strong></p>
            <p class="Texto">Nas linguagens interpretadas como JavaScript, Python e PHP, o programa não precisa ser précompilado, o que facilita seu desenvolvimento e modificação. Em vez de compilá-lo, o script é executado por outro programa chamado interpretador. Normalmente, o interpretador de uma linguagem recebe o nome da própria linguagem. O interpretador de um script Python, por exemplo, é um programa chamado <em>python</em>. O interpretador de JavaScript é geralmente o navegador web, mas os scripts também podem ser executados pelo programa <span class="code-color">node</span> fora de um navegador. Por ser convertido em instruções binárias toda vez que é executado, um programa em linguagem interpretada tende a ser mais lento do que um equivalente em linguagem compilada.</p>
            <p class="Texto">Nada impede que o mesmo aplicativo tenha componentes escritos em linguagens diferentes.Se necessário, esses componentes podem se comunicar por meio de uma <em>interface de programação de aplicativos (API)</em> mutuamente compreensível.</p>
            <p class="Texto">A linguagem Python, por exemplo, possui recursos muito sofisticados de mineração e tabulação de dados. O desenvolvedor pode escolher o Python para escrever as partes do programa que lidam com esses aspectos e outra linguagem, como o C++, para realizar o processamento numérico mais pesado.</p>
            <p class="Texto">É possível adotar essa estratégia mesmo quando não existe uma API que permita a comunicação direta entre os dois componentes. O código escrito em Python pode gerar um arquivo no formato adequado para ser usado por um programa escrito em C++, por exemplo.</p>
            <p class="Texto">Embora seja possível escrever quase qualquer programa em qualquer linguagem, o desenvolvedor deve adotar aquela que estiver mais de acordo com o propósito do aplicativo. Ao fazer isso, você se beneficia da reutilização de componentes já testados e bem documentados.</p>
             <a href="topico031-2.php" class="button-prox"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>

            </div>
        </div>
    </div>
       <?php
    // A_S - Footer
    include('../../layouts/footer.php');
?>

