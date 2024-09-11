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
                        <p>A <span class="code-color"><strong>URL</strong></span> <span class="code-color"><em>(Uniform Resource Locator)</em></span> é um endereço que aponta para um recurso na internet. Esse recurso geralmente é um arquivo que pode ser copiado de um servidor remoto, mas as URLs também podem indicar conteúdos gerados dinamicamente e fluxos de dados.</p>
                    </div>
                </div>
                <br>
                <div class="image-content">
                    <img src="../assets/img/url.png.png" alt="Componentes da URL">
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
                        <p>Existem outros protocolos usados por aplicativos web para implementar a comunicação cliente/servidor. Para chamadas de áudio e vídeo, por exemplo, é mais apropriado usar <span class="code-color"><strong>WebSockets</strong></span>, um protocolo de nível inferior que é mais eficiente do que o HTTP para transferir fluxos de dados em ambas as direções.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">O formato da mensagem de solicitação que o cliente envia ao servidor é o mesmo no HTTP e no HTTPS. O HTTPS já é mais utilizado do que o HTTP, pois nele todas as trocas de dados entre cliente e servidor são criptografadas, um recurso indispensável para garantir privacidade e segurança em redes públicas. A conexão criptografada é estabelecida entre o cliente e o servidor antes mesmo de qualquer mensagem HTTP ser trocada, usando o protocolo criptográfico <span class="code-color"><em>Transport Layer Security (TLS)</em></span>. Dessa forma, toda a comunicação HTTPS é encapsulada pela TLS. Depois de descriptografada, a solicitação ou resposta transmitida por HTTPS não é diferente de uma solicitação ou resposta feita exclusivamente por HTTP.</p>
                <p class="Texto">O terceiro elemento da nossa URL, <span class="code-color"><em>/pt/</em></span>, será interpretado pelo servidor como a localização ou o caminho para o recurso que está sendo solicitado. Se o caminho não for fornecido na URL, o local padrão / será usado. A implementação mais simples de um servidor HTTP associa os caminhos nas URLs a arquivos no sistema de arquivos em que o servidor está sendo executado, mas esta é apenas uma das muitas opções disponíveis em servidores HTTP mais sofisticados.</p>
                <br>
                <p class="Subtopico"><strong>A mensagem de solicitação</strong></p>
                <p class="Texto">O HTTP opera através de uma conexão já estabelecida entre cliente e servidor, geralmente implementada em TCP e criptografada com TLS. Na verdade, uma vez que uma conexão que atenda aos requisitos impostos pelo servidor esteja pronta, uma solicitação HTTP digitada à mão em texto simples pode gerar a resposta do servidor. Na prática, porém, os programadores raramente precisam implementar rotinas para compor mensagens HTTP, pois a maioria das linguagens de programação fornece mecanismos que automatizam a criação dessas mensagens. No caso da URL de exemplo, <span class="code-color"><a href="https://learning.lpi.org/pt/" target="_blank">https://learning.lpi.org/pt/</a></span>, a mensagem de solicitação mais simples possível teria o seguinte conteúdo:</p>
            </div>
        </div>
    </div>