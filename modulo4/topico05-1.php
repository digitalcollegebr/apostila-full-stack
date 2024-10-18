<?php
    // A_S - Header
    include('../layouts/headerQ.php');
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
                <p class="Titulo">034.4 - Noções básicas de Node.js</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O <span class="code-color"><strong>Node.js</strong></span> é um ambiente de tempo de execução que executa código <span class="code-color"><strong>JavaScript</strong></span> em servidores web—o chamado <em>back-end</em> (lado do servidor)—em vez de usar uma segunda linguagem, como <span class="code-color"><strong>Python</strong></span> ou <span class="code-color"><strong>Ruby</strong></span>, para os programas do lado do servidor. A linguagem <span class="code-color"><strong>JavaScript</strong></span> já é utilizada no front-end moderno dos aplicativos web, interagindo com o <strong>HTML</strong> e <strong>CSS</strong> da interface de usuário do navegador web. O uso do <span class="code-color"><strong>Node.js</strong></span> em conjunto com o <span class="code-color"><strong>JavaScript</strong></span> no navegador oferece a possibilidade de se empregar apenas uma linguagem de programação para todo o aplicativo.</p>
                <p class="Texto">A principal razão para a existência do Node.js é a maneira como ele lida com diversas conexões simultâneas no back-end. Uma das maneiras mais comuns de um servidor de aplicativos web manipular conexões é por meio da execução de vários processos. Quando abrimos um aplicativo instalado no computador, inicia-se um processo que consome muitos recursos. Imagine o que acontece quando milhares de usuários estão fazendo a mesma coisa em um grande aplicativo web.</p>
                <p class="Texto">A principal razão para a existência do <span class="code-color"><strong>Node.js</strong></span> é a maneira como ele lida com diversas conexões simultâneas no back-end. Uma das maneiras mais comuns de um servidor de aplicativos web manipular conexões é por meio da execução de vários processos. Quando abrimos um aplicativo instalado no computador, inicia-se um processo que consome muitos recursos. Imagine o que acontece quando milhares de usuários estão fazendo a mesma coisa em um grande aplicativo web.</p>
                <p class="Texto">O Node.js evita esse problema usando um design chamado <span class="code-color"><em>laço de eventos</em></span> (event loop), que é um loop interno que verifica continuamente as tarefas de entrada a serem computadas. Graças ao uso generalizado do JavaScript e à onipresença das tecnologias web, o Node.js foi largamente adotado em aplicativos pequenos e grandes. Existem outras características que também ajudaram no crescimento do Node.js, como o processamento de entrada/saída (I/O) assíncrono e sem bloqueio, explicado posteriormente nesta lição.</p>
                <p class="Texto">O ambiente do Node.js usa um mecanismo em JavaScript para interpretar e executar o código JavaScript no lado do servidor ou na área de trabalho. Nessas condições, o código JavaScript que o programador escreve é analisado e compilado dinamicamente (<em>just-in-time</em>) para executar as instruções de máquina geradas pelo código JavaScript original.</p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">Conforme você progride nestas lições sobre o Node.js, você vai notar que o JavaScript do Node.js não é exatamente o mesmo que roda no navegador (que segue a especificação ECMAScript), mas é bastante semelhante.</p>
                        </div>
                    </div>
                <br>
                <p class="Subtopico"><strong>Para começar</strong></p>
                <p class="Texto">Esta seção e os exemplos a seguir presumem que o Node.js já está instalado em seu sistema operacional Linux e que você já domina habilidades básicas, como executar comandos no terminal.</p>
                <p class="Texto">Para executar os exemplos a seguir, crie um diretório de trabalho chamado <em>node_examples</em>. Abra um prompt de terminal e digite node. Se o Node.js estiver instalado corretamente, ele apresentará um prompt <span class="code-color">></span> onde será possível testar os comandos JavaScript interativamente. Este tipo de ambiente é chamado <span class="code-color"><em>REPL</em></span>, que em inglês é a sigla para “ler, avaliar, imprimir e fazer loop”. Digite a seguinte entrada (ou alguma outra instrução JavaScript) nos prompts <span class="code-color">></span>. Pressione a tecla Enter após cada linha e o ambiente REPL retornará os resultados de suas ações:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
