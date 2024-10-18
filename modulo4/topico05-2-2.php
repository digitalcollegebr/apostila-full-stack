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
                <p class="Subtopico" style="font-size: 13px;"><strong>Parte 02</strong></p>
                <p class="Titulo">035.2 - Noções básicas de NodeJs Express</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Os servidores web têm mecanismos muito versáteis para produzir respostas às solicitações do cliente. Para algumas solicitações, basta que o servidor web forneça uma resposta estática e não processada, porque o recurso solicitado é o mesmo para qualquer cliente. Por exemplo, quando um cliente solicita uma imagem acessível a todos, o servidor precisa apenas enviar o arquivo que contém a imagem.</p>
                <p class="Texto">Mas quando as respostas são geradas dinamicamente, elas podem precisar ser mais bem estruturadas do que simples linhas escritas no script do servidor. Nesses casos, é conveniente que o servidor web seja capaz de gerar um documento completo, que pode ser interpretado e processado pelo cliente. No contexto do desenvolvimento de aplicativos web, os documentos HTML são comumente criados como modelos e mantidos separados do script do servidor, que insere dados dinâmicos em locais predeterminados no modelo apropriado e, em seguida, envia a resposta formatada ao cliente.</p>
                <p class="Texto">Os aplicativos web geralmente consomem recursos estáticos e dinâmicos. Um documento HTML, mesmo que tenha sido gerado dinamicamente, pode ter referências a recursos estáticos, como arquivos CSS e imagens. Para demonstrar como o Express ajuda a lidar com esse tipo de demanda, vamos primeiro configurar um servidor de exemplo que entrega arquivos estáticos e, em seguida, implementar rotas que geram respostas estruturadas baseadas em modelos.</p>
                <p class="Subtopico"><strong>Arquivos estáticos</strong></p>
                <p class="Texto">A primeira etapa é criar o arquivo JavaScript que será executado como servidor. Vamos seguir o mesmo padrão mostrado nas lições anteriores para criar um aplicativo Express simples: primeiro, crie um diretório chamado server; em seguida, instale os componentes básicos com o comando <span class="code-color"><strong>npm</strong></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                <pre><code class="Texto">
$ <strong>mkdir server</strong>
$ <strong>cd server/</strong>
$ <strong>npm init</strong>
$ <strong>npm install express</strong>
                </code></pre>
                </div>
                <br>
                <p class="Texto">Para o ponto de entrada, qualquer nome de arquivo pode ser empregado, mas aqui usaremos o nome de arquivo padrão: <span class="code-color"><em>index.js</em></span>. A lista a seguir mostra um arquivo index.js básico que será usado como ponto de partida para o nosso servidor:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> express = require(<span class="orange-code">'express'</span>)
<span class="green-code">const</span> app = express()
<span class="green-code"><strong>const</strong></span> host = <span class="orange-code">"myserver"</span>
<span class="green-code"><strong>const</strong></span> port = <span class="dark_blue_code"><strong>8080</strong></span>


app.listen(port, host, () => {
    console.log(<span class="orange-code">`Server ready at http://</span>${host}<span class="orange-code">:</span>${port}<span class="orange-code">`</span>)
})
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Não é necessário escrever código explícito para enviar um arquivo estático. O Express possui um middleware para esse fim, chamado <span class="code-color"><em>express.static</em></span>. Se o seu servidor precisa enviar arquivos estáticos para o cliente, basta carregar o middleware <span class="code-color"><em>express.static</em></span> no início do script:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
app.use(express.<span class="green-code">'static'</span>(<span class="orange-code">'public'</span>))
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O parâmetro <span class="code-color"><em>public</em></span> indica o diretório onde estão armazenados os arquivos que o cliente pode solicitar. Os caminhos solicitados pelos clientes não devem incluir o diretório <span class="code-color"><em>public</em></span>, mas apenas o nome do arquivo, ou o caminho para o arquivo relativo ao diretório <span class="code-color"><em>public</em></span>. Para solicitar o arquivo <span class="code-color"><em>public/layout.css</em></span>, por exemplo, o cliente faz uma solicitação para <span class="code-color"><em>/layout.css</em></span>.</p>
                <br>
                <p class="Subtopico"><strong>Saída formatada</strong></p>
                <p class="Texto">Embora o envio de conteúdo estático seja descomplicado, o conteúdo gerado dinamicamente pode variar muito. A criação de respostas dinâmicas com mensagens curtas facilita o teste de aplicativos em seus estágios iniciais de desenvolvimento. Veja a seguir, por exemplo, uma rota de teste que simplesmente repassa ao cliente uma mensagem enviada pelo método HTTP <span class="code-color"><em>POST</em></span>. A resposta pode apenas replicar o conteúdo da mensagem em texto simples, sem nenhuma formatação:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
