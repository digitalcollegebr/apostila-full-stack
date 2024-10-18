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
                <p class="Subtopico" style="font-size: 13px;"><strong>Parte 01</strong></p>
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
<span class="green-code"><strong>const</strong></span> express = require(<span class="orange-code">'express'</span>)
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
                <div class="typewriter-small" id="copycode" style="text-align: center;">
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
                    <pre><code>
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
                <p class="Texto">Lembre-se de que as alterações feitas só entram em vigor depois que o servidor é reiniciado. Como estamos executando o servidor a partir de uma janela de terminal para os exemplos dados neste capítulo, você pode desligar o servidor pressionando <span class="keyboard">Ctrl</span> + <span class="keyboard">C</span> nesse terminal. Em seguida, execute novamente o servidor por meio do comando <span class="code-color"><em>node index.js</em></span>. A resposta obtida pelo cliente para a solicitação <span class="code-color"><em>curl</em></span> mostrada anteriormente agora é bem-sucedida:</p>
                <br>
                <div class="typewriter-small">
                    <pre><code class="Texto">
$ <strong> curl http://myserver:8080/echo --data message="This is the POST request body"</strong>
This is the POST request body
                    </code></pre>
                </div>
                <br>
                <p class="Subtopico"><strong>Outras maneiras de passar e devolver informações em uma solicitação GET</strong></p>
                <p class="Texto">Pode ser excessivo usar o método HTTP <span class="code-color"><em>POST</em></span> para enviar apenas mensagens de texto curtas, como a usada no exemplo. Nesses casos, os dados podem ser enviados em uma <em>string de solicitação</em> iniciada por um ponto de interrogação. Assim, a string <span class="code-color"><em>?message=This+is+the+message</em></span> poderia ser incluída no caminho de solicitação do método HTTP <span class="code-color"><em>GET</em></span>. Os campos usados na string de solicitação estão disponíveis para o servidor na propriedade <span class="code-color"><em>req.query</em></span>. Portanto, um campo denominado message está disponível na propriedade <span class="code-color"><em>req.query</em></span>.message. Outra maneira de enviar dados através do método HTTP <span class="code-color"><em>GET</em></span> é usar os <em>parâmetros de rota do Express</em>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