> <strong>let array = ['a', 'b', 'c', 'd'];</strong>
undefined
> <strong>array.map( (element, index) => (`Element: ${element} at index: ${index}`));</strong>
[
    'Element: a at index: 0',
    'Element: b at index: 1',
    'Element: c at index: 2',
    'Element: d at index: 3'
]
>
                        </code></pre>
                </div>
                <br>
                <p class="Texto">O trecho de código foi escrito usando a sintaxe ES6, que oferece uma função de mapa para iterar sobre a matriz e imprimir os resultados usando modelos de string. É possível escrever praticamente qualquer comando que seja válido. Para sair do terminal Node.js, digite .exit, sem esquecer o ponto inicial.</p>
                <p class="Texto">Para scripts e módulos mais longos, é mais prático usar um editor de texto como o VS Code, Emacs ou Vim. Você pode salvar as duas linhas de código que acabamos de mostrar (com uma pequena modificação) em um arquivo chamado <em>start.js</em>:</p>
                <br>
                <div class="typewriter-small">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>let </strong></span>array = [<span class="orange-code">'a'</span>, <span class="orange-code">'b'</span>, <span class="orange-code">'c'</span>, <span class="orange-code">'d'</span>];
array.map( (element, index) => ( console.log (<span class="orange-code">`Element: </span>${element} <span class="orange-code">at index: </span> ${
index} <span class="orange-code">`</span>)));
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Em seguida, execute o script do shell de maneira a produzir os mesmos resultados de antes:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong>node ./start.js</strong>
undefined
'Element: a at index: 0',
'Element: b at index: 1',
'Element: c at index: 2',
'Element: d at index: 3'
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Antes de mergulhar em mais código, vamos dar uma visão geral do funcionamento do Node.js, usando seu ambiente de execução de thread único e o laço de eventos.</p>
                <br>
                <p class="Subtopico"><strong>Laço de eventos e thread único</strong></p>
                <p class="Texto">É difícil dizer quanto tempo seu programa Node.js levará para lidar com uma solicitação. Algumas solicitações podem ser curtas—por exemplo, percorrer variáveis na memória e retorná-las—ao passo que outras podem exigir atividades mais demoradas, como abrir um arquivo no sistema ou emitir uma consulta a um banco de dados e aguardar os resultados. Como o Node.js lida com essa incerteza? O laço de eventos é a resposta.</p>
                <p class="Texto">Imagine um chef de cozinha realizando várias tarefas. Assar um bolo é algo requer um certo tempo do forno. O chef não fica sentado esperando o bolo ficar pronto e só depois começa a coar um café. Em vez disso, enquanto o forno assa o bolo, o chef prepara o café e faz outras coisas em paralelo. Mas ele está sempre verificando se está na hora de mudar o foco para uma tarefa específica (como fazer café) ou de tirar o bolo do forno.</p>
                <div class="image-content">
                        <img src="../../assets/img/meme.jpg" alt="">
                </div>
                <p class="Texto">O laço de eventos é como o chef que está constantemente ciente do que se passa ao redor. No Node.js, um “verificador de eventos” está sempre verificando as operações que foram concluídas ou que estão esperando para serem processadas pelo mecanismo JavaScript.</p>
                <p class="Texto">Graças a esse método, uma operação assíncrona e longa não bloqueia as outras operações mais rápidas que vêm depois. Isso ocorre porque o mecanismo de laço de evento está sempre verificando se aquela tarefa longa, como uma operação de I/O, já foi realizada. Caso contrário, o Node.js pode continuar a processar outras tarefas. Quando a tarefa em segundo plano é concluída, os resultados são retornados e o aplicativo que está rodando sobre o Node.js pode usar uma função de gatilho (retorno de chamada) para processar a saída.</p>
                <p class="Texto">Como o Node.js evita o uso de múltiplos encadeamentos (threads), como fazem outros ambientes, ele é chamado de <em>ambiente de thread único</em> e, portanto, é importantíssimo que a execução ocorra sem bloqueios. É por isso que o Node.js usa um laço de eventos. Para as tarefas de computação intensiva, o Node.js não está entre as melhores ferramentas: existem outras linguagens de programação e ambientes que fazem isso de forma mais eficiente.</p>
                <p class="Texto">Nas seções a seguir, examinaremos mais de perto as funções de retorno de chamada. Por enquanto, entenda que as funções de retorno de chamada são gatilhos executados após a conclusão de uma operação predefinida.</p>
                <br>
                <p class="Subtopico"><strong>Módulos</strong></p>
                <p class="Texto">É sempre recomendável dividir as funcionalidades complexas e os trechos extensos de código em partes menores. Essa modularização ajuda a organizar melhor a base de código, abstrair as implementações e evitar problemas de engenharia complicados. Para atender a essas necessidades, os programadores empacotam blocos de código-fonte para serem consumidos por outras partes internas ou externas do código.</p>
                <p class="Texto">Considere o exemplo de um programa que calcula o volume de uma esfera. Abra seu editor de texto
                e crie um arquivo chamado <em>volumeCalculator.js</em> contendo o seguinte código JavaScript:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span>  sphereVol = (radius) => {
<spran class="green-code"><strong>return</strong></spran> <span class="dark_blue_code"><strong>4</strong></span>/<span class="dark_blue_code"><strong>5</strong></span> * <span class="dark_blue_code">Math</span> .PI * radius
}
console.log(<span class="orange-code">`A sphere with radius 3 has a</span> ${sphereVol(<span class="dark_blue_code">3</span>)} <span class="orange-code">volume.`</span>);
console.log(<span class="orange-code">`A sphere with radius 6 has a</span> ${sphereVol(<span class="dark_blue_code">6</span>)} <span class="orange-code">volume.`</span>);
                        </code></pre>
                </div>
                <br>
                <p class="Texto">A seguir, execute o arquivo usando o Node:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong>node volumeCalculator.js</strong>
