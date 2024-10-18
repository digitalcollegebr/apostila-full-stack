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
                <p class="Titulo">Noções básicas de SQL</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Embora seja possível escrever suas próprias funções para implementar um armazenamento persistente, costuma ser mais conveniente usar um sistema de gerenciamento de banco de dados para acelerar o desenvolvimento e garantir melhor segurança e estabilidade aos dados formatados em tabela. A estratégia mais popular para armazenar dados organizados em tabelas interrelacionadas, especialmente quando essas tabelas são pesadamente consultadas e atualizadas, é instalar um banco de dados relacional que suporte <span class="code-color"><strong>Structured Query Language</strong></span> (SQL), uma linguagem voltada para bancos de dados relacionais. O Node.js oferece suporte a diversos sistemas de gerenciamento de banco de dados SQL. Seguindo os princípios de portabilidade e execução do espaço de usuário adotados pelo Node.js Express, o <span class="code-color"><strong>SQLite</strong></span> é uma boa escolha para o armazenamento persistente dos dados usados por este tipo de servidor HTTP.</p>
                <p class="Subtopico"><strong>SQL</strong></p>
                <p class="Texto">A <span class="code-color"><strong>Structured Query Language</strong></span> é específica aos bancos de dados. As operações de escrita e leitura são expressas em frases chamadas <span class="code-color"><em><em>declarações</em></em></span> e <span class="code-color">consultas</span>. Tanto as declarações quanto as consultas são compostas de <span class="code-color"><em>cláusulas</em></span>, que definem as condições para a execução da operação.</p>
                <p class="Texto">Nomes e endereços de email, por exemplo, podem ser armazenados em uma tabela de banco de dados contendo os campos <span class="code-color"><em>name</em></span> e <span class="code-color"><em>email</em></span>. Um banco de dados pode conter múltiplas tabelas e, portanto, cada tabela deve ter um nome exclusivo. Se usarmos o nome <span class="code-color"><em>contacts</em></span> para a tabela de nomes e emails, um novo registro poderá ser inserido com a seguinte <span class="code-color"><em>declaração</em></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>INSERT INTO</strong></span> contacts (name, email) <span class="green-code"><strong>VALUES</strong></span> (<span class="green-code">"Carol"</span>, <span class="blue-code">"carol@example.com"</span>);
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Esta declaração de inserção é composta pela cláusula <span class="code-color"><strong>INSERT INTO</strong></span>, que define a tabela e os campos onde os dados serão inseridos. A segunda cláusula, <span class="code-color"><strong>VALUES</strong></span>, define os valores a inserir. Não é necessário colocar as cláusulas em maiúsculas, mas costumamos fazer isso para ser mais fácil reconhecer as palavras-chave do SQL em uma declaração ou consulta.</p>
                <p class="Texto">Uma consulta na tabela de contatos seria feita de maneira semelhante, mas usando a cláusula <span class="code-color"><strong>SELECT</strong></span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>SELECT</strong></span> email <span class="green-code"><strong>FROM</strong></span> contacts;
dave@example.com
carol@example.com
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Neste caso, a cláusula <span class="code-color"><strong>SELECT</strong></span> <span class="code-color"><em>email</em></span> seleciona um campo dentre as entradas da tabela <span class="code-color"><em>contacts</em></span>. A
                cláusula <span class="code-color"><strong>WHERE</strong></span> restringe a consulta a linhas específicas:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>SELECT</strong></span> email <span class="green-code"><strong>FROM</strong></span> contacts <span class="green-code"><strong>WHERE</strong></span> name = <span class="blue-code">"Dave"</span>;
