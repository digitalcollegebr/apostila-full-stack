<?php
    // A_S - Header
    include('../layouts/header.php');
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
                <!-- Titulo -->
                <p class="Titulo">Titulo</p>
                <br>
                <!-- Texto -->
                <p class="Texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <br>
                <!-- Texto com efeito -->
                <p class="Texto wow fadeIn" data-wow-delay="0.3s">
                    Texto com efeito de fade, utilizando o wow Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quaerat atque aut deserunt mollitia ut saepe, dignissimos repudiandae, doloremque quas repellat excepturi consectetur. Porro voluptate beatae, totam minima vero ipsam? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </p>
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
<?php include('../layouts/footer.php') ?>

</body>

</html>