A sphere with radius 3 has a 113.09733552923254 volume.
A sphere with radius 6 has a 904.7786842338603 volume.
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Aqui, uma função simples foi usada para calcular o volume de uma esfera com base em seu raio. Imagine que também precisamos calcular o volume de um cilindro, um cone e assim por diante: percebemos rapidamente que essas funções específicas devem ser adicionadas ao arquivo em <em>volumeCalculator.js</em>, que pode acabar se tornando uma enorme coleção de funções. Para organizar melhor a estrutura, podemos usar a ideia por trás dos módulos como pacotes de código separado.</p>
                <p class="Texto">Para isso, crie um arquivo separado chamado <em>polyhedrons.js</em>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> Conevol = (radius, heigth) => {
<spran class="green-code"><strong>return</strong></spran> <span class="dark_blue_code"><strong>1</strong></span>/<span class="dark_blue_code"><strong>3</strong></span> * <span class="dark_blue_code">Math</span>.PI * <span class="dark_blue_code">Math</span>.pow(radius, <span class="dark_blue_code"><strong>2</strong></span>) * height;
}
<span class="green-code"><strong>const</strong></span> cylinderVol = (radius, heigth) => {
<spran class="green-code"><strong>return</strong></spran> <span class="dark_blue_code">Math</span> .PI * <span class="dark_blue_code">Math</span>.pow(radius, <span class="dark_blue_code"><strong>2</strong></span>) * height;
}
<span class="green-code"><strong>const</strong></span> sphereVol = (radius) => {
<spran class="green-code"><strong>return</strong></spran> <span class="dark_blue_code"><strong>4</strong></span>/<span class="dark_blue_code"><strong>3</strong></span> * <span class="dark_blue_code">Math</span>.PI * <span class="dark_blue_code">Math</span>.pow(radius, <span class="dark_blue_code"><strong>3</strong></span>);
}
module.exports = {
  coneVol,
  cylinderVol,
  sphereVol
}
                        </code></pre>
                </div>
                <p class="Texto">A seguir, no arquivo volumeCalculator.js, exclua o código antigo e substitua-o por este trecho:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> polyhedrons = require(<span class="orange-code">'./polyhedrons.js'</span>);