app.post(<span class="orange-code">'/echo'</span>, (req, res) => {
    res.send(req.body.message)
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Uma rota como essa é um bom exemplo para aprender a usar o Express e para fins de diagnóstico, onde uma resposta bruta enviada com <span class="code-color"><em>res.send()</em></span> é suficiente. Mas um servidor útil deve ser capaz de produzir respostas mais complexas. Assim, vamos aprender a desenvolver esse tipo de rota mais sofisticado.</p>
                <p class="Texto">Nosso novo aplicativo, em vez de apenas mandar de volta o conteúdo da solicitação atual, mantém uma lista completa das mensagens enviadas nas solicitações anteriores de cada cliente e envia de volta a lista de cada cliente quando solicitado. Existe a opção de mandar uma resposta mesclando todas as mensagens, mas outros modos de saída formatada são mais apropriados, especialmente no caso de respostas mais elaboradas.</p>
                <p class="Texto">Para receber e armazenar mensagens de clientes enviadas durante a sessão atual, precisamos primeiro incluir módulos extras para lidar com cookies e dados enviados pelo método HTTP <span class="code-color"><em>POST</em></span>. O único propósito do servidor de exemplo a seguir é registrar as mensagens enviadas via <span class="code-color"><em>POST</em></span> e exibir as mensagens enviadas anteriormente quando o cliente emitir uma solicitação GET. Portanto, existem duas rotas para o caminho <span class="code-color"><em>/</em></span>. A primeira atende às solicitações feitas com o método HTTP <span class="code-color"><em>POST</em></span> e a segunda atende às solicitações feitas com o método HTTP <span class="code-color"><em>GET</em></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">

<span class="green-code"><strong>const</strong></span> express = require(<span class="orange-code">'express'</span>)
<span class="green-code"><strong>const</strong></span> app = express()
<span class="green-code"><strong>const</strong></span> host = <span class="orange-code">"myserver"</span>
<span class="green-code"><strong>const</strong></span> port = <span class="dark_blue_code"><strong>8080</strong></span>

app.use(express.<span class="green-code">'static'</span>(<span class="orange-code">'public'</span>))

<span class="green-code"><strong>const</strong></span> cookieParser = require(<span class="orange-code">'cookie-parser'</span>)
app.use(cookieParser())

<span class="green-code"><strong>const</strong></span> { <span class="blue-code">v4</span>: uuidv4 } = require( <span class="orange-code">'uuid'</span>)
app.use(express.urlencoded({ <span class="blue-code">extended</span>: <span class="green-code"><strong>true</strong></span>}))

<span class="comment">// Array para armazenar mensagens</span>
<span class="green-code"><strong>let</strong></span> messages = []

app.post(<span class="orange-code">'/'</span>, (req, res) => {

    <span class="comment">// Apenas solicitações habilitadas para JSON</span>
    <span class="green-code"><strong>if</strong></span> (req.headers.accept != <span class="orange-code">"application/json"</span>) {
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
        <span class="green-code"><strong>return</strong></span>;
    }

    <span class="comment">// Localiza o cookie na solicitação</span>
    <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;

    <span class="comment">// Se não houver cookie uuid, crie um novo</span>
    <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
        uuid = uuidv4();
    }

    <span class="comment">// Adicione a mensagem primeiro na matriz de mensagens</span>
    messages.unshift({ uuid: uuid, message: req.body.message });

    <span class="comment">// Colete todas as mensagens anteriores para uuid</span>
    <span class="green-code"><strong>let</strong></span> user_entries = [];
    messages.forEach((entry) => {
        <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
            user_entries.push(entry.message);
    });

    <span class="comment">// Atualizar data de expiração do cookie</span>
    <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
    expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
    res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires });

    <span class="comment">// Enviar de volta a resposta JSON</span>
    res.json(user_entries);
});

