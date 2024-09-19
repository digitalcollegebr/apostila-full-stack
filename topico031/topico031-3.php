<?php
    // A_S - Header
    include('../layouts/header.php');
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
                <p class="Titulo">Noções básicas de HTTP</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">O protocolo de transferência de hipertexto (<span class="code-color">HyperText Transfer Protocol ou HTTP</span>) define a forma como um cliente solicita um recurso específico ao servidor. O princípio de funcionamento é bastante simples: o cliente cria uma mensagem de solicitação identificando o recurso de que necessita e encaminha essa mensagem para o servidor através da rede. Por sua vez, o servidor HTTP avalia de onde extrair o recurso solicitado e envia uma mensagem de resposta de volta ao cliente. A mensagem de resposta contém detalhes sobre o recurso solicitado, seguidos do recurso em si.</p>
                <p class="Texto">Mais especificamente, HTTP é o conjunto de regras que definem como o aplicativo cliente deve formatar as mensagens de <em>solicitação</em> que serão enviadas ao servidor. O servidor então segue as regras do HTTP para interpretar a solicitação e formatar mensagens de <em>resposta</em>. Além de solicitar ou transferir o conteúdo solicitado, as mensagens HTTP contêm informações extras sobre o cliente e o servidor envolvidos, sobre o conteúdo em si e até mesmo sobre sua indisponibilidade. Se um recurso não puder ser enviado, um código na resposta explica o motivo da indisponibilidade e, se possível, indica para onde o recurso foi movido</p>
                <p class="Texto">A parte da mensagem que define os detalhes do recurso e outras informações de contexto é chamada de <em>cabeçalho</em> da mensagem. A parte após o cabeçalho, que contém o conteúdo do recurso correspondente, é chamada de <em>corpo de dados</em> (ou carga) da mensagem. Tanto as mensagens de solicitação quanto as mensagens de resposta podem ter um corpo de dados, mas na maioria dos casos ele está presente apenas na mensagem de resposta.</p>
                <div class="image-content">
                    <img src="../assets/img/http.png" alt="HTTP">
                </div>
                <br>
                <p class="Subtopico"><strong>A solicitação do cliente</strong></p>
                <p class="Texto">A primeira etapa de uma troca de dados HTTP entre o cliente e o servidor é iniciada pelo cliente, quando ele escreve uma mensagem de solicitação ao servidor. Vejamos, por exemplo, uma tarefa comum de um navegador: carregar uma página HTML de um servidor que hospeda um site, como <a href="https://learning.lpi.org/pt/" targer="_blank">https://learning.lpi.org/pt/</a>. O endereço, ou URL, fornece diversas informações relevantes. Três informações aparecem neste exemplo específico: </p>
                <ul class="Texto">
                <li><em>O protocolo: HyperText Transfer Protocol Secure <span class="code-color"><em>(https)</em></span>, uma versão criptografada do HTTP.</em></li>
                <li><em>O nome da rede do host <span class="code-color"><em>(learning.lpi.org)</em></span></em></li>
                <li><em>A localização do recurso solicitado no servidor (o diretório <span class="code-color"><em>/pt/</em></span>-- neste caso, a versão em
                português da página inicial).</em></li>
                </ul>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">A <span class="code-color"><strong>URL</strong></span> <span class="code-color"><em>(Uniform Resource Locator)</em></span> é um endereço que aponta para um recurso na internet. Esse recurso geralmente é um arquivo que pode ser copiado de um servidor remoto, mas as URLs também podem indicar conteúdos gerados dinamicamente e fluxos de dados.</p>
                    </div>
                </div>
                <br>
                <div class="image-content">
                    <img src="../assets/img/url.png" alt="Componentes da URL">
                </div>
                <p class="Subtopico"><strong>Como o cliente lida com a URL</strong></p>
                <p class="Texto">Antes de contatar o servidor, o cliente precisa converter <span class="code-color"><em>learning.lpi.org_</em></span> para o endereço IP correspondente. O cliente usa outro serviço de Internet, o <em>Sistema de Nomes de Domínio (Domain Name System ou DNS)</em>, para solicitar o endereço IP de um nome de host a um ou mais servidores DNS predefinidos (em geral, os servidores DNS são definidos automaticamente pelo provedor).</p>
                <p class="Texto">Com o endereço IP do servidor, o cliente tenta se conectar à porta HTTP ou HTTPS. As portas de rede são números de identificação definidos pelo Protocolo de Controle de Transmissão (Transmission Control Protocol ou TCP) para entrelaçar e identificar canais de comunicação distintos em uma conexão cliente/servidor. Por padrão, os servidores HTTP recebem solicitações nas portas TCP 80 (HTTP) e 443 (HTTPS)</p>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Existem outros protocolos usados por aplicativos web para implementar a comunicação cliente/servidor. Para chamadas de áudio e vídeo, por exemplo, é mais apropriado usar <span class="code-color"><strong>WebSockets</strong></span>, um protocolo de nível inferior que é mais eficiente do que o HTTP para transferir fluxos de dados em ambas as direções.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">O formato da mensagem de solicitação que o cliente envia ao servidor é o mesmo no HTTP e no HTTPS. O HTTPS já é mais utilizado do que o HTTP, pois nele todas as trocas de dados entre cliente e servidor são criptografadas, um recurso indispensável para garantir privacidade e segurança em redes públicas. A conexão criptografada é estabelecida entre o cliente e o servidor antes mesmo de qualquer mensagem HTTP ser trocada, usando o protocolo criptográfico <span class="code-color"><em>Transport Layer Security (TLS)</em></span>. Dessa forma, toda a comunicação HTTPS é encapsulada pela TLS. Depois de descriptografada, a solicitação ou resposta transmitida por HTTPS não é diferente de uma solicitação ou resposta feita exclusivamente por HTTP.</p>
                <p class="Texto">O terceiro elemento da nossa URL, <span class="code-color"><em>/pt/</em></span>, será interpretado pelo servidor como a localização ou o caminho para o recurso que está sendo solicitado. Se o caminho não for fornecido na URL, o local padrão / será usado. A implementação mais simples de um servidor HTTP associa os caminhos nas URLs a arquivos no sistema de arquivos em que o servidor está sendo executado, mas esta é apenas uma das muitas opções disponíveis em servidores HTTP mais sofisticados.</p>
                <br>
                <p class="Subtopico"><strong>A mensagem de solicitação</strong></p>
                <p class="Texto">O HTTP opera através de uma conexão já estabelecida entre cliente e servidor, geralmente implementada em TCP e criptografada com TLS. Na verdade, uma vez que uma conexão que atenda aos requisitos impostos pelo servidor esteja pronta, uma solicitação HTTP digitada à mão em texto simples pode gerar a resposta do servidor. Na prática, porém, os programadores raramente precisam implementar rotinas para compor mensagens HTTP, pois a maioria das linguagens de programação fornece mecanismos que automatizam a criação dessas mensagens. No caso da URL de exemplo, <span class="code-color"><a href="https://learning.lpi.org/pt/" target="_blank">https://learning.lpi.org/pt/</a></span>, a mensagem de solicitação mais simples possível teria o seguinte conteúdo:</p>
    <div class="code-section" style="width: 70%; text-align: left; font-size:20px">
    <p><pre><code>
    GET /pt/ HTTP/1.1
    Host: learning.lpi.org
    User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101
    Firefox/87.0
    Accept: text/html
    </pre></code></p>
    </div>
                <br>
                <p class="Texto">A primeira palavra da primeira linha identifica o <em>método</em> HTTP. Ele define qual operação o cliente deseja executar no servidor. O método <span class="code-color"><strong>GET</strong></span> informa ao servidor que o cliente solicita o recurso que o segue: /pt/. Tanto o cliente quanto o servidor podem suportar mais de uma versão do protocolo HTTP, portanto a versão a ser adotada na troca de dados também é fornecida na primeira linha: <span class="code-color"><em>HTTP/1.1.</em></span></p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">A versão mais recente do protocolo HTTP é HTTP/2. Entre outras diferenças, as mensagens escritas em HTTP/2 são codificadas em uma estrutura binária, ao passo que as mensagens escritas em HTTP/1.1 são enviadas em texto simples. Essa mudança otimiza as taxas de transmissão de dados, mas o conteúdo das mensagens permanece basicamente o mesmo.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">O cabeçalho pode conter mais linhas após a primeira, para contextualizar e ajudar a identificar a solicitação ao servidor. O campo de cabeçalho <span class="code-color"><em>Host</em></span>, por exemplo, pode parecer redundante, porque o host do servidor foi obviamente identificado pelo cliente para estabelecer a conexão e é razoável supor que o servidor conheça a sua própria identidade. No entanto, é importante informar ao host o nome de host esperado no cabeçalho da solicitação, pois é prática comum usar o mesmo servidor HTTP para hospedar mais de um site (nesse cenário, cada host específico é chamado de host virtual). Portanto, o campo <span class="code-color"><em>Host</em></span> é usado pelo servidor HTTP para identificar a qual deles a solicitação se refere</p>
                <p class="Texto">O campo de cabeçalho <span class="code-color"><em>User-Agent</em></span> contém detalhes sobre o programa cliente que está fazendo a solicitação. Este campo pode ser usado pelo servidor para adaptar a resposta às necessidades de um cliente específico, mas é mais frequentemente empregado para produzir estatísticas sobre os clientes que usam o servidor.</p>
                <p class="Texto">O campo <span class="code-color"><em>Accept</em></span> tem um valor mais imediato, pois informa ao servidor o formato do recurso solicitado. Se o formato do recurso for indiferente para o cliente, o campo <span class="code-color"><em>Accept</em></span> pode especificar <span class="code-color"><em>*/*</em></span> como formato.</p>
                <p class="Texto">Existem muitos outros campos de cabeçalho que podem ser usados em uma mensagem HTTP, mas os campos mostrados no exemplo já bastam para solicitar um recurso do servidor.</p>
                <p class="Texto">Além dos campos no cabeçalho da solicitação, o cliente pode incluir outros dados complementares na solicitação HTTP que será enviada ao servidor. Se esses dados consistirem apenas em parâmetros de texto simples, no formato name=value, eles podem ser adicionados ao caminho do método GET. Os parâmetros são incorporados ao caminho após um ponto de interrogação e são separados por <span class="code-color"><em> “&”</em></span>:</p>
                <div class="code-smaller">
                    GET /cgi-bin/receive.cgi?name=LPI&email=info@lpi.org HTTP/1.1
                </div>
                <br>
                <p class="Texto">Neste exemplo, <span class="code-color"><em>/cgi-bin/receive.cgi</em></span> é o caminho até o script no servidor que vai processar e, possivelmente, usar os parâmetros <span class="code-color"><em>name</em></span> e <span class="code-color"><em>email</em></span> obtidos no caminho da solicitação. A string que corresponde aos campos, no formato <span class="code-color"><em>name=LPI&email=info@lpi.org</em></span>, é chamada <em>string de solicitação e é fornecida ao script <span class="code-color"><em>receive.cgi</em></span> pelo servidor HTTP que recebe a solicitação.</em></p>
                <p class="Texto">Quando os dados são compostos por mais do que campos curtos de texto, é mais apropriado enviálos no corpo de dados da mensagem. Neste caso, deve-se utilizar o método <span class="code-color"><strong>HTTP POST</strong></span> para que o servidor receba e processe o corpo de dados da mensagem, de acordo com as especificações indicadas no cabeçalho da solicitação. Quando o método POST é usado, o cabeçalho da solicitação deve fornecer o tamanho da carga que será enviada e a maneira como o corpo é formatado:</p>
                <br>
    <div class="code-section" style="width: 70%; text-align: left; font-size:20px;">
    <p><pre><code>
    POST /cgi-bin/receive.cgi HTTP/1.1
    Host: learning.lpi.org
    Content-Length: 1503
    Content-Type: multipart/form-data; boundary=------------------------
    405f7edfd646a37d
    </pre></code></p>
    </div>
                <br>
                <p class="Texto">O campo <span class="code-color"><em>Content-Length</em></span> indica o tamanho em bytes da carga (corpo de dados) e o campo <span class="code-color"><em>ContentType</em></span> indica seu formato. O formato multipart/form-data é o mais comumente usado em formulários HTML tradicionais que empregam o método POST. Nesse formato, cada campo inserido no corpo de dados da solicitação é separado pelo código indicado pela palavra-chave <span class="code-color"><em>boundary</em></span>. O método POST deve ser usado apenas quando apropriado, pois ele usa uma quantidade de dados um pouco maior do que uma solicitação equivalente feita com o método GET. Como o método GET envia os parâmetros diretamente no cabeçalho da mensagem de solicitação, a troca de dados total tem uma latência menor, pois não é necessária uma etapa de conexão adicional para transmitir o corpo da mensagem.</p>
                <br>
                <p class="Subtopico"><strong>O cabeçalho de resposta</strong></p>
                <p class="Texto">Depois que o servidor HTTP recebe o cabeçalho da mensagem de solicitação, o servidor retorna uma mensagem de resposta ao cliente. Uma solicitação de arquivo HTML normalmente tem um cabeçalho de resposta semelhante a este:</p>
                <br>
                <div class="code-section" style="width: 70%; text-align: left; font-size:20px;">
    <p><pre><code>
    HTTP/1.1 200 OK
    Accept-Ranges: bytes
    Content-Length: 18170
    Content-Type: text/html
    Date: Mon, 05 Apr 2021 13:44:25 GMT
    Etag: "606adcd4-46fa"
    Last-Modified: Mon, 05 Apr 2021 09:48:04 GMT
    Server: nginx/1.17.10
    </pre></code></p>
    </div>
                <br>
                <p class="Texto">A primeira linha fornece a versão do protocolo HTTP usado na mensagem de resposta, que deve
                corresponder à versão usada no cabeçalho da solicitação. Em seguida, ainda na primeira linha, aparece o código de status da resposta, indicando como o servidor interpretou e gerou a resposta para a solicitação.</p>
                <p class="Texto">O código de status é um número de três dígitos, no qual o dígito mais à esquerda define a classe da resposta. Existem cinco classes de códigos de status, numeradas de 1 a 5, cada uma indicando um tipo de ação realizado pelo servidor:</p>
                <div class="typewriter-small">
                <strong>1xx (Informativo)</strong><p>A solicitação foi recebida, o processo está sendo continuado</p>
                </div>
                <div class="typewriter-small">
                    <strong>2xx (Sucesso)</strong>
                    <p>A solicitação foi recebida, entendida e aceita com sucesso.</p>
                </div>
                <div class="typewriter-small">
                    <strong>3xx (Redirecionamento)</strong>
                    <p>São necessárias ações adicionais para concluir a solicitação.</p>
                </div>
                <div class="typewriter-small">
                    <strong>4xx (Erro do cliente)</strong>
                    <p>A solicitação contém sintaxe incorreta ou não pode ser atendida</p>
                </div>
                <div class="typewriter-small">
                    <strong>5xx (Erro do servidor)</strong>
                    <p>O servidor não atendeu a uma solicitação aparentemente válida.</p>
                </div>
                <p class="Texto">O segundo e o terceiro dígitos são usados para indicar detalhes adicionais. O código 200, por exemplo, indica que a solicitação pode ser atendida sem problemas. Como mostrado no exemplo, também é possível fornecer uma breve descrição após o código de resposta <span class="code-color"><em>(OK)</em></span>. Alguns códigos específicos servem para garantir que o cliente HTTP possa acessar o recurso em situações adversas ou para ajudar a identificar o motivo da falha no caso de uma solicitação malsucedida:</p>
                <br>
                <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">301 Moved Permanently</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O recurso de destino recebeu uma nova URL permanente, fornecida pelo campo de cabeçalho <span class="code-color"><em>Location</em></span> na resposta.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">302 Found</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O recurso de destino reside temporariamente em uma URL diferente</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">401 Unauthorized</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">A solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">403 Forbidden</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">A resposta <span class="code-color"><em>Forbidden</em>
                </span> indica que, embora a solicitação seja válida, o servidor está configurado para não fornecê-la</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">404 Not Found</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O servidor de origem não encontrou uma representação atual do recurso de destino ou não está disposto a divulgar uma representação existente.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">500 Internal Server Error</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O servidor encontrou uma condição inesperada que o impediu de atender à solicitação.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">502 Bad Gateway</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O servidor, ao atuar como um gateway ou proxy, recebeu uma resposta inválida de um servidor
                de entrada que ele acessou ao tentar atender a solicitação.</p>
            </div>
        </div>
        <br>
        <p class="Texto">Embora indiquem que não foi possível atender à solicitação, os códigos de status <span class="code-color"><em>4xx</em></span> e <span class="code-color"><em>5xx</em></span> pelo menos informam que o servidor HTTP está rodando e é capaz de receber solicitações. Os códigos <span class="code-color"><em>4xx</em></span> requerem que uma ação seja realizada no lado do cliente, pois sua URL ou credenciais estão incorretos. Por sua vez, os códigos <span class="code-color"><em>5xx</em></span> indicam algo errado no lado do servidor. Portanto, no contexto dos aplicativos web, essas duas classes de códigos de status indicam que a origem do erro está no próprio aplicativo, seja no cliente ou no servidor, e não na infraestrutura subjacente.</p>
        <br>
        <p class="Subtopico"><strong>Conteúdo estático e dinâmico</strong></p>
        <p class="Texto">Os servidores HTTP usam dois mecanismos básicos para atender ao conteúdo solicitado pelo cliente. O primeiro mecanismo fornece <em>conteúdo estático</em>: ou seja, o caminho indicado na mensagem de solicitação corresponde a um arquivo no sistema de arquivos local do servidor. O segundo mecanismo fornece <em>conteúdo dinâmico</em>: ou seja, o servidor HTTP encaminha a solicitação para outro programa — normalmente um script — para construir a resposta a partir de diversas fontes, como bancos de dados e outros arquivos.</p>
        <p class="Texto">Embora existam diferentes servidores HTTP, todos eles usam o mesmo protocolo de comunicação HTTP e adotam mais ou menos as mesmas convenções. Um aplicativo que não tem uma necessidade específica pode ser implementado com qualquer servidor tradicional, como Apache ou NGINX. Ambos são capazes de gerar conteúdo dinâmico e fornecer conteúdo estático, mas existem diferenças sutis na configuração de cada um.</p>
        <p class="Texto">A localização dos arquivos estáticos a serem servidos, por exemplo, é definida de maneiras diferentes no Apache e no NGINX. A convenção é manter esses arquivos em um diretório específico para esse fim, tendo um nome associado ao host, por exemplo <span class="code-color"><em>/var/www/learning.lpi.org/</em></span>. No Apache, esse caminho é definido pela diretiva de configuração <span class="code-color"><em>DocumentRoot /var/www/learning.lpi.org</em></span>, em uma seção que define um host virtual. No NGINX, a diretiva usada é root
        <em>/var/www/learning.lpi.org</em> em uma seção server do arquivo de configuração.</p>
        <p class="Texto">Qualquer que seja o servidor escolhido, os arquivos em <em>/var/www/learning.lpi.org/</em> serão servidos via HTTP de maneira muito parecida. Alguns campos no cabeçalho da resposta e seus conteúdos podem variar entre os dois servidores, mas campos como Content-Type precisam estar presentes no cabeçalho da resposta e ser consistentes entre todos os servidores.</p>
        <br>
        <p class="Subtopico"><strong>Cache</strong></p>
        <p class="Texto">O HTTP foi criado para funcionar em qualquer tipo de conexão à internet, seja ela rápida ou lenta. Além disso, a maioria das trocas HTTP tem de atravessar muitos nós de rede devido à arquitetura distribuída da internet. Como resultado, é importante adotar alguma estratégia de cache de conteúdo para evitar a transferência redundante de conteúdo baixado anteriormente. As transferências HTTP trabalham com dois tipos básicos de cache: <em>compartilhada</em> e <em>privada</em>.</p>
        <p class="Texto">Uma cache compartilhada é usada por mais de um cliente. Por exemplo, um grande provedor de conteúdo pode usar caches em servidores distribuídos geograficamente para que os clientes obtenham os dados do servidor mais próximo. Quando um cliente faz uma solicitação, sua resposta é armazenada em uma cache compartilhada, e outros clientes que fizerem a mesma solicitação na mesma região receberão a resposta que está na cache.</p>
        <p class="Texto">A cache privada é criada pelo próprio cliente para seu uso exclusivo. É o tipo de cache que o navegador web cria para imagens, arquivos CSS, JavaScript ou o próprio documento HTML, para que não seja necessário fazer download novamente se esses elementos forem solicitados em um futuro próximo</p>
        <br>
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Nem todas as solicitações HTTP precisam ser armazenadas em cache. Uma solicitação usando o método POST, por exemplo, implica em uma resposta associada exclusivamente a essa solicitação específica, de modo que o conteúdo dessa resposta não será reutilizado. Por padrão, apenas as respostas às solicitações feitas usando o método GET são armazenadas em cache. Além disso, só as respostas com códigos de status conclusivos, como 200 (OK), 206 (Partial Content), 301 (Moved Permanently) e 404 (Not Found) são adequadas para armazenamento em cache.</p>
                    </div>
                </div>
                <br>
        <p class="Texto">Tanto a estratégia de cache compartilhada quanto a privada usam cabeçalhos HTTP para controlar como o conteúdo baixado deve ser armazenado em cache. No caso da cache privada, o cliente consulta o cabeçalho da resposta e verifica se o conteúdo da cache local ainda corresponde ao conteúdo remoto atual. Em caso afirmativo, o cliente dispensa a transferência da carga da resposta e usa a versão local.</p>
        <p class="Texto">A validade do recurso em cache pode ser avaliada de várias maneiras. O servidor pode fornecer uma data de expiração no cabeçalho da resposta para a primeira solicitação, para que o cliente descarte o recurso armazenado em cache no final do prazo e solicite-o novamente para obter a versão atualizada. No entanto, o servidor nem sempre consegue determinar a data de expiração de um recurso, de modo que é comum usar o campo <span class="code-color"><strong>ETag</strong></span> no cabeçalho de resposta para identificar a versão do recurso, por exemplo <span class="code-color"><em>Etag: "606adcd4-46fa"</em></span>.</p>
        <p class="Texto">Para verificar se um recurso armazenado em cache precisa ser atualizado, o cliente solicita apenas o cabeçalho de resposta do servidor. Se o campo <em>ETag</em> corresponder ao da versão armazenada localmente, o cliente reutiliza o conteúdo armazenado em cache. Caso contrário, o conteúdo atualizado do recurso é baixado do servidor</p>
        <p class="Subtopico"><strong>Sessões HTTP</strong></p>
        <p class="Texto">Em um site convencional ou aplicativo web, os recursos responsáveis pelo controle da sessão baseiam-se em cabeçalhos HTTP. O servidor não pode pressupor, por exemplo, que todas as solicitações provenientes do mesmo endereço IP vêm do mesmo cliente. O método mais tradicional que permite ao servidor associar diferentes solicitações a um único cliente é o uso de <span class="code-color"><em>cookies</em></span>, uma etiqueta de identificação fornecida ao cliente pelo servidor e incluída no cabeçalho HTTP.</p>
        <p class="Texto">Os cookies permitem que o servidor preserve informações sobre um cliente específico, mesmo que a pessoa que está executando o cliente não se identifique explicitamente. Com os cookies, é possível implementar sessões em que os logins, cartões de compras, preferências, etc., são preservados entre diferentes solicitações feitas ao mesmo servidor que os forneceu. Os cookies também são usados para rastrear a navegação do usuário, por isso é importante ter a permissão dele antes de enviá-los.</p>
        <p class="Texto">O servidor define o cookie no cabeçalho da resposta usando o campo Set-Cookie. O valor do campo é um par name=value escolhido de forma a representar algum atributo associado a um cliente específico. O servidor pode, por exemplo, criar um número de identificação para um cliente que solicita um recurso pela primeira vez e repassá-lo ao cliente no cabeçalho da resposta:</p>
        <div class="code-section" style="width: 70%; text-align: left; font-size:20px;">
    <p><pre><code>
    HTTP/1.1 200 OK
    Accept-Ranges: bytes
    Set-Cookie: client_id=62b5b719-fcb
    </pre></code></p>
    </div>
        <br>
        <p class="Texto">Se o cliente permitir o uso de cookies, as novas solicitações para este mesmo servidor terão o campo do cookie no cabeçalho:</p>
        <div class="code-section" style="width: 70%; text-align: left; font-size:20px;">
    <p><pre><code>
    GET /en/ HTTP/1.1
    Host: learning.lpi.org
    Cookie: client_id=62b5b719-fcbf
    </pre></code></p>
    </div>
        <br>
        <p class="Texto">Com esse número de identificação, o servidor pode recuperar definições específicas ao cliente e gerar uma resposta personalizada. Também é possível usar mais de um campo <span class="code-color"><em>Set-Cookie</em></span> para entregar cookies diferentes ao mesmo cliente. Dessa forma, mais de uma definição pode ser preservada no lado do cliente.</p>
        <p class="Texto">Os cookies suscitam problemas de privacidade e potenciais falhas de segurança, já que existe a possibilidade de serem transferidos para outro cliente, que será identificado pelo servidor como sendo o cliente original. Os cookies usados para preservar sessões podem dar acesso a informações confidenciais do cliente original. Portanto, é imprescindível que os clientes adotem mecanismos de proteção local para evitar que seus cookies sejam extraídos e reutilizados sem autorização. </p>
            </div>
        </div>
    </div>
    <br>
    <a href="../questoesIntroducao/questaoIntro.php" class="button-prox"><img src="../assets/img/arrow-circle-right (1).png" alt="" class="next"></a>
    <br><br>
    <?php
    // A_S - Footer
    include('../layouts/footer.php');
?>
