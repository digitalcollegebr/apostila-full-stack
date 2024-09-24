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
                <div style class="typewriter-small" style="align-items: center; display: flex; justify-content: center;">
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
  <span class="code-color"><strong>&lt;/div&gt;</strong></span><span class="code-color">&lt;!-- #second --&gt;</span>
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
            <div style class="typewriter-small" style="align-items: center; display: flex; justify-content: center;">
              <pre><code class="Texto">
<span class="code-color"><strong>* </strong></span>* {
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
              <img src="../../assets/img/figure35" alt="Código" class="img-fluid">
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
                <div style class="typewriter-small" style="align-items: center; display: flex; justify-content: center;">
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
            <div class="image-content">
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

            </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade08.php" class="button-prox-atv"><img src="../../assets/img/arrow-circle-right (2).png" alt="" class="next"></a>

    <?php include('../../layouts/footer.php') ?>
</body>
</html>