dave@example.com
                    </code></pre>
                </div>
                <p class="Texto">O SQL tem muitas outras cláusulas, que veremos em seções posteriores. Antes disso, é necessário
                entender como é possível integrar o banco de dados SQL com o Node.js.</p>
                <br>
                <p class="Subtopico"><strong>SQLite</strong></p>
                <p class="Texto">O SQLite é provavelmente a solução mais simples para incorporar recursos de banco de dados SQL a um aplicativo. Ao contrário de outros sistemas populares de gerenciamento de banco de dados, o SQLite não é um servidor de banco de dados ao qual um cliente se conecta. Em vez disso, o SQLite fornece um conjunto de funções que permitem ao desenvolvedor criar um banco de dados como um arquivo convencional. No caso de um servidor HTTP implementado com o Node.js Express, esse arquivo geralmente está localizado no mesmo diretório que o script do servidor.</p>
                <p class="Texto">Antes de usar o SQLite em Node.js, é necessário instalar o módulo <span class="code-color"><em>sqlite3</em></span>. Execute o seguinte comando no diretório de instalação do servidor, ou seja, o diretório que contém o script Node.js a ser executado.</p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
$ <strong>npm install sqlite3</strong>
                    </code></pre>
                </div>
                <p class="Texto">Esteja ciente de que existem diversos módulos que suportam o SQLite, como <span class="code-color"><em>better-sqlite3</em></span>, cujo uso é sutilmente diferente de <span class="code-color"><em>sqlite3</em></span>. Os exemplos nesta lição valem para o módulo sqlite3 e podem não funcionar como esperado caso você escolha outro módulo</p>
                <p class="Subtopico"><strong>Abrindo o banco de dados</strong></p>
                <p class="Texto">Para demonstrar como um servidor Node.js Express pode trabalhar com um banco de dados SQL, vamos escrever um script que armazena e exibe as mensagens enviadas por um cliente identificado por um cookie. As mensagens são enviadas pelo cliente através do método HTTP POST e a resposta do servidor pode ser formatada em JSON ou HTML (a partir de um template), dependendo do formato solicitado pelo cliente. Esta lição não entrará em detalhes sobre o uso de métodos HTTP, cookies e modelos. Os trechos de código mostrados presumem que você já tenha um servidor Node.js Express em que esses recursos estão configurados e disponíveis.</p>
                <p class="Texto">A forma mais simples de armazenar as mensagens enviadas pelo cliente é colocá-las em uma matriz global, onde cada mensagem enviada anteriormente é associada a uma chave de identificação única para cada cliente. Essa chave pode ser enviada ao cliente na forma de um cookie, que é apresentado ao servidor em solicitações futuras para recuperar as mensagens anteriores.</p>
                <p class="Texto">Todavia, essa abordagem tem um ponto fraco: como as mensagens são armazenadas apenas em uma matriz global, todas serão perdidas quando a sessão atual do servidor for encerrada. Essa é uma das vantagens de se trabalhar com bancos de dados, pois os dados são armazenados de forma persistente e não são perdidos se o servidor for reiniciado.</p>
                <p class="Texto">Usando o arquivo <span class="code-color"><em>index.js</em></span> como script do servidor principal, podemos incorporar o módulo <span class="code-color"><em>sqlite3</em></span> e indicar o arquivo que serve de banco de dados, da seguinte forma:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> sqlite3 = require(<span class="orange-code">'sqlite3'</span>)
<span class="green-code"><strong>const</strong></span> db = <span class="green-code"><strong>new</strong></span> sqlite3.Database(<span class="orange-code">'messages.sqlite3'</span>);
                    </code></pre>
                </div>
                <p class="Texto">Se ele ainda não existir, o arquivo <span class="code-color"><em>messages.sqlite3</em></span> será criado no mesmo diretório do arquivo <span class="code-color"><em>index.js</em></span>. Dentro deste único arquivo, serão armazenadas todas as estruturas e dados respectivos. Todas as operações de banco de dados realizadas no script serão intermediadas pela constante <span class="code-color">db</span>, que é o nome dado ao novo objeto <span class="code-color"><em>sqlite3</em></span> que abre o arquivo <span class="code-color"><em>messages.sqlite3</em></span>.</p>
                <p class="Subtopico"><strong>Estrutura de uma tabela</strong></p>
                <p class="Texto">Nenhum dado pode ser inserido no banco de dados até que pelo menos uma tabela seja criada. As
                tabelas são criadas com a declaração <span class="code-color">CREATE TABLE</span>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
