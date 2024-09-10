
<?php include '../../layouts/header.php'; ?>



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


    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <!-- Titulo -->
                <p class="Titulo">Marcação de documentos HTML</p>
                <br>
                <p class="Subtopico"><strong>Introdução</strong></p>
                <!-- Texto -->
                <p class="Texto wow fadeIn">O HTML (HyperText Markup Language) é uma linguagem de marcação que informa aos navegadores
                como estruturar e exibir as páginas web. A versão atual é a 5.0, lançada em 2012. A sintaxe HTML é
                definida pelo World Wide Web Consortium (W3C).</p>
                <p class="Texto wow fadeIn">O HTML é uma habilidade fundamental para o desenvolvimento web, pois é a linguagem que define
                a estrutura e boa parte da aparência de um website. Se você deseja seguir uma carreira em
                desenvolvimento web, o HTML é um excelente ponto de partida.</p>
                <br>
                <p class="Subtopico"><strong>Anatomia de um documento html</strong></p>
                <div class="container-code">
        <div class="code-section">
            <div class="typewriter">
                <strong><pre><code>&lt;!DOCTYPE html&gt;
               &lt;html&gt;
                    &lt;head&gt;
                        <span class="code-color">&lt;title&gt;</span>My HTML Page<span class="code-color">&lt;title&gt;</span>
                        &lt;!-- This is the Document Header --&gt;
                    &lt;/head&gt;
                    <span class="code-color">&lt;body&gt;</span>
                            &lt;!-- This is the Document Body --&gt;
                    <span class="code-color">&lt;/body&gt;</span>
                &lt;/html&gt;</code></pre></strong>
            </div>
        </div>
        <div class="text-section">
            <p class="Texto">O HTML usa elementos e tags para descrever e formatar o conteúdo. As tags consistem em parênteses angulares ao redor do nome da tag, por exemplo &lt;title&gt;. O nome da tag não fazdistinção entre maiúsculas e minúsculas, embora o World Wide Web Consortium (W3C) recomende o uso de minúsculas nas versões atuais do HTML. Essas tags HTML são usadas para construir elementos HTML</p>
        </div>
        </div>
        <br>
        <p class="Texto">A tag <strong><span class="code-color">&lt;title&gt;</span></strong> é um exemplo de tag de abertura de um elemento HTML que define
        o título de um documento HTML. No entanto, um elemento possui dois outros componentes. Um
        elemento <span class="code-color"><strong>&lt;title&gt;</strong></span> completo seria parecido com este:</p>
        <br>
        <div class="code-smaller">
                <span class="code-color"><strong>&lt;title&gt;</strong></span>My HTML Page<span class="code-color"><span class="code-color"><strong>&lt;/title&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">Aqui, My HTML Page representa o conteúdo do elemento, ao passo que </title> é a tag de fechamento que declara que este elemento está completo.</p>
        <br>
        <!-- Importante -->
        <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                    <p class="Texto">Nem todos os elementos HTML precisam ser fechados; nesses casos, falamos de elementos vazios, elementos de auto-fechamento ou elementos nulos.</p>
                    </div>
                </div>
        <br>
        <p class="Texto">Aqui estão os outros elementos HTML do exemplo anterior:</p>
        <br>
        <div class="typewriter-small">
                <strong>&lt;html&gt;</strong>
                Abrange todo o documento HTML. Contém todas as tags que compõem a página. Também indica que o conteúdo deste arquivo está em linguagem HTML. A tag de fechamento correspondente é: <span class="highlighter"><strong>&lt;/html&gt;</strong></span>
        </div>
        <br>
        <div class="typewriter-small">
                <strong>&lt;head&gt;</strong>
                Um receptáculo para todas as metainformações relacionadas à página. A tag de fechamento correspondente a este elemento é  <span class="highlighter"><strong>&lt;/head&gt;</strong></span>
        </div>
        <br>
        <div class="typewriter-small">
                <strong>&lt;body&gt;</strong>
                Um receptáculo para todas as metainformações relacionadas à página. A tag de fechamento correspondente a este elemento é  <span class="highlighter"><strong>&lt;/body&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">
        As tags &lt;html&gt;, &lt;head&gt;, &lt;body&gt; e &lt;title&gt; são as chamadas tags estruturais, que fornecem o esqueleto básico de um documento HTML. Em particular, elas informam o navegador web de que ele está lendo uma página HTML.
        </p>
        <br>
        <!-- Fique Atento -->
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloFiqueAtento">
                        <i class="fa-solid fa-person-circle-exclamation"></i> 
                            FIQUE ATENTO 
                    </div>
                    <div class="CaixaConteudo ConteudoFiqueAtento">
                        <p class="Texto">Dentre esses elementos HTML, o único que é necessário para um documento HTML ser validado é a tag &lt;title&gt;.
                        </p>
                    </div>
                </div>
                <br>
        <p class="Texto">Como se vê, cada página HTML é um documento bem estruturado que poderia ser comparado a uma árvore, na qual o elemento &lt;html&gt; representa a raiz e os elementos &lt;head&gt; e &lt;body&gt; são os primeiros galhos. O exemplo mostra que é possível aninhar elementos. Assim, o elemento &lt;title&gt; é aninhado dentro de &lt;head&gt;, que por sua vez é aninhado dentro de &lt;html&gt;.</p>
        <br>
        <p class="Texto">Para garantir que seu código HTML possa ser lido e mantido, todos os elementos HTML devem estar fechados corretamente e em ordem. Os navegadores web ainda serão capazes de exibir seu site conforme o esperado, mas o aninhamento incorreto de elementos e suas tags é uma prática que pode causar erros.</p>
        <br>
        <p class="Texto">Finalmente, uma menção especial à declaração doctype que aparece no alto da estrutura do documento de nosso exemplo. <span class="code-color"><strong>&lt;!DOCTYPE&gt;</strong></span> não é uma tag HTML, mas uma instrução para o navegador web que especifica a versão do HTML usada no documento. Na estrutura básica do documento HTML vista anteriormente, usamos <span class="code-color"><strong>&lt;!DOCTYPE&gt;</strong></span>, especificando que o HTML5 foi usado no documento.</p>
        <br>
        <p class="Subtopico"><strong>Comentários em HTML</strong></p>
        <p class="Texto">Ao criar uma página HTML, é recomendável inserir comentários no código para melhorar sua legibilidade e descrever a finalidade dos blocos de código maiores. As tags &lt;!-- e --&gt; indicam os comentários, como mostrado no exemplo a seguir:</p>
        <div class="typewriter-small">
                &lt;!--Isto é um comentário--&gt;<br>
                &lt;!--Isto são<br>
                múltiplos<br>
                comentários--&gt;
        </div>
        <p class="Texto">O exemplo demonstra que os comentários, no HTML, podem ser postos em uma única linha, mas também podem se estender por várias linhas. De qualquer maneira, o resultado é que o texto entre &lt;!-- e --&gt; é ignorado pelo navegador web e, portanto, não é exibido na página HTML. Com base nessas considerações, podemos deduzir que a página HTML básica mostrada no parágrafo <strong>“Anatomia de um documento HTML”</strong> não exibe nenhum texto, porque as linhas &lt;!-- This is the Document Header --&gt; e &lt;!-- This is the Document Body --&gt; são apenas dois comentários.</p>
        <br>
        <!-- Importante -->
        <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p class="Texto">Os cometários <strong>não</strong> podem ser aninhados.</p>
                    </div>
                </div>
                <br>
        <p class="Subtopico"><strong>Atributos HTML</strong></p>
        <p class="Texto">As tags HTML podem incluir um ou mais atributos para especificar detalhes do elemento HTML.
        Uma tag simples com dois atributos tem o seguinte formato:</p>
        <br>
        <div class="typewriter-small">
                <span class="code-color">&lt;tag</span> <span class="blue-code">attribute-a=</span> <span class="orange-code">"value-a"</span> <span class="blue-code">attribute-b=</span><span class="orange-code">"value-b"</span><span class="code-color">&gt;</span>
        </div>
        <p class="Texto">Os atributos devem ser definidos na tag de abertura.</p>
        <p class="Texto">Um atributo consiste em um nome, que indica a propriedade a ser definida, um sinal de igual, mais o valor desejado entre aspas. As aspas podem ser simples ou duplas, mas recomenda-se manter o uso de aspas simples ou duplas de forma consistente em todo o projeto. É importante não misturar aspas simples e duplas em um mesmo valor de atributo, pois o navegador web não reconhecerá aspas mistas como uma unidade</p>
        <br>
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">É possível incluir um tipo de aspas dentro do outro tipo sem problemas. Por exemplo, se for preciso usar ' no valor de um atributo, podemos envolver esse valor com ". Todavia, se você quiser usar o mesmo tipo de aspas dentro do valor e em torno dele, será necessário usar &quot; para " e &apos; para '.</p>
                    </div>
        </div>
        <br>
        <p class="Texto">Os atributos podem ser categorizados em atributos genéricos e atributos específico conforme explicado nas seções a seguir.</p>
        <br>
        <p class="Subtopico"><strong>Atributos Genéricos</strong></p>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">title</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Descreve o conteúdo do elemento. Seu valor é geralmente exibido como como uma dica de contexto quando o usuário passa o cursor sobre o elemento.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-texto"><span class="code-color">id</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Associa um identificador único a um elemento. Esse identificador deve ser único dentro do documento; este não será validado se vários elementos compartilharem o mesmo id.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">style</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Atribui propriedades gráficas (estilos CSS) ao elemento</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">class</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Especifica uma ou várias classes para o elemento em uma lista de nomes de classes separados por espaços. Essas classes podem ser referenciadas em folhas de estilo CSS.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">lang</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Especifica o idioma do conteúdo do elemento usando códigos de idioma de dois caracteres no padrão ISO-639.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="attecion">
            <div class="notice">NOTE</div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">O desenvolvedor pode armazenar informações personalizadas sobre um elemento definindo um atributo data-, que é indicado prefixando o nome desejado com data-, como em data-additionalinfo. Este atributo pode receber um valor, como qualquer outro atributo.</p>
            </div>
        </div>
        <br>

        <p class="Subtopico"><strong>Atributos Específicos</strong></p>
        
        <p class="Texto">Outros atributos são específicos a cada elemento HTML. Por exemplo, o atributo src de um elemento HTML <span class="code-color"><strong> &lt;img&gt;</strong></span> especifica a URL de uma imagem. Existem muitos outros atributos específicos, que serão abordados nas próximas lições</p>
        <br>
        <p class="Subtopico"><strong>Cabeçalho do documento</strong></p>
        <p class="Texto">O cabeçalho do documento define as metainformações sobre a página e é descrito pelo elemento &lt;head&gt;. Por padrão, as informações no cabeçalho do documento não são processadas pelo navegador web. Embora seja possível incluir, dentro do elemento &lt;head&gt;, elementos HTML que podem ser exibidos na página, a prática não é recomendada.</p>
        <br>
        <ul class="Texto">
            <li><strong>Título:</strong> O título do documento é especificado com o elemento &lt;title&gt;. O título definido entre as tags aparece na barra de título do navegador e é o nome sugerido quando a página é salva nos Favoritos. Ele também é exibido como título da página nos resultados do mecanismo de busca. </li>
        </ul>
        <br>
        <p class="Texto">Eis um exemplo do uso desse elemento:</p>
        <br>
        <div class="code-smaller">
                <span class="code-color"><strong>&lt;title&gt;</strong></span>My Test Page<span class="code-color"><span class="code-color"><strong>&lt;/title&gt;</strong></span>
        </div>
        <br>
        <p class="Texto">A tag &lt;title&gt; é obrigatória em todos os documentos HTML e deve aparecer somente uma vez por documento.</p>
        <br>
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">Não confunda o título do documento com o cabeçalho da página, que é definido nocorpo</p>
                    </div>
        </div>
        <br>
        <p class="Subtopico"><strong>Metadados</strong></p>
        <p class="Texto">O elemento &lt;meta&gt; é usado para especificar metainformações, de maneira a descrever melhor o conteúdo de um documento HTML. Trata-se de um elemento de auto-fechamento, ou seja, ele não tem uma tag de fechamento. Além dos atributos genéricos, que são válidos para todos os elementos HTML, o elemento &lt;meta&gt; também usa os seguintes atributos:
        </p>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">name</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Define quais metadados serão descritos neste elemento. Pode ser definido para qualquer valor personalizado, mas os valores comumente usados são <em>author, description e keywords..</em></p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-texto"><span class="code-color">http-equiv</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Fornece um cabeçalho HTTP para o valor do atributo <em>content</em>. Um valor comum é <em>refresh</em>, que será explicado mais tarde. Se este atributo for definido, o atributo name não deve ser definido.</p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">content</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Fornece o valor associado ao atributo <em>name</em> ou <em>http-equiv.</em>
                </p>
            </div>
        </div>
        <br>
        <div class="attecion">
            <div class="notice" id="especial-text"><span class="code-color">charset</span></div>
            <div class="separator"></div>
            <div class="notice-side">
                <p class="Texto">Especifica a codificação de caracteres para o documento HTML, por exemplo <em>utf-8</em> para configurá-lo para o Unicode Transformation Format—8-bit.</p>
            </div>
        </div>
        <br>
        <p class="Subtopico"><strong>Adicionar um autor, descrição e palavras-chave</strong></p>
        <p class="Texto">Usando a tag &lt;meta&gt;, podemos incluir informações adicionais sobre o autor da página HTML e descrever o conteúdo da página, desta forma:</p>
        <br>
        <div class="typewriter-small">
                <span class="code-color">&lt;meta</span> <span class="blue-code">name=</span> <span class="orange-code">"author"</span> <span class="blue-code">content=</span><span class="orange-code">"Name Surname"</span><span class="code-color">&gt;</span><br>
                <span class="code-color">&lt;meta</span> <span class="blue-code">name=</span> <span class="orange-code">"description"</span> <span class="blue-code">content=</span><span class="orange-code">"A short summary of the page content"</span><span class="code-color">&gt;</span><br>
        </div>
        <br>
        <p class="Texto">Procure incluir uma série de palavras-chave relacionadas ao conteúdo da página na descrição. Essa descrição costuma ser a primeira coisa que um usuário vê ao navegar com um mecanismo de busca.</p>
        <p class="Texto">Se quiser incluir palavras-chave adicionais relacionadas à página para os mecanismos de busca, adicione o seguinte elemento:</p>
        <br>
        <div class="typewriter-small">
        <span class="code-color">&lt;meta</span> <span class="blue-code">name=</span> <span class="orange-code">"keywords"</span> <span class="blue-code">content=</span><span class="orange-code">"keyword1, keyword2, keyword3, keyword4, keyword5"</span><span class="code-color">&gt;</span>
        </div>
        <br>
        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            NOTE 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p class="Texto">No passado, os spammers inseriam centenas de palavras-chave e descrições que não tinham nada a ver com o conteúdo real da página, de forma que elas também apareciam em pesquisas não relacionadas aos termos que as pessoas procuravam. Hoje em dia, as tags &lt;meta&gt; foram relegadas a uma posição de importância secundária e são usadas apenas para consolidar os tópicos tratados na página em si; portanto, não é mais possível enganar os novos e mais sofisticados algoritmos dos mecanismos de busca</p>
                    </div>
        </div>
        <br>
        <p class="Subtopico"><strong>Redirecionar uma página HTML e definir um intervalo de tempo para que o
        documento se atualize</strong></p>
        <br>
        <p class="Texto">Usando a tag &lt;meta&gt;, é possível atualizar automaticamente uma página HTML depois de um período determinado (por exemplo, após 30 segundos), desta forma:</p>
        <div class="typewriter-small">
        <span class="code-color">&lt;meta</span> <span class="blue-code">http-equiv=</span> <span class="orange-code">"refresh"</span> <span class="blue-code">content=</span><span class="orange-code">"30"</span><span class="code-color">&gt;</span>
        </div>
        <br>
        <p class="Texto">Outra alternativa é redirecionar uma página web para outra página web após o mesmo período de tempo com o seguinte código:</p>
        <br>
        <div class="typewriter-small">
        <span class="code-color">&lt;meta</span> <span class="blue-code">http-equiv=</span> <span class="orange-code">"refresh"</span> <span class="blue-code">content=</span><span class="orange-code">"30;url=http://www.lpi.org"</span><span class="code-color">&gt;</span>
        </div>
        <p class="Texto">Neste exemplo, o usuário é redirecionado da página atual para <a class="code-color"href="http://www.lpi.org" target="_blank">http://www.lpi.org</a> após 30 segundos. Os valores podem ser os que você preferir. Se especificarmos, por exemplo, content="0;url=http://www.lpi.org", a página será redirecionada imediatamente.</p>
        <br>
        <p class="Subtopico"><strong>Especificar a codificação de caracteres</strong></p>
        <p class="Texto">O atributo <span class="code-color">charset</span> especifica a codificação de caracteres para o documento HTML. Um exemplo comum é:</p>
        <br>
        <div class="typewriter-small">
        <span class="code-color">&lt;meta</span> <span class="blue-code">charset=</span> <span class="orange-code">"utf-8"<span class="code-color">&gt;</span>
        </div>
        <p class="Texto">Este elemento especifica que a codificação de caracteres do documento é utf-8, um conjunto de caracteres universal que inclui praticamente qualquer caractere de qualquer idioma humano. Portanto, ao usá-lo, você evita problemas de exibição que poderiam surgir se escolhesse outros conjuntos de caracteres, como o ISO-8859-1 (o alfabeto latino).
        </p>
        <br>
        <p class="Subtopico"><strong>Outros exemplos úteis</strong></p>
        <p class="Texto">Eis duas outras aplicações úteis da tag &lt;meta&gt;:</p>
        <br>
        <ul class="Texto">
            <li>Configurar cookies para rastrear um visitante do site.</li>
            <li>Assumir o controle da janela de visualização (a área visível de uma página web dentro de uma janela do navegador), que depende do tamanho da tela do dispositivo do usuário (por exemplo, um telefone celular ou um computador).</li>
        </ul>
        <br>
        <p class="Texto">No entanto, esses dois exemplos estão além do escopo do exame e são citados aqui como mera
        curiosidade.</p>
        <br>
        </div>
        </div>
    </div>
    <a href="../../questoesModulo01/unidade01.php" class="button">Atividades</a>

<?php include('../../layouts/footer.php') ?>

</body>
</html>
