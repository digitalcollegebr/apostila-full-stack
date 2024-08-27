<?php
    include('layouts/header.php');
    include_once('conn/conn.php');
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

    <?php 
        // A_S - Nav
        include('layouts/nav.php'); 
    ?>    

    <!-- CONTEUDO - Begin -->
    <!-- Back to top -->
    <a id="BackToTop"></a>


    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <!-- Titulo -->
                <p class="Titulo">A vida Pré-Internet</p>
                <br>
                <!-- Texto -->
                <p class="Texto wow fadeIn" data-wow-delay="0.3s">Antes da internet, nos comunicavamos principalmente por telefone, cartas, telefones públicos, jornais impressos, para acesso às notícias, telegramas, fax, este único bastante utilizado no meio corporativo. Acredite se quiser, não era instantâneo, com exceção do telefone, o qual exigia um bom tempo de planejamento e recursos para adquiri-lo, o tempo de espera para poder ter uma resposta exigia tempo e paciência</p>
                <br>
                <center><img class="wow zoomIn" data-wow-delay="0.3s" src="./imagens/imagem_01.png" alt="Imagem de um telefone antigo vermelho e ao lado imagem de um telegrama ambos ojetos são antigos"></center>
                <br>
                <p class="Texto wow fadeIn" data-wow-delay="0.3s">
                Muitos filmes, principalmente, de ficção científica, tinham símbolos de alta tecnologia, como relógios com com pequenos monitores, se comunicando como em uma videochamada, carros andando sozinhos, casas inteligentes, dentre muitas outras.
                <br>
                </p>
                <p class="Texto wow fadeIn" data-wow-delay="0.3s">
                Mas a ideia dessas tecnologias serem tão avançadas para o início da década de 90, tinha sido prevista por grandes cientistas como Nikola Tesla. Em uma entrevista, em 1926, para a revista Colliers, Tesla previu, como os editores iriam escrever, “comunicando-se instantaneamente por meio de um simples equipamento de bolso". Suas palavras transmitem uma imagem muito mais grandiosa, e mais precisa, de uma imagem do futuro:
                <br>
                </p>
                <!-- Citação -->
                <div class="Citacao">
                    <p>“Quando o sem fio for perfeitamente aplicado o mundo inteiro será convertido em um grande cérebro, o que de fato é… Seremos capazes de nos comunicar um com os outros, instantaneamente, independente da distância. Não apenas isso, mas através da televisão e da telefonia seríamos capazes de ver e ouvir uns aos outros perfeitamente como se estivéssemos frente a frente, apesar da distância de milhares de quilômetros; e os instrumentos pelos quais seremos capazes de fazer isso serão surpreendentemente simples em comparação com nosso telefone atuais. Um homem será capaz de carregá-lo no bolso do colete.”</p>
                    <p class="citacao blockquote-footer"><strong>(Jones (2020, p7))</strong></p>
                </div>
                <br>
                
                <br>
                <!-- Apresentação -->
                <div>
                    <p class="BoxApresentacao wow zoomIn" data-wow-delay="0.3s">
                        Olá, Nome_Usuario bem-vindo ao curso Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque corporis quo non id rerum, ipsam cum dicta itaque. Modi sed maiores quam harum nobis iure itaque possimus vero nihil corrupti.
                    </p>
                </div>
                <br>
                <!-- Subtopico -->
                <p class="Subtopico">Subtopico</p>
                <p class="Texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <br>
                <!-- Box Rosa -->
                <div class="BoxRosa">
                    <p class="wow fadeIn" data-wow-delay="0.3s">
                        Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <br>
                <!-- Box Amarelo -->
                <div class="BoxAmarelo">
                    <p class="wow fadeIn" data-wow-delay="0.3s">
                        Lorem ipsum dolor sit amet <strong>consectetur adipisicing</strong> elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. <strong>Porro voluptate beatae, totam minima vero ipsam?</strong> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <br>
                <!-- Lista  -->
                <ul class="Lista">
                    <li class="wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="fa fa-dot-circle text-success"></i> Opção 01
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="fa fa-dot-circle text-success"></i> Opção 02
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="fa fa-dot-circle text-success"></i> Opção 03
                    </li>
                    <li class="wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="fa fa-dot-circle text-success"></i> Opção 04
                    </li>
                </ul>
                <br>
                <!-- Formulário para Filtrar Questões -->
                <form method="get" action="">
                    <label for="modulo">Escolha o módulo:</label>
                    <select name="modulo" id="modulo">
                        <option value="1">Módulo 1</option>
                        <option value="2">Módulo 2</option>
                        <!-- Adicione outros módulos conforme necessário -->
                    </select>
                    <input type="submit" value="Filtrar Questões">
                </form>
                <!-- Exibição das questões -->
                <?php
                // Obtém o módulo desejado (pode ser passado via URL ou formulário)
                $modulo = isset($_GET['modulo']) ? intval($_GET['modulo']) : 1;

                // Consulta o banco de dados para obter as questões do módulo especificado
                $sql = "SELECT id, enunciado, correta FROM questoes WHERE modulo = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $modulo);
                $stmt->execute();
                $result = $stmt->get_result();

                // Exibe as questões
                while ($row = $result->fetch_assoc()) {
                    $pergunta_id = $row['id'];
                    $pergunta = $row['enunciado'];
                    $resposta_correta = $row['correta'];

                    echo "<form method='post' action=''>";
                    echo "<p><strong>Pergunta:</strong> " . htmlspecialchars($pergunta) . "</p>";
                    echo "<input type='hidden' name='pergunta_id' value='" . $pergunta_id . "'>";
                    echo "<input type='text' name='resposta' placeholder='Digite sua resposta' required>";
                    echo "<input type='submit' value='Validar Resposta'>";
                    echo "</form>";

                    // Processamento da resposta
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pergunta_id'])) {
                        $resposta_usuario = $_POST['resposta'];
                        $correta = ($resposta_usuario === $resposta_correta) ? "Correta" : "Incorreta";
                        echo "<p>Resposta: $correta</p>";
                    }
                }

                $stmt->close();
                $conn->close();
                ?>
                <!-- Accordion -->
                <div class="Accordion wow fadeInLeftBig" data-wow-delay="0.3s">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false">
                        <h5>Accordion<span class="fw-lighter"><br>(Clique aqui para saber mais)</span></h5>
                    </button>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <br>
                <!-- Caixas -->
                <!-- Importante -->
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloImportante">
                        <i class="fa-solid fa-triangle-exclamation"></i> 
                            IMPORTANTE
                    </div>
                    <div class="CaixaConteudo ConteudoImportante">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- Fique Atento -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloFiqueAtento">
                        <i class="fa-solid fa-person-circle-exclamation"></i> 
                            FIQUE ATENTO 
                    </div>
                    <div class="CaixaConteudo ConteudoFiqueAtento">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- CAIXA DE TEXTO REFLITA -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloReflita">
                        <i class="fa-solid fa-head-side-virus"></i> 
                            REFLITA 
                    </div>
                    <div class="CaixaConteudo ConteudoReflita" >
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- CAIXA DE TEXTO EXEMPLO -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloExemplo">
                        <i class="fa-regular fa-pen-to-square"></i> 
                            EXEMPLO 
                    </div>
                    <div class="CaixaConteudo ConteudoExemplo">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- CAIXA DE TEXTO SAIBA MAIS -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloSaibaMais">
                        <i class="fa-solid fa-plus"></i> 
                            SAIBA MAIS 
                        </div>
                    <div class="CaixaConteudo ConteudoSaibaMais">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- CAIXA DE TEXTO CURIOSIDADE -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloCuriosidade">
                        <i class="fa-solid fa-magnifying-glass"></i> 
                        CURIOSIDADE 
                    </div>
                    <div class="CaixaConteudo ConteudoCuriosidade">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- CAIXA DE TEXTO RESUMO -->
                <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                    <div class="Caixa TituloResumo">
                        <i class="bi bi-bookmark-fill"></i> 
                            RESUMO 
                    </div>
                    <div class="CaixaConteudo ConteudoResumo">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi obcaecati magni saepe. Eum unde nisi, a quis laboriosam quam iste expedita quia non ad, iure, quaerat nostrum voluptatum.</p>
                    </div>
                </div>
                <br>
                <!-- Citação -->
                <div class="Citacao">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <p class="citacao blockquote-footer"><strong>(Jones (2020, p7))</strong></p>
                </div>
                <br>
                <!-- Referências -->
                <h2 class="Titulo">Referências</h2><br>
                <p class="Texto"> <i class="bi bi-book me-2"></i>
                    Referencia aqui
                </p>

                <!-- Barra de Processo -->
                <div id="progress-bar"></div>

            </div> <!-- /. col-md-12 col-sm-12 col-lg-12 -->
        </div> <!-- /. row -->
    </div> <!-- /.container -->
    <!-- CONTEUDO - End -->
<!-- FOOTER -->
<?php include('./layouts/footer.php') ?>

</body>

</html>