db.run(<span class="orange-code">'CREATE TABLE IF NOT EXISTS messages (id INTEGER PRIMARY KEY AUTOINCREMENT, uuid CHAR(36), message TEXT)'</span>)
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O método <span class="code-color"><em>db.run()</em></span> é usado para executar declarações SQL no banco de dados. A declaração em si é escrita como um parâmetro para o método. Embora as declarações SQL devam terminar com um ponto e vírgula quando inseridas em um processador de linha de comando, o ponto e vírgula é opcional nas declarações passadas como parâmetros em um programa.</p>
                <p class="Texto">Como o método <span class="code-color"><em>run</em></span> será executado toda vez que o script for executado com <span class="code-color"><em>node index.js</em></span>, a declaração SQL inclui a cláusula condicional <span class="code-color"><strong>IF NOT EXISTS</strong></span> para evitar erros em execuções futuras quando a tabela <span class="code-color"><em>messages</em></span> já existir.</p>
                <p class="Texto">Os campos que compõem a tabela <span class="code-color"><em>messages</em></span> são <span class="code-color"><em>id</em></span>, <span class="code-color"><em>uuid</em></span> e <span class="code-color"><em>message</em></span>. O campo id é um número inteiro único usado para identificar cada entrada na tabela, por isso é criado como <span class="code-color"><strong>PRIMARY KEY</strong></span>, ou chave primária. As chaves primárias não podem ser nulas e não pode haver duas chaves primárias idênticas na mesma tabela. Assim, quase toda tabela SQL possui uma chave primária para rastrear o conteúdo da tabela. Embora seja possível escolher explicitamente o valor da chave primária de um novo registro (desde que ela ainda não exista na tabela), é conveniente que a chave seja gerada automaticamente. O sinalizador <span class="code-color"><strong>AUTOINCREMENT</strong></span> no campo id é usado para esse fim.</p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i>
                        NOTE
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">A configuração explícita de chaves primárias no SQLite é opcional, porque o próprio SQLite cria uma chave primária automaticamente. Conforme declarado na documentação do SQLite: “No SQLite, as linhas da tabela normalmente incluem um ROWID, um número inteiro assinado de 64 bits que é único entre todas as linhas da mesma tabela. Se uma tabela contém uma coluna do tipo INTEGER PRIMARY KEY, essa coluna se torna um alias para o ROWID. Podemos acessar o ROWID usando um dentre quatro nomes: os três nomes originais descritos acima ou o nome dado à coluna INTEGER PRIMARY KEY. Todos esses nomes são aliases uns para os outros e funcionam igualmente bem em qualquer contexto.”</p>
                    </div>
                </div>
                <br>
                <p class="Texto">Os campos uuid e message armazenam, respectivamente, a identificação do cliente e o conteúdo da mensagem. Um campo do tipo <span class="code-color"><strong>CHAR(36)</strong></span> armazena uma quantidade fixa de 36 caracteres e um campo do tipo <span class="code-color"><strong>TEXT</strong></span> armazena textos de comprimento arbitrário.</p>
                <p class="Subtopico"><strong>Inserção de dados</strong></p>
                <p class="Texto">A principal função do nosso servidor de exemplo é armazenar mensagens vinculadas ao cliente que as enviou. O cliente envia a mensagem no campo message no corpo da solicitação enviada com o método HTTP POST. A identificação do cliente está em um cookie chamado <span class="code-color"><em>uuid</em></span>. Munidos dessas informações, podemos escrever a rota para o Express inserir novas mensagens no banco de dados: </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
  app.post(<span class="orange-code">'/'</span>, (req, res) => {
  <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;
  <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) 
    uuid = uuidv4();
  <span class="C_inicializeted">// Insira uma nova mensagem no banco de dados</span>
  db.run(<span class="orange-code">'INSERT INTO messages (uuid, message) VALUES (?, ?)'</span>, uuid, req.body.message);
  <span class="C_inicializeted">// Se ocorrer um erro, o objeto err contém a mensagem de erro.</span>
  db.all(<span class="orange-code">'SELECT id, message FROM messages WHERE uuid = ?'</span>, uuid, (err, rows) => {
    <span class="green-code"><strong>let</strong></span> expires = <span class="green-code"><strong>new</strong></span> <span class="dark_blue_code">Date</span>(<span class="dark_blue_code">Date</span>.now());
    expires.setDate(expires.getDate() + <span class="dark_blue_code">30</span>);
    res.cookie(<span class="orange-code">'uuid'</span>, uuid, { <span class="dark_blue_code">expires</span>: expires });
    <span class="green-code">if</span> (req.headers.accept == <span class="orange-code">"application/json"</span>) 
      res.json(rows);
    <span class="green-code"><strong>else</strong></span> 
      res.render(<span class="orange-code">'index'</span>, { title: <span class="orange-code">"Minhas mensagens"</span>, messages: rows });
  });
});
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Desta vez, o método <span class="code-color"><em>db.run()</em></span> executa uma declaração de inserção, mas note que <span class="code-color"><em>uuid</em></span> e <span class="code-color"><em>req.body</em></span>.message não são escritos diretamente na linha da declaração. Em vez disso, os valores foram substituídos por pontos de interrogação. Cada ponto de interrogação corresponde a um parâmetro que segue a declaração SQL no método <span class="code-color"><em>db.run()</em></span>.</p>
                <p class="Texto">O uso de pontos de interrogação como espaços reservados na declaração que é executada no banco de dados permite ao SQLite distinguir mais facilmente entre os elementos estáticos da declaração e seus dados variáveis. Esta estratégia permite que o SQLite <em>escape</em> ou sanitize o conteúdo da variável que faz parte da declaração, evitando uma falha de segurança comum chamada <em>injeção de SQL</em>. Nesse ataque, usuários mal-intencionados inserem declarações SQL nos dados variáveis, na esperança de que essas declarações sejam executadas inadvertidamente; a sanitização impede o ataque, desativando caracteres perigosos nos dados.</p>
                <p class="Subtopico"><strong>Consultas</strong></p>
                <p class="Texto">Como mostrado no código de exemplo, nossa intenção é usar a mesma rota para inserir novas mensagens no banco de dados e gerar a lista de mensagens enviadas anteriormente. O método <span class="code-color"><em>db.all()</em></span> retorna a coleção de todas as entradas na tabela que correspondem aos critérios definidos na consulta.</p>
                <p class="Texto">Ao contrário das declarações executadas por <span class="code-color">db.run()</span>, <span class="code-color"><em>db.all()</em></span> gera uma lista de registros que são tratados pela função de seta designada no último parâmetro:</p>
                <br>
            <div class="typewriter-small" id="copycode" style="text-align: center;">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
