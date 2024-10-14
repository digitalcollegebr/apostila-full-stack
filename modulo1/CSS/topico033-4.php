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
                <p class="Titulo">033.4 - Layout e modelo de caixa com CSS</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">
                Cada um dos elementos visíveis em um documento HTML é renderizado como uma caixa retangular. Assim, o termo <em>modelo de caixa</em> descreve o método usado pelo CSS para modificar as propriedades visuais dos elementos. Como caixas de tamanhos diferentes, os elementos HTML podem ser aninhados dentro de elementos <em>contêiner</em> — normalmente o elemento <span class="code-color"><em>div</em></span> — e em seguida separados em seções.
                </p>
                <p class="Texto">
                Com o CSS, é possível modificar a posição das caixas, desde pequenos ajustes até mudanças drásticas na disposição dos elementos na página. Além do fluxo normal, a posição de cada caixa pode se basear nos elementos que a rodeiam, seja em seu relacionamento com o contêiner pai ou com a <em>janela de visualização</em>, que é a área da página visível para o usuário. Nenhum mecanismo atende a todos os requisitos de layout possíveis, então costuma ser necessário usar uma combinação deles.
                </p>
                <p class="Subtopico"><strong>Fluxo normal</strong></p>
                <p class="Texto">
                A forma padrão como o navegador renderiza a árvore do documento é chamada de <em>fluxo normal</em>. Os retângulos correspondentes aos elementos são postos mais ou menos na mesma ordem em que aparecem na árvore do documento em relação aos seus elementos pais. No entanto, dependendo do tipo de elemento, a caixa correspondente pode seguir regras de posicionamento distintas.
                </p>
                <p class="Texto">Uma boa maneira de entender a lógica do fluxo normal é tornar as caixas visíveis. Podemos começar com uma página bem básica contendo apenas três elementos div separados, cada um com um parágrafo de texto aleatório:</p>
                <br>
                <div  class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
  <pre><code class="Texto">
<span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span><span class="orange-code">"pt"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;head&gt;</strong></span>
 <span class="code-color"><strong>&lt;title&gt;</strong></span>Layout e modelo de caixa com CSS<span class="code-color"><strong>&lt;/title&gt;</strong></span>
 <span class="code-color"><strong>&lt;link</strong></span> <span class="blue-code">rel=</span><span class="orange-code">"stylesheet"</span> <span class="blue-code">href=</span><span class="orange-code">"style.css"</span>
 <span class="code-color"><strong>&lt;/head&gt;</strong></span>
 <span class="code-color"><strong>&lt;body&gt;</strong></span>
 <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"first"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Primeira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Sed <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>velit <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>id <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ante <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>tempus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>porta <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>pulvinar <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>et <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>ex. <span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #first --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"second"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Segunda div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Fusce <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vitae <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vehicula <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>neque. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Etiam <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>maximus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>neque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eu <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>lobortis. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Phasellus <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>condimentum,<span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>felis <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eleifend <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>aliquam,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dui <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dolor <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>bibendum <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>leo.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #second --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"third"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Terceira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Pellentesque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ornare <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ultricies <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>elementum.<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Morbi <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>pretium <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>arcu,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>sed <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>faucibus.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #third --&gt;</span>
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
</code></pre>
</div>
<br>
            <p class="Texto">
            Cada palavra está em um elemento span para que possamos estilizá-las e constatar que são tratadas como caixas também. Para tornar as caixas visíveis, precisamos editar o arquivo de folha de estilo <span class="code-color"><em>style.css</em></span> referenciado pelo documento HTML. As seguintes regras fazem esse trabalho:
            </p>
            <br>
            <div class="typewriter-small" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="code-color"><strong>* </strong></span> {
    <span class="blue-code">font-family:</span> <span class="dark_blue_code">sans</span>;
    <span class="blue-code">font-size:</span> <span class="blue_dark_code"><strong>14pt</strong></span>;
}

<span class="code-color"><strong>div</strong></span> {
    <span class="blue-code">border</span>: <span class="dark_blue_code"><strong>2px</strong></span> <span class="dark_blue_code">solid</span> <span class="dark_blue_code"><strong>#00000044</strong></span>;
}

<span class="blue-code"><strong>#first</strong></span> {
    <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#c4a000ff</strong></span>;
}

<span class="blue-code"><strong>#second</strong></span> {
    <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#4e9a06ff</strong></span>;
}

