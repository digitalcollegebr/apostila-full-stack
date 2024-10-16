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


    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <a href="topico033-1.php" class="button-left">
                    <img src="../../assets/img/arrow-circle-left.png" alt="" class="left">
                </a>
                <p class="Titulo">032.2 - Seletores de CSS e aplicação de estilo</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                Ao escrever uma regra CSS, devemos informar ao navegador a quais elementos a regra se aplica.
                Para isso, especificamos um seletor: um padrão que pode corresponder a um elemento ou grupo de elementos. Os seletores existem em muitas formas diferentes, que podem ser baseadas no nome do elemento, seus atributos, seu posicionamento relativo na estrutura do documento ou uma combinação dessas características.
                </p>
                <br>
                <p class="Subtopico"><strong>Estilos de página inteira</strong></p>
                <p class="Texto">
                Uma das vantagens de se usar CSS é não precisar escrever regras individuais para elementos que compartilham o mesmo estilo. Um asterisco aplica a regra a todos os elementos da página web, como mostrado no exemplo a seguir:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
*{
    <span class="blue-code">color:</span><span class="dark_blue_code"> purple</span>;
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> larger</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">O seletor <span class="code-color"><em>*</em></span> não é o único método para se aplicar uma regra de estilo a todos os elementos da página. Um seletor que usa um nome de tag para aplicar estilos aos elementos contidos nessa tag é chamado de <em>seletor de tipo</em>; assim, qualquer nome de tag HTML, como <span class="code-color"><strong>body</strong></span>, <span class="code-color"><strong>p</strong></span>, <span class="code-color"><strong>table</strong></span>, <span class="code-color"><strong>em</strong></span>, etc., pode ser usado como seletor. No CSS, o estilo do pai é <em>herdado</em> pelos elementos filhos. Portanto, na prática, usar o seletor <span class="code-color"><em>*</em></span> tem o mesmo efeito que aplicar uma regra ao elemento body:</p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>body</strong></span>{
    <span class="blue-code">color:</span><span class="dark_blue_code"> purple</span>;
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> larger</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">Além disso, o recurso de cascata do CSS permite ajustar as propriedades herdadas de um elemento. Você pode escrever uma regra CSS geral que se aplica a todos os elementos da página e, em seguida, escrever regras para elementos ou conjuntos de elementos específicos.</p>
                <p class="Texto">Se o mesmo elemento corresponder a duas ou mais regras conflitantes, o navegador aplicará a regra do seletor mais específico. Veja por exemplo as seguintes regras de CSS:</p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>body</strong></span>{
    <span class="blue-code">color:</span><span class="dark_blue_code"> purple</span>;
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> larger</span>;
}

<span class="code-color"><strong>li</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> small</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                O navegador aplicará os estilos <span class="code-color"><em>color: purple</em></span> e <span class="code-color"><em>font-size: large</em></span> a todos os elementos dentro do elemento <span class="code-color"><strong>body</strong></span>. No entanto, se houver elementos <span class="code-color"><strong>li</strong></span> na página, o navegador substituirá o estilo fontsize: large pelo estilo font-size: small, porque o seletor li tem uma relação mais <strong>forte</strong> com o elemento li do que o seletor body.
                </p>
                <p class="Texto">
                O CSS não limita o número de seletores equivalentes na mesma folha de estilo, de forma que é
                possível definir duas ou mais regras usando o mesmo seletor:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>li</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> small</span>;
}

<span class="code-color"><strong>li</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> x-small</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Nesse caso, ambas as regras são igualmente específicas para o elemento <span class="code-color"><strong>li</strong></span>. O navegador não pode aplicar regras conflitantes, então ele escolherá a regra que aparece em último lugar no arquivo de CSS. Para evitar confusão, a recomendação é agrupar todas as propriedades que usam o mesmo seletor.
                </p>
                <p class="Texto">
                A ordem em que as regras aparecem na folha de estilo afeta a forma como são aplicadas no documento, mas podemos contornar esse comportamento usando uma regra important. Se, por algum motivo, você quiser manter as duas regras <span class="code-color"><strong>li</strong></span> separadas, mas forçar a aplicação da primeira em vez da segunda, marque a primeira regra como importante:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>li</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> small</span> <span class="red-color"><strong>!important</strong></span>;
}