app.get(<span class="orange-code">'/'</span>, (req, res) => {

    <span class="comment">// Apenas solicitações habilitadas para JSON</span>
    <span class="green-code"><strong>if</strong></span> (req.headers.accept != <span class="orange-code">"application/json"</span>) {
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
        <span class="green-code"><strong>return</strong></span>;
    }

    <span class="comment">// Localiza o cookie na solicitação</span>
    <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;

    <span class="comment">// Mensagens do cliente</span>
    <span class="green-code"><strong>let</strong></span> user_entries = [];

    <span class="comment">// Se não houver cookie uuid, crie um novo</span>
    <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
        uuid = uuidv4();
    } <span class="green-code"><strong>else</strong></span> {
        <span class="comment">// Coletar mensagens para uuid</span>
        messages.forEach((entry) => {
            <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
                user_entries.push(entry.message);
        });
    }

    <span class="comment">// Atualizar data de expiração do cookie</span>
    <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
    expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
    res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires });

    <span class="comment">// Enviar de volta a resposta JSON</span>
    res.json(user_entries);
});

<span class="comment">// Iniciar o servidor</span>
app.listen(<span class="dark_blue_code">port</span>, <span class="dark_blue_code">host</span>, () => {
    console.log(<span class="orange-code">`Server ready at http://${host}:${port}`</span>);
});
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Mantivemos a configuração dos arquivos estáticos no topo, porque em breve será útil fornecer arquivos estáticos como <span class="code-color"><em>layout.css</em></span>. Além do middleware <span class="code-color"><em>cookie-parser</em></span> apresentado na lição anterior, o exemplo também inclui o middleware <em>uuid</em> para gerar um número de identificação único que é passado como um cookie para cada cliente que envia uma mensagem. Se eles ainda não estiverem no diretório do servidor de exemplo, instale esses módulos com o comando <span class="code-color"><strong>npm install cookie-parser uuid</strong></span>.</p>
                <p class="Texto">A matriz global <span class="code-color"><em>messages</em></span> armazena as mensagens enviadas por todos os clientes. Cada item desta
                matriz consiste em um objeto com as propriedades <span class="code-color"><em>uuid</em></span> e <span class="code-color"><em>message</em></span>.</p>
                <p class="Texto">A novidade nesse script é o método <span class="code-color"><em>res.json()</em></span>, usado ao final das duas rotas para gerar uma
                resposta no formato JSON com a matriz contendo as mensagens já enviadas pelo cliente:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
<span class="comment">// Envia de volta a resposta JSON</span>
res.json(user_entries)
                    </code></pre>
                </div>
                <br>
                <p class="Texto">JSON é um formato de texto simples que permite agrupar um conjunto de dados em uma única estrutura associativa: ou seja, o conteúdo é expresso na forma de chaves e valores. O JSON é particularmente útil quando as respostas serão processadas pelo cliente. Usando esse formato, um objeto ou matriz JavaScript pode ser facilmente reconstruído no lado do cliente com todas as propriedades e índices do objeto original no servidor.</p>
                <p class="Texto">Como estamos estruturando todas as mensagens em JSON, recusamos as solicitações que não
                contenham application/json em seu cabeçalho accept:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// Somente solicitações habilitadas para JSON</span>