<span class="blue-code"><strong>#third</strong></span> {
    <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#5c3566da</strong></span>;
}

<span class="code-color"><strong>h2 </strong></span>{
    <span class="blue-code">background-color: </span><span class="dark_blue_code"><strong>#ffffff66</strong></span>
}

<span class="code-color"><strong>p </strong></span>{
    <span class="blue-code">background-color: </span><span class="dark_blue_code"><strong>#ffffff66</strong></span>
}

<span class="code-color"><strong>span </strong></span>{
    <span class="blue-code">background-color: </span><span class="dark_blue_code"><strong>#ffffffaa</strong></span>
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
              O resultado aparece na <em>Figure 35.</em>
            </p>
            <br>
            <div class="image-content">
              <img src="../../assets/img/figure35.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figure 35. O fluxo de elementos básico é de cima para baixo e da esquerda para a direita.</em></p>
            <br>
            <p class="Texto">
            A <em>Figure 35</em> mostra que cada tag HTML tem uma caixa correspondente no layout. Os elementos <span class="code-color"><em>div</em></span>, <span class="code-color"><em>h2</em></span> e <span class="code-color"><em>p</em></span> se estendem até a largura do corpo, ao passo que o pai de cada elemento h2 e p é o div correspondente. As caixas que se estendem pela largura de seu elemento pai são chamadas elementos de <em>bloco</em>. Algumas das tags HTML mais comuns representadas como blocos são <span class="code-color"><em>h1</em></span>, <span class="code-color"><em>h2</em></span>, <span class="code-color"><em>h3</em></span>, <span class="code-color"><em>p</em></span>, <span class="code-color"><em>ul</em></span>, <span class="code-color"><em>ol</em></span>, <span class="code-color"><em>table</em></span>, <span class="code-color"><em>li</em></span>, <span class="code-color"><em>div</em></span>, <sapn class="code-color"><em>section</em></sapn>, <span class="code-color"><em>form</em></span> e <span class="code-color"><em>aside</em></span>. Elementos de bloco irmãos — ou seja, que compartilham o mesmo elemento pai imediato — são empilhados dentro do pai, de cima para baixo.
            </p>
            <br>
            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                          <p class="Texto">Alguns elementos de bloco não se destinam a ser usados como contêineres para outros elementos de bloco. É possível, por exemplo, inserir um elemento de bloco dentro de um elemento h1 ou p, mas isso não é muito aconselhável. Em vez disso, é melhor usar uma tag apropriada como contêiner. As tags de contêiner mais comuns são div, section e aside.</p>
                        </div>
            </div>
                <br>
                <p class="Texto">
                Além do texto em si, elementos como <span class="code-color"><em>h1</em></span>, <span class="code-color"><em>p</em></span> e <span class="code-color"><em>li</em></span> esperam conter apenas elementos <em>de linha</em> como filhos. Como a maioria dos modos de escrita ocidentais, os elementos de linha seguem o fluxo de texto da esquerda para a direita. Quando não há espaço restante no lado direito, o fluxo de elementos de linha continua na linha seguinte, assim como o texto. Algumas tags HTML comuns tratadas como caixas de linha são <span class="code-color"><em>span</em></span>, <span class="code-color"><em>a</em></span>, <span class="code-color"><em>em</em></span>, <span class="code-color"><em>strong</em></span>, <span class="code-color"><em>img</em></span>, <span class="code-color"><em>input</em></span> e <span class="code-color"><em>label</em></span>.
                </p>
                <br>
                <p class="Texto">
                Em nossa página HTML de exemplo, todas as palavras dentro dos parágrafos foram circundadas por uma tag <span class="code-color"><em>span</em></span>, para que pudessem ser destacadas com uma regra CSS correspondente. Como mostrado na imagem, cada elemento span é posicionado horizontalmente da esquerda para a direita até que não haja mais espaço no elemento pai.
                </p>
                <p class="Texto">
                A altura do elemento depende de seu conteúdo. Portanto, o navegador ajusta a altura de um elemento de contêiner de forma a acomodar os elementos de bloco aninhados ou as linhas dos elementos de linha. No entanto, algumas propriedades CSS afetam a forma de uma caixa, sua posição e o posicionamento de seus elementos internos.
                </p>
                <p class="Texto">
                As propriedades <span class="code-color"><em>margin</em></span> e <span class="code-color"><em>padding</em></span> afetam todos os tipos de caixa. Se você não definir essas propriedades explicitamente, o navegador definirá algumas delas usando valores padrão. Conforme visto na <em>Figure 35</em>, os elementos h2 e p foram exibidos com um espacinho entre eles. Essas lacunas são as margens superior e inferior que o navegador adiciona por padrão a esses elementos. Podemos removê-las modificando as regras de CSS para os seletores h2 e p:
                </p>
                <div class="typewriter-small" style="width: 70%;" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="code-color"><strong>h2 </strong></span>{
  <span class="blue-code">background-color: </span><span class="dark_blue_code"><strong>#ffffff66</strong></span>
  <span class="blue-code">margin: </span><span class="dark_blue_code"><strong>0</strong></span>;
}

<span class="code-color"><strong>p </strong></span>{
  <span class="blue-code">background-color: </span><span class="dark_blue_code"><strong>#ffffff66</strong></span>
  <span class="blue-code">margin: </span><span class="dark_blue_code"><strong>0</strong></span>;
}

</pre></code>
            </div>
            <br>
            <p class="Texto">
            O resultado aparece na <em>Figure 36</em>.
            </p>
            <br>
            <div class="image-content" style="width: 100%px;">
              <img src="../../assets/img/figure36.png" alt="Código" class="img fluid">
            </div>
            <br>
            <p><em>Figure 36. A propriedade margin permite alterar ou remover margens de elementos</em></p>
            <p class="Texto">
            O elemento <span class="code-color"><em>body</em></span>, por padrão, também inclui uma pequena margem que cria um espacinho ao redor
            dele. Essa lacuna também pode ser removida usando a propriedade <span class="code-color"><em>margin</em></span>.
            </p>
            <p class="Texto">
            Enquanto a propriedade margin (margem) define o espaço entre o elemento e seus arredores, a propriedade padding (preenchimento) do elemento define o espaço interno entre os limites do contêiner e seus elementos filhos. Considere os elementos h2 e p dentro de cada div em nosso código, por exemplo. Poderíamos usar a propriedade de margem deles para criar um espaço nas bordas do div correspondente, mas é mais simples alterar a propriedade padding do contêiner:
            </p>
            <div class="typewriter-small" style="width: 60%;"  id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#second</strong></span> {
  <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#4e9a06ff</strong></span>;
  <span class="blue-code">padding:</span> <span class="dark_blue_code"><strong>1em</strong></span>;
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            Apenas a regra para o segundo div foi modificada, por isso os resultados (<em>Figure 37</em>) mostram a
            diferença entre o segundo <span class="code-color"><em>div</em></span> e os outros contêineres <span class="code-color"><em>div</em></span>.
            </p>
            <br>
            <div class="image-content">
              <img src="../../assets/img/figure37.png" alt="Código">
            </div>
            <br>
            <p><em>Figure 37. Contêiners div diferentes podem ter diferentes preenchimentos.</em></p>
            <br>
            <p class="Texto">
            A propriedade margin é uma abreviatura para quatro propriedades que controlam os quatro lados da caixa: <span class="code-color"><em>margin-top</em></span>, <span class="code-color"><em>margin-right</em></span>, <span class="code-color"><em>margin-bottom</em></span> e <span class="code-color"><em>margin-left</em></span>. Quando um único valor é atribuído a margin, como nos exemplos que vimos até agora, ele é aplicado nas quatro margens da caixa. Quando dois valores são escritos, o primeiro define as margens superior e inferior e o segundo, as margens direita e esquerda. A instrução <span class="code-color"><em>margin: 1em 2em</em></span>, por exemplo, define um espaço de 1 em para as margens superior e inferior e um espaço de 2 em para as margens direita e esquerda. Escrevemos quatro valores para definir as margens dos quatro lados em sentido horário, começando no topo. Os diferentes valores na propriedade abreviada não precisam usar as mesmas unidades.
            </p>
            <p class="Texto">
            A propriedade <span class="code-color"><em>padding</em></span> também é uma abreviatura e segue os mesmos princípios da propriedade
            <span class="code-color"><em>margin</em></span>.
            </p>
            <p class="Texto">
            Em seu comportamento padrão, os elementos de bloco são esticados para se ajustar à largura disponível. Mas isso não é obrigatório. A propriedade <span class="code-color"><em>width</em></span> define um tamanho horizontal fixo para a caixa:
            </p>
            <br>
            <div class="typewriter-small" style="width: 60%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#first</strong></span> {
  <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#c4a000ff</strong></span>;
  <span class="blue code">width: </span> <span class="dark_blue_code"><strong>6em</strong></span>;
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            O acréscimo de <span class="code-color"><em>width: 6em</em></span> à regra de CSS encolhe o primeiro div horizontalmente, deixando um espaço em branco à direita dele (<em>Figure 38</em>).
            </p>
            <br>
            <div class="img-content">
              <img src="../../assets/img/figure38.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figure 38. A propriedade width altera a largura horizontal do primeiro div</em></p>
            <br>
            <p class="Texto">
            Em vez de deixar o primeiro <span class="code-color"><em>div</em></span> alinhado à esquerda, vamos centralizá-lo. Centralizar uma caixa é equivalente a definir margens do mesmo tamanho em ambos os lados; assim, podemos usar a propriedade de margem para centralizá-la. O tamanho do espaço disponível costuma variar, por isso usamos o valor <span class="code-color"><em>auto</em></span> para as margens esquerda e direita:
            </p>
            <div class="typewriter-small" style="width: 60%;"  id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#first</strong></span> {
  <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#c4a000ff</strong></span>;
  <span class="blue code">width: </span> <span class="dark_blue_code"><strong>6em</strong></span>;
  <span class="blue-code">margin: </span><span class="dark_blue_code"><strong>0</strong></span> <span class="blue-code">auto</span>
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            As margens esquerda e direita são calculadas automaticamente pelo navegador e a caixa é  centralizada (<em>Figure 39</em>).
            </p>
            <br>
            <p><em>Figure 39. A propriedade margin é usada para centralizar o primeiro div.</em></p>
            <br>
            <p class="Texto">Como é fácil constatar, ao tornar um elemento de bloco mais estreito, não abrimos mais espaço para o elemento seguinte. O fluxo natural é preservado, como se o elemento mais estreito ainda ocupasse toda a largura disponível.</p>
            <br>
            <p class="Subtopico"><strong>Personalizando o fluxo normal</strong></p>
            <p class="Texto">
            O fluxo normal é simples e sequencial. O CSS também permite interromper o fluxo normal e posicionar elementos de maneiras bastante específicas, até mesmo neutralizando a rolagem da página, se desejado. Veremos várias maneiras de controlar o posicionamento dos elementos nesta seção.
            </p>
            <div class="typewriter-small" style="width: 60%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#first</strong></span> {
  <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#c4a000ff</strong></span>;
  <span class="blue-code">width: </span> <span class="dark_blue_code"><strong>6em</strong></span>;
  <span class="blue-code">float: </span><span class="dark_blue_code">right</span>
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            As margens automáticas são ignoradas em uma caixa flutuante, de modo que a propriedade margin pode ser removida. A Figure 40 mostra o resultado da flutuação à direita do primeiro div.
            </p>
            <br>
            <p class="Texto">
            Por padrão, todos os elementos de bloco que vêm após o elemento flutuante ficarão abaixo dele. Portanto, se a altura for suficiente, a caixa flutuante cobrirá todos os elementos de bloco restantes.
            </p>
            <p class="Texto">
            Embora um elemento flutuante fique acima dos outros elementos de bloco, o conteúdo de linha dentro do contêiner do elemento flutuante se ajusta em torno do elemento flutuante. A inspiração para isso vem do layout de revistas e jornais, que muitas vezes ajustam o texto em torno de uma imagem, por exemplo.
            </p>
            <p class="Texto">
            A imagem anterior mostra como o primeiro div cobre o segundo div e parte do terceiro div. Vamos supor que queremos que o primeiro div flutue sobre o segundo div, mas não sobre o terceiro. A solução é incluir a propriedade clear na regra CSS correspondente a terceira div:
            </p>
            <br>
            <div class="typewriter-small" style="width: 60%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#third</strong></span> {
  <span class="blue-code">background-color:</span> <span class="dark_blue_code"> <strong>#5c3566da</strong></span>;
  <span class="blue-code">clear: </span> <span class="dark_blue_code">right</span>;
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            Ao definir a propriedade <span class="code-color"><em>clear</em></span> como <span class="code-color"><em>right</em></span>, o elemento correspondente pula os elementos anteriores que flutuam à direita, retomando o fluxo normal <em>(Figure 41)</em>.
            </p>
            <br>
            <div class="image-content">
              <img src="../../assets/img/figure41.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figure 41. Usamos a propriedade clear para retornar ao fluxo normal.</em></p>
            <p class="Texto">Da mesma forma, se um elemento anterior estiver flutuando à esquerda, usamos <span class="code-color"><em>clear: left</em></span> para
            retomar o fluxo normal. Se for preciso pular elementos flutuantes à esquerda e à direita, usamos <span class="code-color"><em>clear: both</em></span>.</p>
            <br>
            <p class="Subtopico"><strong>Posicionamentp das caixas</strong></p>
            <p class="Texto">
           No fluxo normal, cada caixa segue as caixas anteriores na árvore do documento. Os elementos irmãos anteriores “empurram” os elementos que vêm depois deles, movendo-os para a direita e para baixo dentro de seu elemento pai. O elemento pai pode ter seus próprios irmãos fazendo o mesmo com ele. É como colocar azulejos lado a lado em uma parede, começando pelo topo.
            </p>
            <p class="Texto">
            Esse método de posicionamento das caixas é denominado <em>estático</em> e é o valor padrão da propriedade <span class="code-color"><em>position</em></span> do CSS. Além de definir margens e preenchimento, não há como reposicionar uma caixa estática na página.
            </p>
            <p class="Texto">
            Como os azulejos na analogia da parede, o posicionamento estático não é obrigatório. Como no caso dos azulejos, as caixas podem ser postas em qualquer lugar, inclusive cobrindo outras caixas. Para isso, atribua a propriedade <span class="code-color"><em>position</em></span> a um dos seguintes valores:
            </p>
            <div class="typewriter-small">
                <span class="code-color"><strong>relative</strong></span><p class="Texto">O elemento segue o fluxo normal do documento, mas pode usar as propriedades top, right, bottom e left para definir deslocamentos relativos à sua posição estática original. Os deslocamentos também podem ser negativos. Os outros elementos permanecem em seus lugares originais, como se o elemento relativo ainda fosse estático.</p>
                </div>
                <div class="typewriter-small">
                    <span class="code-color"><strong>absolute</strong></span>
                    <p class="Texto">O elemento ignora o fluxo normal dos outros elementos e se posiciona na página de acordo com as propriedades top, right, bottom e left. Seus valores são relativos ao corpo do documento ou a um contêiner pai não estático.</p>
                </div>
                <div class="typewriter-small">
                    <span class="code-color"><strong>fixed
                    </strong></span>
                    <p class="Texto">O elemento ignora o fluxo normal dos outros elementos e se posiciona de acordo com as propriedades top, right, bottom e left. Seus valores são relativos à janela de visualização (ou seja, a área da tela na qual o documento é exibido). Os elementos fixos não se movem quando o visitante rola o documento, mas agem como um adesivo fixado na tela.</p>
                </div>
                <div class="typewriter-small">
                    <span class="code-color"><strong>sticky</strong></span><p class="Texto">O elemento segue o fluxo normal do documento. No entanto, em vez de sair da janela de visualização quando o documento é rolado, ele se fixa na posição definida pelas propriedades top, right, bottom e left. Se o valor top for 10px, por exemplo, o elemento para de rolar quando atinge 10 pixels a partir do limite superior da janela de visualização. Quando isso acontece, o resto da página continua a rolar, mas o elemento aderente se comporta como um elemento fixo nessa posição. Ele volta à sua posição original quando o documento for rolado de volta na janela de exibição. Os elementos aderentes são comumente usados hoje em dia para criar menus principais sempre visíveis.</p>
                </div>
                <br>
                <p class="Texto">
                Nos posicionamentos que aceitam as propriedades <span class="code-color"><em>top</em></span>, <span class="code-color"><em>right</em></span>, <span class="code-color"><em>bottom</em></span> e <span class="code-color"><em>left</em></span>, não é necessário usar todas elas. Se você definir as propriedades top e height de um elemento absoluto, por exemplo, o navegador calcula implicitamente a propriedade bottom (posição superior + altura = posição inferior).
                </p>
                <p class="Subtopico"><strong>A propriedade display</strong></p>
                <p class="Texto">
                Se a ordem fornecida pelo fluxo normal não for um problema em seu design, mas você quiser alterar a forma como as caixas se alinham na página, modifique a propriedade <span class="code-color"><em>display</em></span> do elemento. A propriedade display pode inclusive fazer o elemento desaparecer completamente do documento renderizado, quando definida como <span class="code-color"><em>display: none</em></span>. Isso é útil quando desejamos exibir o elemento posteriormente usando JavaScript.
                </p>
                <p class="Texto">
                A propriedade <span class="code-color"><em>display</em></span> também pode, por exemplo, fazer com que um elemento de bloco se comporte como um elemento de linha (display: inline). No entanto, não é aconselhável fazer isso. Existem métodos melhores para colocar os elementos do contêiner lado a lado, como o modelo <em>flexbox</em>.
                </p>
                <p class="Texto">
                O modelo flexbox foi inventado para vencer as limitações dos elementos flutuantes e eliminar o uso inadequado de tabelas para estruturar o layout da página. Quando definimos a propriedade display de um elemento de contêiner como flex para transformá-lo em um contêiner flexbox, seus filhos imediatos se comportam mais ou menos como as células de uma linha de tabela.
                </p>
                <br>
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-head-side-virus"></i> 
                        DICA
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                    <p class="Texto">Se quiser ter ainda mais controle sobre o posicionamento dos elementos na página, dê uma olhada no recurso de CSS grid. As grades são um sistema poderoso que emprega linhas e colunas para criar layouts elaborados.</p>
                    </div>
                </div>
                <br>
                <p class="Texto">
                Para testar a exibição flex, adicione um novo elemento <span class="code-color"><em>div</em></span> à página de exemplo e torne-o contêiner
                dos três elementos div existentes:
                </p>
                <br>
                <div class="typewriter-small" id="copycode">
                <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
  <pre><code class="Texto">
<span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span><span class="orange-code">"pt"</span><span class="code-color"><strong>&gt;</strong></span>
<span class="code-color"><strong>&lt;head&gt;</strong></span>
 <span class="code-color"><strong>&lt;title&gt;</strong></span>Layout e modelo de caixa com CSS<span class="code-color"><strong>&lt;/title&gt;</strong></span>
 <span class="code-color"><strong>&lt;link</strong></span> <span class="blue-code">rel=</span><span class="orange-code">"stylesheet"</span> <span class="blue-code">href=</span><span class="orange-code">"style.css"</span>
 <span class="code-color"><strong>&lt;/head&gt;</strong></span>
 <span class="code-color"><strong>&lt;body&gt;</strong></span>
 <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"first"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Primeira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Sed <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>velit <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>id <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ante <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>tempus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>porta <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>pulvinar <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>et <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>ex. <span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #first --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"second"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Segunda div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Fusce <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vitae <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vehicula <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>neque. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Etiam <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>maximus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>neque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eu <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>lobortis. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Phasellus <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>condimentum,<span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>felis <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eleifend <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>aliquam,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dui <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dolor <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>bibendum <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>leo.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #second --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"third"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Terceira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Pellentesque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ornare <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ultricies <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>elementum.<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Morbi <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>pretium <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>arcu,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>sed <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>faucibus.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #third --&gt;</span>
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
</code></pre>
</div>
<br>
            <p class="Texto">
            Cada palavra está em um elemento span para que possamos estilizá-las e constatar que são tratadas como caixas também. Para tornar as caixas visíveis, precisamos editar o arquivo de folha de estilo <span class="code-color"><em>style.css</em></span> referenciado pelo documento HTML. As seguintes regras fazem esse trabalho:
            </p>
            <br>
            <div class="typewriter-small" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
                <span class="code-color"><strong>&lt;div&gt;</strong></span> <span class="blue-code">id=</span><span class="orange-code">"container"</span>
              <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"first"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Primeira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Sed <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>velit <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>id <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ante <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>tempus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>porta <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>pulvinar <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>et <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>ex. <span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #first --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"second"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Segunda div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Fusce <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vitae <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vehicula <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>neque. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Etiam <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>maximus <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>neque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eu <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>lobortis. <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Phasellus <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>condimentum,<span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>felis <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eget <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>eleifend <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>aliquam,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dui <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>dolor <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>bibendum <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>leo.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #second --&gt;</span>
  <span class="code-color"><strong>&lt;div</strong></span> <span class="blue-code">id=</span><span class="orange-code">"third"</span><span class="code-color"><strong>&gt;</strong></span>
    <span class="code-color"><strong>&lt;h2&gt;</strong></span>Terceira div<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
    <span class="code-color"><strong>&lt;p&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>Pellentesque <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ornare <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>ultricies <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>elementum.<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>Morbi <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>vulputate <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>pretium <span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>arcu,<span class="code-color"><strong>&lt;/span&gt;</strong></span> <span class="code-color"><strong>&lt;span&gt;</strong></span>sed <span class="code-color"><strong>&lt;/span&gt;</strong></span>
      <span class="code-color"><strong>&lt;span&gt;</strong></span>faucibus.<span class="code-color"><strong>&lt;/span&gt;</strong></span>
    <span class="code-color"><strong>&lt;/p&gt;</strong></span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #third --&gt;</span>
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span style="color: #797979;">&lt;!-- #container --&gt;</span>
</pre></code>
            </div>
            <br>
            <p class="Texto">
            Adicione a seguinte regra de CSS à folha de estilo para transformar o contêiner div em um contêiner
            flexbox:
            </p>
            <br>
            <div class="typewriter-small" style="width: 70%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                    <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="blue-code"><strong>#container</strong></span> {
  <span class="blue-code">display:</span> <span class="dark_blue_code">flex</span>;
}
</pre></code>
            </div>
            <br>
            <p class="Texto">
            O resultado são os três elementos div internos renderizados lado a lado <em>(Figure 42)</em>.
            </p>
            <div class="image-content">
              <img src="../../assets/img/figure42.png" alt="Código" class="img-fluid">
            </div>
            <br>
            <p><em>Figure 42. O modelo flexbox cria uma grade.</em></p>
            <br>
            <p class="Texto">
            O valor <span class="code-color"><em>inline-flex</em></span> em vez de <span class="code-color"><em>flex</em></span> daria basicamente o mesmo resultado, mas faria com que os
            filhos se comportassem mais como elementos de linha.
            </p>
            <br>
            <p class="Subtopico"><strong>Design Responsivo</strong></p>
            <br>
            <p class="Texto">
            Sabemos que o CSS oferece propriedades para ajustar o tamanho dos elementos e fontes em relação à área de tela disponível. No entanto, você pode querer ir mais longe e usar um design diferente para dispositivos diferentes: por exemplo, sistemas de desktop versus dispositivos com dimensões de tela abaixo de um determinado tamanho. Essa abordagem é chamada de <em>responsive web design</em> (web design responsivo), e o CSS fornece métodos chamados <em>consultas de mídia</em> (media queries) para torná-la possível.
            </p>
            <p class="Texto">
            No exemplo anterior, modificamos o layout da página para colocar os elementos div lado a lado nas colunas. Esse layout é adequado para telas maiores, mas ficaria muito confuso em telas menores. Para resolver esse problema, podemos adicionar à folha de estilo uma consulta de mídia correspondente apenas a telas com pelo menos <span class="code-color"><em>600px</em></span> de largura:
            </p>
            <div class="typewriter-small" style="width: 60%;" id="copycode">
            <button class="copy-btn" onclick="copyCode()">
                        <i class="fas fa-copy"></i>
                        Copiar
            </button>
              <pre><code class="Texto">
<span class="green-code"><strong>@media</strong></span> (min-width: <span class="dark_blue_code"><strong>600px</strong></span>) {
  <span class="blue-code"><strong>#container</strong></strong></span> {
    <span class="blue-code">display:</span> <span class="dark_blue_code">flex</span>;
  }
}
            </pre></code>
            </div>
            <br>
            <p class="Texto">
            As regras de CSS dentro da diretiva <span class="code-color"><em>@media</em></span> serão usadas somente se os critérios entre parênteses forem satisfeitos. Neste exemplo, se a largura da janela de visualização for menor que <span class="code-color"><em>600px</em></span>, a regra não será aplicada ao contêiner div e seus filhos serão exibidos como elementos div convencionais. O navegador reavalia as consultas de mídia sempre que a dimensão da janela de visualização muda, de modo que o layout é alterado em tempo real ao se redimensionar a janela do navegador ou girar o smartphone.
            </p>
            </div>
        </div>
    </div>
    <a href="../../modulo3/JavaScript/topico034-1.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"></a>

    <?php include('../../layouts/footer.php') ?>
</body>
</html>