(err, rows) => {}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Esta função, por sua vez, leva dois parâmetros: <span class="code-color"><em>err</em></span> e <span class="code-color"><em>rows</em></span>. O parâmetro <span class="code-color"><em>err</em></span> será usado se ocorrer um erro que impeça a execução da consulta. Se ela for bem-sucedida, todos os registros ficam disponíveis na matriz rows, onde cada elemento é um objeto correspondente a um único registro da tabela. As propriedades deste objeto correspondem aos nomes dos campos indicados na consulta: <span></span> e message.</p>
                <p class="Texto">Esta função, por sua vez, leva dois parâmetros: <span class="code-color"><em>err</em></span> e <span class="code-color"><em>rows</em></span>. O parâmetro <span class="code-color"><em>err</em></span> será usado se ocorrer um erro que impeça a execução da consulta. Se ela for bem-sucedida, todos os registros ficam disponíveis na matriz rows, onde cada elemento é um objeto correspondente a um único registro da tabela. As propriedades deste objeto correspondem aos nomes dos campos indicados na consulta: <span class="code-color"><em></em></span> e <span class="code-color"><em>message</em></span>.</p>
                <p class="Texto">A matriz <span class="code-color"><em>rows</em></span> é uma estrutura de dados JavaScript. Como tal, pode ser usada para gerar respostas com métodos fornecidos pelo Express, como <span class="code-color"><em>res.json()</em></span> e <span class="code-color"><em>res.render()</em></span>. Quando renderizado dentro de um modelo EJS, um loop convencional pode listar todos os registros:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
