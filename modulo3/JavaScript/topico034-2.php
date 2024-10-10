<?php
    include('../../layouts/header.php')
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

                <p class="Titulo">Introdução</p>
                <p class="Texto">
                    As linguagens de programação, como as linguagens naturais, representam a realidade por meio de
                    símbolos que são combinados em declarações imbuídas de significado. A realidade representada por
                    uma linguagem de programação são os recursos da máquina, como as operações do processador, os
                    dispositivos e a memória.
                </p>
                <p class="Texto">
                    Cada uma das muitas linguagens de programação adota um paradigma para representar as
                    informações. O JavaScript utiliza as convenções típicas das linguagens de alto nível, nas quais a
                    maioria dos detalhes, como a alocação de memória, está implícita, permitindo que o programador se
                    concentre na finalidade do script no contexto do aplicativo.
                </p>

                <p class="Titulo">Linguagens de alto nível</p>
                <p class="Texto">
                    Linguagens de alto nível fornecem regras abstratas que permitem ao programador escrever menos
                    código para expressar uma ideia. O JavaScript oferece maneiras convenientes para aproveitar a
                    memória do computador, com conceitos de programação que simplificam a escrita de práticas
                    recorrentes e que geralmente bastam para as finalidades de um desenvolvedor web.
                </p>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                          <p class="Texto">
                            Embora seja possível empregar mecanismos especializados para um acesso
                            meticuloso à memória, os tipos mais simples de dados que veremos são de uso mais
                            geral.
                        </p>
                        </div>
                </div>
                        <br>
                        <p class="Texto">
                            As operações típicas de um aplicativo web consistem em solicitar dados por meio de alguma
                            instrução JavaScript e armazená-los para que sejam processados e, em seguida, apresentados ao
                            usuário. Esse armazenamento é bastante flexível em JavaScript, com formatos adequados a cada
                            finalidade.
                        </p>
                        <p class="Titulo">Declaração de constantes e variáveis</p>
                        <p class="Texto">
                            A declaração de constantes e variáveis para armazenar dados é a pedra angular de qualquer
                            linguagem de programação. O JavaScript adota a convenção da maioria das linguagens de
                            programação, atribuindo valores a constantes ou variáveis com a sintaxe <span class="code-color"><strong>name = value</strong></span>. A constante
                            ou variável à esquerda assume o valor mostrado à direita. O nome da constante ou variável deve
                            começar com uma letra ou sublinhado (underscore)
                        </p>
                        <p class="Texto">
                            O tipo de dados armazenados na variável não precisa ser indicado, pois o JavaScript é uma
                            linguagem de tipagem dinâmica. O tipo da variável é inferido a partir do valor atribuído a ela. Porém,
                            é aconselhável designar certos atributos na declaração para garantir o resultado esperado.
                        </p>
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="Caixa TituloExemplo">
                                <i class="fa-regular fa-pen-to-square"></i> 
                                    NOTE
                            </div>
                            <div class="CaixaConteudo ConteudoExemplo">
                                <p class="Texto">
                                O TypeScript é uma linguagem inspirada no JavaScript que, como as linguagens de
                                baixo nível, permite declarar variáveis para tipos específicos de dados.
                                </p>
                            </div>
                        </div>
                        <br>
                        <p class="Titulo">Constantes</p>
                        <p class="Texto">
                            Uma constante é um símbolo atribuído uma única vez, quando o programa é iniciado, mantendo-se
                            sempre igual. As constantes são úteis para especificar valores fixos, por exemplo a constante PI
                            como 3,14159265 ou <span class="code-color"><strong>COMPANY_NAME</strong></span> como o nome de sua empresa.
                        </p>
                        <p class="Texto">
                            Assim, por exemplo, em um aplicativo web poderíamos ter um cliente que recebe informações
                            meteorológicas de um servidor remoto. O programador pode decidir que o endereço do servidor deve
                            ser constante, pois ele não mudará durante a execução da aplicação. As informações de temperatura,
                            no entanto, podem ser diferentes a cada chegada de novos dados do servidor.
                        </p>
                        <p class="Texto">
                            O intervalo entre as consultas feitas ao servidor também pode ser definido como uma constante, que
                            pode ser consultada de qualquer parte do programa:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong>const</strong></span> update_interval = <span class="blue-code">10</span>;
