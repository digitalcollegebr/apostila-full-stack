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
                <p class="Subtopico" style="font-size: 13px;"><strong>Parte 02</strong></p>
                <p class="Titulo">034.3 Estrututras de controle e funções do JavaScript</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Além do conjunto padrão de funções integradas fornecido pela linguagem JavaScript, os desenvolvedores podem escrever suas próprias funções personalizadas, de forma a conduzir uma entrada de dados até uma saída adequada às necessidades do aplicativo. As funções personalizadas são, basicamente, um conjunto de declarações encapsuladas e empregadas como parte de uma expressão.</p>
                <p class="Texto">O uso de funções é uma boa maneira de evitar a duplicação do código, já que elas podem ser chamadas de locais diferentes ao longo de todo o programa. Além disso, o agrupamento de declarações em funções facilita a vinculação de ações personalizadas a eventos, o que é um aspecto essencial da programação em JavaScript.</p>
                <p class="Subtopico"><strong>Definição de função</strong></p>
                <p class="Texto">Conforme um programa cresce, vai ficando mais difícil organizar o que ele faz sem usar funções. Cada função tem seu próprio escopo privado de variáveis, de forma que as variáveis definidas dentro de uma função estarão disponíveis apenas dentro dessa mesma função. Assim, elas não se confundem com variáveis de outras funções. As variáveis globais continuam acessíveis de dentro das funções, mas a maneira preferível de enviar valores de entrada para uma função é por meio de <em>parâmetros de função</em>. Como exemplo, vamos incrementar o validador de número primo da lição anterior:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// Um testador de números primos simples</span>

<span class="C_inicializeted">// O número que queremos avaliar</span>
<span class="green-code"><strong>let</strong></span> candidate = <span class="dark_blue_code"><strong>231</strong></span>;

<span class="C_inicializeted">// Variável auxiliar</span>
<span class="green-code"><strong>let</strong></span> is_prime = <span class="dark_blue_code"><strong>true</strong></span>;

<span class="C_inicializeted">// Começa com o menor número primo após 1</span>
<span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>;

<span class="C_inicializeted">// Continua avaliando enquanto o fator for menor que o candidato</span>
<span class="green-code"><strong>while</strong></span> ( factor < candidate )
{
  <span class="C_inicializeted">// Se o resto da divisão for zero, o candidato não é primo</span>
  <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    is_prime = <span class="dark_blue_code"><strong>false</strong></span>;
    <span class="green-code"><strong>break</strong></span>;
  }
  <span class="C_inicializeted">// O próximo número que dividirá o candidato</span>
  factor++;
}

