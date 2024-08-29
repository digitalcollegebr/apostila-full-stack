CREATE DATABASE questoes;
DROP TABLE questoes;

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
(1, 'Que tipo de programa pode ser usado para editar um código-fonte?', 'Processador de texto', 'Editor de imagens', 'Editor de texto simples', 'Reprodutor de mídia', 'C', 1, 1),
(2, 'Que tipo de ferramenta ajuda a integrar o trabalho de diferentes desenvolvedores na mesma base de código?', 'Editor de texto', 'Sistema de controle de origem ou versão', 'Gerenciador de arquivos', 'Compilador', 'B', 1, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo)
VALUES
(1, 'Qual linguagem de programação é usada junto com o HTML para criar clientes de aplicativos web?', 'PHP', 'JavaScript', 'Python', 'Java', 'B', 2, 1),
(2, 'Como a obtenção de um aplicativo web difere daquela de um aplicativo nativo?', 'Um aplicativo web deve ser instalado em seu dispositivo.', 'Um aplicativo web é executado em um navegador e não está instalado localmente.', 'Um aplicativo web oferece acesso completo ao hardware local.', 'Um aplicativo web requer uma conexão de rede dedicada para funcionar.', 'B', 2, 1),
(3, 'Como um aplicativo web difere de um aplicativo nativo no acesso ao hardware local?', 'Aplicativos web têm acesso irrestrito a todos os recursos locais.', 'Aplicativos web não podem acessar recursos locais sem a permissão do usuário.', 'Aplicativos nativos acessam recursos locais através de APIs web.', 'Aplicativos nativos não têm acesso a recursos locais.', 'B', 2, 1),
(4, 'Cite uma característica de um cliente de aplicativo web que o diferencia de uma página web comum.', 'Acesso a recursos do sistema de arquivos local.', 'Interação básica restrita a hiperlinks e envio de formulários.', 'Capacidade de realizar interações semelhantes a um aplicativo convencional.', 'Capacidade de funcionar sem conexão com a internet.', 'C', 2, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo)
VALUES
(1, 'Qual o método HTTP utilizado pela mensagem de solicitação a seguir? POST /cgi-bin/receive.cgi HTTP/1.1 Host: learning.lpi.org User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0 Accept: */* Content-Length: 27 Content-Type: application/x-www-form-urlencoded', 'GET', 'POST', 'PUT', 'DELETE', 'B', 3, 1),
(2, 'Quando um servidor HTTP hospeda muitos sites, como ele identifica para qual deles é feita uma solicitação?', 'Pela URL completa na solicitação', 'Pelo endereço IP do cliente', 'Pelo cabeçalho `Host` na solicitação HTTP', 'Pela data e hora da solicitação', 'C', 3, 1),
(3, 'Qual parâmetro é fornecido pela string de solicitação da URL https://www.google.com/search?q=LPI?', 'search', 'q', 'LPI', 'query', 'B', 3, 1),
(4, 'Por que a solicitação HTTP a seguir não é adequada para armazenamento em cache? POST /cgi-bin/receive.cgi HTTP/1.1 Host: learning.lpi.org User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0 Accept: */* Content-Length: 27 Content-Type: application/x-www-form-urlencoded', 'Porque utiliza o método POST', 'Porque a URL contém parâmetros de consulta', 'Porque o cabeçalho `Accept` não permite cache', 'Porque o cabeçalho `Content-Length` é muito grande', 'A', 3, 1);

INSERT INTO questoes (numero, enunciado, item_a, item_b, item_c, item_d, item_certo, unidade, modulo) VALUES
(1, 'Para cada uma das seguintes tags, indique a tag de fechamento correspondente:', 
    '</body>', '</head>', '</html>', '<meta> None', 'D', 4, 1),
    
(2, 'Qual é a diferença entre uma tag e um elemento? Use esta entrada como referência: <title>Título da página HTML</title>.', 
    'Um elemento HTML consiste em uma tag de abertura, uma tag de fechamento e tudo o que está entre elas. As tags HTML são usadas para demarcar o início ou o fim de um elemento.', 
    'Uma tag HTML é a parte do código que pode ou não estar acompanhada de conteúdo, enquanto um elemento HTML é a combinação de uma tag de abertura, uma tag de fechamento e o conteúdo entre elas.', 
    'Uma tag HTML é usada para definir a estrutura de um documento, enquanto um elemento HTML pode definir a aparência do documento.', 
    'Uma tag HTML pode estar sozinha e não requer uma tag de fechamento, mas um elemento HTML sempre tem uma tag de abertura e uma tag de fechamento.', 
    'B', 4, 1),
    
(3, 'Quais são as tags que indicam um comentário?', 
    'Os comentários são inseridos entre as tags <!-- e --> e podem estar em uma única linha ou estender-se por múltiplas linhas.', 
    'Os comentários são inseridos entre as tags <!-- e --> e devem estar em uma única linha.', 
    'Os comentários são inseridos entre as tags <!-- e --> e não podem estender-se por múltiplas linhas.', 
    'Os comentários são inseridos entre as tags <!-- e --> e só podem estar em uma única linha.', 
    'A', 4, 1),
    
(4, 'Explique o que é um atributo e dê alguns exemplos para a tag <meta>.', 
    'Os atributos são usados para especificar mais precisamente um elemento HTML. A tag <meta> usa atributos como name, content, e charset para definir informações sobre o documento.', 
    'Os atributos são usados para definir a cor e o tamanho de um elemento HTML. Exemplos para a tag <meta> incluem color e size.', 
    'Os atributos são usados para especificar mais precisamente a formatação de um elemento HTML. Exemplos para a tag <meta> incluem type e style.', 
    'Os atributos são usados para definir o conteúdo do elemento HTML. Exemplos para a tag <meta> incluem id e class.', 
    'A', 4, 1);