<span class="green-code"><strong>function</strong></span> setup_app( ){
    console.log( <span class="orange-code">"Update every"</span> + update_interval + <span class="orange-code">"minutes"</span>);
}
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Quando invocada, a função setup_app() exibe a mensagem Update every 10 minutes no console. O
                            termo const, colocado antes do nome update_interval, garante que seu valor permanecerá o mesmo
                            durante toda a execução do script. Se for feita uma tentativa de redefinir o valor de uma constante, é
                            emitido um erro <span class="code-color">TypeError: Assignment to constant variable</span>.
                        </p>
                        <p class="Titulo">Variáveis</p>
                        <p class="Texto">
                            Sem o termo const, o JavaScript pressupõe automaticamente que update_interval é uma variável e
                            que seu valor pode ser modificado. Isso equivale a declarar a variável explicitamente com var:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong>var</strong></span> update_interval;
update_iterval = <span class="blue-code">10</span>;

<span class="green-code"><strong>function</strong></span> setup_app( ){
    console.log( <span class="orange-code">"Update every"</span> + update_interval + <span class="orange-code">"minutes"</span> );
}
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Observe que, embora a variável <span class="code-color">update_interval</span> tenha sido definida fora da função, ela foi acessada
                            de dentro da função. Qualquer constante ou variável declarada fora de funções ou blocos de código
                            definidos por chaves ( <span class="code-color">{}</span> ) tem escopo global; ou seja, pode ser acessada de qualquer parte do código. O
                            oposto não é verdadeiro: uma constante ou variável declarada dentro de uma função tem escopo local,
                            sendo acessível apenas de dentro da própria função. Os blocos de código delimitados por chaves,
                            como aqueles colocados em estruturas de decisão <span class="code-color">if</span> ou loops <span class="code-color">for</span>, delimitam o escopo das
                            constantes, mas não das variáveis declaradas como <span class="code-color">var</span>. O código a seguir, por exemplo, é válido:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong>var</strong></span> success = <span class="green-code"><strong>true</strong></span>;
<span class="green-code"><strong>if</strong></span> (success == <span class="green-code">true</span> )
{
    <span class="green-code">var</span> message = <span class="orange-code">"Trainsaction succeeded"</span>;
    <span class="green-code">var</span> retry = <span class="blue-code">0</span>;
}
else
{
    <span class="green-code">var</span> message = <span class="orange-code">"Transaction failed"</span>;
    <span class="green-code">var</span> retry = <span class="blue-code">1</span>;
}

console.log(message);
                            </code></pre>
                        </div>
                        <p class="Texto">
                            A declaração <span class="code-color"> console.log(message)</span> é capaz de acessar a variável <span class="code-color">message</span>, mesmo que ela tenha sido
                            declarada dentro do bloco de código da estrutura <span class="code-color">if</span>. O mesmo não aconteceria se <span class="code-color">message</span> fosse uma
                            constante, conforme exemplificado a seguir:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong>var</strong></span> success = <span class="green-code"><strong>true</strong></span>;
<span class="green-code"><strong>if</strong></span> (success == <span class="green-code">true</span> )
{
    <span class="green-code">const</span> message = <span class="orange-code">"Trainsaction succeeded"</span>;
    <span class="green-code">var</span> retry = <span class="blue-code">0</span>;
}
else
{
    <span class="green-code">const</span> message = <span class="orange-code">"Transaction failed"</span>;
    <span class="green-code">var</span> retry = <span class="blue-code">1</span>;
}

