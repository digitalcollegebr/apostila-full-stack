<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários HTML</title>
</head>
<body>
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
                <p class="Titulo">Formulários  HTML</p>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <p class="Texto">Os formulários web são uma maneira simples e eficiente de solicitar informações ao visitante de uma página HTML. O desenvolvedor front-end pode usar diversos componentes, como campos de texto, caixas de seleção, botões e muitos outros para construir interfaces que enviam dados ao servidor de forma estruturada.</p>
                <p class="Subtopico"><strong>Formulários HTML simples</strong></p>
                <p class="Texto">Antes de falar do código de marcação específico para formulários, vamos começar com um documento HTML simples em branco, sem nenhum conteúdo no corpo:</p>
                <br>
                <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>Working with HTML Forms<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class=".C_inicializeted">&lt;!-- The body content goes here --&gt;</span>
  
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">Salve esse código de exemplo como um arquivo de texto simples com a extensão <span class="code-color"><em>.html</em></span> (por exemplo, <em>form.html</em>) e use seu navegador favorito para abri-lo. Após alterá-lo, pressione o botão de recarregar no navegador para exibir as modificações.</p>
            <p class="Texto">A estrutura básica do formulário é dada pela própria tag <span class="code-color"><strong>&lt;form&gt;</strong></span> e seus elementos internos:</p>
            <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>Working with HTML Forms<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class=".C_inicializeted">&lt;!--  Form to collect personal information --&gt;</span>

    <span class="code-color"><strong>&lt;form&gt;</strong></span>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Personal Information<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span>Nome completo:<span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"text"</span><span class="blue-code">name=</span><span class="orange-color">"fullname"</span><span class="blue-code">id=</span><span class="orange-color">"fullname"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"reset"</span><span class="blue-code">value=</span><span class="orange-color">"Clear form"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"submit"</span><span class="blue-code">value=</span><span class="orange-color">"Submit form"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>


    <span class="code-color"><strong>&lt;/form&gt;</strong></span>
  
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">As aspas duplas não são obrigatórias para atributos de palavra única como <span class="code-color"><em>type</em></span>, portanto <span class="code-color"><em>type=text</em></span>funciona tão bem quanto <span class="code-color"><em>type="text"</em></span>. O desenvolvedor pode escolher a convenção que prefere usar.</p>
            <p class="Texto">Salve o novo conteúdo e recarregue a página no navegador. Você deverá ver o resultado mostrado <em>Figure 23</em>.</p>
            <br>
            <div class="image-content"><img src="../../assets/img/figure23.png" alt="Código" class="img-fluid">
            </div>
            <p><em>Figure 23. Um formulário bem básico</em></p>
            <p class="Texto">A tag <strong>&lt;form&gt;</strong> em si não produz nenhum resultado perceptível na página. Os elementos dentro das
            tags <span class="code-color"><strong>&lt;form&gt;</strong></span><strong>…</strong><span class="code-color"><strong>&lt;/form&gt;</strong></span> definirão os campos e outros auxílios visuais mostrados ao visitante.</p>
            <p class="Texto">O código de exemplo contém tanto as tags gerais do HTML (<strong>&lt;h2&gt;</strong> e <strong>&lt;p&gt;</strong>) quanto a tag <span class="code-color"><strong>&lt;input&gt;</strong></span>, que é específica aos formulários. Ao passo que as tags gerais podem aparecer em qualquer lugar do documento, as tags específicas aos formulários devem ser usadas <strong>somente</strong> dentro do elemento <strong>&lt;form&gt;</strong>; isto é, entre a tag de abertura <strong>&lt;form&gt;</strong> e a de fechamento <strong>&lt;/form&gt;</strong>.</p>
            <br>
            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                        <div class="Caixa TituloExemplo">
                            <i class="fa-regular fa-pen-to-square"></i> 
                                NOTE 
                        </div>
                        <div class="CaixaConteudo ConteudoExemplo">
                            <p class="Texto">O HTML inclui apenas as tags e propriedades básicas para modificar a aparência padrão dos formulários. O CSS fornece mecanismos elaborados para modificar a aparência do formulário e, portanto, a recomendação é escrever um código HTML incluindo apenas os aspectos funcionais do formulário, modificando sua aparência com o CSS.</p>
                        </div>
                    </div>
                <br>
                <p class="Texto">Como mostrado no exemplo, a tag de parágrafo <strong>&lt;p&gt;</strong> pode ser usada para descrever o campo para o visitante. No entanto, não há uma maneira óbvia de o navegador relacionar a descrição na tag <p> com o elemento correspondente de inserção de dados. A tag <span class="code-color"><strong>&lt;label&gt;</strong></span> é mais apropriada nesses casos (a partir de agora, considere todos os exemplos de código como estando dentro do corpo do documento HTML):</p>
                <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
  <span class="red-color"><strong>&lt;!DOCTYPE html&gt;</strong></span>