<span class="green-code">if</span> ( req.headers.accept != <span class="orange-code">"application/json"</span>)
{
    res.sendStatus(<span class="dark_blue_code">404</span>)
    <span class="green-code">return</span>
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Uma solicitação feita com um comando <span class="code-color"><em>curl</em></span> simples para inserir uma nova mensagem não será aceita, porque <span class="code-color"><em>curl</em></span>, por padrão, não especifica <span class="code-color"><em>application/json</em></span> no cabeçalho <span class="code-color"><em>accept</em></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
$ <strong> curl http://myserver:8080/ --data message="My first message" -c cookies.txt -b
cookies.txt -H "accept: application/json"</strong>
["My first message"]
                    </code></pre>
                </div>
                <p class="Texto">Para obter mensagens usando a outra rota, o processo é semelhante, mas desta vez usando o método HTTP <span class="code-color">GET</span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080/ -c cookies.txt -b cookies.txt -H "accept:application/json"</strong>
["Another message","My first message"]
                    </code></pre>
                </div>
                <br>
                <p class="Subtopico"><strong>Modelos</strong></p>
                <p class="Texto">As respostas em formatos como o JSON são convenientes para a comunicação entre programas, mas o objetivo principal da maioria dos servidores de aplicativos web é produzir conteúdo HTML para o consumo humano. Não é uma boa ideia incorporar código HTML dentro de um código JavaScript, pois a mistura de linguagens no mesmo arquivo torna o programa mais suscetível a erros e atrapalha a manutenção do código.</p>
                <p class="Texto">contO Express pode trabalhar com diferentes <em>mecanismos de modelo</em> (template engines) que separam o HTML para o conteúdo dinâmico; a lista completa pode ser encontrada no site de mecanismos de modelo do Express. Um dos mecanismos de modelo mais populares é o <em>Embedded JavaScript</em> (EJS), que permite criar arquivos HTML com tags específicas para a inserção de conteúdo dinâmico.eúdo</p>
                <p class="Texto">Como outros componentes do Express, o EJS precisa ser instalado no diretório em que o servidor
                está sendo executado:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <pre><code class="Texto">
$ <strong>npm install ejs</strong>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Em seguida, o mecanismo EJS deve ser definido como o renderizador padrão no script do servidor (próximo ao início do arquivo index.js, antes das definições de rota):</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
app.<span class="green-code"><strong>set</strong></span>(<span class="orange-code">'view engine',</span>, <span class="orange-code">'ejs'</span>)
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A resposta gerada com o modelo é enviada ao cliente com a função <span class="code-color"><em>res.render()</em></span>, que recebe como parâmetros o nome do arquivo do modelo e um objeto contendo valores que estarão acessíveis de dentro do modelo. As rotas usadas no exemplo anterior podem ser reescritas para gerar respostas em HTML, bem como em JSON:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
                    app.post('/', (req, res) => {
  <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid
  <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>)
    uuid = uuidv4()
  messages.unshift({ uuid: uuid, message: req.body.message })
  <span class="green-code"><strong>let</strong></span> user_entries = []
  messages.forEach((entry) => {
    <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
      user_entries.push(entry.message)
  })
  <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
  expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
  res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires })
  <span class="green-code"><strong>if</strong></span> (req.headers.accept == <span class="orange-code">"application/json"</span>)
    res.json(user_entries)
  <span class="green-code"><strong>else</strong></span>
    res.render(<span class="orange-code">'index'</span>, { title: <span class="orange-code">"My messages"</span>, messages: user_entries })
})

app.get('/', (req, res) => {
  <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid
  <span class="green-code"><strong>let</strong></span> user_entries = []
  <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
    uuid = uuidv4()
  } <span class="green-code"><strong>else</strong></span> {
    messages.forEach((entry) => {
      <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
        user_entries.push(entry.message)
    })
  }
  <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
  expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
  res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires })
  <span class="green-code"><strong>if</strong></span> (req.headers.accept == <span class="orange-code">"application/json"</span>)
    res.json(user_entries)
  <span class="green-code"><strong>else</strong></span>
    res.render(<span class="orange-code">'index'</span>, { title: <span class="orange-code">"My messages"</span>, messages: user_entries })
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Note que o formato da resposta depende do cabeçalho accept encontrado na solicitação:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>if</strong></span> ( req.headers.accept == <span class="orange-code">"application/json"</span>)
    res.json(user_entries)