console.log(message);
                            </code></pre>
                        </div>
                <p class="Texto">
                            Nesse caso, apareceria uma mensagem de erro do tipo <span class="code-color">ReferenceError: message is not defined</span> e
                            o script seria interrompido. Embora isso pareça uma limitação, restringir o escopo de variáveis e
                            constantes ajuda a evitar confusão entre as informações processadas no corpo do script e em seus
                            diferentes blocos de código. Por esse motivo, as variáveis declaradas com let em vez de var também
                            têm escopo restrito aos blocos delimitados por chaves. Há outras diferenças sutis entre as variáveis
                            declaradas com var ou let, mas a mais significativa diz respeito ao escopo da variável, como
                            mostrado aqui.
                </p>
                <p class="Subtopico"><strong>Tipos de valores</strong></p>
                <p class="Texto">
                    Na maioria das vezes, o programador não precisa se preocupar com o tipo de dados armazenados em
                    uma variável, pois o JavaScript os identifica automaticamente com um de seus tipos primitivos
                    durante a primeira atribuição de um valor à variável. Algumas operações, no entanto, podem ser
                    específicas para um certo tipo de dados e podem resultar em erros quando usadas sem critério. Além
                    disso, o JavaScript oferece tipos estruturados, que permitem combinar mais de um tipo primitivo em
                    um único objeto.
                </p>
                <p class="Texto"><strong>Valores primitivos</strong></p>
                <p class="Texto">
                    Os tipos primitivos correspondem às variáveis tradicionais, que armazenam apenas um valor. Os
                    tipos são definidos implicitamente, de modo que o operador typeof pode ser usado para identificar o
                    tipo de valor que é armazenado em uma variável:
                </p>
                <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
console.log(<span class="orange-code"> "Undefined variables are of type"</span>, <span class="green-code"><strong>typeof</strong></span> variable);
{
  <span class="green-code"><strong>let</strong></span>  variable = <span class="green-code"><strong>true</strong></span> ;
  console.log("Value `true` is of type " + typeof variable);
}
{
  let variable = <span class="blue-code"><strong>3.14159265</strong></span>;
  console.log(<span class="orange-code"> "Value `3.14159265` is of type "</span> + <span class="green-code"><strong>typeof</strong></span> variable);
}
{
  let variable = <span class="orange-code"> "Text content"</span>;
  console.log(<span class="orange-code">"Value `Text content` is of type "</span> + <span class="green-code"><strong>typeof</strong></span> variable);
}
{
  let variable = <span class="blue-code">Symbol()</span>;
  console.log(<span class="orange-code"> "A symbol is of type "</span> + <span class="green-code"><strong>typeof</strong></span> variable);
}
                            </code></pre>
                        </div>
                        <p class="Texto">Este script exibirá no console o tipo de variável usada em cada caso:</p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
undefined variables are of type undefined
Value `true` is of type boolean
Value `3.114159265` is of type number
Value `Text content` is of type string
A symbol is of type symbol
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Note que a primeira linha tenta encontrar o tipo de uma variável não declarada. Isso faz com que a
                            variável dada seja identificada como undefined. O tipo symbol é o primitivo menos intuitivo. Sua
                            finalidade é fornecer um nome de atributo único dentro de um objeto quando não existir a
                            necessidade de definir um nome de atributo específico. Um objeto é uma das estruturas de dados que
                            veremos a seguir
                        </p>
                        <p class="Subtopico"><strong>Tipos estruturados</strong></p>
                        <p class="Texto">
                            Embora os tipos primitivos bastem para escrever rotinas simples, seu uso exclusivo nem sempre é
                            indicado em aplicativos mais complexos. Um aplicativo de comércio eletrônico, por exemplo, seria
                            muito mais difícil de escrever, porque o programador precisaria encontrar maneiras de armazenar
                            listas de itens e seus valores correspondentes usando apenas variáveis com tipos primitivos.
                        </p>
                        <p class="Texto">
                            Os tipos estruturados simplificam a tarefa de agrupar informações da mesma natureza em uma única
                            variável. Uma lista de itens em um carrinho de compras, por exemplo, pode ser armazenada em uma
                            única variável do tipo <i>matriz</i> (array)
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong></strong>let</span> cart = [<span class="orange-code">'Milk'</span> , <span class="orange-code">'Bread'</span>, <span class="orange-code">'Eggs'</span>];

                            </code></pre>
                        </div>
                        <p class="Texto">
                            Conforme demonstrado no exemplo, uma matriz de itens é designada entre colchetes. O exemplo
                            preencheu a matriz com três valores de string literais, por isso o uso de aspas simples. As variáveis
                            também podem ser usadas como itens em uma matriz, mas nesse caso devem ser designadas sem
                            aspas. O número de itens em uma matriz pode ser consultado com a propriedade <span class="code-color">length</span>:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong></strong>let</span> cart = [<span class="orange-code">'Milk'</span> , <span class="orange-code">'Bread'</span>, <span class="orange-code">'Eggs'</span>];
