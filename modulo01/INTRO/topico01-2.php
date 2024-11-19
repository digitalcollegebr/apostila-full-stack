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
            <a href="topico01-1.php" class="button-left">
                    <img src="../../assets/img/arrow-circle-left.png" alt="" class="left">
                </a>
                <p class="Titulo">031.2 - Arquiterura de aplicações web</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">A palavra <em>aplicativo</em> tem um amplo significado no jargão tecnológico. Quando o aplicativo é um programa tradicional, executado localmente e auto-suficiente em sua finalidade, tanto a interface operacional do aplicativo quanto os componentes de processamento de dados são integrados em um único “pacote”. Um <em>aplicativo web</em> é diferente porque adota o modelo cliente/servidor e sua parte cliente é baseada em HTML, que é obtido do servidor e, em geral, processado por um navegador.</p>
                <br>
                <p class="Subtopico"><strong>Clientes e servidores</strong></p>
                <p class="Texto">No modelo cliente/servidor, parte do trabalho é feito localmente no <em>lado do cliente</em> e parte do trabalho é feito remotamente, no <em>lado do servidor</em>. As tarefas realizadas por cada parte variam de acordo com a finalidade do aplicativo, mas em geral cabe ao cliente fornecer uma interface para o usuário e exibir o conteúdo de forma atraente. Cabe ao servidor executar a parte operacional do aplicativo, processando e respondendo às solicitações feitas pelo cliente. Em um aplicativo de compras, por exemplo, o aplicativo cliente apresenta uma interface para o usuário escolher e pagar pelos produtos, mas a fonte de dados e os registros da transação são mantidos no servidor remoto, acessado pela rede. Os aplicativos web realizam essa comunicação pela internet, geralmente por meio do <span class="code-color"><strong>Protocolo de Transferência de Hipertexto (HTTP)</strong></span>.</p>
                <br>
                <div class="image-content">
                    <img src="../../assets/img/server-side.png" alt="Modelo cliente/servidor">
                </div>
                <br>
                <p class="Texto">Depois de carregado pelo navegador, o lado do cliente do aplicativo inicia a interação com o servidor sempre que necessário ou conveniente. Os servidores de aplicativos web oferecem uma <span class="code-color"><em>interface de programação de aplicativos (API)</em></span> que define as solicitações disponíveis e como devem ser feitas. Assim, o cliente constrói uma solicitação no formato definido pela API e a envia ao servidor, que verifica os pré-requisitos da solicitação e envia de volta a resposta apropriada.</p>
                <p class="Texto">Enquanto o cliente, na forma de um aplicativo móvel ou navegador de desktop, é um programa independente em relação à interface do usuário e às instruções para se comunicar com o servidor, o navegador deve obter a página HTML e os componentes associados — como imagens, CSS e JavaScript — que definem a interface e as instruções para comunicação com o servidor.</p>
                <p class="Texto">As linguagens de programação e as plataformas usadas por cliente e servidor são independentes, mas empregam um protocolo de comunicação mutuamente compreensível. A parte do servidor é quase sempre realizada por um programa sem interface gráfica, rodando em ambientes de computação de alta disponibilidade, de forma a estar sempre pronto para responder às solicitações. Já a parte do cliente é executada em qualquer dispositivo capaz de renderizar uma interface HTML, como os smartphones.</p>
                <p class="Texto">Além de ser imprescindível para determinadas finalidades, a adoção do modelo cliente/servidor permite que um aplicativo otimize diversos aspectos de desenvolvimento e manutenção, já que cada parte pode ser projetada para sua função específica. Um aplicativo que exibe mapas e rotas, por exemplo, não precisa ter todos os mapas armazenados localmente. São necessários apenas os mapas relativos à localização que interessa ao usuário e, portanto, somente esses mapas são solicitados ao servidor central.</p>
                <p class="Texto">Os desenvolvedores têm controle direto sobre o servidor; assim, eles também podem modificar o cliente fornecido por ele. Isso permite que os desenvolvedores aprimorem o aplicativo, em maior ou menor grau, sem que o usuário precise formalmente instalar novas versões</p>
                <p class="Subtopico"><strong>O lado do cliente</strong></p>
                <p class="Texto">Um aplicativo web deve ser executado da mesma maneira em todos os navegadores mais populares, desde que o navegador esteja atualizado. Alguns navegadores podem ser incompatíveis com as inovações recentes, mas apenas os aplicativos experimentais usam recursos ainda não amplamente adotados.</p>
                <p class="Texto">Os problemas de incompatibilidade eram mais comuns no passado, quando cada navegador tinha seu próprio <em>motor de renderização</em> e havia menos cooperação na formulação e adoção de padrões. O motor (ou mecanismo) de renderização é o principal componente do navegador, pois é responsável por transformar o HTML e outros componentes associados nos elementos visuais e interativos da interface. Alguns navegadores, sobretudo o <span class="code-color"><strong>Internet Explorer</strong></span>, necessitavam de um tratamento especial no código para não quebrar o funcionamento esperado das páginas.</p>
                <p class="Texto">Hoje, as diferenças entre os navegadores principais são mínimas e as incompatibilidades, raras. Na verdade, os navegadores <span class="code-color"><strong>Chrome</strong></span> e <span class="code-color"><strong>Edge</strong></span> usam o mesmo mecanismo de renderização (chamado <span class="code-color"><em>Blink</em></span>). O navegador <span class="code-color"><strong>Safari</strong></span> e outros oferecidos na iOS App Store usam o mecanismo <span class="code-color"><em>WebKit</em></span>. O <span class="code-color"><strong>Firefox</strong></span> usa um mecanismo chamado <span class="code-color"><em>Gecko</em></span>. Esses três mecanismos são responsáveis por praticamente todos os navegadores usados hoje. Embora desenvolvidos separadamente, os três motores são projetos de código aberto e há cooperação entre seus desenvolvedores, o que facilita a compatibilidade, a manutenção e a adoção de padrões.</p>
                <p class="Texto">Como os desenvolvedores de navegadores se esforçaram muito para preservar a compatibilidade, o servidor normalmente não está vinculado a um único tipo de cliente. Em princípio, um servidor HTTP pode se comunicar com qualquer cliente que também seja capaz de se comunicar via HTTP. Em um aplicativo de mapa, por exemplo, o cliente pode ser um aplicativo móvel ou um navegador que carrega a interface HTML do servidor.</p>
                <br>
                <p class="Subtopico"><strong>Variedades de clientes web</strong></p>
                <p class="Texto">Existem aplicativos móveis e de desktop cuja interface é renderizada a partir de HTML e, como os navegadores, podem usar JavaScript como linguagem de programação. Porém, ao contrário do cliente carregado no navegador, o HTML e os componentes necessários para o funcionamento de um cliente nativo estão presentes localmente desde a instalação do aplicativo. Na verdade, um aplicativo que funciona dessa maneira é praticamente idêntico a uma página HTML (é provável que ambos sejam renderizados pelo mesmo mecanismo). Existem também os <span class="code-color"><em>aplicativos web progressivos (Progressive Web Apps ou PWA)</em></span>, um mecanismo que permite empacotar clientes de aplicativos web para uso offline — limitado a funções que não requerem comunicação imediata com o servidor. Em relação às capabilidades do aplicativo, não há diferença entre rodá-lo no navegador ou empacotado em um PWA; porém, neste último, o desenvolvedor tem mais controle sobre o que é armazenado localmente.</p>
                <p class="Texto">Renderizar interfaces HTML é uma atividade tão recorrente que o mecanismo é geralmente um componente de software separado, presente no sistema operacional. Sua presença independente permite que diferentes aplicativos o incorporem sem precisar incluí-lo no pacote do aplicativo. Esse modelo também delega a manutenção do motor de renderização ao sistema operacional, facilitando as atualizações. É muito importante manter esse componente crucial sempre atualizado para evitar possíveis falhas.</p>
                <p class="Texto">Independentemente do método de fornecimento, os aplicativos escritos em HTML são executados em uma camada de abstração criada pelo mecanismo, que funciona como um ambiente de execução isolado. Em particular, no caso de um cliente que roda no navegador, o aplicativo tem à sua disposição apenas os recursos oferecidos pelo navegador. Recursos básicos, como a interação com elementos de página e solicitação de arquivos por HTTP, estão sempre disponíveis. Os recursos que podem conter informações confidenciais, como o acesso a arquivos locais, a localização geográfica, câmera e microfone, requerem uma autorização explícita do usuário antes que o aplicativo possa usálos.</p>
                <br>
                <p class="Subtopico"><strong>As linguagens de um cliente web</strong></p>
                <p class="Texto">O elemento central de um cliente de aplicativo web executado no servidor é o documento HTML. Além de apresentar de forma estruturada os elementos da interface exibidos pelo navegador, o documento HTML contém os endereços de todos os arquivos necessários para a apresentação e funcionamento corretos do cliente.</p>
                <p class="Texto">O <span class="code-color"><strong>HTML</strong></span> sozinho não tem muita versatilidade para construir interfaces mais elaboradas, nem recursos de programação de finalidade geral. Por esse motivo, um documento HTML que deve funcionar como um aplicativo cliente vem sempre acompanhado por um ou mais conjuntos de CSS e JavaScript.</p>
                <p class="Texto">O <span class="code-color"><strong>CSS</strong></span> pode ser fornecido como um arquivo separado ou diretamente no próprio arquivo HTML. O principal objetivo do CSS é refinar a aparência e o layout dos elementos da interface HTML. Embora isso não seja estritamente necessário, as interfaces mais sofisticadas geralmente requerem modificações nas propriedades CSS dos elementos para atender às suas necessidades.</p>
                <p class="Texto">O <span class="code-color"><strong>JavaScript</strong></span> é um componente praticamente indispensável. Os procedimentos escritos em JavaScript respondem a eventos no navegador. Esses eventos podem ser causados pelo usuário ou ser nãointerativos. Sem o JavaScript, um documento HTML fica praticamente limitado a texto e imagens. O uso do JavaScript em documentos HTML permite estender a interatividade muito além de hiperlinks e formulários, transformando a página exibida pelo navegador em uma interface de aplicativo convencional.</p>
                <div class="image-content" style="padding: 20px; ">
                    <img src="../../assets/img/languages.gif" alt="Modelo cliente/servidor">
                </div>
                <p class="Texto">O <span class="code-color"><strong>JavaScript</strong></span> é uma linguagem de programação de propósito geral, mas seu principal uso é em aplicativos web. Os recursos do ambiente de execução do navegador são acessíveis por meio de palavras-chave em JavaScript, utilizadas em um script para realizar a operação desejada. O termo <span class="code-color"><em>document</em></span>, por exemplo, é usado no código JavaScript para se referir ao documento HTML associado a ele. No contexto da linguagem JavaScript, <span class="code-color"><em>document</em></span> é um <em>objeto global</em> com propriedades e métodos que podem ser usados para obter informações de qualquer elemento no documento HTML. Além disso, podemos usar o objeto <span class="code-color"><em>document</em></span> para modificar seus elementos e associá-los a ações personalizadas escritas em JavaScript. Um aplicativo cliente baseado em tecnologias web é multiplataforma, pois pode ser executado em qualquer dispositivo que possua um navegador compatível.</p>
                <p class="Texto">Porém, o fato de estarem confinados ao navegador impõe limitações aos aplicativos web em comparação com os aplicativos nativos. A intermediação realizada pelo navegador permite uma programação de alto nível e aumenta a segurança, mas também aumenta as exigências de processamento e o consumo de memória.</p>
                <p class="Texto">Os desenvolvedores estão continuamente aprimorando os navegadores para fornecer mais recursos e melhorar o desempenho dos aplicativos em JavaScript, mas existem aspectos intrínsecos à execução de scripts como o JavaScript que os deixam em desvantagem na comparação com programas nativos para o mesmo hardware.</p>
                <p class="Texto">Um recurso que melhora bastante o desempenho dos aplicativos JavaScript em execução no navegador é o <span class="color-code"><strong>WebAssembly</strong></span>. O WebAssembly é um tipo de JavaScript compilado que produz códigofonte escrito em uma linguagem mais eficiente de nível inferior, como a linguagem C. O WebAssembly pode acelerar principalmente as atividades de uso intensivo do processador, pois evita grande parte da tradução realizada pelo navegador ao executar um programa escrito em JavaScript convencional.</p>
                <div class="image-content" style="padding: 20px;";>
                    <img src="../../assets/img/assembly.png" alt="Modelo cliente/servidor">
                </div>
                <br>
                <p class="Texto">Uma página web que atua como uma interface para um aplicativo web é como um documento HTML simples, mas com comportamentos adicionais. Nas páginas convencionais, o usuário é direcionado para outra página ao clicar em um link. Os aplicativos web podem apresentar sua interface e responder aos eventos do usuário sem carregar novas páginas na janela do navegador. A modificação desse comportamento padrão das páginas HTML é feita por meio da programação em JavaScript.</p>
                <p class="Texto">Um cliente de webmail, por exemplo, exibe as mensagens e alterna entre as pastas sem sair da página. Isso é possível porque o cliente usa JavaScript para reagir às ações do usuário e fazer solicitações apropriadas ao servidor. Se o usuário clicar no assunto de uma mensagem na caixa de entrada, um código JavaScript associado a esse evento solicitará o conteúdo dessa mensagem ao servidor (usando a chamada API correspondente). Assim que o cliente recebe a resposta, o navegador exibe a mensagem na parte apropriada da mesma página. Clientes de webmail diferentes podem adotar estratégias diferentes, mas todos empregam o mesmo princípio.</p>
                <p class="Texto">Portanto, além de fornecer ao navegador os arquivos que compõem o cliente, o servidor também deve ser capaz de atender a solicitações como a do cliente de webmail quando solicita o conteúdo deuma determinada mensagem. Cada requisição que o cliente pode fazer está vinculada a um procedimento predefinido de resposta no servidor, cuja API pode definir diferentes métodos para identificar o procedimento ao qual a requisição se refere. Os métodos mais comuns são: </p>
                <ul class="Texto">
                <li><em>Endereços, através de um Uniform Resource Locator (URL)</em></li>
                <li><em>Campos no cabeçalho HTTP</em></li>
                <li><em>Métodos GET/POST</em></li>
                <li><em>WebSockets</em></li>
                </ul>
                <p class="Texto">Um método pode ser mais adequado do que outro, dependendo da finalidade da solicitação e de outros critérios levados em consideração pelo desenvolvedor. Em geral, os aplicativos web usam uma combinação de métodos, cada um em uma circunstância específica.</p>
                <p class="Texto">O paradigma <em>Representational State Transfer (REST)</em> é amplamente utilizado para a comunicação nos aplicativos web, pois se baseia nos métodos básicos disponíveis em HTTP. O cabeçalho de uma solicitação HTTP começa com uma palavra-chave que define a operação básica a ser realizada: <span class="code-color"><em>GET</em></span>, <span class="code-color"><em>POST</em></span>, <span class="code-color"><em>PUT</em></span>, <span class="code-color"><em>DELETE</em></span>, etc., acompanhada por uma <em>URL</em> correspondente na qual a ação será aplicada. Se o aplicativo requer operações mais específicas, com uma descrição mais detalhada da operação solicitada, o protocolo <em>GraphQL</em> pode ser uma escolha mais adequada.</p>
                <p class="Texto">Os aplicativos desenvolvidos no modelo cliente/servidor estão sujeitos a instabilidades de comunicação. Por isso, o aplicativo cliente deve sempre adotar estratégias eficientes de transferência de dados para favorecer sua consistência e não prejudicar a experiência do usuário.</p>
                <br>
                <p class="Subtopico" style="font-size: 26px;"><strong>O lado do servidor</strong></p>
                <p class="Texto">Apesar de ser o ator principal em um aplicativo web, o servidor é o lado passivo da comunicação, respondendo apenas às solicitações feitas pelo cliente. No jargão da web, servidor pode se referir à máquina que recebe as solicitações, ao programa que trata especificamente as solicitações HTTP ou ao script destinatário que produz uma resposta à solicitação. Esta última definição é a mais relevante no contexto da arquitetura de aplicativos web, mas todas estão intimamente relacionadas. Embora pertençam apenas parcialmente ao escopo do desenvolvedor do servidor de aplicativos, a máquina, o sistema operacional e o servidor HTTP não podem ser ignorados, pois são fundamentais para a execução do servidor de aplicativos e freqüentemente se cruzam.</p>
                <br>
                <p class="Subtopico"><strong>Controlando os caminhos de solicitações</strong></p>
                <p class="Texto">Os servidores HTTP, como o <span class="code-color"><em>Apache</em></span> e o <span class="code-color"><em>NGINX</em></span>, costumam precisar de alterações específicas de configuração para atender às necessidades do aplicativo. Por padrão, os servidores HTTP tradicionais associam diretamente o caminho indicado na solicitação a um arquivo no sistema de arquivos local.</p>
                <p class="Texto">Se o servidor HTTP de um website mantiver seus arquivos HTML no diretório <em>/srv/www</em>, por exemplo, uma solicitação com o caminho <em>/en/about.html</em> receberá o conteúdo do arquivo <span class="code-color"><em>/srv/www/en/about.html</em></span> como resposta, se o arquivo existir. Os sites mais sofisticados, e os aplicativos web em especial, exigem tratamentos personalizados para diferentes tipos de solicitações. Nesse cenário, parte da implementação do aplicativo consiste em modificar as configurações do servidor HTTP para atender aos requisitos do aplicativo.</p>
                <p class="Texto">Como alternativa, existem frameworks (estruturas) que permitem integrar o gerenciamento das solicitações HTTP e a implementação do código do aplicativo em um só lugar, permitindo que o desenvolvedor se concentre mais na finalidade do aplicativo do que nos detalhes da plataforma. No Node.js Express, por exemplo, todo o mapeamento de solicitações e a programação correspondente são implementados usando JavaScript. Como a programação dos clientes geralmente é feita em JavaScript, muitos desenvolvedores consideram uma boa ideia, do ponto de vista da manutenção do código, usar a mesma linguagem para o cliente e o servidor. Outras linguagens comumente usadas para implementar o lado do servidor, seja em frameworks ou em servidores HTTP tradicionais, são <span class="code-color"><strong>PHP</strong></span>, <span class="code-color"><strong>Python</strong></span>, <span class="code-color"><strong>Ruby</strong></span>, <span class="code-color"><strong>Java</strong></span> e <span class="code-color"><strong>C#</strong></span>.</p>
                <br>
                <p class="Subtopico"><strong>Sistemas de gerenciamento de banco de dados</strong></p>
                <p class="Texto">Fica a critério da equipe de desenvolvimento a forma como os dados recebidos ou solicitados pelo cliente são armazenados no servidor, mas existem diretrizes gerais que se aplicam à maioria dos casos. É conveniente manter o conteúdo estático — imagens, código JavaScript e CSS que não mudam no curto prazo — em arquivos convencionais, seja no próprio sistema de arquivos do servidor ou distribuídos em uma <em>rede de fornecimento de conteúdo (CDN)</em>. Outros tipos de conteúdo, como mensagens de email em um aplicativo de webmail, detalhes do produto em um aplicativo de compras e logs de transações, são armazenados de forma mais conveniente em um <em>sistema de gerenciamento de banco de dados (DBMS).</em></p>
                <p class="Texto">O tipo mais tradicional de sistema de gerenciamento de banco de dados é o <span class="code-color"><em>banco de dados relacional</em></span>. Nele, o criador do aplicativo define tabelas de dados e o formato de entrada aceito por cada tabela. O conjunto de tabelas do banco de dados contém todos os dados dinâmicos consumidos e produzidos pelo aplicativo. Um aplicativo de compras, por exemplo, pode ter uma tabela com os detalhes de cada produto da loja e uma tabela que registra os itens comprados por um usuário. A tabela de itens comprados contém referências às entradas na tabela de produtos, criando relações entre as tabelas. Essa abordagem ajuda a otimizar o armazenamento e o acesso aos dados, além de permitir consultas em tabelas combinadas utilizando a linguagem adotada pelo sistema de gerenciamento do banco de dados. A linguagem de banco de dados relacional mais popular é a <span class="code-color"><strong>Structured Query Language</strong></span> (SQL, pronuncia-se “sequel”), adotada pelos bancos de dados de código aberto <span class="code-color"><strong>SQLite</strong></span>, <span class="code-color"><strong>MySQL</strong></span>, <span class="code-color"><strong>MariaDB</strong></span> e <span class="code-color"><strong>PostgreSQL</strong></span>.</p>
                <p class="Texto">Uma alternativa aos bancos de dados relacionais é uma forma de banco de dados que não requer uma estrutura rígida para os dados. Esses bancos de dados são chamados de <em>bancos de dados não relacionais</em> ou simplesmente <em>NoSQL</em>. Embora possam incorporar alguns recursos semelhantes aos encontrados nos bancos de dados relacionais, o foco está em permitir maior flexibilidade no armazenamento e acesso aos dados armazenados, entregando a tarefa de processamento desses dados para o próprio aplicativo. <span class="code-color"><strong>MongoDB</strong></span>, <span class="code-color"><strong>CouchDB</strong></span> e <span class="code-color"><strong>Redis</strong></span> são sistemas comuns de gerenciamento de bancos de dados não-relacionais.</p>
                <br>
                <p class="Subtopico"><strong>Manutenção de código</strong></p>
                <p class="Texto">Qualquer que seja o modelo de banco de dados adotado, os aplicativos precisam adicionar dados e provavelmente atualizá-los ao longo da vida útil dos aplicativos. Em alguns aplicativos, como o webmail, os próprios usuários fornecem dados ao banco de dados ao usar o cliente para enviar e receber mensagens. Em outros casos, como em um aplicativo de compras, é importante permitir que os mantenedores do aplicativo modifiquem o banco de dados sem ter de recorrer à programação. Muitas empresas, portanto, adotam algum tipo de <em>sistema de gerenciamento de conteúdo (CMS)</em>, que permite que usuários não-técnicos administrem o aplicativo. Portanto, para a maioria dos aplicativos web, é necessário implementar pelo menos dois tipos de clientes: o cliente não-privilegiado, empregado por usuários comuns, e o cliente privilegiado, empregado por usuários especiais para manter e atualizar as informações apresentadas pelo aplicativo.</p>
            </div>
        </div>
    </div>
    <a href="topico01-3.php" class="button-prox"><img src="../../assets/img/arrow-circle-right (1).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
    <?php
    // A_S - Footer
    include('../../layouts/footer.php');
?>