<span class="green-code"><strong>else</strong></span>
    res.render(<span class="orange-code">'index'</span>, {<span class="blue-code">title</span>: <span class="orange-code">"My messages"</span>, <span class="blue-code">messages</span>: user_entries})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">contUma resposta em formato JSON é enviada apenas se o cliente fizer expressamente essa solicitação. Caso contrário, a resposta é gerada a partir do modelo index. A mesma matriz user_entries alimenta a saída em JSON e o modelo, mas o objeto usado como parâmetro para este último também possui a propriedade title: "My messages", que será usada como um título dentro do template.</p>
                <br>
                <p class="Subtopico"><strong>Modelos HTML</strong></p>
                <p class="Texto">A exemplo dos arquivos estáticos, os arquivos que contêm modelos HTML residem em seu próprio diretório. Por padrão, o EJS pressupõe que os arquivos de modelo estão no diretório <span class="code-color"><em>views/</em></span>. No exemplo, um modelo chamado <span class="code-color"><em>index</em></span> foi usado, por isso o EJS procura pelo arquivo <span class="code-color">views/index.ejs</span>. A lista a seguir é o conteúdo de um modelo views/index.ejs simples que pode ser usado com o código de exemplo:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color">&lt;<strong>html</strong></span> <span class="blue-code">lang=</span><span class="orange-code">"en"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span> <span class="blue-code">charset=</span><span class="orange-code">"utf-8"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;title&gt;&lt;%=</strong></span><span class="blue-code"> title</span><span class="code-color"><strong>%&gt;&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span> <span class="blue-code">name=</span><span class="orange-code">"viewport"</span> <span class="blue-code">content=</span><span class="orange-code">"width=device-width, initial-scale=1"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;link rel=</strong></span><span class="orange-code">"stylesheet"</span> <span class="blue-code">href=</span><span class="orange-code">"/layout.css"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;/head&gt;</strong></span>
<span class="code-color"><strong>&lt;body&gt;</strong></span>
<span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"interface"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;form</strong></span> <span class="blue-code">action=</span><span class="orange-code">"/"</span> <span class="blue-code">method=</span><span class="orange-code">"post"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;p&gt;</strong></span>
  <span class="code-color"><strong>&lt;input</strong></span> <span class="blue-code">type=</span><span class="orange-code">"text"</span> <span class="blue-code">name=</span><span class="orange-code">"message"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;input</strong></span> <span class="blue-code">type=</span><span class="orange-code">"submit"</span> <span class="blue-code">value=</span><span class="orange-code">"Submit"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;/form&gt;</strong></span>
<span class="code-color"><strong>&lt;ul&gt;</strong></span>
<span class="code-color"><strong>&lt;</strong></span><span class="red-color"><strong>%</strong></span> <span class="blue-code">messages.forEach</span><span class="red-color">(</span><span class="blue-code">(message) =</span> <span class="red-color"><strong>&gt;</strong></span><span class="orange-code">{</span> <span class="red-color"><strong>%</strong></span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;</strong></span><span class="red-color"><strong>%=</strong></span><span class="blue-code"> message</span><span class="code-color"><strong>%&gt;&lt;/li&gt;</strong></span>
<span class="code-color"><strong>&lt;</strong></span><span class="red-color"> <strong>%</strong></span><span class="orange-code">}</span><span class="code-color">)</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>

<span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>