console.log (<span class="orange-code">`A sphere with radius 3 has a</span> ${polyhedrons.sphereVol(<span class="dark_blue_code"><strong>3</strong></span>)} <span class="orange-code">volume.`</span>);
console.log (<span class="orange-code">`A cylinder with radius 3 and height 5 has a</span> ${polyhedrons.cylinderVol(<span class="dark_blue_code"><strong>3</strong></span>,<span class="dark_blue_code"><strong>5</strong></span>)} <span class="orange-code">volume.`</span>);
console.log (<span class="orange-code">``A cone with radius 3 and height 5 has a</span> ${polyhedrons.coneVol(<span class="dark_blue_code"><strong>3</strong></span>,<span class="dark_blue_code"><strong>5</strong></span>)} <span class="orange-code">volume.`</span>);
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Depois execute o nome do arquivo no ambiente Node.js:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong> node volumeCalculator.js</strong>
A sphere with radius 3 has a 113.09733552923254 volume.
A cylinder with radius 3 and height 5 has a 141.3716694115407 volume.
A cone with radius 3 and height 5 has a 47.12388980384689 volume.
                        </code></pre>
                </div>
                <br>
                <p class="Texto">No ambiente Node.js, todo arquivo de código-fonte é considerado um módulo, mas a palavra “module” em Node.js indica um pacote de código embrulhado como no exemplo anterior. Graças aos módulos, abstraímos as funções de volume do arquivo principal, volumeCalculator.js, reduzindo assim seu tamanho e facilitando a aplicação de testes de unidade, o que é uma boa prática ao desenvolver aplicativos no mundo real.
                </p>
                <p class="Texto">Agora que sabemos como os módulos são usados no Node.js, podemos usar uma das ferramentas mais importantes: o <span class="code-color"><em>Node Package Manager (NPM)</em></span>.</p>
                <p class="Texto">Uma das principais tarefas do NPM é gerenciar, baixar e instalar módulos externos no projeto ou no sistema operacional. O comando npm init permite inicializar um repositório de nó.</p>
                <p class="Texto">O NPM fará as perguntas padrão sobre o nome do seu repositório, versão, descrição e assim por diante. Você pode ignorar essas etapas usando <span class="code-color"><em>npm init --yes</em></span>, e o comando irá gerar automaticamente um arquivo <span class="code-color"><em>package.json</em></span> descrevendo as propriedades do seu projeto/módulo.</p>
                <p class="Texto">Abra o arquivo <span class="code-color"><em>package.json</em></span> em seu editor de texto favorito e você verá um arquivo JSON propriedades como palavras-chave, comandos de script para usar com NPM, um nome etc.</p>
                <p class="Texto">Uma dessas propriedades são as dependências instaladas em seu repositório local. O NPM adicionará o nome e a versão dessas dependências em package.json, junto com <span class="code-color"><em>package-lock.json</em></span>, outro arquivo usado como reserva pelo NPM no caso de package.json falhar.</p>
                <p class="Texto">Digite o seguinte em seu terminal:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong>npm i dayjs</strong>
                        </code></pre>
                </div>
                <br>
                <p class="Texto">O sinalizador <span class="code-color"><strong>i</strong></span> é um atalho para o argumento <span class="code-color"><strong>install</strong></span>. Se você estiver conectado à internet, o NPM vai procurar um módulo chamado <span class="code-color"><em>dayjs</em></span> no repositório remoto do Node.js, baixar o módulo e instalálo localmente. O NPM também adicionará essa dependência aos arquivos package.json e packagelock.json. Você perceberá a presença de uma pasta chamada <span class="code-color"><em>node_modules</em></span>, que contém o módulo instalado junto com outros módulos, se eles forem necessários. O diretório <span class="code-color"><em>node_modules</em></span> contém o código real que será usado quando a biblioteca for importada e chamada. Porém, esta pasta não é salva nos sistemas de versionamento que usam Git, já que o arquivo package.json fornece todas as dependências usadas. Outro usuário pode pegar o arquivo package.json e simplesmente executar <span class="code-color"><strong>npm install</strong></span> em sua própria máquina, onde o NPM criará uma pasta node_modules com todas as dependências de package.json, evitando assim o controle de versão para os milhares de arquivos disponíveis no repositório NPM</p>
                <p class="Texto">Agora que o módulo dayjs está instalado no diretório local, abra o console Node.js e digite as
                seguintes linhas:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> days = require(<span class="orange-code">'daysjs'</span>);
daysjs().format(<span class="orange-code">'dYYYY MM-DDTHH:mm:ss'</span>)
                </div>
                        </code></pre>
                <br>
                <p class="Texto">O módulo dayjs é carregado com a palavra-chave require. Quando um método do módulo é chamado, a biblioteca pega a data e hora atuais do sistema e as exibe no formato especificado:</p>
                <br>
                <div class="console" style="text-align: center;">
                        <pre><code>
2020 11-22T11:04:36
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Este é o mesmo mecanismo usado no exemplo anterior, em que o tempo de execução do Node.js
                carrega a função de terceiros no código.</p>
                <br>
                <p class="Subtopico"><strong>Funcionalidade do servidor</strong></p>
                <p class="Texto">Como o Node.js controla o back-end de aplicativos web, uma de suas principais tarefas é lidar com solicitações HTTP.</p>
                <p class="Texto">Eis um resumo de como os servidores web lidam com as solicitações HTTP de entrada. A funcionalidade do servidor é escutar solicitações, determinar o mais rápido possível qual a resposta de que cada um precisa e retornar essa resposta ao remetente da solicitação. Esse aplicativo deve receber uma solicitação HTTP de entrada acionada pelo usuário, analisar a solicitação, realizar o cálculo, gerar a resposta e enviá-la de volta. Um módulo HTTP, como o Node.js, é usado porque simplifica essas etapas, permitindo que o programador se concentre no próprio aplicativo.</p>
                <p class="Texto">Considere o seguinte exemplo, que implementa essa funcionalidade básica:</p>
                <br>
                <div class="typewriter-small">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> http = require(<span class="orange-code">'http'</span>);
<span class="green-code"><strong>const</strong></span> url = require(<span class="orange-code">'url'</span>);

<span class="green-code"><strong>const</strong></span> hostname = <span class="orange-code">'127.0.0.1'</span>;
<span class="green-code"><strong>const</strong></span> port = <span class="dark_blue_code">'3000'</span>;

<span class="green-code"><strong>const</strong></span> server = http.createServer((req, res) => {
        <span class="green-code"><strong>const</strong></span>  query = url.parse(req.url, <span class="orange-code">true</span>).query;
        <span class="green-code"><strong>let</strong></span> result = <span class="dark_blue_code">parseInt</span>(queryObject.a) + <span class="dark_blue_code">parseInt</span>(queryObject.b);

        res.statusCode = <span class="dark_blue_code">200</span>;
        res.setHeader( <span class="orange-code">'Content-Type', 'text/plain'</span>);
        res.end( <span class="orange-code">`Result:</span>${result}<span class="orange-code">\n`</span>);
        });

        server.listen(port, hostname, () => {
                console.log() <span class="orange-code">`Server running at http://</span>${hostname}  <span class="orange-code">:</span>${port}<span class="orange-code">/`</span>;
        });
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Salve esse conteúdo em um arquivo chamado basic_server.js e execute-o através de um comando node. O terminal que executa o Node.js exibirá a seguinte mensagem:</p>
                <br>
                <div class="console" style="text-align: center;">
                        <pre><code>
Server running at http://127.0.0.1:3000/
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Em seguida, visite a URL a seguir em seu navegador web: <em>http://127.0.0.1:3000/numbers?a=2&b=17</em></p>
                <p class="Texto">O Node.js está rodando um servidor web em seu computador e usando dois módulos: <span class="code-color"><em>http</em></span> e <span class="code-color"><em>url</em></span>. O módulo http configura um servidor HTTP básico, processa as solicitações da web de entrada e as entrega ao nosso aplicativo simples. O módulo URL analisa os argumentos passados na URL, converte-os em um formato inteiro e executa a operação de adição. O módulo http então envia a resposta em forma de texto para o navegador web.</p>
                <p class="Texto">Em um aplicativo web real, o Node.js é comumente usado para processar e obter dados, geralmente de um banco de dados, e retornar as informações processadas ao front-end para exibição. Mas o aplicativo básico nesta lição mostra de forma concisa como o Node.js usa módulos para lidar com solicitações da web como um servidor web.</p>
                <br>
                <div class="image-content">
                        <img src="../assets/img/node-meme1.png" alt="Node.js meme">
                </div>
                <a href="topico035-2-1.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (1).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
    
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>