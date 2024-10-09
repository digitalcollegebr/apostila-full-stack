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
                <p class="Titulo">035.2 - Noções básicas de NodeJs Express</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O <span class="code-color"><strong>Express.js</strong></span>, ou simplesmente Express, é um framework popular que roda em Node.js e é usado para escrever servidores HTTP que lidam com solicitações de clientes de aplicativos web. O Express oferece suporte a diversas maneiras de ler parâmetros enviados por HTTP.</p>
                <p class="Texto">Script inicial do servidor</p>
                <p class="Texto">Para demonstrar os recursos básicos do Express ao receber e tratar solicitações, vamos simular um aplicativo que solicita algumas informações ao servidor. Em particular, o servidor de exemplo.</p>
                <ul class="Texto">
                    <li>Fornece uma função echo, que simplesmente retorna a mensagem enviada pelo cliente.</li>
                    <li>Informa ao cliente seu endereço IP mediante solicitação</li>
                    <li>Usa cookies para identificar clientes conhecidos.</li>
                </ul>
                <p class="Texto">O primeiro passo é criar o arquivo JavaScript que funcionará como servidor. Usando npm, crie um diretório chamado myserver com o arquivo JavaScript:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                <pre><code class="Texto">
$ <strong>mkdir myserver</strong>
$ <strong>cd myserver/</strong>
$ <strong>npm init</strong>
                </code></pre>
                </div>
                <br>
                <p class="Texto">No ponto de entrada, qualquer nome de arquivo pode ser usado. Aqui, usaremos o nome de arquivo padrão: <span class="code-color"><em>index.js</em></span>. A lista a seguir mostra um arquivo index.js básico que será usado como ponto de entrada para o nosso servidor:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> eexpress = require(<span class="orange-code">'express'</span>)
<span class="green-code">const</span> app = express()
<span class="green-code"><strong>const</strong></span> host = <span class="orange-code">"myserver"</span>
<span class="green-code"><strong>const</strong></span> port = <span class="dark_blue_code"><strong>8080</strong></span>

app.<span class="green-code"><strong>get</strong></span>  (<span class="orange-code">'/'</span>, (req, res) =>; {
    res.send('Request received')
})

app.listen(port, host, () => {
    console.log(<span class="orange-code">`Server ready at http://</span>${host}<span class="orange-code">:</span>${port}<span class="orange-code">`</span>)
})
                        </code></pre>
                </div>
                <br>
                <p class="Texto">Algumas constantes importantes para a configuração do servidor são definidas nas primeiras linhas do script. As duas primeiras, <span class="code-color"><em>express</em></span> e <span class="code-color"><em>app</em></span>, correspondem ao módulo express incluído e a uma instância desse módulo que executa nosso aplicativo. Adicionaremos as ações a serem realizadas pelo servidor ao objeto <span class="code-color"><em>app</em></span>.</p>
                <p class="Texto">As outras duas constantes, <span class="code-color"><em>host</em></span> e <span class="code-color"><em>port</em></span>, definem o host e a porta de comunicação associada ao
                servidor.</p>
                <p class="Texto">Caso você tenha um host acessível publicamente, use o nome dele ao invés de <span class="code-color"><em>myserver</em></span> como o valor de <span class="code-color"><em>host</em></span>. Se o nome do host não for informado, o Express usará por padrão <span class="code-color"><em>localhost</em></span>, o computador em que o aplicativo é executado. Nesse caso, nenhum cliente externo poderá acessar o programa, o que pode ser bom para testes, mas oferece pouco valor em um contexto de produção.</p>
                <p class="Texto">É imprescindível informar a porta, ou o servidor não poderá ser iniciado.</p>
                <p class="Texto">Este script anexa apenas dois procedimentos ao objeto <span class="code-color"><em>app</em></span>: a ação <span class="code-color"><em>app.get()</em></span>, que responde às solicitações feitas por clientes através de HTTP <span class="code-color"><em>GET</em></span>, e a chamada <span class="code-color"><em>app.listen()</em></span>, necessária para ativar o servidor e que atribui a ele um host e uma porta.</p>
                <p class="Texto">Para iniciar o servidor, basta executar o comando <span class="code-color"><strong>node</strong></span>, fornecendo o nome do script como argumento:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