&lt;ul&gt;
<% rows.forEach( (row) => { %>
&lt;li&gt;&lt;strong&gt;<%= row.id %><&lt;<span class="green-code">/strong&gt;: <%= row.message %>&lt;/</span> li&gt;
<% }) %>
&lt;/ul&gt;
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Em vez de preencher a matriz <span class="code-color">rows</span> com todos os registros retornados pela consulta, em alguns casos pode ser mais conveniente tratar cada registro individualmente com o método <span class="code-color"><em>db.each()</em></span>. A sintaxe do método <span class="code-color"><em>db.each()</em></span> é semelhante à do método <span class="code-color"><em>db.all()</em></span>, mas o parâmetro <span class="code-color"><em>row</em></span> em <span class="code-color"><em>(err, row)</em></span> ⇒ {} corresponde a um único registro por vez.</p>
                <br>
                <p class="Subtopico"><strong>Alterando o conteúdo do banco de dados</strong></p>
                <p class="Texto">Até agora, nosso cliente só pode adicionar e consultar mensagens no servidor. Como o cliente agora conhece o <span class="code-color"><em>id</em></span> das mensagens enviadas anteriormente, podemos implementar uma função para modificar um registro específico. A mensagem modificada também pode ser enviada para uma rota configurada com o método HTTP POST, mas desta vez com um parâmetro de rota para capturar o <span class="code-color"><em>id</em></span> fornecido pelo cliente no caminho da solicitação:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
app.post(<span class="orange-code">'/:id'</span>, (req, res) => {
  <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;
  <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
    uuid = uuidv4();
    <span class="C_inicializeted">// 401 Unauthorized</span>
    res.sendStatus(<span class="dark_blue_code"><strong>401</strong></span>);
  } else {
    <span class="C_inicializeted">// Atualizar a mensagem armazenada</span>
    <span class="C_inicializeted">// usando parâmetros nomeados</span>
    <span class="green-code"><strong>let</strong></span> param = {
      <span class="orange-code">$message</span>: req.body.message,
      <span class="orange-code">$id</span>: req.params.id,
      <span class="orange-code">$uuid</span>: uuid
    };
    db.run(<span class="orange-code">'UPDATE messages SET message = $message WHERE id = $id AND uuid = $uuid'</span>, param, function(err) {
      <span class="green-code"><strong>if</strong></span> (this.changes > 0) {
        <span class="C_inicializeted">// O status 204 (No Content) significa que a ação foi</span>
        <span class="C_inicializeted">// realizada e nenhuma informação adicional deve ser fornecida.</span>
        res.sendStatus(<span class="dark_blue_code"><strong>204</strong></span>);
      } else {
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
      }
    });
  }
});
                    </code></pre>
                </div>
                <p class="Texto">Esta rota demonstra como usar as cláusulas <span class="code-color"><strong>UPDATE</strong></span> e <span class="code-color"><strong>WHERE</strong></span> para modificar um registro existente. Uma diferença importante em relação aos exemplos anteriores é o uso de parâmetros <em>nomeados</em>, nos quais os valores são agrupados em um único objeto (<span class="code-color"><em>param</em></span>) e passados para o método <span class="code-color"><em>db.run()</em></span> ao invés de especificar cada valor por si mesmo. Neste caso, os nomes dos campos (precedidos por $) são as propriedades do objeto. Os parâmetros nomeados permitem o uso de nomes de campo
                (precedidos por $) como espaços reservados ao invés de pontos de interrogação.</p>
                <p class="Texto">Uma declaração como a do exemplo não causará nenhuma modificação no banco de dados se a condição imposta pela cláusula <span class="code-color"><strong>WHERE</strong></span> não encontrar uma correspondência entre os registros da tabela. Para avaliar se algum registro foi modificado pela declaração, uma função de retorno de chamada pode ser usada como o último parâmetro do método <span class="code-color"><em>db.run()</em></span>. Dentro da função, o número de registros alterados pode ser consultado em <span class="code-color"><em>this.changes</em></span>. Note que as funções de seta não podem ser usadas neste caso, porque apenas as funções regulares na forma <span class="code-color"><em>function(){}</em></span> definem o objeto <span class="code-color"><em>this</em></span>.</p>
                <p class="Texto">A remoção de um registro é muito semelhante à sua modificação. Podemos, por exemplo, continuar usando o parâmetro de rota <span class="code-color"><em>:id</em></span> para identificar a mensagem a ser excluída, mas desta vez em uma rota invocada pelo método <span class="code-color"><strong>HTTP DELETE</strong></span> do cliente:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