<span class="code-color"><strong>li</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> x-small</span>;
}
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                É preciso usar com cautela as regras <span class="code-color"><strong>!Important</strong></span>, pois elas quebram a cascata natural da folha de estilo e tornam mais difícil encontrar e corrigir problemas no arquivo CSS.
                </p>
                <br>
                <p class="Subtopico"><strong>Seletores restritivos</strong></p>
                <p class="Texto">
                Vimos que é possível alterar certas propriedades herdadas usando seletores correspondentes a tags específicas. No entanto, é comum precisarmos usar estilos distintos em elementos do mesmo tipo.
                </p>
                <p class="Texto">
                Podemos incorporar atributos de tags HTML aos seletores para restringir o conjunto de elementos aos quais eles se referem. Suponha que a página HTML em que você está trabalhando tem dois tipos de listas não ordenadas (<span class="code-color"><strong>&lt;u&gt;</strong></span>): um deles é usado no topo da página como um menu para as seções do site e o outro em listas convencionais no corpo do texto:
                </p>
                <br>
                <div style class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
  <pre><code class="Texto">
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="orange-code">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code"> charset=</span><span class="orange-code">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>CSS Básico<span class="code-color"><strong>&lt;/title&gt;</strong></span>
    <span class="code-color"><strong>&lt;link</strong></span> <span class="blue-code">rel=</span><span class="orange-code">"stylesheet"</span> <span class="blue-code">href=</span> <span class="orange-code">"style.css"</span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  
  <span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/"</span><span class="code-color"><strong>&gt;</strong></span>Home<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/articles"</span><span class="code-color"><strong>&gt;</strong></span>Artigos <span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/about"</span><span class="code-color"><strong>&gt;</strong></span>Sobre<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>

<span class="code-color"><strong>&lt;div</strong></span><span class="blue-code"> id=</span><span class="orange-code">"content"</span>

<span class="code-color"><strong>&lt;p&gt;</strong></span>Os três planetas rochosos do sistema solar são:<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Mercúrio<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Venus<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Terra<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Marte<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;/ul&gt;</strong></span>

    <span class="code-color"><strong>&lt;p&gt;</strong></span>Os planetas gigantes externos que produzem a maior parte do gás são:<span class="code-color"><strong>&lt;/p&gt;</strong></span>
<span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Júpiter<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Saturno<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Urâmio<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Neturno<span class="code-color"><strong>&lt;/li&gt;</strong></span>
    <span class="code-color"><strong>&lt;/ul&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span>

<span class="code-color"><strong>&lt;div</strong></span><span class="blue-code"> id=</span><span class="orange-code">"footer"</span>