console.log(cart.length);
                            </code></pre>
                        </div>
                        <p class="Texto">
                        O número 3 será exibido na saída do console. Novos itens podem ser adicionados à matriz com o
                        método <span class="code-color">push()</span>:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
cart.push(<span class="orange-code">'Candy'</span>);
console.log(cart.length);
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Desta vez, a quantidade exibida será 4. Cada item da lista pode ser acessado por seu índice numérico,
                            começando com 0:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
console.log(cart[<span class="blue-code"><strong>0</strong></span>]);
console.log(cart[<span class="blue-code"><strong>3</strong></span>]);
                            </code></pre>
                        </div>
                        <p class="Texto">A saída exibida no console será:</p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
Milk
Candy
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Assim como se pode usar <span class="code-color">push()</span> para adicionar um elemento, usamos <span class="code-color">popr()</span> para remover o último
                            elemento de uma matriz.
                        </p>
                        <p class="Texto">
                            Os valores armazenados em uma matriz não precisam ser do mesmo tipo. É possível, por exemplo,
                            armazenar a quantidade de cada item ao lado dele. Uma lista de compras como a do exemplo anterior
                            pode ser construída da seguinte forma:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code">let</span> cart = [<span class="orange-code">'Milk'</span>, <span class="blue-code"><strong>1</strong></span>, <span class="orange-code">'Bread'</span>, <span class="blue-code"><strong>4</strong></span>, <span class="orange-code">'Eggs'</span>, <span class="blue-code"><strong>12</strong></span>, <span class="orange-code">'Candy'</span>, <span class="blue-code"><strong>2</strong></span>];
<span class="C_inicializeted">// Item indexes are even</span>
<span class="green-code">let</span> item = <span class="blue-code"><strong>2</strong></span>;
<span class="C_inicializeted">// Quantities indexes are odd</span> 
<span class="green-code">let</span> quantity = <span class="blue-code"><strong>3</strong></span>;
console.log(<span class="orange-code">"Item: "</span> + cart[item]);
console.log(<span class="orange-code">"Quantity: "</span> + cart[quantity]);
                            </code></pre>
                        </div>
                        <p class="Texto">A saída exibida no console após a execução deste código é:</p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
Item: Bread
Quantity: 4
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Como você já deve ter notado, combinar os nomes dos itens com suas respectivas quantidades em
                            uma única matriz pode não ser uma boa ideia, porque a relação entre eles não é explícita na estrutura
                            de dados e é muito suscetível a erros (humanos). Mesmo se usássemos uma matriz para os nomes e
                            outra para as quantidades, manter a integridade da lista exigiria o mesmo cuidado e não seria muito
                            produtivo. Nessas situações, a melhor alternativa é usar uma estrutura de dados mais apropriada: um <i>objeto</i>
                        </p>
                        <p class="Texto">
                            No JavaScript, uma estrutura de dados de tipo objeto permite vincular propriedades a uma variável.
                            Além disso, ao contrário de uma matriz, os elementos que constituem um objeto não têm uma ordem
                            fixa. Um item de lista de compras, por exemplo, pode ser um objeto com as propriedades <span class="code-color">name</span> e
                            <span class="code-color">quantity</span> (nome e quantidade):
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code">let</span> item = {<span class="blue-code">name</span> : <span class="orange-code">'Milk'</span>, <span class="blue-code">quantity</span>: <span class="blue-code"><strong>1</strong></span>};
console.log(<span class="orange-code">"Name :"</span> + item.name);
console.log(<span class="orange-code">"Quantity :"</span> + item.quantity);
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Este exemplo mostra que um objeto pode ser definido usando chaves ({}), onde cada par de
                            propriedade/valor é separado por dois pontos e as propriedades são separadas por vírgulas. A
                            propriedade está acessível no formato <i>variable.property</i>, como em <span class="code-color">item.name</span>, tanto para leitura
                            quanto para atribuição de novos valores. A saída exibida no console após a execução deste código é:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
