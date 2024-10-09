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
                </div>

            </div>
        </div>
    </div>    
</body>
<?php
    include('../../layouts/footer.php')
?>