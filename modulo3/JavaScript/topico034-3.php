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
                <p class="Titulo">034.3 Estrututras de controle e funções do JavaScript</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                    Como qualquer outra linguagem de programação, o código JavaScript é uma coleção de declarações
                    que informam a um interpretador de instruções o que fazer, em ordem sequencial. No entanto, isso
                    não significa que todas as declarações devam ser executadas apenas uma vez ou que devam ser
                    executadas obrigatoriamente. A maioria das declarações deve ser executada apenas quando
                    determinadas condições específicas forem atendidas. Mesmo quando um script é disparado de forma
                    assíncrona por eventos independentes, muitas vezes ele precisa verificar uma série de variáveis de
                    controle para encontrar a parte certa do código a ser executada.
                </p>
                <p class="Subtopico"><strong>Declarações If</strong></p>  
                <p class="Texto">
                    A estrutura de controle mais simples é fornecida pela instrução if, que executará a instrução
                    imediatamente posterior a ela se a condição especificada for verdadeira. O JavaScript considera as
                    condições como verdadeiras se o valor avaliado for diferente de zero. Qualquer coisa entre
                    parênteses após a palavra if (os espaços são ignorados) será interpretado como uma condição. No
                    exemplo a seguir, o número literal 1 é a condição:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>if</strong></span> ( <span class="dark_blue_code"><strong>1</strong></span> ) console.log(<span class="orange-code">"1 is always true"</span>);
                    </code>
                </pre>
                </div>
                <p class="Texto">
                    O número 1 foi explicitamente escrito nesta condição de exemplo, então ele é tratado como um valor
                    constante (permanece o mesmo durante a execução do script) e sempre resultará em verdadeiro
                    quando usado como uma expressão condicional. A palavra <span class="code-color">true</span> (sem as aspas duplas) também pode
                    ser usada no lugar de <span class="code-color">1</span>, pois também é tratada como um valor verdadeiro literal pela linguagem. A
                    instrução <span class="code-color">console.log</span> imprime seus argumentos na <em>janela do console</em> do navegador.
                </p> 
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-head-side-virus"></i>
                        DICA
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                        <p class="Texto">
                            O console do navegador exibe erros, avisos e mensagens informativas enviadas com a
                            instrução console.log do JavaScript. No Chrome, a combinação de teclas spank Ctrl +
                            Shift + J ( Cmd + Option + J no Mac) abre o console. No Firefox, a combinação Ctrl +
                            Shift + K ( Cmd + Option + K no Mac) abre a guia do console nas ferramentas do
                            desenvolvedor.
                        </p>
                    </div>
                </div>
                <br>
                <p class="Texto">
                    Embora sintaticamente correto, o uso de expressões constantes em condições não é muito útil. Em
                    uma aplicação real, é aconselhável testar a veracidade de uma variável:
                </p> 
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="blue-code"><strong>3</strong></span>;
<span class="green-code"><strong>if</strong></span>( my_number )
console.log(<span class="orange-code">"The value of my_number is"</span>, my_number, <span class="orange   -code">"and it yields true"</span>);

                    </code>
                </pre>
                    
                    
                </div>
                <p class="Texto">
                        O valor atribuído à variável my_number (3) é diferente de zero e, portanto, resulta verdadeiro. Mas
                        este exemplo não é de uso comum, porque é raro ser preciso testar se um número é igual a zero. É
                        muito mais comum comparar um valor com outro e testar se o resultado é verdadeiro:
                    </p>
                    <div class="typewriter-small" id="copycode">
                        <button class="copy-btn" onclick="copyCode()">
                            <i class="fas fa-copy"></i> Copiar
                        </button>
                        <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="blue-code"><strong>3</strong></span>;