<span class="code-color"><strong>&lt;html</strong></span> <span class="blue-code">lang=</span> <span class="blue-color">"en"</span><span class="code-color"><strong>&gt;</strong></span>
  <span class="code-color"><strong>&lt;head&gt;</strong></span>
  <span class="code-color"><strong>&lt;meta</strong></span><span class="blue-code">charset=</span><span class="orange-color">"utf-8"</span>
    <span class="code-color"><strong>&lt;title&gt;</strong></span>Working with HTML Forms<span class="code-color"><strong>&lt;/title&gt;</strong></span>
  <span class="code-color"><strong>&lt;/head&gt;</strong></span>
  <span class="code-color"><strong>&lt;body&gt;</strong></span>
  <span class=".C_inicializeted">&lt;!-- The body content goes here --&gt;</span>
  
  <span class="code-color"><strong>&lt;/body&gt;</strong></span>
<span class="code-color"><strong>&lt;/html&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">Salve esse código de exemplo como um arquivo de texto simples com a extensão <span class="code-color"><em>.html</em></span> (por exemplo, <em>form.html</em>) e use seu navegador favorito para abri-lo. Após alterá-lo, pressione o botão de recarregar no navegador para exibir as modificações.</p>
            <p class="Texto">A estrutura básica do formulário é dada pela própria tag <span class="code-color"><strong>&lt;form&gt;</strong></span> e seus elementos internos:</p>
            <div style class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
    <span class="code-color"><strong>&lt;form&gt;</strong></span>
        <span class="code-color"><strong>&lt;h2&gt;</strong></span>Personal Information<span class="code-color"><strong>&lt;/h2&gt;</strong></span>
        <span class="code-color"><strong>&lt;label</strong></span><span class="code-color"><strong>&gt;</strong></span>Nome completo:<span class="code-color"><strong>&lt;/label&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"text"</span><span class="blue-code">name=</span><span class="orange-color">"fullname"</span><span class="blue-code">id=</span><span class="orange-color">"fullname"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"reset"</span><span class="blue-code">value=</span><span class="orange-color">"Clear form"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>
        <span class="code-color"><strong>&lt;p&gt;</strong></span><span class="code-color"><strong>&lt;input</strong></span><span class="blue-code">type=</span><span class="orange-color">"submit"</span><span class="blue-code">value=</span><span class="orange-color">"Submit form"</span><span class="code-color"><strong>&gt;</strong></span><span class="code-color"><strong>&lt;/p&gt;</strong></span>

    <span class="code-color"><strong>&lt;/form&gt;</strong></span>
    </pre></code>
  </div>
            <p class="Texto">O atributo <span class="code-color"><em>for</em></span> na tag <span class="code-color"><strong>label</strong></span> contém o <em>id</em> do elemento de inserção de dados correspondente. Isso torna a página mais acessível, pois os leitores de tela serão capazes de narrar o conteúdo do elemento de rótulo (label) quando o elemento de inserção de dados estiver selecionado. Além disso, os visitantes podem clicar no rótulo para selecionar o campo de inserção de dados correspondente.</p>
            <p class="Texto">O atributo <em>id</em> nos elementos de formulário tem o mesmo papel que em qualquer outro elemento do documento. Ele fornece um identificador exclusivo para o elemento. O atributo name tem uma finalidade semelhante, mas é usado para identificar o elemento de inserção de dados no contexto do formulário. O navegador usa o atributo <em>name</em> para identificar o campo de inserção de dados ao enviar os dados do formulário para o servidor, por isso é importante usar atributos <em>name</em> significativos e exclusivos dentro do formulário.</p>
            <p class="Texto">O atributo <span class="code-color"><em>type</em></span> é o principal atributo do elemento de entrada de dados, <strong>pois controla o tipo de dados que o elemento aceita e sua apresentação visual ao visitante</strong>. Se o atributo type não for fornecido, por padrão é exibida uma caixa de texto. Os seguintes tipos de campos de entrada de dados são suportados pelos navegadores modernos:</p>
            <p><em>Table 1. Tipos de entrada em formulários</em></p>
            <table border="1" cellpadding="10">
                <thead>
                  <tr>
                    <th>Atributo do tipo</th>
                    <th>Tipo de dados</th>
                    <th>Como é exibido</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>hidden</td>
                    <td>Uma string arbitrária</td>
                    <td>N/A</td>
                  </tr>
                  <tr>
                    <td>text</td>
                    <td>Texto sem quebra de linhas</td>
                    <td>Um controle de texto</td>
                  </tr>
                  <tr>
                    <td>search</td>
                    <td>Texto sem quebra de linhas</td>
                    <td>Um controle de pesquisa</td>
                  </tr>
                  <tr>
                    <td>tel</td>
                    <td>Texto sem quebra de linhas</td>
                    <td>Um controle de texto</td>
                  </tr>
                  <tr>
                    <td>url</td>
                    <td>Uma URL absoluta</td>
                    <td>Um controle de texto</td>
                  </tr>
                  <tr>
                    <td>email</td>
                    <td>Um endereço de email ou lista de endereços de email</td>
                    <td>Um controle de texto</td>
                  </tr>
                  <tr>
                    <td>password</td>
                    <td>Texto sem quebra de linhas (informação confidencial)</td>
                    <td>Um controle de texto que oculta a inserção de dados</td>
                  </tr>
                  <tr>
                    <td>date</td>
                    <td>Uma data (ano, mês, dia) sem fuso horário</td>
                    <td>Um controle de data</td>
                  </tr>
                  <tr>
                    <td>month</td>
                    <td>Uma data que consiste em um ano e um mês sem fuso horário</td>
                    <td>Um controle de mês</td>
                  </tr>
                  <tr>
                    <td>week</td>
                    <td>Uma data que consiste em um número de semana-ano e um número de semana sem fuso horário</td>
                    <td>Um controle de semana</td>
                  </tr>
                  <tr>
                    <td>time</td>
                    <td>Um horário (hora, minuto, segundos, frações de segundo) sem fuso horário</td>
                    <td>Um controle de horário</td>
                  </tr>
                  <tr>
                    <td>datetime-local</td>
                    <td>Uma data e hora (ano, mês, dia, hora, minuto, segundos, frações de segundo) sem fuso horário</td>
                    <td>Um controle de data e hora</td>
                  </tr>
                  <tr>
                    <td>number</td>
                    <td>Um valor numérico</td>
                    <td>Um controle de texto ou controle giratório</td>
                  </tr>
                  <tr>
                    <td>range</td>
                    <td>Um valor numérico, com a semântica extra de que o valor exato não é importante</td>
                    <td>Um controle deslizante ou semelhante</td>
                  </tr>
                  <tr>
                    <td>color</td>
                    <td>Uma cor sRGB com componentes vermelhos, verdes e azuis de 8 bits</td>
                    <td>Um seletor de cores</td>
                  </tr>
                  <tr>
                    <td>checkbox</td>
                    <td>Um conjunto de zero ou mais valores em uma lista predefinida</td>
                    <td>Uma caixa de seleção (oferece opções e permite a seleção de múltiplas opções)</td>
                  </tr>
                  <tr>
                    <td>radio</td>
                    <td>Um valor enumerado</td>
                    <td>Um botão de opção (oferece opções e permite que apenas uma seja selecionada)</td>
                  </tr>
                  <tr>
                    <td>file</td>
                    <td>Zero ou mais arquivos, cada um deles com um tipo MIME e nome de arquivo opcional</td>
                    <td>Um rótulo e um botão</td>
                  </tr>
                  <tr>
                    <td>submit</td>
                    <td>Um valor enumerado que encerra o processo de entrada de dados e envia o formulário</td>
                    <td>Um botão</td>
                  </tr>
                  <tr>
                    <td>image</td>
                    <td>Uma coordenada relativa ao tamanho de uma imagem em particular, que finaliza o processo e envia o formulário</td>
                    <td>Uma imagem clicável ou um botão</td>
                  </tr>
                  <tr>
                    <td>button</td>
                    <td>N/A</td>
                    <td>Um botão genérico</td>
                  </tr>
                  <tr>
                    <td>reset</td>
                    <td>N/A</td>
                    <td>Um botão cuja função é restaurar todos os outros campos aos seus valores iniciais</td>
                  </tr>
                </tbody>
              </table>
              <p class="Texto">A aparência dos tipos de entrada <span class="code-color"><em>password</em></span>, <span class="code-color"><em>search</em></span>, <span class="code-color"><em>tel</em></span>, <span class="code-color"><em>url</em></span> e <span class="code-color"><em>email</em></span> é idêntica à do tipo text padrão. Sua finalidade é oferecer indicações ao navegador sobre o conteúdo esperado para esse campo de entrada de dados, de modo que o navegador ou o script em execução no lado do cliente possa realizar ações personalizadas para um tipo de entrada específico. A única diferença entre o tipo de entrada de texto e o tipo de campo de senha, por exemplo, é que o conteúdo do campo de senha <strong>não</strong> é exibido conforme o visitante digita sua senha. Nos dispositivos com tela de toque, nos quais o texto é digitado em um teclado virtual, o navegador pode exibir apenas o teclado numérico quando uma entrada do tipo <span class="code-color"><em>tel</em></span> é selecionada. Outra ação possível é sugerir uma lista de endereços de email conhecidos quando uma entrada do tipo email está no foco.</p>
              <p class="Texto">O tipo <span class="code-color"><em>number</em></span> também aparece como uma entrada de texto simples, mas com setas de aumentar/diminuir ao lado. Seu uso fará com que o teclado numérico apareça nos dispositivos com tela de toque quando o campo estiver selecionado.</p>
              <p class="Texto">Os outros elementos de inserção de dados têm sua própria aparência e comportamento. O tipo date, por exemplo, é representado de acordo com as configurações locais de formato de data e um calendário é exibido quando o campo está no foco:</p>
              <div class="typewriter-small" style="width: 50%; text-align: left;">
  <pre><code>
    <span class="code-color"><strong>&lt;form&gt;</strong></span>
      <span class="code-color"><strong>&lt;p&gt;</strong></span>
        <span class="code-color"><strong>&lt;label</strong></span><span class="blue-code"> for= </span><span class="orange-code">"date"</span><span class="code-color"><strong>&gt;</strong></span> Date:<span class="code-color"><strong>&lt;/label&gt;</strong>
        <span class="code-color"><strong>&lt;input</strong></span><span class="blue-code"> type=</span><span class="orange-code">"date"</span><span class="blue-code">name=</span><span class="orange-color">"date" </span><span class="blue-code">id= </span><span class="orange-code">"date"</span><span class="code-code"><strong>&lt;/p&gt;</strong></span>

    <span class="code-color"><strong>&lt;/form&gt;</strong></span>
    </pre></code>
  </div>


            

            </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade04.php" class="button-prox"><img src="../../assets/img/arrow-circle-right.png" alt="" class="next"></a>
    <br><br>
    <?php include('../../layouts/footer.php') ?>
</body>
</html>