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
<span class="green-code"><strong>const</strong></span> polyhedrons = span.orange
<spran class="green-code"><strong>return</strong></spran> <span class="dark_blue_code"><strong>4</strong></span>/<span class="dark_blue_code"><strong>5</strong></span> * <span class="dark_blue_code">Math</span> .PI * radius

console.log(<span class="orange-code">`A sphere with radius 3 has a</span> ${sphereVol(<span class="dark_blue_code">3</span>)} <span class="orange-code">volume.`</span>);
console.log(<span class="orange-code">`A sphere with radius 6 has a</span> ${sphereVol(<span class="dark_blue_code">6</span>)} <span class="orange-code">volume.`</span>);
                        </code></pre>
                </div>
                <br>


            </div>
        </div>
    </div>

    <?php include('../../layouts/footer.php') ?>