app.<span class="green-code"><strong>get</strong></span>(<span class="orange-code">'/echo/:message'</span>, (req, res) => {
    res.send(req.params.message)
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A rota neste exemplo corresponde às solicitações feitas com o método <span class="code-color"><em>GET</em></span> usando o caminho <span class="code-color"><em>/echo/:message</em></span>, onde <span class="code-color"><em>:message</em></span> é um espaço reservado para qualquer termo enviado com esse rótulo pelo cliente. Esses parâmetros estão acessíveis na propriedade <span class="code-color"><em>req.params</em></span>. Com esta nova rota, a função echo do servidor pode ser solicitada de forma mais sucinta pelo cliente:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong> curl http://myserver:8080/echo/hello</strong>
hello
                    </code></pre>
                </div>
                <p class="Texto">Em outras situações, as informações de que o servidor precisa para processar a solicitação não precisam ser fornecidas explicitamente pelo cliente. Por exemplo, o servidor tem outra maneira de recuperar o endereço IP público do cliente. Essa informação está presente no objeto <span class="code-color"><em>req</em></span> por padrão, na propriedade <span class="code-color"><em>req.ip</em></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
app.<span class="green-code"><strong>get</strong></span>(<span class="orange-code">'/ip'</span>, (req, res) => {
    res.send(req.ip)
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Agora o cliente pode solicitar o caminho <span class="code-color"><em>/ip</em></span> com o método <span class="code-color"><em>GET</em></span> para encontrar seu próprio endereço
                IP público:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong> curl http://myserver:8080/ip</strong>
187.34.178.12
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Outras propriedades do objeto <span class="code-color"><em>req</em></span> podem ser modificadas pelo cliente, especialmente os cabeçalhos de solicitação disponíveis em <span class="code-color"><em>req.headers</em></span>. A propriedade <span class="code-color"><em>req.headers.user-agent</em></span>, por exemplo, identifica qual programa está fazendo a solicitação. Embora não seja uma prática comum, o cliente pode alterar o conteúdo deste campo; assim, o servidor não deve usá-lo para identificar de forma confiável um cliente específico. É ainda mais importante validar os dados fornecidos explicitamente pelo cliente, evitando assim inconsistências nos limites e formatos que podem afetar adversamente o aplicativo.</p>
                <br>
                <p class="Subtopico"><strong>Ajustes à resposta</strong></p>
                <p class="Texto">Como vimos nos exemplos anteriores, o parâmetro <span class="code-color"><em>res</em></span> é responsável por retornar uma resposta ao cliente. Além disso, o objeto <span class="code-color"><em>res</em></span> pode alterar outros aspectos da resposta. Você deve ter notado que, embora as respostas que implementamos até agora sejam apenas breves mensagens de texto puro, o cabeçalho <span class="code-color"><em>Content-Type</em></span> das respostas está usando <span class="code-color"><em>text/html; charset=utf-8</em></span>. Embora isso não impeça que a resposta em texto puro seja aceita, será mais correto redefinir este campo no cabeçalho da resposta como <span class="code-color"><em>text/plain</em></span> com a configuração <span class="code-color"><em>res.type('text/plain')</em></span>.</p>
                <p class="Texto">Outros tipos de ajustes de resposta envolvem o uso de <span class="code-color"><strong>cookies</strong></span>, que permitem ao servidor identificar um cliente que já fez uma solicitação anteriormente. Os cookies são importantes para a <strong>utilização de recursos avançados, como a criação de sessões privadas que associam solicitações a um usuário específico</strong>, mas aqui veremos apenas um exemplo simples de como usar um cookie para identificar um cliente que já acessou o servidor.</p>
                <p class="Texto">Dado o design modularizado do Express, o gerenciamento de cookies deve ser instalado com o comando <span class="code-color"><strong>npm</strong></span> antes de ser usado no script:</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
$ <strong>npm install cookie-parser</strong>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Após a instalação, o gerenciamento de cookies precisa ser incluído no script do servidor. A seguinte definição deve ser adicionada perto do início do arquivo:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> cookieParser = require(<span class="orange-code">'cookie-parser'</span>)
app.use(cookieParser())
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Para ilustrar o uso dos cookies, vamos modificar a função de manipulação da rota com o caminho raiz <span class="code-color"><em>/</em></span> já existente no script. O objeto <span class="code-color"><em>req</em></span> possui uma propriedade <span class="code-color"><em>req.cookies</em></span>, em que os cookies enviados no cabeçalho da solicitação são preservados. O objeto <span class="code-color"><em>res</em></span>, por sua vez, possui um método <span class="code-color"><em>res.cookie()</em></span> que cria um novo cookie a ser enviado ao cliente. A função de manipulação no exemplo a seguir verifica se um cookie com o nome <span class="code-color"><em>known</em></span> existe na solicitação. Se tal cookie não existir, o servidor pressupõe que se trata de um visitante que chegou ao site pela primeira vez e envia a ele um cookie com esse nome através da chamada <span class="code-color"><em>res.cookie('known', '1')</em></span>. Atribuímos arbitrariamente o valor <span class="code-color"><em>1</em></span> ao cookie porque ele precisa ter algum conteúdo, mas o servidor não consulta esse valor. Este aplicativo pressupõe que a simples presença do cookie indica que o cliente já solicitou esta rota antes:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i>
                                Copiar
                        </button>
                        <pre><code class="Texto">
app.<span class="green-code"><strong>get</strong></span>(<span class="orange-code">'/'</span>, (req,res) => {
    res.type(<span class="orange-code">'text-plain'</span>)
    <span class="green-code"><strong>if</strong></span> (req.cookies.know === <span class="green-code"><strong>undefined</strong></span>){
        res.cookie(<span class="orange-code">'know'</span>, <span class="orange-code">'1'</span>)
        res.send(<span class="orange-code">'Bem-vindo, novo visitante!'</span>)
    }
    <span class="green-code"><strong>else</strong></span>
    res.send(<span class="orange-code">'Bem-vindo de volta!, visitante'</span>);
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Por padrão, o <span class="code-color">curl</span> não usa cookies nas transações. Mas ele tem opções para armazenar (<span class="code-color">-c cookies.txt</span>) e enviar cookies armazenados (<span class="code-color">-b cookies.txt</span>):</p>
                <br>
                <div class="typewriter-small">
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080/ -c cookies.txt -b cookies.txt -v</strong>
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
< Content-Type: text/plain; charset=utf-8
* Added cookie known="1" for domain myserver, path /, expire 0
< Set-Cookie: known=1; Path=/
< Content-Length: 21
< ETag: W/"15-l7qrxcqicl4xv6EfA5fZFWCFrgY"
< Date: Sat, 03 Jul 2021 23:45:03 GMT
< Connection: keep-alive
<
* Connection #0 to host myserver left intact
Welcome, new visitor!
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Como esse comando foi o primeiro acesso desde que os cookies foram implementados no servidor, o cliente não tinha cookies para incluir na solicitação. Como seria de se esperar, o servidor não identificou o cookie na solicitação e, portanto, incluiu o cookie nos cabeçalhos de resposta, conforme indicado na linha <span class="code-color"><em>Set-Cookie: known=1; Path=/</em></span> da saída. Como habilitamos os cookies em curl, uma nova solicitação incluirá o cookie <span class="code-color"><em>known=1</em></span> nos cabeçalhos da solicitação, permitindo que o servidor identifique a presença do cookie:</p>
                <br>
                <div class="typewriter-small">
                    <pre><code class="Texto">
$ <strong>curl http://myserver:8080/ -c cookies.txt -b cookies.txt -v</strong>
* Trying 192.168.1.225:8080...
* TCP_NODELAY set
* Connected to myserver (192.168.1.225) port 8080 (#0)
> GET / HTTP/1.1
> Host: myserver:8080
> User-Agent: curl/7.68.0
>Accept: /
> Cookie: known=1
>
* Mark bundle as not supporting multiuse
< HTTP/1.1 200 OK
< X-Powered-By: Express
< Content-Type: text/plain; charset=utf-8
< Content-Length: 21
< ETag: W/"15-ATq2flQYtLMYIUpJwwpb5SjV9Ww"
< Date: Sat, 03 Jul 2021 23:45:47 GMT
< Connection: keep-alive
<
* Connection #0 to host myserver left intact
Welcome back, visitor
                    </code></pre>
                </div>
                <br>
                <p class="Subtopico"><strong>Segurança dos cookies</strong></p>
                <p class="Texto">O desenvolvedor deve estar ciente das potenciais vulnerabilidades ao usar cookies para identificar os clientes que fazem solicitações. Os invasores podem usar técnicas como <em>cross-site scripting (XSS)</em> e <em>cross-site request forgery (CSRF)</em> para roubar os cookies de um cliente e, assim, personificá-lo ao fazer uma solicitação ao servidor. De modo geral, esses tipos de ataques usam campos de comentários não validados ou URLs construídas meticulosamente para inserir código JavaScript malicioso na página. Quando executado por um cliente autêntico, esse código pode copiar cookies válidos e armazená-los, ou encaminhá-los para outro destino.</p>
                <p class="Texto">Portanto, especialmente em aplicativos profissionais, é importante instalar e empregar recursos mais especializados do Express, conhecidos como <em>middleware</em>. Os módulos <span class="code-color"><em>express-session</em></span> ou <span class="code-color"><em>cookie-session</em></span> permitem um controle mais completo e seguro sobre a sessão e o gerenciamento de cookies. Esses componentes oferecem controles extras para evitar que os cookies sejam desviados de seu emissor original.</p>
                <a href="topico035-2-2.php" class="button-prox-atv"><img src="../assets/img/arrow-circle-right (1).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
    
            </div>
        </div>
    </div>
    

    <?php include('../layouts/footerQ.php') ?>