<span class="C_inicializeted">// Exibe o resultado na janela do console</span>
<span class="green-code"><strong>if</strong></span> ( is_prime )
{
  <span class="green-code"><strong>console</strong></span>.log(candidate, <span class="orange-code">"é primo"</span>);
}
<span class="green-code"><strong>else</strong></span>
{
  <span class="green-code"><strong>console</strong></span>.log(candidate, <span class="orange-code">"não é primo"</span>);
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Se em um ponto mais adiante no programa for preciso verificar se um número é primo, será
                necessário repetir o código que já foi escrito. Essa prática não é recomendada, já que quaisquer correções ou melhorias no código original precisariam ser replicadas manualmente em todos os lugares nos quais o código foi copiado. Além disso, a repetição do código sobrecarrega o navegador e a rede, tornando mais lenta a exibição da página web. Em vez disso, mova as declarações apropriadas para uma função:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// Uma função de testador de números primos simples</span>

<span class="C_inicializeted">// A função que testa se um número é primo</span>
<span class="green-code"><strong>function</strong></span> test_prime(<span class="dark_blue_code"><strong>candidate</strong></span>)
{
  <span class="C_inicializeted">// Variável auxiliar</span>
  <span class="green-code"><strong>let</strong></span> is_prime = <span class="dark_blue_code"><strong>true</strong></span>;

  <span class="C_inicializeted">// Começa com o menor número primo após 1</span>
  <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>;

  <span class="C_inicializeted">// Continua avaliando enquanto o fator for menor que o candidato</span>
  <span class="green-code"><strong>while</strong></span> ( factor < candidate )
  {
    <span class="C_inicializeted">// Se o resto da divisão for zero, o candidato não é primo</span>
    <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
    {
      is_prime = <span class="dark_blue_code"><strong>false</strong></span>;
      <span class="green-code"><strong>break</strong></span>;
    }
    <span class="C_inicializeted">// O próximo número que dividirá o candidato</span>
    factor++;
  }

  <span class="C_inicializeted">// Retorna a resposta</span>
  <span class="green-code"><strong>return</strong></span> is_prime;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A declaração da função começa com uma declaração function, seguida pelo nome da função e seus parâmetros. O nome da função deve seguir as mesmas regras que os nomes das variáveis. Os parâmetros da função, também conhecidos como argumentos da função, são separados por vírgulas e postos entre parênteses.</p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-head-side-virus"></i>
                        DICA
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                        <p class="Texto">Não é obrigatório listar os argumentos na declaração da função. Os argumentos passados para uma função podem ser obtidos de um objeto arguments, semelhante a uma matriz, dentro daquela função. O indice de argumentos começa em 0, de forma que o primeiro argumento é arguments[0], o segundo é arguments[1], e assim por diante.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">No exemplo, a função <span class="code-color"><em>test_prime</em></span> tem apenas um argumento: o argumento <span class="code-color"><em>candidate</em></span>, que é o candidato a número primo a ser testado. Os argumentos da função funcionam como variáveis, mas seus valores são atribuídos pela declaração que chama a função. Por exemplo, a declaração <span class="code-color"><em>test_prime(231)</em></span> chama a função <span class="code-color"><em>test_prime</em></span> e atribui o valor 231 ao argumento <span class="code-color"><em>candidate</em></span>, que então fica disponível dentro do corpo da função como uma variável comum.</p>
                <p class="Texto">Se a declaração de chamada usar variáveis simples para os parâmetros da função, seus valores serão copiados para os argumentos da função. Este procedimento — copiar os valores dos parâmetros usados na declaração de chamada para os parâmetros usados dentro da função — é chamado de <em>passagem de argumentos por valor</em>. Quaisquer modificações feitas no argumento pela função não afetam a variável original usada na declaração de chamada. No entanto, se a declaração inicial usar objetos complexos como argumentos (ou seja, objetos com propriedades e métodos vinculados) para os parâmetros da função, eles serão passados como referência e a função será capaz de modificar o objeto original usado na declaração de chamada.</p>
                <p class="Texto">Os argumentos que são passados por valor, assim como as variáveis declaradas dentro da função, não são visíveis fora dela. Ou seja, seu escopo é restrito ao corpo da função em que foram declarados. Ainda assim, as funções geralmente são empregadas para criar alguma saída visível fora da função. Para compartilhar um valor com sua função de chamada, uma função define uma declaração <span class="code-color"><strong>return</strong></span>.</p>
                <p class="Texto">Por exemplo, a função <span class="code-color"><em>test_prime</em></span> do exemplo anterior retorna o valor da variável is_prime. Portanto, a função pode substituir a variável em qualquer lugar em que ela teria sido usada no exemplo original:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// O número que queremos avaliar</span>
<span class="green-code"><strong>let</strong></span> candidate = <span class="dark_blue_code"><strong>231</strong></span>;

<span class="C_inicializeted">// Exibe o resultado na janela do console</span>
<span class="green-code"><strong>if</strong></span> ( test_prime(candidate) )
{
  <span class="green-code"><strong>console</strong></span>.log(candidate, <span class="orange-code">"é primo"</span>);
}
<span class="green-code"><strong>else</strong></span>
{
  <span class="green-code"><strong>console</strong></span>.log(candidate, <span class="orange-code">"não é primo"</span>);
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A declaração <span class="code-color"><strong>return</strong></span>, como seu nome indica, devolve o controle para a função de chamada. Portanto, onde quer que a declaração return seja colocada na função, nada que venha depois dela é executado. Uma função pode conter múltiplas instruções return. Esta prática pode ser útil se algumas delas estiverem dentro de blocos condicionais de declarações, de modo que a função possa ou não executar uma instrução return determinada a cada execução.</p>
                <p class="Texto">Nem sempre as funções retornam um valor, por isso a instrução return não é obrigatória. As declarações internas da função são executadas independentemente de sua presença, de modo que as funções também podem ser utilizadas, por exemplo, para alterar os valores das variáveis globais ou o conteúdo dos objetos passados por referência. Não obstante, se a função não tiver uma declaração return, seu valor de retorno por padrão será <span class="code-color"><em>undefined</em></span>: uma variável reservada que não tem um valor e não pode ser escrita.</p>
                <p class="Subtopico"><strong>Expressões das funções</strong></p>
                <p class="Texto">Em JavaScript, as funções são apenas mais um tipo de <em>objeto</em>. Assim, elas podem ser empregadas no script como variáveis. Essa característica se torna explícita quando a função é declarada usando uma sintaxe alternativa, chamada <em>expressões de função</em>:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// Uma função de testador de números primos simples</span>

<span class="C_inicializeted">// A função que testa se um número é primo</span>
<span class="green-code"><strong>let</strong></span> test_prime = <span class="green-code"><strong>function</strong></span>(<span class="dark_blue_code"><strong>candidate</strong></span>)
{
  <span class="C_inicializeted">// Variável auxiliar</span>
  <span class="green-code"><strong>let</strong></span> is_prime = <span class="dark_blue_code"><strong>true</strong></span>;

  <span class="C_inicializeted">// Começa com o menor número primo após 1</span>
  <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>2</strong></span>;

  <span class="C_inicializeted">// Continua avaliando enquanto o fator for menor que o candidato</span>
  <span class="green-code"><strong>while</strong></span> ( factor < candidate )
  {
    <span class="C_inicializeted">// Se o resto da divisão for zero, o candidato não é primo</span>
    <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
    {
      is_prime = <span class="dark_blue_code"><strong>false</strong></span>;
      <span class="green-code"><strong>break</strong></span>;
    }
    <span class="C_inicializeted">// O próximo número que dividirá o candidato</span>
    factor++;
  }

  <span class="C_inicializeted">// Retorna a resposta</span>
  <span class="green-code"><strong>return</strong></span> is_prime;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">A única diferença entre este exemplo e a declaração da função no exemplo anterior está na primeira linha: <span class="code-color"><em>let test_prime = function(candidate)</em></span> em vez de <span class="code-color"><em>function test_prime(candidate)</em></span>. Em uma expressão de função, o nome <span class="code-color"><em>test_prime</em></span> é usado para o objeto que contém a função e não para nomear a função em si. As funções definidas em expressões de função são chamadas da mesma maneira que as funções definidas usando a sintaxe de declaração. No entanto, enquanto as funções declaradas podem ser chamadas antes ou depois de sua declaração, as expressões de função só podem ser chamadas após sua inicialização. Como ocorre com as variáveis, chamar uma função definida em uma expressão antes de sua inicialização causará um erro de referência.</p>
                <p class="Subtopico"><strong>Recursão de função</strong></p>
                <p class="Texto">Além de executar declarações e chamar funções integradas, as funções personalizadas também podem chamar outras funções personalizadas, incluindo elas mesmas. Nesse caso, falamos em <em>recursão de função</em> (ou recursividade de função). Dependendo do tipo de problema que se está tentando resolver, pode ser mais simples usar funções recursivas do que loops aninhados para executar tarefas repetitivas.</p>
                <p class="Texto">Até agora, aprendemos como usar uma função para testar se um determinado número é primo. Agora, vamos supor que queiramos encontrar o próximo primo após um determinado número. Poderíamos empregar um loop <span class="code-color"><strong>while</strong></span> para incrementar o número do candidato e escrever um loop aninhado que buscaria fatores inteiros para aquele candidato:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// Essa função retorna o próximo número primo</span>
<span class="C_inicializeted">// após o número dado como seu único argumento</span>
<span class="green-code"><strong>function</strong></span> next_prime(<span class="dark_blue_code"><strong>from</strong></span>)
{
  <span class="C_inicializeted">// Estamos apenas interessados nos primos positivos,</span>
  <span class="C_inicializeted">// então consideraremos o número 2 como o próximo</span>
  <span class="C_inicializeted">// primo após qualquer número menor que dois.</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> < <span class="dark_blue_code"><strong>2</strong></span> )
  {
    <span class="green-code"><strong>return</strong></span> <span class="dark_blue_code"><strong>2</strong></span>;
  }
  <span class="C_inicializeted">// O número 2 é o único primo positivo par,</span>
  <span class="C_inicializeted">// então será mais fácil tratá-lo separadamente.</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> == <span class="dark_blue_code"><strong>2</strong></span> )
  {
    <span class="green-code"><strong>return</strong></span> <span class="dark_blue_code"><strong>3</strong></span>;
  }
  <span class="C_inicializeted">// Decrementa "from" se for um número par</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="green-code"><strong>from</strong></span>--;
  }
  <span class="C_inicializeted">// Inicia a busca por primos maiores que 3.</span>
  <span class="C_inicializeted">// O candidato a primo é o próximo número ímpar</span>
  <span class="green-code"><strong>let</strong></span> candidate = <span class="green-code"><strong>from</strong></span> + <span class="dark_blue_code"><strong>2</strong></span>;
  <span class="C_inicializeted">// "true" mantém o loop até que um primo seja encontrado</span>
  <span class="green-code"><strong>while</strong></span> ( <span class="dark_blue_code"><strong>true</strong></span> )
  {
    <span class="C_inicializeted">// Variável de controle auxiliar</span>
    <span class="green-code"><strong>let</strong></span> is_prime = <span class="dark_blue_code"><strong>true</strong></span>;
    <span class="C_inicializeted">// "candidate" é um número ímpar, então o loop</span>
    <span class="C_inicializeted">// tentará apenas os fatores ímpares, começando com 3</span>
    <span class="green-code"><strong>for</strong></span> ( <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>3</strong></span>; factor < candidate; factor = factor + <span class="dark_blue_code"><strong>2</strong></span> )
    {
      <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
      {
        <span class="C_inicializeted">// O resto é zero, então o candidato não é primo.</span>
        <span class="C_inicializeted">// Testa o próximo candidato</span>
        is_prime = <span class="dark_blue_code"><strong>false</strong></span>;
        <span class="green-code"><strong>break</strong></span>;
      }
    }
    <span class="C_inicializeted">// Termina o loop e retorna o candidato se for primo</span>
    <span class="green-code"><strong>if</strong></span> ( is_prime )
    {
      <span class="green-code"><strong>return</strong></span> candidate;
    }
    <span class="C_inicializeted">// Se primo não encontrado ainda, tente o próximo número ímpar</span>
    candidate = candidate + <span class="dark_blue_code"><strong>2</strong></span>;
  }
}

<span class=" green-code"><strong>let from</strong></span> = <span class="dark_blue_code"><strong>1024</strong></span>;
<span class="green-code"><strong>console</strong></span>.log(<span class="orange-code">"O próximo primo depois"</span>, <span class="green-code"><strong>from</strong></span>, <span class="orange-code">"é"</span>, next_prime(<span class="green-code"><strong>from</strong></span>))
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Note que precisamos usar uma condição constante para o loop <span class="code-color"><strong>while</strong></span> (a expressão <span class="code-color"><em>true</em></span> dentro do parêntese) e a variável auxiliar <span class="code-color"><em>is_prime</em></span> para saber quando parar o loop. Embora essa solução esteja correta, usar loops aninhados não é tão elegante quanto usar a recursão para executar a mesma tarefa:</p>
                <br>
                <div class="typewriter-small" id="copycode">
                    <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i> Copiar
                    </button>
                    <pre><code class="Texto">
<span class="C_inicializeted">// Essa função retorna o próximo número primo</span>
<span class="C_inicializeted">// após o número dado como seu único argumento</span>
<span class="green-code"><strong>function</strong></span> next_prime(<span class="green-code"><strong>from</strong></span>)
{
  <span class="C_inicializeted">// Estamos apenas interessados nos primos positivos,</span>
  <span class="C_inicializeted">// então consideraremos o número 2 como o próximo</span>
  <span class="C_inicializeted">// primo após qualquer número menor que dois.</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> < <span class="dark_blue_code"><strong>2</strong></span> )
  {
    <span class="green-code"><strong>return</strong></span> <span class="dark_blue_code"><strong>2</strong></span>;
  }
  <span class="C_inicializeted">// O número 2 é o único primo positivo par,</span>
  <span class="C_inicializeted">// então será mais fácil tratá-lo separadamente.</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> == <span class="dark_blue_code"><strong>2</strong></span> )
  {
    <span class="green-code"><strong>return</strong></span> <span class="dark_blue_code"><strong>3</strong></span>;
  }
  <span class="C_inicializeted">// Decrementa "from" se for um número par</span>
  <span class="green-code"><strong>if</strong></span> ( <span class="green-code"><strong>from</strong></span> % <span class="dark_blue_code"><strong>2</strong></span> == <span class="dark_blue_code"><strong>0</strong></span> )
  {
    <span class="green-code"><strong>from</strong></span>--;
  }
  <span class="C_inicializeted">// Inicia a busca por primos maiores que 3.</span>
  <span class="C_inicializeted">// O candidato a primo é o próximo número ímpar</span>
  <span class="green-code"><strong>let</strong></span> candidate = <span class="green-code"><strong>from</strong></span> + <span class="dark_blue_code"><strong>2</strong></span>;
  <span class="C_inicializeted">// "candidate" é um número ímpar, então o loop</span>
  <span class="C_inicializeted">// tentará apenas os fatores ímpares, começando com 3</span>
  <span class="green-code"><strong>for</strong></span> ( <span class="green-code"><strong>let</strong></span> factor = <span class="dark_blue_code"><strong>3</strong></span>; factor < candidate; factor = factor + <span class="dark_blue_code"><strong>2</strong></span> )
  {
    <span class="green-code"><strong>if</strong></span> ( candidate % factor == <span class="dark_blue_code"><strong>0</strong></span> )
    {
      <span class="C_inicializeted">// O resto é zero, então o candidato não é primo.</span>
      <span class="C_inicializeted">// Chama a função next_prime recursivamente, desta vez</span>
      <span class="C_inicializeted">// usando o candidato falho como argumento.</span>
      <span class="green-code"><strong>return</strong></span> next_prime(candidate);
    }
  }
  <span class="C_inicializeted">// "candidate" não é divisível por qualquer fator inteiro</span>
  <span class="C_inicializeted">// diferente de 1 e ele mesmo, portanto é um número primo.</span>
  <span class="green-code"><strong>return</strong></span> candidate;
}

<span class="green-code"><strong>let</strong></span> <span class="green-code"><strong>from</strong></span> = <span class="dark_blue_code"><strong>1024</strong></span>;
<span class="orange-code">console.log("O próximo primo depois", <span class="green-code"><strong>from</strong></span>, "é", next_prime(<span class="green-code">< strong>from</strong></span>))</span>
                    </code></pre>
                </div>
                <p class="Texto">Ambas as versões de <span class="code-color"><em>next_prime</em></span> retornam o próximo número primo após o número dado como seu único argumento (<span class="code-color"><em>from</em></span>). A versão recursiva, como a versão anterior, começa verificando os casos especiais (ou seja, números menores ou iguais a dois). Em seguida, incrementa o candidato e começa a procurar por quaisquer fatores inteiros com o loop for (observe que o loop <span class="code-color"><strong>while</strong></span> não está mais presente). Nesse ponto, o único número primo par já foi testado, então o candidato e seus possíveisfatores são incrementados de dois em dois (um número ímpar mais dois é o número ímpar seguinte).</p>
                <p class="Texto">Existem apenas duas maneiras de sair do loop <span class="code-color"><strong>for</strong></span> no exemplo. Se todos os fatores possíveis forem testados e nenhum deles tiver um resto igual a zero ao dividir o candidato, o loop <span class="code-color"><strong>for</strong></span> se completa e a função retorna o candidato como o número primo seguinte depois de <span class="code-color"><strong>from</strong></span>. Caso contrário, se factor for um fator inteiro de <span class="code-color"><em>candidate</em></span> <span class="code-color"><em>(candidate % factor == 0)</em></span>, o valor retornado virá da função next_prime chamada recursivamente, desta vez com o candidate incrementado como parâmetro <span class="code-color"><strong>from</strong></span>. As chamadas por <span class="code-color"><em>next_prime</em></span> serão empilhadas umas sobre as outras, até que um candidato finalmente não retorne fatores inteiros. Nesse momento, a última instância de <span class="code-color"><em>next_prime</em></span> contendo o número primo o retornará para a instância <span class="code-color"><em>next_prime</em></span> anterior, e assim sucessivamente até chegar à primeira instância de <span class="code-color"><em>next_prime</em></span>. Embora cada invocação da função use os mesmos nomes como variáveis, as invocações são isoladas entre si, de modo que suas variáveis são mantidas separadas na memória.</p>
            </div>
        </div>
    </div>
    <?php
    include('../../layouts/footer.php')
?>