Item: Milk
Quantity: 1
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Finalmente, cada objeto que representa um item pode ser incluído na matriz da lista de compras. Isso
                            pode ser feito diretamente ao se criar a lista:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> cart = [{  <span class="blue-code">name:</span> <span class="orange-code">'Milk'</span>,  <span class="blue-code">quantity:</span> <span class="blue-code"><strong>1</strong></span>}, {  <span class="blue-code">name:</span> <span class="orange-code">'Bread'</span>, <span class="blue-code">quantity:</span> <span class="blue-code"><strong>4</strong></span> }];
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Como anteriormente, um novo objeto que representa um item pode ser adicionado posteriormente à
                            matriz:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
cart.push({  <span class="blue-code">name:</span> <span class="orange-code">'Eggs'</span>,  <span class="blue-code">quantity:</span> <span class="blue-code"><strong>12</strong></span> });
                            </code></pre>
                        </div>
                        <p class="Texto">
                        Os itens na lista agora podem ser acessados por seu índice e seu nome de propriedade:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                            <i class="fas fa-copy"></i>
                                            Copiar
                            </button>
                            <pre><code class="Texto">
console.log(<span class="orange-code">"Third item: "</span> + cart[<span class="dark_blue_code">2</span>].name);
console.log(cart[<span class="dark_blue_code">2</span>].name + <span class="orange-code">" quantity: "</span> + cart[<span class="dark_blue_code">2</span>].quantity);
                            </code></pre>
                        </div>
                        <p class="Texto">A saída exibida no console após a execução deste código é:</p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
third item: eggs
Eggs quantity: 12
                            </code></pre>
                        </div>
                        <p class="Texto">
                            As estruturas de dados permitem que o programador mantenha o código muito mais organizado e
                            fácil de manter, seja pelo autor original ou por outros programadores da equipe. Além disso, muitas
                            saídas de funções JavaScript estão em tipos estruturados, que precisam ser manipulados
                            adequadamente pelo programador.
                        </p>
                        <p class="Subtopico"><strong>Operadores</strong></p>
                        <p class="Texto">
                            Até aqui, praticamente apenas vimos como atribuir valores a variáveis recém-criadas. Qualquer
                            programa, por mais simples que seja, realizará diversas outras manipulações nos valores das
                            variáveis. O JavaScript oferece muitos tipos de <i>operadores</i> capazes de atuar diretamente no valor de
                            uma variável ou armazenar o resultado da operação em uma nova variável.
                        </p>
                        <p class="Texto">
                            A maioria dos operadores é orientada para operações aritméticas. Para aumentar a quantidade de um
                            item na lista de compras, por exemplo, basta usar o operador de adição <span class="code-color"><em>+</em></span>:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
item.quantity = item.quantity + <span class="dark_blue_code">1</span>;
                            </code></pre>
                        </div> 
                        <p class="Texto">
                            O trecho de código a seguir imprime o valor de item.quantity antes e depois da adição. Não
                            confunda as funções do sinal de mais no trecho. As declarações console.log usam um sinal de mais
                            para combinar duas strings.
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code">let </span>item = {<span class="blue-code">name</span> : <span class="orange-code">'Milk'</span>, <span class="blue-code">quantity</span> : <span class="dark_blue_code">1</span> };
console.log(<span class="orange-code">"Item: "</span> + item.name);
console.log(<span class="orange-code">"Quantity: "</span> + item.quantity);
item.quantity = item.quantity + <span class="blue-code">1</span>;
console.log(<span class="orange-code">"New quantity: "</span> + item.quantity);
                            </code></pre>
                        </div>
                        <p class="Texto">A saída exibida no console após a execução deste código é:</p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">         
Item: Milk
Quantity: 1
New quantity: 2
                            </code></pre>
                        </div>
                        <p class="Texto">
                            Observe que o valor anteriormente armazenado em <span class="code-color">item.quantity</span> é usado como operando da operação de adição: <span class="code-color">item.quantity</span> = <span class="code-color">item.quantity + 1</span>. Somente após a conclusão da operação, o
                            valor em <span class="code-color">item.quantity</span> é atualizado com o resultado. Esse tipo de operação aritmética envolvendo o
                            valor atual da variável de destino é bastante comum, e assim existem operadores abreviados que
                            permitem escrever a mesma operação em um formato reduzido:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