<span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/"</span><span class="code-color"><strong>&gt;</strong></span>Home<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/articles"</span><span class="code-color"><strong>&gt;</strong></span>Artigos <span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/about"</span><span class="code-color"><strong>&gt;</strong></span>Sobre<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>
    

  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">
            Por padrão, aparece um círculo preto à esquerda de cada item da lista. Queremos remover os círculos da lista do menu superior, mas preservar os círculos na outra lista. No entanto, se simplesmente usarmos o seletor <span class="code-color"><strong>li</strong></span>, os círculos na lista que está na seção do corpo do texto também serão removidos. É necessário pedir ao navegador para modificar apenas os itens de uma lista, mas não da outra.
            </p>
            <p class="Texto">
            Existem diversas maneiras de escrever seletores que correspondam a elementos específicos na página. Como mencionado anteriormente, veremos primeiro como usar os atributos dos elementos para isso. Neste exemplo em particular, podemos usar o atributo <span class="code-color"><em>id</em></span> para especificar apenas a lista superior.
            </p>
            <p class="Texto">
            O atributo <span class="code-color"><em>id</em></span> atribui um identificador único ao elemento correspondente, que podemos usar como parte do seletor da regra de CSS. Antes de escrever a regra, edite o arquivo HTML de exemplo e adicione <span class="code-color"><em>id="menu"</em></span> ao elemento <span class="code-color"><strong>ul</strong></span> usado para o menu superior:
            </p>
            <br>
            <div class="typewriter-small" style="width: 60%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;ul&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Home<span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Artigos<span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span>Sobre<span class="code-color"><strong>&lt;li&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>
                    </code></pre>
                </div>
                <br>
                <p class="Texto">
                Já existe um elemento link na seção head do documento HTML apontando para o arquivo de folha
                de estilo <span class="code-color"><em>style.css</em></span> na mesma pasta, por isso podemos adicionar as seguintes regras CSS a ele:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>ul</strong></span><span class="dark_blue_code"><strong>#topmenu</strong></span>{
    <span class="blue-code">list-style-type:</span><span class="dark_blue_code"> none;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                A <span class="code-color"><strong>cerquilha</strong></span> é usada em um seletor, após um elemento, para designar um <span class="code-color"><strong>ID</strong></span> (sem espaço de separação). O nome da tag à esquerda da cerquilha é opcional, pois não haverá outro elemento com o mesmo ID. Portanto, o seletor pode ser escrito apenas como <span class="code-color"><em>#topmenu</em></span>.
                </p>
                <p class="Texto">
                Embora <span class="code-color"><em>list-style-type</em></span> não seja uma propriedade direta do elemento <em>ul</em>, as propriedades CSS do elemento pai são herdadas por seus filhos, de modo que o estilo atribuído ao elemento ul será herdado por seus elementos filhos <em>li</em>.
                </p>
                <p class="Texto">
                Nem todos os elementos têm um ID pelo qual podem ser selecionados. Na verdade, é preferível que apenas alguns elementos-chave de layout em uma página tenham IDs. Veja as listas de planetas usadas no nosso código, por exemplo. Embora seja possível atribuir IDs exclusivos para cada elemento repetido individual, esse método não seria prático para páginas mais longas, com muito conteúdo. Em vez disso, podemos usar o ID do elemento div pai como seletor para alterar as propriedades de seus elementos internos.
                </p>
                <p class="Texto">
                No entanto, o elemento div não está diretamente relacionado às listas em HTML; portanto, adicionar a propriedade <span class="code-color"><em>list-style-type</em></span> a ele não terá efeito em seus filhos. Assim, para trocar o círculo preto nas listas dentro do conteúdo div por um círculo vazado, precisamos usar um seletor <em>descendente</em>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="dark_blue_code"><strong>#topmenu</strong></span>{
    <span class="blue-code">list-style-type:</span><span class="dark_blue_code"> none;</span>
}

<span class="dark_blue_code"><strong>#content</strong></span> <span class="code-color"><strong>ul</strong></span>{
    <span class="blue-code">list-style-type:</span><span class="dark_blue_code"> circle;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                O seletor <span class="code-color"><em>#content ul</em></span> é chamado de seletor descendente porque corresponde apenas aos elementos ul que são filhos do elemento cujo ID é <span class="code-color"><em>content</em></span>. Podemos usar tantos níveis de descendência quantos forem necessários. Por exemplo, <span class="code-color"><em>#content ul li</em></span> corresponderia apenas aos elementos li descendentes dos elementos ul, que por sua vez são descendentes do elemento cujo ID é content. Mas, neste exemplo, o seletor mais longo terá o mesmo efeito que <span class="code-color"><em>#content ul</em></span>, já que os elementos li herdam as propriedades CSS definidas para seu ul pai. Os seletores descendentes se tornam uma técnica essencial à medida que o layout da página cresce em complexidade.
                </p>
                <p class="Texto">
                Digamos que agora você deseja alterar a propriedade <span class="code-color"><em>font-style</em></span> dos itens da lista <em>topmenu</em> e da lista no <em>div de rodapé</em> para torná-los oblíquos. Não é possível simplesmente escrever uma regra de CSS usando ul como seletor, porque isso também vai alterar os itens da lista no <em>div de conteúdo</em>. Até agora, modificamos as propriedades CSS usando um seletor por vez, e esse método também pode ser usado para esta tarefa:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"   id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="dark_blue_code"><strong>#topmenu</strong></span>{
    <span class="blue-code">font-style:</span><span class="dark_blue_code"> oblique;</span>
}

