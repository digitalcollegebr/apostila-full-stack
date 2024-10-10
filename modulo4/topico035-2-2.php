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
                <p class="Texto">Para o ponto de entrada, qualquer nome de arquivo pode ser empregado, mas aqui usaremos o nome de arquivo padrão: index.js. A lista a seguir mostra um arquivo index.js básico que será usado como ponto de partida para o nosso servidor:</p>
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
                <div class="typewriter-small" id="copycode">
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

<span class="C_inicializeted">// Array para armazenar mensagens</span>
<span class="green-code"><strong>let</strong></span> messages = []

app.post(<span class="orange-code">'/'</span>, (req, res) => {

    <span class="C_inicializeted">// Apenas solicitações habilitadas para JSON</span>
    <span class="green-code"><strong>if</strong></span> (req.headers.accept != <span class="orange-code">"application/json"</span>) {
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
        <span class="green-code"><strong>return</strong></span>;
    }

    <span class="C_inicializeted">// Localiza o cookie na solicitação</span>
    <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;

    <span class="C_inicializeted">// Se não houver cookie uuid, crie um novo</span>
    <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
        uuid = uuidv4();
    }

    <span class="C_inicializeted">// Adicione a mensagem primeiro na matriz de mensagens</span>
    messages.unshift({ uuid: uuid, message: req.body.message });

    <span class="C_inicializeted">// Colete todas as mensagens anteriores para uuid</span>
    <span class="green-code"><strong>let</strong></span> user_entries = [];
    messages.forEach((entry) => {
        <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
            user_entries.push(entry.message);
    });

    <span class="C_inicializeted">// Atualizar data de expiração do cookie</span>
    <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
    expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
    res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires });

    <span class="C_inicializeted">// Enviar de volta a resposta JSON</span>
    res.json(user_entries);
});

app.get(<span class="orange-code">'/'</span>, (req, res) => {

    <span class="C_inicializeted">// Apenas solicitações habilitadas para JSON</span>
    <span class="green-code"><strong>if</strong></span> (req.headers.accept != <span class="orange-code">"application/json"</span>) {
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
        <span class="green-code"><strong>return</strong></span>;
    }

    <span class="C_inicializeted">// Localiza o cookie na solicitação</span>
    <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;

    <span class="C_inicializeted">// Mensagens do cliente</span>
    <span class="green-code"><strong>let</strong></span> user_entries = [];

    <span class="C_inicializeted">// Se não houver cookie uuid, crie um novo</span>
    <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
        uuid = uuidv4();
    } <span class="green-code"><strong>else</strong></span> {
        <span class="C_inicializeted">// Coletar mensagens para uuid</span>
        messages.forEach((entry) => {
            <span class="green-code"><strong>if</strong></span> (entry.uuid == req.cookies.uuid)
                user_entries.push(entry.message);
        });
    }

    <span class="C_inicializeted">// Atualizar data de expiração do cookie</span>
    <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
    expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
    res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires });

    <span class="C_inicializeted">// Enviar de volta a resposta JSON</span>
    res.json(user_entries);
});

<span class="C_inicializeted">// Iniciar o servidor</span>
app.listen(<span class="dark_blue_code">port</span>, <span class="dark_blue_code">host</span>, () => {
    console.log(<span class="orange-code">`Server ready at http://${host}:${port}`</span>);
});



                        </code></pre>
                </div>
                <br>
                <span class="green-code">conteúdo</span>
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>