$ <strong>node index.js</strong>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Assim que a mensagem <em>Server ready at http://myserver:8080</em> aparecer, o servidor estará pronto para receber as solicitações de um cliente HTTP. As solicitações podem ser feitas a partir de um navegador no mesmo computador em que o servidor está sendo executado ou a partir de outra máquina que possa acessar o servidor.</p>
                <p class="Texto">Todos os detalhes da transação que veremos aqui são mostrados no navegador, bastando abrir a janela do console do desenvolvedor. Alternativamente, o comando <span class="code-color"><em>curl</em></span> pode ser usado para comunicação HTTP, permitindo inspecionar mais facilmente os detalhes da conexão. Caso não esteja familiarizado com a linha de comando do shell, você pode criar um formulário HTML para enviar solicitações a um servidor.</p>
                <p class="Texto">O exemplo a seguir mostra como usar o comando curl na linha de comando para fazer uma
                solicitação HTTP ao servidor recém-implantado:</p>
                <br>
                <div class="typewriter-small">
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080 -v</strong>
* Trying 192.168.1.225:8080...
* TCP_NODELAY set
* Connected to myserver (192.168.1.225) port 8080 (#0)
> GET / HTTP/1.1
> Host: myserver:8080
> User-Agent: curl/7.68.0
>Accept: /
>
* Mark bundle as not supporting multiuse
< HTTP/1.1 200 OK
< X-Powered-By: Express
< Content-Type: text/html; charset=utf-8
< Content-Length: 16
< ETag: W/"10-1WVvDtVyAF0vX9evlsFlfiJTT5c"
< Date: Fri, 02 Jul 2021 14:35:11 GMT
< Connection: keep-alive
<
* Connection #0 to host myserver left intact
Request received
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A opção <span class="code-color"><em>-v</em></span> do comando <span class="code-color"><em>curl</em></span> exibe todos os cabeçalhos de solicitação e resposta, bem como outras
                informações de depuração. As linhas que começam com <span class="code-color"><em>></em></span> indicam os cabeçalhos de solicitação enviados pelo cliente e as linhas que começam com <span class="code-color"><em><</em></span> indicam os cabeçalhos de resposta enviados pelo servidor. As linhas começando com <span class="code-color"><em>*</em></span> são informações geradas pelo próprio <span class="code-color"><em>curl</em></span>. O conteúdo da resposta é mostrado apenas no final, que neste caso é a linha <span class="code-color"><em>Request received</em></span>.</p>
                <p class="Texto">A URL do serviço, que aqui contém o nome do host do servidor e a porta (<em>http://myserver:8080</em>), foram dados como argumentos para o comando <span class="code-color"><em>curl</em></span>. Como nenhum diretório ou nome de arquivo é fornecido, o padrão é o diretório raiz <span class="code-color"><em>/</em></span>. A barra aparece como o arquivo de solicitação na linha <span class="code-color"><em> > GET / HTTP/1.1</em></span>, que é seguido, na saída, pelo nome do host e porta.</p>
                <p class="Texto">Além de exibir cabeçalhos de conexão HTTP, o comando <span class="code-color"><em>curl</em></span> auxilia no desenvolvimento de aplicativos, permitindo enviar dados para o servidor usando diferentes métodos HTTP e em diferentes formatos. Essa flexibilidade torna mais fácil depurar quaisquer problemas e implementar novos recursos no servidor.</p>
                <br>
                <p class="Subtopico"><strong>Rotas</strong></p>
                <p class="Texto">As solicitações que o cliente pode fazer ao servidor dependem de quais <em>rotas</em> foram definidas no arquivo <em>index.js</em>. Uma rota especifica um método HTTP e define um <em>caminho</em> (mais precisamente, um URI) que pode ser solicitado pelo cliente.</p>
                <p class="Texto">Até aqui, o servidor tem apenas uma rota configurada:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
app.<span class="green-code"><strong>get</strong></span>(<span class="orange-code">'/'</span>, (req, res) => {
    res.send(<span class="orange-code">'Request received'</span>) 
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Embora seja uma rota muito simples, que retorna apenas uma mensagem de texto puro ao cliente, ela basta para identificar os componentes mais importantes usados para estruturar a maioria das rotas:</p>
                <ul class="Texto">
                    <li>• O método HTTP servido pela rota. No exemplo, o método HTTP GET é indicado pela propriedade get do objeto app.</li>
                    <li>O caminho servido pela rota. Quando o cliente não especifica um caminho para a solicitação, o servidor usa o diretório raiz, que é o diretório base reservado para uso do servidor web. Um exemplo posterior neste capítulo usa o caminho /echo, que corresponde a uma solicitação feita a myserver:8080/echo.</li>
                    <li>A função executada quando o servidor recebe uma solicitação nesta rota, geralmente escrita de forma abreviada como uma função de seta porque a sintaxe => aponta para a definição da função sem nome. O parâmetro req (abreviação de “request”) e o parâmetro res (abreviação de “response”) fornecem detalhes sobre a conexão, passada para a função pela própria instância do aplicativo.</li>
                </ul>
                <br>
                <p class="Subtopico"><strong>Método POST</strong></p>
                <p class="Texto">Para estender a funcionalidade de nosso servidor de teste, vamos ver como definir uma rota para o método HTTP <span class="code-color"><em>POST</em></span>. <strong>Ele é usado pelos clientes que precisam enviar ao servidor dados extras, além dos que estão incluídos no cabeçalho da solicitação</strong>. A opção <span class="code-color"><em>--data</em></span> do comando <span class="code-color"><em>curl</em></span> invoca automaticamente o método <span class="code-color"><em>POST</em></span> e inclui o conteúdo que será enviado ao servidor via <span class="code-color"><em>POST</em></span>. A linha <span class="code-color"><em>POST / HTTP/1.1</em></span> na saída a seguir mostra que o método <span class="code-color"><em>POST</em></span> foi empregado. No entanto, nosso servidor definiu apenas um método <span class="code-color"><em>GET</em></span>, por isso ocorre um erro quando usamos <span class="code-color"><em>curl</em></span> para enviar uma solicitação via <span class="code-color"><em>POST</em></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080/echo --data message="This is the POST request body"</strong>
* Trying 192.168.1.225:8080...
* TCP_NODELAY set
* Connected to myserver (192.168.1.225) port 8080 (#0)
> POST / HTTP/1.1
> Host: myserver:8080
> User-Agent: curl/7.68.0
>Accept: /
> Content-Length: 37
> Content-Type: application/x-www-form-urlencoded
>
* upload completely sent off: 37 out of 37 bytes
* Mark bundle as not supporting multiuse
< HTTP/1.1 404 Not Found
< X-Powered-By: Express
< Content-Security-Policy: default-src 'none'
< X-Content-Type-Options: nosniff
< Content-Type: text/html; charset=utf-8
< Content-Length: 140
< Date: Sat, 03 Jul 2021 02:22:45 GMT
< Connection: keep-alive
<
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;title>Error&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;pre>Cannot POST /&lt;/pre&gt;
&lt;/body&gt;
&lt;/html&gt;
* Connection #0 to host myserver left intact
                    </code></pre>
                </div>
                <br>
                <p class="Texto">No exemplo anterior, executar curl com o parâmetro <span class="code-color"><em>--data message="This is the POST request body"</em></span> equivale a enviar um formulário contendo um campo de texto chamado <span class="code-color"><em>message</em></span> preenchido com <span class="code-color"><em>This is the POST request body</em></span>.</p>
                <p class="Texto">Como o servidor foi configurado com apenas uma rota para o caminho <span class="code-color"><em>/</em></span>, e essa rota responde apenas ao método HTTP <span class="code-color"><em>GET</em></span>, o cabeçalho de resposta inclui a linha <span class="code-color"><em>HTTP/1.1 404 Not Found</em></span>. Além disso, o Express gerou automaticamente uma curta resposta HTML com o aviso <span class="red-color"><strong>Cannot POST</strong></span>.</p>
                <p class="Texto">Agora que vimos como gerar uma solicitação POST usando o curl, vamos escrever um programa Express capaz de tratar essa solicitação com sucesso.</p>
                <p class="Texto">Primeiro, note que o campo <span class="code-color"><em>Content-Type</em></span> no cabeçalho da solicitação diz que os dados enviados pelo cliente estão no formato <span class="code-color"><em>application/x-www-form-urlencoded</em></span>. O Express não reconhece esse formato por padrão, por isso precisamos usar o módulo express.urlencoded. Quando incluímos esse módulo, o objeto <span class="code-color"><em>req</em></span> — passado como parâmetro para a função de manipulação (handler)—tem configurada a propriedade <span class="code-color"><em>req.body.message</em></span>, que corresponde ao campo mensagem enviado pelo cliente. O módulo é carregado com app.use, que deve ser posto antes da declaração das rotas:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> express = require(
<span class="orange-code">'express'</span>)
<span class="green-code">const</span> app = express()
<span class="green-code"><strong>const</strong></span> host = <span class="orange-code">"myserver"</span>
<span class="green-code"><strong>const</strong></span> port = <span class="dark_blue_code"><strong>8080</strong></span>

app.use(express.urlenconded({<span class="blue-code">extended</span>: <span class="green-code"><strong>true</strong></span>}))
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Feito isso, bastaria alterar <span class="code-color"><em>app.get</em></span> para <span class="code-color"><em>app.post</em></span> na rota existente para atender às solicitações feitas
                via <span class="code-color"><em>POST</em></span> e para recuperar o corpo da solicitação:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
                    </button>
                    <pre><code class="Texto">
app.post(<span class="orange-code">'/'</span>, (req, res) => {
    res.send(req.body.message)
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Em vez de substituir a rota, outra possibilidade seria simplesmente adicionar essa nova rota, já que o Express identifica o método HTTP no cabeçalho da solicitação e usa a rota apropriada. Como estamos interessados em adicionar mais de uma funcionalidade a este servidor, é conveniente separar cada uma com seu próprio caminho, como <span class="code-color"><em>/echo</em></span> e <span class="code-color"><em>/ip</em></span>.</p>
                <br>
                <p class="Subtopico"><strong>Manipulador de caminhos e funções</strong></p>
                <p class="Texto">Tendo definido qual método HTTP responderá à solicitação, precisamos definir um caminho
                específico para o recurso e uma função que processe e gere uma resposta ao cliente.</p>
                <p class="Texto">Para expandir a funcionalidade echo do servidor, podemos definir uma rota usando o método POST com o caminho <span class="code-color"><em>/echo</em></span>:</p>
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
                <p class="Texto">O parâmetro <span class="code-color"><em>req</em></span> da função de manipulação (handler) contém todos os detalhes da solicitação armazenados como propriedades. O conteúdo do campo message no corpo da solicitação está disponível na propriedade req.body.message. O exemplo simplesmente envia este campo de volta ao cliente através da chamada res.send(req.body.message).</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>