<span class="dark_blue_code"><strong>footer</strong></span> <span class="code-color"><strong>ul</strong></span>{
    <span class="blue-code">font-style:</span><span class="dark_blue_code"> oblique;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                No entanto, os seletores separados não são a única maneira de fazer isso. O CSS nos permite agrupar
                seletores que compartilham um ou mais estilos, usando uma lista de seletores separados por vírgulas:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"   id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="dark_blue_code"><strong>#topmenu</strong></span>, <span class="dark_blue_code"><strong>footer</strong></span> <span class="code-color"><strong>ul</strong></span> {
    <span class="blue-code">font-style:</span><span class="dark_blue_code"> oblique;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                O agrupamento de seletores elimina o trabalho extra de escrever estilos duplicados. Além disso, você pode querer alterar a propriedade novamente no futuro e talvez não se lembre de alterá-la em todos os lugares diferentes.
                </p>
                <br>
                <p class="Subtopico"><strong>Classes</strong></p>
                <p class="Texto">
                Se não quiser se preocupar muito com a hierarquia de elementos, você pode simplesmente adicionar uma <span class="code-color"><em>class</em></span> ao conjunto de elementos que deseja personalizar. As classes são semelhantes aos IDs, mas em vez de identificar um único elemento na página, elas identificam um <strong>grupo de elementos</strong> que compartilham as mesmas características.
                </p>
                <p class="Texto">
                Veja por exemplo a página HTML na qual estamos trabalhando nesta lição. É improvável que nas páginas do mundo real encontremos estruturas simples assim, então seria mais prático selecionar um elemento usando apenas as classes ou uma combinação de classes e descendência. Para aplicar a propriedade <span class="code-color"><em>font-style: oblique</em></span> às listas de menu usando classes, primeiro precisamos adicionar a propriedade <span class="code-color"><em>class</em></span> aos elementos no arquivo HTML. Faremos isso primeiro no menu superior:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;ul</strong></span> <span class="blue-code">id=</span><span class="orange-code">"topmenu"</span> <span class="blue-code">class=</span><span class="orange-code">"menu"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/"</span><span class="code-color"><strong>&gt;</strong></span>Home<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/articles"</span><span class="code-color"><strong>&gt;</strong></span>Artigos <span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/about"</span><span class="code-color"><strong>&gt;</strong></span>Sobre<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>
</code></pre>
</div>
<br>
                <p class="Texto">E depois no menu do rodapé:</p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code"> id=</span><span class="orange-code">"footer"</span>
<span class="code-color"><strong>&lt;ul</strong></span> <span class="blue-code">class=</span><span class="orange-code">"menu"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code"> href=</span><span class="orange-code">"/"</span><span class="code-color"><strong>&gt;</strong></span>Home<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code"> href=</span><span class="orange-code">"/articles"</span><span class="code-color"><strong>&gt;</strong></span>Artigos <span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
    <span class="code-color"><strong>&lt;li&gt;</strong></span><span class="code-color"><strong>a</strong></span> <span class="blue-code">href=</span><span class="orange-code">"/about"</span><span class="code-color"><strong>&gt;</strong></span>Sobre<span class="code-color"><strong>&lt;/a&gt;</strong></span><span class="code-color"><strong>&lt;li&gt;</strong></span>
<span class="code-color"><strong>&lt;/ul&gt;</strong></span>
<span class="code-color"><strong>&lt;/div&gt;</strong></span>
</code></pre>
</div>
<br>
                <p class="Texto">
                Com isso, podemos substituir o grupo de seletores <span class="code-color"><em>#topmenu</em></span>, <span class="code-color"><em>#footer ul</em></span> pelo seletor baseado em classe <span class="code-color"><em>.menu</em></span>:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>

                    <pre><code class="Texto">
<span class="code-color"><strong>.menu</strong></span>{
    <span class="blue-code">font-style:</span><span class="dark_blue_code"> oblique;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                Como no caso dos seletores baseados em ID, adicionar o nome da tag à esquerda do ponto nos seletores baseados em classe é opcional. No entanto, ao contrário dos IDs, a mesma classe pode edeve ser usada em mais de um elemento, e eles sequer precisam ser do mesmo tipo. Portanto, se a classe <span class="code-color"><em>menu</em></span> é compartilhada entre diferentes tipos de elementos, o uso do seletor <span class="code-color"><em>ul.menu</em></span> afetaria apenas os elementos ul que possuem a classe <span class="code-color"><em>menu</em></span>. Mas se usarmos .menu como seletor, qualquer elemento que tenha a classe menu será afetado, independentemente do seu tipo.
                </p>
                <p class="Texto">
                Além disso, os elementos podem ser associados a mais de uma classe. Poderíamos diferenciar entre o
                menu superior e o inferior adicionando uma classe extra a cada um deles:
                </p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
 <span class="code-color"><strong>&lt;ul id</strong></span>= <span class="orange-code">"topmenu"</span> <span class="code-color"><strong>class</strong></span>= <span class="orange-code">"menu top"</span><span class="code-color"><strong>&gt;</strong></span>
            </code></pre>
                </div>
                <br>
                <p class="Texto">
                E no menu do rodapé:
                </p>
                <br>
                <div class="typewriter-small" id="copycode" style="text-align: center;">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
            <pre><code class="Texto">
<span class="code-color"><strong>&lt;ul</strong></span><span class="code-color"><strong> class</strong></span>= <span class="orange-code">"menu footer"</span><span class="code-color"><strong>&gt;</strong></span>
            </code></pre>
                </div>
                <br>
                <p class="Texto">
                Quando o atributo class possui mais de uma classe, elas devem ser separadas por espaços. Agora, além da regra CSS compartilhada entre os elementos da classe menu, podemos abordar o menu superior e o rodapé usando suas classes correspondentes:
                </p>
                <br>
                <div class="typewriter-small" style="width: 70%;"  id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>.menu</strong></span>{
    <span class="blue-code">font-style:</span><span class="dark_blue_code"> oblique;</span>
}

<span class="code-color"><strong>.menu.top</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> large;</span>
}

<span class="code-color"><strong>.menu.footer</strong></span>{
    <span class="blue-code">font-size:</span><span class="dark_blue_code"> small;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                Esteja ciente de que <span class="code-color"><em>.menu.top</em></span> é diferente de <span class="code-color"><em>.menu .top</em></span> (com um espaço entre as palavras). O primeiro seletor afetará os elementos que têm ambas as classes <span class="code-color"><em>menu</em></span> e <span class="code-color"><em>top</em></span>, enquanto o segundo afeta os elementos que têm a classe top e um elemento pai com a classe <span class="code-color"><em>menu</em></span>.
                </p>
                <br>
                <p class="Subtopico"><strong>Seletores especiais</strong></p>
                <p class="Texto">
                Os seletores CSS também podem fazer referência a estados dinâmicos de elementos. Esses seletores são particularmente úteis para elementos interativos, como hiperlinks. Podemos querer alterar a aparência dos hiperlinks quando o ponteiro do mouse se move sobre eles, para chamar a atenção do visitante.
                </p>
                <p class="Texto">
                De volta à página de exemplo, poderíamos remover os sublinhados dos links no menu superior e exibir uma linha apenas quando o ponteiro do mouse se movesse sobre o link correspondente. Para fazer isso, primeiro escrevemos uma regra para remover o sublinhado dos links no menu superior:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>.menu.top a</strong></span>{
    <span class="blue-code">text-decoration:</span><span class="dark_blue_code"> none;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                Em seguida, usamos a pseudoclasse <span class="code-color"><em>:hover</em></span> nesses mesmos elementos para criar uma regra de CSS a
                ser aplicada somente quando o ponteiro do mouse estiver sobre o elemento correspondente:
                </p>
                <br>
                <div class="typewriter-small" style="width: 60%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
                    <pre><code class="Texto">
<span class="code-color"><strong>.menu.top a</strong></span><span style="color: #797979;">:hover</span>{
    <span class="blue-code">text-decoration:</span><span class="dark_blue_code"> underline;</span>
}
</code></pre>
</div>
<br>
                <p class="Texto">
                O seletor de pseudoclasse <span class="code-color"><em>:hover</em></span> aceita todas as propriedades CSS das regras de CSS convencionais.
                Outras pseudoclasses são <span class="code-color"><em>:visited</em></span>, que corresponde aos hiperlinks já visitados, e <span class="code-color"><em>:focus</em></span>, que corresponde aos elementos do formulário que estão em foco.
                </p>
                <a href="topico033-3.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"><span class="tooltip">Próximo!</span></a>
            </div>
        </div>
    </div>
    

    <?php include('../../layouts/footer.php') ?>
</body>
</html>