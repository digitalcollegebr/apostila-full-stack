CREATE DATABASE questoes;
CREATE TABLE questoes(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    numero INT NOT NULL,
	enunciado VARCHAR(1255) NOT NULL,
	item_a VARCHAR(1255) NOT NULL,
	item_b VARCHAR(1255) NOT NULL,
	item_c VARCHAR(1255) NOT NULL,
	item_d VARCHAR(1255) NOT NULL,
	item_certo CHAR(1),
    unidade INT NOT NULL,
    modulo INT NOT NULL
);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo)
VALUES
(1, 'O que é necessário para fechar corretamente uma tag HTML?', 'Apenas usar uma barra "/"', 'Apenas abrir outra tag', 'Usar uma barra "/" na tag de fechamento', 'Colocar um ponto e vírgula ";" no final da tag', 'C', 1, 1),

(2, 'Qual é a principal função da sintaxe em HTML?', 'Melhorar o desempenho do navegador.', 'Garantir que o código HTML seja escrito de maneira correta e compreensível pelo navegador.', 'Aumentar a segurança do site.', 'Facilitar a criação de animações.', 'B', 1, 1),

(3, 'Qual é a função da tag `<article>` no HTML5?', 'Criar um link para outra página.', 'Definir um conteúdo independente e auto-contido.', 'Inserir uma imagem.', 'Estilizar texto em negrito.', 'B', 1, 1),

(4, 'Qual tag deve ser usada para marcar um bloco de conteúdo principal em HTML5?', '<section>', '<main>', '<header>', '<footer>', 'B', 1, 1),

(5, 'Qual tag semântica é usada para definir o rodapé de uma página ou seção?', '<header>', '<footer>', '<aside>', '<section>', 'B', 1, 1),

(6, 'Qual é a função principal da tag `<header>` no HTML5?', 'Definir um rodapé para o documento.', 'Criar um link para uma página externa.', 'Definir um cabeçalho para um documento ou seção.', 'Inserir uma imagem.', 'C', 1, 1),

(7, 'Qual das seguintes tags HTML é um exemplo de elemento semântico?', '<div>', '<span>', '<header>', '<b>', 'C', 1, 1);


INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual das opções a seguir representa o maior nível de título em HTML?', '<h1>', '<h3>', '<h6>', '<h4>', 'A', 2, 1),
(2, 'Qual é a diferença entre <h1> e <h6>?', 'Ambas são usadas para marcar texto em negrito', '<h1> é o maior título e <h6> o menor', '<h6> é o maior título e <h1> o menor', 'Não há diferença', 'B', 2, 1),
(3, 'Qual é a função da tag <blockquote> no HTML?', 'Marcar texto em negrito', 'Indicar uma citação em bloco', 'Criar uma linha horizontal', 'Indicar um parágrafo', 'B', 2, 1),
(4, 'Como você insere um comentário no código HTML?', '<!-- This is a comment -->', '/* This is a comment */', '<!-- This is a comment -->', '// This is a comment', 'C', 2, 1),
(5, 'Qual tag HTML é usada para criar uma quebra de linha?', '<br>', '<hr>', '<break>', '<line>', 'B', 2, 1),
(6, 'Qual tag HTML é usada para criar uma linha horizontal?', '<line>', '<br>', '<hr>', '<horizontal>', 'D', 2, 1),
(7, 'Qual tag HTML é usada para criar uma lista numerada?', '<ul>', '<ol>', '<li>', '<dl>', 'C', 2, 1),
(8, 'Qual tag HTML é usada para criar uma lista não numerada?', '<ul>', '<ol>', '<li>', '<dl>', 'B', 2, 1),
(9, 'Qual é a função da tag <em> no HTML?', 'Marcar texto em negrito', 'Marcar texto sublinhado', 'Enfatizar o texto', 'Criar um parágrafo', 'C', 2, 1),
(10, 'Qual tag HTML é usada para definir texto pré-formatado?', '<pre>', '<code>', '<samp>', '<kbd>', 'A', 2, 1),
(11, 'Qual tag HTML é usada para agrupar um bloco de texto ou elementos de um site?', '<div>', '<span>', '<section>', '<div>', 'D', 2, 1),
(12, 'Qual é a função da tag <article> no HTML5?', 'Definir o cabeçalho da página', 'Definir conteúdo independente e de relevância', 'Definir o rodapé da página', 'Agrupar conteúdo relacionado', 'B', 2, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual tag HTML é usada para incorporar uma imagem?', '<img>', '<image>', '<src>', '<pic>', 'A', 3, 1),
(2, 'Qual atributo da tag <img> é obrigatório para especificar a URL da imagem?', 'href', 'src', 'link', 'url', 'B', 3, 1),
(3, 'Qual atributo é utilizado para fornecer um texto alternativo para uma imagem em HTML?', 'alt', 'title', 'text', 'description', 'A', 3, 1),
(4, 'Qual tag HTML é usada para incorporar um vídeo?', '<video>', '<media>', '<embed>', '<movie>', 'A', 3, 1),
(5, 'Como você define o tamanho de um vídeo incorporado em HTML?', 'Usando os atributos height e width', 'Usando o atributo size', 'Usando o atributo resolution', 'Usando o atributo dimensions', 'A', 3, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual tag HTML é usada para criar um formulário?', '<form>', '<input>', '<field>', '<submit>', 'A', 4, 1),
(2, 'Qual atributo define o método de envio de um formulário?', 'method', 'action', 'enctype', 'target', 'A', 4, 1),
(3, 'Qual tag HTML é usada para criar uma área de texto grande?', '<textarea>', '<input type="text">', '<textbox>', '<textlarge>', 'A', 4, 1),
(4, 'Como você define um campo de formulário oculto em HTML?', '<input type="hidden">', '<input type="invisible">', '<input type="hide">', '<input type="secret">', 'A', 4, 1),
(5, 'Qual tag HTML é usada para criar uma lista de opções em um formulário?', '<select>', '<option>', '<list>', '<choices>', 'A', 4, 1),
(6, 'Qual tipo de entrada é usado para permitir o upload de arquivos em um formulário?', '<input type="file">', '<input type="upload">', '<input type="document">', '<input type="data">', 'A', 4, 1),
(7, 'Qual atributo define a URL para onde os dados do formulário serão enviados?', 'action', 'method', 'target', 'enctype', 'A', 4, 1),
(8, 'Qual tag HTML é usada para criar um botão de envio em um formulário?', '<input type="submit">', '<button>', '<input type="button">', '<send>', 'A', 4, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual propriedade CSS é usada para alterar a cor de fundo de um elemento?', 'background-color', 'color', 'bgcolor', 'background-style', 'A', 5, 1),
(2, 'Como você aplica uma cor de texto em CSS?', 'color', 'text-color', 'font-color', 'style-color', 'A', 5, 1),
(3, 'Qual propriedade CSS é usada para mudar a fonte de um texto?', 'font-family', 'font-type', 'text-font', 'font-style', 'A', 5, 1),
(4, 'Como você define a espessura de uma borda em CSS?', 'border-width', 'border-thickness', 'border-style', 'border-size', 'A', 5, 1),
(5, 'Qual propriedade CSS é usada para adicionar margem ao redor de um elemento?', 'margin', 'padding', 'border', 'spacing', 'A', 5, 1),
(6, 'Como você define o espaçamento interno de um elemento em CSS?', 'padding', 'margin', 'border', 'spacing', 'A', 5, 1),
(7, 'Qual propriedade CSS é usada para alterar a altura de uma linha de texto?', 'line-height', 'line-width', 'line-spacing', 'line-size', 'A', 5, 1),
(8, 'Como você aplica uma sombra em um texto usando CSS?', 'text-shadow', 'text-decoration', 'font-shadow', 'text-outline', 'A', 5, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(47, 'Qual propriedade CSS é usada para definir a largura total de uma página?', 'width', 'page-width', 'document-width', 'viewport-width', 'A', 6, 1),
(48, 'Como você aplica um estilo a todos os elementos de um tipo específico em uma página usando CSS?', 'usando um seletor de elemento', 'usando um seletor de ID', 'usando um seletor de classe', 'usando um seletor universal', 'A', 6, 1),
(49, 'Qual seletor CSS é usado para aplicar estilos a um elemento com um ID específico?', '#id', '.id', 'id', '*id', 'A', 6, 1),
(50, 'Como você seleciona elementos com uma classe específica em CSS?', '.class', '#class', '*class', 'class', 'A', 6, 1),
(51, 'Qual seletor CSS é usado para aplicar estilos a todos os elementos filhos diretos de um elemento?', '>', '+', '~', ' ', 'A', 6, 1),
(52, 'Como você aplica estilos a elementos que são o primeiro filho de seu tipo em CSS?', ':first-child', ':only-child', ':nth-child(1)', ':first-of-type', 'A', 6, 1),
(53, 'Qual seletor CSS é usado para aplicar estilos a elementos que estão ativos (como links sendo clicados)?', ':active', ':hover', ':focus', ':checked', 'A', 6, 1),
(54, 'Como você aplica estilos a elementos que estão em foco, como um campo de entrada sendo digitado?', ':focus', ':hover', ':active', ':checked', 'A', 6, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual propriedade CSS é usada para alterar a cor do texto?', 'color', 'font-color', 'text-color', 'foreground-color', 'A', 7, 1),
(2, 'Como você define a cor de fundo de um elemento em CSS?', 'background-color', 'bg-color', 'color', 'back-color', 'A', 7, 1),
(3, 'Qual propriedade CSS é usada para definir a largura da borda de um elemento?', 'border-width', 'border-size', 'border-thickness', 'border-style', 'A', 7, 1),
(4, 'Como você define um valor de margem em CSS?', 'margin', 'padding', 'border-spacing', 'spacing', 'A', 7, 1),
(5, 'Qual unidade relativa de comprimento em CSS é baseada no tamanho da fonte do elemento pai?', 'em', 'rem', 'px', '%', 'A', 7, 1),
(6, 'Como você define o tipo de fonte de um texto em CSS?', 'font-family', 'font-type', 'font-style', 'font-weight', 'A', 7, 1),
(7, 'Qual propriedade CSS é usada para definir o tamanho do texto?', 'font-size', 'text-size', 'size', 'text-scale', 'A', 7, 1),
(8, 'Como você define o espaçamento entre as letras em um texto usando CSS?', 'letter-spacing', 'word-spacing', 'text-spacing', 'font-spacing', 'A', 7, 1),
(9, 'Qual propriedade CSS é usada para alinhar o texto ao centro de um elemento?', 'text-align: center', 'align: center', 'text-center', 'font-align', 'A', 7, 1),
(10, 'Como você define uma imagem de fundo que se repete horizontalmente em CSS?', 'background-repeat: repeat-x', 'background-repeat: repeat-y', 'background-repeat: no-repeat', 'background-position: center', 'A', 7, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual é o comportamento padrão dos elementos de bloco no fluxo normal do CSS?', 'Ocupam toda a largura disponível', 'Alinham-se lado a lado', 'Ficam empilhados verticalmente', 'Ocupam o menor espaço possível', 'C', 8, 1),
(2, 'Qual propriedade CSS é usada para alterar o fluxo normal de um elemento?', 'float', 'position', 'overflow', 'display', 'A', 8, 1),
(3, 'Como você faz um design responsivo utilizando CSS?', 'Usando media queries', 'Utilizando display: flex', 'Aplicando float: left', 'Definindo tamanhos fixos em pixels', 'A', 8, 1),
(4, 'Qual é a finalidade da propriedade CSS "clear"?', 'Evitar que elementos flutuantes afetem elementos subsequentes', 'Remover margens internas de um elemento', 'Desativar a flutuação de elementos', 'Limpar o conteúdo dentro de um elemento', 'A', 8, 1),
(5, 'Como você faz com que um elemento ocupe uma linha inteira em um design responsivo?', 'width: 100%', 'display: block', 'flex: 1', 'float: left', 'A', 8, 1),
(6, 'Qual é o propósito do uso de "media queries" em design responsivo?', 'Aplicar estilos diferentes com base no tamanho da tela', 'Aumentar a performance da página', 'Garantir a compatibilidade entre navegadores', 'Ajustar o layout ao conteúdo', 'A', 8, 1),
(7, 'Qual propriedade CSS é utilizada para definir o comportamento de um elemento em diferentes larguras de tela?', 'min-width', 'max-width', 'width', 'flex-basis', 'B', 8, 1),
(8, 'Como você centraliza um elemento horizontalmente dentro de um container usando flexbox?', 'justify-content: center', 'align-items: center', 'align-content: center', 'flex-direction: center', 'A', 8, 1),
(9, 'Qual unidade de medida é mais adequada para criar layouts responsivos?', '%', 'px', 'em', 'pt', 'A', 8, 1),
(10, 'Como você define que um elemento deve ocupar 100% da altura da tela?', 'height: 100vh', 'height: 100%', 'height: auto', 'min-height: 100%', 'A', 8, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Qual o método HTTP utilizado pela mensagem de solicitação a seguir?\nPOST /cgi-bin/receive.cgi HTTP/1.1\nHost: learning.lpi.org\nUser-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101\nFirefox/87.0\nAccept: */*\nContent-Length: 27\nContent-Type: application/x-www-form-urlencoded', 
 'GET', 'POST', 'PUT', 'DELETE', 'B', 1, 2),
(2, 'Quando um servidor HTTP hospeda muitos sites, como ele identifica para qual deles é feita uma solicitação?', 
 'Pelo campo Content-Type no cabeçalho da solicitação', 'Pelo campo Host no cabeçalho da solicitação', 'Pelo IP da solicitação', 'Pelo User-Agent no cabeçalho da solicitação', 'B', 1, 2),
(3, 'Qual parâmetro é fornecido pela string de solicitação da URL https://www.google.com/search?q=LPI?', 
 'Parâmetro denominado q com o valor LPI', 'Parâmetro denominado search com o valor LPI', 'Parâmetro denominado query com o valor LPI', 'Parâmetro denominado term com o valor LPI', 'A', 1, 2),
(4, 'Por que a solicitação HTTP a seguir não é adequada para armazenamento em cache?\nPOST /cgi-bin/receive.cgi HTTP/1.1\nHost: learning.lpi.org\nUser-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101\nFirefox/87.0\nAccept: */*\nContent-Length: 27\nContent-Type: application/x-www-form-urlencoded', 
 'Porque o método GET não é adequado para cache', 'Porque o método POST implica em uma operação de escrita no servidor', 'Porque o cabeçalho Accept não permite cache', 'Porque o cabeçalho Content-Type é inválido para cache', 'B', 1, 2);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(5, 'Que tipo de programa pode ser usado para editar um código-fonte?', 
 'Um editor de imagens', 'Um programa de planilhas', 'Um editor de texto simples', 'Um software de gerenciamento de banco de dados', 'C', 1, 2),
(6, 'Que tipo de ferramenta ajuda a integrar o trabalho de diferentes desenvolvedores na mesma base de código?', 
 'Um editor de texto', 'Um sistema de controle de origem ou versão', 'Uma ferramenta de design gráfico', 'Um software de modelagem de dados', 'B', 1, 2);
 
 INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(7, 'Qual linguagem de programação é usada junto com o HTML para criar clientes de aplicativos web?', 'Python', 'Java', 'Ruby', 'JavaScript', 'D', 1, 2),
(8, 'Como a obtenção de um aplicativo web difere daquela de um aplicativo nativo?', 'Um aplicativo web é instalado no dispositivo do usuário.', 'Um aplicativo nativo é executado em um navegador web comum.', 'Um aplicativo web não está instalado. Em vez disso, partes dele são executadas no servidor e a interface do cliente é executada em um navegador web comum.', 'Um aplicativo nativo é executado em um navegador web comum.', 'C', 1, 2),
(9, 'Como um aplicativo web difere de um aplicativo nativo no acesso ao hardware local?', 'Todos os acessos aos recursos locais são feitos diretamente pelo aplicativo nativo.', 'O navegador não requer autorização explícita do usuário para acessar recursos locais.', 'Todos os acessos aos recursos locais são mediadas pelo navegador e requerem autorização explícita do usuário para funcionar.', 'O navegador acessa os recursos locais sem a necessidade de autorização do usuário.', 'C', 1, 2),
(10, 'Cite uma característica de um cliente de aplicativo web que o diferencia de uma página web comum.', 'A página web comum não pode enviar formulários.', 'A interação com as páginas web tradicionais é mais próxima de uma interface de aplicativo convencional.', 'A interação com os clientes de aplicativos web restringe-se basicamente a hiperlinks e envio de formulários.', 'Os clientes de aplicativos web oferecem uma experiência mais rica e interativa, mais próxima de uma interface de aplicativo convencional.', 'D', 1, 2);