app.delete(<span class="orange-code">'/:id'</span>, (req, res) => {
  <span class="green-code"><strong>let</strong></span> uuid = req.cookies.uuid;
  <span class="green-code"><strong>if</strong></span> (uuid === <span class="green-code"><strong>undefined</strong></span>) {
    uuid = uuidv4();
    res.sendStatus(<span class="dark_blue_code"><strong>401</strong></span>);
  } else {
    <span class="C_inicializeted">// Parâmetros nomeados</span>
    <span class="green-code"><strong>let</strong></span> param = {
      <span class="orange-code">$id</span>: req.params.id,
      <span class="orange-code">$uuid</span>: uuid
    };
    db.run(<span class="orange-code">'DELETE FROM messages WHERE id = $id AND uuid = $uuid'</span>, param, function(err) {
      <span class="green-code"><strong>if</strong></span> (this.changes > 0) 
        res.sendStatus(<span class="dark_blue_code"><strong>204</strong></span>);
      <span class="green-code"><strong>else</strong></span> 
        res.sendStatus(<span class="dark_blue_code"><strong>404</strong></span>);
    });
  }
});
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Os registros são excluídos de uma tabela com a cláusula <span class="code-color"><strong>DELETE FROM</strong></span>. Mais uma vez, usamos a função de retorno de chamada para avaliar quantas entradas foram removidas da tabela.</p>
                <p class="Subtopico"><strong>Fechando o banco de dados</strong></p>
                <p class="Texto">Uma vez definido, o objeto <span class="code-color"><em>db</em></span> pode ser referenciado a qualquer momento durante a execução do script, pois o arquivo de banco de dados permanece aberto durante a sessão atual. Não é comum fechar o banco de dados durante a execução do script.</p>
                <p class="Texto">No entanto, vale a pena instaurar uma função para fechar o banco de dados, de forma a evitar o seu fechamento abrupto quando o processo do servidor é concluído. Embora improvável, o encerramento abrupto do banco de dados pode resultar em inconsistências caso os dados da memória ainda não estejam registrados no arquivo. Por exemplo, pode ocorrer perda de dados com um desligamento abrupto do banco de dados se o script for encerrado pelo usuário pressionando o atalho de teclado Ctrl + C.</p>
                <p class="Texto">Nesse caso do Ctrl + , o método <span class="code-color">process.on()</span> pode interceptar os sinais enviados pelo sistema operacional e executar um desligamento ordenado do banco de dados e do servidor:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
process.on(<span class="orange-code">'SIGINT'</span>, () => {
  db.close()
  server.close()
  console.log(<span class="orange-code">'HTTP server closed'</span>)
})
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O atalho Ctrl + C invoca o sinal do sistema operacional <span class="code-color"><em>SIGINT</em></span>, que encerra um programa em primeiro plano no terminal. Antes de encerrar o processo ao receber o sinal <span class="code-color"><em>SIGINT</em></span>, o sistema invoca a função de retorno de chamada (o último parâmetro no método <span class="code-color">process.on()</span>). Dentro da função de retorno de chamada, podemos colocar qualquer código de limpeza, em particular o método <span class="code-color"><em>db.close()</em></span>, para fechar o banco de dados, e <span class="code-color"><em>server.close()</em></span>, que fecha graciosamente a própria instância do Express.</p>
            </div>
        </div>
    </div>

    <?php include('../layouts/footerQ.php') ?>