<span class="green-code"><strong>if</strong></span>( my_number )
console.log(<span class="orange-code">"The value of my_number is"</span>, my_number, <span class="orange-code">"indeed"</span>);

                        </code></pre>
                    </div>
                    <p class="Texto">                        
                        O operador de comparação duplo igual é usado aqui porque o operador igual já está definido como
                        operador de atribuição. O valor em cada lado do operador é chamado de operando. A ordem dos
                        operandos não importa e qualquer expressão que retorne um valor pode ser um operando. Eis uma
                        lista de outros operadores de comparação disponíveis:
                    </p>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>value1 != value2</strong>
                    <p class="Texto">True if value1 is not equal to value2.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>value1 < value2</strong>
                    <p class="Texto">True if value1 is less than value2.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <strong>value1 > value2</strong>
                    <p class="Texto">True if value1 is greater than value2.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                <p class="Subtopico"><strong>value1 <= value2</strong></p>
                    <p class="Texto">True if value1 is less than or equal to value2.</p>
                </div>
                <div class="typewriter-small" style="width: 70%;">
                    <p class="Subtopico"><strong>value1 >= value2</strong></p>
                    <p class="Texto">True if value1 is grater than or equal to value2.</p>
                </div>
                <p class="Texto">
                    Normalmente, não importa se o operando à esquerda do operador é uma string e o operando à
                    direita é um número, desde que o JavaScript seja capaz de converter a expressão em uma
                    comparação significativa. Portanto, a string que contém o caractere <span class="dark_blue_code">1</span> será tratada como o número 1
                    quando comparada a uma variável numérica. Para garantir que a expressão seja verdadeira apenas se
                    ambos os operandos forem exatamente do mesmo tipo e valor, o operador de igualdade estrita <span class="code-color">===</span>
                    deve ser usado em vez de <span class="code-color">==</span>. Da mesma forma, o operador de desigualdade estrita <span class="code-color">!==</span> é avaliado
                    como verdadeiro se o primeiro operando não for exatamente do mesmo tipo e valor do segundo
                    operador.
                </p>
                <p class="Texto">
                    Opcionalmente, a estrutura de controle if pode executar uma instrução alternativa quando a
                    expressão for avaliada como falsa:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code">let</span> my_number = <span class="blue-code">4</span>;
<span class="green-code">if</span> ( my_number == <span class="dark_blue_code">3</span> ) console.log(<span class="orange-code">"The value of my_number is 3"</span>);
<span class="green-code">else</span> console.log(<span class="orange-code">"The value of my_number is not 3"</span>);
                    </code></pre>
                </div>
                <p class="Texto">
                    A instrução else deve seguir imediatamente a instrução if. Até agora, estamos executando apenas
                    uma declaração quando a condição é atendida. Para executar mais de uma declaração, devemos
                    colocá-las entre chaves:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="dark_blue_code"><strong>4</strong></span>;
<span class="green-code"><strong>if</strong></span> ( my_number == <span class="dark_blue_code"><strong>3</strong></span>)
{
  console.log(<span class="orange-code">"The value of my_number is 3"</span>);
  console.log(<span class="orange-code">"and this is the second statement in the block"</span>);
}
else
{
  console.log(<span class="orange-code">"The value of my_number is not 3"</span>);
  console.log(<span class="orange-code">"and this is the second statement in the block"</span>);
}

                    </code></pre>
                </div>
                <p class="Texto">
                    Um grupo de uma ou mais declarações delimitadas por um par de chaves é conhecido como
                    declaração de bloco. É comum usar <em>declarações de bloco</em> mesmo quando há apenas uma instrução a
                    executar, a fim de tornar o estilo de codificação consistente em todo o script. Além disso, o JavaScript
                    não exige que as chaves ou quaisquer declarações estejam em linhas separadas, mas esse
                    procedimento melhora a legibilidade e facilita a manutenção do código.
                </p>
                <p class="Texto">
                    As estruturas de controle podem ser aninhadas umas nas outras, mas é importante não misturar as
                    chaves de abertura e fechamento de cada declaração de bloco:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="dark_blue_code"><strong>4</strong></span>;