</div>

                    </code></pre>
                </div>
                <br>
                <p class="Texto">A primeira tag EJS especial é o elemento <span class="code-color"><strong>&lt;title&gt;</strong></span> na seção <span class="code-color"><strong>&lt;head&gt;</strong></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align:center; width: 60%;">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;</strong></span><span class="red-color"><strong>%=</strong></span> title <span class="red-color"><strong>%</strong></span><span class="red-color"><strong>&gt;</strong></span>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Durante o processo de renderização, essa tag especial será substituída pelo valor da propriedade <span class="code-color">title</span> do objeto passado como parâmetro para a função <span class="code-color"><em>res.render()</em></span>.</p>
                <p class="Texto">A maior parte do modelo é composta de código HTML convencional; assim, o modelo contém o formulário HTML para o envio de novas mensagens. O servidor de teste responde aos métodos HTTP <span class="code-color">GET</span> e <span class="code-color"><em>POST</em></span> para o mesmo caminho <span class="code-color">/</span>, por isso temos os atributos <span class="code-color"><em>action="/"</em></span> e <span class="code-color"><em>method="post"</em></span> na tag de formulário.</p>
                <p class="Texto">Outras partes do modelo são uma mistura de código HTML e tags EJS. O EJS tem tags para fins específicos dentro do modelo:</p>
                <br>
                <div class="typewriter-small" style="width: 70%;">
                <strong><% … %></strong><p class="Texto">Insere controle de fluxo. Nenhum conteúdo é inserido diretamente por esta tag, mas pode ser usado com JavaScript estruturas para escolher, repetir ou suprimir seções de HTML. Exemplo iniciando um loop: <% mensagens.forEach( (mensagem) => { %>Uma sequência de pontos redondos.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong><%# … %></strong>
                    <p class="Texto">Define um comentário cujo conteúdo é ignorado pelo analisador. Ao contrário dos comentários
                    escritos em HTML, esses comentários não são visíveis para o cliente.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong><%= … %></strong>
                    <p class="Texto">Insere o conteúdo escapado da variável. É importante escapar o conteúdo desconhecido para evitar a execução de código em JavaScript, o que abriria brechas para ataques de Cross-Site Scripting (XSS). Exemplo: <%= title %></p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong><%- … %></strong>
                    <p class="Texto">Insere o conteúdo da variável sem escapar.</p>
                </div>
                <br>
                <p class="Texto">A combinação de código HTML e tags EJS é evidente no trecho em que as mensagens do cliente são renderizadas como uma lista HTML:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;</strong></span><span class="red-color"><strong>%</strong></span> <span class="blue-code">messages.forEach</span><span class="red-color">(</span><span class="blue-code">(message) =</span> <span class="red-color"><strong>&gt;</strong></span><span class="orange-code">{</span> <span class="red-color"><strong>%</strong></span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>&lt;</strong></span><span class="red-color"><strong>%=</strong></span><span class="blue-code"> message</span><span class="code-color"><strong>%&gt;&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;</strong></span><span class="red-color"> <strong>%</strong></span> <span class="orange-code">}</span><span class="red-color">)</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Neste trecho, a primeira tag <span class="code-color"><strong><% … %></strong></span> inicia uma instrução <span class="code-color"><em>forEach</em></span> que percorre todos os elementos da matriz message. Os delimitadores <span class="code-color"><strong><% e %></strong></span> permitem controlar os trechos de HTML. Um novo item de lista HTML, <span class="code-color"><strong>&lt;li&gt;<%= message %>&lt;/li&gt;</strong></span>, será criado para cada elemento de <span class="code-color"><em>messages</em></span>. Com essas mudanças, o servidor enviará a resposta em HTML quando uma solicitação como a seguinte for recebida:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080/ --data message="This time" -c cookies.txt -b cookies.txt</strong>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;title&gt;My messages&lt;/title&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
  &lt;link rel="stylesheet" href="/layout.css"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="interface"&gt;
&lt;form action="/" method="post"&gt;
&lt;p&gt;
  &lt;input type="text" name="message"&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/p&gt;
&lt;/form&gt;
&lt;ul&gt;
&lt;li&gt;This time&lt;/li&gt;
&lt;li&gt;in HTML&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
                    </code></pre>
                </div>
                <p class="Texto">A separação entre o código de processamento das solicitações e o código de apresentação da resposta torna o código mais limpo e permite que uma equipe divida o desenvolvimento do aplicativo entre diferentes especialistas. Um webdesigner, por exemplo, pode se concentrar nos arquivos de modelo em <span class="code-color"><em>views/</em></span> e nas folhas de estilo relacionadas, que são fornecidas como arquivos estáticos armazenados no diretório <span class="code-color"><em>public/</em></span> no servidor de exemplo.</p>
                <a href="topico035-3.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (1).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
    
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>