item.quantity += <span class="code-color">1</span>;
                            </code></pre>
                        </div>
                        <p class="Texto">As outras operações básicas também têm operadores abreviados equivalentes:</p>
                        <ul>
                            <li><p class="Texto"> a = a - b equivale a a -= b</p></li>
                            <li><p class="Texto"> a = a * b equivale a a *= b.</p></li>
                            <li><p class="Texto"> a = a / b equivale a a /= b.</p></li>
                        </ul>
                        <p class="Texto">
                            Para adição e subtração, existe um terceiro formato disponível quando o segundo operando é apenasuma unidade:
                        </p>
                        <ul>
                            <li><p class="Texto"> a = a + 1 equivale a a++.</p></li>
                            <li><p class="Texto"> a = a - 1 equivale a a--.</p></li>
                        </ul>
                        <p class="Texto">
                            É possível combinar mais de um operador na mesma operação e armazenar o resultado em uma nova
                            variável. Por exemplo, a seguinte declaração calcula o preço total de um item mais o custo de envio:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code">let</span> total = item.quantity * <span class="blue-code">9.99</span> + <span class="blue-code">3.15</span>;
                            </code></pre>
                        </div>
                        <p class="Texto">
                        A ordem em que as operações são realizadas segue a ordem tradicional de precedência: primeiro são
feitas as operações de multiplicação e divisão e em seguida as operações de adição e subtração. Os
operadores com a mesma precedência são executados na ordem em que aparecem na expressão, da
esquerda para a direita. Para substituir a ordem de precedência padrão, podemos usar parênteses,
como em <span class="code-color">a * (b + c)</span>.
                        </p>
                        <p class="Texto">Em algumas situações, o resultado de uma operação nem precisa ser armazenado em uma variável.
Esse é o caso quando queremos avaliar o resultado de uma expressão dentro de uma instrução if:
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
<span class="green-code">if</span> ( item.quantiy % <span class="dark_blue_code">2</span> == <span class="dark_blue_code">0</span>)
{
  console.log(<span class="orange-code">"Quantity for the item is even"</span>);
}
<span class="green-code">else</span>
{
  console.log(<span class="orange-code">"Quantity for the item is odd"</span>);
}
                            </code></pre>
                        </div>
                        <p class="Texto">
                        O operador % (módulo) retorna o restante da divisão do primeiro operando pelo segundo operando.
                        No exemplo, a instrução if verifica se o resto da divisão de item.quantity por 2 é igual a zero, ou
                        seja, se item.quantity é um múltiplo de 2.
                        </p>
                        <p class="Texto">
                        Quando um dos operandos do operador + é uma string, os outros operadores sofrem uma coerção em
                        strings e o resultado é uma concatenação de strings. Nos exemplos anteriores, esse tipo de operação
                        foi usado para concatenar strings e variáveis no argumento da declaração console.log.
                        </p> 
                        <p class="Texto">
                        Essa conversão automática pode não ser o comportamento desejado. Um valor fornecido pelo
                        usuário em um campo de formulário, por exemplo, pode ser identificado como uma string, mas na
                        verdade é um valor numérico. Em casos como esse, a variável deve primeiro ser convertida em um
                        número com a função Number():
                        </p>
                        <div class="typewriter-small" id="copycode">
                            <button class="copy-btn" onclick="copyCode()">
                                <i class="fas fa-copy"></i> Copiar
                            </button>
                            <pre><code class="Texto">
sum = <span class="blue-code">Number</span>(value1) + value2;

                            </code></pre>
                        </div>
                        <p class="Texto">
                        Além disso, é importante verificar se o usuário forneceu um valor válido antes de prosseguir com a
                        operação. Em JavaScript, uma variável sem um valor atribuído contém o valor null. Isso permite que
                        o programador use uma declaração de decisão como if (value1 == null) para verificar se uma
                        variável teve um valor atribuído, independentemente do tipo de valor atribuído à variável.
                        </p>

            </div>
        </div>
    </div>    
</body>
<?php
    include('../../layouts/footer.php')
?>