<span class="green-code"><strong>if</strong></span> ( my_number > <span class="dark_blue_code"><strong>0</strong></span>)
{
  console.log(<span class="orange-code">"The value of my_number is positive"</span>);
  <span class="green-code">if</span> ( my_number % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
  {
  console.log(<span class="orange-code">"and it is an even number"</span>);
  }
  else
  {
  console.log(<span class="orange-code">"and it is an odd number"</span>);
  }
} <span class="comment"> // end of if ( my_number > 0 )</span>
else
{
  console.log(<span class="orange-code">"The value of my_number is less than or equal to 0"</span>);
  console.log(<span class="orange-code">"and I decided to ignore it"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    As expressões avaliadas pela instrução if podem ser mais elaboradas do que simples comparações.
                    Este é o caso do exemplo anterior, no qual a expressão aritmética my_number % 2 foi empregada
                    entre parênteses no if aninhado. O operador % retorna o resto após dividir o número à sua esquerda
                    pelo número à sua direita. Os operadores aritméticos, como %, têm precedência sobre os operadores
                    de comparação como ==, de forma que a comparação usará o resultado da expressão aritmética como
                    operando esquerdo.
                </p>
                <p class="Texto">
                    Em muitas situações, é possível combinar estruturas condicionais aninhadas em uma única estrutura
                    usando operadores lógicos. Se estivéssemos interessados apenas em números pares positivos, por
                    exemplo, uma única estrutura if poderia ser usada:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="dark_blue_code"><strong>4</strong></span>;
<span class="green-code"><strong>if</strong></span> ( my_number > <span class="dark_blue_code"><strong>0</strong></span> && my_number % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
{
  console.log(<span class="orange-code">"The value of my_number is positive"</span>);
  console.log(<span class="orange-code">"and it is an even number"</span>);
}
<span class="green-code"><strong>else</strong></span> 
{
  console.log(<span class="orange-code">"The value of my_number either 0, negative"</span>);
  console.log(<span class="orange-code">"or it is a negative number"</span>);
}

                    </code></pre>
                </div>
                <p class="Texto">
                    O operador "e" comercial duplo && na expressão avaliada é o operador lógico AND. Ela é avaliada
                    como verdadeira apenas se a expressão à sua esquerda e a expressão à sua direita forem avaliadas
                    como verdadeiras. Se você quiser combinar números que sejam ou positivos ou pares, o operador <span class="code-color">||</span>
                    deve ser usado, representando o operador lógico <em>OR</em>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="dark_blue_code"><strong>-4</strong></span>;
<span class="green-code"><strong>if</strong></span> ( my_number > <span class="dark_blue_code"><strong>0</strong></span> || my_number % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
{
  console.log(<span class="orange-code">"The value of my_number is positive"</span>);
  console.log(<span class="orange-code">"or it is a even negative number"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, apenas os números ímpares negativos não corresponderão aos critérios impostos
                    pela expressão composta. Se você tiver a intenção oposta, ou seja, encontrar correspondências
                    apenas dentre os números ímpares negativos, adicione o operador lógico NOT ! ao início da
                    expressão
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> my_number = <span class="dark_blue_code"><strong>-5</strong></span>;
<span class="green-code"><strong>if</strong></span> ( ! ( my_number > <span class="dark_blue_code"><strong>0</strong></span> || my_number % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> ) )
{
  console.log(<span class="orange-code">"The value of my_number is an odd negative number"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    O acréscimo do parêntese na expressão composta força a expressão que está entre eles a ser avaliada
                    primeiro. Sem esses parênteses, o operador NOT se aplicaria apenas a <span class="code-color">my_number > 0</span> e, em seguida,
                    a expressão OR seria avaliada. Os operadores <span class="code-color">&&</span> e <span class="code-color">|| </span>são conhecidos como operadores lógicos
                    <em>binários</em>, porque requerem dois operandos. <span class="code-color">!</span> é conhecido como um operador lógico <em>unário</em>, porque
                    requer apenas um operando.
                </p>
                <p class="Subtopico"><strong>Estruturas Switch</strong></p>
                <p class="Texto">
                    Embora a estrutura <span class="code-color">if</span> seja bastante versátil e suficiente para controlar o fluxo do programa, a
                    estrutura de controle switch pode ser mais adequada quando se trata de avaliar resultados diferentes
                    de verdadeiro ou falso. Por exemplo, se quiséssemos realizar uma ação distinta para cada item
                    escolhido em uma lista, seria necessário escrever uma estrutura <span class="code-color">if</span> para cada avaliação:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>let</strong></span> language = <span class="orange-code">"pt"</span>;
<span class="green-code"><strong>let</strong></span> found = <span class="dark_blue_code"><strong>0</strong></span>;
<span class="green-code"><strong>if</strong></span> ( language == <span class="orange-code">"en"</span> )
{
  found = <span class="dark_blue_code"><strong>1</strong></span>;
  console.log(<span class="orange-code">"English"</span>);
}
<span class="green-code"><strong>if</strong></span> ( found == <span class="dark_blue_code"><strong>0</strong></span> && language == <span class="orange-code">"es"</span> )
{
  found = <span class="dark_blue_code"><strong>1</strong></span>;
  console.log(<span class="orange-code">"Spanish"</span>);
}
<span class="green-code"><strong>if</strong></span> ( found == <span class="dark_blue_code"><strong>0</strong></span> && language == <span class="orange-code">"pt"</span> )
{
  found = <span class="dark_blue_code"><strong>1</strong></span>;
  console.log(<span class="orange-code">"Portuguese"</span>);
}
<span class="green-code"><strong>if</strong></span> ( found == <span class="dark_blue_code"><strong>0</strong></span> )
{
  console.log(language, <span class="orange-code">" is unknown to me"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Neste exemplo, uma variável auxiliar <span class="code-color"><em>found</em></span> é usada por todas as estruturas <span class="code-color"><em>if</em></span> para descobrir se uma
                    correspondência foi encontrada. Em um caso como este, a estrutura switch realizaria a mesma tarefa,
                    mas de forma mais sucinta:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>switch</strong></span> ( language )
{
    <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en"</span>:
    console.log(<span class="orange-code">"English"</span>);
    <span class="green-code"><strong>break</strong></span>;
    <span class="green-code"><strong>case</strong></span> <span class="orange-code">"es"</span>:
    console.log(<span class="orange-code">"Spanish"</span>);
    <span class="green-code"><strong>break</strong></span>;
    <span class="green-code"><strong>case</strong></span> <span class="orange-code">"pt"</span>:
    console.log(<span class="orange-code">"Portuguese"</span>);
    <span class="green-code"><strong>break</strong></span>;
    <span class="blue-code">default</span>:
    console.log(language, <span class="orange-code">" not found"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Cada case aninhado é chamado de <span class="code-color"><em>cláusula</em></span>. Quando uma cláusula corresponde à expressão avaliada,
                    ela executa as instruções que estão após os dois pontos até a instrução <span class="code-color"><em>break</em></span>. A última cláusula não
                    precisa de uma instrução break e é freqüentemente usada para definir a ação padrão quando
                    nenhuma outra correspondência é encontrada. Como visto no exemplo, a variável auxiliar não é
                    necessária na estrutura switch.
                </p>
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p class="Texto"> O switch usa a comparação estrita para comparar as expressões com as cláusulas de case.</p>
                    </div>
                </div>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>switch</strong></span> ( language )
{
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en_US"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en_GB"</span>:
  console.log(<span class="orange-code">"English"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"es"</span>:
  console.log(<span class="orange-code">"Spanish"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"pt"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"pt_BR"</span>:
  console.log(<span class="orange-code">"Portuguese"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="blue-code">default</span>:
  console.log(language, <span class="orange-code">" not found"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">Se mais de uma cláusula disparar a mesma ação, é possível combinar duas ou mais condições de<span class="code-color"><em>case</em></span>:</p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>switch</strong></span> ( language )
{
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en_US"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"en_GB"</span>:
  console.log(<span class="orange-code">"English"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"es"</span>:
  console.log(<span class="orange-code">"Spanish"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"pt"</span>:
  <span class="green-code"><strong>case</strong></span> <span class="orange-code">"pt_BR"</span>:
  console.log(<span class="orange-code">"Portuguese"</span>);
  <span class="green-code"><strong>break</strong></span>;
  
  <span class="blue-code">default</span>:
  console.log(language, <span class="orange-code">" not found"</span>);
}
                    </code></pre>
                </div>
                <p class="Subtopico"><strong>Laços</strong></p>
                <p class="Texto">
                    Nos exemplos anteriores, as estruturas <span class="code-color"><em>if</em></span> e <span class="code-color"><em>switch</em></span> eram adequadas para tarefas que precisam ser
                    executadas apenas uma vez após passar por um ou mais testes condicionais. No entanto, existem
                    situações em que uma tarefa deve ser executada repetidamente—no que se chama um <em>laço</em>, ou
                    loop—enquanto a expressão condicional for avaliada como verdadeira. Se você precisa saber se um
                    número é primo, por exemplo, será preciso verificar se a divisão desse número por qualquer inteiro
                    maior que 1 e menor do que ele mesmo tem um resto igual a 0. Se for o caso, o número tem um fator
                    inteiro e não é primo (este não é um método rigoroso ou eficiente para encontrar números primos,
                    mas funciona como um exemplo simples). As estruturas de controle de laço são mais adequadas para
                    esses casos, em particular a instrução <span class="code-color"><em>while</em></span>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// A naive prime number tester</span>
<span class="comment">// The number we want to evaluate</span>
<span class="green-code"><strong>let</strong></span> candidate = <span class="dark_blue_code"><strong>231</strong></span>;
<span class="comment">// Auxiliary variable</span>
<span class="green-code"><strong>let</strong></span> is_prime = <span class="green-code"><strong>true</strong></span>;
<span class="comment">// The first factor to try</span>
<span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>;
<span class="comment">// Execute the block statement if factor is</span>
<span class="comment">// less than candidate and keep doing it</span>
<span class="comment">// while factor is less than candidate</span>
<span class="green-code"><strong>while</strong></span> ( factor < candidate )
{
  <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="comment">// The remainder is zero, so the candidate is not prime</strong></span>
    is_prime = <span class="green-code"><strong>false</strong></span>;
    <span class="green-code"><strong>break</strong></span>;
  }
  <span class="comment">// The next factor to try. Simply></span>
  <span class="comment">// increment the current factor by one</span>
  factor++;
}
<span class="comment">// Display the result in the console window.</span>
<span class="comment">// If candidate has no integer factor, then</span>
<span class="comment">// the auxiliary variable is_prime still true</span>
<span class="green-code"><strong>if</strong></span> ( is_prime )
{
  console.log(candidate, <span class="orange-code">"is prime"</span>);
}
<span class="green-code"><strong>else</strong></span>
{
  console.log(candidate, <span class="orange-code">"is not prime"</span>);
}
                    </code></pre>
                </div>
                <p class="Texto">
                    A declaração de bloco após a instrução <span class="code-color"><em>while</em></span> será executada repetidamente enquanto a condição
                    <span class="code-color"><em>factor < candidate</em></span> for verdadeira. Ela será executada pelo menos uma vez,
                    desde que inicializemosa variável factor com um valor inferior a candidate. A estrutura <span class="code-color"><em>if</em></span> aninhada na estrutura <span class="code-color"><em>while</em></span>
                    avalia se o resto de candidate dividido por factor é zero. Se for o caso, o número candidato não é
                    primo e o loop pode terminar. A declaração <span class="code-color"><em>break</em></span> encerra o laço e a execução pula para a primeira
                    instrução após o bloco <span class="code-color"><em>while</em></span>.
                </p>
                <p class="Texto">
                    Note que o resultado da condição usada pela declaração <span class="code-color"><em>while</em></span> deve mudar a cada loop, caso
                    contrário a declaração de bloco vai rodar “para sempre”. No exemplo, incrementamos a variável
                    <span class="code-color"><em>factor</em></span>—o próximo divisor que queremos testar—garantindo que o laço terminará em algum
                    momento.
                </p>
                <p class="Texto">
                    Esta implementação simples de um código para testar números primos funciona conforme o
                    esperado. No entanto, sabemos que um número que não é divisível por dois não será divisível por
                    nenhum outro número par. Portanto, poderíamos simplesmente pular os números pares adicionando
                    outra instrução <span class="code-color"><em>if</em></span>:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>while</strong></span> ( factor &lt; candidate )
{
  <span class="comment">// Skip even factors bigger than two</span>
  <span class="green-code"><strong>if</strong></span> ( factor &gt; <span class="dark_blue_code"><strong>2</strong></span> && factor % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    factor++;
    <span class="green-code"><strong>continue</strong></span>;
  }
  <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="comment">// The remainder is zero, so the candidate is not prime</span>
    is_prime = <span class="green-code"><strong>false</strong></span>;
    <span class="green-code"><strong>break</strong></span>;
  }
  <span class="comment">// The next number that will divide the candidate</span>
  factor++;
}
                    </code></pre>
                </div>
                <p class="Texto">
                A declaração <span class="code-color">continue</span> é semelhante à declaração <span class="code-color">break</span>, mas ao invés de encerrar esta iteração do
                laço, ela ignora o resto do bloco do laço e inicia uma nova iteração. Observe que a variável <span class="code-color"><em>factor</em></span> foi
                modificada antes da declaração <span class="code-color"><em>continue</em></span>; caso contrário, o loop teria o mesmo resultado novamente
                na iteração seguinte. Este exemplo é demasiado simples e pular parte do loop não vai melhorar muito
                o desempenho, mas a possibilidade de pular instruções redundantes é importantíssima para se
                escrever aplicativos eficientes.
                </p>
                <p class="Texto">
                    Os loops são tão comumente usados que eles existem em muitas variantes diferentes. O loop for é
                    especialmente adequado para iterar valores sequenciais, pois ele permite definir as regras do laço em
                    uma única linha:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="green-code"><strong>for</strong></span> ( <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>; factor &lt; candidate; factor++ )
{
  <span class="comment">// Skip even factors bigger than two</span>
  <span class="green-code"><strong>if</strong></span> ( factor &gt; <span class="dark_blue_code"><strong>2</strong></span> && factor % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="green-code"><strong>continue</strong></span>;
  }
  <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="comment">// The remainder is zero, so the candidate is not prime</span>
    is_prime = <span class="green-code"><strong>false</strong></span>;
    <span class="green-code"><strong>break</strong></span>;
  }
}
                    </code></pre>
                </div>
                <p class="Texto">
                    Este exemplo produz exatamente o mesmo resultado que o exemplo anterior com while, mas a
                    expressão entre parênteses inclui três partes, separadas por ponto e vírgula: a inicialização (<span class="code-color"><em>let
                    factor = 2</em></span>), a condição de loop (<span class="code-color"><em>factor < candidate</em></span>) e a expressão final a ser avaliada no final de
                    cada iteração do loop (<span class="code-color"><em>factor++</em></span>). As instruções continue e break também se aplicam aos loops for.
                    A expressão final entre parênteses (<span class="code-color"><em>factor++</em></span>) será avaliada após a declaração continue e, portanto,
                    não deve estar dentro da declaração de bloco, ou será incrementada duas vezes antes da próxima
                    iteração.
                </p>
                <p class="Texto">
                    O JavaScript tem tipos especiais de loops for para trabalhar com objetos do tipo array (matriz).
                    Poderíamos, por exemplo, verificar uma matriz de variáveis candidatas em vez de apenas uma:
                </p>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="comment">// A naive prime number tester</span>
<span class="comment">// The array of numbers we want to evaluate</span>
<span class="green-code"><strong>let</strong></span> candidates = [<span class="dark_blue_code"><strong>111</strong></span>, <span class="dark_blue_code"><strong>139</strong></span>, <span class="dark_blue_code"><strong>293</strong></span>, <span class="dark_blue_code"><strong>327</strong></span>];
<span class="comment">// Evaluates every candidate in the array</span>
<span class="green-code"><strong>for</strong></span> ( candidate <span class="green-code"><strong>of</strong></span> candidates )
{
  <span class="comment">// Auxiliary variable</span>
  <span class="green-code"><strong>let</strong></span> is_prime = <span class="green-code"><strong>true</strong></span>;
  <span class="green-code"><strong>for</strong></span> ( <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>; factor &lt; candidate; factor++ )
  {
    <span class="comment">// Skip even factors bigger than two</span>
    <span class="green-code"><strong>if</strong></span> ( factor &gt; <span class="dark_blue_code"><strong>2</strong></span> && factor % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
    {
      <span class="green-code"><strong>continue</strong></span>;
    }
    <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
    {
      <span class="comment">// The remainder is zero, so the candidate is not prime</span>
      is_prime = <span class="green-code"><strong>false</strong></span>;
      <span class="green-code"><strong>break</strong></span>;
    }
  }
  <span class="comment">// Display the result in the console window</span>
  <span class="green-code"><strong>if</strong></span> ( is_prime )
  {
    console.log(candidate, <span class="orange-code">"is prime"</span>);
  }
  <span class="green-code"><strong>else</strong></span>
  {
    console.log(candidate, <span class="orange-code">"is not prime"</span>);
  }
}
                    </code></pre>
                </div>
                <p class="Texto">
                    A declaração for (<span class="code-color"><em>candidate of candidates</em></span>) atribui um elemento da matriz <span class="code-color"><em>candidates</em></span> à variável
                    <span class="code-color"><em>candidate</em></span> e o usa na declaração de bloco, repetindo o processo para cada elemento da matriz. Não é
                    necessário declarar <span class="code-color"><em>candidate</em></span> separadamente, porque o loop <span class="code-color"><em>for</em></span> o define. Finalmente, o mesmo
                    código do exemplo anterior foi aninhado nesta nova declaração de bloco, mas desta vez testando
                    cada candidato da matriz por sua vez.
                </p>
            </div>
        </div>
    </div>
    <?php
    include('../../layouts/footer.php')
?>